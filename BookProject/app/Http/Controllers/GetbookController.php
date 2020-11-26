<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Book_category;
use Storage;
use Illuminate\Support\Facades\DB;

class GetbookController extends Controller
{
    public function getbook() 
    {
        $data = Book::select()
        ->leftjoin('book_categories','books.book_number','book_categories.book_number')
        ->leftjoin('categories','book_categories.category_number','categories.category_number')
        ->leftjoin('lend_books','lend_books.book_number','books.book_number')
        ->get();
        foreach($data as $d){
        $path = Storage::disk('s3')->url($d['cover_pic']);
        $d = $d + $path;
        }
        

        return view('list_of_books', compact('data'));
    }
}
