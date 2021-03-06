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


    public function __construct()
    {
        $this->middleware('auth')->only('admin');
    }

    public function index()
    {
        $cate = Category::orderBy('order','asc')->get();    //按 order 正序排列
//        $type = Type::orderBy('id','asc')->limit(12)->get();  //正序 12 个结果
//        $site = Site::orderBy('type_id','asc')->get();

        $types = Type::where('category_id',1)->orderBy('id','asc')->get();
        $sites = Site::orderBy('type_id','asc')->get();

//                dd($types);
        return view('welcome',compact('cate','types','sites'));
    }


    public function test()
    {
        return view('test');
    }

}
