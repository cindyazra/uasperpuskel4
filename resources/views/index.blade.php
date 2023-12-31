<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') Perpustakaan UMKT</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset ('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset ('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset ('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset ('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset ('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{asset ('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{asset ('style/assets/scss/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
        
    <script src="{{asset ('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{asset ('style/assets/js/popper.min.js') }}"></script>
    <script src="{{asset ('style/assets/js/plugins.js') }}"></script>
    <script src="{{asset ('style/assets/js/main.js') }}"></script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">@yield('title')</a>
                <a class="navbar-brand hidden" href="">P</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{url ('/home') }}"> <i class="menu-icon fa fa-dashboard"></i>HOME </a>
                    </li>
                   
                    <li>
                        <a href="{{url ('/buku') }}"> <i class="menu-icon fa fa-book"></i>Data Buku </a>
                    </li>

                    <li>
                        <a href="{{url ('/prodi') }}"> <i class="menu-icon fa fa-book"></i>Data Prodi </a>
                    </li>

                    <li>
                        <a href="{{url ('/anggota') }}"> <i class="menu-icon fa fa-users"></i>Data Anggota </a>
                    </li>

                    <li>
                        <a href="{{url ('/petugas') }}"> <i class="menu-icon fa fa-user"></i>Data Petugas </a>
                    </li>

                    <li>
                        <a href="{{url ('/pinjam') }}"> <i class="menu-icon fa fa-book"></i>Data Pinjam </a>
                    </li>

                    <li>
                        <a href="{{url ('/kembali') }}"> <i class="menu-icon fa fa-clipboard"></i>Data Kembali </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset ('style/images/admin.jpg') }}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="{{url ('/logout') }}"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true"></a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
       
        @yield('breadcrumbs')

        @yield('konten')

</body>
</html>
