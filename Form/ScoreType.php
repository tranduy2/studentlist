<?php

namespace App\Form;

use App\Entity\Score;
use App\Entity\Subject;
use App\Entity\Student;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ScoreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Subject', EntityType::class, [
                // looks for choices from this entity
                'class' => Subject::class,

                'choice_label' => 'Name'])
            ->add('Student', EntityType::class, [
                // looks for choices from this entity
                'class' => Student::class,

                'choice_label' => 'Name'])
            ->add('Point1')
            ->add('Point2')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Score::class,
        ]);
    }
}
