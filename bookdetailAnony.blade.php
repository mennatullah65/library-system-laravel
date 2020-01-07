@extends('master.anony')
@section ('content')
<div class="container" style="margin-left:250px;font-family:'Abel'font-weigth:bolder;">
@if(count($books)>0)
@foreach($books as $b)
<div style="float:left;margin:20px; width:500px;height:1000px;overflow:auto;background-color:rgb(167, 195, 171);">
<img src="{{asset($b->pathphoto)}}" style="border-radius:50%;margin-left:30px;"alt="librarian photo" width="200" height="200">
<div class="all" style="margin-left:10px;">
<p><div class="tmp">Name :</div> {{$b->Name}} </p>
<p><div class="tmp">ISBN :</div> {{$b->ISBN}} </p>
<p><div class="tmp">Author :</div> {{$b->author}} </p>
<p><div class="tmp">Description :</div> {{$b->description}} </p>
<p><div class="tmp">Publisher :</div> {{$b->publisher}} </p>
<p><div class="tmp">Category :</div> {{$b->category}} </p>
<p><div class="tmp">Edition :</div> {{$b->edition}} </p>
<p><div class="tmp">Language :</div> {{$b->language}} </p>
<p><div class="tmp">Number Of Pages :</div> {{$b->numberOfPages}} </p>
<p><div class="tmp">Number Of Copies :</div> {{$b->numberOfCopies}} </p>
<p><div class="tmp">Price :</div> {{$b->price}} </p>
<p><div class="tmp">Publish Date :</div> {{$b->publishDate}} </p>

</div>
</div> 
@endforeach
@else
<div style="font-family:'Abel';font-size:25px;font-weight:bolder;text-align:left;margin-left:50px;">
User has no books.
</div>
@endif
</div>
@endsection 
