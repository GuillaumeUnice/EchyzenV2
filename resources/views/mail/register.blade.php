@extends('mail.layout')

@section('content')
    <br/>Félicitation!
    <br>Vous vous êtes inscris sur Echyzen's Portofolio!!!
    <br/><br/>Pour confimer votre inscription, il vous suffit de cliquer sur le lien suivant :
    <a href="{{ url('/verify') . '/' . $token }}">{{ url('/verify') . '/' . $token }}</a>
@endsection
