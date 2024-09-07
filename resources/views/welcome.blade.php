<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Staatliches&display=swap'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="styles/styles_h.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <li><a href="{{ url('/')}}" style="text-decoration: none;">Home</a></li>
                <li><a href="{{ url('/about')}}"style="text-decoration: none;">About</a></li>
                <li><a href="{{ url('/contactus')}}"style="text-decoration: none;">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <img src="assets/img/home/logo.svg" alt="Laravel Logo" class="logo">
        <h1 style="font-weight: 900;">Web Development</h1>
        <h3 style="font-weight: 100;">Group Laravel Project</h3>
        <a href="{{ url('/content')}}">
            <button>Explore More</button>
        </a>
    </div>

    <section class="welcome-section">
    <!-- Modal -->
    <div class="modal fade welcome-modal" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Welcome, {{ session('user_name') }}!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Get Started</button>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- jQuery and Bootstrap JS for modal functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function() {
            @if(session('user_name'))
                $('#welcomeModal').modal('show');
            @endif
        });

        $(document).ready(function() {
            @if(session('user'))
                $('#welcomeModal').modal('show');
            @endif
        });
    </script>
</body>
</html>