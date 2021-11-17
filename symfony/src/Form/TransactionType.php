<?php

namespace App\Form;

use App\Entity\Transaction;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Account;

class TransactionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('sum')
            ->add('label')
            ->add('debitAccount', EntityType::class, [
                'class' => Account::class,
                'choice_label' => 'iban'
            ])
            ->add('creditAccount', EntityType::class, [
                'class' => Account::class,
                'choice_label' => 'iban'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transaction::class,
        ]);
    }
}
