<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/materialdesignicons.css" rel="stylesheet">

    <style media="screen">
        .grad {
            background-image: linear-gradient(to right, #01CBB4, #0098B6);
        }
    </style>

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <i class="mdi mdi-account-outline" aria-hidden="true"></i>
            </div>
            <div class="list-group list-group-flush text-center bg-light">
                <a href="#" class="list-group-item py-2 bg-secondary text-light"><i class="mdi mdi-account-outline" aria-hidden="true"></i></a>
                <a href="#" class="list-group-item py-2 bg-dark text-light"><i class="mdi mdi-view-grid-outline" aria-hidden="true"></i></a>
                <a href="#" class="list-group-item py-2 bg-dark text-light"><i class="mdi mdi-school-outline" aria-hidden="true"></i></a>
                <a href="#" class="list-group-item py-2 bg-dark text-light"><i class="mdi mdi-account-group-outline" aria-hidden="true"></i></a>
                <a href="#" class="list-group-item py-2 bg-dark text-light"><i class="mdi mdi-cog-outline" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-dark grad bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-link" id="menu-toggle">
                        <!-- <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-wrapper" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="menu-toggle"> -->
                        <!-- Toggle Menu -->
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand ms-2" href="#">Sistem Informasi Alumni</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-account-outline"></span>
                    </button>

                    <div class="collapse navbar-collapse ms-md-auto" id="navbarSupportedContent">
                        <ul class="navbar-nav nav ms-md-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="mdi mdi-logout" aria-hidden="true">Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid">
                <h1 class="mt-4">Simple Sidebar</h1>
                <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Menu Toggle Script -->
    <script>
        var toggle = false
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            // $("#wrapper").toggleClass("toggled")
            toggle = !toggle
            if (toggle) {
                var margin = 0 - parseInt($("#sidebar-wrapper").css('width')) + 'px'
                $("#sidebar-wrapper").css('margin-left', margin)
                $("#sidebar-wrapper").css('transition', 'margin-left .4s')
            } else {
                $("#sidebar-wrapper").css('margin-left', '0')
                $("#sidebar-wrapper").css('transition', 'margin-left .4s')
            }
        });
    </script>
</body>

</html>