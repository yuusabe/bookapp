<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Book_category;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GetbookController extends Controller
{
    public function getbook() 
    {
        // 書籍一覧情報取得
        $obj_data = DB::table('books')
        ->leftjoin('book_categories','book_categories.bc_book_number', 'books.book_number')
        ->leftjoin('categories','categories.category_number', 'book_categories.bc_category_number')
        ->leftjoin('lend_books','lend_books.l_book_number', 'books.book_number')
        ->where('b_logic_flag', TRUE)
        ->orderBy('book_number', 'asc')
        // ->where('bc_logic_flag', TRUE)
        ->select('book_number','title','year_of_issue','publisher','cover_pic','category_name','lend_number')
        ->get();

        $data = (array)$obj_data;

        Log::debug($data);

        // S3の画像パス取得
        $num = 0;
        foreach($data as $index => $d){

            if($d->book_number = $data[$num]['book_number']){
                $d->multi = 'ON' ;
            }else{
                $d->multi = 'OFF' ;
            }

            $path = Storage::disk('s3')->url($d->cover_pic);
            $d->path = $path;

            
            if($index!=0){
                $num++;
            }
        }
        return view('list_of_books', compact('data'));

    }
}