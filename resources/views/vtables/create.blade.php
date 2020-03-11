@extends('layouts.master')
@section('main')
<div class="container">
<h1>Add a table</h1>
<div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tables.index') }}"> Back</a>
    </div>
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
          <form method="post" action="{{ route('tables.store') }}">
              @csrf
            <div class="form-group">
              <label for="table_number">Table Number:</label>
              <input type="text" class="form-control" name="table_number"/>
            </div>

            <div class="form-group">
                <label for="table_capicity">New table Capicity:</label>
                <input type="text" class="form-control" name="table_capicity"/>
            </div>
            <button type="submit" class="btn btn-primary">Add New table</button>
          </form>
      </div>
  </div>
</div>
@endsection
