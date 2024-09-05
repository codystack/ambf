<?php
$page = "Contact";
include "./components/header.php";
include "./components/canvas.php";
include "./components/navbar.php";
?>

    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <div class="shape d-none d-xxl-block cir36"><img src="assets/img/shape/breadcumb.svg" alt="shape"></div>
                <div class="title">
                    <div class="title-heading wow fadeInLeft" data-wow-delay=".3s">Contact Us</div>
                    <h1 class="wow fadeInLeft" data-wow-delay=".6s">Feel Free to Contact and Reach Us Now !</h1>
                </div>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-section fix section-padding">
        <div class="contact-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="contact-info">
                            <h2>Let’s Get In Touch</h2>
                            <p>Great! We’re excited to hear from you and let’s start something special together. call us
                                for any inquery</p>
                            <div class="info-item">
                                <div class="title">Phone</div>
                                <div class="info">+2349160009025, +2349160009024</div>
                            </div>
                            <div class="info-item">
                                <div class="title">Email</div>
                                <div class="info">info@ambeautifiedlifefoundation.org</div>
                            </div>
                            <div class="info-item">
                                <div class="title">Office</div>
                                <div class="info">2 Temidire Street, Isale Ososami<br> Off Ring road, Ibadan.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="contact-form">
                            <div class="contact-form-items">
                                <form action="contact.php.html" id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Fast Name">
                                                <div class="icon">
                                                    <i class="fa-regular fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name12" placeholder="Last Name">
                                                <div class="icon">
                                                    <i class="fa-regular fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="form-clt">
                                                <input type="text" name="number" id="number" placeholder="Phone Number">
                                                <div class="icon">
                                                    <i class="fa-regular fa-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email3" placeholder="Email Address">
                                                <div class="icon">
                                                    <i class="fa-regular fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Tell us about your interest in"></textarea>
                                                <div class="icon">
                                                    <i class="fa-sharp fa-light fa-pencil"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".4s">
                                            <button type="submit" class="btn-wrapper wow fadeInUp" data-wow-delay=".5s">
                                                 <span class="theme-btn style3">Send to Us </span> <span class="arrow-btn style2"><i class="fa-solid fa-arrow-up-right"></i></span> 
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="office-google-map-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63306.34952953243!2d3.8162901191394!3d7.393410409708597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10398d0061c41afd%3A0x7918dd4260cbedee!2sAmBeautified%20Life%20Charity%20Shop!5e0!3m2!1sen!2sng!4v1725407492901!5m2!1sen!2sng" style="border:0;" allowfullscreen loading="lazy"></iframe>
    </div>

<?php include "./components/footer.php"; ?>