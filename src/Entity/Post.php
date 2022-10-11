<?php
namespace App\Entity;

class Post
{
    private ?int $id;

    private string $content;

    private \DateTimeInterface $publishedAt;

    private User $author;

    private array $likedBy;


    public function __construct()
    {
        $this->publishedAt = new \DateTimeImmutable();
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

   

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of publishedAt
     */ 
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set the value of publishedAt
     *
     * @return  self
     */ 
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get the value of likedBy
     */ 
    public function getLikedBy()
    {
        return $this->likedBy;
    }

    /**
     * Set the value of likedBy
     *
     * @return  self
     */ 
    public function setLikedBy($likedBy)
    {
        $this->likedBy = $likedBy;

        return $this;
    }
}