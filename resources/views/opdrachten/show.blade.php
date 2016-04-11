<!DOCTYPE html>
<html>
<head>
	<title>{{$opdracht->opdrachtnaam}}</title>
</head>
<body>
<a href="{{url('/opdrachten')}}">terug</a>
<h1>Opdracht lezen</h1>
<form>
	<div class="form-group">
	    <label for="isbn" class="col-sm-2 control-label">Opdrachtnaam:</label>
	        <input type="text" class="form-control" id="tochtnaam" placeholder={{$opdracht->opdrachtnaam}} readonly>
	</div>
	<div class="form-group">
	    <label for="isbn" class="col-sm-2 control-label">Opdracht:</label>
	        <input type="text" class="form-control" id="tochtnaam" placeholder={{$opdracht->opdracht}} readonly>
	</div>
	<div class="form-group">
	    <label for="isbn" class="col-sm-2 control-label">gecreëerd</label>
	        <input type="text" class="form-control" id="tochtnaam" placeholder={{$opdracht->created_at}} readonly>
	</div>
	<div class="form-group">
	    <label for="isbn" class="col-sm-2 control-label">laatst geupdate:</label>
	        <input type="text" class="form-control" id="tochtnaam" placeholder={{$opdracht->updated_at}} readonly>
	</div>
</form>
</body>
</html>