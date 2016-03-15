<!DOCTYPE html>
<html>
<head>
	<title>tochten overzicht</title>
</head>
<body>
<a href="{{url('/tochten/create')}}" class="btn btn-success">Nieuwe tocht</a>
<div>
	<table>
		<tr>
			<th>TochtID</th>
			<th>Tochtnaam</th>
			<th>gecreëerd</th>
		</tr>
		<tdbody>
			@foreach ($tochten as $tocht)
		<tr>
			<td>{{ $tocht->id }}</td>
			<td>{{ $tocht->tochtnaam }}</td>
			<td>{{ $tocht->created_at }}</td>
		</tr>
			@endforeach
		</tdbody>
	</table>
</div>

</body>
</html>