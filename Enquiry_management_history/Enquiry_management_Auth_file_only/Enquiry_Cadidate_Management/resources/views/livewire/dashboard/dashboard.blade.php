<!doctype html>
<html lang="en"><!-- [Head] start -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title><!-- [Meta] -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dashboardkit is trending dashboard template made using Bootstrap 5 design framework. Dashboardkit is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Codedthemes"><!-- [Favicon] icon -->

    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon"><!-- [Google Font : Public Sans] icon -->

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700..700&amp;display=swap" rel="stylesheet">

    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css">

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css"><!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../assets/fonts/feather.css">

    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">

    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/material.css"><!-- [Template CSS Files] -->

    <link rel="stylesheet" href="{{url('assets/css/style.css')}}" id="main-style-link">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
</head><!-- [Head] end -->


<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="dark" data-pc-header-theme="light" data-pc-sidebar-caption="true"
    data-pc-direction="ltr" data-pc-theme="light"><!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="pc-loader">
            <div class="loader-fill"></div>
        </div>
    </div><!-- [ Pre-loader ] End -->
    
    
    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header"><a href="../dashboard/index.html"
                    class="b-brand text-primary"><!-- ========   Change your logo from here   ============ --> 
                    <img src="../assets/images/logo-white.svg" alt="logo image" class="logo-lg"></a></div>

            <div class="navbar-content">
                <ul class="pc-navbar">
                    <!-- Navigation -->
                    <li class="pc-item pc-caption"><label>Navigation</label></li>

                    <li class="pc-item">
                        <a href="{{ route('home')}}" class="pc-link">
                        <span class="pc-micon"><i class="material-icons-two-tone">home</i> </span>
                        <span class="pc-mtext">Dashboard</span></a>
                    </li>

                    <!-- Enquiry   -->
                    <li class="pc-item">
                        <a href="{{ route('enquiry')}}" class="pc-link d-flex align-items-center">
                            <span class="pc-micon d-flex align-items-center justify-content-center">
                                <i class="bi bi-card-checklist"></i>
                            </span>
                            <span class="pc-mtext ms-2">Enquiry</span>
                        </a>
                    </li>
    

                    <!-- Project   -->
                    <li class="pc-item">
                <a href="#" class="pc-link d-flex align-items-center">
                    <span class="pc-micon d-flex align-items-center justify-content-center">
                    <i class="bi bi-globe"></i>
                    </span>
                    <span class="pc-mtext ms-2">Project </span>
                </a>
              </li>

          
            <!-- Logout   -->
                 <li class="pc-item " style="margin-top: 355px;">
                <a href="logout" class="pc-link d-flex align-items-center">
                    <span class="pc-micon d-flex align-items-center justify-content-center">
                      <i class="bi bi-box-arrow-left"></i>
                    </span>
                    <span class="pc-mtext ms-2">Logout</span>
                </a>
              </li>
             
                </ul>

             
            </div>

        </div>
    </nav><!-- [ Sidebar Menu ] end -->
    
    
    <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="header-wrapper">
            
            <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled"><!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse"><a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="material-icons-two-tone">menu</i></a></li>
                    <li class="pc-h-item pc-sidebar-popup"><a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="material-icons-two-tone">menu</i></a></li>
                    <li class="dropdown pc-h-item d-none d-md-flex"><a class="pc-head-link active pc-head-link-text dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">Level</a>
                        <div class="dropdown-menu pc-h-dropdown"><a href="#!" class="dropdown-item">
                            <i class="material-icons-two-tone">account_circle</i> <span>My Account</span> </a><a
                                href="#!" class="dropdown-item"><i class="material-icons-two-tone">settings</i>
                                <span>Settings</span> </a><a href="#!" class="dropdown-item"><i
                                    class="material-icons-two-tone">support</i> <span>Support</span> </a><a href="#!"
                                class="dropdown-item"><i class="material-icons-two-tone">https</i> <span>Lock
                                    Screen</span> </a><a href="#!" class="dropdown-item"><i
                                    class="material-icons-two-tone">chrome_reader_mode</i> <span>Logout</span></a></div>
                    </li>
                </ul>
            </div><!-- [Mobile Media Block end] -->

            <!-- Check this Section  -->
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false"><i class="material-icons-two-tone">notifications_active</i> <span
                                class="badge bg-danger pc-h-badge">3</span></a>
                        <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">

                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h4 class="m-0">Notifications</h4>
                                <ul class="list-inline ms-auto mb-0">
                                    <li class="list-inline-item"><a href="#"
                                            class="avtar avtar-s btn-link-hover-primary"><i
                                                class="ti ti-arrows-diagonal f-18"></i></a></li>
                                    <li class="list-inline-item"><a href="#"
                                            class="avtar avtar-s btn-link-hover-danger"><i class="ti ti-x f-18"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown-body text-wrap header-notification-scroll position-relative"
                                style="max-height: calc(100vh - 235px)">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <p class="text-span">Today</p>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avtar avtar-s bg-light-danger"><i
                                                        class="ph-duotone ph-user f-18"></i></div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 me-3 position-relative">
                                                        <h5 class="mb-0 text-truncate">Challenge invitation</h5>
                                                    </div>
                                                    <div class="flex-shrink-0"><span class="text-sm text-muted">12 hour
                                                            ago</span></div>
                                                </div>
                                                <p class="position-relative text-muted mt-1 mb-2"><br><span
                                                        class="text-truncate"><strong>Jonny aber</strong> invites to
                                                        join the challenge</span></p><button
                                                    class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline</button>
                                                <button class="btn btn-sm rounded-pill btn-primary">Accept</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avtar avtar-s bg-light-info"><i
                                                        class="ph-duotone ph-notebook f-18"></i></div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 me-3 position-relative">
                                                        <h5 class="mb-0 text-truncate">Forms</h5>
                                                    </div>
                                                    <div class="flex-shrink-0"><span class="text-sm text-muted">2 hour
                                                            ago</span></div>
                                                </div>
                                                <p class="position-relative text-muted mt-1 mb-2">Lorem Ipsum is simply
                                                    dummy text of the printing and typesetting industry. Lorem Ipsum has
                                                    been the industry's standard dummy text ever since the 1500s.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-footer">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="d-grid"><button class="btn btn-primary">Archive all</button></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-grid"><button class="btn btn-outline-secondary">Mark all as
                                                read</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item header-user-profile"><a
                            class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false"><img
                                src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar"> 
                                <span class="ms-2"><span class="user-name">{{auth()->user()->name}}</span> 
                                <span class="user-desc">Administrator</span></span></a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h4 class="m-0">Profile</h4>
                            </div>
                            <div class="dropdown-body">
                                <div class="profile-notification-scroll position-relative"
                                    style="max-height: calc(100vh - 225px)">
                                    <ul class="list-group list-group-flush w-100">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img src="../assets/images/user/avatar-2.jpg"
                                                        alt="user-image" class="wid-50 rounded-circle"></div>
                                                <div class="flex-grow-1 mx-3">
                                                    <h5 class="mb-0">Carson Darrin</h5><a class="text-sm link-secondary"
                                                        href="mailto:carson.darrin@company.io">carson.darrin@company.io</a>
                                                </div><a
                                                    href="https://codedthemes.com/item/dashboardkit-bootstrap-5-admin-template/"
                                                    target="_blank" class="badge bg-primary rounded">PRO</a>
                                            </div>
                                        </li>
                                        <li class="list-group-item"><a href="#" class="dropdown-item"><span
                                                    class="d-flex align-items-center"><i class="ph-duotone ph-key"></i>
                                                    <span>Change password</span> </span></a><a href="#"
                                                class="dropdown-item"><span class="d-flex align-items-center"><i
                                                        class="ph-duotone ph-envelope-simple"></i> <span>Recently
                                                        mail</span></span>
                                                <div class="user-group"><img src="../assets/images/user/avatar-1.jpg"
                                                        alt="user-image" class="avtar"> <img
                                                        src="../assets/images/user/avatar-2.jpg" alt="user-image"
                                                        class="avtar"> <img src="../assets/images/user/avatar-3.jpg"
                                                        alt="user-image" class="avtar"></div>
                                            </a><a href="#" class="dropdown-item"><span
                                                    class="d-flex align-items-center"><i
                                                        class="ph-duotone ph-calendar-blank"></i> <span>Schedule
                                                        meetings</span></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header><!-- [ Header ] end -->
    
    
    <!-- [ Main Content ] start -->
    <div class="pc-container">

        <div class="pc-content">

            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center g-0">
                        <div class="col-sm-auto">
                            <div class="page-header-title">
                                <h5 class="mb-0">Home</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Home</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end -->

                
            <!-- [ Main Content ] start -->
            <div class="row">
            
                <!-- customer-section start -->
                <div >

                    <!-- Show Total Enquiry -->
                    <div class="row ">

                        <!-- Total Enquiry -->
                        <div class="col-sm-6 col-lg-12  ">
                            <div class="card prod-p-card background-pattern">

                                <div class="card-body">

                                    <div class="row align-items-center m-b-0">

                                        <div class="col">
                                            <h6 class="m-b-5">Total Enquiry</h6>
                                            <h3 class="m-b-0">1,783</h3> 
                                        </div>
                                            <!-- Icon -->
                                        <div class="col-auto">
                                                 <i class="bi f-22 bi-people-fill"></i>
                                            </div>
                                           
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Converted -->
                        <div class="col-sm-6 col-lg-12">
                            <div class="card prod-p-card bg-primary background-pattern-white">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-0">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Total Converted</h6>
                                            <h3 class="m-b-0 text-white">15,830</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi f-22 bi-check-circle-fill text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Follow Up -->
                        <div class="col-sm-6 col-lg-12">
                            <div class="card prod-p-card bg-primary background-pattern-white">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-0">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Follow Up</h6>
                                            <h3 class="m-b-0 text-white">6,780</h3>
                                        </div>
                                        <div class="col-auto">
                                        
                                            <i class="bi f-22 bi-telephone-outbound-fill text-white"></i>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product sold -->
                        <div class="col-sm-6 col-lg-12">
                            <div class="card prod-p-card background-pattern">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-0">
                                        <div class="col">
                                            <h6 class="m-b-5">Interested </h6>
                                            <h3 class="m-b-0">6,784</h3>
                                        </div>
                                        <div class="col-auto"><i
                                                class="material-icons-two-tone text-primary">local_offer</i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--Enquiry Details start -->
                    <div class="card feed-card ">
                        <!-- Enquiry Header  -->
                        <div class="card-header py-3 d-flex justify-content-between align-items-center  ">

                            <p class="fw-bold m-0  ">Enquiry Details</p>

                        <a href="{{ route('enquiry')}}"><button type="button" class="btn btn-primary py-1">View All</button></a>

                        </div>
               <!-- Enquiry Data start -->
                <div class="table-responsive feed-scroll" style="max-height: 600px; overflow-y: auto; position: relative;">
                    <table class="table table-bordered table-hover mb-0 fixed-header">
                    <thead class="table-light">
                        <tr>
                        <th style="width: 60px;">No</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Arun Kumar</td><td>9876543210</td><td>Enquiry</td></tr>
                        <tr><td>2</td><td>Meena R</td><td>9123456789</td><td>New</td></tr>
                        <tr><td>3</td><td>Prakash S</td><td>9001122334</td><td>Contacted</td></tr>
                        <tr><td>4</td><td>Suresh K</td><td>9876543211</td><td>Interested</td></tr>
                        <tr><td>5</td><td>Anitha V</td><td>9123456780</td><td>New</td></tr>
                        <tr><td>6</td><td>Rajesh M</td><td>9988776655</td><td>Contacted</td></tr>
                        <tr><td>7</td><td>Deepa L</td><td>9765432109</td><td>Enquiry</td></tr>
                        <tr><td>8</td><td>Karthik R</td><td>9654321098</td><td>Interested</td></tr>
                        <tr><td>9</td><td>Priya S</td><td>9543210987</td><td>New</td></tr>
                        <tr><td>10</td><td>Vijay B</td><td>9432109876</td><td>Contacted</td></tr>
                    </tbody>
                    </table>
                </div>
                <!-- Enquiry Data end -->
                    </div>
                        <!--Enquiry Details end -->

                    </div>


                </div>
                <!-- customer-section end -->

            </div>
            <!-- [ Main Content ] end -->
        </div>

    </div><!-- [ Main Content ] end -->

    <!-- [Page Specific JS] start -->
    <script src="../assets/js/plugins/apexcharts.min.js"></script>
    <script src="../assets/js/pages/dashboard-default.js"></script><!-- [Page Specific JS] end --><!-- Required Js -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/fonts/custom-font.js"></script>
    <script src="../assets/js/pcoded.js"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>
</body><!-- [Body] end -->

</html>