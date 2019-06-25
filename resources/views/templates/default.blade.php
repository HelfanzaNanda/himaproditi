<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->


<!-- Mirrored from altair_html.tzdthemes.com/page_blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 May 2019 01:25:23 GMT -->
@include('templates.partials._head')

<body class="disable_transitions sidebar_main_open sidebar_main_swipe">
@include('templates.partials._topbar')

@include('templates.partials._sidebar')

<div id="page_content">
    <div id="page_content_inner">
        @yield('content')
    </div>
</div>

@include('templates.partials._script2')

@include('templates.partials._switcher')

@include('templates.partials._script')
</body>

<!-- Mirrored from altair_html.tzdthemes.com/page_blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 May 2019 01:25:23 GMT -->
</html>