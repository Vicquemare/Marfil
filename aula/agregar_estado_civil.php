<?php
require 'database.php';

if (!empty($_POST)) {
	// keep track validation errors
	$nameError = null;
	
  // keep track post values
  $name = $_POST['name'];

  $valid = true;
  
	// insert data
	if ($valid) {
    
    $sql = "INSERT INTO `estado_civil` (`Nombre_Estado`, `Status`) VALUES (?, ?)";
    $values=array($name, 1);
    Database::executeRow($sql, $values);
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agregar Estados civíles</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span><small>Colegio Nuevo Milenio</small></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

           <!-- sidebar menu -->
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">

                <li><a href="index.html"><i class="fa fa-home"></i> Inicio </a></li>

                <li><a><i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="alumnos.html">Alumnos</a></li>
                    <li><a href="index2.html">Docentes</a></li>

                  </ul>
                </li>
                
                <li><a><i class="fa fa-graduation-cap"></i> Notas <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="calificaciones.html">Calificaciones</a></li>
                    <li><a href="tareas.html">Tareas</a></li>
                  </ul>
                </li>

                <li><a><i class="fa fa-gavel"></i> Conducta <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="faltas.html">Faltas</a></li>
                    <li><a href="tipos_faltas.html">Tipos de Faltas</a></li>
                    <li><a href="faltas_aplicadas.html">Faltas Aplicadas</a></li>
                    <li><a href="observaciones.html">Observaciones</a></li>
                  </ul>
                </li>

                <li><a href="grados.html"><i class="fa fa-book"></i> Grados </a></li>

                <li><a href="materias.html"><i class="fa fa-pencil"></i> Materias </a></li>

                <li><a><i class="fa fa-gear"></i> Mantenimiento<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Departamento<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="mantenimiento2.html">Departamento</a></li>
                          <li><a href="mantenimiento2.html">Municipio</a></li>
                        </ul>
                      </li>
                      <li><a href="mantenimiento.html">Estado Civìl</a></li>
                      <li><a href="mantenimiento.html">Género</a></li>
                      <li> <a href="mantenimiento.html">Medios de Transporte</a></li>
                      <li><a href="mantenimiento.html">Periodos</a></li>
                      <li><a href="mantenimiento.html">Religión</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-clock-o"></i> Horarios <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="horas_clase.html">Horas Clase</a></li>
                    <li><a href="itinerario.html">Itinerario</a></li>
                  </ul>
                </li>

                <li><a href="pagos.html"><i class="fa fa-money"></i> Pagos </a></li>
                
                <li><a><i class="fa fa-line-chart"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Extra</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="e_commerce.html">E-commerce</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="project_detail.html">Project Detail</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="profile.html">Profile</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="page_403.html">403 Error</a></li>
                    <li><a href="page_404.html">404 Error</a></li>
                    <li><a href="page_500.html">500 Error</a></li>
                    <li><a href="plain_page.html">Plain Page</a></li>
                    <li><a href="login.html">Login Page</a></li>
                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="#level1_1">Level One</a>
                      <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="level2.html">Level Two</a>
                          </li>
                          <li><a href="#level2_1">Level Two</a>
                          </li>
                          <li><a href="#level2_2">Level Two</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#level1_2">Level One</a>
                      </li>
                  </ul>
                </li>
                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mantenimiento</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nuevo Estado civíl <small>Rellene la información por favor</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    <!-- fooooorm -->
                    <form class="form-horizontal form-label-left input_mask" method="post">
                        
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label>Nombre del Estado civíl *</label>
                        <input type="text" class="form-control has-feedback-left" name="name" placeholder="Nombre del Estado civíl">
                        <span class="fa fa-heart-o form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <button type="button" class="btn btn-primary">Cancelar</button>
                          <button type="submit" class="btn btn-success">Agregar</button>
                          
                        </div>
                      </div>

                    </form>
                  </div>
                </div>


                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Estado Civíl </h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li>
                              <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                              </a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                <li>
                                  <a href="#">Settings 1</a>
                                </li>
                                <li>
                                  <a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a class="close-link">
                                <i class="fa fa-close"></i>
                              </a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
        
                          <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Estado civíl</th>
                              </tr>
                            </thead>
        
        
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Soltero</td>
                                <td>
                                  <div style="text-align: center;">
                                   <a href="estado_civil_editar.html">
                                    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Editar">
                                      <i class="fa fa-pencil"> </i>
                                    </button>
                                   </a>
                                    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Eliminar">
                                      <i class="fa fa-trash"> </i>
                                    </button>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Casado</td>
                                <td>
                                  <div style="text-align: center;">
                                   <a href="estado_civil_editar.html">
                                    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Editar">
                                      <i class="fa fa-pencil"> </i>
                                    </button>
                                   </a>
                                    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Eliminar">
                                      <i class="fa fa-trash"> </i>
                                    </button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                          </div>
                        </div>
                      </div>
                

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
   

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
   
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script>
      $('#myDatepicker').datetimepicker({
        format: 'YYYY-MM-DD',
        ignoreReadonly: true,
        allowInputToggle: true
    });
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD',
        ignoreReadonly: true,
        allowInputToggle: true
    });
    </script>
  </body>
</html>

