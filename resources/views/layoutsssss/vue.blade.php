<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>{!! $title ?? config('app.name') !!}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Manifest and Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#FF8BAE">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#FF8BAE">
    <!-- SEO -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ App\Libraries\SEO::getSeoContent('ogTitle') }}">
    <meta property="og:description" content="{{ App\Libraries\SEO::getSeoContent('ogDescription') }}">
    <meta property="og:image" content="{{ App\Libraries\SEO::getSeoContent('ogImage') }}">
    <meta property="og:url" content="{{ App\Libraries\SEO::getSeoContent('ogUrl') }}">
    <meta property="fb:app_id" content="{{ App\Libraries\SEO::getSeoContent('fbAppId') }}">
    <style>
        body {
            margin: 0;
        }

        body.modal-show {
            overflow: hidden;
        }
    </style>

</head>
<body>
<div id="app"></div>
<script>
    window.app.token = '{{ csrf_token() }}';
</script>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>