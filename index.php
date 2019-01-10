<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Athletics Meeting App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap-3.4.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>

<body>
    <?php
    include 'functions.php';
    ?>

    <?php
    add_athlete();
    updateAthlete();
    ?>
    <div class="container-fluid">
        <div id="wrapper">
            <div class="overlay"></div>

            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Athletics Meeting
                        </a>
                    </li>
                    <li>
                        <a href="add_athlete.php">Add athlete</a>
                    </li>
                    <li>
                        <a href="update_athlete.php">Update athlete</a>
                    </li>
                    <li>
                        <a href="#">Athletes list</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Athletes<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Addmitted</a></li>
                            <li><a href="#">Rejected</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Customized search</a>
                    </li>
                </ul>
            </nav>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-push-2">
                            <div class="panel-group col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a href="#item1">
                                                Athletes </a>
                                        </h3>
                                    </div>
                                    <div id="item1">
                                        <div class="panel-body">
                                            <?php
                                            list_all_athletes();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>









        </div>
        <script src="assets/jquery-3.3.1.min.js"></script>
        <script src="assets/bootstrap-3.4.0-dist/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
</body>

</html>