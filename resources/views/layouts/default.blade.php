<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ page_title($title ?? '')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }} "/>
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<style>
			body{
				font-family: 'Open Sans',Helvetica,Arial,sans-serif;
			}
			footer{
				margin:4em 0;
			}
		</style>
    </head>
    <body >
    	@include('layouts.partials._nav')
        @yield('content')
        @include('layouts.partials._footer')
        <script src="{{ asset('/jquery/jquery.js') }} "></script>
        <!-- Latest compiled and minified JavaScript -->
		<script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
        @include('flashy::message')
    </body>
</html>
