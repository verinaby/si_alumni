<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/myStyle.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/materialdesignicons.css" rel="stylesheet">
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>

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
                <div class="row row-dashboard">
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>10 </h3>
                                <p>Pengumuman</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <!-- end small card -->
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>10 </h3>
                                <p>Agenda</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-calendar-week"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <!-- end small card -->
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>10 </h3>
                                <p>Foto</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-image"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <!-- end small card -->
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>10 </h3>
                                <p>Pesan</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <!-- end small card -->
                    </div>
                </div>
                <div class="row row-dashboard2">
                    <div class="col-6">
                        <!-- Bar chart -->
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Jumlah Wisudawan Polinema Tiap Tahun
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="bar-chart" style="height: 300px;"></div>
                            </div>
                            <!-- /.card-body-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-6">
                        <!-- BAR CHART -->
                        <div class="card card-success card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Grafik Pendaftaran Wisuda</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body card-pendaftaran-wisuda">
                                <canvas id="canvas"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
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
    <!-- FLOT CHARTS -->
    <script src="<?php echo base_url() ?>assets/js/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chart/script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js'></script>
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
    <script>
        /*
         * BAR CHART 
         * ---------
         */

        var bar_data = {
            data: [
                [1, 2800],
                [2, 3000],
                [3, 3400],
                [4, 3500],
                [5, 3700],
                [6, 4000]
            ],
            bars: {
                show: true
            }
        }
        $.plot('#bar-chart', [bar_data], {
            grid: {
                borderWidth: 1,
                borderColor: '#f3f3f3',
                tickColor: '#f3f3f3'
            },
            series: {
                bars: {
                    show: true,
                    barWidth: 0.5,
                    align: 'center',
                },
            },
            colors: ['#3c8dbc'],
            xaxis: {
                ticks: [
                    [1, '2015'],
                    [2, '2016'],
                    [3, '2017'],
                    [4, '2018'],
                    [5, '2019'],
                    [6, '2020']
                ]
            }
        })
        /* END BAR CHART */
    </script>

</body>

</html>