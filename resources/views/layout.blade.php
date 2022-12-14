<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/book.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Book Library</title>
</head>
<body>
    <div class="m-4">
        <div class="header">
            <h1>Giant Book Supplier</h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                            <div class="dropdown-menu">
                                @foreach($categories as $category)
                                    <a href="{{ url('category', ['id'=>$category->id]) }}" class="dropdown-item">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <a href="{{ url('publisher') }}" class="nav-item nav-link active">Publisher</a>
                        <a href="{{ url('contact') }}" class="nav-item nav-link active">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    @yield('konten')

    <div class="footer">
        <p> ??Michelle Angela G 2440006910 UTS Web Programming</p>
    </div>
</body>
</html>
