<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Effective Workout Routines</title>
    <link rel="stylesheet" href="{{ asset('css/fitness-tips.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header class="header">
        <h1>Effective Workout Routines</h1>
        <p><strong>Date:</strong> October 8, 2024 | <strong>Author:</strong> Eman Muhammad</p>
        <nav>
            <a href="{{ url('/blog') }}" style="text-align: center; color: whitesmoke; font-size: large;">
                Personal Trainer Co. Blog
            </a>
        </nav>
    </header>

    <main>
        <article>
            <p>Discovering the perfect workout routine can transform your fitness experience. At The Personal Trainer Co., we tailor exercise plans to meet individual needs and goals. Whether you’re a beginner or advanced, a balanced routine should include strength training, cardio, and flexibility exercises.
                <br>For strength, try weightlifting or resistance band workouts to build muscle and bone density. Cardio activities like running, cycling, or swimming improve heart health and stamina, while yoga or Pilates enhance flexibility and reduce stress.
                <br>Time efficiency is key; aim for 3-5 well-structured workouts per week, each lasting 45 minutes to an hour. Rest days are equally important to allow for muscle recovery and prevent burnout.
                <br>With expert trainers and cutting-edge equipment, The Personal Trainer Co. ensures that every session is productive and enjoyable.
            </p>
            <p>Explore the most effective workout routines for various fitness levels. See our <a href="{{ url('/services') }}">Services</a> for personal training options.</p>
        </article>

        <section class="comments-section">
            <h3>Leave a Comment</h3>
            <form action="/post-comment" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>
                <input type="hidden" id="blog_number" name="blog_number" value="3">
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
