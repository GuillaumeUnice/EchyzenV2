@extends('admin.slide.layout')

@section('body_content')

    <h2>Edition Slide</h2>
      {!! Form::open(array('url' => url(route('admin.slide.update', $slide->id)), 'method' => 'PUT', 'files' => 'true')) !!}

        {!! Form::customInput( array(
                                'type' => 'text',
                                'name' => 'title',
                                'placeholder' => 'Titre',
                                'glyphicon' => 'glyphicon-pencil',
                                'old' => $slide->title))
        !!}
        <br/>
        {!!
          Form::customTextarea( array(
                                    'name' => 'content',
                                    'placeholder' => 'Contenu',
                                    'glyphicon' => 'glyphicon-pencil',
                                    'old' => $slide->content))
        !!}
        <br />
        <div class="left">
        {!! Form::file('imageSlide') !!}
        </div>
        <img class="image_miniature" src="{{ asset(Config::get('image.pathSlider') . $slide->url) }}" />
        <br/>
        {!!
          Form::customInput( array(
                                'type'        => 'text',
                                'name'        => 'alt',
                                'placeholder' => 'Alt',
                                'glyphicon'   => 'glyphicon-info-sign',
                                'old'         => $slide->alt))
        !!}

        <div class="required-info">
            <i>* Les champs avec pouce rouge doivent être complétés</i><br/>
        </div>

        {!! Form::buttonSubmit( array('text' => 'Editer') ) !!}

    {!! Form::close() !!}

@endsection
