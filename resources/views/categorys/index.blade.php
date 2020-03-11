@extends('layouts.master')

@section('main')
<div>
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="margin:10px;">
            <a class="btn btn-success" href="{{ route('categorys.create')}}"> Create Category</a>
        </div>
    </div>
</div>
</div>
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
@endif
<div class="container custom-form">
  <div class="row">
  <div class="col-sm-12">
  </div>
    <h1 class="pull-left">Category</h1>
    <table class="table table-bordered">
      <thead>
          <tr>
            <td>ID</td>
            <td> Name</td>

            <td>Image </td>
            <td colspan = 2>Actions</td>
          </tr>
      </thead>
      <tbody>
          @foreach($categorys as $category)
          <tr>
              <td>{{$category->id}}</td>
              <td>{{$category->category_name}} </td>


              <td><img src="{{ URL::to('/') }}/images/{{ $category->image }}" class="img-thumbnail" width="75" /></td>

              <td>
                <div class="row">
                  <div class="col-sm-3">
                    <a href="{{ route('categorys.edit',$category->id)}}" class="btn btn-success">Edit</a>
                  </div>
                  <div class="col-sm-3">
                    <form action="{{ route('categorys.destroy', $category->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                  </div>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
