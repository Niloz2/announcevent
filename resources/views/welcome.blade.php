@include('layouts.header')<!--Include the Header of the website-->

<!-- CSS for Sliding Message -->
<style>
    .sliding-message-container {
        background-color: #000;
        /* Background color */
        color: #fff;
        /* Text color */
        text-align: center;
        padding: 2px 0;
        position: fixed;
        /* Fixed at the top */
        width: 100%;
        z-index: 1000;
        top: 0;
        /* Stick it to the top of the page */
    }

    .sliding-message p {
        margin: 0;
        color: white;
        font-size: 12px;
        animation: slide-message 25s linear infinite;
        /* Sliding animation */
    }

    @keyframes slide-message {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    i {
        margin-right: 5px;
        /* Adds space between icon and text */
    }

    .fa-phone-alt {
        color: green;
        /* Call icon color */
    }

    .fa-whatsapp {
        color: #25D366;
        /* WhatsApp color */
    }

    /*Style for the Book Ticket cards.*/
    /* Card Hover Effect */
    .card {
        transition: background 0.4s ease, transform 0.4s ease;
        background: linear-gradient(135deg, #fff, #e6e6e6);
    }

    .card:hover {
        background: linear-gradient(135deg, #007bff, #00d4ff);
        /* Animated background on hover */
        transform: translateY(-10px);
        /* Add a slight lift on hover */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        /* Add shadow effect */
    }

    /* Button hover effect */
    .btn {
        transition: background 0.3s ease;
    }

    .btn:hover {
        background-color: #0056b3;
        /* Change button color on hover */
        color: #fff;
    }

    /*End Style for Book Ticket cards*/

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

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class="">

        <div id="videoCarousel" class="container d-flex flex-column align-items-center text-center mt-auto carousel slide"
            data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- First Video Item -->
                <div class="carousel-item active" data-aos="fade-up" data-aos-delay="100">
                    <h2>Graduate Resource Exchange Forum (GREF) 2024</h2>
                    <p>2024! From October 7-11 at the Jakaya Kikwete Convention Centre in Dodoma, Tanzania,</p>
                    <div class="mt-3">
                        <a href="https://www.youtube.com/watch?v=-BXfQSQ-anc"
                            class="glightbox pulsating-play-btn mt-3"></a>
                    </div>
                </div>
                <!-- Second Video Item -->
                <div class="carousel-item" data-aos="fade-up" data-aos-delay="100">
                    <h2>The Startup Week Event</h2>
                    <p>18-22 November 2024, Julius Nyerere International Convention Centre (JNICC) - Dar es salaam</p>
                    <div class="mt-3">
                        <a href="https://www.youtube.com/watch?v=-BXfQSQ-anc"
                            class="glightbox pulsating-play-btn mt-3"></a>
                    </div>
                </div>
                <!-- Third Video Item -->
                <div class="carousel-item" data-aos="fade-up" data-aos-delay="200">
                    <h2>Tanzania International Manufacturers Expo (TIMEXPO) 2024</h2>
                    <p>26-30 September 2024, Dar es Salaam - Mwalimu J. K. Nyerere Trade Fair Ground, Dar es Salaam,
                        Tanzania</p>
                    <div class="mt-3">
                        <a href="https://www.youtube.com/watch?v=WAYfdJrdZcQ"
                            class="glightbox pulsating-play-btn mt-3"></a>
                    </div>
                </div>
                <!-- Fourth Video Item -->
                <div class="carousel-item" data-aos="fade-up" data-aos-delay="200">
                    <h2>Tanzania Annual ICT Conference 2024</h2>
                    <p>13-17 October 2024, Julius Nyerere International Convention Centre (JNICC) - Dar es salaam</p>
                    <div class="mt-3">
                        <a href="https://www.youtube.com/watch?v=Dlzt1FttXGw"
                            class="glightbox pulsating-play-btn mt-3"></a>
                    </div>
                </div>
            </div>
            <!-- Sliding Message -->
            <div class="sliding-message-container">
                <div class="sliding-message" data-aos="fade-in">
                    <p>
                        <i class="fas fa-phone-alt"></i> Call Us Via +255 621 929 845
                        or <i class="fab fa-whatsapp"></i> WhatsApp Us to announce your event with us.
                    </p>

                    <!-- Include Font Awesome for icons -->
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="about-info mt-auto position-relative">
            <div class="container position-relative" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 id="event-title">About The Event</h2>
                        <p id="event-description">Join us for the Graduate Resource Exchange Forum (GREF) 2024! From
                            October 7-11 at the Jakaya Kikwete Convention Centre in Dodoma, Tanzania, we’re bringing
                            together over 50 employers and 2,000+ graduates for an event you won’t want to miss! ✨
                            Network with top employers ✨ Gain insights from industry leaders ✨ Empower your career and
                            entrepreneurial journey Organized by @strategiusadvisory in partnership with the Dodoma
                            Regional Administration, GREF 2024 is your gateway to unlocking potential and driving social
                            and economic change.</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>Where</h3>
                        <p id="event-location">Jakaya Kikwete Convention Centre in Dodoma, Tanzania,
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <h3>When</h3>
                        <p id="event-date">Thursday to Monday<br>07-11 October 2024 9:00 AM - 5:00 PM</p>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->


    <!-- Speakers Section -->
    <section id="speakers" class="speakers section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Event Speakers<br></h2>

        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/img/speakers/speaker-1.jpeg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="/speaker-details">Nicas Lolela</a></h4>
                                <span>Technology & AI Visionary</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="assets/img/speakers/speaker-1.jpeg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="/speaker-details">Michael Kilunga</a></h4>
                                <span>Expert in Leadership & Innovation</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/img/speakers/speaker-1.jpeg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="/speaker-details">David Bomani</a></h4>
                                <span>Strategic Marketing Specialist</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <img src="assets/img/speakers/speaker-1.jpeg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="/speaker-details">Isaya Mtembezi</a></h4>
                                <span>Business Strategy Consultant</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Speakers Section -->

    {{-- <!-- Schedule Section -->
    <section id="schedule" class="schedule section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Event Schedule<br></h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Day 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Day 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Day 3</a>
          </li>
        </ul>

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius necessitatibus voluptatem quis labore perspiciatis quia.</h3>

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>09:30 AM</time></div>
              <div class="col-md-10">
                <h4>Registration</h4>
                <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-1-2.jpg" alt="Brenden Legros">
                </div>
                <h4>Keynote <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-2-2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-3-2.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-4-2.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div><!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-1-2.jpg" alt="Brenden Legros">
                </div>
                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-2-2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-3-2.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-4-2.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div><!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-2-2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-3-2.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-1-2.jpg" alt="Brenden Legros">
                </div>
                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-4-2.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="assets/img/speakers/speaker-6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div><!-- End Schdule Day 3 -->

        </div>

      </div>
    </section><!-- /Schedule Section --> --}}

    <!-- Venue Section -->
    <section id="venue" class="venue section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Event Venue</h2>
            <p>Join us at our centrally located venue for an unforgettable event experience. Conveniently situated for
                easy access and designed to inspire and engage.</p>
        </div><!-- End Section Title -->

        {{-- Added the First event venue --}}
        <div class="container-fluid" data-aos="fade-up">

            <div class="row g-0">
                <div class="col-lg-6 venue-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5783132906877!2d35.7622935!3d-6.1871440999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de54a9cf1697b%3A0xde2e0252de5daa8b!2sJAKAYA%20KIKWETE%20CONVENTION%20CENTRE!5e0!3m2!1sen!2stz!4v1726751193482!5m2!1sen!2stz"
                        frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>

                <div class="col-lg-6 venue-info">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8 position-relative">
                            <h3>Graduate Resource Exchange Forum (GREF) 2024</h3>
                            <p>Join us for the Graduate Resource Exchange Forum (GREF) 2024! From October 7-11 at the
                                Jakaya Kikwete Convention Centre in Dodoma, Tanzania, we’re bringing together over 50
                                employers and 2,000+ graduates for an event you won’t want to miss! ✨ Network with top
                                employers ✨ Gain insights from industry leaders ✨ Empower your career and
                                entrepreneurial journey Organized by @strategiusadvisory in partnership with the Dodoma
                                Regional Administration, GREF 2024 is your gateway to unlocking potential and driving
                                social and economic change.​</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- Added the second event venue --}}
        <div class="container-fluid" data-aos="fade-up">

            <div class="row g-0">
                <div class="col-lg-6 venue-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.218339738556!2d39.2758771733486!3d-6.864417793134152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c358044fd2c7d%3A0xbc0715eaf25fade8!2sSabasaba%20International%20Trade%20Fair!5e0!3m2!1sen!2stz!4v1726579357612!5m2!1sen!2stz"
                        frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>

                <div class="col-lg-6 venue-info">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8 position-relative">
                            <h3>Tanzania International Manufacturers Expo (TIMEXPO) 2024</h3>
                            <p>Our event will be held at the Saba Saba Grounds in Dar es Salaam-Tanzania, this expo
                                focuses on showcasing Tanzania’s manufacturing potential. It’s a great opportunity to
                                network with industry professionals and investors interested in local businesses​</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- Added the third event venue --}}
        <div class="container-fluid" data-aos="fade-up">

            <div class="row g-0">
                <div class="col-lg-6 venue-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18257.529887593948!2d35.73683316467911!3d-6.1781221213465844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de54a9cf1697b%3A0xde2e0252de5daa8b!2sJAKAYA%20KIKWETE%20CONVENTION%20CENTRE!5e0!3m2!1sen!2stz!4v1725718089979!5m2!1sen!2stz"
                        frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>

                <div class="col-lg-6 venue-info">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8 position-relative">
                            <h3>THE STARTUP<br><span>WEEK</span> CONFERENCE</h3>
                            <p>Our event will be held at the Julius Nyerere International Convention Centre (JNICC) -
                                Dar es salaam, a
                                state-of-the-art
                                facility designed to foster collaboration and innovation. The venue is easily accessible
                                and provides a professional yet welcoming atmosphere for attendees to engage and
                                network.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- Added the fourth event venue for the Tanzania Annual ICT Conference 2024 --}}
        <div class="container-fluid" data-aos="fade-up">

            <div class="row g-0">
                <div class="col-lg-6 venue-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15846.641953430202!2d39.27361105187985!3d-6.81108695003068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4b13ab3b27db%3A0x5e80e2765959908e!2sJulius%20Nyerere%20International%20Convention%20Centre!5e0!3m2!1sen!2stz!4v1725806252276!5m2!1sen!2stz"
                        frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>

                <div class="col-lg-6 venue-info">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8 position-relative">
                            <h3>Tanzania Annual ICT Conference 2024</h3>
                            <p>Unleashing the Power of Artificial Intelligence and Robotics for socio-economic
                                Transformation</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="assets/img/venue-gallery/venue-gallery-1.jpg" class="glightbox"
                            data-gall="venue-gallery">
                            <img src="assets/img/venue-gallery/venue-gallery-1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="assets/img/venue-gallery/venue-gallery-2.jpg" class="glightbox"
                            data-gall="venue-gallery">
                            <img src="assets/img/venue-gallery/venue-gallery-2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="assets/img/venue-gallery/venue-gallery-3.jpg" class="glightbox"
                            data-gall="venue-gallery">
                            <img src="assets/img/venue-gallery/venue-gallery-3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="assets/img/venue-gallery/venue-gallery-4.jpg" class="glightbox"
                            data-gall="venue-gallery">
                            <img src="assets/img/venue-gallery/venue-gallery-4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="assets/img/venue-gallery/venue-gallery-5.jpg" class="glightbox"
                            data-gall="venue-gallery">
                            <img src="assets/img/venue-gallery/venue-gallery-5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="assets/img/venue-gallery/venue-gallery-6.jpg" class="glightbox"
                            data-gall="venue-gallery">
                            <img src="assets/img/venue-gallery/venue-gallery-6.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="assets/img/venue-gallery/venue-gallery-7.jpg" class="glightbox"
                            data-gall="venue-gallery">
                            <img src="assets/img/venue-gallery/venue-gallery-7.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="assets/img/venue-gallery/venue-gallery-8.jpg" class="glightbox"
                            data-gall="venue-gallery">
                            <img src="assets/img/venue-gallery/venue-gallery-8.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section><!-- /Venue Section -->

    <!-- Hotels Section -->
    <section id="hotels" class="hotels section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Hotels</h2>
            <p>Explore the Conference Nearby Hotels</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="assets/img/Hyatt-Regency-Hotel-DSM.jpg" alt="" class="img-fluid">
                        </div>
                        <h3><a href="https://www.booking.com/hotel/tz/hyatt-regency-dar-es-salaam-the-kilimanjaro.en-gb.html?aid=357028&label=bin859jc-1DCAUo6AFCLmp1bGl1cy1ueWVyZXJlLWludGVybmF0aW9uYWwtY29udmVudGlvbi1jZW50cmVICVgDaOgBiAEBmAEJuAEXyAEM2AED6AEB-AEDiAIBqAIDuAKw86S3BsACAdICJGQ3NGRlYzk5LTk3NWUtNDkxNS1iYjNmLTA5YzU2NGY1OWY3MdgCBOACAQ#map_opened-hotel_header"
                                class="stretched-link" target="_blank">Hyatt Regency Dar es Salaam, The
                                Kilimanjaro</a></h3>
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p>650m from the JNICC Venue</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="assets/img/Sheraton-Hotel-DSM.jpg" alt="" class="img-fluid">
                        </div>
                        <h3><a href="https://www.booking.com/hotel/tz/new-africa.en-gb.html?aid=357028&label=bin859jc-1DCAUo6AFCLmp1bGl1cy1ueWVyZXJlLWludGVybmF0aW9uYWwtY29udmVudGlvbi1jZW50cmVICVgDaOgBiAEBmAEJuAEXyAEM2AED6AEB-AEDiAIBqAIDuAKw86S3BsACAdICJGQ3NGRlYzk5LTk3NWUtNDkxNS1iYjNmLTA5YzU2NGY1OWY3MdgCBOACAQ#map_opened-hotel_header"
                                class="stretched-link" target="_blank">Four Points by Sheraton Dar es Salaam New
                                Africa</a></h3>
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p>750m from the JNICC Venue</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="assets/img/Crownie-Plaza-Hotel-DSM.jpg" alt="" class="img-fluid">
                        </div>
                        <h3><a href="https://www.booking.com/hotel/tz/crowne-plaza-dar-es-salaam-an-ihg.en-gb.html?aid=357028&label=bin859jc-1DCAUo6AFCLmp1bGl1cy1ueWVyZXJlLWludGVybmF0aW9uYWwtY29udmVudGlvbi1jZW50cmVICVgDaOgBiAEBmAEJuAEXyAEM2AED6AEB-AEDiAIBqAIDuAKw86S3BsACAdICJGQ3NGRlYzk5LTk3NWUtNDkxNS1iYjNmLTA5YzU2NGY1OWY3MdgCBOACAQ#map_opened-hotel_header"
                                class="stretched-link" target="_blank">Crowne Plaza - Dar Es Salaam, an IHG Hotel</a>
                        </h3>
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p>800m from the JNICC Venue</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="assets/img/Mgulani-Hotel.jpg" alt="" class="img-fluid">
                        </div>
                        <h3><a href="https://www.booking.com/hotel/tz/mgulani-lodge.en-gb.html?aid=1181029&label=msn--79920942892651%3Atidat-2331720565599998%3Aloc-189%3Aneo%3Amtb%3Alp154525%3Adec%3AqsHotels%20near%20sabasaba%20Grounds%20Dar%20Es%20Salaam&sid=5fd441e6d84f927bf7cfd6581b3a1e78&dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=distance_from_search;srepoch=1726579843;srpvid=c8045ecd71790316;type=total;ucfs=1&#map_opened-hotel_header"
                                class="stretched-link" target="_blank">Mgulani Lodge Hotel</a>
                        </h3>
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p>0.9km from the Saba Saba Grounds Venue</p>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>

    </section><!-- /Hotels Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Gallery</h2>
            <p>Explore various gallery pictures for different events and conferences</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/event-gallery/event-gallery-1.jpg"><img
                                src="assets/img/event-gallery/event-gallery-1.jpg" class="img-fluid"
                                alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/event-gallery/event-gallery-2.jpg"><img
                                src="assets/img/event-gallery/event-gallery-2.jpg" class="img-fluid"
                                alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/event-gallery/event-gallery-3.jpg"><img
                                src="assets/img/event-gallery/event-gallery-3.jpg" class="img-fluid"
                                alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/event-gallery/event-gallery-4.jpg"><img
                                src="assets/img/event-gallery/event-gallery-4.jpg" class="img-fluid"
                                alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/event-gallery/event-gallery-5.jpg"><img
                                src="assets/img/event-gallery/event-gallery-5.jpg" class="img-fluid"
                                alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/event-gallery/event-gallery-6.jpg"><img
                                src="assets/img/event-gallery/event-gallery-6.jpg" class="img-fluid"
                                alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/event-gallery/event-gallery-7.jpg"><img
                                src="assets/img/event-gallery/event-gallery-7.jpg" class="img-fluid"
                                alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/event-gallery/event-gallery-8.jpg"><img
                                src="assets/img/event-gallery/event-gallery-8.jpg" class="img-fluid"
                                alt=""></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Gallery Section -->

    {{-- <!-- Sponsors Section -->
    <section id="sponsors" class="sponsors section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Sponsors</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0 clients-wrap">

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

            </div>

        </div>

    </section><!-- /Sponsors Section --> --}}

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Common questions regarding our event announcements and how they work.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                    <div class="faq-container">

                        <div class="faq-item faq-active">
                            <h3>How do I stay updated with upcoming events?</h3>
                            <div class="faq-content">
                                <p>You can subscribe to our newsletter or follow us on our social media platforms to
                                    receive timely updates about upcoming events and announcements.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Where are events usually announced?</h3>
                            <div class="faq-content">
                                <p>Events are announced through our official website, social media channels, and email
                                    notifications for subscribers. You can also check the events section on our website
                                    for the latest updates.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Can I register for events online?</h3>
                            <div class="faq-content">
                                <p>Yes, most of our events offer online registration through the event details page. You
                                    can also find a registration link in the event announcements.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>How will I be notified if an event is postponed or canceled?</h3>
                            <div class="faq-content">
                                <p>If an event is postponed or canceled, we notify attendees via email and update the
                                    event information on our website and social media pages.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Is there a fee to attend the events?</h3>
                            <div class="faq-content">
                                <p>Some of our events are free, while others may have a registration fee. The event
                                    details will clearly state whether any payment is required.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>How can I become a speaker or host at an event?</h3>
                            <div class="faq-content">
                                <p>If you're interested in speaking or hosting at one of our events, you can contact us
                                    through the event page or send an inquiry to our email. We'll be happy to provide
                                    more information about speaker opportunities.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div><!-- End Faq Column-->

            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Buy Tickets Section -->
    <section id="buy-tickets" class="buy-tickets section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Buy Tickets</h2>
            <p>Choose the best ticket option that suits your needs and enjoy a world-class conference experience</p>
        </div><!-- End Section Title -->
        <div class="container">
            <!-- Event Buy Ticket Cards for  Conferences -->
            <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="50">
                <!-- Event Card forUnleashing the Power of Artificial Intelligence and Robotics for socio-economic Transformation Conference -->
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">Tanzania Annual ICT Conference 2024</h3>
                            <a href="https://ems.ictc.go.tz/" class="btn btn-primary" target="_blank">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Event Card for Startup Week Conference -->
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">Startup Week</h3>
                            <a href="#" class="btn btn-primary" target="_blank">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Event Card for Tanzania International Manufacturers Expo (TIMEXPO) 2024 -->
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">Tanzania International Manufacturers Expo (TIMEXPO) 2024</h3>
                            <a href="https://www.eventbrite.com/e/tanzania-international-manufacturers-expo-timexpo-2024-tickets-1009198679417?msockid=09345d7fa0e66fd1320849a1a11b6e96"
                                class="btn btn-primary" target="_blank">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Event Card for Graduate Resource Exchange Forum (GREF) 2024 -->
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">Graduate Resource Exchange Forum (GREF) 2024</h3>
                            <a href="https://allevents.in/dodoma/graduate-resource-exchange-forum-gref-2024/200027038209338"
                                class="btn btn-primary" target="_blank">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Add more event cards as needed -->
            </div>
        </div>
        </div>
    </section><!-- /Buy Tickets Section -->



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
                        data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Our Office</h3>
                        <p>Mtendeni St, Dodoma City, Dodoma, Tanzania</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>+255 621 929 845</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>support@announcevent.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

        </div><!-- End Container -->


        <div class="row gy-4 mt-1">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6367170442772!2d35.74591387336308!3d-6.179357293808089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de5ce91947709%3A0x8ba604675c526800!2sDodoma%20City%20Square!5e0!3m2!1sen!2stz!4v1725716321071!5m2!1sen!2stz"
                    frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="col-lg-6">
                <form id="contactForm" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
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
                            <!-- Error Message -->
                            <div id="errorMessage" class="sent-message bg-light" style="display: none; color: red;">
                                An error occurred. Please Verify Your Details and try again.
                            </div>

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
    // Ensure the DOM is fully loaded before running the script
    document.addEventListener('DOMContentLoaded', function() {
        // Define jQuery selectors for the carousel and the elements we want to dynamically update
        const videoCarousel = document.getElementById('videoCarousel');
        const eventTitle = document.getElementById('event-title');
        const eventDescription = document.getElementById('event-description');
        const eventLocation = document.getElementById('event-location');
        const eventDate = document.getElementById('event-date');

        // Array of event details to match each carousel slide
        const eventDetails = [{
                // First event details (this corresponds to the first carousel item)
                title: "About The Graduate Resource Exchange Forum (GREF) 2024",
                description: "Join us for the Graduate Resource Exchange Forum (GREF) 2024! From October 7-11 at the Jakaya Kikwete Convention Centre in Dodoma, Tanzania, we’re bringing together over 50 employers and 2,000+ graduates for an event you won’t want to miss! ✨ Network with top employers ✨ Gain insights from industry leaders ✨ Empower your career and entrepreneurial journey Organized by @strategiusadvisory in partnership with the Dodoma Regional Administration, GREF 2024 is your gateway to unlocking potential and driving social and economic change.",
                location: "Jakaya Kikwete Convention Centre in Dodoma, Tanzania,",
                date: "Thursday to Monday<br>07-11 October 2024"
            },
            {
                // Second event details (this corresponds to the first carousel item)
                title: "About The Startup Week Conference",
                description: "The Annual Startup Week Conference brings together professionals from all over the world to discuss the latest trends in Startups.",
                location: "Julius Nyerere International Convention Centre (JNICC) - Dar es salaam",
                date: "Monday to Wednesday<br>18-22 November 2024"
            },
            {
                // Third event details (this corresponds to the second carousel item)
                title: "About The Tanzania International Manufacturers Expo (TIMEXPO) 2024 Conference",
                description: "This expo focuses on showcasing Tanzania’s manufacturing potential. It’s a great opportunity to network with industry professionals and investors interested in local businesses​",
                location: "Dar es Salaam - Mwalimu J. K. Nyerere Trade Fair Ground, Dar es Salaam, Tanzania",
                date: "Thursday to Monady<br>26-30 September 2024"
            },
            {
                // Fourth event details (this corresponds to the third carousel item)
                title: "About Unleashing the Power of Artificial Intelligence and Robotics for socio-economic Transformation",
                description: "The Tanzania Annual ICT Conference 2024 focuses on Unleashing the Power of Artificial Intelligence and Robotics for socio-economic Transformation.",
                location: "Julius Nyerere International Convention Centre (JNICC) - Dar es salaam, Tanzania",
                date: "Sunday to Thursday<br>13-17 October 2024"
            }
            // You can add more event details here if there are additional slides
        ];
        // Listen for the 'slide.bs.carousel' event, which fires when the carousel is about to slide to another item
        videoCarousel.addEventListener('slide.bs.carousel', function(event) {
            // 'event.to' provides the index of the upcoming carousel item (0 for the first slide, 1 for the second slide, etc.)
            const index = event.to; // Get the index of the next slide

            // Get the corresponding event details from the array based on the active carousel item's index
            const details = eventDetails[index];

            // Update the text for the title, description, location, and date based on the new slide
            eventTitle.innerHTML = details.title;
            eventDescription.innerHTML = details.description;
            eventLocation.innerHTML = details.location;
            eventDate.innerHTML = details.date;
        });
    });

    //Ajax for the Contact Message Submittion
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form from submitting the traditional way

        let formData = new FormData(this); // Capture form data

        // Show loading indicator
        document.getElementById('loadingIndicator').style.display = 'block';

        // Hide success message if it's shown from a previous submission
        document.getElementById('successMessage').style.display = 'none';
        const errorMessage = document.getElementById('errorMessage');
        // Hide error message if it's shown from a previous submission
        errorMessage.style.display = 'none';

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
                } else {
                    // Show error message
                    errorMessage.style.display = 'block';
                }
            })
            .catch(error => {
                // Hide loading indicator
                loadingIndicator.style.display = 'none';
                console.error('Error:', error);
                // Show error message
                errorMessage.style.display = 'block';
            });
    });
</script>
@include('layouts.footer')<!--Include the footer of the website-->
