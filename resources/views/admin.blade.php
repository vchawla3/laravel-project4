<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crowdplay</title>

        <script src="https://www.youtube.com/iframe_api"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">

          <div id="app">
              <app-edit></app-edit>
          </div>

          <script>
              window.playlist_id = {{ $playlist->id }};
              window.fromAdmin = true;
              window.Laravel = {!! json_encode([
                  'csrfToken' => csrf_token(),
              ]) !!};
          </script>
          <link rel="stylesheet" href="{{ mix('css/app.css') }}">
          <script src="{{ mix('js/app.js') }}"></script>
        </div>
    </body>
</html>
