<!DOCTYPE html>
<html>
<head>
	<title>Opdrachten overzicht</title>
</head>
<body>
<a href="{{url('/opdrachten/create')}}">Nieuwe opdracht</a>
<div>
	<table>
		<tr>
			<th>OpdrachtID</th>
			<th>Opdrachtnaam</th>
			<th>Instructie/vraag</th>
			<th>gecreëerd</th>
			<th>laatst geupdate</th>
		</tr>
		<tdbody>
			@foreach ($opdrachten as $opdracht)
		<tr>
			<td>{{ $opdracht->id }}</td>
			<td>{{ $opdracht->opdrachtnaam }}</td>
			<td>{{ $opdracht->opdracht }}</td>
			<td>{{ $opdracht->created_at }}</td>
			<td>{{ $opdracht->updated_at }}</td>
			<td><a href="{{route('opdrachten.show',$opdracht->id)}}">Lees</a></td>
			<td><a href="{{route('opdrachten.edit',$opdracht->id)}}">Update</a></td>
			<td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['opdrachten.destroy', $opdracht->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
            </td>

		</tr>
			@endforeach
		</tdbody>
	</table>
</div>

</body>
</html>