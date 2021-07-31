<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use App\ProductUser;
use App\Http\Requests\ProductRequest;
use RakutenRws_Client;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function top(){
        $products = Product::all();
        return view("top")->with(["products" => $products]);
    }

    public function productSearch(){
        return view("search");
    }

    public function getRakutenItems(ProductRequest $request, Product $product){

        $keyword = $request["search"]["keyword"];
        $category = $request["search"]["category"];
        $price_lower = $request["search"]["price_lower"];
        $price_upper = $request["search"]["price_upper"];
        $sort = $request["search"]["sort"];

        $client = new RakutenRws_Client();
        // アプリID (デベロッパーID) をセットします
        $client->setApplicationId("1069883906759248801");

        // アフィリエイトID をセットします(任意)
        $client->setAffiliateId("20bd65de.feeed3d8.20bd65df.7df9ca74");

        // IchibaItem/Search API から、keyword を検索します
        $response = $client->execute("IchibaItemSearch", array(
            "keyword" => $keyword,
            "genreId" => $category,
            "minPrice" => $price_lower,
            "maxPrice" => $price_upper,
            "sort" => $sort,
            "hits" => 16,
            "page" => $product->page()->currentPage(),
            "imageFlag" => 1
        ));

        // dd($response);

        // レスポンスが正しいかを isOk() で確認することができます
        if (! $response->isOk()) {

            return"Error:".$response->getMessage();

        } else {
            $items = array();

            foreach ($response as $key => $rekutenItem) {
                // 利用データを配列に代入
                $items[$key]["itemName"] = $rekutenItem["itemName"];
                $items[$key]["catchcopy"] = $rekutenItem["catchcopy"];
                $items[$key]["itemCode"] = $rekutenItem["itemCode"];
                $items[$key]["itemPrice"] = $rekutenItem["itemPrice"];
                $items[$key]["itemCaption"] = $rekutenItem["itemCaption"];
                $items[$key]["reviewCount"] = $rekutenItem["reviewCount"];
                $items[$key]["reviewAverage"] = $rekutenItem["reviewAverage"];
                $items[$key]["mediumImageUrl1"] = $rekutenItem["mediumImageUrls"][0]["imageUrl"];
                $items[$key]["mediumImageUrl2"] = $rekutenItem["mediumImageUrls"][1]["imageUrl"];
                $items[$key]["mediumImageUrl3"] = $rekutenItem["mediumImageUrls"][2]["imageUrl"];
                $items[$key]["itemUrl"] = $rekutenItem["itemUrl"];
                $items[$key]["shopName"] = $rekutenItem["shopName"];
                $items[$key]["shopUrl"] = $rekutenItem["shopUrl"];

                // $imgSrc = $rekutenItem["mediumImageUrls"][0]["imageUrl"];
                // $items[$key]["img_src"] = preg_replace("/^http:/", "https:", $imgSrc);

            }
            // $items[16] = $response["pageCount"];
            // dd($items);

            $request->session()->put("items", $items);

            return view("result")->with(["items" => $items]);
        }
    }

    public function detail(int $key)
    {
        $items = session("items", array());
        return view("detail", compact("items", "key"));
    }
    
    public function store(int $key, Product $product, User $user, ProductUser $productuser)
    {
        if (Auth::check()) {
            $items = session("items", array());
            // dd($items[$key]);
            $product->fill($items[$key])->save();
            $productuser->product_id=$product->id;
            $id = Auth::id();
            $productuser->user_id=$id;
            $productuser->save();
        
            return redirect("/search/result/" . $key);
        } else {
            return redirect("/home");
        }

    }

    public function about()
    {
        return view("about");
    }

}