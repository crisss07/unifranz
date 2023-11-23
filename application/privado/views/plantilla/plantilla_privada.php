<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/images/logo-unifranz-principal.png">
    <title>Sitio Privado</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <!-- <link href="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet"> -->
    <!-- <link href="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet"> -->
    <!-- <link href="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet"> -->
    <!-- <link href="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/css-chart/css-chart.css" rel="stylesheet"> -->
    <!-- toast CSS -->
    <!-- <link href="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link href="<?php echo $this->tool_entidad->sitio(); ?>files/public/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo $this->tool_entidad->sitio(); ?>files/public/css/colors/blue.css" id="theme" rel="stylesheet">
    
    <!-- Incluye las bibliotecas DataTables.js y jQuery mediante CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <!-- Incluye el archivo de traducción en español -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"></script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <style type="text/css">
        #miTabla{
            font-size: 12px;
        }
        .dataTables_info{
            font-size: 13px;
        }
    </style>

</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
 <!--    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo $this->tool_entidad->sitioadmin().'Login'; ?>">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/images/logo-unifranz.png" alt="homepage" class="dark-logo" height="30px" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/images/logo-unifranz.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/images/Logo-Red-Alumni.png" alt="homepage" class="dark-logo" height="60px" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/images/Logo-Red-Alumni.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/images/users/user.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/images/users/user.png" alt="user"></div>
                                            <div class="u-text">
                                                <br>
                                                <h4><?php echo $_SESSION['rol']; ?></h4>
                                                <p class="text-muted"><?php echo $_SESSION['nombres']; ?></p>
                                                <!-- <a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a> -->
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> Mi Perfil</a></li>
                                   <!--  <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li> -->
                                    <li><a href="<?php echo $this->tool_entidad->sitioadmin().'Login/cerrarSesion'; ?>"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/images/users/user.png" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo $_SESSION['nombres']; ?> <span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <!-- <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a> -->
                            <a href="<?php echo $this->tool_entidad->sitioadmin().'Login/cerrarSesion'; ?>" class="dropdown-item"><i class="fa fa-power-off"></i> Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="<?php echo $this->tool_entidad->sitioadmin().'Charla'; ?>"><i class="mdi mdi-format-list-bulleted-type"></i><span class="hide-menu">Charlas</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo $this->tool_entidad->sitioadmin().'UsuariosAlumni'; ?>">Alumni</a></li>
                                <li><a href="<?php echo $this->tool_entidad->sitioadmin().'UsuariosEmpresa'; ?>">Empresas</a></li>
                                <li><a href="<?php echo $this->tool_entidad->sitioadmin().'UsuariosAdministradores'; ?>">Administradores</a></li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="<?php echo $this->tool_entidad->sitioadmin().'UsuariosAlumni'; ?>"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a>
                        </li> -->
                        <li>
                            <a href="<?php echo $this->tool_entidad->sitioadmin().'AlumnosDestacados'; ?>"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Alumnos Destacados</span></a>
                        </li>
                      <!--   <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Inbox</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.html">Mailbox</a></li>
                                <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                <li><a href="app-compose.html">Compose Mail</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- esto es el contenido -->
                <?php echo $contenido; ?>
                <!-- hasta aqui -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2023 Desarrollo web - Dibel Soluciones en Tecnología
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/jquery/jquery.min.js"></script> -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- charts -->
    <!-- <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/echarts/echarts-all.js"></script>
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/toast-master/js/jquery.toast.js"></script>
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/js/dashboard1.js"></script>
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/js/toastr.js"></script>
 -->
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo $this->tool_entidad->sitio(); ?>files/public/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Tiempo de inactividad en milisegundos (15 minutos)
        const tiempoInactividad = 900000;

        let temporizadorInactividad;

        // Función para reiniciar el temporizador
        function reiniciarTemporizador() {
          clearTimeout(temporizadorInactividad);
          temporizadorInactividad = setTimeout(cerrarSesion, tiempoInactividad);
        }

        // Función para cerrar la sesión
        function cerrarSesion() {
            Swal.fire("Tu sesión se cerro debido a la inactividad.!");
            setTimeout(function() {
                var enlace  = '<?php echo $this->tool_entidad->sitioadmin(); ?>';
                window.location.href = enlace+'Login/cerrarSesion';
            }, 10000);
        }

        // Evento de inactividad del usuario
        document.addEventListener('click', reiniciarTemporizador);
        document.addEventListener('mousemove', reiniciarTemporizador);
        document.addEventListener('keydown', reiniciarTemporizador);

        // Iniciar el temporizador al cargar la página
        reiniciarTemporizador();
    </script>
    
</body>

</html>