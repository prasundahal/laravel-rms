@extends('layouts.master')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a table</h1>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tables.index') }}"> Back</a>
    </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('tables.update', $table->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="table_number">Table Number:</label>
                <input type="text" class="form-control" name="table_number" value={{ $table->table_number }} />
            </div>

            <div class="form-group">

                <label for="table_name">Table Capicity:</label>
                <input type="text" class="form-control" name="table_capicity" value={{ $table->table_capicity }} />
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
