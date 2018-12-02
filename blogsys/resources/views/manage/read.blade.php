
@extends('layouts.app')
@section('content')
  <div class="container">
  <div class="form-group">
    <lable for="usr">title:</lable>
    {{$article->title}}
  </div>

  <div class="form-group">
  <lable for="usr">body:</lable>
  {{$article->body}}
</div>
 <div class="form-group">
   <table class="table table-striped">
      <tr>
         <td>comments</td>
      </tr>
  @foreach($article->comments as $c)
  <tr> <td> {{$c->comment}}</td> </tr>
  @endforeach
</table>
<form action="/read/{{$article->id}}" method="POST">
  {{csrf_field()}}
  <div class="form-group">
    <lable for="usr">body:</lable>
    <textarea rows="4" cols="50" name="body" class="form-control">
   </textarea></div>
 </br>
 <input type="submit" value="add comment" class="btn btn-primary">
</form>
</div>
</div>
@endsection
