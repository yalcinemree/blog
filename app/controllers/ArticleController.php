<?php

class ArticleController extends BaseController {

    public function addArticle()
    {
        return View::make('article.addarticle');
    }

    public function postArticle()
    {
        if(Input::get('title') AND Input::get('text')){
            try{
                $article = new Article;
                $article->title= Input::get('title');
                $article->text= Input::get('text');
                $article->userId= Auth::id();
                $inserted = $article->save();
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
            $article = Article::with('user')
                                ->with('comment.user')
                                ->with(
                                    ['comment' => function($query){
                                            $query->orderBy('comment.iDate','desc');
                                        }
                                    ]
                                )
                                ->where('id','=', $id)->first();
        }
        catch(Exception $e){
            Log::error($e->getMessage());
        }
        return View::make('article.articlepost',compact('article'));
    }

} 