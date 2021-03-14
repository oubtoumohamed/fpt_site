<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EtudientController;
use App\Article;
use App\Categorie;
use App\Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $articles = Article::limit(12)->orderBy('id', 'desc')->get();
        $sliders = Slider::limit(4)->orderBy('id', 'desc')->get();
        $categories = Categorie::all();

        return $this->view_('frontend.home',[
            'articles'=>$articles,
            'categories'=>$categories,
            'sliders'=>$sliders
        ]);
    }

    public function articles(Request $request)
    {
        $articles = Article::where($this->filter(false))
                        ->orderBy($this->orderby, 'desc')->paginate(12);

        $categories = Categorie::all();

        return $this->view_('frontend.article.all',[
            'articles'=>$articles,
            'categories'=>$categories
        ]);
    }

    public function cat_articles(Request $request, $label)
    {
        $categorie = Categorie::where('label',$label)->firstOrFail();

        $articles = Article::where('categorie', $categorie->id)
                        ->orderBy($this->orderby, 'desc')->paginate(12);

        $categories = Categorie::all();

        return $this->view_('frontend.article.all',[
            'articles'=>$articles,
            'categories'=>$categories
        ]);
    }

    
    public function article($lien)
    {
        $article = Article::where('lien',$lien)->firstOrFail();

        return $this->view_('frontend.article.article',[
            'article'=>$article
        ]);
    }


    public function admin()
    {
        return $this->view_('home');
    }
}
