@extends('layouts.master')

@section('title', 'Services | The Personal Trainer Co.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/General.css') }}">
<link rel="stylesheet" href="{{ asset('css/Services.css') }}">
@endpush

@section('scripts')
<script src="dynamicChange.js" defer></script>
<script src="script.js" defer></script>
<script src="services.js" defer></script>
@endsection

@section('content')
<div class="MainServices">
    <div class="sub-container">
        <button class="Js_button" id="Change-Button" onclick="ChangeStyle()">Change Text Style</button>
        <button class="Js_button" id="Reset-Button" onclick="ResetStyle()">Reset Text Style</button>
        <br>
        <p id="btn-message">Please select one of the services cards.</p>
    </div>

    <section class="container">
        <h2>Our Services</h2>
        <section class="services">
            <article class="services-box selectable">
                <div class="text-container">
                    <h3>New Training Facility</h3>
                    <p>The Personal Trainer Co. now operates from an expanded facility, offering enhanced training environments and state-of-the-art equipment. Our new facilities include:</p>
                    <ul>
                        <li>A weight training area equipped with bench press, squat rack, free weights, and a leg press.</li>
                        <li>A full aerobic dance floor with special flooring, along with complete yoga and pilates equipment.</li>
                        <li>An endless pool for aquatic exercises.</li>
                        <li>A 'watch and wait' area with chairs, couches, and a TV for parents.</li>
                    </ul>
                </div>
                <section class="img-container">
                    <img src="{{ asset('images/new-facility.jpg') }}">
                    <img src=" {{ asset('images/new-pool.jpg') }}" alt="The endless pool at The Personal Trainer Co.">
                </section>
            </article>

            <article class="services-box selectable">
                <div class="text-container">
                    <h3>Yoga Classes</h3>
                    <p>Our yoga classes are designed to enhance flexibility, strength, and mindfulness. With a variety of styles offered, we cater to all levels of practice, from beginners to advanced students.</p>
                </div>
                <div class="img-container">
                    <img src=" {{ asset('images/new-yoga.jpg') }}" alt="Yoga class in session at The Personal Trainer Co.">
                </div>
            </article>

            <article class="services-box selectable">
                <div class="text-container">
                    <h3>Boot Camp Fitness</h3>
                    <p>Get ready to sweat with our Boot Camp sessions, which combine strength training, cardio, and endurance exercises to give you a full-body workout. Each session is challenging but highly effective for weight loss and fitness.</p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/new-bootcamp.jpg') }}" alt="People participating in boot camp fitness at The Personal Trainer Co.">
                </div>
            </article>

            <article class="services-box selectable">
                <div class="text-container">
                    <h3>Sports Training</h3>
                    <p>Whether you're preparing for a triathlon, marathon, or volleyball season, our specialized sports training programs are tailored to enhance performance in cycling, running, and more. Led by experienced trainers, these sessions focus on technique, stamina, and peak performance.</p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/new-training.jpg')}}" alt="Athletes in training for triathlons at The Personal Trainer Co.">
                </div>
            </article>
        </section>

        <article class="tables">
            <h3>Service Pricing</h3>
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Session Duration</th>
                        <th>Price (NZD)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Yoga Classes</td>
                        <td>60 minutes</td>
                        <td>$25</td>
                    </tr>
                    <tr>
                        <td>Boot Camp Fitness</td>
                        <td>90 minutes</td>
                        <td>$35</td>
                    </tr>
                    <tr>
                        <td>Sports Training</td>
                        <td>120 minutes</td>
                        <td>$50</td>
                    </tr>
                </tbody>
            </table>
        </article>

        <article class="tables">
            <h3>Additional Services</h3>
            <table id="additional-services-table" border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Service Name</th>
                        <th>Price (NZD)</th>
                        <th>Day</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($additionalServices as $service)
                        <tr class="addi_row">
                            <td>{{ $service['name'] }}</td>
                            <td>{{ $service['price'] }}</td>
                            <td>{{ $service['day'] }}</td>
                            <td>{{ $service['time'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if ($isAdmin)
                <button id="add-item-btn">Add Item</button>
                <button id="remove-item-btn">Remove Item</button>
                <button id="change-button">Change Item</button>
            @endif
        </article>

        <article class="tables">
            <h3>Weekly Class Schedule</h3>
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Yoga</th>
                        <th>Boot Camp</th>
                        <th>Sports Training</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>6:00 AM - 7:00 AM</td>
                        <td>7:30 AM - 9:00 AM</td>
                        <td>6:00 PM - 8:00 PM</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>6:00 AM - 7:00 AM</td>
                        <td>7:30 AM - 9:00 AM</td>
                        <td>6:00 PM - 8:00 PM</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>6:00 AM - 7:00 AM</td>
                        <td>7:30 AM - 9:00 AM</td>
                        <td>6:00 PM - 8:00 PM</td>
                    </tr>
                </tbody>
            </table>
        </article>
    </section>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/services.js') }}"></script>
<script src="{{ asset('js/dynamicChange.js') }}"></script>
@endpush