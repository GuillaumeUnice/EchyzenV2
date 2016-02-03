@extends('admin.project.layout')

@section('body_content')
  <h2>Edition Projet</h2>
    {!! Form::open(array('url' => url(route('admin.project.update', $project->id)), 'method' => 'PUT', 'files' => 'true')) !!}

      {!! Form::customInput(array(
                              'type'        => 'text',
                              'name'        => 'title',
                              'placeholder' => 'Titre',
                              'glyphicon'   => 'glyphicon-pencil',
                              'required'    => 'required',
                              'old'         => Input::old('title') ? Input::old('title') : $project->title))
      !!}
      <br/>
      <h2>Image de présentation</h2>
      <div class="left">
      {!! Form::file('image_first') !!}
      </div>
      <img class="image_miniature" src="{{ asset(Config::get('image.pathProject') . $project->url_image_first) }}" />
      <br/>
      {!! Form::customInput( array(
                            'type'        => 'text',
                            'name'        => 'alt_image_first',
                            'placeholder' => 'Alt',
                            'glyphicon'   => 'glyphicon-info-sign',
                            'old'         => Input::old('alt_image_first') ? Input::old('alt_image_first') : $project->alt_image_first))
      !!}
      <br/>
      <h2>Présentation préliminaire</h2>
      {!!
        Form::customTextarea(array('name'      => 'preamble',
                                'description'  => 'Préambule',
                                'glyphicon'    => 'glyphicon-pencil',
                                'class'        => 'tiny-editor',
                                'old'          => Input::old('preamble') ? Input::old('preamble') : $project->preamble))
      !!}
      <br />
      {!!
        Form::customTextarea(array('name'      => 'introduction',
                                'description'  => 'Introduction',
                                'glyphicon'    => 'glyphicon-pencil',
                                'class'        => 'tiny-editor',
                                'old'          => Input::old('introduction') ? Input::old('introduction') : $project->introduction))
      !!}
      <br />
      <h2>Données</h2>
      {!! Form::customInput(array(
                            'type'        => 'number',
                            'name'        => 'level',
                            'placeholder' => 'Niveau',
                            'glyphicon'   => 'glyphicon-star',
                            'required'    => 'required',
                            'min'         => Config::get('project.level.minimum'),
                            'max'         => Config::get('project.level.maximum'),
                            'old'         => Input::old('level') ? Input::old('level') : $project->level))
      !!}
      <br />
      {!! Form::customInput(array(
                           'type'        => 'number',
                           'name'        => 'progress',
                           'placeholder' => 'Progression',
                           'glyphicon'   => 'glyphicon-console',
                           'min'         => Config::get('project.progress.minimum'),
                           'max'         => Config::get('project.progress.maximum'),
                           'old'         => Input::old('progress') ? Input::old('progress') : $project->progress))
      !!}
      <br />
      {!! Form::customInput(array(
                           'type'        => 'text',
                           'name'        => 'priority',
                           'placeholder' => 'Priorité',
                           'glyphicon'   => 'glyphicon-scale',
                           'min'         => Config::get('project.progress.minimum'),
                           'max'         => Config::get('project.progress.maximum'),
                           'old'         => Input::old('priority') ? Input::old('priority') : $project->priority))
      !!}
      <br />
      {!! Form::customInput(array(
                           'type'        => 'text',
                           'name'        => 'software',
                           'placeholder' => 'Logiciel',
                           'glyphicon'   => 'glyphicon-cog',
                           'min'         => Config::get('project.progress.minimum'),
                           'max'         => Config::get('project.progress.maximum'),
                           'old'         => Input::old('software') ? Input::old('software') : $project->software))
      !!}
      <br />
      {!!
         Form::customTextarea(array('name'      => 'goal',
                                 'description'  => 'But',
                                 'glyphicon'    => 'glyphicon-pencil',
                                 'required'     => 'required',
                                 'old'          => Input::old('goal') ? Input::old('goal') : $project->goal))
      !!}
      <br />
      {!!
        Form::customInput(array('type'         => 'datetime-local',
                                'name'         => 'start_day',
                                'placeholder'  => 'Date de début',
                                'glyphicon'    => 'glyphicon-calendar',
                                'old'          => Input::old('start_day') ? Input::old('start_day') : $project->start_day))
      !!}
      <br />
      {!!
        Form::customInput(array('type'         => 'datetime-local',
                                'name'         =>'end_day',
                                'placeholder'  => 'Date de fin',
                                'glyphicon'    => 'glyphicon-calendar',
                                'old'          => Input::old('end_day') ? Input::old('end_day') : $project->end_day))
      !!}
      <h2>Contenu</h2>
      <br />
       <div class="left">
        {!! Form::file('image_title') !!}
       </div>
       <img class="image_miniature" src="{{ asset(Config::get('image.pathProject') . $project->url_image_title) }}" />
      <br/>
      {!! Form::customInput(array(
                         'type'        => 'text',
                         'name'        => 'alt_title',
                         'placeholder' => 'Alt',
                         'glyphicon'   => 'glyphicon-info-sign',
                         'old'         => Input::old('alt_title') ? Input::old('alt_title') : $project->alt_image_title))
      !!}
      <br />
      {!!
         Form::customTextarea(array('name'      => 'content',
                                 'description'  => 'Contenu',
                                 'glyphicon'    => 'glyphicon-pencil',
                                 'class'        => 'tiny-editor',
                                 'old'          => Input::old('content') ? Input::old('content') : $project->content/*,
                                 'required'     => 'required'*/))
      !!}
      <br />
      {!!
        Form::customTextarea(array('name'      => 'conclusion',
                                'description'  => 'Conclusion',
                                'glyphicon'    => 'glyphicon-certificate',
                                'old'          => Input::old('conclusion') ? Input::old('conclusion') : $project->conclusion))
      !!}
      <br />
            {!! Form::customMultipleSelectOpen( array('description' => 'Mot-Clés',
                                                  'glyphicon'       => 'glyphicon-tags',
                                                    'name'          => 'keywords[]'))
            !!}
              @foreach($keywords as $keyword)
                @if(in_array($keyword->name, $keywordsName))
                  {!! Form::customMultipleSelectOption( array('value'     => $keyword->name,
                                                               'name'     => $keyword->name,
                                                               'selected' => 'selected'))
                  !!}
                @else
                {!! Form::customMultipleSelectOption( array('value' => $keyword->name,
                                                              'name'        => $keyword->name))
                !!}
                @endif

              @endforeach
            {!! Form::customMultipleSelectClose() !!}
      <br />
      <div class="required-info">
         <i>* Les champs avec pouce rouge doivent être complétés</i><br/>
      </div>
      {!! Form::buttonSubmit( array('text' => 'Ajouter') ) !!}

{!! Form::close() !!}

@endsection
