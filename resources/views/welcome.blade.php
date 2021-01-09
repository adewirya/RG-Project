<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackhathon 4.0</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
    <!-- ------------------------- navbar ------------------------- -->
    <nav class="navbar" id="navbar">
        <div class="navbar-content">
            <div class="navbar-left">
                <a href=""><img class="nv-logo" src="/logo.png" alt="logo"></a>
                <div class="navbar-list">
                    <ul class="list-di-navbar">
                        <div class="navtext"><li class="active"><a href="#Home">HOME</a></li></div>
                        <div class="navtext"><li><a href="#About">ABOUT</a></li></div>
                        <div class="navtext"><li><a href="#Champs">CHAMPION PRIZE</a></li></div>
                        <div class="navtext"><li><a href="#TL">TIMELINE</a></li></div>
                        <div class="navtext"><li><a href="#FAQ">FAQ</a></li></div>
                    </ul>
                </div>
            </div>
            <div class="navbar-list">
                @auth
                    <div class="navtext"><a href="{{ url('/home') }}">Home</a></li></div>
                @else
                    <div class="navtext"><a href="{{ route('login') }}">LOGIN</a></div>

                    @if (Route::has('register'))
                       <div class="navtext"> <a href="{{ route('register') }}">REGISTER</a></li></div>
                    @endif
                @endauth
            </div>
        </div>
    </nav>
    <!-- ------------------------- HOME ------------------------- -->
    <section id="Home" class="homee">
        <div class="backgrounds"></div>
        <div class="home-text">
            <div class="text-top">
                <span class="tulisan-top">BNCC HACKHATHON 4.0</span>
            </div>
            <div class="text-mid">
                <span class="polos-l">TRANSFORM </span>
                <span class="gradient-l jarak"> IDEAS</span>
            </div>
            <div class="text-bot">
                <span class="gradient-l">CODE </span>
                <span class="polos-l jarak">YOUR SOLUTION</span>
            </div>
            <span class="garis-tebel"></span>
            <span class="garis-tipis"></span>
        </div>
    </section>
    <!-- ----------------------- ABOUT ---------------------------- -->
    <section id="About">
        <div class="aboutt">
            <div class="about-kotak">
                <img class="bgabt" src="/laptop.png" alt="">
            </div>

            <div class="heading">
                <span class="polos-l">01| What is</span>
                <span class="gradient-l jarak">Hackathon</span>
                <span class="polos-l">?</span>
            </div>
    
            <div class="bodynya">
                <span class="line-1">
                    <span class="polos-m">A</span>
                    <span class="solid-m jarak">48 hour coding competition</span>
                </span>
                <span class="polos-m">
                    where each team was challenged
                </span>
                <span class="polos-m">
                    to provide a solution to a problem
                </span>
                <span class="line-4">
                    <span class="polos-m">by</span>
                    <span class="solid-m jarak">producing a product</span>
                    <span class="polos-m jarak">in the form</span>
                </span>
                <span class="line-5">
                    <span class="polos-m">of an</span>
                    <span class="solid-m jarak">application</span>
                    <span class="polos-m jarak">or</span>
                    <span class="solid-m jarak">website.</span>
                </span>
            </div>
    
            <div class="button-reg">
                <a href="{{ route('register') }}"><button type="submit" class="btnreg">REGISTER NOW</button></a>
                <div class="pointerline"></div>
            </div>
    
            <div class="unknown">
                <div class="upline">
                    <span class="polos-s">Have something you</span>
                    <span class="solid-s jarak">don't understand</span>
                    <span class="putih-s">?</span>
                </div>
                <div class="downline">
                    <span class="polos-m">Get your</span>
                    <span class="solid-m">guide book</span>
                    <span class="polos-m jarak">to Hackathon 4.0 here!</span>
                </div>
                <div class="download">
                    <a href="/download" class="download-text">DOWNLOAD</a>
                </div>
            </div>
            <!-- <span class="backtext">1</span> -->
        </div>


        <div class="aboutt2">
            <div class="heading">
                <span class="polos-l">02| Why Should You</span>
                <span class="gradient-l jarak">Join</span>
                <span class="polos-l">?</span>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/icon/kiri.png" alt="">
                        <div class="head-car">
                            <span class="title-car">MENTORING</span>
                            <span class="title-car">WITH EXPERTS</span>
                        </div>
                        <div class="subtitle-car">
                            Participants will get the opportunity for direct business, design, 
                            and technology mentoring from experienced people in the IT field who will 
                            provide input on the participant's project.
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="/icon/tengah.png" alt="">
                        <div class="head-car">
                            <span class="title-car">NETWORKING</span>
                        </div>
                        <div class="subtitle-car">
                            Participants will have the opportunity to network with other participants, mentors, and the Hackathon 4.0 judges.
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="/icon/kanan.png" alt="">
                        <div class="head-car">
                            <span class="title-car">CHANCE OF</span>
                            <span class="title-car">JOB INTERVIEW</span>
                        </div>
                        <div class="subtitle-car">
                            CVs of the winners of Hackathon 4.0 will be distributed to the sponsor companies of Hackathon 4.0.
                        </div>
                    </div>
                </div>
                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                <script src="../js/carouselabt.js"></script>
            </div>
        </div>
        

    </section>
    <!-- ------------------- CHAMPION PRICE ------------------------- -->
    <section id="Champs" class="champss">
        <div class="heading">
            <span class="polos-l">03| Win the</span>
            <span class="gradient-l jarak">Prize</span>
            <span class="polos-l">!</span>
        </div>
        <div class="hadiahnyaaa">
            <div class="kotak-di-kiri">
                <img class="icon satu" onClick="anis()" src="/icon/1st.png" alt="">
                <img class="icon dua" onClick="anid()" src="/icon/2nd.png" alt="">
                <img class="icon tiga" onClick="anit()" src="/icon/3rd.png" alt="">
            </div>

            <div class="kotakbaru">
                <div class="kotak-di-kanan">
                    <div class="kotak-atas">
                        <span class="bar-1">Click to View</span>
                        <span class="bar-2">Details</span>
                    </div>
                    <div class="kotak-bawah">
                        <img class="hover-icon" src="/icon/hover.png" alt="">
                    </div>
                </div>
    
                <div class="hidden">
                    <div class="juara-satu" id="Jsatu">
                        <div class="kotak-atas"></div>
                        <div class="kotak-bawah"></div>
                        <div class="konten">
                            <img class="gmbr-juara" src="/icon/1st.png" alt="medali-1">
                            <div class="tengahin">
                                <div class="gar-1">Rp 4.000.000</div>
                                <div class="gar-2">&</div>
                                <div class="gar-3">SERTIFIKAT</div>
                            </div>
                        </div>
                    </div>
                    <div class="juara-dua" id="Jdua">
                        <div class="kotak-atas"></div>
                        <div class="kotak-bawah"></div>
                        <div class="konten">
                            <img class="gmbr-juara" src="/icon/2nd.png" alt="medali-2">
                            <div class="tengahin">
                                <div class="gar-1">Rp 2.000.000</div>
                                <div class="gar-2">&</div>
                                <div class="gar-3">SERTIFIKAT</div>
                            </div>
                        </div>
                    </div>
                    <div class="juara-tiga" id="Jtiga">
                        <div class="kotak-atas"></div>
                        <div class="kotak-bawah"></div>
                        <div class="konten">
                            <img class="gmbr-juara" src="/icon/3rd.png" alt="medali-3">
                            <div class="tengahin">
                                <div class="gar-1">Rp 1.000.000</div>
                                <div class="gar-2">&</div>
                                <div class="gar-3">SERTIFIKAT</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- ---------------------- TIMELINE --------------------------- -->
    <section id="TL" class="timeline">
        <div class="heading">
            <span class="polos-l">04| Mark Your</span>
            <span class="gradient-l jarak">Calendar</span>
            <span class="polos-l">!</span>
        </div>

        <div class="bawahnya">
            <div class="tl-kiri">
                <div class="tl-judul">
                    <span class="tl-text">PICK A DATE</span>
                </div>
                <div class="tl-tgltgl">
                    <div class="tl-pertama">
                        <input class="tl-tombol open" type="radio" value="o" name="button"></input>
                        <label>
                            <div class="tl-namajudul">
                                <span class="tl-up polos-ml">Open Registration</span>
                                <span class="tl-down solid-ml">2 August 2021</span>
                            </div>
                        </label>
                    </div>
                    <div class="garis-penghubung1 ln"></div>
                    <div class="tl-pertama">
                        <input class="tl-tombol close" type="radio" value="c" name="button"></input>
                        <label>
                            <div class="tl-namajudul">
                                <span class="tl-up polos-ml">Close Registration</span>
                                <span class="tl-down solid-ml">12 September 2021</span>
                            </div>
                        </label>
                    </div>
                    <div class="garis-penghubung2 ln"></div>
                    <div class="tl-pertama">
                        <input class="tl-tombol meeting" type="radio" value="m" name="button"></input>
                        <label>
                            <div class="tl-namajudul">
                                <span class="tl-up polos-ml">Technical Meeting</span>
                                <span class="tl-down solid-ml">30 September 2021</span>
                            </div>
                        </label>
                    </div>
                    <div class="garis-penghubung3 ln"></div>
                    <div class="tl-pertama">
                        <input class="tl-tombol competition" type="radio" value="cm" name="button"></input>
                        <label>
                            <div class="tl-namajudul">
                                <span class="tl-up polos-ml">Competition Day</span>
                                <span class="tl-down solid-ml">10 October 2021</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="tl-content">
                <div class="solid-l">HURRY UP!</div>
                <div class="itungo">
                    <div class="countdown o" onclick="see(0)" id="demo">00 : 00 : 00 : 00</div>
                </div>
                <div class="itungc">
                    <div class="countdown c" onclick="see(1)" id="demo1">00 : 00 : 00 : 00</div>
                </div>
                <div class="itungm">
                    <div class="countdown m" onclick="see(2)" id="demo2">00 : 00 : 00 : 00</div>
                </div>
                <div class="itungcm">
                    <div class="countdown cm" onclick="see(3)" id="demo3">00 : 00 : 00 : 00</div>
                </div>
            </div>
        </div>

    </section>
    <!-- ------------------------ FAQ ---------------------------- -->
     <section id="FAQ">
        <div class="faqq">
                    <div class="heading">
                        <span class="polos-l">05| Have Any</span>
                        <span class="gradient-l jarak">Questions</span>
                        <span class="polos-l">?</span>
                    </div>
                    <div class="questions">
                        <div class="question-kiri"></div>
                        <div class="question-kanan"></div>
                    </div>


                <div class="questionanswer">
                    <div class="accordion">
                        <div class="contentbx">
                            <img class="tanya1" src="/chat/1.png" alt="">
                            <div class="content">
                                <img class="jawab1" src="/2.png" alt="">
                            </div>
                        </div>
                        <div class="contentbx">
                            <img class="tanya2" src="/chat/3.png" alt="">
                            <div class="content">
                                <img class="jawab2" src="/chat/4.png" alt="">
                            </div>
                        </div>
                        <div class="contentbx">
                            <img class="tanya3" src="/chat/5.png" alt="">
                            <div class="content">
                                <img class="jawab3" src="/chat/6.png" alt="">
                            </div>
                        </div>
                        <div class="contentbx">
                            <img class="tanya4" src="/chat/7.png" alt="">
                            <div class="content">
                                <img class="jawab4" src="/chat/8.png" alt="">
                            </div>
                        </div>
                    
                        <div class="contentbx">
                            <img class="tanya5" src="/chat/9.png" alt="">
                            <div class="content">
                                <img class="jawab5" src="/chat/10.png" alt="">
                            </div>
                        </div>
                    
                        <div class="contentbx">
                            <img class="tanya6" src="/chat/11.png" alt="">
                            <div class="content">
                                <img class="jawab6" src="/chat/12.png" alt="">
                            </div>
                        </div>

                        <div class="contentbx">
                            <img class="tanya7" src="/chat/13.png" alt="">
                            <div class="content">
                                <img class="jawab7" src="/chat/14.png" alt="">
                            </div>
                        </div>

                        <div class="contentbx">
                            <img class="tanya8" src="/chat/15.png" alt="">
                            <div class="content">
                                <img class="jawab8" src="/chat/16.png" alt="">
                            </div>
                        </div>

                        <div class="contentbx">
                            <img class="tanya9" src="/chat/17.png" alt="">
                            <div class="content">
                                <img class="jawab9" src="/chat/18.png" alt="">
                            </div>
                        </div>

                        <div class="contentbx">
                            <img class="tanya9" src="/chat/19.png" alt="">
                            <div class="content">
                                <img class="jawab9" src="/chat/20.png" alt="">
                            </div>
                        </div>

                        <div class="contentbx">
                            <img class="tanya9" src="/chat/21.png" alt="">
                            <div class="content">
                                <img class="jawab9" src="/chat/22.png" alt="">
                            </div>
                        </div>

                        



                        
                       
                                     
                    </div>


                 


                                
             </div>


                                        



      


        </div>
    </section>



<!-- -------------------------- SPONSOR ----------------------------------------- -->

        <div class="sponsor carousel">
            <div class="heading">
                <span class="polos-l">06| Know Our</span>
                <span class="gradient-l jarak">Sponsors</span>
                <span class="polos-l">?</span>
            </div>

            <div class="prevnext-btn">
                <button class="prev-btn"><img class="geseran" src="/icon/prev.png" alt=""></button>
                <button class="next-btn"><img class="geseran" src="/icon/next.png" alt=""></button>
            </div>
            
            <div class="slides">
                <div class="platinum slide">
                    <img class="bg" src="/screen.png" alt="">
                    <div class="dalem-kandang">
                        <div class="gradient-l sps">Platinum Sponsor</div>
                        <img class="logoc" src="/logo-logo/cierto.png" alt="">
                    </div>
                </div>
                <div class="gold slide">
                    <img class="bg" src="/screen.png" alt="">
                    <div class="dalem-kandang">
                        <div class="gradient-l sps">Gold Sponsor</div>
                        <div class="isinyaaa">
                            <div class="log-atas">
                                <img class="logogold1" src="/logo-logo/apple.png" alt="">
                                <img class="logogold2" src="/logo-logo/ntah.png" alt="">
                            </div>
                            <div class="log-bawah">
                                <img class="logogold3" src="/logo-logo/asus.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="silver slide">
                    <img class="bg" src="/screen.png" alt="">
                    <div class="dalem-kandang">
                        <div class="gradient-l sps">Silver Sponsor</div>
                        <div class="isinyaaa">
                            <div class="log-atas">
                                <img class="logoslr1" src="/logo-logo/seputar.png" alt="">
                                <img class="logoslr2" src="/logo-logo/magang.png" alt="">
                            </div>
                            <div class="log-bawah">
                                <img class="logoslr3" src="/logo-logo/tiket.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="medpar carouselz">
            <div class="heading">
                <span class="polos-l">07| Our</span>
                <span class="gradient-l jarak">Media Partners</span>
                <span class="polos-l">!</span>
            </div>

            <div class="prevnext-btn">
                <button class="previ-btn"><img class="geseran" src="/icon/prev.png" alt=""></button>
                <button class="nextt-btn"><img class="geseran" src="/icon/next.png" alt=""></button>
            </div>

            <div class="slidess">
                <div class="media-1">
                    <img class="bg" src="/screen.png" alt="">
                    <div class="dalem-kandang">
                        <div class="medianya">
                            <div class="b1">
                                <img class="ile" src="/logo-logo/infolomba.png" alt="ILE-logo">
                                <img class="je" src="/logo-logo/jadwalevent.png" alt="JE-logo">
                                <img class="lukan" src="/logo-logo/lukan.png" alt="Lu_kan-logo">
                                <img class="info" src="/logo-logo/info.png" alt="Info-logo">
                            </div>
                            <div class="b2">
                                <img class="info" src="/logo-logo/info.png" alt="Info-logo">
                                <img class="lukan" src="/logo-logo/lukan.png" alt="Lu_kan-logo">
                                <img class="je" src="/logo-logo/jadwalevent.png" alt="JE-logo">
                                <img class="ile" src="/logo-logo/infolomba.png" alt="ILE-logo">
                            </div>
                            <div class="b3">
                                <img class="je" src="/logo-logo/jadwalevent.png" alt="JE-logo">
                                <img class="info" src="/logo-logo/info.png" alt="Info-logo">
                                <img class="ile" src="/logo-logo/infolomba.png" alt="ILE-logo">
                                <img class="lukan" src="/logo-logo/lukan.png" alt="Lu_kan-logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media-2">
                    <img class="bg" src="/screen.png" alt="">
                    <div class="dalem-kandang">
                        <div class="medianya">
                            <div class="b1">
                                <img class="bv" src="/logo-logo/bvoice.png" alt="ILE-logo">
                                <img class="je" src="/logo-logo/jadwalevent.png" alt="JE-logo">
                                <img class="lukan" src="/logo-logo/lukan.png" alt="Lu_kan-logo">
                                <img class="info" src="/logo-logo/info.png" alt="Info-logo">
                            </div>
                            <div class="b2">
                                <img class="je" src="/logo-logo/jadwalevent.png" alt="JE-logo">
                                <img class="lukan" src="/logo-logo/lukan.png" alt="Lu_kan-logo">
                                <img class="info" src="/logo-logo/info.png" alt="Info-logo">
                                <img class="ile" src="/logo-logo/infolomba.png" alt="ILE-logo">
                            </div>
                            <div class="b3">
                                <img class="info" src="/logo-logo/info.png" alt="Info-logo">
                                <img class="info" src="/logo-logo/info.png" alt="Info-logo">
                                <img class="ile" src="/logo-logo/infolomba.png" alt="ILE-logo">
                                <img class="lukan" src="/logo-logo/lukan.png" alt="Lu_kan-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<!-- -------------------- contact us ---------------------------------------------- -->
       
    <section class="contactus">
        <div class="any-question">
            <span class="polos-l">08|</span>
            <span class="polos-l">Any</span>
            <div class="sejajar">
                <span class="gradient-l">Questions</span>
                <span class="polos-l jarak">?</span>
            </div>
        </div>

        <div class="contact-us-form">
            <div class="title "> Contact us </div>

            <label for="">Name</label>
            <input type="text" placeholder="Insert your name here..." required>

            <label for="">Email</label>
            <input type="text" placeholder="Insert your email here..." required>

            <label for="">Subject</label>
            <input type="text" placeholder="Type your subject here..." required>

            <label for="">Message</label>
            <textarea  name="" id="" cols="15" rows="15" placeholder ="Type Your message here..." required></textarea>
            
            <div class="btn">
                <button class="submit-btn">Submit</button>
            </div>
        </div>


</section>
    <!-- ------ FOOTER --------- -->
    <div class="footernya">
        <div class="kepala-footer">Let's be Friends!!!</div>

        <div class="logo-logo">
            <div class="lg2">
                <a href="https://www.instagram.com/technoscapebncc/"><img class="logomedsos" src="/logo-logo/ig.png" alt="logo-ig"></a>
                <a href="https://www.facebook.com/bina.nusantara.computer.club"><img class="logomedsos" src="/logo-logo/fb.png" alt="logo-fb"></a>
                <a href="https://twitter.com/bncc_binus?lang=en"><img class="twt" src="/logo-logo/twitter.png" alt="logo-twtr"></a>
                <a href="mailto:technoscape@bncc.net"><img class="logomedsos" src="/logo-logo/mail.png" alt="logo-mail"></a>
                <a href="https://www.linkedin.com/company/bina-nusantara-computer-club/?originalSubdomain=id"><img class="logomedsos" src="/logo-logo/linkedin.png" alt="logo-linkedin"></a>
            </div>
        </div>

        <div class="garis"></div>

        <div class="organized-powered">
            <div class="atas">
                <span class="op-judul">Organized by</span>
                <span class="op-judul">Powered by</span>
            </div>
            <div class="bawah">
                <img class="logoo" src="/logo-logo/bncc.png" alt="">
                <img class="logop" src="/logo-logo/binus.png" alt="">
            </div>
        </div>

        <div class="kakinya">© 2021 Hackathon 4.0, All rights reserved.</div>
    </div>
    <!-- ----------------------- JS -------------------------------- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/nav.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/countdown.js"></script>
    <script src="../js/bgcolornv.js"></script>
    <script src="../js/sponsor.js"></script>
    <script src="../js/hadiah.js"></script>
    <script src="../js/medpar.js"></script>
    <script src="../js/tl.js"></script>
    <!-- <script>
        $(window).scroll(function(){
            $('nav').toggleClass('scrolled',$(this).scrollTop()>50);
        });
    </script> -->
    <!-- <script>
        window.addEventListener('scroll', function(){
            let header = document.querySelector('header');
            let windowpos = window.scrollY > 0;

            header.classList.toggle('scrolling-active',windowpos);
        });
    </script> -->

<script src="../js/faq.js"></script>
</body>
</html>