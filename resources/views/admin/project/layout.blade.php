@extends('general.private')

@section('stylesheet')
	@parent
	<link rel="stylesheet" href= "{{ asset('css/libraries/select2.css') }}" />
		<link rel="stylesheet" href= "{{ asset('css/button_icon.css') }}" />
@endsection

@section('script')
	@parent
	<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
	<script src="{{ asset('js/libraries/datepicker.js') }}" type="text/javascript" ></script>
	
    <script src="{{ asset('js/libraries/select2.js') }}" type="text/javascript" ></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".select-multiple").select2({
					tags: true
				})
			});
		</script>
@endsection

@section('body')
    <div id="bandeau"><h1 class="bandeau_titre">Projet</h1><div id="bandeau_centre"></div></div>
    <div id="body_content">
        @yield('body_content')
    </div>
@endsection

