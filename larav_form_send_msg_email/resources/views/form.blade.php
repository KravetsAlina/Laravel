<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Form</title>
  </head>
  <body>

     <h1>Email Form</h1>

     {!! Form::open(['url'=>'send-mail']) !!}

       {{ Form::label('name', 'Name') }}
       {{ Form::text('name') }}
       <br><br>
       {{ Form::label('email', 'E-mail') }}
       {{ Form::text('email') }}
       <br><br>
       {{ Form::label('msg', 'Message') }}
       {{ Form::textarea('msg') }}
       <br><br>
       {{ Form::submit('Send') }}

     {!!Form::close()!!}

  </body>
</html>
