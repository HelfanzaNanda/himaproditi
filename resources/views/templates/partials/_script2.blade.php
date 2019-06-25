<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 13/05/2019
 * Time: 13:43
 */
?>

{{--
<!-- google web fonts -->
<script>
    WebFontConfig = {
        google: {
            families: [
                'Source+Code+Pro:400,700:latin',
                'Roboto:400,300,500,700,400italic:latin'
            ]
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>
--}}

<!-- page specific plugins -->
<!-- ionrangeslider -->
<script src="{{asset('bower_components/ion.rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!-- inputmask -->
<script src="{{asset('bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js')}}"></script>
<!-- select2 -->
<script src="{{asset('bower_components/select2/dist/js/select2.min.js')}}"></script>
<!-- clear button -->
<script src="{{asset('bower_components/Add-Clear/addclear.min.js')}}"></script>

<!-- common functions -->
<script src="{{asset('assets/js/common.min.js')}}"></script>
<!-- uikit functions -->
<script src="{{asset('assets/js/uikit_custom.min.js')}}"></script>
<!-- altair common functions/helpers -->
<script src="{{asset('assets/js/altair_admin_common.min.js')}}"></script>

<!-- datatables -->
<script src="{{asset('assets/js/custom/datatables/buttons.uikit.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables-buttons/js/dataTables.buttons.js')}}"></script>
<script src="{{asset('assets/bower_components/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('assets/bower_components/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/bower_components/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables-buttons/js/buttons.colVis.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables-buttons/js/buttons.html5.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables-buttons/js/buttons.print.js')}}"></script>

<!-- datatables custom integration -->
<script src="{{asset('assets/js/custom/datatables/datatables.uikit.min.js')}}"></script>

<!--  datatables functions -->
<script src="{{asset('assets/js/pages/plugins_datatables.min.js')}}"></script>

<script src="{{asset('assets/bower_components/dropify/dist/js/dropify.min.js')}}"></script>

<!--  form file input functions -->
<script src="{{asset('assets/js/pages/forms_file_input.min.js')}}"></script>

<script src="{{asset('assets/js/pages/page_gallery.min.js')}}"></script>

<script src="{{asset('assets/js/uikit_htmleditor_custom.min.js')}}"></script>

<script src="{{asset('assets/js/pages/forms_advanced.min.js')}}"></script>

<script src="{{asset('assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- handlebars.js -->
<script src="{{asset('assets/bower_components/handlebars/handlebars.min.js')}}"></script>
<script src="{{asset('assets/js/custom/handlebars_helpers.min.js')}}"></script>
<!-- parsley (validation) -->
<script>
    // load parsley config (altair_admin_common.js)
    altair_forms.parsley_validation_config();
</script>
<script src="{{asset('assets/bower_components/parsleyjs/dist/parsley.min.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function () {
       $('.showPassword').on('change', function () {
          var isChecked = $(this).prop('checked');
          if(isChecked){
              $('#password').attr('type', 'text');
          }else{
              $('#password').attr('type', 'password');
          }
       });
    });
</script>


<script>
    $(function() {
        if(isHighDensity()) {
            $.getScript( "assets/js/custom/dense.min.js", function(data) {
                // enable hires images
                altair_helpers.retina_images();
            });
        }
        if(Modernizr.touch) {
            // fastClick (touch devices)
            FastClick.attach(document.body);
        }
    });
    $window.load(function() {
        // ie fixes
        altair_helpers.ie_fix();
    });
</script>

{{--<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-65191727-1', 'auto');
    ga('send', 'pageview');
</script>--}}
