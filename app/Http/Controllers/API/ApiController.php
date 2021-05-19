<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use JsonSerializable;

class ApiController extends Controller
{

    // CURL REQUEST
    function curl($domain, $data, $method) {
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $domain,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }

    // Get Domain
    function get_domain($id){
        $store = Store::where('id',$id)->where('active',1)->firstorfail();
        $domain = explode('//', $store->domain);

        return $domain[0] . '//' . $store->key . ':' . $store->secret . '@' . $domain[1];
    }

    /*
    |--------------------------------------------------------------------------
    | CATEGORY
    |--------------------------------------------------------------------------
    */
    function get_categories(Request $request, $id){
        
        $domain = $this->get_domain($id);

        $data = Http::get($domain . '/admin/api/2021-04/custom_collections.json')->json();
        
        if($request->title){
            $count = count($data['custom_collections']);
            for($i=0; $i < $count; $i++){
                if(!str_contains(strtolower($data['custom_collections'][$i]['title']), strtolower($request->title))){
                    unset($data['custom_collections'][$i]);
                }
                
            }
        }
        if($request->updated_at){
            $count = count($data['custom_collections']);
            for($i=0; $i < $count; $i++){
                if(explode('T',$data['custom_collections'][$i]['updated_at'])[0] != $request->updated_at){
                    unset($data['custom_collections'][$i]);
                }
            }
        }
        if($request->updated_after){
            $count = count($data['custom_collections']);
            for($i=0; $i < $count; $i++){
                if(explode('T',$data['custom_collections'][$i]['updated_at'])[0] <= $request->updated_after){
                    unset($data['custom_collections'][$i]);
                }
            }
        }
        if($request->updated_before){
            $count = count($data['custom_collections']);
            for($i=0; $i < $count; $i++){
                if(explode('T',$data['custom_collections'][$i]['updated_at'])[0] >= $request->updated_before){
                    unset($data['custom_collections'][$i]);
                }
            }
        }
        
        if(!empty($data->custom_collection)){
            $data['categories'] = $data['custom_collections'];
            unset($data['custom_collections']);
        }
        
        return $data;
    }

    function get_category(Request $request, $id, $id2){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/custom_collections/' . $id2 . '.json')->json();

        if(!empty($data->custom_collection)){
            $data['category'] = $data['custom_collection'];
            unset($data['custom_collection']);
        }
        
        return $data;
    }

    function post_category(Request $request, $id) {
        $domain = $this->get_domain($id);

        $decode = $this->curl(
            $domain . '/admin/api/2021-04/custom_collections.json',
            json_encode($request->all()),
            'POST'
        );
         
        if(!empty($decode->custom_collection)){
            $decode->category = $decode->custom_collection;
            unset($decode->custom_collection);
        }

        return response()->json($decode);
        
    }

    function put_category(Request $request, $id, $id2) {
        $domain = $this->get_domain($id);
        
        $decode = $this->curl(
            $domain . '/admin/api/2021-04/custom_collections/' . $id2 . '.json',
            json_encode($request->all()),
            'PUT'
        );
        // dd($decode);
        if(!empty($decode->custom_collection)){
            $decode->category = $decode->custom_collection;
            unset($decode->custom_collection);
        }
        
        
        return response()->json($decode);

    }

    function delete_category(Request $request, $id, $id2){
        $domain = $this->get_domain($id);

        $data = Http::delete($domain . '/admin/api/2021-04/custom_collections/' . $id2 . '.json');

        return 
        [
            'response' => [
                'Message' => 'Category Deleted Succesfully', 
                'Success' => true, 
                'provider' => 'Shopify', 
                'provider_id' => 1, 
                'resource' => 
                'Deleting Category'
            ]
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | PRODUCT
    |--------------------------------------------------------------------------
    */
    function get_products(Request $request, $id){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/products.json')->json();

        // Title (= , LIKE)
        if($request->title){
            $count = count($data['products']);
            for($i=0; $i < $count; $i++){
                if(!str_contains(strtolower($data['products'][$i]['title']), strtolower($request->title))){
                    unset($data['products'][$i]);
                }
                
            }
        }

        // Handle (=)
        if($request->handle){
            $count = count($data['products']);
            for($i=0; $i < $count; $i++){
                if(strtolower($data['products'][$i]['handle']) != strtolower($request->handle)){
                    unset($data['products'][$i]);
                }
                
            }
        }

        if($request->updated_at){
            $count = count($data['products']);
            for($i=0; $i < $count; $i++){
                if(explode('T',$data['products'][$i]['updated_at'])[0] != $request->updated_at){
                    unset($data['products'][$i]);
                }
            }
        }
        if($request->updated_after){
            $count = count($data['products']);
            for($i=0; $i < $count; $i++){
                if(explode('T',$data['products'][$i]['updated_at'])[0] <= $request->updated_after){
                    unset($data['products'][$i]);
                }
            }
        }
        if($request->updated_before){
            $count = count($data['products']);
            for($i=0; $i < $count; $i++){
                if(explode('T',$data['products'][$i]['updated_at'])[0] >= $request->updated_before){
                    unset($data['products'][$i]);
                }
            }
        }



        
        return $data;
    }

    function get_product(Request $request, $id, $id2){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/products/' . $id2 . '.json')->json();
        return $data;
    }

    function post_product(Request $request, $id) {
        $domain = $this->get_domain($id);

        $decode = $this->curl(
            $domain . '/admin/api/2021-04/products.json',
            json_encode($request->all()),
            'POST'
        );
        // $decode = json_encode($decode, JSON_PRETTY_PRINT);
        
        return response()->json($decode);
        
    }

    function put_product(Request $request, $id, $id2) {
        $domain = $this->get_domain($id);

        $decode = $this->curl(
            $domain . '/admin/api/2021-04/products/' . $id2 . '.json',
            json_encode($request->all()),
            'PUT'
        );
        return response()->json($decode);
        
    }

    function put_product_variant(Request $request, $id, $id2, $id3) {
        $product = $this->get_product(new Request(), $id,$id2);

    
        for ($i=0; $i < count($product['product']['variants']); $i++) { 
            if($product['product']['variants'][$i]['id'] == $id3){
                $product['product']['variants'][$i] = $request ['product']['variants'][0];
            }
        }

        $intercepted_request = $request['product'];
        $intercepted_request = new Request();
        $intercepted_request['product'] = [
            'id' => $id2,
            'variants' => $product['product']['variants']
        ];
        

        $updated_product = $this->put_product($intercepted_request, $id, $id2);
        
        return $updated_product;

    }

    function delete_product(Request $request, $id, $id2){
        $domain = $this->get_domain($id);

        $data = Http::delete($domain . '/admin/api/2021-04/products/' . $id2 . '.json');

        return 
        [
            'response' => [
                'Message' => 'Product Deleted Succesfully', 
                'Success' => true, 
                'provider' => 'Shopify', 
                'provider_id' => 1, 
                'resource' => 
                'Deleting Product'
            ]
        ];
    }

    


    /*
    |--------------------------------------------------------------------------
    | COLLECT
    |--------------------------------------------------------------------------
    */
    function get_collects(Request $request, $id){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/collects.json')->json();
        return $data;
    }

    function get_collect(Request $request, $id, $id2){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/collects/' . $id2 . '.json')->json();
        return $data;
    }

    function post_collect(Request $request, $id) {
        $domain = $this->get_domain($id);

        $decode = $this->curl(
            $domain . '/admin/api/2021-04/collects.json',
            json_encode($request->all()),
            'POST'
        );
        
        return response()->json($decode);
        
    }

    function delete_collect(Request $request, $id, $id2){
        $domain = $this->get_domain($id);

        $data = Http::delete($domain . '/admin/api/2021-04/collects/' . $id2 . '.json');

        return 
        [
            'response' => [
                'Message' => 'Collect Deleted Succesfully', 
                'Success' => true, 
                'provider' => 'Shopify', 
                'provider_id' => 1, 
                'resource' => 
                'Deleting Collect'
            ]
        ];
    }

    function get_product_collects(Request $request, $id, $id2){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/collects.json')->json();
        
        $count = count($data['collects']);
        for($i=0; $i < $count; $i++){
            if($data['collects'][$i]['product_id'] != $id2){
                unset($data['collects'][$i]);
            }
        }

        return $data;
    }
    
    function get_product_variant(Request $request, $id, $id2){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/variants/' . $id2 .  '.json')->json();
        return $data;
    }

    /*
    |--------------------------------------------------------------------------
    | PRICE RULES
    |--------------------------------------------------------------------------
    */
    function get_price_rules(Request $request, $id){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/price_rules.json')->json();
        return $data;
    }

    function get_price_rule(Request $request, $id, $id2){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/price_rules/' . $id2 . '.json')->json();
        return $data;
    }

    function post_price_rule(Request $request, $id) {
        $domain = $this->get_domain($id);

        $decode = $this->curl(
            $domain . '/admin/api/2021-04/price_rules.json',
            json_encode($request->all()),
            'POST'
        );
        
        return response()->json($decode);
        
    }

    function put_price_rule(Request $request, $id, $id2) {
        $domain = $this->get_domain($id);

        $decode = $this->curl(
            $domain . '/admin/api/2021-04/price_rules/' . $id2 . '.json',
            json_encode($request->all()),
            'PUT'
        );
        return response()->json($decode);
        
    }

    function delete_price_rule(Request $request, $id, $id2){
        $domain = $this->get_domain($id);

        $data = Http::delete($domain . '/admin/api/2021-04/price_rules/' . $id2 . '.json');

        return 
        [
            'response' => [
                'Message' => 'Price Rule Deleted Succesfully', 
                'Success' => true, 
                'provider' => 'Shopify', 
                'provider_id' => 1, 
                'resource' => 
                'Deleting Price Rule'
            ]
        ];
    }

    function get_product_price_rules(Request $request, $id, $id2){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/price_rules.json')->json();

        $count = count($data['price_rules']);
        for($i=0; $i < $count; $i++){
            if(!in_array($id2, $data['price_rules'][$i]['entitled_product_ids'])){
                unset($data['price_rules'][$i]);
            }
        }

        return $data;
    }

    /*
    |--------------------------------------------------------------------------
    | DISCOUNT CODES
    |--------------------------------------------------------------------------
    */

    function get_discount_codes(Request $request, $id, $id2){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/price_rules/' . $id2 . '/discount_codes.json')->json();
        return $data;
    }

    function get_discount_code(Request $request, $id, $id2, $id3){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/price_rules/' . $id2 . '/discount_codes/' . $id3 . '.json')->json();
        return $data;
    }

    function post_discount_code(Request $request, $id, $id2) {
        $domain = $this->get_domain($id);

        $decode = $this->curl(
            $domain . '/admin/api/2021-04/price_rules/' . $id2 . '/discount_codes.json',
            json_encode($request->all()),
            'POST'
        );
        
        return response()->json($decode);
    }

    function put_discount_code(Request $request, $id, $id2, $id3) {
        $domain = $this->get_domain($id);

        $decode = $this->curl(
            $domain . '/admin/api/2021-04/price_rules/' . $id2 . '/discount_codes/' . $id3 . '.json',
            json_encode($request->all()),
            'PUT'
        );
        return response()->json($decode);
        
    }

    function delete_discount_code(Request $request, $id, $id2, $id3){
        $domain = $this->get_domain($id);

        $data = Http::delete($domain . '/admin/api/2021-04/price_rules/' . $id2 . '/discount_codes/' . $id3 . '.json');

        return 
        [
            'response' => [
                'Message' => 'Discount Code Deleted Succesfully', 
                'Success' => true, 
                'provider' => 'Shopify', 
                'provider_id' => 1, 
                'resource' => 
                'Deleting Discount Code'
            ]
        ];
    }
    
    /*
    |--------------------------------------------------------------------------
    | ORDERS
    |--------------------------------------------------------------------------
    */
    function get_orders(Request $request, $id){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/orders.json')->json();
        return $data;
    }

    function get_order(Request $request, $id, $id2){
        $domain = $this->get_domain($id);
        $data = Http::get($domain . '/admin/api/2021-04/orders/' . $id2 . '.json')->json();
        return $data;
    }

    function put_order(Request $request, $id, $id2) {
        $domain = $this->get_domain($id);

        $decode = $this->curl(
            $domain . '/admin/api/2021-04/orders/' . $id2 . '.json',
            json_encode($request->all()),
            'PUT'
        );
        return response()->json($decode);
        
    }

    function delete_order(Request $request, $id, $id2){
        $domain = $this->get_domain($id);

        $data = Http::delete($domain . '/admin/api/2021-04/orders/' . $id2 . '.json');

        return 
        [
            'response' => [
                'Message' => 'Order Deleted Succesfully', 
                'Success' => true, 
                'provider' => 'Shopify', 
                'provider_id' => 1, 
                'resource' => 
                'Deleting Order'
            ]
        ];
    }
}
