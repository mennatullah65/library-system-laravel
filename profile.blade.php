@extends('master.librarian')
@section ('content')

<div class="container" style="margin-left:0px;height:1500px;width:250px;background-color:rgb(246, 244, 131);">

@if(count($data)>0)
@foreach($data as $l)
<div style="float:left;margin:20px;">
<img src="{{asset($l->librarianPhoto)}}" style="border-radius:50%;"alt="librarian photo" width="200" height="200">
<p>Name is : {{$l->librarianName}} </p>
<p>phone is : {{$l->librarianPhone}} </p>
<p>address is : {{$l->librarianAddress}} </p>
<p>gender is : {{$l->librarianGender}} </p>
<button style="background-color:brown;width:100px;height:30px;color:white;font-family:'ABeeZee';margin-left:30px;">
<a href="/editprofile" style="text-decoration:none;color:white;">Edit Profile</a>
</button>
</div> 
@endforeach
@endif
</div>
<div class="containerofbooks" style="height:1500px;">
<div style="margin-top:-1500px;margin-left:250px;width:1100px;background-color:rgb(167, 195, 171);height:30px;color:white;font-family:'Abel';font-size:20px;font-weight:bolder;text-align:center;">
my books
</div>
<div class="container" style="margin-left:250px;font-family:'Abel'font-weigth:bolder;">
@if(count($books)>0) 
@foreach($books as $b)
<div style="float:left;margin-left:20px;margin-top:20px; width:300px;height:400px;overflow:auto;background-color:rgb(167, 195, 171);">
<img src="{{asset($b->pathphoto)}}" style="border-radius:50%;margin-left:30px;"alt="librarian photo" width="200" height="200">
<div class="all" style="margin-left:10px;">
<p><div class="tmp">Name :</div> {{$b->Name}} </p>
<p><div class="tmp">ISBN :</div> {{$b->ISBN}} </p>
<p><div class="tmp">Author :</div> {{$b->author}} </p>
<p><div class="tmp">Description :</div> {{$b->description}} </p>

<!--
<button style="margin-bottom:10px;background-color:green;width:100px;height:30px;color:white;font-family:'ABeeZee';margin-left:30px;">
<a href="/editbook/{{$b->bookId}}" style="text-decoration:none;color:white;">Edit</a>
</button>

<button style="margin-bottom:10px;background-color:brown;width:100px;height:30px;color:white;font-family:'ABeeZee';margin-left:30px;">
<a href="/deletebook/{{$b->bookId}}/{{$b->librarianEmail}}" style="text-decoration:none;color:white;">delete</a>
</button>
-->


<div style="margin:10px;display:inline-block;">
{!! Form::open(['url' => 'profile/edit']) !!}
<div style="display:none">
{{Form::text('b_id',$b->bookId)}}
{{Form::text('b_email',$b->librarianEmail)}}
</div>
{{Form::submit('Edit',['class'=> 'btn btn-success'])}}
{!! Form::close() !!}
</div>

<div style="margin:10px;display:inline-block;">
{!! Form::open(['url' => 'profile/delete']) !!}
<div style="display:none">
{{Form::text('b_id',$b->bookId)}}
{{Form::text('b_email',$b->librarianEmail)}}
</div>
{{Form::submit('delete',['class'=> 'btn btn-danger'])}}
{!! Form::close() !!}
</div>

<div style="margin:10px;display:inline-block;">
{!! Form::open(['url' => 'profile/more']) !!}
<div style="display:none">
{{Form::text('b_id',$b->bookId)}}
{{Form::text('b_email',$b->librarianEmail)}}
</div>
{{Form::submit('More',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
</div>


</div>
</div> 
@endforeach
@else
<div style="font-family:'Abel';font-size:25px;font-weight:bolder;text-align:left;margin-left:50px;">
User has no books.
</div>
@endif
</div>

</div>


@endsection 

