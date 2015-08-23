@extends('errors.layout')

@section('script')
      @parent
        <!--Initiating the CountUp Script-->
        <script type="text/javascript">
            "use strict";
            var count = new countUp("errorCodeTxt", 0, 403, 0, 4);

            window.onload = function() {
                // fire animation
                count.start();
            }
        </script>

@endsection

@section('error_message')
	Vous ne disposez pas des droits nécessaires pour visiter cette page!
@endsection	
