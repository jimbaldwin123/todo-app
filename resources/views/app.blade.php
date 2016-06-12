<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jim's TODO List</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="/">Jim's TODO List</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li>
							<a href="#">You are {{ Auth::user()->name }}</a>
						</li>
						<li>
							<a href="/">Home</a>
						</li>
						<li><a href="/auth/logout">Logout</a></li>
					@endif
				</ul>

			</div>

	</nav>
		
<section class="header section-padding">
    <div class="background">&nbsp;</div>
    <div class="container">
        <div class="header-text">
            <h1><a href="/">Jim's TODO List</a></h1>
		<p>&nbsp;</p>
        </div>
    </div>
</section>
	
<div class="container">
    <section class="section-padding">
        <div class="jumbotron text-center">
		
            <div class="panel panel-default">
		<!--
                <div class="panel-heading">
                    <h1>
                        <span class="grey">Our</span> To-do List
                    </h1>
                </div>
		-->
		<div class="content">
			@if (Session::has('message'))
				<div class="flash alert-info">
					<p>{{ Session::get('message') }}</p>
				</div>
			@endif
	
			@if ($errors->any())
				<div class='flash alert-danger'>
					@foreach ( $errors->all() as $error )
						<p>{{ $error }}</p>
					@endforeach
				</div>
			@endif
		 
			@yield('content')
		</div>
			
            </div>

        </div>
    </section>
</div>
	
	<!-- Scripts -->
        <script src="//code.jquery.com/jquery.min.js"></script>
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="/js/app.js"></script>
    @stack('scripts')
</body>
</html>
