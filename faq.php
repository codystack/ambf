<?php
$page = "FAQ";
include "./components/header.php";
include "./components/canvas.php";
include "./components/navbar.php";
?>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <div class="shape d-none d-xxl-block cir36"><img src="assets/img/shape/breadcumb.svg" alt="shape"></div>
                <div class="title">
                    <div class="title-heading wow fadeInLeft" data-wow-delay=".3s">Faq Page</div>
                    <h1 class="wow fadeInLeft" data-wow-delay=".6s">There’s Donation of Center Can Do Question</h1>
                </div>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Faq
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- Faq Section    S T A R T -->
    <div class="faq-section fix section-padding">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xl-5">
                    <div class="faq-thumb fix rounded-3">
                        <img class="rounded-3" src="assets/img/faq/faqThumb1.jpg" alt="thumb">
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="faq-content style-1">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordion">
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                            aria-controls="faq1">
                                            How Can I Participate?
                                        </button>
                                    </h5>
                                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Participating in an initiative, project, or organization usually involves
                                            several steps depending on the context.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                            aria-controls="faq2">
                                            Whom Do I Contact If I Wish To Volunteer?
                                        </button>
                                    </h5>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes, we welcome visitors who are interested in seeing our projects or
                                            facilities your request. Where does my donation go?
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                            Will My Contributions Be Appreciated?
                                        </button>
                                    </h5>
                                    <div id="faq3" class="accordion-collapse show" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Contributions are often appreciated in different ways depending on the
                                            context. If you're asking in the context of work, community, or a project.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                            aria-controls="faq4">
                                            Who Do I Contact For Press Related Inquaries?
                                        </button>
                                    </h5>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            For press-related inquiries, you typically want to contact the Public
                                            Relations (PR) or Communications department of the organization you're
                                            interested in.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                            aria-controls="faq5">
                                            How can charity help people?
                                        </button>
                                    </h5>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Charity plays a crucial role in helping people in various ways. Here's how
                                            charitable efforts can make a significant impact.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Faq Section    S T A R T -->
    <div class="faq-section fix section-padding bg-color2">
        <div class="faq-wrapper">
            <div class="shape1 d-none d-xxl-block"><img src="assets/img/shape/faqShape1_1.svg" alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img src="assets/img/shape/faqShape1_2.svg" alt="shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="faq-items text-center">
                            <img src="assets/img/shape/faqShape1_3.svg" alt="shape">
                            <h1>Still have questions?</h1>
                            <p>Can’t find the answer you’re looking for? Please chat to our friendly team!</p>
                            <div class="btn-wrapper wow fadeInUp" data-wow-delay=".5s">
                                <a href="contact.html"> <span class="theme-btn"> Get in Touch
                                    </span><span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>