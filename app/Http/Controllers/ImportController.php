<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use App\Models\Abbreviation\Abbreviation;
use App\Models\Category;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Quiz\Question;
class ImportController extends Controller
{

    public function categoryimportForm()
    {
        return view('categroyImportForm');
    }

    public function categoryImport(Request $request)
    {
        try {
            DB::beginTransaction();

            $this->validate($request, [
                'uploaded_file' => 'required|mimes:xls,xlsx,csv'
            ]);

            $path = $request->file('uploaded_file')->getRealPath();
            $collections = Excel::toCollection(new DataImport, $path);
            foreach ($collections[0] as $key => $collection) {

                $category = Category::where('title', $collection[0])->first();
                if($key!= 0 &&  !$category  && $key < 87 )
                {
                    return response()->json([
                        'status' => 100,
                        'message' => 'Category not found',
                        'category' => $collection[0],
                        'key'     => $key
                    ]);
                }
                if($key!= 0 && $key < 87 )
                    {
                        Abbreviation::updateOrcreate([
                            'user_id' => 1,
                            'category_id' =>   $category->id,
                            'abbreviation' => $collection[1],
                            'phrase' => $collection[2]
                        ],
                            [
                                'user_id' => 1,
                                'category_id' =>   $category->id,
                                'abbreviation' => $collection[1],
                                'phrase' => $collection[2]
                            ]);
                    }
            }

            DB::commit();

            return response()->json([
                'status' => 200,
                'message' => "Congratulations, Data uploaded successfully",
            ]);
        } catch (\Exception $e) {

            DB::rollback();

            return response()->json([
                "status" => 100,
                "message" => 'sorry, something went wrong',
                "errors" => $e->getMessage()
            ]);
        }
    }

    public function questionImportForm()
    {
        return view('questionImportForm');
    }



    public function questionImport(Request $request)
    {
        try {

            // START PRODUCT BULK-UPLOAD OPERATION
            DB::beginTransaction();

            $this->validate($request, [
                'uploaded_file' => 'required|mimes:xls,xlsx,csv'
            ]);

            $path = $request->file('uploaded_file')->getRealPath();

            $collections = Excel::toCollection(new DataImport, $path);


            // UPLOAD BULK-PRODUCTS FROM EXCEL SHEET
            foreach ($collections[0] as $key => $collection) {
            //    dd($collection);

                $category = Category::where('title', 'Science')->first();
                if($key!= 0 && isset($collection[0]))
                    {
                        // dd($collection);
                        Question::updateOrcreate([
                            'category_id' =>   $category->id,
                            'phrase' => $collection[0],
                        ],
                            [
                                'category_id' =>   $category->id,
                                'phrase' => $collection[0],
                                'option1' => $collection[1],
                                'option2' => $collection[2],
                                'option3' => $collection[3],
                                'option4' => $collection[4],
                                'answer' => $collection[5],
                            ]);
                    }
            }

            DB::commit();

            return response()->json([
                'status' => 200,
                'message' => "Congratulations, Data uploaded successfully",
            ]);
        } catch (\Exception $e) {

            DB::rollback();

            return response()->json([
                "status" => 100,
                "message" => 'sorry, something went wrong',
                "errors" => $e->getMessage()
            ]);
        }
    }


}