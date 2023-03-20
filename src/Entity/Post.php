<?php

namespace App\Entity;


//déclaration de la classe Post
class Post{

    //déclaration des attributs
    private $id;
    private $title;
    private $content;
    private $author;
    private $created_at;
    private $updated_at;


    //déclaration du constructeur
    public function __construct( $id, $title, $content, $author, $created_at, $updated_at ){
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    //déclaration des getters et setters de chaque variables
    //pour id
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    //pour title
    public function getTitle(): ?String
    {
        return $this->title;
    }

    public function setTitle(String $title): self
    {
        $this->title = $title;
        return $this;
    }


    //pour content
    public function getContent(): ?String
    {
        return $this->content;
    }

    public function setContent(String $content): self
    {
        $this->content = $content;
        return $this;
    }


    //pour author
    public function getAuthor(): ?String
    {
        return $this->author;
    }

    public function setAuthor(String $author): self
    {
        $this->author = $author;
        return $this;
    }


    //pour created_at
    public function getCreated_at(): ?String
    {
        return $this->created_at;
    }

    public function setCreated_at(String $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }


    //pour updated_at
    public function getUpdated_at(): ?String
    {
        return $this->id;
    }

    public function setUpdated_at(String $updated_at): self
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function __toString()
    {
   return "L'id est $this->id  ";
    }





}



?>