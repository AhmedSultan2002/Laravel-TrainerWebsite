@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="{{asset('css/form.css')}}">
@endpush
@section('content')
<div class="MainContact">
    <section class="contact">
        <p>Contact Us!</p>

        <!-- Success Message -->
        @if (session('success'))
            <p id="successMessage">{{ session('success') }}</p>
        @endif

        <!-- Form -->
        <form id="contactForm" action="/contact" method="POST">
            @csrf
            <div class="form-row">
                <div class="form_part">
                    <label for="first-name">First Name:</label>
                    <input type="text" id="first-name" name="first_name" value="{{ old('first_name') }}" placeholder="John">
                    <span class="error">@error('first_name') {{ $message }} @enderror</span>
                </div>
                <div class="form_part">
                    <label for="last-name">Last Name:</label>
                    <input type="text" id="last-name" name="last_name" value="{{ old('last_name') }}" placeholder="Doe">
                    <span class="error">@error('last_name') {{ $message }} @enderror</span>
                </div>
            </div>

            <div class="form-row">
                <div class="form_part">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com">
                    <span class="error">@error('email') {{ $message }} @enderror</span>
                </div>
                <div class="form_part">
                    <label for="number">Phone Number:</label>
                    <input type="text" id="number" name="number" value="{{ old('phone') }}" placeholder="+1 (123) 456-7890">
                    <span class="error">@error('phone') {{ $message }} @enderror</span>
                </div>
            </div>

            <div class="full-width-row">
                <div class="form_part">
                    <label for="service">Which Services Are You Interested In?</label>
                    <select id="service" name="service">
                        <option value="">Select a service</option>
                        <option value="yoga" {{ old('services') == 'yoga' ? 'selected' : '' }}>Yoga Classes</option>
                        <option value="bootcamp" {{ old('services') == 'bootcamp' ? 'selected' : '' }}>Boot Camp Fitness</option>
                        <option value="sports" {{ old('services') == 'sports' ? 'selected' : '' }}>Sports Training</option>
                    </select>
                    <span class="error">@error('services') {{ $message }} @enderror</span>
                </div>
            </div>

            <div class="full-width-row">
                <div class="form_part">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" placeholder="Your message here...">{{ old('message') }}</textarea>
                    <span class="error">@error('message') {{ $message }} @enderror</span>
                </div>
            </div>

            <button type="submit">Submit</button>
        </form>
    </section>
</div>
@endsection
