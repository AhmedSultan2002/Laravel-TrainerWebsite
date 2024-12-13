@extends('layouts.master')

@section('title', 'About Us | The Personal Trainer Co.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/About.css') }}">
@endpush

@section('content')
<div class="MainAbout">
    <div class="sub-container">
        <button class="Js_button" onclick="showDetails()">Show Details</button>
        <button class="Js_button" onclick="hideDetails()">Hide Details</button>
        <button class="Js_button" onclick="changeBackgroundColor()">Change Background Color</button>
    </div>

    <section class="articles">
        <!-- Hidden details section -->
        <section class="articles-box" id="details-section" style="display: none;">
            <h3 style="text-align:center;">Additional Information about The Personal Trainer Co.</h3><br>
            <h3>Benefits of Training with Us</h3>
            <p>At <strong>The Personal Trainer Co.</strong>, we focus on delivering a transformative fitness experience that goes beyond just exercise. Our personalized training programs offer:</p>
            <ul>
                <li><strong>Improved Physical Health:</strong> Boost your strength, stamina, and flexibility with science-backed workouts tailored to your goals.</li>
                <li><strong>Mental Wellness:</strong> Reduce stress and improve mood through regular physical activity, supported by our compassionate trainers.</li>
                <li><strong>Holistic Development:</strong> Achieve a balance between physical fitness and mental well-being for a more fulfilling lifestyle.</li>
            </ul><br><br>
            <h3>Success Stories</h3>
            <p>We take pride in helping our clients achieve extraordinary results. Here are some real-life transformations:</p>
            <ul>
                <li><strong>Sarah T.:</strong> Lost 25 pounds in 6 months and gained newfound confidence to pursue her career goals.</li>
                <li><strong>Mark L.:</strong> Rehabilitated his knee injury and completed his first marathon with our guidance.</li>
                <li><strong>Emily R.:</strong> Found relief from chronic back pain and improved her posture through our customized training program.</li>
            </ul>
        </section>

        <!-- About Section -->
        <section class="articles-box">
            <h2>About The Personal Trainer Co.</h2>
            <p>The Personal Trainer Co. has been a leader in the fitness industry for the past 30 years, offering dynamic fitness instruction to students of all levels. Located in the heart of Wellington CBD, PT Co. recently relocated to a state-of-the-art facility to accommodate a growing number of students.</p>
            <p>The new facility is equipped with a weight training area, a full aerobic dance floor, and an endless pool. They offer a range of fitness services including yoga, boot camps, and sports training for cycling, running, triathlon, and volleyball. Visit our <a href="{{ url('/services') }}">services section</a> for more details.</p>
            <p>At PT Co., the focus is on personal training for self-confidence, health, and self-fulfillment, with specialized programs to help individuals reach their fitness goals.</p>
        </section>

        <!-- Profile of Trainer -->
        <section class="articles-box">
            <h3>Meet Kevin Brown</h3>
            <p>Kevin Brown, one of the senior trainers at PT Co., has over 15 years of experience in the fitness industry. Specializing in sports training and personal fitness, Kevin is known for his motivational training style that pushes students to achieve their best. His sessions are both challenging and rewarding, tailored to meet the needs of each individual student.</p>
        </section>

        <!-- Testimonials -->
        <section class="articles-box">
            <h3>What People Are Saying</h3>
            <p>“...The teaching and instruction are absolutely dynamic; they have the ability to break down movements and teach at a level suited to the student. I just look at the number of students that have had some type of disability and what PT Co. has managed to do for them.”</p>
            <p>“...I really like the whole atmosphere they create. On one hand, it’s inviting, fun, and motivating, while on the other hand, it's challenging and downright hard at times.”</p>
        </section>

        <!-- Trainers pictures -->
        <section class="articles-box">
            <h3>Meet the Trainers</h3>
            <div class="trainer">
                <img id="trainerImage" src="{{ asset('images/Imama.jpeg') }}" alt="Trainer">
            </div>
        </section>
    </section>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/rollover.js') }}"></script>
@endpush
