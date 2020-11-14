<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class MemoryImageController extends Controller
{
  // 登録画面の入力値をＤＢに登録する
  public function insertInfo(Request $request)
  {
     $b_image = $request->file('b_image');
    /*
     $title = $request->input('title');
     $title_h = $request->input('title_h');
     $year = $request->input('year');
     $author = $request->input('author');
     $author_h = $request->input('author_h');
     $publisher = $request->input('publisher');
     $category = $request->input('category');
    */

     $path = Storage::disk('s3')->putFile('/Temporary_picture', $b_image, 'public');

  }
}
