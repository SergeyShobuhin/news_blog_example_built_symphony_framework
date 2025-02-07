<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

#[ORM\Entity]
class Comment
{
    use TimestampableEntity;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'text')]
    private string $content;

    #[ORM\ManyToOne(targetEntity: Blog::class, inversedBy: 'comments')]
    private ?Blog $blog;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'author_id', referencedColumnName: 'id', nullable: false)]
    private ?User $author;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'replies')]
    #[ORM\JoinColumn(name: 'parent_id', referencedColumnName: 'id', nullable: true)]
    private ?self $parent;

    #[ORM\OneToMany(targetEntity: self::class, mappedBy: 'parent', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $replies;

    public function __construct()
    {
        $this->replies = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Comment
     */
    public function setId(?int $id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Comment
     */
    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return Blog|null
     */
    public function getBlog(): ?Blog
    {
        return $this->blog;
    }

    /**
     * @param Blog|null $blog
     * @return Comment
     */
    public function setBlog(?Blog $blog): static
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getAuthor(): ?User
    {
        return $this->author;
    }

    /**
     * @param User|null $author
     * @return Comment
     */
    public function setAuthor(?User $author): static
    {
        $this->author = $author;

        return $this;
    }

    public function getParent(): ?Comment
    {
        return $this->parent;
    }

    public function setParent(?Comment $parent): static
    {
        $this->parent = $parent;

        return $this;
    }

    public function getReplies(): Collection
    {
        return $this->replies;
    }

    public function setReplies(Collection $replies): static
    {
        $this->replies = $replies;

        return $this;
    }

    public function addReply(self $reply): self
    {
        if (!$this->replies->contains($reply)) {
            $this->replies->add($reply);
            $reply->setParent($this);
        }

        return $this;
    }

    public function removeReply(self $reply): self
    {
        if ($this->replies->contains($reply)) {
            $this->replies->removeElement($reply);
            $reply->setParent(null);
        }

        return $this;
    }
}
