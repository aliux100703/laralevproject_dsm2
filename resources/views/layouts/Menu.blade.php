<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <!-- <title>SB Admin 2 - Dashboard</title>-->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Los pits', '´los pits') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
   

    <link href={{ asset('libs/fontawesome/css/all.min.css') }} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{ asset('libs/sbadmin/css/sb-admin-2.min.css') }} rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!--yield(contend)-->
        @yield('contend')
        <!-- Sidebar -->


        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">


                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-gear-wide" viewBox="0 0 16 16">
                        <path
                            d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 1 0-9.995 4.998 4.998 0 0 1 0 9.996z" />
                    </svg>
                </div>
                <div class="sidebar-brand-text mx-3">Los pits</div>
            </a>

           
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            
            <li class="nav-item">
                <a class="nav-link" href="{{ url('productos') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Productos</span></a>
            
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('marcas') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Marcas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('provedores') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Provedores</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('clientes') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Clientes</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('ventas') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Ventas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('detalles-ventas') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Detalles de ventas</span></a>
            </li>


     
               


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

         

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="app">
                @include('layouts.app')
                         </div>
                     </div>
                 </nav>
           
            </li>
        </div>
    </div>
    

    <!-- Bootstrap core JavaScript-->
    <script src={{ asset('libs/jquery/jquery.min.js') }}></script>
    <script src={{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}></script>



    <!-- Custom scripts for all pages-->
    <script src={{ asset('libs/sbadmin/js/sb-admin-2.min.js') }}></script>

</body>


</html>
