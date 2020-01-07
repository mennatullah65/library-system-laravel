<!--<h1>welcome from login</h1>-->
@extends('master.anony')
@section ('content')
<!--<h1>hello from login page</h1>-->
<div class="background" style="background-image:url('https://london.ac.uk/sites/default/files/styles/small/public/2019-10/Senate%20House%20Library%20reading%20room%20with%20morning%20sun%20hitting%20the%20desks.jpg?itok=CVTikn9f');background-repeat: no-repeat;background-size: cover;width:100%;height:100%;margin:0;">
<div style="width:500px;height:500px;margin-left:200px;padding:20px;background-color:white;opacity:0.9">
<h1>Enter your Data</h1>

{!! Form::open(['url' => 'librarian_login/save','files' => true ]) !!}  
    {{Form::email('s_email','',['class'=>'form-control','placeholder'=>'Enter your email'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::password('s_password',['class'=>'awesome form-control' , 'placeholder'=>'Enter your password'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::submit('login',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
<div style="width:100%;height:50px;"><hr/></div>
<a class="forgetPass" href="forget_password">Forgetten your password?</a><div style="width:100%;height:20px;"></div>
<?php $emailstate="unique";?>
<h4 class="msg_login">If you don't have an account <b><a href="{{url('/signup/'.$emailstate)}}">SignUp >></a></b></h4>

</div>
</div>
@endsection 