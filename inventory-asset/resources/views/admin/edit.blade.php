@extends('adminlte::page')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Admin</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admins.index') }}">Admins</a></li>
          <li class="breadcrumb-item active">Edit Admin</li>
        </ol>
      </div>
    </div>
</div><!-- /.container-fluid -->
@stop

@section('content')
<div class="container-fluid">
	<div class="card card-info">
	  <!-- /.card-header -->
	  <!-- form start -->
	  <form class="form-horizontal" method="POST" action="{{ route('admins.update', $data->id) }}">
	  	@csrf
	  	@method('PUT')
	    <div class="card-body">
	      <div class="form-group row">
	        <label for="nama" class="col-sm-2 col-form-label">Name</label>
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name', $data->name) }}">
	        @error('name')
	            <p class="text-danger">{{ $message }}</p>
	        @enderror
	        </div>
	      </div>

	      <div class="form-group row">
	        <label for="nama" class="col-sm-2 col-form-label">ID</label>
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="admin_id" id="admin_id" placeholder="ID"value="{{ old('admin_id', $data->admin_id) }}">
	        @error('admin_id')
	            <p class="text-danger">{{ $message }}</p>
	        @enderror
	        </div>
	      </div>

	      <div class="form-group row">
	        <label for="nama" class="col-sm-2 col-form-label">Email Address</label>
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" value="{{ old('email', $data->email) }}">
	        @error('email')
	            <p class="text-danger">{{ $message }}</p>
	        @enderror
	        </div>
	      </div>

	      <div class="form-group row">
	        <label for="nama" class="col-sm-2 col-form-label">Password</label>
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="{{ old('password') }}">
	          <p class="text-muted">Let it empty if you don't want to change your password.</p>
	        @error('password')
	            <p class="text-danger">{{ $message }}</p>
	        @enderror
	        </div>
	        
	      </div>
	    		      
	      <div class="form-group row">
	        <label class="col-sm-2 col-form-label">Role</label>
	        <div class="col-sm-10">
	        <select class="form-control" name="role">
	        	@foreach($roles as $role)
              @if($role->name == old('role', $data->roles->pluck('name')->implode(',')))
                <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
              @else
                <option value="">Choose Role</option>
                <option value="{{ $role->id }}">{{ $role->name }}</option>
              @endif
            @endforeach
	          </select>
	      	  @error('role')
	      	      <p class="text-danger">{{ $message }}</p>
	      	  @enderror
	      	  </div>
        </div>

        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Phone Number</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ old('phone_number', $data->phone_number) }}">
          @error('phone_number')
              <p class="text-danger">{{ $message }}</p>
          @enderror
          </div>
        </div>
	    </div>
	    <!-- /.card-body -->
	    <div class="card-footer">
	      <button type="submit" class="btn btn-info">Save</button>
	      <a href="{{ route('admins.index') }}" class="btn btn-danger">Back</a>
	    </div>
	    <!-- /.card-footer -->
	  </form>
	</div>	            <!-- /.card -->
</div>
@stop