<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Response;
use App\Http\Controllers\Controller;

class BlogAPIController extends Controller
{
    public function index(Request $request){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.nulresearchandinnovations.co.ls/wp-json/wp/v2/posts?_embed');

        if(empty($response)){
            return $response->getStatusCode('Failed to fetch articles');
        }

        return $response->getBody('Article retrieved successfully');
    }
}
