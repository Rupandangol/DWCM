<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Stock;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

    public function updateStock(Request $request)
    {
        $id = $request->stock_id;
        $stock= Stock::find($id);
        $data['stockName']=$stock->name;
        $data['stockDetails']=$stock->detail;
        $data['stockCategory']=$stock->getCategory->name;
        return response()->json($data);
    }
}
