<?php

require_once("../../classes.php");
if (empty($user = unserialize($_SESSION["user"]))) {
    header("location:../../index.php?msg=filed_authentcation");
}
$assets = "../../assets";

?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="<?= $assets ?>/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Album example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="<?= $assets ?>/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>


</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <div class="pull-left image ">
                                    <img style="border-radius: 60%;" src="<?= empty($posts['user_image']) ? 'https://t4.ftcdn.net/jpg/02/34/57/59/240_F_234575931_hDnNJiXNgTzJO4iDDZjhneWKF25o7O2f.jpg' : $posts['user_image']; ?>" alt="avatar" width="50" height="50" />
                                </div>
            <li class="nav-item">
                <a class="nav-link text-lg" href="home.php">
                    <h4>Home</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <h4>Profile</h4>
                </a>
            </li>
        </ul>
        <!-- Left links -->


        <!-- Right-aligned Logout button -->
        <div class="d-flex align-items-center">
            <a type="button" href="../../handel_logout.php?msg=logout" data-mdb-ripple-init type="button" class="btn btn-danger me-3">
                Logout
            </a>
        </div>
    </div>
    <!-- Collapsible wrapper -->
    </div>

</nav>



<script src="<?= $assets ?>/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>