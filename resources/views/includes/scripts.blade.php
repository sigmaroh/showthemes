<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script type="text/javascript" src="{{ URL::asset('js/newscript.js') }}"></script>
<script type="text/javascript">
    $(function () {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
        });
    });
</script>

{{--wow.js--}}
<script  src="{{ URL::asset('js/wow-js/wow.min.js') }}"></script>
<script>
    new WOW().init();
    </script>
{{--wow.js ends--}}

{{--for fancy box --}}
<link rel="stylesheet" href="{{asset('js/fancybox/source/jquery.fancybox.css')}}" type="text/css" media="screen" />
<script type="text/javascript" src="{{asset('js/fancybox/source/jquery.fancybox.pack.js')}}"></script>
{{--for fancybox--}}

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>
<script type="text/javascript" src="{{asset('js/sweetalert/sweetalert.min.js') }}"></script>