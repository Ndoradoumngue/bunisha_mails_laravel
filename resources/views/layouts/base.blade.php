<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Bunisha | Welcome Email') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('sass/app.scss') }}">

    </head>
    <body>
        <div class="whole-mail">

            <div class="header">
                <br/>
                <h2 class="title">bunisha</h2>
            </div>

            @yield('content')

            <div class="terms-of-use">
                <h3>Terms of use</h3>
                <p>Please remember that our products are renewed automatically every month or every year, depending on the subscription you acquired. If you would like to cancel the automatic renewal of your subscription, you can do so after your payment has been processed correctly.</p>
                <br/>

                <h4>Find Us On Social Media</h4>
                <ul class="social">
                    <li><a href="https://www.facebook.com/bunishaltd/" target="_blank"><img src="{{ asset('images/facebook.png') }}"></a></li>
                    <li><a href="https://www.instagram.com/bunishaltd/" target="_blank"><img src="{{ asset('images/instagram.png') }}"></a></li>
                    <li><a href="https://twitter.com/bunishaltd" target="_blank"><img src="{{ asset('images/twitter.png') }}"></a></li>
                    <li><a href="https://www.linkedin.com/company/14804984" target="_blank"><img src="{{ asset('images/linkedin.png') }}"></a></li>
                </ul>
                <p>
                    Contact us: info@bunisha.com<br/>
                    If you no longer wish to receive our emails please <a class="unsubscribe-link" href="">unsubscribe here</a>.<br/>
                    Copyright © 2020. Bunisha Limited. All rights reserved.<br/><br/>
                </p>
            </div>

        </div>

    </body>
</html>
