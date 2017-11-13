<?php

namespace MIK\WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;

class RegistrationController extends BaseController
{
    public function registerAction(Request $request)
    {
        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');
        $user = $userManager->createUser();
        $user->setEnabled(true);
        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);
        if ($event->getResponse() !== null) {
            return $event->getResponse();
        }
        $form = $formFactory->createForm();
        $form->setData($user);
        $form->handleRequest($request);
        $error = $form->getErrors(true);
        $errors = [];
        if ($form->isSubmitted()) {
            foreach ($error as $err) {
                $errors[$err->getOrigin()->getConfig()->getName()] = $err->getMessage();
            }
            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
                $userManager->updateUser($user);
                
                $this->container->get('logger')->info(
                    sprintf("New user registration: %s", $user)
                );
                if (($response = $event->getResponse()) === null) {
                    $url = $this->generateUrl('fos_user_registration_confirmed');
                    $response = new RedirectResponse($url);
                }
                $dispatcher->dispatch(
                    FOSUserEvents::REGISTRATION_COMPLETED,
                    new FilterUserResponseEvent($user, $request, $response)
                );
                return $response;
            }
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, $event);
            if (($response = $event->getResponse()) !== null) {
                return $response;
            }
        }
        return $this->render('@FOSUser/Registration/register.html.twig', [
            'form' => $form->createView(), 'errors' => $errors,
        ]);
    }
}