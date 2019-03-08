<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Model\Category;
use App\Model\Stock;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class BackendController extends Controller
{
    private $_view = 'Backend.pages.';

    public function index()
    {
        return view('Backend.pages.dashboard');
    }

//    category

    public function addCategory()
    {
        return view('Backend.pages.Categories.addCategory');
    }

    public function categoryAction(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories,name'
        ]);
        $data['name'] = $request->category;
        if (Category::create($data)) {
            return redirect()->back()->with('success', 'Category inserted');
        } else {
            return redirect()->back()->with('fail', 'failed');
        }
    }

    public function manageCategory()
    {
        $data['item'] = Category::all();
        return view('Backend.pages.Categories.manageCategory', $data);
    }

    public function deleteCategory($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('fail', 'Category Deleted');
    }

    public function updateCategory($id)
    {
        $data['item'] = Category::find($id);
        return view('Backend.pages.Categories.updateCategory', $data);
    }

    public function updateCategoryAction(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories,name'
        ]);
        $data['name'] = $request->category;
        if (Category::find($request->id)->update($data)) {
            return redirect()->to('/@admin@/manageCategory')->with('success', 'Category Updated');
        } else {
            return redirect()->back()->with('fail', 'failed');
        }
    }



//   end of Category

//    Stocks

    public function addStock()
    {
        $data['item'] = Category::all();
        return view('Backend.pages.Stocks.addStock', $data);
    }

    public function stockAction(Request $request)
    {
        $request->validate([
            'stock_name' => 'required',
            'stock_detail' => 'required',
            'image' => 'required'
        ]);
        $data['name'] = $request->stock_name;
        $data['detail'] = $request->stock_detail;
        $data['category_id'] = $request->category_id;


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = strtolower($file->extension());
            $newName = time() . '_.' . $extension;

            Image::make($file)->resize(300, null, function ($ar) {
                $ar->aspectRatio();
            })->crop(200, 200)->save(public_path('Uploads/Backend/' . $newName));

            $data['image'] = $newName;


        }

        if (Stock::create($data)) {
            return redirect()->back()->with('success', 'Stock Added');
        } else {
            return redirect()->back()->with('fail', 'failed');
        }

    }

    public function manageStock()
    {
        $data['item'] = Stock::all();
        $data['category'] = Category::all();
        return view('Backend.pages.Stocks.manageStock', $data);
    }

    public function deleteStock($id)
    {
        Stock::find($id)->delete();
        return redirect()->back()->with('fail', 'Stock Deleted');
    }

    public function updateStock(Request $request)
    {
//        $request->validate([
//            'stockName' => 'required',
//            'stockDetails' => 'required'
//        ]);
        $category = Category::where(['name' => $request->category_id])->first();
        $data['name'] = $request->stockName;
        $data['detail'] = $request->stockDetails;
        $data['category_id'] = $category->id;
        if (Stock::find($request->id)->update($data)) {
            return redirect()->to('/@admin@/manageStock')->with('success', 'Updated');
        }
        return redirect()->to('/@admin@/manageStock')->with('fail', 'Failed');

//        return $request->all();


    }


//    End of Stocks

//admin


    public function addAdmin()
    {
        return view('Backend.pages.Admin.addAdmin');

    }

    public function addAdminAction(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admins,username',
            'email' => 'required|unique:admins,email',
            'address' => 'required',
            'image' => 'required',
            'password' => 'required|confirmed|min:5'
        ]);

        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['password'] = bcrypt($request->password);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = strtolower($file->extension());
            $newName = time() . '_.' . $extension;
            Image::make($file)->resize(300, null, function ($ar) {
                $ar->aspectRatio();
            })->crop(200, 200)->save(public_path('Uploads/Backend/Admins/'.$newName));
            $data['image']=$newName;

        }


        if (Admin::create($data)) {
            return redirect()->back()->with('success', 'Admin Created');
        }
        return redirect()->back()->with('fail', 'failed');

    }

    public function manageAdmin()
    {
        $data['item'] = Admin::all();
        return view('Backend.pages.Admin.manageAdmin', $data);
    }


//end of admin


}
