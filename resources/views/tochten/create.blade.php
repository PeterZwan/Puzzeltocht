<!DOCTYPE html>
<html>
<head>
    <title>Nieuwe tocht</title>
</head>
<body>  
    <a href="{{url('/tochten')}}">Terug</a>
    <h1>Nieuwe tocht</h1>
    <div>
      {!! Form::open(array('url' => 'tochten')) !!}
    </div>
    <div>
        {!! Form::label('Tochtnaam', 'Tochtnaam:') !!}
        {!! Form::text('tochtnaam', null, array('tochtnaam' => '','maxlength' => 15 )) !!}
    </div>
    <div>
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</body>
</html>
