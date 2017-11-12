<?php
namespace MIK\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prodName', ChoiceType::class, [
                'choices' => [
                    'Refrigerator/Freezer' => 'REFRIGERATOR',
                    'Gas Stove, Fyer, Burner' => 'GAS STOVE, FYER, BURNER',
                    'Sink/Counter' => 'SINK, COUNTER',
                    'Serving Cart/Moving Cart' => 'SERVING CART, MOVING CART',
                    'Office' => 'OFFICE',
                    'Security' => 'SECURITY',
                    'Vault' => 'VAULT',
                    'Construction Material' => 'CONSTRUCTION MATERIAL',
                ]
            ])
            ->add('prodActName')
            ->add('prodType', ChoiceType::class, [
                'choices' => [
                    'Vertical Type' => 'VERTICAL TYPE',
                    'Horizontal Type' => 'HORIZONTAL TYPE',
                    'Multipurpose Refrigerator' => 'MULTIPURPOSE REFRIGERATOR',
                    'Multipurpose Freezer' => 'MULTIPURPOSE FREEZER',
                    'Table Type' => 'TABLE TYPE',
                    'Side Refrigerator' => 'SIDE REFRIGERATOR',
                    'Water Storage Refrigerator' => 'WATER STORAGE REFRIGERATOR'
                ]
            ])
            ->add('prodSize')
            ->add('prodPrice')
            ->add('prodQuantity')
            ->add('prodStatus', ChoiceType::class, [
                'choices' => [
                    'Available' => 'AV',
                    'Not Available' => 'NA',
                ]
            ])
            ->add('prodImage')
        ;
    }
}