<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Requests\ProductRequest;
use RakutenRws_Client;

class ProductController extends Controller
{
    public function home(){
        $products = Product::all();
        return view("layouts/top")->with(["products" => $products]);
    }
    
    public function productSearch(){
        return view("layouts/search");
    }
    
    public function getRakutenItems(Product $product, ProductRequest $request){
        
        dd($product);
        
        $client = new RakutenRws_Client();
        // アプリID (デベロッパーID) をセットします
        $client->setApplicationId('1069883906759248801');

        // アフィリエイトID をセットします(任意)
        $client->setAffiliateId('20bd65de.feeed3d8.20bd65df.7df9ca74');

        // IchibaItem/Search API から、keyword=うどん を検索します
        $response = $client->execute('IchibaItemSearch', array(
          'keyword' => 'うどん'
        ));
        
        // レスポンスが正しいかを isOk() で確認することができます
        if (! $response->isOk()) {

            return'Error:'.$response->getMessage();

        } else {
            $items = array();

            foreach ($response as $key => $rekutenItem) {
                // 利用データを配列に代入
                $items[$key]['title'] = $rekutenItem['itemName'];
                $items[$key]['price'] = $rekutenItem['itemPrice'];
                if($rekutenItem['imageFlag']) {
                    $imgSrc = $rekutenItem['mediumImageUrls'][0]['imageUrl'];
                    $items[$key]['img_src'] = preg_replace('/^http:/', 'https:', $imgSrc);
                }

            }
            // return response()->json($response->getData()); 
            return $items;
        }
    }
    
}
