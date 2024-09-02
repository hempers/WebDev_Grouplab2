<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Staatliches&display=swap'>
    <link rel="stylesheet" href="styles/styles_a.css">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
</head>

<body>
    <header>

        <nav class="logo">
            <ul>
                <li><a href="{{ url('/home')}}">Home</a></li>
                <li><a href="{{ url('/about')}}">About</a></li>
                <li><a href="{{ url('/content')}}">Content</a></li>
            </ul>
        </nav>
    </header>

    <div id="about" class="first_page">
        <div class="wrapper">
            <div class="header header_home">About Us</div>
            <div class="info-container">
                <div class="info-wrapper">
                    <div class="info-text">
                        <h2>Name: Richard Bilan</h2>
                        <h2>Address: secret no clue</h2>
                        <h2>Year & Course: 3rd Year, BS Information Technology</h2>

                    </div>
                    <div class="info-image">
                        <img src="assets/img/about/richard.jpg" alt="Richard Bilan">
                    </div>
                </div>

                <div class="info-wrapper">
                    <div class="info-text">
                        <h2>Name: Mae Anne Bongat</h2>
                        <h2>Address: secret no clue</h2>
                        <h2>Year & Course: 3rd Year, BS Information Technology</h2>
                    </div>
                    <div class="info-image">
                        <img src="assets/img/about/meh.jpg" alt="Mae Anne Bongat">
                    </div>
                </div>

                <div class="info-wrapper">
                    <div class="info-text">
                        <h2>Name: Thei Casimiro</h2>

                        <h2>Address: secret no clue</h2>
                        <h2>Year & Course: 3rd Year, BS Information Technology</h2>
                    </div>
                    <div class="info-image">
                        <img src="assets/img//about/thei.jpg" alt="Thei Casimiro">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>