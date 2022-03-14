<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/UI.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <title>Scan Map view</title>
    </head>
    <body>
    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Dashboard</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tables</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>
                </div>
            </div>
            <form class="d-flex input-group w-auto">
                <input
                    type="search"
                    class="form-control rounded"
                    placeholder="Search"
                    aria-label="Search"
                    aria-describedby="search-addon"
                />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="bi bi-search"></i>           
                    </span>
            </form>
        <div class="d-flex align-items-center">
        
            <!-- Notification dropdown -->
                <div class="dropdown">
                <a
                    class="text-reset me-3 dropdown-toggle hidden-arrow"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                >
                <i class="bi bi-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink"
                >
                    <li>
                    <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
                </div>
                <!-- Avatar -->
                <div class="dropdown">
                <a
                    class="dropdown-toggle d-flex align-items-center hidden-arrow"
                    href="#"
                    id="navbarDropdownMenuAvatar"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                >
                <i class="bi bi-person-circle"></i>
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuAvatar"
                >
                    <li>
                    <a class="dropdown-item" href="#">My profile</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Logout</a>
                    </li>
                </ul>
                </div>
            </div>
            <!-- Right elements -->
                </div>
        </nav>

    <!-- Map -->
    <div class="row">
            <div class="col-lg-11 col-sm-12 ms-lg-5 mt-3" style="height: 500px; background-color: #f8f9fa;">
                <div style="width: 1225px; height: 500px;">
                    {!! Mapper::render() !!}
                </div>
            </div>
    </div>

    <!-- Table -->
    <table class="table align-center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Disease name</th>
                <th scope="col">Occurrences</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td><button type="button" class="btn btn-danger btn-sm px-3">
                    <i class="bi bi-card-image"></i></td>
                <td>Coconut scale damage</td>
                <td></td>
                <td>
                <button type="button" class="btn btn-primary">Details</button>
                </button>
                <button type="button" class="btn btn-primary">Solutions</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><button type="button" class="btn btn-danger btn-sm px-3">
                    <i class="bi bi-card-image"></i></td>
                <td>Coconut mealybug damage</td>
                <td></td>
                <td>
                <button type="button" class="btn btn-primary">Details</button>
                </button>
                <button type="button" class="btn btn-primary">Solutions</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><button type="button" class="btn btn-danger btn-sm px-3">
                    <i class="bi bi-card-image"></i></td>
                <td>Damage due to coconut leafrollers</td>
                <td></td>
                <td>
                <button type="button" class="btn btn-primary">Details</button>
                </button>
                <button type="button" class="btn btn-primary">Solutions</button>
                </td>
                </button>
                </td>
            </tr>
            </tbody>
        </table>
    <!-- footer -->
    <footer class="text-center text-white" style="background-color: #f1f1f1;" >
    <!-- Grid container -->
    <div class="container pt-4" style="margin-top:350px;">
        <!-- Section: Social media -->
        <section class="mb-4">
        <!-- Facebook -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-facebook"></i></a>

        <!-- Twitter -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-twitter"></i></a>

        <!-- Google -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-google"></i></a>

        <!-- Instagram -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-instagram"></i></a>

        <!-- Linkedin -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-linkedin"></i></a>
        <!-- Github -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="bi bi-github"></i></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);"  >
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
    </footer>
    </body>
</html>