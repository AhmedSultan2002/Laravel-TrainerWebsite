<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrition & Wellness</title>
    <link rel="stylesheet" href="{{ asset('css/fitness-tips.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header class="header">
        <h1>Nutrition & Wellness</h1>
        <p><strong>Date:</strong> October 10, 2024 | <strong>Author:</strong> Imama</p>
        <nav>
            <a href="{{ url('/blog') }}" style="text-align: center; color: whitesmoke; font-size: large;">
                Personal Trainer Co. Blog
            </a>
        </nav>
    </header>

    <main>
        <article>
            <p>Good nutrition is the foundation of overall wellness. At The Personal Trainer Co., we emphasize the importance of fueling your body with nutrient-dense foods that promote energy, recovery, and optimal health.
                <br>Start by incorporating a variety of colorful fruits and vegetables into your meals, ensuring your body gets a wide range of vitamins and minerals.
                <br>Protein is crucial for muscle repair and growth, so include sources like chicken, fish, beans, or tofu. Healthy fats found in nuts, avocados, and olive oil support brain health and provide sustained energy.
                <br>Don’t forget complex carbohydrates like quinoa or sweet potatoes for long-lasting fuel.
                <br>Beyond food, wellness encompasses sleep, stress management, and regular exercise. Our personalized programs integrate all aspects of health, making it easier to stay on track.
            </p>
            <p>Learn more about our philosophy on our <a href="{{ url('/about') }}">About Us</a> page.</p>
        </article>

        <section class="comments-section">
            <h3>Leave a Comment</h3>
            <form action="/post-comment" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>
                <input type="hidden" id="blog_number" name="blog_number" value="2">
                <button type="submit">Post Comment</button>
            </form>
            <div class="comments-list">
                <h3>Comments</h3>
                @if($comments && count($comments) > 0)
                    @foreach($comments as $comment)
                        <div class="comment">
                            <p><strong>{{ $comment['name'] }}</strong></p>
                            <p>{{ $comment['comment'] }}</p>
                            <hr>
                        </div>
                    @endforeach
                @else
                    <p>No comments yet. Be the first to leave a comment!</p>
                @endif
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>Street, Wellington CBD</p>
        <p>Email: <a href="mailto:contact@ptco.com">contact@ptco.com</a> | Phone: <a href="tel:672-765-087">672-765-087</a></p>
        <div class="social-media">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-whatsapp"></a>
        </div>
        <p>&copy; 2024 The Personal Trainer Co.</p>
    </footer>
</body>
</html>
