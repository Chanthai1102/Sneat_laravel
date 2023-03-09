<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <!-- @Theme CSS -->
    <link rel="stylesheet" href="{{url('assets/css/theme.css')}}">

    <!-- @Bootstrap5 CSS -->
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

<header>
    <div class="container">
        <div class="logo">
            <a href="">
                <!-- <img src="https://dummyimage.com/180x80" alt=""> -->
                <h1>
                    KH FASHION
                </h1>
            </a>
        </div>
        <ul class="menu">
            <li>
                <a href="/home">HOME</a>
            </li>
            <li>
                <a href="/shop">SHOP</a>
            </li>
            <li>
                <a href="">NEWS</a>
            </li>
        </ul>
        <div class="search">
            <form action="" method="get">
                <input type="text" class="box" placeholder="SEARCH HERE">
                <button>
                    <div style="background-image: url(image_frontend/search.png);
                                    width: 28px;
                                    height: 28px;
                                    background-position: center;
                                    background-size: contain;
                                    background-repeat: no-repeat;
                        "></div>
                </button>
            </form>
        </div>
    </div>
</header>

@yield('content')


<footer>
        <span>
            AllRight Recieved @ 2023
        </span>
</footer>

</body>

<!-- @Bootstrap5 JS -->
<script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
