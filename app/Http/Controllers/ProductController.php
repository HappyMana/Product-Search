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
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function top()
    {
        return view("top");
    }

    public function productSearch()
    {
        return view("search");
    }

    public function getRakutenItems(ProductRequest $request, Product $product)
    {

        if (is_null($request["search"]["keyword"]) && is_null($request["search"]["category"])) {
            return redirect("/search");
        }

        $keyword = $request["search"]["keyword"];
        $category = $request["search"]["category"];
        $price_lower = $request["search"]["price_lower"];
        $price_upper = $request["search"]["price_upper"];
        $sort = $request["search"]["sort"];
        
        //楽天APIを扱うRakutenRws_Clientクラスのインスタンスを作成
        $client = new RakutenRws_Client();
        
        define("RAKUTEN_APPLICATION_ID" , 1069883906759248801);
        // アプリID (デベロッパーID) をセット
        $client->setApplicationId(RAKUTEN_APPLICATION_ID);

        // IchibaItem/Search API から検索
        $response = $client->execute("IchibaItemSearch", array(
            "keyword" => $keyword,
            "genreId" => $category,
            "minPrice" => $price_lower,
            "maxPrice" => $price_upper,
            "sort" => $sort,
            "hits" => 30,
            "page" => $product->page()->currentPage(),
            "imageFlag" => 1
        ));

        if ($response->isOk()) {
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

                switch (count($rekutenItem["mediumImageUrls"])) {
                    case 1:
                        $items[$key]["mediumImageUrl1"] = $rekutenItem["mediumImageUrls"][0]["imageUrl"];
                        break;
                    case 2:
                        $items[$key]["mediumImageUrl1"] = $rekutenItem["mediumImageUrls"][0]["imageUrl"];
                        $items[$key]["mediumImageUrl2"] = $rekutenItem["mediumImageUrls"][1]["imageUrl"];
                        break;
                    case 3:
                        $items[$key]["mediumImageUrl1"] = $rekutenItem["mediumImageUrls"][0]["imageUrl"];
                        $items[$key]["mediumImageUrl2"] = $rekutenItem["mediumImageUrls"][1]["imageUrl"];
                        $items[$key]["mediumImageUrl3"] = $rekutenItem["mediumImageUrls"][2]["imageUrl"];
                        break;
                    default;
                }
                $items[$key]["itemUrl"] = $rekutenItem["itemUrl"];
                $items[$key]["shopName"] = $rekutenItem["shopName"];
                $items[$key]["shopUrl"] = $rekutenItem["shopUrl"];
            }

            $request->session()->put("items", $items);

            return view("result")->with(["items" => $items]);
        }

        return redirect("/search");
        
    }

    public function detail(int $key)
    {
        $items = session()->get("items");
        $product_user = new ProductUser();
        $favorited_product_id = $product_user->favoriteProductID($items[$key]["itemCode"]);

        $isFavorite = false;
        $id = NULL;
        if( $favorited_product_id->count() === 1){
            $isFavorite = true;
            $id = $favorited_product_id[0]->id;
        }

        return view("detail", compact("items", "key", "isFavorite", "id"));
    }

    public function about()
    {
        return view("about");
    }
}