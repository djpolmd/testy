<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel + Vue Vuex Vue-router</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
        <!-- Styles -->
    </head>
    <body>

    <div id="app">
       <main-app/>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
{{--    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>--}}

        {{--    <script>--}}
        {{--        new Vue({--}}
        {{--            el: '#app',--}}
        {{--            vuetify: new Vuetify(),--}}
        {{--        })--}}
        {{--    </script>--}}
    </body>
</html>
