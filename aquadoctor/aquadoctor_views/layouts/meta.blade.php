<!-- meta start -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="Sizning_Google_Site_Verification_Kodi">
<!-- Html Page Specific -->
<meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="url" content="https://Aquadoctor.uz/ru">
<meta property="og:type" content="website">
<meta property="og:url" content="https://Aquadoctor.uz/ru">
<meta property="og:site_name" content="Aquadoctor">
<meta property="og:image" content="{{ asset('images/static_img/favicon.ico') }}">
<meta name="author" content="Aquadoctor">
<meta name="generator" content="Simplex CMS">
<meta name="language" content="ru">
<link rel="icon" href="{{ asset('images/static_img/favicon.ico') }}" type="image/x-icon">


<meta name="description" content="Aquadoctor - ЛУЧШЕЕ РЕШЕНИЕ ДЛЯ ВАШЕГО БАССЕЙНА">
<meta name="keywords" content="ЛУЧШЕЕ РЕШЕНИЕ ДЛЯ ВАШЕГО БАССЕЙНА">
<meta property="og:title" content="Aquadoctor - ЛУЧШЕЕ РЕШЕНИЕ ДЛЯ ВАШЕГО БАССЕЙНА">
<meta property="og:description" content="Aquadoctor - ЛУЧШЕЕ РЕШЕНИЕ ДЛЯ ВАШЕГО БАССЕЙНА">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:title" content="Aquadoctor - ЛУЧШЕЕ РЕШЕНИЕ ДЛЯ ВАШЕГО БАССЕЙНА">
<meta property="twitter:description" content="Aquadoctor - ЛУЧШЕЕ РЕШЕНИЕ ДЛЯ ВАШЕГО БАССЕЙНА">
<meta property="twitter:image" content="Aquadoctor - ЛУЧШЕЕ РЕШЕНИЕ ДЛЯ ВАШЕГО БАССЕЙНА">
<!-- meta end -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->


<!-- <link rel="stylesheet" href="{{ asset('css/project.css') }}"> -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('js/navbar.js') }}">


<!-- <title>{{ config('app.site_title') }} </title> -->


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">





<script src="{{ asset('js/modal.js') }}" defer></script>
<!-- <script src="{{ asset('js/navbar.js') }}" defer></script> -->
<!-- <script src="{{ asset('js/scripts.js') }}" defer></script> -->


<!-- Bootstrap CSS -->

<script>


    function getCurrentLocaleFromPath(path) {
        return path.split('/')[1];
    }

    function switchLocale(newLocale) {
        let currentUrl = new URL(window.location.href);
        let currentLocale = getCurrentLocaleFromPath(currentUrl.pathname);

        let pathParts = currentUrl.pathname.split('/').filter(part => part);

        if (pathParts.length > 2) {
            window.location.href = `${currentUrl.origin}/${newLocale}`;
        } else {
            let newPathname = currentUrl.pathname.replace('/' + currentLocale, '/' + newLocale);
            window.location.href = currentUrl.origin + newPathname + currentUrl.search;
        }
    }
</script>



<!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->