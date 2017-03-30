<!DOCTYPE html>
<html>
<head>
	<title>Université Constantine 2 |Crée réunion</title>
</head>
<body>
		<h2>Nouvelle réunion</h2>

		{!! Form::open(['route' => 'reunions.store']) !!}
    		{{ Form::label('titre', 'Titre:') }}
    		{{ Form::text('titre', null) }}

    		{{ Form::label('contenu', 'Ordre du jour:') }}
    		{{ Form::textarea('contenu', null) }}

    		{{ Form::submit('Create') }}
		{!! Form::close() !!}
</body>
</html>