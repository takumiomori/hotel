<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{font-size: 16pt; margin: 16px; background-color: #f1f2f3;}
        h1{width:100vw;background-color: black;color: white; padding: 14px 0 14px 14px; text-align: center;margin-bottom: 0px;}
        .header_image{
            width:100vw;
            margin-top:0px;
        }
        .entrance_img{width:100%;}
        .content{width: 60vw; margin: 20px auto 20px auto;}
        th{border: 1px solid gainsboro; background-color: #1c1087; color: #fff; padding: 10px; border-collapse:collapse;}
        td{border: 1px solid gainsboro; border-collapse:collapse; padding: 10px;}
        .footer{text-align: right; color: thistle; margin-right: 20px}
        .content_title{font-size: 16pt; width: 100%; border-bottom: 2px solid rgba(185,197,218,1); margin-bottom: 10px; color: rgba(185,197,218,1);}
        .content_sub_title{font-size: 16pt; width: 100%; margin-bottom: 10px; color: rgba(185,197,218,1);}
        .content_area{background-color: #fff; padding: 12px; border-radius: 10px;margin-bottom: 10px;}
        .submit_btn{background-color: black; color: white; font-size: 18px; width:25vw; border-radius: 4px; text-align: center; box-shadow: 0 2px 4px -1px rgba(0,0,0,0.25); margin:10px auto 10px auto;
        }
        .margintop{margin-top: 20px;}
    </style>


</head>
<body>
    <h1>@yield('title')</h1>
    <div class="header_image">
        @yield('image')
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</body>
</html>