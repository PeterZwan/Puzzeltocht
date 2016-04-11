<!DOCTYPE html>
<html>
<head>
    <title>Nieuwe opdracht</title>
</head>
<body>  
    <a href="{{url('/opdrachten')}}">Terug</a>
    <h1>Nieuwe opdracht</h1>
    <div>
      {!! Form::open(array('url' => 'opdrachten')) !!}
    </div>
    <div>
        {!! Form::label('Opdrachtnaam', 'Opdrachtnaam:') !!}
        {!! Form::text('opdrachtnaam', null, array('opdrachtnaam' => '','maxlength' => 15 )) !!}
    </div>
    <div>
        {!! Form::label('Opdracht', 'Instructie/Vraag:') !!}
        {!! Form::text('opdracht', null, array('opdracht' => '','maxlength' => 100 )) !!}
    </div>
    <div>
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</body>
</html>
