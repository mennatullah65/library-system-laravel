@extends('master.librarian')
@section ('content')
<h1>Enter your Data</h1>

@if(count($data)>0)
@foreach($data as $l)
<div style="float:left;margin:20px;">
<div style="margin:20px;width:500px;margin-left:50px;border:2px solid black;padding:20px;">
{!! Form::open(['url' => 'editprofile/save','method' => 'post','files' => true ]) !!}
    <img src="{{asset($l->librarianPhoto)}}" style="border-radius:50%;"alt="librarian photo" width="200" height="200">
    <div style="margin-bottom:20px"></div>
    {{Form::text('s_name',$l->librarianName,['class' => 'form-control','placeholder'=> 'Enter your name'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::select('s_gender',['Male' => 'Male', 'Female' => 'Female'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('s_phone',$l->librarianPhone,['class'=>'form-control','placeholder'=>'Enter your phone'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('s_address',$l->librarianAddress,['class'=>'form-control','placeholder'=>'Enter your address'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::email('s_email',$l->librarianEmail,['class'=>'form-control','placeholder'=>'Enter your email'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::password('s_password',['class'=>'awesome form-control' , 'placeholder'=>$l->librarianPassword])}}
    <div style="margin-bottom:20px"></div>
    {{Form::file('s_photo')}}
    <div style="margin-bottom:20px"></div>

    {{Form::submit('update profile',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
</div>
</div> 
@endforeach
@endif




@endsection 

