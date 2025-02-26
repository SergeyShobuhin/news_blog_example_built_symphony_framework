<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BlogRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Blog
{
    use TimestampableEntity;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Заполните заголовок')]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    private ?string $text = null;

    #[ORM\ManyToOne(targetEntity: Category::class)]
    #[ORM\JoinColumn(name: 'category_id', referencedColumnName: 'id')]
    private Category|null $category = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    private User|null $user = null;

    #[ORM\JoinTable(name: 'tags_to_blog')]
    #[ORM\JoinColumn(name: 'blog_id', referencedColumnName: 'id')]
    #[ORM\InverseJoinColumn(name: 'tag_id', referencedColumnName: 'id', unique: false)]
    #[ORM\ManyToMany(targetEntity: 'Tag', cascade: ['persist'])]
    private ArrayCollection|PersistentCollection $tags; //

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $percent = null;

    #[Assert\NotBlank]
    #[ORM\Column(type: Types::STRING)]
    private ?string $status = 'pending';

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?DateTime $blockedAt;

    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: 'blog', cascade: ['persist', 'remove'])]
    private ArrayCollection|PersistentCollection $comments;

    public function __construct(UserInterface|User $user)
    {
        $this->user = $user;
    }

    #[ORM\PreUpdate]
    public function setBlockedAtValue(): void
    {
        if ($this->status === 'blocked' && !$this->blockedAt) {
            $this->blockedAt = new DateTime();
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getTags(): ArrayCollection|PersistentCollection
    {
        return $this->tags;
    }

    public function setTags(ArrayCollection $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    public function addTag(Tag $tag): void
    {
        $this->tags[] = $tag;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getPercent(): ?string
    {
        return $this->percent;
    }

    public function setPercent(?string $percent): static
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return Blog
     */
    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getBlockedAt(): ?DateTime
    {
        return $this->blockedAt;
    }

    /**
     * @param DateTime|null $blockedAt
     * @return Blog
     */
    public function setBlockedAt(?DateTime $blockedAt): static
    {
        $this->blockedAt = $blockedAt;

        return $this;
    }

    public function getComments(): ArrayCollection|PersistentCollection
    {
        return $this->comments;
    }
}
