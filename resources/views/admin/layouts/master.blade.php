<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="نمایشport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap 4</title>
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="/admin/css/vazir.css">
    <link rel="stylesheet" href="/admin/css/style.css">
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">مجله آموزشی راکت</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="جستجو" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">خروج</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">

        <main role="main" class="col-md-9 mr-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">داشبورد</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group ml-2">
                        <button class="btn btn-sm btn-outline-secondary">اشتراک گذاری</button>
                        <button class="btn btn-sm btn-outline-secondary">خروجی گرفتن</button>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        این هفته
                    </button>
                </div>
            </div>

            <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

            <h2 class="mb-4">بخش محصولات</h2>
            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان</th>
                        <th>عنوان</th>
                        <th>عنوان</th>
                        <th>عنوان</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,002</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,004</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,005</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,006</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,007</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,008</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,009</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,010</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,011</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,012</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,013</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,014</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    <tr>
                        <td>1,015</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                        <td>محصول</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            داشبورد
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            سفارشات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            محصولات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            مشتریان
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            گزارشات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            نظرات
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>گزارشات ذخیره شده</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            این ماه
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            ماه گذشته
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            شبکه های اجتماعی
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            فروش سالانه
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="js/holder.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["یکشبنه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنجشنبه", "جمعه", "شنبه"],
            datasets: [{
                data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            legend: {
                display: false,
            }
        }
    });
</script>
</body>
</html>
