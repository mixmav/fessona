<!--
	
  __  __      _      _   _       _    __     __                        _      ____          _   _  U _____ u   ____    U _____ u 
U|' \/ '|uU  /"\  u | \ |"|  U  /"\  u\ \   /"/u      __        __ U  /"\  u / __"| u      |'| |'| \| ___"|/U |  _"\ u \| ___"|/ 
\| |\/| |/ \/ _ \/ <|  \| |>  \/ _ \/  \ \ / //       \"\      /"/  \/ _ \/ <\___ \/      /| |_| |\ |  _|"   \| |_) |/  |  _|"   
 | |  | |  / ___ \ U| |\  |u  / ___ \  /\ V /_,-.     /\ \ /\ / /\  / ___ \  u___) |      U|  _  |u | |___    |  _ <    | |___   
 |_|  |_| /_/   \_\ |_| \_|  /_/   \_\U  \_/-(_/     U  \ V  V /  U/_/   \_\ |____/>>      |_| |_|  |_____|   |_| \_\   |_____|  
<<,-,,-.   \\    >> ||   \\,-.\\    >>  //           .-,_\ /\ /_,-. \\    >>  )(  (__)     //   \\  <<   >>   //   \\_  <<   >>  
 (./  \.) (__)  (__)(_")  (_/(__)  (__)(__)           \_)-'  '-(_/ (__)  (__)(__)         (_") ("_)(__) (__) (__)  (__)(__) (__) 

-->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		@hasSection('title')
			{{ ucfirst(config('app.name')) }} - @yield('title')
	    @else
			{{ ucfirst(config('app.name')) }}
		@endif
	</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#424242">
	<meta name="description" content="A virtual space to reclaim emotional and spiritual equanimity">
	<script src="https://kit.fontawesome.com/0db8c7f53e.js" crossorigin="anonymous"></script>

	<link rel="shortcut icon" href="/images/logos/xxhdpi.png?v=ljaahIyaGhYt">
	
	@if(config('app.env') == 'production')
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-CLL0ND8JTF"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-CLL0ND8JTF');
		</script>
	@endif

	@yield('custom-head')
</head>
<body>
	
	@yield('content')
		
	@yield('custom-post-script')
</body>
</html>