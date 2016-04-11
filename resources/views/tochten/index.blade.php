<!DOCTYPE html>
<html>
<head>
	<title>tochten overzicht</title>
</head>
<body>
<a href="{{url('/tochten/create')}}">Nieuwe tocht</a>
<div>
	<table>
		<tr>
			<th>TochtID</th>
			<th>Tochtnaam</th>
			<th>gecreëerd</th>
			<th>laatst geupdate</th>
		</tr>
		<tdbody>
			@foreach ($tochten as $tocht)
		<tr>
			<td>{{ $tocht->id }}</td>
			<td>{{ $tocht->tochtnaam }}</td>
			<td>{{ $tocht->created_at }}</td>
			<td>{{ $tocht->updated_at }}</td>
			<td><a href="{{route('tochten.show',$tocht->id)}}">Lees</a></td>
			<td><a href="{{route('tochten.edit',$tocht->id)}}">Update</a></td>
			<td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['tochten.destroy', $tocht->id]]) !!}
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