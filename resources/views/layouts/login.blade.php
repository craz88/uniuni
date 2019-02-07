<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('/css/login.css') }}" type="text/css">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
<div class="container">
	<section id="content">
		<form method="post" action="@yield('action')">
			{{ csrf_field() }}
			<h1>Welcome <span>Unibox</span></h1>
			@isset($records)
                <span style="color:red; font-size:initial;">{{ $records }}</span>
			@endisset
			<div>
				<input type="text" placeholder="Username" required="" name="name" id="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="pass" id="password" />
			</div>
			<div class="center">
				@yield('button')
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>