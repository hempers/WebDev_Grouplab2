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
                <li><a href="{{ url('/about')}}">About Us</a></li>
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
                        <h2>Name: Richard D. Bilan</h2>
                        <h2>Address: P4 Brgy 1 Pob. Camalig, Albay</h2>
                        <h2>Year & Course: 3rd Year, BS Information Technology</h2>
                        <p>I am an IT student with a strong curiosity about the tech field. While I am still exploring my future career path, I am committed to completing my studies and am passionate about learning and discovering new aspects of technology.</p>
                    </div>
                    <div class="info-image">
                        <img src="assets/img/about/richard.jpg" alt="Richard D. Bilan">
                    </div>
                </div>

                <div class="info-wrapper">
                    <div class="info-text">
                        <h2>Name: Mae Anne B. Bongat</h2>
                        <h2>Address: Zone 2 Bogñabong Tabaco City, Albay</h2>
                        <h2>Year & Course: 3rd Year, BS Information Technology</h2>
                        <p>A student eager to learn more about the IT industry. Although still uncertain about which path to take, I am committed to completing everything needed to graduate.</p>
                    </div>
                    <div class="info-image">
                        <img src="assets/img/about/meh.jpg" alt="Mae Anne Bongat">
                    </div>
                </div>

                <div class="info-wrapper">
                    <div class="info-text">
                        <h2>Name: Althea M. Casimiro</h2>
                        <h2>Address: Purok 5 Masarawag Guinobatan, Albay</h2>
                        <h2>Year & Course: 3rd Year, BS Information Technology</h2>
                        <p>I'm an IT student who is passionate about finishing my studies in this course, but I also love engaging in creative activities that I find interesting and enjoyable during my free time.</p>
                    </div>
                    <div class="info-image">
                        <img src="assets/img/about/thei.jpg" alt="Althea M. Casimiro">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
