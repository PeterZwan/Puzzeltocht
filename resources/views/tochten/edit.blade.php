<!DOCTYPE html>
<html>
<head>
    <title>Tocht aanpassen</title>
</head>
<body> 
    <a href="{{url('/tochten')}}">annuleren</a>
    <h1>Tocht aanpassen</h1>
    <div>
      {!! Form::model($tocht,['method' => 'PATCH','route'=>['tochten.update',$tocht->id]]) !!}
    </div>
    <div>
        {!! Form::label('Tochtnaam', 'Tochtnaam:') !!}
        {!! Form::text('tochtnaam'); !!}
    </div>
    <div>
        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</body>
</html>
