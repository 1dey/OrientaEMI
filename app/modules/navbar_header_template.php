<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <a href="index1.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>O</b>V</span>
        <!-- logo for regular state and mobile devices -->
        <?php
            if($tipo=="1") // Estudiante
            {
                echo '<span class="logo-lg"><b>Estudiante</b>OV</span>';
            }
            elseif($tipo=="0") // Psicologia
            {
                echo '<span class="logo-lg"><b>Admin</b>OV</span>';
            }
        ?>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="../template/dist/img/a.png" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo $dataUser['nombres'] ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="../template/dist/img/a.png" class="img-circle" alt="User Image">

                            <p>
                                <?php echo $dataUser['nombres'] ?>
                                <small><?php echo $dataUser['apellidos'] ?></small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="perfil.php" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="../session/end_session.php" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>