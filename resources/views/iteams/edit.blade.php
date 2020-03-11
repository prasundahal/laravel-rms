@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Iteam</h1>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('iteams.index') }}"> Back</a>
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
        <form method="post" action="{{ route('iteams.update', $iteam->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="iteam_name">Item Name:</label>
                <input type="text" class="form-control" name="iteam_name"/>
            </div>

            <div class="form-group">
                <label for="iteam_price">Item Price:</label>
                <input type="text" class="form-control" name="iteam_price"/>
            </div>

            <div class="form-group">
                <label for="iteam_discription">Item Description:</label>
                <input type="text" class="form-control" name="iteam_discription"/>
            </div>

            <div class="form-group">
                <label for="iteam_type">Item Type:</label>
                <input type="text" class="form-control" name="iteam_type"/>
            </div>

            <div class="form-group">
                <label for="iteam_time">Time to Prepare Item:</label>
                <input type="text" class="form-control" name="iteam_time"/>
            </div>
            <div class="form-group">
                <label for="iteam_time">Image:</label>
                <input type="file" class="form-control" name="image"/>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
