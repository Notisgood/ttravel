<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="robot" content="index, follow" />
<meta name="generator" content="Brackets">
<meta name='copyright' content='Orange Technology Solution co.,ltd.'>
<meta name='designer' content='Sudarat Tu.'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link type="image/ico" rel="shortcut icon" href="{{asset('local/filesss/images/favicon.ico')}}">
<link href="{{asset('https://fonts.googleapis.com/css?family=Caveat+Brush|Kanit|Roboto&display=swap')}}" rel="stylesheet">
<link href="{{asset('local/filesss/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('local/filesss/css/jquery-ui.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('local/filesss/css/style.css')}}" />
<link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.6.1/css/all.css')}}" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

<link rel="stylesheet" href="{{asset('local/filesss/woocommerce-FlexSlider-0d95828/flexslider.css')}}" type="text/css" media="screen" />

<link rel="stylesheet" href="{{asset('local/filesss/master/css/libs/animate.css')}}">

<script defer src="{{asset('local/filesss/woocommerce-FlexSlider-0d95828/jquery.flexslider-min.js')}}"></script>


<script src="{{asset('local/filesss/js/jquery.min.js')}}"></script>
<script src="{{asset('local/filesss/js/jquery-ui.js')}}"></script>
<script src="{{asset('local/filesss/woocommerce-FlexSlider-0d95828/jquery.flexslider.js')}}"></script>
<script src="{{asset('local/filesss/js/popper.min.js')}}"></script>
<script src="{{asset('local/filesss/js/tether.min.js')}}"></script>
<script src="{{asset('local/filesss/js/bootstrap.min.js')}}"></script>
<script src="{{asset('local/filesss/master/dist/wow.js')}}"></script>
<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    });
    wow.init();
</script>
<link rel="stylesheet" type="text/css" href="{{asset('local/filesss/fullPage.js-master/jquery.fullPage.css')}}" />    
<script src="{{asset('local/filesss/fullPage.js-master/vendors/jquery.easings.min.js')}}"></script>
<script type="text/javascript" src="{{asset('local/filesss/fullPage.js-master/jquery.fullPage.js')}}"></script>


@if(Session::has('lang'))
    @if(Session::get('lang') == 'TH')
        <style>
            /* font-family */
        </style>
    @else
        <style>
            /* font-family */
        </style>
    @endif
@else
    <style>
        /* font-family */
    </style>
@endif