<?php
/**
 * User: KeepThinkingIt
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class NavsController extends Controller
{
    public function create()
    {
        return view('navs.create');
    }

    public function store(Request $request)
    {
        $result = $request->validate([
            'name'=> 'required|unique:name|min:2',
            'order' => 'numeric|max:10'
        ]);

        if ($result){
            return redirect()->route('home');
        }else {
            return redirect()->back()->withInput();
        }


    }

    public function destroy()
    {
        return view('navs.destroy');
    }

    public function update()
    {
        return view('navs.edit');
    }

}
