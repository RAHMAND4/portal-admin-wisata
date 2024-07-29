<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets_dashboard/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets_dashboard/img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>
    Tour Tables
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets_dashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets_dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets_dashboard/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" target="_blank">
        <img src="../assets_dashboard/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Tour Tables</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white "  href="<?= base_url('/dashboard') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary"  href="<?= base_url('/tour_tables') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tour Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="../pages/billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Billing</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="../pages/virtual-reality.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="../pages/rtl.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="../pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="../pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="<?= base_url('/log_admin') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="<?= base_url('/regist_admin') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
            </a>
        </li>
        </ul>
    </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control">
            </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
            <li class="mt-2">
                <a class="github-button" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
                </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                        <div class="my-auto">
                        <img src="../assets_dashboard/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                        13 minutes ago
                        </p>
                        </div>
                    </div>
                    </a>
                </li>
                <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                        <div class="my-auto">
                        <img src="../assets_dashboard/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            1 day
                        </p>
                        </div>
                    </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                            Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            2 days
                        </p>
                        </div>
                    </div>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item d-flex align-items-center">
                <a href="<?= base_url('/log_admin') ?>" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
                </a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-4">
                
            </div>
        <div class="col-12">
            <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="d-flex justify-content-between align-items-center shadow-primary border-radius-lg pt-4 pb-3" style="background-color: #F3D200;">
                <h6 class="text-white text-capitalize ps-3">Tour table</h6>
                <button type="button" class="btn btn-success add-new m-2" data-bs-toggle="modal" data-bs-target="#addTourModal">
                    <i class="fa fa-plus"></i> Tambah Wisata
                </button>
                </div>
            </div>
            <div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">image</th>
                        <th scope="col">Nama Wisata</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">kapasitas jumlah pengunjung</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tours as $index => $tour): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td>
                            <?php
    $imagePath = ROOTPATH . 'public/uploads/' . basename($tour['image_url']);
    if (file_exists($imagePath)): ?>
        <img src="<?= base_url('uploads/' . basename($tour['image_url'])) ?>" alt="Image" width="100">
    <?php else: ?>
        Image not found: <?= esc(basename($tour['image_url'])) ?>
    <?php endif; ?>
</td>

                            <td><?= esc($tour['nama_wisata']) ?></td>
                            <td><?= esc(substr($tour['description'], 0, 20)) ?>...</td>
                            <td><?= esc(substr($tour['location'], 0, 10)) ?></td>
                            <td><?= esc($tour['price']) ?></td>
                            <td><?= esc($tour['available_seats']) ?></td>
                            <td><?= esc($tour['rating']) ?></td>
                            <td>
                                <button class="btn btn-warning edit-btn" 
                                        data-id="<?= esc($tour['id']) ?>" 
                                        data-nama="<?= esc($tour['nama_wisata']) ?>" 
                                        data-description="<?= esc($tour['description']) ?>" 
                                        data-location="<?= esc($tour['location']) ?>" 
                                        data-price="<?= esc($tour['price']) ?>" 
                                        data-available-seats="<?= esc($tour['available_seats']) ?>" 
                                        data-rating="<?= esc($tour['rating']) ?>" 
                                        data-image-url="<?= esc($tour['image_url']) ?>" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editTourModal">Edit</button>
                                <button class="btn btn-danger delete-btn" 
                                        data-id="<?= esc($tour['id']) ?>" 
                                        data-nama="<?= esc($tour['nama_wisata']) ?>">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
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
    </main>
    <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
        <div class="float-start">
            <h5 class="mt-3 mb-0">Material UI Configurator</h5>
            <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
            </button>
        </div>
        <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
            <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
            </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
            <h6 class="mb-0">Sidenav Type</h6>
            <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
            <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
            <h6 class="mb-0">Navbar Fixed</h6>
            <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
            </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
            <h6 class="mb-0">Light / Dark</h6>
            <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
            </div>
        </div>
        </div>
    </div>
</div>
    <!--   Core JS Files   -->
    <script src="../assets_dashboard/js/core/popper.min.js"></script>
    <script src="../assets_dashboard/js/core/bootstrap.min.js"></script>
    <script src="../assets_dashboard/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets_dashboard/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
        damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets_dashboard/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>

<div class="modal fade" id="addTourModal" tabindex="-1" aria-labelledby="addTourModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: white;">
            <div class="modal-header">
                <h5 class="modal-title" id="addTourModalLabel">Tambah Wisata</h5>
                <button type="button" class="btn-close" style="background-color: black;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addTourForm" method="post" action="<?= base_url('tour/add') ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_wisata" class="form-label">Nama Wisata</label>
                        <input type="text" class="form-control border" id="nama_wisata" name="nama_wisata" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control border" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Lokasi</label>
                        <input type="text" class="form-control border" id="location" name="location" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" class="form-control border" id="price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="available_seats" class="form-label">jumlah kapasitas pengunjung </label>
                        <input type="number" class="form-control border" id="available_seats" name="available_seats" required>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" class="form-control border" id="rating" name="rating" step="0.1" min="0" max="5" required>
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">URL Gambar</label>
                        <input type="file" class="form-control border" id="image_url" name="image_url" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editTourModal" tabindex="-1" aria-labelledby="editTourModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: white;">
            <div class="modal-header">
                <h5 class="modal-title" id="editTourModalLabel">Edit Wisata</h5>
                <button type="button" class="btn-close" style="background-color: black;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editTourForm" method="post" action="<?= base_url('tour/update') ?>" enctype="multipart/form-data">
                    <input type="hidden" id="tour_id" name="tour_id">
                    <div class="mb-3">
                        <label for="edit_nama_wisata" class="form-label">Nama Wisata</label>
                        <input type="text" class="form-control border" id="edit_nama_wisata" name="nama_wisata" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_description" class="form-label">Deskripsi</label>
                        <textarea class="form-control border" id="edit_description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="edit_location" class="form-label">Lokasi</label>
                        <input type="text" class="form-control border" id="edit_location" name="location" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_price" class="form-label">Harga</label>
                        <input type="number" class="form-control border" id="edit_price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_available_seats" class="form-label">Jumlah Kapasitas Pengunjung</label>
                        <input type="number" class="form-control border" id="edit_available_seats" name="available_seats" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_rating" class="form-label">Rating</label>
                        <input type="number" class="form-control border" id="edit_rating" name="rating" step="0.1" min="0" max="5" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_image_url" class="form-label">Gambar Saat Ini</label>
                        <div id="current_image_container">
                            <img id="current_image" src="" alt="Current Image" width="100" style="display: none;">
                            <p id="current_image_name"></p>
                        </div>
                        <label for="edit_image_url" class="form-label">Upload Gambar Baru</label>
                        <input type="file" class="form-control border" id="edit_image_url" name="image_url" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Delete -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus <span id="tour_name"></span>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Hapus</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit-btn');
        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('tour_id').value = this.getAttribute('data-id');
                document.getElementById('edit_nama_wisata').value = this.getAttribute('data-nama');
                document.getElementById('edit_description').value = this.getAttribute('data-description');
                document.getElementById('edit_location').value = this.getAttribute('data-location');
                document.getElementById('edit_price').value = this.getAttribute('data-price');
                document.getElementById('edit_available_seats').value = this.getAttribute('data-available-seats');
                document.getElementById('edit_rating').value = this.getAttribute('data-rating');
                
                // Menampilkan gambar saat ini
                const imageUrl = this.getAttribute('data-image-url');
                const currentImage = document.getElementById('current_image');
                const currentImageName = document.getElementById('current_image_name');

                if (imageUrl) {
                    currentImage.src = `<?= base_url('uploads/') ?>${imageUrl}`;
                    currentImage.style.display = 'block';
                    currentImageName.textContent = imageUrl;
                } else {
                    currentImage.style.display = 'none';
                    currentImageName.textContent = '';
                }
            });
        });
    });
</script>

<script>
    document.getElementById('addTourForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        
        // Log data yang akan dikirim
        for (const [key, value] of formData.entries()) {
            console.log(`${key}: ${value}`);
        }

        fetch('<?= base_url('tour/add') ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data.success) {
                $('#addTourModal').modal('hide'); 
                location.reload(); 
            } else {
                console.error(data.errors);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit-btn');
        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('tour_id').value = this.getAttribute('data-id');
                document.getElementById('edit_nama_wisata').value = this.getAttribute('data-nama');
                document.getElementById('edit_description').value = this.getAttribute('data-description');
                document.getElementById('edit_location').value = this.getAttribute('data-location');
                document.getElementById('edit_price').value = this.getAttribute('data-price');
                document.getElementById('edit_available_seats').value = this.getAttribute('data-available-seats');
                document.getElementById('edit_rating').value = this.getAttribute('data-rating');
                
                // Menampilkan gambar saat ini
                const imageUrl = this.getAttribute('data-image-url');
                const currentImage = document.getElementById('current_image');
                const currentImageName = document.getElementById('current_image_name');

                if (imageUrl) {
                    currentImage.src = `<?= base_url('uploads/') ?>${imageUrl}`;
                    currentImage.style.display = 'block';
                    currentImageName.textContent = imageUrl;
                } else {
                    currentImage.style.display = 'none';
                    currentImageName.textContent = '';
                }
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');
        let tourIdToDelete;

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                tourIdToDelete = this.getAttribute('data-id');
                const tourName = this.getAttribute('data-nama');
                document.getElementById('tour_name').textContent = tourName;
                const deleteConfirmModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));
                deleteConfirmModal.show();
            });
        });

        document.getElementById('confirmDelete').addEventListener('click', function () {
            fetch(`<?= base_url('tour/delete') ?>/${tourIdToDelete}`, {
                method: 'DELETE'
            })
            .then(response => {
                if (response.ok) {
                    location.reload(); // Reload halaman setelah berhasil menghapus
                } else {
                    alert('Gagal menghapus data.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
</script>