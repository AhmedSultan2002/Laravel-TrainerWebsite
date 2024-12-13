@extends('layouts.master')

@section('title', 'Blog | The Personal Trainer Co.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/About.css') }}">
<link rel="stylesheet" href="{{ asset('css/Blog.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endpush

@section('content')
<main class="MainAbout">
    <section class="articles-grid">
        <a href="{{ url('/render-blog/1') }}" style="text-decoration: none;">
            <article class="articles-box">
                <h3 style="text-align: center;">Fitness Tips for Beginners</h3>
                <p class="meta"><strong>Date:</strong> October 12, 2024 | <strong>Author:</strong> Ahmed Sultan </p>
                <p>Discover the best tips to start your journey. We are the best in your area. Our Services will guide you through the essentials.</p>
            </article>
        </a> 

        <a href="{{ url('/render-blog/2') }}" style="text-decoration: none;"> 
            <article class="articles-box">
                <h3 style="text-align: center;">Nutrition and Wellness</h3>
                <p class="meta"><strong>Date:</strong> October 10, 2024 | <strong>Author:</strong> Imama Hamid </p>
                <p>Learn how to optimize your nutrition and maximize your health. Visit our About page for more on their wellness philosophy.</p>
            </article>
        </a>

        <a href="{{ url('/render-blog/3') }}" style="text-decoration: none;">
            <article class="articles-box">
                <h3 style="text-align: center;">Effective Workout Routines</h3>
                <p class="meta"><strong>Date:</strong> October 8, 2024 | <strong>Author:</strong> Eman Muhammad</p>
                <p>Explore the most effective workout routines for various fitness levels. See our Services for personal training options.</p>
            </article>
        </a>
    </section>
</main>
@endsection

@push('scripts')
<script src="{{ asset('js/script.js') }}"></script>
@endpush
