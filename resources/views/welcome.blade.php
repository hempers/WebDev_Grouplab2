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
                <li><a href="{{ url('/')}}">Home</a></li>
                <li><a href="{{ url('/about')}}">About</a></li>
                <li><a href="{{ url('/contactus')}}">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <img src="assets/img/home/logo.svg" alt="Laravel Logo" class="logo">
        <h1>Web Development</h1>
        <h2>Group Laboratory Project</h2>
        <a href="{{ url('/content')}}">
        <button>Explore More</button>
        </a>
        
    </div>

     <!-- Modal 
    <div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Welcome</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Welcome, guest!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

   jQuery and Bootstrap JS for modal functionality
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function() {
            @guest
                $('#welcomeModal').modal('show');
            @endguest
        });
    </script> -->


</body>
</html>

   
