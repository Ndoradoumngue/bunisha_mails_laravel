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
				<div class="sub-title">Daily tender notifications | {{ $todays_date }}</div>
				<h1 class="sub-sub-title">Today's top picks</h1>
			</div>
			<div class="centered">
				<br/><Br/>
				<a href="https://www.bunisha.com/services/tenders" class="view-in-browser-button">View in your browser</a>
			</div>

			<div class="body-div">

				@if(count($allTenders) > 0)

					<table class="tenders-table">
					  <tr>
					    <th class="table-head">Tender</th>
					    <th class="table-head">Procuring Entity</th>
					    <th class="table-head">Closing Date</th>
					    <th class="table-head">Action</th>
					  </tr>

					  @foreach($allTenders as $tender)

						  <tr>
						    <td class="tender-title">
						    	<h2>{{$tender->tender_number}}</h2>
						    	<p>{{$tender->title}}</p>
						    </td>
						    <td class="tender-owner"><p>{{$tender->procuring_entity}}</p></td>
						    <td class="tender-closing-date">{{$tender->closing_date}}</td>
						    <td>
						    	<a href="https://www.bunisha.com/listings/tenders/{{$tender->tender_number}}" class="view-tender-button">View</a>
						    </td>
						  </tr>

					  @endforeach

					</table>

				@else
	            	There is not tender posted today. We encourage you to visit our website to check tenders that suits you.
	            @endif
				<br/><br/>

				<ul class="nav">
					<li><a href="https://www.bunisha.com/" target="_blank">Home | </a></li>
					<li><a href="https://www.bunisha.com/about" target="_blank">My Account | </a></li>
					<li><a href="https://help.bunisha.com/docs/" target="_blank">FAQs | </a></li>
					<li><a href="https://www.bunisha.com/tos" target="_blank">Terms of Service</a></li>
				</ul>

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

		</div>

	</body>
</html>