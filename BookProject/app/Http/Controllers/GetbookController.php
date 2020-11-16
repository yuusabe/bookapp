<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blist;

class GetbookController extends Controller
{
    public function getbook() 
    {
        $md = new Blist();
        $data = $md->getData();

        return view('list_of_books', compact('data'));
    }
}
