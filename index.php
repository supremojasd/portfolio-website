<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE-edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Responsive Personal Web Portfolio</title>
    <!-- CSS FILES -->

    <link rel="stylesheet" href="style2.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- ==== STYLES SWITCHER  ==== -->
    <link rel="stylesheet" href="skins/color-1.css" title="color-1" class="alternate-style" disabled >
    <link rel="stylesheet" href="skins/color-2.css" title="color-2" class="alternate-style" disabled >
    <link rel="stylesheet" href="skins/color-3.css" title="color-3" class="alternate-style" disabled >
    <link rel="stylesheet" href="skins/color-4.css" title="color-4" class="alternate-style" disabled >
    <link rel="stylesheet" href="skins/color-5.css" title="color-5" class="alternate-style"  >
    <link rel="stylesheet" href="style-switcher.css">
</head>
<body class="dark">
    <!-- MAIN CONTAINER START -->

    <div class="main-container">
    <!-- ASIDE START -->
    <div class="aside">
        <div class="logo">
            <a href="#home"><span>Port</span>folio</a>
        </div>
        <div class="nav-toggler">
            <span></span>
        </div>
        <ul class="nav">
            <li><a href="#home" class="active"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#about"><i class="fa fa-user"></i> About</a></li>
            <!-- <li><a href="#"><i class="fa fa-list"></i> Services</a></li> -->
            <li><a href="#portfolio"><i class="fa fa-briefcase"></i> Portfolio</a></li>
            <li><a href="#contact"><i class="fa fa-comment"></i> Contact</a></li>
        </ul>
    </div>
</div>
        <!-- ASIDE END -->
        <!-- MAIN CONTENT START-->
         <div class="main content">
           <!-- HOME SECTION START -->
<section class="home active section" id="home">
    <div class="container">
        <div class="row">
            <div class="home-info padd-15">
                <h3 class="hello">Hello, my name is <span class="name">John Anthony</span></h3>
                <h3 class="my-profession">I'm a <span class="typing">Computer Science Student</span></h3>
                <p>I will work hard to the best of my ability using my knowledge and skills.
                   A position where I can use my skills and experience to gain mastery of my
                   duties that will contribute to the productivity and profit of the company.</p>
                <a href="#about"  data-secion-index="1" class="btn more-about-me">More About Me</a>
            </div>
            <div class="home-img padd-15">
                <img src="images/anthony.jpg" class="responsive-image" alt="John Anthony">
            </div>
        </div>
    </div>
</section>
<!-- HOME SECTION END -->
            <!-- ABOUT SECTION START-->
             <section class="about section " id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2> About Me</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="about-content padd-15">
                        <div class="row">
                            <div class="about-text padd-15">
                                <h3><span> I'm John Anthony  Jr. N. San Diego</span></h3>
                                <p>Hello! I'm John Anthony Jr. N. San Diego, and I'm currently pursuing a Bachelor of Science in Computer Science. As a working student, I bring both academic knowledge and real-world experience to the table. My journey in computer science has equipped me with skills in programming, problem-solving, and critical thinking. Balancing work and study has taught me the value of time management, perseverance, and dedication. I am passionate about technology and constantly seek opportunities to learn and grow in this ever-evolving field. I look forward to contributing to innovative projects and making a meaningful impact in the tech industry.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="personal-info padd-15">
                                <div class="row">
                                    <div class="info-item padd-15">
                                        <p>Birthday : <span> January 03, 2002 </span></p>
                                    </div>
                                    <div class="info-item padd-15">
                                        <p>Age : <span>22</span></p>
                                    </div>
                                    <!-- <div class="info-item padd-15"> -->
                                        <!-- <p>Website : <span>www.domain.com</span></p> -->
                                    <!-- </div> -->
                                    <div class="info-item padd-15">
                                        <p>Email : <span>janthonysandiego@gmail.com</span></p>
                                    </div>
                                    <div class="info-item padd-15">
                                        <p>Degree : <span>College</span></p>
                                    </div>
                                    <div class="info-item padd-15">
                                        <p>Phone : <span>+63915 5927 315</span></p>
                                    </div>
                                    <div class="info-item padd-15">
                                        <p>City : <span>Bacoor, Cavite</span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="buttons padd-15">
                                        <a href="Resume/UPDATED RESUME.pdf" class="btn">Download CV</a>
                                        <a href="#contact" data-secion-index="1"  class="btn hire-me">Hire Me</a>
                                    </div>
                                </div>
                            </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <div class="skill-item padd-15">
                                            <h5>CSS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 45%"></div>
                                                <div class="skill-percent">45%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>JS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 20%"></div>
                                                <div class="skill-percent">20%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>PHP</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 36%"></div>
                                                <div class="skill-percent">36%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>HTML</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%"></div>
                                                <div class="skill-percent">76%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>BOOTSTRAP</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%"></div>
                                                <div class="skill-percent">76%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="education padd-15">
                                <h3 class="title">Education</h3>
                                <div class="row">
                                    <div class="timeline-box padd-15">
                                        <div class="timeline shadow-dark">
                                            <!--  ===== TIMELINE ITEM ==== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                            <i class="fa-solid fa-calendar"></i>  2008-2013
                                            </h3>
                                            <h4 class="timeline-title">Elementary</h4>
                                            <p class="timeline--text">BAYANAN ELEMENTARY SCHOOL - BACOOR, CAVITE</p>
                                        </div>
                                        <!--  ===== TIMELINE ITEM ==== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                              <i class="fa fa-calendar"></i>  2013-2014
                                            </h3>
                                            <h4 class="timeline-title">Elementary</h4>
                                            <p class="timeline--text">BAGUMBAYAN CENTRAL SCHOOL - ALBAY, LEGAZPI</p>
                                        </div>
                                        <!--  ===== TIMELINE ITEM ==== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                              <i class="fa fa-calendar"></i>  2014-2018
                                            </h3>
                                            <h4 class="timeline-title">Junior High School</h4>
                                            <p class="timeline--text">LAS PIÑAS EAST NATIONAL HIGH SCHOOL - VERDANT, LAS PIÑAS CITY</p>
                                        </div>
                                        <!--  ===== TIMELINE ITEM ==== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                              <i class="fa fa-calendar"></i>  2018-2020
                                            </h3>
                                            <h4 class="timeline-title">Senior High School</h4>
                                            <p class="timeline--text">DR. FILEMON C AGUILAR MEMORIAL COLLEGE OF LAS PIÑAS - IT CAMPUS</p>
                                        </div>
                                        <!--  ===== TIMELINE ITEM ==== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                              <i class="fa fa-calendar"></i>  2020-2026
                                            </h3>
                                            <h4 class="timeline-title">College</h4>
                                            <p class="timeline--text">CAVITE STATE UNIVERSITY - BACOOR CAMPUS</p>
                                            <p class="timeline--text">BACHELOR OF SCIENCE MAJOR IN COMPUTER SCIENCE</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="experience padd-15">
                                <h3 class="title">Experience</h3>
                                <div class="row">
                                    <div class="timeline-box padd-15">
                                        <div class="timeline shadow-dark">
                                            <!--  ===== TIMELINE ITEM ==== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                            <i class="fa-solid fa-calendar"></i>  December 2017 - May 2018
                                            </h3>
                                            <h4 class="timeline-title">Basteakoy - Mango Shake</h4>
                                            <h4 class="timeline-title">Talon Kwatro, Las Pinas</h4>
                                            <p class="timeline--text">BARTENDER/ SERVICE CREW</p>
                                        </div>
                                        <!--  ===== TIMELINE ITEM ==== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                              <i class="fa fa-calendar"></i>  November 2020 - April 2021
                                            </h3>
                                            <h4 class="timeline-title">Supervalue Inc.</h4>
                                            <h4 class="timeline-title">SM Southmall</h4>
                                            <p class="timeline--text">BAGGER- Probationary</p>
                                        </div>
                                        <!--  ===== TIMELINE ITEM ==== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                              <i class="fa fa-calendar"></i>  May - October 2021
                                            </h3>
                                            <h4 class="timeline-title">Grand Union South Supermarket Inc.</h4>
                                            <h4 class="timeline-title">Filinvest - Alabang</h4>
                                            <p class="timeline--text">BAGGER- Probationary</p>
                                        </div>
                                        <!--  ===== TIMELINE ITEM ==== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                              <i class="fa fa-calendar"></i>  December 2022 - 2024
                                            </h3>
                                            <h4 class="timeline-title">Greenwich Pizza</h4>
                                            <h4 class="timeline-title">Vista Mall - Las Piñas</h4>
                                            <p class="timeline--text">SERVICE CREW - Crew Trainer</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
             </div>
            </section>
             
            <!-- ABOUT SECTION END-->
            <!-- PORTFOLIO SECTION START-->
            <section class="portfolio section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="row">
            <div class="portfolio-heading padd-15">
                <h2>My Projects:</h2>
                <h3>
                    <span>These are the group projects I've worked on with my colleagues. These projects demonstrate how we worked together, utilizing the individual talents of each team member to accomplish our objectives. We overcame a number of challenges by cooperating, from coming up with ideas to putting solutions into practice and honing our work to produce high-quality outcomes. We've gained a great synergy and understanding of one another's viewpoints through these collaborations, which has improved our technical skills and teamwork capabilities in the end. Each project demonstrates both our dedication to working together to provide meaningful solutions and our combined strengths.</span>
                </h3>
            </div>
        </div>
        <div class="row">
            <!--  ===== PORTFOLIO ITEM START ===== -->
            <div class="portfolio">
    <div class="container">
        <div class="image-container">
            <div class="image">
                <a href="https://publuu.com/flip-book/709485/1577489" target="">
                    <img src="images/inventory.jpg" class="lazyload" alt="Inventory Project">
                    <div class="main-row">
                        <div class="row-text">
                            <h5>COMPUTERIZED INVENTORY SYSTEM OF PERFECT BITE </h5>
                            <h4>POS DESIGN</h4>
                        </div>
                        <div class="row-icon">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image">
                <a href="https://publuu.com/flip-book/709485/1577486" target="">
                    <img src="images/calculator.jpg" class="lazyload" alt="Calculator Project">
                    <div class="main-row">
                        <div class="row-text">
                            <h5>CALCULATOR</h5>
                            <h4>JAVA SWING DESIGN</h4>
                        </div>
                        <div class="row-icon">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image">
                <a href="https://publuu.com/flip-book/709485/1577483" target="">
                    <img src="images/ecommerce.jpg" class="lazyload" alt="Ecommerce Project">
                    <div class="main-row">
                        <div class="row-text">
                            <h5>E-COMMERCE (PIECE OF CAKE)</h5>
                            <h4>POS DESIGN</h4>
                        </div>
                        <div class="row-icon">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image">
                <a href="https://publuu.com/flip-book/709485/1577490" target="">
                    <img src="images/kalugdan.jpg"  class="lazyload" alt="Kalugdan Project">
                    <div class="main-row">
                        <div class="row-text">
                            <h5>ONLINE BOOKING SYSTEM(KALUGDAN)</h5>
                            <h4>WEB DESIGN</h4>
                        </div>
                        <div class="row-icon">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image">
                <a href="https://publuu.com/flip-book/709485/1577473" target="">
                    <img src="images/detente.jpg" class="lazyload" alt="Detente Apartment Project">
                    <div class="main-row">
                        <div class="row-text">
                            <h5>DETENTE APARTMENT MANAGEMENT SYSTEM</h5>
                            <h4>MANAGEMENT SYSTEM</h4>
                        </div>
                        <div class="row-icon">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image">
                <a href="path/to/project6.pdf" target="_blank">
                    <img src="images/6.jpg" class="lazyload" alt="Project 6">
                    <div class="main-row">
                        <div class="row-text">
                            <h5>DETENTE APARTMENT MANAGEMENT SYSTEM</h5>
                            <h4>MANAGEMENT SYSTEM</h4>
                        </div>
                        <div class="row-icon">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image">
                <a href="path/to/project6.pdf" target="_blank">
                    <img src="images/6.jpg" class="lazyload" alt="Project 6">
                    <div class="main-row">
                        <div class="row-text">
                            <h5>DETENTE APARTMENT MANAGEMENT SYSTEM</h5>
                            <h4>MANAGEMENT SYSTEM</h4>
                        </div>
                        <div class="row-icon">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image">
                <a href="path/to/project6.pdf" target="_blank">
                    <img src="images/6.jpg" class="lazyload" alt="Project 6">
                    <div class="main-row">
                        <div class="row-text">
                            <h5>DETENTE APARTMENT MANAGEMENT SYSTEM</h5>
                            <h4>MANAGEMENT SYSTEM</h4>
                        </div>
                        <div class="row-icon">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image">
                <a href="path/to/project6.pdf" target="_blank">
                    <img src="images/6.jpg" class="lazyload" alt="Project 6">
                    <div class="main-row">
                        <div class="row-text">
                            <h5>DETENTE APARTMENT MANAGEMENT SYSTEM</h5>
                            <h4>MANAGEMENT SYSTEM</h4>
                        </div>
                        <div class="row-icon">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

        </div>
        <!-- Popup Image Container -->
        <div class="popup-image">
            <span>&times;</span>
            <img src="" alt="Popup Image">
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.image-container img').forEach(image => {
        image.onclick = () => {
            document.querySelector('.popup-image').style.display = 'block';
            document.querySelector('.popup-image img').src = image.getAttribute('src');
        };
    });

    document.querySelector('.popup-image span').onclick = () => {
        document.querySelector('.popup-image').style.display = 'none';
    };
</script>
                     <!--  ===== PORTFOLIO ITEM END ===== -->
                </div>
             </section>
            <!-- PORTFOLIO SECTION END-->
            <!-- CONTACT SECTION START-->
             <section class="contact section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2> Contact Me </h2>
                    </div>
                </div>
                <h3 class="contact-title padd-15">Any Questions? </h3>
                <h4 class="contact-sub-title padd-15">AT YOUR SERVICE</h4>
                <div class="row">
                    <!--  ===== CONTACT INFO ITEM START ===== -->
                      <div class="contact-info-item padd-15">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                        <h4>Contact Me On</h4>
                        <p> +63915-5927-315 </p>
                      </div>
                    <!--  ===== CONTACT INFO ITEM END ===== -->
                <!--  ===== CONTACT INFO ITEM START ===== -->
                <div class="contact-info-item padd-15">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <h4> Email </h4>
                    <p> janthonysandiego@gmail.com</p>
                  </div>
                <!--  ===== CONTACT INFO ITEM END ===== -->
                   <!--  ===== CONTACT INFO ITEM START ===== -->
                <div class="contact-info-item padd-15">
                    <div class="social">
                    <a href="https://www.instagram.com/supremo_jasd/" target="">
                        <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                    <h4>Instagram</h4>
                    <p>supremo_jasd</p>
                  </div>
                <!--  ===== CONTACT INFO ITEM END ===== -->
                <!--  ===== CONTACT INFO ITEM START ===== -->
                <div class="contact-info-item padd-15">
                    <div class="social">
                        <!-- Facebook link with the icon -->
                        <a href="https://www.facebook.com/supremojasd" target="">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </div>
                    <h4>Facebook</h4>
                    <p>supremojasd</p>
                </div>
                <!--  ===== CONTACT INFO ITEM END ===== -->
            </div>
                <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
                <h4 class="contact-sub-title padd-15">I AM VERY RESPONSIVE TO MESSAGES</h4>
               <!--===== CONTACT FORM =====-->
               <form action="https://api.web3forms.com/submit" method="POST">
                <div class="row">
                    <div class="contact-form padd-15">
                        <div class="row">
                            <div class="form-item col-6 padd-15">
                                <div class="form-group">
                                    <input type="hidden" name="access_key" value="d311d4a7-610a-4cd0-b5cb-bb0acd4e7d76">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="form-item col-6 padd-15">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-item col-12 padd-15">
                                <button type="submit" class="btn">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>            
                <!--  ===== CONTACT FORM END ===== -->
            </div>
             </section>
            <!-- CONTACT SECTION END-->
         </div>
        <!-- MAIN CONTENT END-->
        <!-- ==== STYLES SWITCHER START ==== -->
         <div class="style-switcher">
            <div class="style-switcher-toggler s-icon">
                <i class="fas fa-cog fa-spin"></i>
            </div>
            <div class="day-night s-icon">
                <i class="fas "></i>
            </div>
            <h4 >Theme Colors</h4>
            <div class="colors">
                <span class="color-1" onclick="setActiveStyle('color-1')"></span>
                <span class="color-2" onclick="setActiveStyle('color-2')"></span>
                <span class="color-3" onclick="setActiveStyle('color-3')"></span>
                <span class="color-4" onclick="setActiveStyle('color-4')"></span>
                <span class="color-5" onclick="setActiveStyle('color-5')"></span>
            </div>
         </div>
        <!-- ==== STYLES SWITCHER END ==== -->
         <!---------End Section---------->
<section class="end">
	<div class="last-text">
		<p>Design By JASD</p>
	</div>
	<div class="top">
		<a href="#home"><i class="fa-solid fa-angle-up"></i></a>
	</div>
</section>

    <script> </script>

         <!-- FOOTER SECTION DESIGN
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by John Anthony | All rights reserved.</p>
        </div>
       
        <div class="footer-iconTop">
            <a href="#home"><i class="fa-solid fa-angle-up"></i> </a>
        </div>
       
    </footer> -->
      <!-- SCROLL REVEAL JS 
      <script src="https://unpkg.com/scrollreveal"></script> -->
     
      
    <!-- <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script> -->

    <!-- TYPED JS  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js" integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JS FILES -->
    <!-- <script src="image.js"></script>             -->
    <script src="script.js"></script>
    <script src="style-switcher.js"></script>
 </body>
</html>



