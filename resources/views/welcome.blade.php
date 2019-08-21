<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Vue Router</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Laravel Vue Router</h1>
<div id="app">
    <router-view></router-view>
    <router-view name="user"></router-view>
</div>
<script src="{{asset('js/app.js')}}" ></script>
</body>
</html>
