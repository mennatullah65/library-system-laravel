<!--<h1>welcome from signup</h1>-->
@extends('master.anony')
@section ('content') 
<!--<h1>hello from signup page</h1>-->
<div class="background" style="background-image:url('https://cdn.vox-cdn.com/thumbor/TtDqRBc6dcsbzNeYeYSpphIy1rw=/0x0:3004x2002/1200x800/filters:focal(827x423:1307x903)/cdn.vox-cdn.com/uploads/chorus_image/image/60796931/shutterstock_778139473.0.jpg');width:100%;height:100%;margin:0;background-repeat: no-repeat;background-size: cover;">
<div style="width:500px;margin-left:50px;padding:20px;background-color:white;margin-left:650px;opacity:0.9">
<h1>Be a librarian</h1>
{!! Form::open(['url' => 'signup/save','files' => true ]) !!}
    {{Form::text('s_name','',['class' => 'form-control','placeholder'=> 'Enter your name'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::select('s_gender', ['Male' => 'Male', 'Female' => 'Female'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('s_phone','',['class'=>'form-control','placeholder'=>'Enter your phone'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::text('s_address','',['class'=>'form-control','placeholder'=>'Enter your address'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::email('s_email','',['class'=>'form-control','placeholder'=>'Enter your email'])}}
    @if($emailstate=="repeated")
   <div style="display:block;color:red;" id="emailrepeated">
   <p>User with this email already signed in</p>
   </div>
   @endif
    <div style="margin-bottom:20px"></div>
    {{Form::password('s_password',['class'=>'awesome form-control' , 'placeholder'=>'Enter your password'])}}
    <div style="margin-bottom:20px"></div>
    {{Form::file('s_photo')}}
    <div style="margin-bottom:20px"></div>
    {{Form::submit('signup',['class'=> 'btn btn-primary','onclick'=>'showMessage($emailstate)'])}}
{!! Form::close() !!}

<h4 class="msg_signup">If you already have an account <b><a href="/signup/librarian_login">login >></a></b></h4>

</div>

</div>
@endsection