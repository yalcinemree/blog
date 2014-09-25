<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


    public function home()
    {

        $articles = Article::leftJoin('users', 'article.userId', '=', 'users.id')
                            ->paginate(2);

        return View::make('article.articlelist',array('articles'=>$articles));
    }

    public function signup()
    {
        return View::make('user.signup');
    }

    public function userCreate()
    {
        if(Input::get('name') AND Input::get('surname') AND Input::get('email') AND Input::get('password')){
            try{
                $user = new User;
                $user->name= Input::get('name');
                $user->surname= Input::get('surname');
                $user->email= Input::get('email');
                $user->password= Hash::make(Input::get('password'));
                $inserted = $user->save();
            }
            catch(Exception $e){
                Log::error($e->getMessage());
                return Redirect::route('signup')->with(['error'=> 'Beklenmedik bir hata oluştu, kayıt yapılamadı.'])->withInput();
            }

            if($inserted){
                return Redirect::route('home')->with(['message'=>'Başarıyla kaydedildi.']);
            }
            else{
                return Redirect::route('signup')->with(['error'=>'DB hata oluştu.'])->withInput();
            }
        }
        else {

            return Redirect::route('signup')->with(['error'=>'Boş alanları doldurunuz'])->withInput();
        }
    }

    public function login()
    {
        $user = Auth::user();
        if(!empty($user->id)){
            return Redirect::route('home');
        }

        return View::make('user.login');
    }

    public function postLogin()
    {
        if(Input::get('email') AND Input::get('password')){

            $email = Input::get( 'email' );
            $password = Input::get( 'password' );

            if (Auth::attempt(array('email' => $email, 'password' => $password)))
            {
                return Redirect::route('home');

            }else{

                return Redirect::route('login')->with(['error'=>'hta'])->withInput();

            }

        }else {

            return Redirect::route('login')->with(['error'=>'Boş alanları doldurunuz'])->withInput();
        }
    }
    public function getLogout() {
        Auth::logout();
        return Redirect::route('home');
    }

    public function addArticle(){
        return View::make('addarticle');
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

    public function article($id){

        try{
            $article = Article::where('id','=', $id)->first();
            if($article){
                $article->toArray();
                $c['comment'] = Comment::where('articleId',$id)->orderBy('iDate','desc')->get();
                $c['users'] = User::all()->toArray();
                return View::make('article.articlepost',compact('article'))->with('c', $c);
            }
        }
        catch(Exception $e){
            Log::error($e->getMessage());
        }

    }

    public function comment()
    {
        if(Input::get('articleId') AND Input::get('userId') AND Input::get('comment')){
            if(Auth::check()){
                try{
                    $comment = new Comment;
                    $comment->articleId= Input::get('articleId');
                    $comment->userId= Input::get('userId');
                    $comment->comment= Input::get('comment');
                    $comment->save();
                }
                catch(Exception $e){
                    Log::error($e->getMessage());
                }
            }
        }

        $c['comment'] = Comment::where('articleId',Input::get('articleId'))->orderBy('iDate','desc')->get();
        $c['users'] = User::all()->toArray();
        return View::make('comment')->with('c', $c);

    }

}
