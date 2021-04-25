<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;


class UploadController extends Controller
{
    public function index(){
        //$categories = Category::all();
        return view('upload');
    }
    public function upload(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'author'=>'required',
            'info'=>'required',
            'image'=>'required|image',
            'book'=>'required|mimes:pdf',
        ]);
        if ($request->hasFile('image')){
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageName =time().'thumbnail.'.$imageExt;
            $path= $request->file('image')->storeAs('thumbnails/',$imageName,'public');
        }
        if ($request->hasFile('book')){
            $bookExt = $request->file('book')->getClientOriginalExtension();
            $bookName = time().'book.'.$bookExt;
            $request->file('book')->storeAs('books/',$bookName,'public');
        }
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->info = $request->input('info');
        $book->image = $imageName;
        $book->bookfile = $bookName;
        $book->user_id = Auth::user()->id;
        $book->category_id = $request->input('category');
        $book->save();
        return redirect(route('upload'))->with('message','Upload Successfully');
    }
}
