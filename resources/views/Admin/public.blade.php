<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <LINK rel="Bookmark" href="/favicon.ico">
    <LINK rel="Shortcut Icon" href="/favicon.ico"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('admin/lib/html5.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/lib/respond.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/lib/PIE_IE678.js')}}"></script>
    <![endif]-->
    <link href="{{asset("admin/css/H-ui.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("admin/css/H-ui.admin.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("admin/skin/default/skin.css")}}" rel="stylesheet" type="text/css" id="skin"/>
    <link href="{{asset("admin/lib/Hui-iconfont/1.0.1/iconfont.css")}}" rel="stylesheet" type="text/css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    @yield("css")

    @yield("content")

    @yield("js")
    <script type="text/javascript" src="{{asset("admin/lib/jquery/1.9.1/jquery.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("admin/lib/Validform/5.3.2/Validform.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("admin/lib/layer/1.9.3/layer.js")}}"></script>
    <script type="text/javascript" src="{{asset("admin/js/H-ui.js")}}"></script>
    <script type="text/javascript" src="{{asset("admin/js/H-ui.admin.js")}}"></script>



