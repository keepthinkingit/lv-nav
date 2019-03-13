<?php
/**
 * User: KeepThinkingIt
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Site;
use App\Type;

class HomeController extends Controller
{


    public function index()
    {
        $tab = Category::get();
        $types = Type::get();
        $sites = Site::get();

        return view('welcome',compact('tab,types,sites'));
    }

    public function test()
    {
        return view('test');
    }

}
