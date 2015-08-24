@extends('general.layout')

@section('nav')
    <li><a href="{{ route('index') }}">Accueil</a></li>
    <li><a href="{{ route('admin.slide.index') }}">Slide</a></li>
    <li><a href="#">News</a></li>
    <li><a href="#">Galerie</a></li>
    <li><a href="{{ route('admin.project.index') }}">Projet</a></li>
    <li><a href="#">Tuto</a></li>
    <li><a href="#">Test</a></li>
    <li><a href="#">Site</a></li>
@endsection
