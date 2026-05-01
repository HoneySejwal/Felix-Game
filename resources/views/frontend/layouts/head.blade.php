    <!-- Meta Tag -->
    <!--@yield('meta')-->
    <!-- Title Tag  -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" />
    <title>@yield('title','Fenix Quest – Strategic Game Boosting & Player Coaching')</title>
    <meta name="description" content="@yield('meta_description','Fenix Quest delivers secure boosting services, skill development coaching and game progression strategies for gamers aiming to dominate their arenas.')">
    <meta name="keywords" content="@yield('meta_keywords','game rank boost, gaming coaching, performance boosting, online gaming services')">
    <!-- site favicon -->
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/css/style3.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <!-- Open Graph / Facebook Meta Tags -->
 <meta property="og:title" content="Fenix-Quest – Strategic Game Boosting & Player Coaching">
 <meta property="og:description" content="Conquer challenges and rise faster with Fenix-Quest’s professional gaming services.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('storage/photos/category/41.webp') }}">
<meta property="og:site_name" content="https://www.fenix-quest.com">
<meta property="og:locale" content="en_US">
<!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) --> 
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-L0ZBRSCD0C"></script>
  <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-L0ZBRSCD0C'); </script>
<style>
       /* ================================
   COOKIE CONTAINER
================================ */
#cookies-policy {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 360px;
    z-index: 1000;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
}

/* MAIN BOX */
#cookies-policy .cookies__alert {
    background: #6b7280 !important;
    color: #ffffff !important;
    padding: 16px 18px 18px !important;
    border-radius: 18px !important;
    border: none !important;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.35);
}

/* ================================
   HEADER
================================ */
#cookies-policy .cookies__title {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 15px !important;
    font-weight: 600;
    color: #ffffff !important;
    margin-bottom: 8px;
}

/* COOKIE ICON (before title text) */
#cookies-policy .cookies__title::before {
    content: "🍪";
    width: 34px;
    height: 34px;
    background: rgba(255, 255, 255, 0.18);
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
}

/* CLOSE BUTTON */
#cookies-policy .cookies__close {
    background: none;
    border: none;
    color: #ffffff;
    font-size: 18px;
    cursor: pointer;
    opacity: 0.8;
}

#cookies-policy .cookies__close:hover {
    opacity: 1;
}

/* ================================
   TEXT
================================ */
#cookies-policy .cookies__text,
#cookies-policy p {
    font-size: 14px;
    line-height: 1.4;
    color: #ffffff;
    opacity: 0.95;
    margin-bottom: 14px;
}

/* ================================
   BUTTONS
================================ */
#cookies-policy .cookies__actions {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}

/* SECONDARY BUTTON */
.cookiesBtn.cookiesBtn--secondary,
#cookies-policy .cookiesBtn__link {
    flex: 1;
    background: transparent !important;
    color: #ffffff !important;
    border: 1px solid rgba(255, 255, 255, 0.4) !important;
    padding: 9px 0 !important;
    border-radius: 12px !important;
    font-size: 14px !important;
    font-weight: 500;
    text-transform: none;
}

/* PRIMARY BUTTON */
.cookiesBtn.cookiesBtn--primary {
    flex: 1;
    background: #4da3ff !important;
    color: #000000 !important;
    border: none !important;
    padding: 9px 0 !important;
    border-radius: 12px !important;
    font-size: 14px !important;
    font-weight: 600;
}

.cookiesBtn.cookiesBtn--primary:hover {
    background: #3b92ee !important;
}

/* ================================
   LINKS
================================ */
#cookies-policy .cookies__links {
    text-align: center;
    font-size: 13px;
}

#cookies-policy .cookies__links a {
    color: #d0d7ff !important;
    text-decoration: none;
}

#cookies-policy .cookies__links a:hover {
    text-decoration: underline;
}

    </style>
    
    @cookieconsentscripts
 @cookieconsentview

