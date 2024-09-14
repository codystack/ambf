<?php
$page = "Volunteer";
include "./components/header.php";
include "./components/canvas.php";
include "./components/navbar.php";
?>

    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="page-heading">
                <div class="shape d-none d-xxl-block cir36"><img src="assets/img/shape/breadcumb.svg" alt="shape"></div>
                <div class="title">
                    <div class="title-heading wow fadeInLeft" data-wow-delay=".3s">Volunteer</div>
                    <h1 class="wow fadeInLeft" data-wow-delay=".6s">Be the change you want to see in the world</h1>
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


    <section class="about-us-section fix section-padding">
        <div class="container">
            <div class="about-wrapper style1">
                <div class="row gx-80">
                    <div class="col-lg-12 col-xl-6">
                        <div class="about-thumb-wrapper">
                            <img src="assets/img/voluThumb1.jpg" alt="thumb" data-tilt data-tilt-max="20"> 
                            <div class="about-mask-img"> 
                                <img src="assets/img/voluThumb2.png" alt="thumb">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="section-title text-center">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> <span class="mr-7">
                                    <img src="assets/img/icon/starIcon.jpg.png" alt="icon"></span>Every volunteer counts</div>
                            <h2 class="mt-15 text-start wow fadeInUp" data-wow-delay=".3s">Become a Volunteer</h2>
                            <p>Thank you for your desire to join us in our efforts to fight breast cancer, hunger and poverty. Thank you for your time, energy, passion and resources. Your hard work and dedication are greatly appreciated.</p>
                        </div>
                        <div class="comment-form-wrap wow fadeInUp" data-wow-delay="1.2s">
                            <form action="#" id="contact-form" method="POST">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="full_name" id="floatingInput" placeholder="john Doe">
                                            <label for="floatingInput">Full Name</label>
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
                                            <select class="form-select" id="floatingSelectGrid" name="shirt_size">
                                                <option selected disabled value="">Select Your Shirt Size</option>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                                <option>XXL</option>
                                                <option>XXXL</option>
                                            </select>
                                            <label for="floatingSelectGrid">Shirt Size</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
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
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="occupation" id="floatingInput" placeholder="developer">
                                            <label for="floatingInput">Occupation</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-0">
                                        <button type="submit" class="btn-wrapper wow fadeInUp" data-wow-delay=".5s">
                                                <span class="theme-btn mt-0">Apply Now</span>
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