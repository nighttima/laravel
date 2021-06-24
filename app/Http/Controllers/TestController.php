<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;
use phpseclib3\File\ASN1\Maps\Name;

class TestController extends Controller
{
    public function test() {
        $post = Information::find(1);
        $tags = $post->tags;
        foreach ($tags as $tag) {
            echo $tag->name.'<br>';
        }
//        $posts = Information::find(3);
//        dump($posts->user);
        return;
    }
}
