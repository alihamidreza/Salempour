<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use SEO;
use SEOMeta;
use OpenGraph;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index()
    {
        SEO::setTitle('مقالات');
        SEO::setDescription('مقالات درباره قایق و اتاقک ها و کامپوزیت های وانت و پراید');
        SEO::opengraph()->setUrl('https://pishgamcomposite.ir/articles');
        SEO::setCanonical('https://pishgamcomposite.ir/articles');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@pishgamcomposte');
        $categories = Category::all();
        $articles = Article::latest()->paginate(6);
        return view('articles.all' , compact('articles' ,'categories'));
    }

    public function single(Article $article)
    {
        SEO::setTitle($article->title);
        SEO::setDescription(strip_tags(str_limit($article->body)));
        SEO::opengraph()->setUrl("https://pishgamcomposite.ir/articles/{$article->slug}");
        SEO::setCanonical("https://pishgamcomposite.ir/articles/{$article->slug}");
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@pishgamcomposte');
        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription(strip_tags(str_limit($article->body)));
        SEOMeta::addMeta('article:published_time', $article->created_at, 'property');
        SEOMeta::addMeta('article:section', $article->title, 'property');
        SEOMeta::addKeyword([$article->tags]);

        OpenGraph::setDescription(strip_tags(str_limit($article->body)));
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl("https://pishgamcomposite.ir/articles/{$article->slug}");
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'ir-fa']);

        OpenGraph::addImage($article->images['images']['321']);
        OpenGraph::addImage($article->images['images']['321']);
        OpenGraph::addImage(['url' => "https://pishgamcomposte/".$article->images['images']['321'], 'size' => 300]);
        OpenGraph::addImage("https://pishgamcomposte/".$article->images['images']['321'], ['height' => 300, 'width' => 300]);

        // Namespace URI: http://ogp.me/ns/article#
        // article
        OpenGraph::setTitle($article->title)
            ->setDescription(strip_tags(str_limit($article->body)))
            ->setType('article')
            ->setArticle([
                'published_time' => $article->created_at,
                'modified_time' => $article->updated_at,
                'expiration_time' => 'datetime',
                'author' => "$article->writer",
                'section' => 'string',
                'tag' => "$article->tags"
            ]);

        $article->increment('viewCount');
        $categories = Category::all();
        return view('articles.single' ,  compact('article' , 'categories'));
    }

}
