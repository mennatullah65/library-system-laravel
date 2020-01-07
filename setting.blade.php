@extends('master.librarian')
@section ('content')
<div class="container" style="margin-left:0px;height:600px;width:250px;background-color:rgb(246, 244, 131);">
@foreach($data as $ss)
<div style="float:left;margin:20px;">
<img src="{{asset($ss->librarianPhoto)}}" style="border-radius:50%;"alt="librarian photo" width="200" height="200">
<p>Name is : {{$ss->librarianName}} </p>
<p>phone is : {{$ss->librarianPhone}} </p>
<p>address is : {{$ss->librarianAddress}} </p>
<p>gender is : {{$ss->librarianGender}} </p>
</div>
@endforeach 
</div>
@endsection 




