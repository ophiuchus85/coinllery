<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coinllery</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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
                <img src="https://storage.googleapis.com/coinllery-app-storage/app/media/images/coinllery_logo.png" alt="Coinllery">
            </div>
            <h1 class="text-center text-uppercase colorful text-light p-10">Comming Soon</h1>
        </section>
        <footer>
            <p>Created with 💜 by <a href="https://zora.co/@qabqabqab" target="_blank"><strong>@qabqabqab</strong></a> and <a href="https://zora.co/@ophiuchus85" target="_blank"><strong>@ophiuchus85</strong></a></p>
        </footer>
    </body>
</html>
