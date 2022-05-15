<?php

namespace App\Form;

use App\Entity\Etudiant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Soutenance;


class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',null,[
                'label' => 'Nom etudiant',
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('prenom',null,[
                'label' => 'Prenom etudiant',
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('numjury',EntityType::class,[
                'class'=>Soutenance::class,
                'choice_label'=>'matricule.nom',
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
            'data_class' => Etudiant::class,
        ]);
    }
}
