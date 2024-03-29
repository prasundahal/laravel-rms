@extends('layouts.master')

@section('main')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="margin:10px;">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<div class="container custom-form">
<h1 class="pull-left">
 User Management
</h1>
<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
        @if($v == "Waiter")
           <label class="badge badge-success">{{ $v }}</label>
        @elseif($v == "Admin")
           <label class="badge badge-warning">{{ $v }}</label>
        @elseif($v == "Chef")
           <label class="badge badge-danger">{{ $v }}</label>
        @endif
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-primary" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-success" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>
</div>

{!! $data->render() !!}

@endsection