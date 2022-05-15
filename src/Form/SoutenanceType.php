<?php

namespace App\Form;

use App\Entity\Soutenance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Enseignant;


class SoutenanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateSoutenance',null,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('note',null,[
                'attr'=>[
                    'class'=>'form-control has-danger',
                ]
            ])
            ->add('matricule',EntityType::class,[
                'class'=>Enseignant::class,
                'choice_label'=>'nom',
                'label' => 'Membre du jury',
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Soutenance::class,
        ]);
    }
}
