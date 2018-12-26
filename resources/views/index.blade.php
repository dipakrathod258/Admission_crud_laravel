@include('app')
<style type="text/css">
	td {
		max-width: 177px;
        word-break: break-word;
	}
</style>
@include('header')
<div class="container">
	<div class="row">
		<h3><b>Student Details:</b></h3>
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Mobile</th>
					<th>Password</th>
					<th>Confirm Password</th>
					<th>Action</th>
				</tr>	
			</thead>
			<tbody>
				@foreach($data as $val)
				<tr>
					<td>{{$val->name}}</td>
					<td>{{$val->email}}</td>
					<td>{{$val->address}}</td>
					<td>{{$val->mobile}}</td>
					<td>{{$val->sspassword}}</td>
					<td>{{$val->confirm_password}}</td>
					<td>
						<a href="{{url('/update_student')}}/{{$val->id}}" class="btn btn-info" title="Edit Student"><i class="fa fa-edit"></i></a>
						<a href="{{url('/delete_student')}}/{{$val->id}}" class="btn btn-danger" title="Delete Student"><i class="fa fa-trash-o"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
