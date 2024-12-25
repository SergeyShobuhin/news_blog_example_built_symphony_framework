<?php
namespace App\Entity;

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

//    public function __construct()
//    {
//        $this->author = null;
//    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
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
     */
    public function setAuthor(?User $author): static
    {
        $this->author = $author;
        return $this;
    }

}
