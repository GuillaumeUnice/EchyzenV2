@extends('general.layout')
@section('body')
    <h3>Creation News</h3><br/>

    <form role="form" method="POST" action="{{ url(route('news_create')) }}" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
            <input class="form-control" type="text" name="title" id="title" required="required" placeholder="Titre" value="{{ old('email') }}"/>
            <div class="input-group-addon"><span>Titre</span></div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-minus"></span></div>
            <textarea class="form-control" name="intro" id="intro"  placeholder="Introduction" cols="30" rows="5" ></textarea>
            <div class="input-group-addon"><span>Introduction</span></div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-plus"></span></div>
            <textarea class="form-control" name="contenu" id="contenu"  placeholder="Contenu" cols="30" rows="5" ></textarea>
            <div class="input-group-addon"><span>Contenu</span></div>
        </div>
        <br/>

        <input type="checkbox" name="publication" value="0" />Publication

        <div class="required-info">
            <i>* Les champs en rouge sont obligatoires</i><br/>
        </div>

        <p class="login button">
            <input type="submit" class="btn-form" value="Valider">
        </p>
    </form>
@endsection
