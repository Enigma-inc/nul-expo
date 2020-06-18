<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
// use GuzzleHttp\Psr7\Response;
// use Response;
use App\Http\Controllers\Controller;

class BlogAPIController extends Controller
{
    public function index(Request $request){
        $client = new \GuzzleHttp\Client();
        $responseData = $client->request('GET', 'https://www.nulresearchandinnovations.co.ls/wp-json/wp/v2/posts?_embed');

        if(empty($responseData)){
            return response()->json('Failed to fetch articles', 500);
        }

        return response($responseData->getBody(), 200);
    }
}
