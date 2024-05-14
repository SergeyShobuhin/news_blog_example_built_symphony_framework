<?php

namespace App\Form;

use App\Entity\Blog;
use App\Entity\Category;
use App\Form\DataTransformer\TagTransformer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlogType extends AbstractType
{
    public function __construct(private readonly TagTransformer $transformer)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'required' => true,
                'help' => 'Заголовок',
            ])
            ->add('description', TextareaType::class, [
                'required' => true,
                'help' => 'Содежание',
            ])
            ->add('text', TextareaType::class, [
                'required' => false,
                'help' => 'текст',
            ])
            ->add('category', EntityType::class, [
                // ищет варианты из этой записи
                'class' => Category::class,
                'choice_label' => 'name',
                'required' => false,
                'empty_data' => null,
                'placeholder' => '-- выбор категории --',
                'help' => 'Категории'

                // используется для отображение поля выбора,чекбокса или селективных кнопок
                // 'multiple' => true,
                // 'expanded' => true,
            ])
            ->add('tags', TextType::class, array(
                'label' => 'Теги',
                'required' => false,
                'help' => 'Категории'
            ))
        ;

        $builder->get('tags')
            ->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Blog::class,
        ]);
    }
}
