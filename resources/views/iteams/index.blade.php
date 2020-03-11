@extends('layouts.master')

@section('main')
<div>
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="margin:10px;">
            <a class="btn btn-success" href="{{ route('iteams.create')}}"> Create Items</a>
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
<h1 class="pull-left">Items</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
            <td>ID</td>
            <td>Item Name</td>
            <td>Item Price</td>
            <td>Item categorys </td>
            <td>Item Description</td>
            <td>Item Time </td>
            <td>Image </td>
            <td colspan = 2>Actions</td>
          </tr>
      </thead>
      <tbody>
          @foreach($iteams as $iteam)
          <tr>
            <td>{{$iteam->id}}</td>
            <td>{{$iteam->iteam_name}} </td>
            <td>{{$iteam->iteam_price}}</td>
            <td>{{$iteam->iteam_category}}</td>
            <td>{{$iteam->iteam_discription}}</td>
            <td>{{$iteam->iteam_time}}</td>
            <td><img src="{{ URL::to('/') }}/images/{{ $iteam->image }}" class="img-thumbnail" width="75" /></td>

            <td>
              <div class="row">
                <div class="col-sm-3">
                  <a href="{{ route('iteams.edit',$iteam->id)}}" class="btn btn-success">Edit</a>
                </div>
                <div class="col-sm-3">
                  <form action="{{ route('iteams.destroy', $iteam->id)}}" method="post">
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
