<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b9e7cd03ac.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" type="text/css" href="indexstyle.css">
    <title>5026221029/Diva Ardelia Alyadrus </title>

</head>
<body>
    <script href="index.js"></script>
    <script src="index.js"></script>

  <!-- navigation bar -->
        <div class="navbar d-flex justify-content-end fixed-top">
            <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
            <a href="#about-me"><i class="fa fa-fw fa-user"></i> About me</a>
            <a href="#records"><i class="fa fa-fw fa-hourglass-half"></i> Records</a>
            <a href="#portfolio"><i class="fa fa-fw fa-file"></i> Portfolio</a>
            <a href="#contact"><i class="fa fa-fw fa-phone"></i> Contact</a>
        </div>

    <section class="presection">
    <section class="section1" class="d-flex" id="home">

           <div class="textBox">
           <h1>Welcome to My Page!</h1>
           <p>Hello, my name is <span>Diva</span>. I’m currently studying Information System in Institut Teknologi Sepuluh Nopember.
            This page represents my project, crafted to fulfill the requirements of my Web Programming midterm exam.
            Get to know me better through this journey as we explore the exciting world of web programming!</p>
           </div>

            <div class="imgBox">
                <img class="foto-diva" src="foto1.png" alt="foto1">
            </div>

    </section>
</section>
    <!-- awalan thumbnail foto kecil -->
      <div class="container">
        <ul class="thumb">
            <li><img src="foto1.png" onclick="imgSlider('foto1.png');changeCircleColor('#9BA4B5')"alt="foto2"></li>
            <li><img src="foto3.png" onclick="imgSlider('foto3.png');changeCircleColor('#F0F0F0')"alt="foto4"></li>
            <li><img src="foto2.png" onclick="imgSlider('foto2.png');changeCircleColor('#9BA4B5')"alt="foto3"></li>
            <li><img src="foto4.png" onclick="imgSlider('foto4.png'); changeCircleColor('#F0F0F0')" alt="foto5"></li>
        </ul>
    </div>
        <div class="thumbText">👉🏻Click me to Pop! ⬇</div>
    <!-- akhir thumbnail foto kecil -->

    <section class="section2" id="about-me" >
        <div class="container-fluid p-md-5">
            <!-- section2 header -->
            <div class="header"> <h1> About me </h1></div>
            <!-- Education -->
            <div class="col">
                <div class="row d-flex justify-content-center">
                    <div class="subheader" style="text-align: center;">Education</div>
                </div>
            </div>
            <div class="row ">
                <div class="col-4 ">
                    <div class="education-flip">
                        <div class="flip-card ">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h1>SMPN 9 <br> BEKASI</h1>
                                <p>2016-2019</p>
                            </div>
                            <img src="smp.jpg" alt="ITS" style="width:300px;height:300px;border-radius: 20px;">
                            <div class="flip-card-back" style="padding-top: 3px;">

                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-4 ">
                    <div class="education-flip">
                        <div class="flip-card ">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h1>SMAN 81 Jakarta</h1>
                                <p>2019-2022</p>
                            </div>
                            <img src="sma.jpg" alt="ITS" style="width:300px;height:300px;border-radius: 20px;">
                            <div class="flip-card-back" style="padding-top: 3px;">

                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-4 ">
                    <div class="education-flip">
                        <div class="flip-card ">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h1>Institut Teknologi <br> Sepuluh Nopember</h1>
                                <p>2022-Sekarang</p>
                            </div>
                            <img src="Kuliah.jpg" alt="ITS" style="width:300px;height:300px;border-radius: 20px;">
                            <div class="flip-card-back" style="padding-top: 3px;">

                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
             <!--end of education  -->
            <br><br>
            <!-- Skills dll -->
            <div class="sec2" style="color: black;">
            <div class="row d-flex justify-content-space-between" style="justify-content: space-between;">
                <div  class="col-4" style="background-color: rgb(240, 241, 243); border-radius:20px; max-width: 330px;margin-left: 5%; margin-right: -25px;">
                   <!-- skills section -->
                    <div class="subheader">Skills&Interests</div>
                    <div class="skills d-flex justify-content-center "style="margin-left: -30px;">
                        <ul>
                            <li><i class="fa-solid fa-video"></i> Video editing</li>
                            <li><i class="fa-brands fa-figma"></i> Design Graphic</li>
                            <li><i class="fa-brands fa-google"></i> Google Workspace</li>
                          </ul>
                    </div>
                </div>
                <!-- hobbies section -->
                <div class="col-4 " style="background-color: rgba(150, 157, 169, 0.955); border-radius:20px;max-width: 330px;margin-right: 30px; ">
                    <div class="subheader">Hobbies</div>
                    <div class="hobbies d-flex justify-content-center" style="margin-left: -30px;">
                        <ul>
                            <li> <i class="fa-solid fa-film"></i> Binge-watching </li>
                            <li><i class="fa-solid fa-camera-retro"></i> Photography</li>
                            <li><i class="fa-solid fa-record-vinyl"></i> Vlogging</li>
                          </ul>
                    </div>
                </div>
                <!-- Experiences section -->
                <div class="col-4 " style="background-color: rgb(240, 241, 243); border-radius:20px;max-width: 330px;margin-left: -50px;margin-right: 60px">
                    <div class="subheader">Experiences</div>
                    <div class="experiences d-flex justify-content-center" style="margin-left: -30px;">
                        <ul>
                            <li>Magang HMSI </li>
                            <li>ISE</li>
                            <li> GERIGI </li>
                          </ul>
                    </div>
                </div>

             </div>
            </div>
    </div>
</section>

<br><br><br>
    <section class="section3" id="records">
        <div class="container-fluid p-md-5">
            <div class="header">
                <h1>Records Gallery</h1>
                </div>
                <div class="subheader">Activity & Experiences </div>

                    <div class="row">
                        <div class="col-3 ">
                            <img src="rocket-removebg-preview.png" alt="" style="width: 300px;padding-top: 40px;">
                        </div>

                        <div class="col-6 ">
                            <div class="gallery">
                                <div id="demo" class="carousel slide" data-ride="carousel d-flex justify-content-center">

                                    <!-- Indicators -->
                                    <ul class="carousel-indicators ">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                        <li data-target="#demo" data-slide-to="2"></li>
                                    </ul>

                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img8.jpg" alt="Los Angeles">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="img4.jpg" alt="Chicago">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="img6.jpg" alt="New York">
                                        </div>
                                    </div>
                                        <!-- Left and right controls -->
                                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#demo" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-3 ">
                            <img src="camera-removebg-preview.png" style="width: 300px;padding-top: 30px;" alt="">
                        </div>
                </div>
         </div>
         </section>
         <br><br><br>
         <section class="section4" id="portfolio">
            <div class="container-fluid p-md-5 ">

                <div class="header"><h1>Portfolio</h1> </div>
                <br><br>

                <div class="row">
                    <div class="col-5">
                        <div class="podcast">
                        <div class="subheader justify-content-lg-start">Podcast moderator</div>
                        <div class="card">
                        <img src="pangarsa1.png" alt="Podcast-pangarsa">
                        <h1>PANGARSA</h1>
                        <p>Pangarsa adalah sebuah Podcast yang merupakan program kerja Pengurus OSIS SMAN 81 Jakarta</p>
                        <p><button> <a href="https://www.instagram.com/reel/CHUYVt7r5wG/"></a>Listen here</button></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="subheader"> Desain</div>
                            <div class="desain">
                                <div class="container">
                                    <div class="scroll-container rounded-sm" id="sertif">
                                        <img src="Song-fess-1.png" alt="desain-1">
                                        <img src="Song-fess-4.png" alt="desain2">
                                        <img src="Song-fess-2.png" alt="desain3">
                                        <img src="H-1.png" alt="sertif">
                                        <img src="FORDS.jpg" alt="sertif">
                                        <img src="SNAPSSS.png" alt="sertif">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="subheader"> Sertifikat </div>
                            <div class="scroll-container rounded-sm" id="sertif">
                                <img src="ise.png" alt="sertif">
                                <img src="sertif5.png" alt="sertif">
                                <img src="sertif4.jpeg" alt="sertif">
                                <img src="sertidd3.jpeg" alt="sertif">
                                <img src="sertif2.jpeg" alt="sertif">
                                <img src="sertif1.jpeg" alt="sertif">
                            </div>
                        </div>
                </div>
            </div>
            </section>
    <section class="section5" id="contact">
        <div class="container-fluid p-md-5">
            <div class="header"><h1>Contact</h1></div>
            <form name="contactForm" method="post" action="https://www.youtube.com/" onsubmit=" return validateForm()">

                <div>
                  <label class="form-input"> <b>Name</b> </label>
                  <input type="text" id="fname" name="fname" class="form-control" placeholder="Input your name here" >
                </div>

                <div>
                    <label class="form-input"> <b>E-mail</b> </label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Input your E-Mail here" >
                </div>

                <div>
                    <label class="form-input"> <b>Message</b> </label>
                    <input type="text" id="message" name="message" class="form-control" placeholder="Input your message here" >
                </div>

                <div class="form-input">
                    <input type="submit" value="Submit" class="btn">
                </div>
              </form>
        </div>
    </section>

    <section class="footer">
        <div class="container-fluid pl-lg-5 pt-3">
        <p> Check me out through my social media below :</p>
        <ul>
            <li class="contact-list"> <a href="https://wa.me/082139338081"></a><i class="fa-brands fa-whatsapp fa-2xl"></i> </li>
            <li class="contact-list"> <a href="https://www.instagram.com/diivardl/"></a><i class="fa-brands fa-instagram fa-2xl"></i> </li>
            <li class="contact-list"> <a href="https://www.linkedin.com/in/divardl/"></a><i class="fa-brands fa-linkedin fa-2xl"></i> </li>
            <li class="copyright d-flex justify-content-lg-end"> Diva Ardelia Alyadrus - 5026221029 </li>
        </ul>
    </div>
    </section>

  <section class="section6" id=tugas>
    <div class="container-fluid p-md-5 ">
        <div class="header"><h1>Link Tugas</h1></div>
            <div class="link">
                {{-- linktree --}}
                <a href="http://127.0.0.1:8000/Tugas1">Tugas 1</a>
                {{-- tugas partner kastemisasi --}}
                <a href="http://127.0.0.1:8000/Tugas2">Tugas 2</a>
                {{-- grid layout --}}
                <a href="http://127.0.0.1:8000/Tugas3">Tugas 3</a>
                {{-- show hello --}}
                <a href="http://127.0.0.1:8000/Tugas4">Tugas 4</a>
                {{-- link --}}
                <a href="http://127.0.0.1:8000/Tugas5">Tugas 5</a>
                {{-- responsive 1 --}}
                <a href="http://127.0.0.1:8000/Tugas6">Tugas 6</a>
                {{-- responsive 2 --}}
                <a href="http://127.0.0.1:8000/Tugas7">Tugas 7</a>
                {{-- form validation daftar aslab --}}
                <a href="http://127.0.0.1:8000/Tugas8">Tugas 8</a>
                {{-- kalkulator --}}
                <a href="http://127.0.0.1:8000/Tugas9">Tugas 9</a>

            </div>
        </div>
  </section>

    <script src="index.js"></script>
</body>
</html>

</body>
</html>
