<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Tips for Beginners</title>
    <link rel="stylesheet" href="{{ asset('css/fitness-tips.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header class="header">
        <h1>Fitness Tips for Beginners</h1>
        <p><strong>Date:</strong> October 12, 2024 | <strong>Author:</strong> Ahmed Sultan</p>
        <nav>
            <a href="{{ url('/blog') }}" style="text-align: center; color: whitesmoke; font-size: large;">
                Personal Trainer Co. Blog
            </a>
        </nav>
    </header>

    <main>
        <article>
            <p>Embarking on a fitness journey can be both exciting and intimidating. At The Personal Trainer Co., we believe in starting strong with practical and sustainable habits.
                <br>First, prioritize consistency over intensity; committing to just 30 minutes of physical activity daily can make a significant difference.
                <br>Start with basic exercises like walking, stretching, or bodyweight movements to build strength and endurance.
                <br>Pair your workouts with a balanced diet rich in whole grains, lean proteins, and fresh fruits and vegetables. Remember, hydration is key—drink plenty of water before, during, and after exercise.
                <br>Most importantly, set realistic goals to keep yourself motivated and celebrate your progress along the way.
                <br>With The Personal Trainer Co., you’re never alone. Our experienced trainers and state-of-the-art facilities are here to guide you every step of the way.
            </p>
            <p>Learn more about our <a href="{{ url('/services') }}">Services</a> to guide your fitness journey.</p>
        </article>

        <section class="comments-section">
            <h3>Leave a Comment</h3>
            <form action="\post-comment" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>
                <input type="hidden" id="blog_number" name="blog_number" value="1">
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
