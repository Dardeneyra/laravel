<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\City;
use App\Models\Product;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Monitor;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Tags;

class TestController extends Controller
{
    public function testRelations()
    {
        $tag = Tags::create(['name' => 'tag1']);
        $tag2 = Tags::create(['name' => 'tag12']);
        $tag3 = Tags::create(['name' => 'tag13']);


        $user = User::first();
        $product = Product::first();

        $user->tags()->attach($tag->id, $tag2->id);
        $product->tags()->attach($tag2->id,$tag3->id);
    }
}
