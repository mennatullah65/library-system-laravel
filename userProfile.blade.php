@extends('master.user')
@section ('content')
<div class="container" style="margin-left:0px;height:1500px;width:250px;background-color:rgb(246, 244, 131);">

@if(count($data)>0)
@foreach($data as $u)
<div style="float:left;margin:20px;">
<img src="{{asset($u->photo)}}" style="border-radius:50%;"alt="librarian photo" width="200" height="200">
<p>Name is : {{$u->name}} </p>
<p>Email is : {{$u->email}} </p>
<button style="background-color:brown;width:100px;height:30px;color:white;font-family:'ABeeZee';margin-left:30px;">
<a href="/editprofile" style="text-decoration:none;color:white;">Edit Profile</a>
</button>
</div> 
@endforeach
@endif
</div>



@endsection 

