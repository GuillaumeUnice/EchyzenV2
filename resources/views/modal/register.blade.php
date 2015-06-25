@extends('modal.layout')

@section('modal_title')
    Register
@endsection

@section('modal_body')
    <form id="formRegister" class="ajax_form form-horizontal" role="form" method="POST" action="{{ url(route('register')) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="username">
                <small class="help-block"></small>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">E-Mail Address</label>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email">
                <small class="help-block"></small>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Password</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password">
                <small class="help-block"></small>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Confirm Password</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form>
@endsection