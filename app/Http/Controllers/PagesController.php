<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public  function index(){
        $books=Book::latest()->paginate(3);
        return view('welcome')->with('books',$books);
    }
    public function viewCategory($id){
        $category=Category::find($id);
        $books=$category->books();
        return view('viewCategory')
            ->with([
                'books'=>$books,
                'category'=>$category,
                ]);
    }
    public function viewBook($id){
        $book=Book::findOrFail($id);
        return view('book')->with('book',$book);
    }
    public function addComment(Request $request, $id){
        $this->validate($request,[
            'comment'=>'required|max:200'
        ]);

        $book = Book::findOrFail($id);
        $coment = new Comment();
        $coment->user_id = auth()->user()->id;
        $coment->book_id = $book->id;
        $coment->comment = $request->input('comment');
        $coment->save();
        return redirect()->back();

    }
}
