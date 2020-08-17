@extends('layouts.base')

@section('content')

    <div class="body-div">
        <div class="second-title">
            <br/><br/><br/><br/>
        </div>

        <div class="centered">
            <h2 class="question-title">Have you been tendering?</h2>
            <a href="https://www.bunisha.com/" class="yes-button">YES</a>
            <a href="https://www.bunisha.com/" class="no-button">NO</a>
        </div>
        <br/>

        <div class="waiting-section">
            <img src="{{ asset('images/lady-on-couch.jpg') }}">

            <h4>We thought you might be interested in:</h4>
            <p>
                Subscibe today to receive daily and weekly updates for tender notices, sites visit/prebid meeting and more.
            </p>

            <div class="centered">
                <a class="start-tendering-button" href="https://www.bunisha.com/">Start Tendering Now</a>
            </div>
        </div>

    </div>

@endsection
