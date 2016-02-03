 <h2>Création commentaire</h2>
{!! Form::open(array('url' => url(route('project.comment.store')), 'method' => 'POST')) !!}

{!! Form::customInput(array(
					'type'        => 'text',
					'name'        => 'content',
					'placeholder' => 'contenu',
					'glyphicon'   => 'glyphicon-pencil',
					'required'    => 'required',
					'old'         => Input::old('content')))
!!}
<br/>
<div class="required-info">
	<i>* Les champs avec pouce rouge doivent être complétés</i><br/>
</div>

{!! Form::buttonSubmit( array('text' => 'Ajouter') ) !!}

{!! Form::close() !!}
	  