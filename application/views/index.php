<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Lihat Rapot SMK 1 Situbondo</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jvectormap -->
        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo"><i class="mdi mdi-assistant"></i> Rapot</a>
                        <!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>

                            <li>
                                <a href="<?= base_url(); ?>" class="waves-effect"><i class="mdi mdi-airplay"></i><span> Lihat Rapot</span></a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">


          

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                         
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="float-left">
                                    <button class="button-menu-mobile open-left waves-light waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
          
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                      
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->


                            <!-- end row -->
                            <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="card">

                            <div class="card-body">
                            <h4 class="mt-0 header-title">Masukan NIS</h4>                                            


                            <div class="notif">
                            </div>

                            <form class="form-horizontal" role="form">
                                <div class="form-group mb-0 row">
                                    <div class="col-md-12">
                                        <div class="input-group mt-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-light" id="basic-addon5">NIS</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Masukkan NIS" name="nis">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-light" id="basic-addon6"></span>
                                            </div>
                                        </div>                                                        
                                    </div>
                                    <div class="col-md-3 mt-3 ml-auto">
                                        <a href="#" class="btn btn-lihat btn-success btn-block">Lihat Rapot</a>
                                    </div>
                                </div> <!--end row-->           
                            </form>     
                            </div>
                            </div> 
                                                        
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                        <h4 class="mt-0 header-title">Data Siswa</h4>
                                        <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="border-top-0"><b>NIS</b></th>
                                                            <th scope="col" class="border-top-0"><b>NAMA</b></th>
                                                            <th scope="col" class="border-top-0"><b>KELAS</b></th>
                                                            <th scope="col" class="border-top-0"><b>LINK</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="isinya">
                                                        <tr>
                                                            <td colspan="4" class="text-center">Masukkan NIS Dulu</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                                                        
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                   
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
             
            $(document).ready(function() {        
            $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
            $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
                
                $('.btn-lihat').on('click',function(e){
                    e.preventDefault();
                    if($('input[name="nis"]').val() === ''){
                        $('.notif').html(`<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Gagal!</strong> NIS Tidak Ditemukan.</div>                            
`);
                    } else{ 
                    $.ajax({
                        url: `<?= base_url('welcome/get_value')?>`,
                        type: 'post',
                        data: {nis: $('input[name="nis"]').val()},
                        dataType: 'json',
                        success: function(res){
                            if(res.code === 0){
                                $('.notif').html(`<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Gagal!</strong> NIS Tidak Ditemukan.</div>                            
`);
$('.isinya').html(`<td colspan="4" class="text-center">Masukkan NIS Dengan Benar</td>`);
                            } else{
                                $('.isinya').html(`<tr><td>${res.datanya.nis}</td><td>${res.datanya.nama}</td><td>${res.datanya.kelas}</td><td><a href="${res.datanya.link_drive}" target="_blank" class="btn btn-success">Klik Disini</a></td></tr>`)
                            }
                        }
                    });
                    }

                });
            
            });

        </script>


    </body>
</html>