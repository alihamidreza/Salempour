<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use SEO;
use SEOMeta;
use OpenGraph;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        SEO::setTitle('محصولات');
        SEO::setDescription('محصولات درباره قایق و اتاقک ها و کامپوزیت های وانت و پراید');
        SEO::opengraph()->setUrl('https://pishgamcomposite.ir/products');
        SEO::setCanonical('https://pishgamcomposite.ir/products');
        SEO::opengraph()->addProperty('type', 'products');
        SEO::twitter()->setSite('@pishgamcomposte');
        $categories = Category::all();
        $products = Product::latest()->paginate(6);
        return view('products.all' , compact('products' ,'categories'));
    }

    public function single(Product $product)
    {
        SEO::setTitle($product->title);
        SEO::setDescription(str_limit($product->body));
        SEO::opengraph()->setUrl("https://pishgamcomposite.ir/products/{$product->slug}");
        SEO::setCanonical("https://pishgamcomposite.ir/products/{$product->slug}");
        SEO::opengraph()->addProperty('type', 'products');
        SEO::twitter()->setSite('@pishgamcomposte');
        SEOMeta::setTitle($product->title);
        SEOMeta::setDescription(str_limit($product->body));
        SEOMeta::addMeta('product:published_time', $product->created_at, 'property');
        SEOMeta::addMeta('product:section', $product->title, 'property');
        SEOMeta::addKeyword($product->tags);

        OpenGraph::setDescription(str_limit($product->body));
        OpenGraph::setTitle($product->title);
        OpenGraph::setUrl("https://pishgamcomposite.ir/products/{$product->slug}");
        OpenGraph::addProperty('type', 'product');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'ir-fa']);

        OpenGraph::addImage($product->images['images']['321']);
        OpenGraph::addImage($product->images['images']['321']);
        OpenGraph::addImage(['url' => "https://pishgamcomposte/".$product->images['images']['321'], 'size' => 300]);
        OpenGraph::addImage("https://pishgamcomposte/".$product->images['images']['321'], ['height' => 300, 'width' => 300]);

        // Namespace URI: http://ogp.me/ns/product#
        // product
        OpenGraph::setTitle($product->title)
            ->setDescription(str_limit($product->body))
            ->setType('product')
            ->setArticle([
                'published_time' => $product->created_at,
                'modified_time' => $product->updated_at,
                'expiration_time' => 'datetime',
                'author' => "$product->title",
                'section' => 'string',
                'tag' => "$product->tags"
            ]);

        $categories = Category::all();
        return view('products.single' ,  compact('product' , 'categories'));
    }
}
