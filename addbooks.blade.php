
@extends('master.librarian')
@section ('content')
<h1>hello from add books page</h1>
<div style="margin:20px;width:500px;margin-left:50px;border:2px solid black;padding:20px;">
<h1>Enter Book Data</h1>

{!! Form::open(['url' => 'addbooks/save','files' => true ]) !!}
    {{Form::text('b_name','',['class' => 'form-control','placeholder'=> 'Enter book name'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::number('b_isbn','',['class'=>'form-control','placeholder'=>'Enter book isbn'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_author','',['class'=>'form-control','placeholder'=>'Enter book author'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_publisher','',['class'=>'form-control','placeholder'=>'Enter book publisher'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_category','',['class'=>'form-control' , 'placeholder'=>'Enter category'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_edition','',['class' => 'form-control','placeholder'=> 'Enter edition'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_description','',['class'=>'form-control','placeholder'=>'Enter book description'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_language','',['class'=>'form-control','placeholder'=>'Enter language'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::number('b_numberOfPages','',['class'=>'form-control','placeholder'=>'Enter number of pages'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::number('b_numberOfCopies','',['class'=>'form-control' , 'placeholder'=>'Enter number of copies'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::number('b_numberOfOrders','',['class'=>'form-control','placeholder'=>'Enter number of orders'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::number('b_numberOfBorrowedTimes','',['class'=>'form-control' , 'placeholder'=>'Enter number of borrowed times'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::number('b_price','',['class'=>'form-control' , 'placeholder'=>'Enter price'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_rate','',['class'=>'form-control' , 'placeholder'=>'Enter rate'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::date('b_publishDate',Carbon\Carbon::now(),['class'=>'form-control'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::file('b_photo')}}
    <div style="margin-bottom:20px"></div>

    {{Form::submit('add book',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection 
