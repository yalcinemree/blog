<?php namespace Blog\Articles;

interface ArticlesInterface {
    public function addArticle($param);
    public function getArticle($articleId);
    public function articleList($pages, $page_limit);
}