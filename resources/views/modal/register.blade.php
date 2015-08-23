@extends('modal.layout')

@section('modal_title')
    Register
@endsection

@section('modal_body')
    {!! Form::open(['route' => 'register', 'class' => 'ajax_form form-horizontal', 'id' => 'formRegister',  'role' => 'form']) !!}
        {!! Form::ajax_control('text', 'username', 'Name') !!}
        {!! Form::ajax_control('email', 'email', 'E-Mail Address') !!}
        {!! Form::ajax_control('password', 'password', 'Password') !!}
        {!! Form::ajax_control('password', 'password_confirmation', 'Confirm Password') !!}
        {!! Form::ajax_button_submit() !!}
    {!! Form::close() !!}
<a class="link" data-hover="Mot de passe oublié ?"  href="{{ url('/password/email') }}"><span>Mot de passe oublié ?</span></a>
@endsection


