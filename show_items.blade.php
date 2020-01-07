@extends('master.anony')
@section ('content')
<div class="container" style="margin-left:30px;">

@if(count($all_data)>0)
@foreach($all_data as $b)
<div style="float:left;margin:20px; width:400px;height:400px;overflow:auto;background-color:rgb(167, 195, 171);">
<img src="{{asset($b->pathphoto)}}" style="margin-top:10px;border-radius:50%;margin-left:30px;"alt="librarian photo" width="200" height="200">
<div class="all" style="margin-left:10px;">
<p><div class="tmp">Name :</div> {{$b->Name}} </p>
<p><div class="tmp">ISBN :</div> {{$b->ISBN}} </p>
<p><div class="tmp">Author :</div> {{$b->author}} </p>
<p><div class="tmp">Description :</div> {{$b->description}} </p>
<div style="margin:10px;display:inline-block;">
{!! Form::open(['url' => 'items/itemdetail']) !!}
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
@endif
</div>
@endsection