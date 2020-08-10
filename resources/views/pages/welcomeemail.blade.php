<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Bunisha | Welcome Email') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('sass/app.scss') }}">

    </head>
    <body>
        
        <div class="header">
			<br/>
			<h2 class="title">bunisha</h2>
			<div class="sub-title">Welcome on board! We are happy to welcomme you to our timely tender notifications!</div>
		</div>	

		<div class="body-div">

			<p class="download-suggestion">
				Download your invoice <a href="">here</a>
			</p>
			<div class="notice">
				All notifications are tailored to meet your needs. You will get the maximum of your subscription.
			</div>

			<div class="second-title">
				<br/><br/><br/><br/>
				What to expect
			</div>

			<table class="services-table">

			  <tr>
			    <td class="tender-title">
			    	<img class="service-icon" src="{{ asset('images/listing.png') }}">
			    	<div  class="service-details">
				    	<h2>Tenders Listing</h2>
				    	<p>We will keep you up to date on relevant tenders.</p>
				    </div>
			    </td>
			    <td class="tender-title">
			    	<img class="service-icon" src="{{ asset('images/history.png') }}">
			    	<div  class="service-details">
				    	<h2>Addendumbs</h2>
				    	<p>Get notified on relevant tenders addendumbs.</p>
				    </div>
			    </td>
			  </tr>

			  <tr>
			    <td class="tender-title">
			    	<img class="service-icon" src="{{ asset('images/visits.png') }}">
			    	<div  class="service-details">
				    	<h2>Site Visits</h2>
				    	<p>We will ensure to inform you of all prebid meetings.</p>
				    </div>
			    </td>
			    <td class="tender-title">
			    	<img class="service-icon" src="{{ asset('images/reminder.png') }}">
			    	<div  class="service-details">
				    	<h2>Reminders</h2>
				    	<p>Get notified on relevant tenders addendumbs.</p>
				    </div>
			    </td>
			  </tr>

			  <tr>
			    <td class="tender-title">
			    	<img class="service-icon" src="{{ asset('images/chart.jpg') }}">
			    	<div  class="service-details">
				    	<h2>Tender Results</h2>
				    	<p>We will keep you up to date on tender results.</p>
				    </div>
			    </td>
			    <td class="tender-title">
			    	<img class="service-icon" src="{{ asset('images/award.png') }}">
			    	<div  class="service-details">
				    	<h2>Tender Awards</h2>
				    	<p>Subscribe today to receive tender awards.</p>
				    </div>
			    </td>
			  </tr>

			</table>
			<br/><br/>

		</div>

		<div class="centered">
			<a href="https://www.bunisha.com/services/tenders"><button class="view-tender-listing-button">View tender listing</button></a>
		</div>

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

    </body>
</html>
