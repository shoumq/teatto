<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Request;

class MainController extends Controller
{
    public function index()
    {
        $productSale = Product::where('sale', 1)->get();
        return view('index', compact('productSale'));
    }

    public function admin()
    {
        $productObject = Product::all();
        return view('admin', compact('productObject'));
    }

    public function category($category)
    {
        $categoryObject = Category::where('code', $category)->first();
        $products = Product::where('category_id', $categoryObject->id)->get();
        return view('market', compact('categoryObject', 'products'));
    }

    public function categories()
    {
        $categoryAll = Category::all();
        return view('categories', compact('categoryAll'));
    }

    public function product($product)
    {
        $productObject = Product::where('code', $product)->first();
        return view('product', compact('productObject'));
    }

    public function succes()
    {
        return view('succes');
    }

    public function PLSubmit(Request $request)
    {
        $email = $request::all()["email"];
        $phone = $request::all()["phone"];

        $msg = "%0ATeatto - Прайс Лист%0AEmail: " . $email .
            "%0AТелефон: " . $phone;

        file_get_contents("https://api.telegram.org/bot5425154635:AAFv6UwCnIKv39nrT34ynC6Dd7LyPtfZCZA/sendMessage?chat_id=-745363422&text=" . $msg);

        return Redirect::to('/');
    }

    public function BSubmit()
    {
        $product_id = Request::all()["product_id"];
        $product_title = Request::all()["product_title"];
        $product_price = Request::all()["product_price"];
        $email = Request::all()["email"];
        $phone = Request::all()["phone"];
        $address = Request::all()["address"];
        $comment = Request::all()["comment"];
        $count = Request::all()["product_count"];

        $msg = "%0ATeatto - Покупка%0AEmail: " . $email .
            "%0AТелефон: " . $phone .
            "%0AАдрес: " . $address .
            "%0AКомметарий: " . $comment .
            "%0AЦена: " . $product_price .
            "%0AНазвание: " . $product_title .
            "%0AКоличество: " . $count .
            "%0AID: " . $product_id;

        file_get_contents("https://api.telegram.org/bot5425154635:AAFv6UwCnIKv39nrT34ynC6Dd7LyPtfZCZA/sendMessage?chat_id=-745363422&text=" . $msg);

        return Redirect::to('/');
    }

    public function PRSubmitAdmin($product) {
        $productObject = Product::where('code', $product)->first();
        $productObject->update([
            'title' => 'Черный чай "Зимняя вишня1'
        ]);
        dd($productObject);
    }
}
