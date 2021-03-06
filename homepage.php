<?php
	session_start();
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>hackathon</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style_music.css" rel="stylesheet" />
    </head>
<?php
    if(isset($_SESSION["userid"]))
{
?>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="logo.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="./logout.php"><Strong>๋ก๊ทธ์์</strong></a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio"><Strong>์ค๋์ ํค์๋</Strong></a></li>
                        <li class="nav-item"><a class="nav-link" href="#about"><Strong>์ถ์ฒ ํ๋?์ด๋ฆฌ์คํธ</Strong></a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact"><Strong>๋๋ค ํฝ!</Strong></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Only for you,</div>
                <div class="masthead-heading text-uppercase">Enjoy other people's stories and playlists!</div>
            </div>
        </header>
        <!-- Services-->
        
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?=$_SESSION["userid"]?> ๋, ํ์ํฉ๋๋ค.</h2>
                    <h3 class="section-subheading text-muted">์ค๋ ์์๋ ์ผ์ ํธ์ด๋ด๋ณด์ธ์!<br>๊ทธ๋ฆฌ๊ณ? ์ค๋์ ํ๋?์ด๋ฆฌ์คํธ๋ฅผ ๊ณต์?ํด์ฃผ์ธ์!</h3>
                </div>   
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Today's Keyword</h2>
                    <h3 class="section-subheading text-muted">์ค๋ ํ๋ฃจ๋ ์ด๋?๋์? ํค์๋๋ฅผ ๊ณจ๋ผ๋ณด์ธ์!<br>ํด๋ฆญ ์ ๊ด๋?จ ์์ ์ปค๋ฎค๋ํฐ๋ก ์ด๋ํฉ๋๋ค.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="./board_burnout.php" style="cursor:pointer;">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="width: 416px;height: 250px;" src="assets/img/portfolio/Burnout2.JPG" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Burn out</div>
                                <div class="portfolio-caption-subheading text-muted">๋ฌด๊ธฐ๋?ฅ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link"  href="./board_farewall.php" style="cursor:pointer;">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="width: 416px;height: 250px;" src="assets/img/portfolio/Farewell2.JPG" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Farewell</div>
                                <div class="portfolio-caption-subheading text-muted">์ด๋ณ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link"  href="./board_love.php" style="cursor:pointer;">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="width: 416px;height: 250px;" src="assets/img/portfolio/Love4.JPG" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Love</div>
                                <div class="portfolio-caption-subheading text-muted">์ฌ๋</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="./board_freedom.php" style="cursor:pointer;">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="width: 416px;height: 250px;" src="assets/img/portfolio/Freedom2.JPG" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Freedom</div>
                                <div class="portfolio-caption-subheading text-muted">์์?</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="./board_study.php" style="cursor:pointer;">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="width: 416px;height: 250px;" src="assets/img/portfolio/Study2.JPG" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Study</div>
                                <div class="portfolio-caption-subheading text-muted">๊ณต๋ถ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="./board_trip.php" style="cursor:pointer;"">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="width: 416px;height: 250px;" src="assets/img/portfolio/Trip2.JPG" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Trip</div>
                                <div class="portfolio-caption-subheading text-muted">์ฌํ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Recommended Playlist</h2>
                    <h3 class="section-subheading text-muted">์ง๊ทนํ ๊ฐ์ธ์?์ธ ์ถ์ฒ ํ๋?์ด๋ฆฌ์คํธ์๋๋ค :)</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/lofi.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>LOFI</h4>
                                <h4 class="subheading">ํ์คํฐ๋ค์ ๋ธ๋์<hr></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">People - moow<br>Pretending To... - Tsutchie<br>She's Left Handed - lwamizu<br>Smooth Sailin' - Moderator<br>So In Love - Brock Berrigan</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/khip.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>๊ตญ๋ด ํํฉ</h4>
                                <h4 class="subheading">ํํฉ์ ์๋ก์ด ํจ๋ฌ๋ค์<hr></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">ํ์ํ- ํฌ๋ฆฌ์ฝฅํฐ (ft.๋ธ์ (NOEL), ํค๋๋ฐ๋ฆฌ (Kid Milli))<br>๋ฆด๋ณด์ด, ์์ํ์ธ, ๋ฏธ๋์ด - HEAT<br>pH-1 - BOOL (Feat. Beenzino) (Prod. Mokyo)<br>์ฐฝ๋ชจ, ํด์ฌ์ค์, ์?์ฌ ์์ผ๋๋, ๊นํจ์ - BAND<br>ASH ISLAND - ๋ฉ๋ก๋</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/pop.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>๊ฐ์ฑ ํ์ก</h4>
                                <h4 class="subheading">๊ฐ์ฌ๋ ๋ชจ๋ฅด์ง๋ง ํฅ์ผ๋<hr></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Luz - we'll be fine<br>Chris James - Don't Forget About Me<br>Beth McCarthy - Omg Did She Call Him Baby<br>Racoon Racoon - Unnamed<br>Faye - Make Up</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/indi.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>์ธ๋ ๋ฎค์ง</h4>
                                <h4 class="subheading">์๊ฐ๋ณด๋ค ์ฐพ๋์ฌ๋์ด ๋ง์ ์ฅ๋ฅด<hr></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Night Off - ์?<br>OOHYO(์ฐํจ) - Youth<br>Damons Year(๋ฐ์ด๋จผ์ค ์ด์ด) - Auburn<br>SURL(์ค) - ์ด๊ธฐ๊ตฌ<br>๊ฒ์?์น๋ง - Everything</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                ๋ ์ข์
                                <br />
                                ํ๋ฆฌ๊ฐ ์๋ค๋ฉด
                                <br />
                                ๊ณต์?!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Random PICK</h2>
                    <h3 class="section-subheading text-primary">์ค๋ ๋ฑํ ๋ฃ๊ณ? ์ถ์ ๋ธ๋๊ฐ ์์ผ์๋ค๊ตฌ์? ๋๋ค ํฝ์ ๋ฐ์๋ณด์ธ์!</h3>
                </div>

                <!--์ฌ๊ธฐ์๋ถํฐ ํ ์ฝ๋ ๋ฃ์ผ๋ฉด๋จ -->
                <!DOCTYPE html>

    <div style="text-align: center;">
        <br>
        <img id="img" style="border: px solid; border-radius: 280px; -moz-border-radius: 280px;-khtml-border-radius: 280px; -webkit-border-radius: 280px; width: 400px; height: 400px;" src="http://155.230.52.54:8080/assets/img/album/question.jpg" alt="">
        <br>
        <br>
        <br>
        <span id="text" style="font-style: italic; font-weight: bold; font-size: 1.5em;line-height: 1.0em; color: white; font-family: arial;"> </span>
        <br>
        <br>
        <button id="btn_recommend" onclick="func()"><strong>์ค๋์ ์ถ์ฒ ๋ธ๋๋?</strong></button>
        <script language="javascript">
            function func() {
                var randnum = Math.floor(Math.random() * 8);
                document.getElementById("img").src = "http://155.230.52.54:8080/assets/img/album/" + randnum + ".jpg";
                switch (randnum) {
                    case 0:
                        document.getElementById("text").innerHTML = "IU - ๋ผ์ผ๋ฝ";
                        break;
                    case 1:
                        document.getElementById("text").innerHTML = "MSG์๋๋น - ๋ฐ๋ผ๋ง ๋ณธ๋ค";
                        break;
                    case 2:
                        document.getElementById("text").innerHTML = "Justin Bieber - Justice";
                        break;
                    case 3:
                        document.getElementById("text").innerHTML = "Aespa - Next Level";
                        break;
                    case 4:
                        document.getElementById("text").innerHTML = "BTS - Butter";
                        break;
                    case 5:
                        document.getElementById("text").innerHTML = "์ด๋ฌด์ง - ์?ํธ๋ฑ";
                        break;
                    case 6:
                        document.getElementById("text").innerHTML = "๋ธ๋?์ด๋ธ๊ฑธ์ค - Rollin'";
                        break;
                    case 7:
                        document.getElementById("text").innerHTML = "STAYC - ASAP";
                        break;
                }
            }
        </script>
    </div>
                <!-- ์ฌ๊ธฐ๊น์ง -->
                
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy;<br> KNU/HACKATHON TEAM 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <?php
    }
	else
	{
?>
		<script>
			location.replace("./main.php");
		</script>
<?php
	}
?>
    </body>
</html>