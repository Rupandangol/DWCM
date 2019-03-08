<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Stock;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index()
    {
        $data['item'] = Category::all();
//        $data['stockData']=Stock::
        return view('Frontend.pages.dashboard', $data);
    }

    public function process($name, $id)
    {
        $data['stock'] = Stock::where(['category_id' => $id])->get();
        $data['category_name'] = $name;
        $data['item'] = Category::all();
        return view('Frontend.pages.page', $data);
    }

    public function contentProcess($id)
    {
        $data['stock']=Stock::find($id);
        $data['item'] = Category::all();

        return view('Frontend.pages.content',$data);
    }
}
