<?php
    require_once('../include/database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/owl-carousel/../assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/owl-carousel/../assets/owl.theme.default.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../assets/owl-carousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js">
    </script>

    <link rel="stylesheet" href="../assets/css/style.css" />

    <title>Polibatam Career</title>
</head>

<body>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                margin: 20,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                },
                loop: true,
                // nav: true,
                // navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
            });
        });
        $(document).ready(function () {
            $('#table_id').DataTable();
        });
    </script>
    <script>
        const stepButtons = document.querySelectorAll('.step-button');
        const progress = document.querySelector('#progress');

        Array.from(stepButtons).forEach((button, index) => {
            button.addEventListener('click', () => {
                progress.setAttribute('value', index * 100 / (stepButtons.length -
                    1)); //there are 3 buttons. 2 spaces.

                stepButtons.forEach((item, secindex) => {
                    if (index > secindex) {
                        item.classList.add('done');
                    }
                    if (index < secindex) {
                        item.classList.remove('done');
                    }
                })
            })
        })
    </script>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img width="190" height="45" src="../assets/logo/logopolcar.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link text-semibold text-blue" aria-current="page" href="#">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-semibold text-blue" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-semibold text-blue" href="cv.html">Curriculum Vitae</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-semibold text-blue" href="career.html">Career</a>
                    </li>
                    <center>
                        <div class="dropdown d-none d-sm-block d-md-none">
                            <img style="width: 55px; height: 55px; border-radius: 50%;"
                                src="../assets/images/_DSC6958.JPG" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <ul class="dropdown-menu mt-3 p-3" style="right: 0 !important;
                        left: auto !important;" aria-labelledby="navbarDropdownMenuLink">
                                <h4><b>Adam Firdaus</b></h4>
                                <div class="menu mt-3">
                                    <li style="justify-content: space-between"><a class="dropdown-item" href="#"><i
                                                class="fa fa-bookmark fa-lg me-2"></i>
                                            Lowongan
                                            Tersimpan</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-cogs fa-lg me-2"></i>
                                            Pengaturan
                                            Akun</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa fa-question-circle fa-lg me-2"></i>
                                            Butuh
                                            Bantuan
                                            ?</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out fa-lg me-2"></i>
                                            Logout</a>
                                    </li>
                                </div>

                            </ul>
                        </div>
                    </center>
                    <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li> 
            <li class="nav-item">
              <a
                class="nav-link disabled"
                href="#"
                tabindex="-1"
                aria-disabled="true"
                >Disabled</a
              >
            </li>-->
                </ul>
                <div class="d-flex ms-auto">
                    <div class="dropdown d-sm-none d-md-block ">
                        <img style="width: 55px; height: 55px; border-radius: 50%;" src="../assets/images/_DSC6958.JPG"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu mt-3 p-3" style="right: 0 !important;
                        left: auto !important;" aria-labelledby="navbarDropdownMenuLink">
                            <h4><b>Adam Firdaus</b></h4>
                            <div class="menu mt-3">
                                <li style="justify-content: space-between"><a class="dropdown-item" href="#"><i
                                            class="fa fa-bookmark fa-lg me-2"></i>
                                        Lowongan
                                        Tersimpan</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-cogs fa-lg me-2"></i> Pengaturan
                                        Akun</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-question-circle fa-lg me-2"></i>
                                        Butuh
                                        Bantuan
                                        ?</a>
                                </li>
                                <hr>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out fa-lg me-2"></i>
                                        Logout</a>
                                </li>
                            </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- modal login -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="header-body p-5">
                        <p class="text-bold text-md text-blue">Sign In</p>
                        <p class="text-blue" style="margin-top: -6px">
                            Silahkan menggunakan identitas yang terdaftar
                        </p>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIK/NIM</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text">
                                    Gunakan NIM/NIK yang telah terdaftar.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" />
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                <label class="form-check-label" for="exampleCheck1">Ingat Saya
                                </label>
                            </div>
                            <butto type="submit" class="btn btn-primary w-100">
                                Submit
                            </butto n>
                        </form>
                        <div class="another-action text-center mt-4 text-blue">
                            <p>
                                Belum Punya Akun ? <a href="register.html">Daftar Disini</a>
                            </p>
                            <a href="#" class="text-bold text-blue" style="text-decoration: none">Lupa Password ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end modal login -->

    <!-- <img
      src="https://images.unsplash.com/photo-1530435460869-d13625c69bbf?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTB8fHdlYnNpdGV8ZW58MHwwfHx8MTYyMTQ0NjkyNg&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768"
      class="d-block mx-lg-auto img-fluid"
      alt=""
      loading="lazy"
    /> -->
    <!-- progress tracker -->
    <div class="container py-3">
        <div class="header">
            <h2 class="header-title w-50">
                Job yang kamu apply <br> tampil disini
            </h2>
        </div>
        <hr>
        <div class="heading" style="display: flex; flex-direction: row; justify-content: space-between;">
            <p style="font-size: 1.5vh">Kamu sedang berada di halaman : Home / <b>Application Progress</b></p>
            <p style="font-size: 1.5vh;">Ada <b>2 Lamaran</b> yang kamu ajukan</p>
        </div>
        <div class="body-tracker">
            <!-- Item -->
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-4 my-auto px-5">
                        <img src="../assets/logo/perusahaan.png" alt="">
                    </div>
                    <div class="step col-md-8 d-none d-md-block py-5 pe-5">
                        <div class="company-profile">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="header-title">Web Designer</p>
                                    <p class="header-subtitle" style="margin-top: -12px;">Lapmodo Batam</p>
                                </div>
                                <div class="col-md-6 ms-auto">
                                    <button class="btn btn-outline-blue px-5 float-end">Detail</button>
                                    <p class="float-end mt-3">Tanggal Apply : 5 Februari 2022</p>
                                </div>
                            </div>

                        </div>
                        <?php
                $sql = "SELECT id_progress,detail_progress FROM tblprogress ";
                $mydb->setQuery($sql);
                $cur = $mydb->loadResultList();
                //print_r($query);
                $array = array("assesment", "interview", "third step");
                $serialized_array = serialize($array); 
                // var_dump($serialized_array);
                $i=1;
                $tahap = "";
                        ?>

                        <div class="card px-3">
                            <div class="steps">
                                <progress id="progress" value=0 max=100></progress>
                                <?php
                                foreach($cur as $item) :
                                    // echo "<pre>".print_r(,1)."</pre>";
                                    $sql2 = "SELECT * FROM tbl_user_progress where id_progress = '$item->id_progress' ";
                                    $mydb->setQuery($sql2);
                                    $cur2 = $mydb->loadResultList();
                                    $progress = 0;
                                    foreach ($cur2 as $key ) {
                                        // echo "<pre>".print_r($key,1)."</pre>";
                                        $progress = $key->progres_step;
                                    }
                                    foreach(unserialize($item->detail_progress) as $list) :
                                        // echo "<pre>".print_r($progress,1)."</pre>";
                                        ?>
                                <div class="step-item" style="margin-top: -1px">
                                    <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne"
                                        aria-expanded="<?php echo ($i > $progress) ? "false" : "true" ?>"
                                        aria-controls="collapseOne">
                                        <?php
                                                    echo $i;
                                                ?>
                                    </button>
                                    <div class="step-title">
                                        <?php
                                                if ($i == $progress) {
                                                    $tahap = $list;
                                                }
                                                    echo $list;
                                                ?>
                                    </div>
                                </div>
                                <?php  
                                            $i++;
                                        endforeach;
                                endforeach;
                                ?>


                                <!-- <div class="step-item">
                                    <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1
                                    </button>
                                    <div class="step-title">
                                        First Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        2
                                    </button>
                                    <div class="step-title">
                                        Second Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        3
                                    </button>
                                    <div class="step-title">
                                        Third Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        4
                                    </button>
                                    <div class="step-title">
                                        Fourth Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        5
                                    </button>
                                    <div class="step-title">
                                        Fifth Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">
                                        6
                                    </button>
                                    <div class="step-title">
                                        Sixth Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        7
                                    </button>
                                    <div class="step-title">
                                        Seventh Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        8
                                    </button>
                                    <div class="step-title">
                                        Eight Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                        9
                                    </button>
                                    <div class="step-title">
                                        Nineth Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false"
                                        aria-controls="collapseTen">
                                        10
                                    </button>
                                    <div class="step-title">
                                        Tenth Step
                                    </div>
                                </div> -->
                            </div>
                            <div class="ps-3"
                                style="margin-top: -10px; display: flex; flex-direction: row; align-items: baseline;">
                                <p class="header-subtitle">Sedang Tahap </p>
                                <p class="ms-2"><b><?php
                                    echo $tahap;
                                ?></b></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <!-- <div class="card">
                <div class="row">
                    <div class="col-md-4 my-auto px-5">
                        <img src="assets/logo/perusahaan.png" alt="">
                    </div>
                    <div class="step col-md-8 d-none d-md-block py-5 pe-5">
                        <div class="company-profile">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="header-title">Web Designer</p>
                                    <p class="header-subtitle" style="margin-top: -12px;">Lapmodo Batam</p>
                                </div>
                                <div class="col-md-6 ms-auto">
                                    <button class="btn btn-outline-blue px-5 float-end">Detail</button>
                                    <p class="float-end mt-3">Tanggal Apply : 5 Februari 2022</p>
                                </div>
                            </div>

                        </div>
                        <div class="card">
                            <div class="steps">
                                <progress id="progress" value=0 max=100></progress>
                                <div class="step-item">
                                    <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1
                                    </button>
                                    <div class="step-title">
                                        First Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        2
                                    </button>
                                    <div class="step-title">
                                        Second Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        3
                                    </button>
                                    <div class="step-title">
                                        Third Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        4
                                    </button>
                                    <div class="step-title">
                                        Fourth Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        5
                                    </button>
                                    <div class="step-title">
                                        Fifth Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">
                                        6
                                    </button>
                                    <div class="step-title">
                                        Sixth Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        7
                                    </button>
                                    <div class="step-title">
                                        Seventh Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        8
                                    </button>
                                    <div class="step-title">
                                        Eight Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                        9
                                    </button>
                                    <div class="step-title">
                                        Nineth Step
                                    </div>
                                </div>
                                <div class="step-item">
                                    <button class="step-button text-center collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false"
                                        aria-controls="collapseTen">
                                        10
                                    </button>
                                    <div class="step-title">
                                        Tenth Step
                                    </div>
                                </div>
                            </div>
                            <div class="ps-3"
                                style="margin-top: -10px; display: flex; flex-direction: row; align-items: baseline;">
                                <p class="header-subtitle">Sedang Tahap </p>
                                <p class="ms-2"><b>Asesemen</b></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Item -->
        </div>
    </div>
    <!-- end progress tracker -->


    <!-- contact us -->
    <div class="contact-us mt-5 pb-5 mb-4" id="contact">
        <div class="container py-4">
            <center>
                <div class="header">
                    <p class="header-title">Butuh Bantuan ?</p>
                    <p class="header-desc">
                        Silahkan hubungi kami lebih lanjut melalui <br />
                        beberapa media informasi kami.
                    </p>
                </div>
            </center>
            <div class="body mt-5">
                <div class="row">
                    <div class="col-md-5 p-3 px-5 py-5 rounded-start" style="background-color: #183a64;">
                        <div class="content">
                            <div class="head">
                                <p class="header-title text-white">Kontak Kami</p>
                                <p class="text-white" style="margin-top: -10px">
                                    Isi form yang tersedia dengan data dan informasi yang tepat
                                </p>
                            </div>
                            <div class="body mt-5">
                                <div class="phone">
                                    <img src="../assets/icons/phone.png" width="30" height="30" alt="" />
                                    <span class="text-white ms-3">0891-2718-281</span>
                                </div>
                                <div class="messages mt-4">
                                    <img src="../assets/icons/message.png" width="30" height="30" alt="" />
                                    <span class="text-white ms-3">admin@polibatam.ac.id</span>
                                </div>
                                <div class="place mt-4 d-flex">
                                    <img src="../assets/icons/bookmark.png" width="30" height="35" alt="" />
                                    <span class="text-white ms-3 text-start">Batam Centre, Jl. Ahmad Yani,
                                        Tlk. Tering,
                                        Kec.
                                        Batam Kota,
                                        Kota Batam, Kepulauan Riau 29461</span>
                                </div>
                            </div>
                            <div class="footer mt-5">
                                <div class="d-flex justify-content-between">
                                    <img src="../assets/icons/facebook.png" alt="">
                                    <img src="../assets/icons/Twitter.png" alt="">
                                    <img src="../assets/icons/Instagram.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 p-5 rounded-end" style="background-color: white">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1m">First name</label>
                                        <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1n">Last name</label>
                                        <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example8">Jenis Instansi</label>
                                <input type="text" id="form3Example8" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example8">Nama Instansi</label>
                                <input type="text" id="form3Example8" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example8">Pertanyaan / Pesan</label>
                                <textarea type="text" id="form3Example8"
                                    class="form-control form-control-lg"></textarea>
                            </div>

                            <div class="pt-3 mb-3" style="margin-top: -5px">
                                <button type="button" class="btn btn-secondary btn-lg ms-2 fs-6 text-white"
                                    style="width: 40%; height: 50px;">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact us -->
    <div class="faq" id="faq">
        <div class="container mt-5 mb-5">
            <center>
                <div class="header">
                    <p class="header-title">Frequently Asked Question</p>
                    <p class="header-desc mb-4">
                        Berikut adalah pertanyaan yang sering ditanyakan
                    </p>
                </div>
            </center>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apakah Polibatam Career Gratis ?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Polibatam Career sepenuhnya bebas biaya !</strong> Platform ini
                            ditujukan untuk
                            alumni yang ingin mencari kerjaan tanpa dipungut biaya sedikitpun
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apakah Aman ?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Pasti !</strong>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Apakah Dijamin Akan Mendapatkan Pekerjaan ?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Daftar aja dulu
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- footer -->
    <div class="container">
        <div class="row p-5 pb-5 pt-5">
            <div class="col-md-3">
                <img src="../assets/logo/logopolcar.png" width="190" height="45" alt="">
            </div>
            <div class="col-md-3">
                <p class="text-blue text-bold">
                    POLIBATAM
                </p>
                <div class="link text-blue">
                    <ul style="list-style: none; margin-left: -32px;">
                        <li><a href="#" class="nav-linku">Jurnal Polibatam</a></li>
                        <li><a href="#" class="nav-linku">Dirjen Pendidikan Vokasi</a></li>
                        <li><a href="#" class="nav-linku">Kemendikbud RI</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <p class="text-blue text-bold">
                    JURUSAN
                </p>
                <div class="link text-blue">
                    <ul style="list-style: none; margin-left: -32px;">
                        <li><a href="#" class="nav-linku">Manajemen Bisnis</a></li>
                        <li><a href="#" class="nav-linku">Teknik Informatika</a></li>
                        <li><a href="#" class="nav-linku">Teknik Mesin</a></li>
                        <li><a href="#" class="nav-linku">Teknik Elektronika</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <p class="text-blue text-bold">
                    POLIBATAM CAREER
                </p>
                <div class="link text-blue">
                    <ul style="list-style: none; margin-left: -32px;">
                        <li><a href="#" class="nav-linku">Lowongan Kerja</a></li>
                        <li><a href="#" class="nav-linku">Kerjasama Industri</a></li>
                        <li><a href="#" class="nav-linku">Frequently Asked Question</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3" style="background-color: grey;">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <p class="text-white mt-3 text-bold">Polibatam Career ©2021. Created with <i
                            class="fa fa-heart text-danger fa-lg"></i> by IA
                        Polibatam</p>
                </div>
                <div class="col-md-3">
                    <div class="social-media mt-3 d-flex justify-content-between">
                        <a href="#"><img src="../assets/icons/facebook.png" alt=""></a>
                        <a href="#"><img src="../assets/icons/Twitter.png" alt=""></a>
                        <a href="#"><img src="../assets/icons/Instagram.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->
</body>

</html>