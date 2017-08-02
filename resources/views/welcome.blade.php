<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <div id="app"  v-text="title">
        </div>
<script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/vue-resource.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
    </body>
</html>
