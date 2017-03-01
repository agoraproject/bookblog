<?php

namespace BookBlog\Domain;

class Comment 
{
    /**
     * Comment id.
     *
     * @var integer
     */
    private $id;

    /**
     * Comment author.
     *
     * @var \BookBlog\Domain\User
     */
    private $author;

    /**
     * Comment content.
     *
     * @var integer
     */
    private $content;


    /**
     * Associated article.
     *
     * @var \BookBlog\Domain\Article
     */
    private $article;

    /**
     * Associated comment parent.
     *
     * @var \BookBlog\Domain\Comment
     */
    private $parent;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor(User $author) {
        $this->author = $author;
        return $this;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function getArticle() {
        return $this->article;
    }

    public function setArticle(Article $article) {
        $this->article = $article;
        return $this;
    }

    public function getParent() {
        return $this->parent;
    }

    public function setParent(Comment $parent) {
        $this->parent = $parent;
        return $this;
    }
}
