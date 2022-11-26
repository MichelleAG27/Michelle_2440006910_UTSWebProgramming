<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function home() {
        $books = Book::all();
        $categories = Category::all();
        return view('home', ['books'=>$books, 'categories'=>$categories]);
    }

    public function detail($id) {
        $categories = Category::all();
        $book = Book::find($id);
        return view('detail', ['categories'=>$categories, 'book'=>$book]);
    }

    public function category($id) {
        $categories = Category::all();
        $category = Category::find($id);
        return view('category', ['categories'=>$categories, 'category'=>$category]);
    }

    public function publisher() {
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('publisher', ['categories'=>$categories, 'publishers'=>$publishers]);
    }

    public function contact() {
        $categories = Category::all();
        return view('contact', ['categories'=>$categories]);
    }
}
