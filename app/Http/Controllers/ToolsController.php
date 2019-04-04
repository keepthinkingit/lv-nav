<?php
/**
 * User: KeepThinkingIt
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController
{


    public function getTime()
    {
        $time = time();
        return view('tool.timestamp',compact('time'));
    }

}
