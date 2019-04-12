@extends('layout')

@section('mainContent')
	<h1>Show Car</h1>

	<div style="color: {{$car->color}}">
		<table class="table table-striped">
			<caption>Car Details</caption>
			<thead>
				<tr>
					<th>Name</th>
					<th>Company</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>{{$car->name}} </strong></td>
					<td><strong>{{$car->company}} </strong></td>
				</tr>
			</tbody>
		</table>
		
		
	</div>
@endsection