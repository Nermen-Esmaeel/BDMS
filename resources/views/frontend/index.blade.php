@extends('frontend.layouts.master');
@section('content')
<style>
    .how-section1 {
        margin-top: -15%;
        padding: 10%;
    }

    .how-section1 h4 {
        color: #ffa500;
        font-weight: bold;
        font-size: 30px;
    }

    .how-section1 .subheading {
        color: #3931af;
        font-size: 20px;
    }

    .how-section1 .row {
        margin-top: 10%;
    }

    .how-img {
        text-align: center;
    }

    .how-img img {
        width: 40%;
    }

    .font-white {
        color: white;
    }

</style>


<main>


    <!-- who we are -->

    <section>

        <div class="container">
            <div class="how-section1">
                <div class="row">
                    <div class="col-md-6 how-img">
                        <img style="height: 100%; width:80%" src="{{ asset('images/about.jpg') }}" class=" img-fluid" alt="" />
                    </div>
                    <div class="col-md-6">
                        <h4>Give Blood Save Lifes</h4>
                        <h4 class="subheading">A single drop of blood can make a huge difference.</h4>
                        <p class="text-muted">It is said that blood is one of the most priceless gifts one can give
                            to another. Blood is essential for a person to stay alive. Many times due to accidents
                            or any other serious ailments, a person might require blood. And in those times, people
                            who step up to donate their blood are real-life superheroes</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- need blood -->
    <section>
        <div class="card text-center mb-5">
            <div class="card-body text-black">
                <h5 class="card-title">Become a Donor?</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                </p>
                <a href="{{ route('register') }}" class="btn btn-primary">Join us</a>
            </div>
        </div>
        <section class="mb-5">

            <div class="container" style="margin-top: 0 !important;">
                <div class="row">
                    <div class="row" style="padding-bottom: 5px;">
                        <img src="{{ asset('images/bannar2.jpg') }}" class=" img-fluid" alt="" />
                    </div>
                    <div class="row" style="color: #ffa500;
                        font-weight: bold;
                        font-size: 30px;">
                        <h4>What Conditions Would Make You Ineligible to Be a Donor?</h4>

                        <p class="text-muted">
                            You will not be eligible to donate blood or platelets if you:
                    </div>
                    <div>
                        <ol>
                            <li> Have tested positive for hepatitis B or hepatitis C, lived with or had sexual
                                contact in the past 12 months with anyone who has hepatitis B or symptomatic
                                hepatitis C. </li>
                            <li> Had a tattoo in the past 3 months or received a blood transfusion (except with your
                                own blood) in the past 3 months. </li>
                            <li> Have ever had a positive test for the AIDS virus. </li>
                            <li>
                                Have used injectable drugs, including anabolic steroids, unless prescribed by a
                                physician in the past 3 months.</li>
                            <li>
                                Blood donors must wait at least 56 days between blood donations and 7 days before
                                donating platelets. Platelet donors may donate once every seven days, not to exceed
                                six times in any eight-week period, and must wait 7 days before donating blood.</li>
                        </ol>
                    </div>


                </div>
            </div>

        </section>

        <!-- need blood -->
        <section class="mb-5">
            <div class="card my-3 mx-4 text-center">
                <div class="card-body text-black">
                    <h5 class="card-title">Need Blood?</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the
                        card's content.
                    </p>
                    <a href="{{ route('login') }}" class="btn btn-primary">Request</a>
                </div>
            </div>
        </section>
        <!-- need blood end-->





</main>



@endsection
