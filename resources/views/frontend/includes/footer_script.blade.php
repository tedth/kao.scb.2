<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{ url('/js/tweenmax.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/scrollmagic/minified/ScrollMagic.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/scrollmagic/minified/plugins/animation.gsap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/scrollmagic/minified/plugins/debug.addIndicators.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/vendors/custom-scrollbar/jquery.mCustomScrollbar.js') }}"></script>
<script type="text/javascript" src="{{ url('/vendors/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<script>
	(function($){
        $(window).on("load",function(){
            $("body, .tab-pane").mCustomScrollbar({
            	theme: "minimal-dark"
            });
        });
    })(jQuery);
</script>
<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>

@yield('scripts')