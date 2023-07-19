<?php
require 'config/conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/product.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="assets/css/bootsrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <div class="logo-img">
                <img src="../assets/img/logo (1).png" alt="" class="img-logo-top">
            </div>
            <div class="logo text">
                <h1 class="text-logo-h1">Inventory </h1>
            </div>
        </div>
        <div class="search-engine-top-bar">
            <input type="text" placeholder="Search... " class="input-img-egine-1" maxlength="40">
        </div>
        <div class="user-and-profile">
            <div class="name-username">
                <h2 class="welcome-home">
                    Welcome
                </h2>
                <div class="name-user-box">
                    <h2 class="name-user-1">Hana</h2>
                    <div class="toggle-btn">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
            </div>
            <div class="prifile-human">
                <img src="../assets/img/person.png" alt="person" class="img-profile-human">
            </div>
        </div>
        <div class="user-dropdown " id="user-dropdown">
            <li><a href="">Profile</a></li>
            <li><a href="">Help & Support</a></li>
            <li><a href="">Display & accessibility</a></li>
            <li><a href="modul/cek_logout.php">Log Out</a></li>
        </div>
    </header>
    <div class="container-main">
        <?php
        // $base_url = "http://localhost/inventory/Inventory";
        $nav = !empty($_GET["nav"]) ? $_GET["nav"] : "home";
        $page = '';
        if ($nav == 'dashboard') {
            $page = 'dashboard.php';
        } elseif ($nav == 'product') {
            $page = 'product.php';
        } elseif ($nav == 'master') {
            $page = 'master.php';
        } elseif ($nav == 'transaction') {
            $page = 'transaction.php';
        } elseif ($nav == 'client') {
            $page = 'client.php';
        } elseif ($nav == 'access') {
            $page = 'access.php';
        } elseif ($nav == 'setting') {
            $page = 'setting.php';
        } else {
            // header("Location:http://localhost/inventory/Inventory/index.php?nav=dashboard");
            echo "<script>
            window.location.href = 'http://localhost/inventory/Inventory/index.php?nav=dashboard';
            </script>";
        }
        include "menu.php";

        ?>
        <?php
        include $page;
        ?>
    </div>
    <script src="assets/js/sweetalert2.js"></script>
    <script src="assets/js/js_strap.js"></script>
    <script src="assets/js/chart.umd.min.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script>
        var checkboxes = document.querySelectorAll("input[type = 'checkbox']");

        function checkAll(myCheckbox) {
            if (myCheckbox.checked == true) {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = true;
                });
            } else {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = false;
                });
            }
        }
        // input number 
    </script>
    <script>
        // membuat variabel toggleBtnIcon untuk menangkap tag i yang berada pada user-name > toggle-btn 
        const toggleBtnIcon = document.querySelector(".name-username .toggle-btn i");
        // membuat variabel userDropdown untuk menangkap class user-dropdown 
        const userDropDown = document.querySelector(".user-dropdown");
        // function untuk merubah div yang tadinya opacity 0 menjadi 1 dan menambah class open pada div dropdown 
        function changeDiv() {
            // jika userDropdown di klik tambahkan class open
            userDropDown.classList.toggle("open");
            // membuat variabel isOpen yang mempunyai isi userDropdown yang sudah ditambahkan class open
            const isOpen = userDropDown.classList.contains("open");
            // jika toggleBtn terdapat variabel isOpen maka ubah icon panah menjadi silang
            toggleBtnIcon.classList = isOpen ? "fa-solid fa-xmark" : "fa-solid fa-chevron-down";
            // merubah opacity class user-dropdown yang awal nya 0 menjadi 1( menampilkan gambar )
            document.getElementById("user-dropdown").style.opacity = (isOpen == false) ? 0 : 1;
        };
        //semua halaman web jika di klik maka ditambahkan function e atau event 
        window.addEventListener('click', function(e) {

            // membuat variabel element yang menangkap id dari user-dropdown
            var element = document.getElementById("user-dropdown");
            // membuat kondisi if else pada user and profile
            if (document.querySelector('.user-and-profile').contains(e.target)) {
                changeDiv();
                // jika class user-and-profile menargetkan didalam maka panggil function changeDiv
            } else {
                // jika diluar maka class user-dropdown menghapus class open kemudian merubah tag i menjadi panah kembali
                document.querySelector(".user-dropdown").classList.remove("open");
                toggleBtnIcon.classList = "fa-solid fa-chevron-down";
            }
        });
        //Catatan Pak Diar dukumen ready Wajib untuk eksekusi 

        $(document).ready(function() {
            console.log('Ready');
            // get_quran();
            chart_satu();
            chart_dua();
            chart_tiga();

        });

        // contoh pemanggilan API dan di looping

        function get_quran() {
            $.get("http://api.alquran.cloud/v1/quran/en.asad",
                function(data, status) {
                    var surat = data.data.surahs;
                    console.log('disini');
                    // looping jika i kurang dari panjang variable surat lakukan looping dan i ditambah 1
                    // maka dari itu jika i hasil penambahan tersebut sudah sama dengan variabel surat looping akan berhenti
                    for (let i = 0; i < surat.length; i++) {
                        const e = surat[i];
                        console.log('Surat :', e.name);
                        console.log('Ayat :', e.ayahs);
                        console.log('-----------------------');
                    }
                }
            );
        }

        //    chart bagus nya dimasukan kedalam function agar variable nya tidak mengalami bentrok jika ada variabel yang sama

        function chart_satu() {
            console.log('Satu');
            const ctx = document.getElementById("myChart");
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Red", "Blue", "Yellow"],
                    datasets: [{
                            label: "Sub-1",
                            data: [0, 100],
                            borderWidth: 1,
                            backgroundColor: "#fff",
                            borderRadius: 100,
                            innerWidth: 10,
                        },
                        {
                            label: "Sub-2",
                            data: [100, 100, 100],
                            borderWidth: 1,
                            backgroundColor: "#fff",
                            borderRadius: 100,
                            innerWidth: 10,
                        },
                        {
                            label: "Sub-3",
                            data: [100, 0, 100],
                            borderWidth: 1,
                            backgroundColor: "#fff",
                            borderRadius: 100,
                            innerWidth: 10,
                        },
                        {
                            label: "Sub-4",
                            data: [0, 0, 100],
                            borderWidth: 1,
                            backgroundColor: "#fff",
                            borderRadius: 100,
                            innerWidth: 10,
                        },
                    ],
                },
                options: {
                    plugins: {
                        legend: {
                            display: false,
                            labels: {
                                color: "#fff",
                                font: {
                                    size: 16,
                                },
                            },
                        },
                    },
                    scales: {
                        y: {
                            grid: {
                                display: false
                            },
                            beginAtZero: true,
                            ticks: {
                                color: "white",
                                font: 15,
                            },
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                display: false,
                                color: "white",
                                font: {
                                    size: 10,
                                },
                                stepSize: 1,
                                beginAtZero: true,
                            },
                        },
                    },
                },
            });
        }

        function chart_dua() {
            console.log('Dua');
            const data = {
                datasets: [{
                    data: [300, 50, 100],
                    backgroundColor: [
                        "rgb(255, 99, 132)",
                        "rgb(54, 162, 235)",
                        "rgb(255, 205, 86)",
                    ],
                    hoverOffset: 4,
                }, ],
                options: {
                    legend: {
                        display: false,
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.yLabel;
                            },
                        },
                    },
                },
            };

            const config = {
                type: "doughnut",
                data,
            };
            const myCircle = new Chart(document.getElementById("myCircle"), config);
        }

        function chart_tiga() {
            console.log('Tiga');
            const ctx = document.getElementById("myThree");
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Oct", "Mar", "Aug"],
                    datasets: [{
                            label: "Sub-1",
                            data: [600, 490, 90],
                            borderWidth: 1,
                            backgroundColor: "#0052cc",
                        },
                        {
                            label: "Sub-2",
                            data: [600, 490, 90],
                            borderWidth: 1,
                            backgroundColor: "#def0ff",
                        }
                    ],
                },
                options: {
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    scales: {
                        y: {
                            grid: {
                                display: false
                            },
                            beginAtZero: true,
                            ticks: {
                                color: "grey",
                                font: 15,
                            },
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: "grey",
                                font: {
                                    size: 10,
                                },
                                stepSize: 1,
                                beginAtZero: true,
                            },
                        },
                    },
                },
            });
        }

        function showEdit() {
            alert('tess');
            // $.ajax({
            //     type: "GET", //we are using GET method to get data from server side
            //     url: 'conn.php', // get the route value
            //     data: {employee_id:employeeId}, //set data
            //     beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click

            //     },
            //     success: function (response) {//once the request successfully process to the server side it will return result here
            //         response = JSON.parse(response);
            // $('#nameAdd').val(response.name)
            //         $("#edit-form [name=\"id\"]").val(response.id);
            //         $("#edit-form [name=\"email\"]").val(response.email);
            //         $("#edit-form [name=\"first_name\"]").val(response.first_name);
            //         $("#edit-form [name=\"last_name\"]").val(response.last_name);
            //         $("#edit-form [name=\"address\"]").val(response.address);
            //     }
            // });
        }
    </script>
</body>

</html>