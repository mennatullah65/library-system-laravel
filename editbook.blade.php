@extends('master.librarian')
@section ('content')
<!--<h1>hello from add books page</h1>-->
<h1>Edit Book Data</h1>
<div style="margin:20px;width:500px;margin-left:50px;border:2px solid black;padding:20px;">
@if(count($books)>0)
@foreach($books as $b)
{!! Form::open(['url' => 'editbook/save','files' => true ]) !!}
    <!--
    @csrf_field
    {{ method_field('POST') }} 
    -->
    <div style="display:none">
    {{Form::text('b_id',$b->bookId)}}
    </div>
    {{Form::text('b_name',$b->Name,['class' => 'form-control','placeholder'=> 'Enter book name'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::number('b_isbn',$b->ISBN,['class'=>'form-control','placeholder'=>'Enter book isbn'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_author',$b->author,['class'=>'form-control','placeholder'=>'Enter book author'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_publisher',$b->publisher,['class'=>'form-control','placeholder'=>'Enter book publisher'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_category',$b->category,['class'=>'form-control' , 'placeholder'=>'Enter category'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_edition',$b->edition,['class' => 'form-control','placeholder'=> 'Enter edition'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_description',$b->Name,['class'=>'form-control','placeholder'=>'Enter book description'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('b_language',$b->language,['class'=>'form-control','placeholder'=>'Enter language'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::number('b_numberOfPages',$b->numberOfPages,['class'=>'form-control','placeholder'=>'Enter number of pages'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::number('b_numberOfCopies',$b->numberOfCopies,['class'=>'form-control' , 'placeholder'=>'Enter number of copies'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::number('b_price',$b->price,['class'=>'form-control' , 'placeholder'=>'Enter price'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::number('b_rate',$b->Rate,['class'=>'form-control' , 'placeholder'=>'Enter rate'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::date('b_publishDate',$b->publishDate,['class'=>'form-control'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::file('b_photo')}}
    <div style="margin-bottom:20px"></div>

    {{Form::submit('edit book',['class'=> 'btn btn-primary'])}}
    <!--{{Form::submit('delete book',['class'=> 'btn btn-primary'])}}-->

{!! Form::close() !!}
@endforeach
@endif
</div>

@endsection 
