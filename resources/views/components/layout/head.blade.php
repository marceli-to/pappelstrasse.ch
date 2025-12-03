<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name', 'Laravel') }}</title>
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Pappelstrasse" />
<link rel="manifest" href="/site.webmanifest" />
<meta property="og:title" content="{{ config('app.name', 'Pappelstrasse') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="{{ asset('opengraph.jpg') }}" />
<meta property="og:description" content="Erstvermietung: An der Pappelstrasse 2/4 in Dietlikon entsteht per Herbst 2026 ein attraktives Neubauprojekt mit modernen 1.5- bis 3.5-Zimmerwohnungen." />
<meta property="og:site_name" content="{{ config('app.name', 'Pappelstrasse') }}" />
<meta property="og:locale" content="de_CH" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ config('app.name', 'Pappelstrasse') }}" />
<meta name="twitter:description" content="Erstvermietung: An der Pappelstrasse 2/4 in Dietlikon entsteht per Herbst 2026 ein attraktives Neubauprojekt mit modernen 1.5- bis 3.5-Zimmerwohnungen." />
<meta name="twitter:image" content="{{ asset('opengraph.jpg') }}" />
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>