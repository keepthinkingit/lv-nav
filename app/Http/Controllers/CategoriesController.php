<?php
/**
 * User: KeepThinkingIt
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $cates = Category::orderBy('order', 'asc')->get();
        return view('categories.create', ['cates' => $cates]);
    }

    public function store(Request $request)
    {
        $result = $request->validate([
            'name' => 'required|unique:categories,name|min:2',
            'order' => 'numeric|max:10',
        ]);

        if ($result)
        {
            $cate = Category::create([
                'name' => request('name'),
                'order' => request('order'),
            ]);
            return redirect()->route('home');
        } else
        {
            return redirect()->back()->withInput();
        }

    }

    public function destroy()
    {
        return view('categories.destroy');
    }

    public function index()
    {
        $cate = Category::orderBy('order', 'asc')->get();

        return view('categories.index', ['cates' => $cate]);
    }

    public function update(Request $request)
    {
        //多维数组 验证
        $this->validate($request,[
            'cate.*.name' => 'required',  //暂时去掉 unique 验证 , 需要用 except 定制
            'cate.*.order' => 'required|numeric|max:10',
        ]);

            $cates = new Category;
            foreach ($request->cate as $id=>$values)
            {
                    $values['id'] = $id;
                    $cates->update($values);
            };
            return redirect()->route('home');

    }

}
