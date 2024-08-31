<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="styles/styles_h.css">
</head>
<body>

    <header>
    <div class="logo">
        <a href="{{ url('/') }}" style="text-decoration: none;">
            <h1 class="text">Laravel</h1>
        </a>
        </div>
        <nav>
            <ul>
                <li><a href="{{ url('/home')}}">Home</a></li>
                <li><a href="{{ url('/about')}}">About</a></li>
                <li><a href="{{ url('/content')}}">Content</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <img src="assets/img/home/logo.svg" alt="Laravel Logo" class="logo">
        <h1>Web Development</h1>
        <h2>First Laravel Project</h2>
        <a href="content.html">
        <button>Explore More</button>
        </a>
        
    </div>

</body>
</html>
