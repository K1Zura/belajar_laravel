@extends('layout.mainlayout')

@section('title', 'Add New Student')

@section('content')
<center><h1>Add Student</h1></center>
	<div class="container">
		<div class="mt-5 col-5 m-auto">
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<form action="student" method="post" enctype="multipart/form-data">
				@csrf
				<div class="mb-3">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" id="name">
				</div>
				<div class="mb-3">
					<label for="gender">Gender</label>
					<select name="gender" id="gender" class="form-control">
						<option value="">....</option>
						<option value="L">Laki-Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="nis">NIS</label>
					<input type="text" name="nis" class="form-control" id="nis">
				</div>
				<div class="mb-3">
					<label for="class">Class</label>
					<select name="class_id" id="class" class="form-control">
						<option value="">....</option>
						@foreach ($class as $item)
							<option value="{{$item->id}}">{{$item->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="mb-3">
					<label for="photo">photo</label>
					<div class="input-group">
						<input type="file" class="form-control" id="photo" name="photo">
					  </div>
				</div>
				<div class="mb-3">
					<button class="btn btn-success" type="submit">Save</button>
				</div>
			</form>
		</div>
	</div>
@endsection