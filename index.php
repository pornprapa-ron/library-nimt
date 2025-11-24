<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIMT Library</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="asset/css/color.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-indigo bg-indigo-gradient navbar-dark">
        <div class="container">
            <div class="text-light d-flex align-items-center text-center">
                <img src="asset/images/Banner.png" class="rounded" alt="nimt" width="60" height="70">
                <div class="ms-2 text-start">
                    <div>สถาบันมาตรวิทยาแห่งชาติ</div>
                    <div>National Institute of Metrology (Thailand)</div>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto gap-3 gap-lg-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Standards & Regulatory Documents</a></li>
                            <li><a class="dropdown-item" href="#">Research & Publications</a></li>
                            <li><a class="dropdown-item" href="#">Laws, Policy & International Cooperation</a></li>
                            <li><a class="dropdown-item" href="#">Science & Technology</a></li>
                            <li><a class="dropdown-item" href="#">Business & Management</a></li>
                            <li><a class="dropdown-item" href="#">Periodicals / Journals</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="contactBtn" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-indigo bg-indigo-gradient text-light py-5">
        <div class="container text-center">
            <h1>Welcome to NIMT Library</h1>
            <p>Discover thousands of books from various genres and authors</p>

            <form class="row g-2 justify-content-center mt-4">
                <div class="col-md-6">
                    <input type="search" class="form-control" id="inputsearch" placeholder="Search for books or Documents">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-warning mb-3"><i class="fa-solid fa-magnifying-glass"></i>Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container my-5 text-center">
        <h1>Categories</h1>
        <p>Find books in your favorite genres</p>
        <div class="row row-cols-1 row-cols-md-6 g-4 mt-3 ">
            <div class="col">
                <div class="card card-hover bg-indigo bg-indigo-gradient text-light mb-3 " style="height: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-clipboard-check"></i></h5>
                        <p class="card-text">Standards & Regulatory Documents</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-hover bg-indigo bg-indigo-gradient text-light mb-3" style="height: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-book-open"></i></h5>
                        <p class="card-text">Research & Publications</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-hover bg-indigo bg-indigo-gradient text-light mb-3" style="height: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-scale-balanced"></i></h5>
                        <p class="card-text">Laws, Policy & International Cooperation</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-hover bg-indigo bg-indigo-gradient text-light mb-3" style="height: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-microscope"></i></h5>
                        <p class="card-text">Science & Technology</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-hover bg-indigo bg-indigo-gradient text-light mb-3" style="height: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-chart-line"></i></h5>
                        <p class="card-text">Business & Management</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-hover bg-indigo bg-indigo-gradient text-light mb-3" style="height: 9rem;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-book-open"></i></h5>
                        <p class="card-text">Periodicals / Journals</p>
                    </div>
                </div>
            </div>
        </div>



        <script>
            document.getElementById("contactBtn").addEventListener("click", function(e) {
                e.preventDefault(); // กันการกระโดดไปหน้าอื่น
                Swal.fire({
                    html: `
                        <div class="text-center">
                            <h1 style="margin:0; font-size:22px; font-weight:bold;">Opening Hours</h1>
                            <br>
                            <p>Monday - Friday: 8:00 AM - 16:00 PM</p>
                        </div>
                        <div class="text-start">
                            <h1 style="margin-top:15px; font-size:20px; font-weight:bold;">Contact</h1>
                            <p>📧 Email: info@digitallibrary.com</p>
                            <p>📞 Phone: 02 526 5400 ต่อ 5226</p>
                            <p>📍 Address: สำนักงานกลาง ชั้น 3</p>
                        </div>
                    `,
                    draggable: true
                });
            });
        </script>




        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/sweetalert/sweetalert2.all.min.js"></script>
        <script src="vendor/fontawesome/js/fontawesome.min.js"></script>



</body>

</html>