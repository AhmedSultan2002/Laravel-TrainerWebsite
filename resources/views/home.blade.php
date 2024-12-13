@extends('layouts.master')

@section('title', 'Home | The Personal Trainer Co.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/Home.css') }}">
@endpush

@section('content')
<div class="MainHome">
    <section class="hero">
        <h1>Welcome to The Personal Trainer Co.</h1>
        <p>Personal Training for Self-Confidence, Health, and Self-Fulfillment</p>
        <div class="buttons">
            <a href="{{ url('/about') }}">Learn More</a>
            <a href="{{ url('/register') }}">Join Now</a>
        </div>
    </section>
</div>
@endsection
