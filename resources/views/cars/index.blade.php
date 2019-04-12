@extends('layout')

@section('mainContent')
	<h1>List Car</h1>
	<table class="table table-striped">
		<caption>Cars</caption>
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cars as $car)
			<tr>
				<td><a href="cars/{{$car->id}}">{{$car->name}}</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
		
	
@endsection