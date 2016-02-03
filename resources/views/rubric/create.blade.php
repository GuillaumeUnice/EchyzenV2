<h3>Creation Rubrique</h3><br/>

<form role="form" method="POST" action="{{ url(route('rubric_create')) }}" enctype="multipart/form-data">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {!!
      Form::customInput( array(
                            'type'        => 'name',
                            'name'        => 'name',
                            'placeholder' => 'Nom',
                            'glyphicon'   => 'glyphicon-pencil',
                            'required'    => 'required'))
    !!}
    <br/>
    {!! Form::file('imageRubric') !!}
    <br/>

    <div class="required-info">
        <i>* Les champs avec pouce rouge doivent être complétés</i><br/>
    </div>

    {!! Form::buttonSubmit( array('text' => 'Me connecter') ) !!}

</form>

