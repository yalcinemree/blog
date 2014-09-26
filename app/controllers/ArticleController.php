<?php

use Blog\Articles\ArticlesInterface;

class ArticleController extends BaseController {
    private $articles;

    function __construct(ArticlesInterface $articles){
        $this->articles = $articles;
    }
    
    public function addArticle()
    {
        return View::make('article.addarticle');
    }

    public function postArticle()
    {
        if(Input::get('title') AND Input::get('text')){
            try{
                $values["title"] = Input::get("title");
                $values["text"]  = Input::get("text");

                $inserted = $this->articles->addArticle($values);
            }
            catch(Exception $e){
                Log::error($e->getMessage());
                return Redirect::route('addArticle')->with(['error'=> $e->getMessage()])->withInput();
            }

            if($inserted){
                return Redirect::route('home')->with(['message'=>'Başarıyla kaydedildi.']);
            }
            else{
                return Redirect::route('addArticle')->with(['error'=>'DB hata oluştu.'])->withInput();
            }
        }
        else {
            return Redirect::route('addArticle')->with(['error'=>'Boş alanları doldurunuz'])->withInput();
        }
    }

    public function article($id)
    {
        try{
            $article = $this->articles->getArticle($id);
        }
        catch(Exception $e){
            Log::error($e->getMessage());
        }

        return View::make('article.articlepost',compact('article'));
    }

} 