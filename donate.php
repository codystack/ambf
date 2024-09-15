<?php
$page = "Donate";
include "./components/header.php";
include "./components/canvas.php";
include "./components/navbar.php";
?>

    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <div class="shape d-none d-xxl-block cir36"><img src="assets/img/shape/breadcumb.svg" alt="shape"></div>
                <div class="title">
                    <div class="title-heading wow fadeInLeft" data-wow-delay=".3s">Donate</div>
                    <h1 class="wow fadeInLeft" data-wow-delay=".6s">Small acts, big impact</h1>
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
                            Donate
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="donation-section fix section-padding">
        <div class="donation-wrapper style1">
            <div class="container">
                <div class="shape1_1 cir36 d-none d-xxl-block"><img src="assets/img/icon/starIcon1.png" alt="icon">
                </div>
                <div class="shape1_2 cir36 d-none d-xxl-block"><img src="assets/img/icon/starIcon2.png" alt="icon">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s">
                                <span class="mr-7"> <img src="assets/img/icon/starIcon.png" alt="icon"></span>Donate
                                us
                            </div>
                            <h2 class="mt-15 wow fadeInUp" data-wow-delay=".3s">Small acts, big impact</h2>
                            <p class="text-center wow fadeInUp" data-wow-delay=".5s">A person who donates time, money, experience, skills or talent to help create a better world, can be called a philanthropist.</p>
                        </div>
                        <div class="donation-area1">
                            <ul class="nav nav-pills wow fadeInUp" data-wow-delay=".2s" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link1 active" id="pills-give-once-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-give-once" type="button" role="tab"
                                        aria-controls="pills-give-once" aria-selected="true">Donate in USD($)</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link1" id="pills-give-monthly-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-give-monthly" type="button" role="tab"
                                        aria-controls="pills-give-monthly" aria-selected="false">Donate in NGN(₦)</button>
                                </li>
                            </ul>

                            <div class="tab-content wow fadeInUp" id="pills-tabContent" data-wow-delay=".3s">
                                <div class="tab-pane fade show active" id="pills-give-once" role="tabpanel"
                                    aria-labelledby="pills-give-once-tab" tabindex="0">
                                    <form action="#" id="usdDonation">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="contact-form">
                                                    <label class="contact-label">$</label>
                                                    <input class="form-control contact-input left_default_amount"
                                                        type="number" min="1" id="amount" name="amount" value="50" placeholder="$50">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="selectPricing">
                                        <li class="listItem1" data-amount="0">Custom Amount</li>
                                        <li class="listItem1 active" data-amount="20">$20</li>
                                        <li class="listItem1" data-amount="40">$40</li>
                                        <li class="listItem1" data-amount="60">$60</li>
                                        <li class="listItem1" data-amount="80">$80</li>
                                        <li class="listItem1" data-amount="100">$100</li>
                                    </ul>
                                    <div class="btn-wrapper">
                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#paymentMethodModalUSD">
                                            <span class="theme-btn style3">Donate Now</span>
                                            <span class="arrow-btn style2"><i class="fa-solid fa-arrow-up-right"></i></span>
                                        </button>
                                    </div>
                                    <?php include "./components/modals.php"; ?>
                                </div>
                                <div class="tab-pane fade" id="pills-give-monthly" role="tabpanel"
                                    aria-labelledby="pills-give-monthly-tab" tabindex="0">
                                    <form action="#" id="nairaDonation" method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="contact-form">
                                                    <label class="contact-label">₦</label>
                                                    <input class="form-control contact-input left_default_amount"
                                                        type="number" min="1" id="amount" name="amount" value="5000" placeholder="₦5000">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="selectPricing">
                                        <li class="listItem1" data-amount="0">Custom Amount</li>
                                        <li class="listItem1 active" data-amount="1000">₦1,000</li>
                                        <li class="listItem1" data-amount="5000">₦5,000</li>
                                        <li class="listItem1" data-amount="10000">₦10,000</li>
                                        <li class="listItem1" data-amount="50000">₦50,000</li>
                                        <li class="listItem1" data-amount="100000">₦100,000</li>
                                    </ul>
                                    <div class="btn-wrapper">
                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#paymentMethodModal">
                                            <span class="theme-btn style3">Donate Now</span>
                                            <span class="arrow-btn style2"><i class="fa-solid fa-arrow-up-right"></i></span>
                                        </button>
                                    </div>
                                    <?php include "./components/modals.php"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/cta.php"; ?>
    
<?php include "./components/footer.php"; ?>