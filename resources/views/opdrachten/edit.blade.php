<!DOCTYPE html>
<html>
<head>
    <title>Opdracht {{$opdracht->opdrachtnaam}} aanpassen</title>
</head>
<body>  
    <a href="{{url('/opdrachten')}}">Terug</a>
    <h1>Opdracht aanpassen</h1>
    <div>
      {!! Form::model($opdracht,['method' => 'PATCH','route'=>['opdrachten.update',$opdracht->id]]) !!}
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
        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</body>
</html>
