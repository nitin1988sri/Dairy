<?php

namespace Diary;

class Write{
    public $client;
    public function __construct(private bool $verify, private string $url){
    $this->client = new \GuzzleHttp\Client(['verify' => $verify]);
   // $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
   // echo $response->getBody();    
    }
    public function logInfo(){

    }

    public function logWarning(){

    }
}