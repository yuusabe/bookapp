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
        $data = DB::table('books')
        ->leftjoin('book_categories','book_categories.bc_book_number', 'books.book_number')
        ->leftjoin('categories','categories.category_number', 'book_categories.bc_category_number')
        ->leftjoin('lend_books','lend_books.l_book_number', 'books.book_number')
        ->where('b_logic_flag', TRUE)
        ->where('bc_logic_flag', TRUE)
        ->select('book_number','title','year_of_issue','publisher','cover_pic','category_name','lend_number')
        ->get();
        foreach($data as $d){
        $path = Storage::disk('s3')->url($d->cover_pic);
        $d->path = $path;
        }
        return view('list_of_books', compact('data'));
        Log::debug($data);
    }
}