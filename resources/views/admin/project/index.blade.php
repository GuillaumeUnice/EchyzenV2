@extends('admin.project.layout')


@section('body_content')
    <h2>Tous les Projets</h2>
    <table style="width:100%">
        <tr>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Image</th>
		 <th>Progression</th>
        <th>Date début</th>
		 <th>Date fin</th>
        <th>Action</th>
        </tr>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->content }}</td>
                <td>
                {{-- date("F d Y H:i:s.", fileatime('C:/wamp/www/Echyzen/public/uploads/app/images/project/' . 'banniere.png')) --}}
                <img style="width 50px; height : 20px;" src="{{ asset(Config::get('image.pathProject') . $project->url_image_first) }}" /></td>
                <td>{{ $project->progress }}</td>
				<td>{{ $project->start_day }}</td>
				<td>{{ $project->end_day }}</td>
                <td>
                    {!! HTML::customLinkIcon(array( 'route' => route('admin.project.edit', $project->id),
                                              'glyphicon' => 'glyphicon-edit'))
                    !!}

                    {!! Form::open(array('url' => url(route('admin.project.destroy', $project->id)), 'method' => 'DELETE', 'files' => 'true')) !!}
                      {!! Form::iconSubmit(array( 'glyphicon' => 'glyphicon-remove')) !!}
                    {!! Form::close() !!}

                    {!! HTML::customLinkIcon(array( 'route' => route('project.show', $project->id),
                                              'glyphicon' => 'glyphicon-eye-open'))
                    !!}
                </td>
            </tr>
        @endforeach
    </table>
	
	{!! HTML::customLink( array(
										'name' => 'Ajouter projet',
										'link' => route('admin.project.create')))  !!}


@endsection

