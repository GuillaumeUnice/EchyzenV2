<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">@yield('modal_title')</h4>
            </div>
            <div id="modal-body">
                @yield('modal_body')
            </div>
        </div>
    </div>
</div>

{{-- Js loader --}}
<script src="{{ asset('js/libraries/send/send.js') }}"></script>
<script src="{{ asset('js/libraries/send/TweenMax.min.js') }}"></script>
