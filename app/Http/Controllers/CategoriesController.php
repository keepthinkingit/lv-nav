<?php
/**
 * User: KeepThinkingIt
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function create()
    {
        $cates = Category::orderBy('order','asc')->get();
        return view('categories.create',['cates'=>$cates]);
    }

    public function store(Request $request)
    {
        $result = $request->validate([
            'name'=> 'required|unique:categories,name|min:2',
            'order' => 'numeric|max:10'
        ]);

        if ($result){
            $cate = Category::create([
                'name' => request('name'),
                'order' => request('order')
            ]);
            return redirect()->route('home');
        }else {
            return redirect()->back()->withInput();
        }

    }

    public function destroy()
    {
        return view('categories.destroy');
    }

    public function update()
    {
        $cates = Category::all();

        return view('categories.edit',['cates'=>$cates]);
    }

}
