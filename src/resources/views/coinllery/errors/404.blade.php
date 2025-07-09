<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="ALL" />
        <meta name="author" content="Qab and Ophiuchus" />

        <meta name="description" content="Coinllery is a Gallery made for Zora Coins" />
        <meta name="keywords" content="Coinllery, Zora, Coin, SDK, Comunity, Gallery" />
        <meta name="copyright" content="&copy; 2025 Coinllery&reg; by Qab and Ophiuchus. All Rights Reserved" />

        <meta name="screen-orientation" content="portrait">

        <title>Coinllery – Coming Soon</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icons -->
        <link rel="apple-touch-icon" sizes="57x57" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/favicon-16x16.png">
        
        <link rel="manifest" href="/manifest.json">
        <link rel="shortcut icon" href="https://coinllery.io/favicon.ico">
        <link rel="icon" type="image/png" sizes="32x32" href="https://coinllery.io/favicon.png">
        <link rel="icon" type="image/gif" sizes="32x32" href="https://coinllery.io/favicon.gif">

        <!-- Windows  -->
        <meta name="msapplication-navbutton-color" content="white">
        <meta name="msapplication-TileColor" content="white">
        <meta name="msapplication-TileImage" content="https://storage.googleapis.com/coinllery-app-storage/app/media/icons/apple-icon-144x144.png">
        <meta name="msapplication-config" content="/browserconfig.xml">

        <style>

            html, body {
                background-color: whitesmoke;
                color: black;
                font-family: "Montserrat", sans-serif;
                font-optical-sizing: auto;
                font-style: normal;
                margin:0px;
                padding:0px;
            }

            body {
                margin: 0;
                height: 100vh;
                display: flex;
                justify-content: center; /* Horizontal Align */
                align-items: center;     /* Vertical Align */
            }

            .centralized-box {
                width: 300px;
                height: 220px;
                padding: 20px;
                background-color: #4CAF50;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .centralized-box img {
                width:100%;
            }

            .colorful {
                background: linear-gradient(90deg, red, purple, magenta, blue, cyan, green, lime, yellow, orange);
                background-size: 200% 200%;
                animation: hueShift 4s linear infinite;
            }

            @keyframes hueShift {
                0%   { filter: hue-rotate(0deg); }
                100% { filter: hue-rotate(360deg); }
            }

            .moving-gradient {
                background: linear-gradient(90deg, red, purple, magenta, blue, cyan, green, lime, yellow, orange, red, purple);
                background-size: 1000% 100%;
                animation: moveGradient 12s linear infinite;
            }

            @keyframes moveGradient {
                0%   { background-position: 0% 50%; }
                100% { background-position: 100% 50%; }
            }

            .text-center {
                text-align: center;
            }

            .text-uppercase {
                text-transform: uppercase;
            }

            .text-light {
                color: whitesmoke;
            }

            .text-dark {
                color: black;
            }

            .p-10 {
                padding: 10px;
            }

            .p-20 {
                padding: 20px;
            }

            footer {
                position:fixed;
                bottom: 0;
                width: 100vw;
                padding:20px;
                text-align:center;
                font-size:8pt;
                text-transform: uppercase;
            }

            a:link,
            a:visited,
            a:hover {
                text-decoration: none;
                color:blueviolet;
            }
        </style>
    </head>
    <body>
        <section>
            <div class="centralized-box moving-gradient">
                <a href="/"><img src="https://storage.googleapis.com/coinllery-app-storage/app/media/images/coinllery_logo.png" alt="Coinllery"></a>
            </div>
            <h1 class="text-center text-uppercase colorful text-light p-10">404</h1>
            <h2 class="text-center text-uppercase moving-gradient text-light p-10">{{ $error_message }}</h2>
        </section>
        <footer>
            <p>Created with 💜 by <a href="https://zora.co/@qabqabqab" target="_blank"><strong>@qabqabqab</strong></a> and <a href="https://zora.co/@ophiuchus85" target="_blank"><strong>@ophiuchus85</strong></a></p>
        </footer>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZY0CH2KN6B"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZY0CH2KN6B');
        </script>
    </body>
</html>
