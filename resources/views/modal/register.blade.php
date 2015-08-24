@extends('modal.layout')

@section('modal_title')
    Register
@endsection

@section('modal_body')
    {!! Form::open(['route' => 'register', 'class' => 'ajax_form form-horizontal', 'id' => 'formRegister',  'role' => 'form']) !!}
        {!!
          Form::ajaxInput(array(
                                'type' => 'text',
                                'name' => 'username',
                                'placeholder' => 'Name'))
        !!}
        {!!
          Form::ajaxInput(array(
                                'type'        => 'email',
                                'name'        => 'email',
                                'placeholder' => 'E-Mail Address'))
        !!}
        {!! Form::ajaxInput(array(
                                'type'        => 'password',
                                'name'        => 'password',
                                'placeholder' => 'Password'))
        !!}
        {!!
          Form::ajaxInput(array(
                              'type'        => 'password',
                              'name'        => 'password_confirmation',
                              'placeholder' => 'Confirm Password'))
        !!}
        {!! Form::ajaxButtonSubmit() !!}
    {!! Form::close() !!}
<a class="link" data-hover="Mot de passe oublié ?"  href="{{ url('/password/email') }}"><span>Mot de passe oublié ?</span></a>
@endsection


