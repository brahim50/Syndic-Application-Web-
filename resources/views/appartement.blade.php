<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo1.png')}}">
    <title>Syndic</title>
    <!-- Custom CSS -->
    <link href="{{ asset('css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet">

    <link href="{{ asset('css/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{ asset('css/steps.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
    
    






    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar fixed-top top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('images/logo-icon.png')}}" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="{{ asset('images/logo1.png')}}" alt="homepage" class="light-logo" style="position: relative;width: 120px;height:30px;" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="dashboard/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5> 
                                                        <span class="mail-desc">Just a reminder that event</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Settings</h5> 
                                                        <span class="mail-desc">You can customize this template</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Pavan kumar</h5> 
                                                        <span class="mail-desc">Just see the my admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Luanch Admin</h5> 
                                                        <span class="mail-desc">Just see the my new admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
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
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route ('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route ('lmmeuble')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Gestion Des Immeubles</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Gestion Des Appartement</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('revenu')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Gestion Des Revenus</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Gestion Des Dépenses </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('categorie')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Catégorie </span></a></li>
                                <li class="sidebar-item"><a href="{{route('depense')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Détails </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-buttons.html" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Gestion Des Relevés</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('resident')}}" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Gestion Des Résidents</span></a></li>
                        
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Gestion Des Appartement</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
             {{-- edit employee modal start --}}
             <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             data-bs-backdrop="static" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Edit Appartement</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
                    @csrf 
                    <div>
                        <section>
                            <input type="hidden" name="id" id="idEdit">
                            <label for="lmmeuble">Lmmeuble</label>
                                    <select class="required form-control" name="lmmeuble" placeholder="Select Category" id="lmmeuble" >
                                        @foreach($data as $lmmeuble)
                            <option  value="{{ $lmmeuble->nom }}">
                                {{ ucfirst($lmmeuble->nom) }}</option>
                            @endforeach
                                    </select>
                                    <label for="numero">Numero</label>
                                    <input id="numeroEdit" name="numero"  type="number" class="required form-control" >
                                    <label for="etage">Etage</label>
                                    <input id="etageEdit" name="etage" type="number"  class="required form-control" >
                                    <label for="surface">Surface</label>
                                    <input id="surfaceEdit" name="surface" type="number"  class="required form-control">
                        </section>
                    </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" id="edit_employee_btn" class="btn btn-success">Update Appartement</button>
                   </div>
                 </form>
               </div>
             </div>
           </div>
{{-- edit employee modal end --}}
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card" style="position: relative;height: 380px;">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Ajouter un Appartement</h4>
                        <h6 class="card-subtitle"></h6>
                        <form id="add_appartement_form"  action="#" method="POST" class="m-t-40" enctype="multipart/form-data">
                            @csrf 
                            <div>
                                <section>
                                    <label for="lmmeuble">Lmmeuble</label>
                                    <select class="required form-control" name="lmmeuble" placeholder="Select Category" id="lmmeuble" style="position: relative;width: 50%" >
                                        @foreach($data as $lmmeuble)
                            <option  value="{{ $lmmeuble->nom }}">
                                {{ ucfirst($lmmeuble->nom) }}</option>
                            @endforeach
                                    </select>
                                    <label for="numero">Numero</label>
                                    <input id="numero" name="numero" placeholder="Numero d'appartement" type="number" class="required form-control" style="position: relative;width: 50%">
                                    <label for="etage">Etage</label>
                                    <input id="etage" name="etage" type="number" placeholder="Etage" class="required form-control" style="position: relative;width: 50%">
                                    <label for="addresse" style="position: relative;left:480px;bottom: 185px;">Surface</label>
                                    <input id="addresse" name="surface" type="number" placeholder="Surface d'appartement" class="required form-control" style="position: relative;width: 50%;left:480px;bottom: 192px;">
                                    
                                    </div>
                                    <button type="submit" id="add_lmmeuble_btn" class="btn btn-outline-success" style="position: relative;width: 60%;bottom:50px;left:150px;">Ajouter</button>
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
               
                <div class="card">
                    <div class="card-body" >
                        <h5 class="card-title"></h5>
                        <div class="table-responsive" id="show_all_lmmeuble">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Lmmeuble</th>
                                        <th>Numero</th>
                                        <th>Surface</th>
                                        <th>Etage</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                </tbody>
                                
                            </table>
                        </div>

                    </div>
                </div>



                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
       
        $(function() {
            fetchAllAppartement();
            function fetchAllAppartement(){
                    $.ajax({
                        url: '{{route('fetchAllappartement') }}',
                        method: 'GET',
                        success: function(res){
                            $("#show_all_lmmeuble").html(res);
                            $("table").DataTable({
                  order: [0, 'desc']
                });
                        }
    
                    });
                }
                 // edit appartement ajax request
                 $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '{{ route('editAppartement') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(res) {
            $("#lmmeuble").val(res.lmmeuble);
            $("#numeroEdit").val(res.numero);
            $("#etageEdit").val(res.etage);
            $("#surfaceEdit").val(res.surface);
            $("#idEdit").val(res.id);
          }
        });
      });
      // update

        $("#edit_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_employee_btn").text('Updating...');
        $.ajax({
          url: '{{ route('updateappartement') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(res) {
            if (res.status == 200) {
              Swal.fire(
                'Updated!',
                'Appartement Updated Successfully!',
                'success'
              )
              fetchAllAppartement();
            }
            $("#edit_employee_btn").text('Update Appartement');
            $("#edit_employee_form")[0].reset();
            $("#editEmployeeModal").modal('hide');
          }
        });
      });

          
                // delete employee ajax request
                $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('deleteAppatement') }}',
              method: 'post',
              data: {
                id: id,
                _token: '{{ csrf_token() }}'
              },
              success: function(res) {
                console.log(res);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                fetchAllAppartement();
              }
            });
          }
        })
      });
          
        $("#add_appartement_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_lmmeuble_btn").text('Adding...');
        $.ajax({
            url: '{{ route('createAppartement') }}',
            method: 'POST',
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            success: function(res){
                if (res.status == 200) {
                  Swal.fire(
                    'Added!',
                    'Appartement Added Successfully!',
                    'success'
                  )
                  fetchAllAppartement();
                  
                }
                $("#add_lmmeuble_btn").text('Ajouter');
                $("#add_appartement_form")[0].reset();
                $("#add_appartement_form").modal('hide');
            }
            
        });
    });
    });
            
        
        
        </script>

    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('js/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('js/excanvas.js')}}"></script>
    <script src="{{ asset('js/jquery.flot.js')}}"></script>
    <script src="{{ asset('js/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('js/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('js/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('js/jquery.flot.crosshair.js')}}"></script>
    <script src="{{ asset('js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('js/chart-page-init.js')}}"></script>

</body>

</html>