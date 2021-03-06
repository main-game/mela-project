@extends("layouts.index")
@section('content')
@section('page-topic','About MELA Cosmetics')
<link href="{{asset('css/aboutUs.css')}}" rel='stylesheet' type='text/css'/>
<div class="about-section paddingTB60 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="about-title clearfix">
                    <h1>About <span>MELA Cosmetics</span></h1>
                    <h3>Our mission and vision </h3>
                    <div class="content text-justify">
                        <p>We're on a quest to bring the fun side of beauty to all—constantly delighting our guests with
                            All Things Beauty, All in One Place™ while offering rewarding careers for our passionate,
                            beauty-loving associates. </p>
                        <p>Our Vision: To be the most-loved beauty destination of our guests and the most-admired
                            retailer by our Ulta Beauty associates, communities, partners and investors.</p>
                        <p>Our Mission: Every day we use the power of beauty to bring to life the possibilities that lie
                            within each of us – inspiring every guest and enabling each associate to build a fulfilling
                            career.</p>
                    </div>
                    <div class="about-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/MelaHanoi"><i id="social-fb"
                                                                                class="fab fa-facebook-square fa-3x social"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="about-img">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection