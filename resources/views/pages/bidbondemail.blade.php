@extends('layouts.base')

@section('content')

	<div class="body-div">

        <div class="bidbond-second-title">
            <h2 class="mail-start">Dear Customer,</h2>
        </div>

        <p class="mail-body">

        	@if(count($returnedTender) > 0)
        		@foreach($returnedTender as $tender)
            		Please find attached your bid bond for tender number <b>{{$tender->tender_number}}</b>. You can save, view, print the bid bond at your convenience.
                @endforeach
            @else
            	You don't have a listed tender yet.
            @endif
        </p>

        <div class="centered">
            <h2 class="suggestion-title">We thought you might be interested in:</h2>
        </div>
        <br/>

        <div class="waiting-section">
            <img src="https://kampuni.s3.amazonaws.com/assets/Lady%20on%20Couch.jpg">

            <h4>My virtual office</h4>
            <p>
                Grow your biashara anywhere, anytime. Generate transactional documents onine.
            </p>

            <div class="centered">
                <a href="https://www.bunisha.com/" class="start-now-button">Start Now</a>
            </div>
        </div>

    </div>

@endsection
