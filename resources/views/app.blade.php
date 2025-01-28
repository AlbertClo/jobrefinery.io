<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-midnight [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title inertia>{{ config('app.name', 'Laravel') }}</title>

		<!-- Scripts -->
		@routes
		@vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])
		@inertiaHead
	</head>
	<body class="h-full theme-midnight font-sans antialiased">
		@inertia
	</body>
</html>
