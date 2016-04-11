<!DOCTYPE html>
<html>
<head>
	<title>{{$tocht->tochtnaam}}</title>
</head>
<body>
<a href="{{url('/tochten')}}">terug</a>
<h1>Tocht lezen</h1>
<form>
	<div class="form-group">
	    <label for="isbn" class="col-sm-2 control-label">Tochtnaam:</label>
	        <input type="text" class="form-control" id="tochtnaam" placeholder={{$tocht->tochtnaam}} readonly>
	</div>
</form>
</body>
</html>