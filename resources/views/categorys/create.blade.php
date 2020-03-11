@extends('layouts.master')
@section('main')
<div class="container">
<h1>Add an Category</h1>

  <div class="row">
  <div class="col-sm-8 offset-sm-2">
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{ route('categorys.store') }}" enctype="multipart/form-data">
          @csrf
        <div class="form-group">
            <label for="category_name">Category Name:</label>
            <input type="text" class="form-control" name="category_name"/>
        </div>


        <div class="form-group">
            <label for="category_time">Image:</label>
        <input type="file" name="image" />






        <button type="submit" class="btn btn-primary" value="Add">Add Category</button>
      </form>
  </div>
</div>
</div>
</div>
@endsection
