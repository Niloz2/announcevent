@include('layouts.header')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
        <div class="container position-relative">
            <h1>Speaker Profile</h1>
            <p>Discover more about our esteemed speaker and their contribution to this year's conference.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Speaker Profile</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Speaker Section -->
    <section id="speaker" class="speaker section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/speaker.jpg" alt="Speaker" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <div class="details">
                        <h2>Brenden Legros</h2>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                        <p>Brenden Legros is a distinguished speaker known for his insights into technology and
                            innovation. With a career spanning over a decade, he has been instrumental in shaping future
                            leaders through his thought-provoking talks and workshops.</p>

                        <p>At this year's conference, Brenden will delve into the transformative impact of AI and
                            emerging technologies, exploring their potential to drive growth and innovation in various
                            industries. His sessions are known for being engaging, inspiring, and full of actionable
                            insights.</p>

                        <p>Don't miss out on Brenden's session, where he will share his journey, expertise, and
                            practical strategies for leveraging technology to solve real-world challenges. Whether
                            you're a tech enthusiast or a business leader, his talk promises to offer valuable takeaways
                            for everyone.</p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Speaker Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact Us</h2>
            <p>If you would like assistance in announcing your event on our platform, feel free to reach out to us.
                We're here to help you share your event with a wider audience.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Our Office</h3>
                        <p>Mtendeni St, Dodoma City, Dodoma, Tanzania</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>+255 621 929 845</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>support@announcevent.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6367170442772!2d35.74591387336308!3d-6.179357293808089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de5ce91947709%3A0x8ba604675c526800!2sDodoma%20City%20Square!5e0!3m2!1sen!2stz!4v1725716321071!5m2!1sen!2stz"
                        frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>
@include('layouts.footer')
