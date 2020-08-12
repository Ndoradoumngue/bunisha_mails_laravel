@extends('layouts.base')

@section('content')

	<div class="body-div">

        <div class="introductory-title">
            <h2 class="introductory-mail-start">Welcome</h2>
            <p class="to">to</p>
            <p class="introductory-sub-title">Your e-Business Platform</p>
        </div>

        <div class="centered">
            <a href="https://www.bunisha.com/services/tenders"><button class="view-in-browser-button">View in your browser</button></a>
        </div>

        <div class="automating">We are automating all your business process.</div>

        <div class="centered">
            <!-- <h2 class="suggestion-title">We thought you might be interested in:</h2> -->
            <h2 class="tenders-list">Tenders</h2>
        </div>
        <br/>

        <div class="waiting-section">
            <p>
                <br/>
                We have automated the tendering process to a click. Upon settling up your company on  Bunisha platform you will be able to compile your tender within <b>15mn</b>.
            </p>

            <img src="{{ asset('images/tenders.jpg') }}">

            <div class="centered">
            <h2 class="question-title">DO YOU DO TENDERS?</h2>
                <a href="https://www.bunisha.com/"><button class="yes-button">YES</button></a>
                <a href="https://www.bunisha.com/"><button class="no-button">NO</button></a>
            </div>
        </div>
        <br/><br/>

        <div class="pre-qualification-section">
            <h2 class="pre-qualification-title">PRE-QUALIFICATION</h2>
            <img src="{{ asset('images/high-five.jpg') }}">
            <p>
                <br/>
                Do you want your company to be <span class="prequalified">pre-qualified</span> in 10mn procuring entities evevry month.
            </p>
            <div class="centered">
                <a href="https://www.bunisha.com/"><button class="pre-qualification-yes-button">YES</button></a>
                <a href="https://www.bunisha.com/"><button class="pre-qualification-maybe-button">MAYBE</button></a>
            </div>
        </div>

        <div class="waiting-section">
            <br/>
            <h2 class="e-tender-platform">e-Tender Platform</h2>
            <p>
                Kenya number 1 e-tender platform where you get over 200 new opportunities every day.<br/>
                <span class="blue-color"> Tender Notices, Pre-qualifications, Tender results, Tender sites visits, Addendumbs And Awards</span>.
            </p>
            <h2 class="notifications-title">Notifications</h2>

            <img src="{{ asset('images/notifications.jpg') }}">

            <p>
                Do you want to get <span class="daily-notifications">daily customized</span> notifications?.
            </p>

            <div class="centered">
                <a href="https://www.bunisha.com/"><button class="subscribe-button">Subscribe</button></a>
            </div>
        </div>

    </div>

@endsection
