@extends('layouts.app')
@section('main')
<div class="container">
<div class="row">
    <a style="margin:10px;" href="{{ route('tables.create')}}" class="btn btn-primary">New vTable</a>
</div>
  <div class="row">
    <div class="col-sm-12">
      @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    @endif
    </div>
    <h1>Tables@Ketali</h1>
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>Table Nmuber</td>
            <td>Table capicity</td>
            <td colspan = 2>Actions</td>
          </tr>
      </thead>
      <tbody>
          @foreach($tables as $table)
          <tr>
              <td>{{$table->id}}</td>
              <td>{{$table->table_number}} </td>
              <td>{{$table->table_capicity}}</td>

                <td>
                    <a href="{{ route('tableorders.create',$table->id)}}" class="btn btn-primary">book table</a>
                </td>
                <td>
                  <form action="{{ route('tableorders.destroy', $table->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>



