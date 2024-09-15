<?php
include "./components/header.php";
include "./components/canvas.php";
include "./components/navbar.php";
include "./auth/donation-list.php";
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


    <section class="about-us-section fix section-padding">
        <div class="container">
            <div class="about-wrapper style1">
                <div class="row gx-80">
                    <div class="col-8 mx-auto">
                        <div class="section-title text-center">
                            <h2 class="mt-15 text-start wow fadeInUp" data-wow-delay=".3s">Thank you for your donation</h2>
                            <p>We are so grateful for your donation. Your kindness will make a real difference. Thank you!</p>
                        </div>
                        <div class="comment-form-wrap">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="first_name" id="floatingInput" placeholder="john Doe">
                                            <label for="floatingInput">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="last_name" id="floatingInput" placeholder="john Doe">
                                            <label for="floatingInput">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="ebuzzadvert@gmail.com">
                                            <label for="floatingInput">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" name="phone" id="floatingInput" placeholder="080123456647">
                                            <label for="floatingInput">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="address" id="floatingInput" placeholder="Banana Island">
                                            <label for="floatingInput">Residential Address</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="state" id="floatingInput" placeholder="lagos">
                                            <label for="floatingInput">State</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="city" id="floatingInput" placeholder="lekki">
                                            <label for="floatingInput">City</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="ig_handle" id="floatingInput" placeholder="webifyng">
                                            <label for="floatingInput">Instagram Handle</label>
                                        </div>
                                    </div>
                                    <span><?php echo $res ?></span>
                                    <div class="col-lg-6 mt-0">
                                        <button type="submit" name="submit" class="btn-wrapper">
                                                <span class="theme-btn mt-0">Submit</span>
                                                <span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span> 
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "./components/footer.php"; ?>