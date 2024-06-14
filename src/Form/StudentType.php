<?php

namespace App\Form;

use App\Entity\Student;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Asset\Packages;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Security\Core\User\UserInterface;

class StudentType extends AbstractType
{
    private $projectDir;
    private $authorizationChecker;
    private $user;

    public function __construct(ParameterBagInterface $parameterBag, AuthorizationCheckerInterface $authorizationChecker, ?UserInterface $user)
    {
        $this->projectDir = $parameterBag->get('kernel.project_dir');
        $this->authorizationChecker = $authorizationChecker;
        $this->user = $user;
    }

    private function getAvatars(): array
    {
        $avatarsDir = $this->projectDir . '/public/assets/img/avatar';
        $avatars = [];

        if ($handle = opendir($avatarsDir)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    $avatars[$entry] = $entry;
                }
            }
            closedir($handle);
        }

        return $avatars;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('avatar', ChoiceType::class, [
                'choices' => $this->getAvatars(),
                'expanded' => true,
                'multiple' => false,
                'attr' => ['class' => 'avatar-grid'],
                'choice_attr' => function($choice, $key, $value) {
                    // adds a class like attending_yes, attending_no, etc
                    return ['class' => 'avatar-item'];
                },
            ]);

        if ($this->authorizationChecker->isGranted('ROLE_ADMIN')) {
            $builder->add('parent', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'username',
            ]);
        } else {
            $builder->add('parent', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'username',
                'attr' => ['style' => 'display:none'],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}