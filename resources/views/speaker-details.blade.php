@include('layouts.header')

<style>
    /*Start: LodingIndicator Style*/
    .loading-indicator {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
        font-size: 16px;
        color: #007bff;
        font-weight: bold;
    }

    .loading-indicator .spinner {
        width: 24px;
        height: 24px;
        border: 4px solid rgba(0, 123, 255, 0.3);
        /* Lighter blue border */
        border-top: 4px solid #007bff;
        /* Darker blue top border */
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin-right: 10px;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /*End:loadingIndicator style*/
</style>

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
                        <h2>Nicas Lolela</h2>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/nicas-lolela-15b024262/"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>
                        <p>Nicas Lolela is a distinguished speaker known for his insights into technology and
                            innovation. With a career spanning over a decade, he has been instrumental in shaping future
                            leaders through his thought-provoking talks and workshops.</p>

                        <p>At this year's conference, Brenden will delve into the transformative impact of AI and
                            emerging technologies, exploring their potential to drive growth and innovation in various
                            industries. His sessions are known for being engaging, inspiring, and full of actionable
                            insights.</p>

                        <p>Don't miss out on Nicas's session, where he will share his journey, expertise, and
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
                    <form id="contactForm" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>
                            <!-- New Phone Number Input -->
                            <div class="col-md-6">
                                <input type="tel" name="phone" class="form-control"
                                    placeholder="Your Phone Number" required="">
                            </div>

                            <!-- Dropdown for Subject -->
                            <div class="col-md-12">
                                <select name="subject" class="form-control" required="">
                                    <option value="" disabled selected>Select Subject</option>
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Post Announcement Request">Post Announcement Request</option>
                                    <option value="Support Request">Support Request</option>
                                    <option value="Feedback">Feedback</option>
                                    <option value="Complaint">Complaint</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div id="successMessage" class="sent-message" style="display: none;">Your message has
                                    been sent successfully.</div>
                                <!-- Loading Indicator (Spinner with Text) -->
                                <div id="loadingIndicator" style="display: none;" class="loading-indicator">
                                    <div class="spinner"></div>
                                    <span>Sending message, please wait...</span>
                                </div>
                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>
<script>
    //Ajax for the Contact Message Submittion
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form from submitting the traditional way

        let formData = new FormData(this); // Capture form data

        // Show loading indicator
        document.getElementById('loadingIndicator').style.display = 'block';

        // Hide success message if it's shown from a previous submission
        document.getElementById('successMessage').style.display = 'none';

        fetch('{{ route('send.email') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Hide loading indicator when the request is complete
                document.getElementById('loadingIndicator').style.display = 'none';
                if (data.success) {
                    // Show success message
                    document.getElementById('successMessage').style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>
@include('layouts.footer')
