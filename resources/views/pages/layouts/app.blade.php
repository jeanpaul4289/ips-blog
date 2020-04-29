<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IPS Blog Page</title>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div class="content">
                <div class="content__row">
                    @yield('content')
                    <modal-component v-show="isModalVisible" @close="closeModal()"></modal-component>
                </div>
            </div>
        </div>
    </body>
</html>
