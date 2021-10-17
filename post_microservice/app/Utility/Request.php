<?php
namespace App\Utility;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class Request
{
    public static function getRecentComment()
    {
        return Http::get('http://localhost:8001/recent_comment')->json();
    }
}
