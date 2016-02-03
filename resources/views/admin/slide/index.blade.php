@extends('admin.slide.layout')


@section('body_content')
    <h2>Tous les Slides</h2>
    <table style="width:100%">
        <tr>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Img</th>
        <th>Alt</th>
        <th>Action</th>
        </tr>
        @foreach($slides as $slide)
            <tr>
                <td>{{ $slide->title }}</td>
                <td>{{ $slide->content }}</td>
                <td><img style="width 50px; height : 20px;" src="{{ asset(Config::get('image.pathSlider') . $slide->url) }}" /></td>
                <td>{{ $slide->alt }}</td>
                <td>
                    <a href="{{ route('admin.slide.destroy', $slide->id) }}"><span class="glyphicon glyphicon-remove"></span></a>

                     <form role="form" method="POST" action="{{ url(route('admin.slide.destroy', $slide->id)) }}" enctype="multipart/form-data">
                         <input name="_method" type="hidden" value="DELETE">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         {!! Form::buttonSubmit( array('text' => 'Supprimer') ) !!}
                     </form>
                    <a href="{{ route('admin.slide.edit', $slide->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
                </td>
            </tr>
        @endforeach
    </table>

    <h2>Creation Slide</h2>
        {!! Form::open(array('url' => url(route('admin.slide.store')), 'method' => 'POST', 'files' => 'true')) !!}

            {!!
              Form::customInput( array(
                                    'type'        => 'text',
                                    'name'        => 'title',
                                    'placeholder' => 'Titre',
                                    'glyphicon'   => 'glyphicon-pencil',
                                    'old'         => Input::old('title')))
            !!}
            <br/>
            {!!
                Form::customTextarea(array('name'      => 'content',
                                        'description'   => 'Contenu',
                                        'glyphicon'     => 'glyphicon-pencil',
                                        'class'         => 'tiny-editor',
                                        'old'         => Input::old('content')))
            !!}
            <br />
            {!! Form::file('imageSlide') !!}
            <br/>
            {!!
              Form::customInput( array(
                                    'type'        => 'text',
                                    'name'        => 'alt',
                                    'placeholder' => 'Alt',
                                    'glyphicon'   => 'glyphicon-info-sign',
                                    'old'         => Input::old('alt')))
            !!}

            <div class="required-info">
                <i>* Les champs avec pouce rouge doivent être complétés</i><br/>
            </div>
            {!! Form::buttonSubmit( array( 'text' => 'Ajouter') ) !!}

        {!! Form::close() !!}

@endsection

