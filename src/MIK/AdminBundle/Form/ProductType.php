<?php
namespace MIK\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prodName')
            ->add('prodActName')
            ->add('prodType')
            ->add('prodSize')
            ->add('prodPrice')
            ->add('prodQuantity')
            ->add('prodStatus')
        ;
    }
}