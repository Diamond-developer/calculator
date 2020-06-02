<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        
        <title>Vue js</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/app.css">
    </head>
    <body>
        <div class="row">
            <div id="answer" class="col-lg-8">
                <selling-component></selling-component>
            </div>

            <div id="app" class="col-lg-4">
                <answer-component></answer-component>
            </div>
            
        </div>
        <script src="./js/app.js"></script>
    </body>
</html>
