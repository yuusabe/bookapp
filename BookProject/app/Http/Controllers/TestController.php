<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Book_category;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function getbook() 
    {
        // 書籍一覧情報取得
        $data_obj = DB::table('books')
        ->leftjoin('book_categories',function ($bc){
            $bc->on('book_categories.bc_book_number', 'books.book_number')
            ->where('bc_logic_flag',TRUE);
        })
        ->leftjoin('categories','categories.category_number', 'book_categories.bc_category_number')
        ->leftjoin('lend_books','lend_books.l_book_number', 'books.book_number')
        ->where('b_logic_flag', TRUE)
        ->orderBy('book_number', 'asc')
        // ->where('bc_logic_flag', TRUE)
        // ->select('book_number','title','year_of_issue','publisher','cover_pic','category_name','return_flag')
        ->get();

        $data = json_decode(json_encode($data_obj),true);

        // S3の画像パス取得
        $before = 0;
        foreach($data as $d){
            $path = Storage::disk('s3')->url($d['cover_pic']);
            $d['path'] = $path;

            if($d['book_number'] == $before){
                $d['multi'] = 'ON' ;
                ${'cate'.$d['book_number']}['number']=$d['book_number'];
                ${'cate'.$d['book_number']}['name']=$d['category_name'];
            }else{
                $d['multi'] = 'OFF' ;
            }
            $before = $d['book_number'];
        }

        // foreach($data as $d){
        //     if($d['book_number'] == ${'cate'.$d['book_number']}['number']){
                
        //     }

        

        // for($i=0; $i<count($data); $i++){
        //     for($n=$i; $n<count($data)-1; $n++){
        //         if($data[$n]['book_number'] == $data[$n+1]['book_number']){
        //             $c_name[] = $data[$n]['category_name'];
        //         }else{
        //             $c_name[] = $data[$n]['category_name'];
        //             $data[i]['category_array'] = $c_name;
        //             break;
        //         }
        //     }
        

        return view('list_of_books', compact('data'));

        Log::debug($data);
    }

    function i_post(Request $request){
        if($request->has('info')){
            $num = $request['number'];
            $category = $request['category'];
            return view('information_of_book',compact('num','category'));
        }elseif($request->has('change')){
            $num = $request['number'];
            $b_data = Book::where('b_logic_flag',TRUE)
            ->where('book_number',$num)
            ->first();
            $category = $request['category'];
            $path = $request['path'];
            return view('book_change', compact('b_data','category','path'));
        }


    }

    function l_post(Request $request){
        $num = $request['number'];
        return view('lend_book',compact('num'));
    }

    function lc_post(Request $request){
        $num = $request['number'];
        $last = $request['last'];
        return view('lend_check',compact('num', 'last'));
    }

}