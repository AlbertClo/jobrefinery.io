<!DOCTYPE html>
<html
	lang="{{ str_replace('_', '-', app()->getLocale()) }}"
	class="bg-midnight h-full [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden"
>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title inertia>{{ config('app.name') }}</title>

		<!-- Scripts -->
		@routes
		@vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])
		@inertiaHead
	</head>
	<body class="theme-midnight h-full font-sans antialiased">
		@inertia
	</body>
</html>
