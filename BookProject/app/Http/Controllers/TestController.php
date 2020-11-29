<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Book;
use App\Models\Category;
use App\Models\Book_category;
use App\Models\Lend_book;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    //書籍一覧画面表示
    public function getbook() 
    {
        // 書籍一覧情報取得
        $data = DB::table('books')
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


        // S3の画像パス取得
        $before = 0;
        foreach($data as $index => $d){
            $path = Storage::disk('s3')->url($d->cover_pic);
            $d->path = $path;

            if($d->book_number == $before){
                $d->multi = 'ON' ;
            }else{
                $d->multi = 'OFF' ;
            }
            $before = $d->book_number;
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

    //書籍一覧画面、詳細ボタン押下時
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
            $category_all = Category::where('c_logic_flag',TRUE)
            ->get(['category_name']);
            $category_all = json_decode($category_all, true);
            return view('book_change', compact('num','b_data','category','path','category_all'));
        }
    }

    //書籍詳細画面表示
    function i_show(){
        return view('information_of_book');
    }


    //書籍詳細画面、貸出ボタン押下時
    function l_post(Request $request){
            $num = $request['number'];
            $book_data = Book::where('b_logic_flag',TRUE)
            ->where('book_number',$num)
            ->first();
            $category_exist = Book_category::where('bc_logic_flag',TRUE)
            ->where('bc_book_number',$num)
            ->exists();
        if($category_exist == TRUE){
            $category_data = Book_category::where('bc_logic_flag',TRUE)
            ->where('bc_book_number',$num)
            ->first();
        }else{
            $category_data = new \stdClass();
            $category_data->bc_category_name = "a";
        }
            $category_exist2 = Category::where('c_logic_flag',TRUE)
            ->where('category_number',$category_data->bc_category_number)
            ->exists();
        if($category_exist == TRUE){
            $category_data2 = Category::where('c_logic_flag',TRUE)
            ->where('category_number',$category_data->bc_category_number)
            ->first();
        }else{
            $category_data2 = new \stdClass();
            $category_data2->category_name = 'a';
        }
            $lend_exist = Lend_book::where('return_flag',FALSE)
            ->where('l_book_number',$num)
            ->exists();
        if($lend_exist == TRUE){
            $lend_data = Lend_book::where('return_flag',FALSE)
            ->where('l_book_number',$num)
            ->first();
        }else{
            $lend_data = new \stdClass();
            $lend_data->return_day = 'a';
        }
        if(!empty($lend_data->l_account_number)){
            $account_data = Account::where('a_logic_flag',TRUE)
            ->where('account_number',$lend_data->l_account_number)
            ->first();
        }else{
            $account_data = new \stdClass();
            $account_data->accont_name = 'a';
        }
            $account_name = $account_data->account_name;
            $return_day = $lend_data->return_day;
            $category_name = $category_data2->category_name;
            return view('lend_book',compact('num','book_data','account_name','return_day', 'category_name'));
    }

    //貸出画面表示
    function lend_show(){
        return view('lend_book');
    }

    //貸出画面、貸出ボタン押下時
    function lc_post(Request $request){
        if($request->has('lend')){
            $num = $request['number'];
            $last = $request['last'];
            return view('lend_check',compact('num', 'last'));

        }elseif($request->has('cancel')){
            return redirect()->route('book.list');
        }
    }

    //貸出確認画面表示
    function lend_check_show(){
        return view('lend_check');
    }

    //貸出確認画面、確定ボタン押下時
    function lend_send(Request $request){

        return view('completion');
    }

    //書籍編集画面表示
    function book_change_show(){
        return view('book_change');
    }


    //書籍編集画面、各ボタン押下時
    function check_post(Request $request){
            //編集ボタン押下時
        if($request->has('change')){
            

            return view('book_change_check');
            //削除ボタン押下時
        }elseif($request->has('delete')){
            
            $num = $request['number'];
            return view('book_delete_check', compact('num'));

            //キャンセルボタン押下時
        }elseif($request->has('cancel')){
            return redirect()->route('book.list');
        }
    }

    //書籍編集確認画面表示
    function book_change_check_show(){
        return view('book_change_check');
    }

    //書籍編集確認画面、確定ボタン押下時
    function change_check_send(){
        if($request->has('change')){
            return view('completion');
        }elseif($request->has('cancel')){
            return redirect()->route('book.list');
        }
    }

    //書籍削除確認画面表示
    function delete_check_show(){
        return view('book_delete_check');
    }

    //書籍削除確認画面、確定ボタン押下時
    function delete_send(Request $request){
        if($request->has('delete')){
            $num = $request['number'];
            Book::where('b_logic_flag',TRUE)
                ->where('book_number',$num)
                ->update([
                    'b_logic_flag' => FALSE
                ]);
            return view('completion');
        }elseif($request->has('cancel')){
            return redirect()->route('book.list');
        }
    }
}