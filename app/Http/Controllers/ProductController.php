<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Validator;

class ProductController extends Controller
{

    public function all()
    {
        $datas = Product::get();

        if (count($datas) > 0) {
            return response()->json(['datas'=>$datas]);
        } else {
            return response()->json('No content');
        }
    }

    public function getDataById($id){

        $data = Product::where('id', $id)->first();
         return response()->json(['data'=>$data]);
    }

    public function storeOrUdate(Request $request)
    {
        if (!$request->id) {
            $dataId = Product::create($request->all());
        } else {

            $dtExist = Product::find($request->id);

            if (!$dtExist) {
                return response()->json('Invalid Edit ID');
            }
            $dataId = Product::where('id', $request->id)->update($request->all());
        }

        if ($dataId) {
            $datas = Product::get();
            return response()->json(['datas'=>$datas]);
        } else {
            return response()->json('Internel server error');
        }
    }

    public function delete($id)
    {
        // return $id;
        if ($id) {
            if (!is_numeric($id)) {
                return response()->json(1, 403, "The id should be a number.", "");
            }
            try {
                $data = Product::query()->findOrFail($id);
                $data->delete();
                $datas = Product::get();
                return response()->json(['datas'=>$datas]);
            } catch (\Exception $e) {
                return response()->json(1, 500, "Internal Server Error.", "");
            }
        }
    }
}
