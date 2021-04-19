<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    function get_categories(Request $request, $id){
        $store = Store::where('id',$id)->where('active',1)->firstorfail();
        $domain = explode('//', $store->domain);

        $data = Http::get($domain[0] . '//' . $store->key . ':' . $store->secret . '@' . $domain[1] . '/admin/api/2021-04/custom_collections.json')->json();
        // dd($data['custom_collections']);
        $removeKeys = array('handle', 'sort_order', 'template_suffix', 'products_count', 'published_scope', 'body_html', 'admin_graphql_api_id');

        for ($i=0; $i < count($data['custom_collections']); $i++) { 
            foreach($removeKeys as $key) {
                unset($data['custom_collections'][$i][$key]);
            }
            $data['custom_collections'][$i]['provider'] = 'Shopify';
            $data['custom_collections'][$i]['provider_id'] = 1;
            $data['custom_collections'][$i]['resource'] = 'Showing All Categories';
        }
        
        $data['categories'] = $data['custom_collections'];
        unset($data['custom_collections']);
        return $data;
    }

    function get_category(Request $request, $id, $id2){
        $store = Store::where('id',$id)->where('active',1)->firstorfail();
        $domain = explode('//', $store->domain);

        $data = Http::get($domain[0] . '//' . $store->key . ':' . $store->secret . '@' . $domain[1] . '/admin/api/2021-04/custom_collections/' . $id2 . '.json')->json();

        $removeKeys = array('handle', 'sort_order', 'template_suffix', 'products_count', 'published_scope', 'body_html', 'admin_graphql_api_id');

        foreach($removeKeys as $key) {
            unset($data['custom_collection'][$key]);
        }
        $data['custom_collection']['provider'] = 'Shopify';
        $data['custom_collection']['provider_id'] = 1;
        $data['custom_collection']['resource'] = 'Show Category By Category Id';

        $data['category'] = $data['custom_collection'];
        unset($data['custom_collection']);
        return $data;
    }

    function post_category(Request $request, $id) {
        $store = Store::where('id',$id)->where('active',1)->firstorfail();
        $domain = explode('//', $store->domain);

        // dd($request->title);
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $domain[0] . '//' . $store->key . ':' . $store->secret . '@' . $domain[1] . '/admin/api/2021-04/custom_collections.json',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
        "custom_collection": {
            "title": "' . $request->title .'" 
        }
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $decode = json_decode($response);
        return [
                'category' => [
                    'id' => $decode->custom_collection->id,
                    'updated_at' => $decode->custom_collection->updated_at,
                    'published_at' => $decode->custom_collection->published_at,
                    'title' => $decode->custom_collection->title,
                    'Message' => 'Category Created Succesfully', 
                    'Success' => true, 
                    'provider' => 'Shopify', 
                    'provider_id' => 1, 
                    'resource' => 
                    'Creating Category'
                ]
            ];
        
    }

    function put_category(Request $request, $id, $id2) {
        $store = Store::where('id',$id)->where('active',1)->firstorfail();
        $domain = explode('//', $store->domain);
        // dd($request->all());
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $domain[0] . '//' . $store->key . ':' . $store->secret . '@' . $domain[1] . '/admin/api/2021-04/custom_collections/' . $id2 . '.json',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS =>'{
            "custom_collection": {
              "id": ' . $id2 . ',
              "title": "' . $request->title . '"
            }
          }',
            CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json'
            ),
          ));
          
          $response = curl_exec($curl);
          
          curl_close($curl);
          
          $decode = json_decode($response);
            return [
                    'category' => [
                        'id' => $decode->custom_collection->id,
                        'updated_at' => $decode->custom_collection->updated_at,
                        'published_at' => $decode->custom_collection->published_at,
                        'title' => $decode->custom_collection->title,
                        'Message' => 'Category Updated Succesfully', 
                        'Success' => true, 
                        'provider' => 'Shopify', 
                        'provider_id' => 1, 
                        'resource' => 
                        'Updating Category'
                    ]
                ];
    }

    function delete_category(Request $request, $id, $id2){
        $store = Store::where('id',$id)->where('active',1)->firstorfail();
        $domain = explode('//', $store->domain);
        $data = Http::delete($domain[0] . '//' . $store->key . ':' . $store->secret . '@' . $domain[1] . '/admin/api/2021-04/custom_collections/' . $id2 . '.json');

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
}
