<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet"> 
    <title>MollyCoin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <img src="/img/bitcoin.png" class="myimg-fluid" alt="Logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/"><span class="active">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Buy Bitcoin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rate">Rates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Trade Now</a>
                    </li>
                    {{-- <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link account" href="/register">Create Account</a>
                    </li>
                </ul>
            </div>
        </div>   
    </nav>
    <div class="container-fluid p-0">
    <div class="site-content">
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column">
                <h1 class="site-title">Secure and Easy Way To Buy And Trade Bitcoin...</h1>
                <div class="main">
                    <div class="d-flex flex-row">
                        <div>
                            <span class="main-dsc">4.8 Million</span><br>
                            <p class="dsc">Transactions</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                             <span class="main-dsc">1.6 Million</span><br>
                            <p class="dsc">Wallet Active</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <span class="main-dsc">26 Plus</span><br>
                            <p class="dsc">Countries</p>
                        </div>
                    </div>
                </div>
                <div class="create-account">
                    <a href="/register" class="booking">CREATE AN ACCOUNT</a>
                </div>
            </div>
        </div>
    </div>
</div>
    @yield('content')
    @include('includes.footer')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html>