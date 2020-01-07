<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book; 
use App\librarian;

class addbooks_supplier extends Controller
{
    public function addbooks(Request $req){
        $this->validate($req,[
            'b_name'=>'required',
            'b_isbn'=>'required',
            'b_author'=>'required',
            'b_publisher'=>'required',
            'b_category'=>'required',
            'b_edition'=>'required',
            'b_description'=>'required',
            'b_language'=>'required',
            'b_numberOfPages'=>'required',
            'b_numberOfCopies'=>'required',
            'b_numberOfOrders'=>'required',
            'b_numberOfBorrowedTimes'=>'required',
            'b_price'=>'required',
            'b_publishDate'=>'required',
            'b_rate'=>'required',
            'b_photo'=>'required'

        ]);
        $value=$req->session()->get('email');
        $s=new book;
        $s->librarianEmail=$value;
        $s->ISBN=$req->input('b_isbn');
        $s->Name=$req->input('b_name');
        $s->author=$req->input('b_author');
        $s->publisher=$req->input('b_publisher');
        $s->category=$req->input('b_category');
        $s->edition=$req->input('b_edition');
        $s->description=$req->input('b_description');
        $s->language=$req->input('b_language');
        $s->numberOfPages=$req->input('b_numberOfPages');
        $s->numberOfCopies=$req->input('b_numberOfCopies');
        $s->numberOfBorrowedTimes=$req->input('b_numberOfBorrowedTimes');
        $s->numberOfOrders=$req->input('b_numberOfOrders');
        $s->price=$req->input('b_price');
        $s->Rate=$req->input('b_rate');
        $s->publishDate=$req->input('b_publishDate');
       
        $image=$req->file('b_photo');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $destinationpath='storage\uploads';//public_path().'/photos' //public_path('/photos')
        $url=$image->move($destinationpath, $filename);
        $s->pathphoto=$url;
        //$s->pathphoto=$req->file('b_photo')->store('uploads','public');
        $s->save();
        echo '<script>alert("book added");</script>';
        $so=librarian::where('librarianEmail',$value)->get();
        $so1=book::where('librarianEmail',$value)->get();
        $dataview=[
            'data'=>$so,
            'books'=>$so1
        ];
        return view('profile')->with($dataview);
        //return redirect('addbooks');
        //return "menna";
    }
    public function get_all_books(){
        $data=book::all();
        return view('librarianbooks')->with('books',$data);
        //return view('/setting', compact('data'));

    } 
    public function get_all_booksToitems(){
        $data=book::all();
        return view('items')->with('books',$data);
        //return view('/setting', compact('data'));

    } 
    public function get_books(Request $req){
        $value=$req->session()->get('email');
        $so=book::where('librarianEmail',$value)->get();
        //echo'<script>alert("'.$value.'");</script>';
        return view('profile')->with('books',$so);
        //return view('/setting', compact('so'));

    }
    public function edit_book(Request $req){
        //echo'<script>alert("hi");</script>';
        //dd("hi");
        
        $id=$req->input('b_id');
        $email=$req->session()->get('email');
        if($req->file('b_photo')==""||$req->file('b_photo')==null){
            $update=book::where('bookId',$id)->update(
                [
                    'ISBN'=>$req->input('b_isbn'),
                    'Name'=>$req->input('b_name'),
                    'librarianEmail'=>$email,
                    'author'=>$req->input('b_author'),
                    'publisher'=>$req->input('b_publisher'),
                    'category'=>$req->input('b_category'),
                    'edition'=>$req->input('b_edition'),
                    'description'=>$req->input('b_description'),
                    'language'=>$req->input('b_language'),
                    'numberOfPages'=>$req->input('b_numberOfPages'),
                    'numberOfCopies'=>$req->input('b_numberOfCopies'),
                    'price'=>$req->input('b_price'),
                    'publishDate'=>$req->input('b_publishDate'),
                    'Rate'=>$req->input('b_rate')
                ]
            );
        }else{
            $image=$req->file('b_photo');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destinationpath='storage\uploads';//public_path().'/photos' //public_path('/photos')
            $url=$image->move($destinationpath, $filename);
            $update=book::where('bookId',$id)->update(
                [
                    'ISBN'=>$req->input('b_isbn'),
                    'Name'=>$req->input('b_name'),
                    'librarianEmail'=>$email,
                    'author'=>$req->input('b_author'),
                    'publisher'=>$req->input('b_publisher'),
                    'category'=>$req->input('b_category'),
                    'edition'=>$req->input('b_edition'),
                    'description'=>$req->input('b_description'),
                    'language'=>$req->input('b_language'),
                    'numberOfPages'=>$req->input('b_numberOfPages'),
                    'numberOfCopies'=>$req->input('b_numberOfCopies'),
                    'price'=>$req->input('b_price'),
                    'publishDate'=>$req->input('b_publishDate'),
                    'pathphoto'=>$url,
                    'Rate'=>$req->input('b_rate')
                ]
            );
        }
        echo'<script>alert("book details updated");</script>';
        //dd("book details updated");
        $so=book::where('bookId',$id)->get();
        $dataview=[
            'books'=>$so
        ];
        return view('bookdetail')->with($dataview);
        //$so=item::where('bookId',$id)->get();
        //return view('librarianbooks')->with('books',$so);
        //return view('/setting', compact('so'));

    }
    public function gotoitemdetail(Request $req){
        $so=book::where('bookId',$req->input('b_id'))->get();
        $dataview=[
            'books'=>$so
        ];
        return view('bookdetail')->with($dataview);
    }
    public function gotoitemdetailAnony(Request $req){
        $so=book::where('bookId',$req->input('b_id'))->get();
        $dataview=[
            'books'=>$so
        ];
        return view('bookdetailAnony')->with($dataview);
    }
    public function delete_book($id,$email){
        //$id=$req->input('b_id');
        //dd($so1);

        //echo'<script>alert("'.$email.'");</script>';
        $delete=book::where('bookId',$id)->delete();
        echo'<script>alert("book have benn deleted successfully");</script>';
        $so=librarian::where('librarianEmail',$email)->get();
        $so1=book::where('librarianEmail',$email)->get();
        $dataview=[
            'data'=>$so,
            'books'=>$so1
        ];
        return view('profile')->with($dataview);
    }
    public function showbook($id){
        $so=book::where('bookId',$id)->get();
        $dataview=[
            'books'=>$so
        ];
        return view('editbook')->with($dataview);
    }
    public function showbookforform(Request $req){
        $so=book::where('bookId',$req->input('b_id'))->get();
        $dataview=[
            'books'=>$so
        ];
        return view('editbook')->with($dataview);
    }
    public function delete_bookforform(Request $req){
        $delete=book::where('bookId',$req->input('b_id'))->delete();
        echo'<script>alert("book have benn deleted successfully");</script>';
        $so=librarian::where('librarianEmail',$req->input('b_email'))->get();
        $so1=book::where('librarianEmail',$req->input('b_email'))->get();
        $dataview=[
            'data'=>$so,
            'books'=>$so1
        ];
        return view('profile')->with($dataview);
    }
}
