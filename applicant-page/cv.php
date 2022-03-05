<?php
    require_once("../include/initialize.php");
    
    if (!isset($_SESSION['APPLICANTID'])) {
        # code...
        redirect(web_root.'index.php');
    }
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
                        <a class="nav-link text-semibold text-blue" href="cv.php">Curriculum Vitae</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-semibold text-blue" href="career.php">Career</a>
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
                Silahkan isi data dengan informasi yang valid
            </h2>
        </div>
        <hr>
        <div class="heading" style="display: flex; flex-direction: row; justify-content: space-between;">
            <p style="font-size: 1.5vh">Kamu sedang berada di halaman : Curriculum Vitae / <b>CV Maker</b></p>
            <!-- <p style="font-size: 1.5vh;">Ada <b>2 Lamaran</b> yang kamu ajukan</p> -->
        </div>
        <!-- body cv -->
        <!-- profile section -->
        <center>
            <div class="header-profile row mt-4">
                <div class="profile-photo col-md-6">
                    <img style="width: 180px; height: 180px; border-radius: 50%;" src="../assets/images/_DSC6958.JPG"
                        alt="foto profile">
                </div>
                <div class="profile-info col-md-6 text-start">
                    <p class="header-title">Adam Firdaus</p>
                    <h3 class="text-muted" style="margin-top: -10px;">4311901038</h3>
                    <h3 class="text-muted">Teknik Informatika</h3>

                </div>
            </div>
        </center>
        <?php
            $applicantid = $_SESSION['APPLICANTID'];
            $sql = "SELECT * FROM tblapplicants where APPLICANTID = '$applicantid'  ";
            $mydb->setQuery($sql);
            $cur = $mydb->loadSingleResult();

            $sqlcv = "SELECT * FROM tbl_curriculum_vitae where APPLICANTID = '$applicantid'";
            $mydb->setQuery($sqlcv);
            $rescv = $mydb->loadSingleResult();
        ?>
        <div class="body-profile mt-5">
            <div class="card p-5">
                <form action="controller.php?action=edit" method="post">
                    <label for="basic-url" class="form-label">Profil & Kontak</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="masukkan nama depan kamu"
                            aria-label="Username" name="first_name" aria-describedby="basic-addon1" value="<?= $cur->FNAME; ?>">
                        
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="masukkan nama belakang kamu"
                            aria-label="Username" name="last_name" aria-describedby="basic-addon1" value="<?= $cur->LNAME; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                        <input type="text" class="form-control" placeholder="masukkan no. WA / handphone aktif"
                            aria-label="Username" name="contactinfo" aria-describedby="basic-addon1" value="<?= $cur->CONTACTNO; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-linkedin"></i></span>
                        <input type="text" class="form-control" placeholder="masukkan link linkedin"
                            aria-label="Username" name="linkedin" aria-describedby="basic-addon1" value="<?= $cur->LINKEDINLINK; ?>" >
                    </div>
                    <hr>
                    <label for="basic-url" class="form-label">Skill & Pendidikan</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-cog"></i></span>
                        <input type="text" class="form-control"
                            placeholder="masukkan satu keahlian yang kamu kuasai, contoh:(Graphic Design)"
                            aria-label="Username" name="keahlian_utama" aria-describedby="basic-addon1" value="<?= ($rescv) ? $rescv->skill_utama : ''; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-cogs"></i></span>
                        <input type="text" class="form-control"
                            placeholder="pisahkan dengan koma contoh: (Web Development,Android Development,Photography)"
                            aria-label="Username" name="keahlian_secondary" aria-describedby="basic-addon1" value="<?= ($rescv) ? implode (", ", unserialize($rescv->skill_secondary)) : ''; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building-o"></i></span>
                        <input type="text" class="form-control"
                            placeholder="pisahkan dengan koma contoh: (SMK Al-Azhar(2019-2020),Politeknik Negeri Batam(2021-2023))"
                            aria-label="Username" name="pendidikan" aria-describedby="basic-addon1" value="<?= ($rescv) ? implode (", ", unserialize($rescv->jenjang_sekolah)) : ''; ?>">
                    </div>
                    <!-- <hr>
                    <label for="basic-url" class="form-label">Pengalaman & Sertifikasi</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Skill Utama</span>
                        <input type="text" class="form-control"
                            placeholder="masukkan satu keahlian yang kamu kuasai, contoh:(Graphic Design)"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Skill Lainnya</span>
                        <input type="text" class="form-control"
                            placeholder="pisahkan dengan koma contoh: (Web Development,Android Development,Photography)"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Jenjang Sekolah</span>
                        <input type="text" class="form-control"
                            placeholder="pisahkan dengan koma contoh: (SMK Al-Azhar(2019-2020),Politeknik Negeri Batam(2021-2023))"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div> -->

                    <button class="mx-auto btn bg-myorange text-white w-25 mt-2">Submit</button>
                </form>
            </div>
        </div>
        <!-- end profile section -->
        <!-- end body cv -->
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
                                    <span class="text-white ms-3 text-start">Batam Centre, Jl. Ahmad Yani, Tlk. Tering,
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
                            <strong>Polibatam Career sepenuhnya bebas biaya !</strong> Platform ini ditujukan untuk
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