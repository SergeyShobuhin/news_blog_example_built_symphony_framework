<?php

namespace App\Form\DataTransformer;

use App\Entity\Tag;
use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class TagTransformer implements DataTransformerInterface
{
    public function __construct(
        private readonly TagRepository $tagRepository
    )
    {
    }

    public function transform($value): string
    {
        if (null === $value) {
            return '';
        }

        $array = [];
        foreach ($value as $tag) {
            $array[] = $tag->getName();
        }

        return implode(',', $array);
    }

    public function reverseTransform(mixed $value = null): ArrayCollection
    {
        if (!$value) {
            return new ArrayCollection();
        }

        $items = explode(",", $value);
        $items = array_map("trim", $items);
        $items = array_unique($items);

        $tags = new ArrayCollection();

        foreach ($items as $item) {
            $tag = $this->tagRepository->findOneBy(['name' => $item]);

            if (!$tag) {
                $tag = (new Tag())->setName($item);
            }

            $tags->add($tag);
        }

        return $tags;
    }
}