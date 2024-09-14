<?php
$page = "Causes";
include "./components/header.php";
include "./components/canvas.php";
include "./components/navbar.php";
?>

    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <div class="shape d-none d-xxl-block cir36"><img src="assets/img/shape/breadcumb.svg" alt="shape"></div>
                <div class="title">
                    <div class="title-heading wow fadeInLeft" data-wow-delay=".3s">Causes</div>
                    <h1 class="wow fadeInLeft" data-wow-delay=".6s">Small acts, big impact.<br>Giving back, one step at a time</h1>
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
                            Her Profile
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="causes-section fix section-padding">
        <div class="causes-wrapper style1">
            <div class="container">
                <div class="causes-card-wrapper style1">
                    <div class="causes-card-item style1 wow fadeInUp" data-wow-delay=".2s">
                        <div class="causes-image  image-anime">
                            <img src="assets/img/orphanage.jpg" alt="thumb">
                            <div class="badge"><a href="donate">DONATE NOW</a></div>
                        </div>
                        <div class="causes-content">
                            <h4 class="title">Orphanage in Congo</h4>
                            <p></p>
                        </div>
                    </div>

                    <div class="causes-card-item style1 wow fadeInUp" data-wow-delay=".2s">
                        <div class="causes-image  image-anime">
                            <img src="assets/img/engraced.jpg" alt="thumb">
                            <div class="badge"><a href="donate">DONATE NOW</a></div>
                        </div>
                        <div class="causes-content">
                            <h4 class="title">Engraced Life Outreaches</h4>
                            <p></p>
                        </div>
                    </div>

                    <div class="causes-card-item style1 wow fadeInUp" data-wow-delay=".2s">
                        <div class="causes-image  image-anime">
                            <img src="assets/img/idp-camp.jpg" alt="thumb">
                            <div class="badge"><a href="donate">DONATE NOW</a></div>
                        </div>
                        <div class="causes-content">
                            <h4 class="title">Church on the street <span class="small">(IDP camp visit)</span></h4>
                            <p></p>
                        </div>
                    </div>

                    <div class="causes-card-item style1 wow fadeInUp" data-wow-delay=".2s">
                        <div class="causes-image  image-anime">
                            <img src="assets/img/outreach.jpg" alt="thumb">
                            <div class="badge"><a href="donate">DONATE NOW</a></div>
                        </div>
                        <div class="causes-content">
                            <h4 class="title">Outreach by star children dev. initiative</h4>
                            <p></p>
                        </div>
                    </div>

                    <div class="causes-card-item style1 wow fadeInUp" data-wow-delay=".2s">
                        <div class="causes-image  image-anime">
                            <img src="assets/img/bc-outreach.jpg" alt="thumb">
                            <div class="badge"><a href="donate">DONATE NOW</a></div>
                        </div>
                        <div class="causes-content">
                            <h4 class="title">Outreach for breast cancer patients</h4>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/cta.php"; ?>

<?php include "./components/footer.php"; ?>