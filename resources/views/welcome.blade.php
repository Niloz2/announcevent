@include('layouts.header')<!--Include the Header of the website-->

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class="">

        <div id="videoCarousel" class="container d-flex flex-column align-items-center text-center mt-auto carousel slide"
            data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- First Video Item -->
                <div class="carousel-item active" data-aos="fade-up" data-aos-delay="100">
                    <h2>THE ANNUAL<br><span>MARKETING</span> CONFERENCE</h2>
                    <p>10-12 December 2024, Jakaya Kikwete Convention Center, Dodoma, Tanzania</p>
                    <div class="mt-3">
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                            class="glightbox pulsating-play-btn mt-3"></a>
                    </div>
                </div>
                <!-- Second Video Item -->
                <div class="carousel-item" data-aos="fade-up" data-aos-delay="200">
                    <h2>ENTREPRENEURSHIP CONFERENCE<br><span>GROWTH</span> MINDSETS</h2>
                    <p>15-17 November 2024, Nyerere Square Convention Center, Dodoma, Tanzania</p>
                    <div class="mt-3">
                        <a href="https://www.youtube.com/watch?v=Tilfkfy-9r0"
                            class="glightbox pulsating-play-btn mt-3"></a>
                    </div>
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
                        <p id="event-description">Join us for an insightful and engaging event where industry leaders
                            and professionals come together to discuss the latest trends, challenges, and innovations.
                            Expect inspiring talks, networking opportunities, and hands-on workshops tailored to empower
                            attendees with actionable knowledge and skills.</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>Where</h3>
                        <p id="event-location">Jakaya Kikwete Convention Center</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>When</h3>
                        <p id="event-date">Monday to Wednesday<br>10-12 December 2024 9:00 AM - 5:00 PM</p>
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
                        <img src="assets/img/speakers/speaker-1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="/speaker-details">Walter White</a></h4>
                                <span>Quas alias incidunt</span>
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
                        <img src="assets/img/speakers/speaker-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="/speaker-details">Hubert Hirthe</a></h4>
                                <span>Consequuntur odio aut</span>
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
                        <img src="assets/img/speakers/speaker-3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="/speaker-details">Amanda Jepson</a></h4>
                                <span>Fugiat laborum et</span>
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
                        <img src="assets/img/speakers/speaker-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="/speaker-details">William Anderson</a></h4>
                                <span>Debitis iure vero</span>
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

        <div class="container-fluid" data-aos="fade-up">

            <div class="row g-0">
                <div class="col-lg-6 venue-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.641107035277!2d35.744713223363256!3d-6.1787715938086665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de55bcb3301b1%3A0xe2161c9bbee063a6!2sNyerere%20Square%2C%20Dodoma!5e0!3m2!1sen!2stz!4v1725717513697!5m2!1sen!2stz"
                        frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>

                <div class="col-lg-6 venue-info">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8 position-relative">
                            <h3>ENTREPRENEURSHIP CONFERENCE<br><span>GROWTH</span> MINDSETS</h3>
                            <p>Our event will be held at the Nyerere Square Convention Center in Dodoma-Tanzania, a
                                state-of-the-art
                                facility designed to foster collaboration and innovation. The venue is easily accessible
                                and provides a professional yet welcoming atmosphere for attendees to engage and
                                network.</p>
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
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18257.529887593948!2d35.73683316467911!3d-6.1781221213465844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de54a9cf1697b%3A0xde2e0252de5daa8b!2sJAKAYA%20KIKWETE%20CONVENTION%20CENTRE!5e0!3m2!1sen!2stz!4v1725718089979!5m2!1sen!2stz"
                        frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>

                <div class="col-lg-6 venue-info">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8 position-relative">
                            <h3>THE ANNUAL<br><span>MARKETING</span> CONFERENCE</h3>
                            <p>Our event will be held at the Jakay Kikwete Convention Center in Dodoma-Tanzania, a
                                state-of-the-art
                                facility designed to foster collaboration and innovation. The venue is easily accessible
                                and provides a professional yet welcoming atmosphere for attendees to engage and
                                network.</p>
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
                            <img src="assets/img/hotels-1.jpg" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Best Western Dodoma City Hotel</a></h3>
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p>0.4 Mile from the Venue</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="assets/img/hotels-2.jpg" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Morena Hotel</a></h3>
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p>0.5 Mile from the Venue</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="assets/img/hotels-3.jpg" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Nashera Hotel</a></h3>
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p>0.6 Mile from the Venue</p>
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
            <!-- Event-Specific Pricing for Standard Access -->
            <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="50">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <h3>Standard Access</h3>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <h4><sup>$</sup><span>150</span><span> / event</span></h4>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Access to all general sessions</span></li>
                        <li><i class="bi bi-check"></i> <span>Access to exhibition hall</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Exclusive workshops & networking</span></li>
                    </ul>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <div class="text-center"><a href="#" class="buy-btn" data-bs-toggle="modal"
                            data-bs-target="#bookingModal" data-price="150" data-type="Standard Access">Buy Now</a>
                    </div>
                </div>
            </div><!-- End Pricing Item -->

            <!-- Event-Specific Pricing for Premium Access -->
            <div class="row gy-4 pricing-item featured mt-4" data-aos="fade-up" data-aos-delay="50">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <h3>Premium Access</h3>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <h4><sup>$</sup><span>250</span><span> / event</span></h4>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Everything in Standard Access</span></li>
                        <li><i class="bi bi-check"></i> <strong>Access to exclusive workshops</strong></li>
                        <li><i class="bi bi-check"></i> <span>VIP Networking session</span></li>
                    </ul>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <div class="text-center"><a href="#" class="buy-btn" data-bs-toggle="modal"
                            data-bs-target="#bookingModal" data-price="250" data-type="Premium Access">Buy Now</a>
                    </div>
                </div>
            </div><!-- End Pricing Item -->

            <!-- Event-Specific Pricing for Pro Access -->
            <div class="row gy-4 pricing-item mt-4" data-aos="fade-up" data-aos-delay="50">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <h3>Pro Access</h3>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <h4><sup>$</sup><span>350</span><span> / event</span></h4>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Everything in Premium Access</span></li>
                        <li><i class="bi bi-check"></i> <span>One-on-one session with keynote speakers</span></li>
                        <li><i class="bi bi-check"></i> <span>Access to post-conference materials</span></li>
                    </ul>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <div class="text-center"><a href="#" class="buy-btn" data-bs-toggle="modal"
                            data-bs-target="#bookingModal" data-price="350" data-type="Pro Access">Buy Now</a></div>
                </div>
            </div><!-- End Pricing Item -->

        </div>

        <!-- Booking Modal -->
        <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bookingModalLabel">Book Your Ticket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="bookingForm">
                            <div class="mb-3">
                                <label for="eventType" class="form-label">Ticket Type</label>
                                <select id="eventType" class="form-select" disabled required>
                                    <option value="Standard Access">Standard Access</option>
                                    <option value="Premium Access">Premium Access</option>
                                    <option value="Pro Access">Pro Access</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="eventPrice" class="form-label">Price</label>
                                <input type="text" id="eventPrice" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="eventSelect" class="form-label">Select Event</label>
                                <select id="eventSelect" class="form-select" required>
                                    <option value="annual-marketing">THE ANNUAL MARKETING CONFERENCE
                                    </option>
                                    <option value="entrepreneurship-conference">ENTREPRENEURSHIP
                                        CONFERENCE GROWTH MINDSETS</option>
                                    <option value="investment-readness">INVESTMENT READNESS FOR
                                        STARTUPS</option>
                                    <!-- Add more events as needed -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>
                            <!-- Additional fields as needed for Payment Gateway -->
                            <div class="mb-3">
                                <label for="paymentMethod" class="form-label">Payment Method</label>
                                <select id="paymentMethod" class="form-select" required>
                                    <option value="Tigo-Pesa">Tigo-Pesa</option>
                                    <option value="AirtelMoney">AirtelMoney</option>
                                    <!-- Add other payment options if necessary -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" class="form-control"
                                    placeholder="Enter tigo/airtel phone number to pay" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Complete Booking</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End Booking Modal -->

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
                        <p>support@Announcevent.com</p>
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
                <form action="#" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
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
                title: "About The Annual Marketing Conference",
                description: "The Annual Marketing Conference brings together professionals from all over the world to discuss the latest trends in marketing.",
                location: "Jakaya Kikwete Convention Center, Dodoma, Tanzania",
                date: "Monday to Wednesday<br>10-12 December 2024"
            },
            {
                // Second event details (this corresponds to the second carousel item)
                title: "About The Entrepreneurship Growth Mindsets Conference",
                description: "The Entrepreneurship Conference focuses on developing growth mindsets to succeed in the ever-changing business environment.",
                location: "Nyerere Square Convention Center, Dodoma, Tanzania",
                date: "Friday to Sunday<br>15-17 November 2024"
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
    //Function for Booking Modal Handling.
    document.addEventListener('DOMContentLoaded', function() {
        const bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'));

        document.querySelectorAll('.buy-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                const price = this.getAttribute('data-price');
                const type = this.getAttribute('data-type');

                // Set the modal content based on the clicked button
                document.getElementById('eventType').value = type;
                document.getElementById('eventPrice').value = `$${price}`;
            });
        });

        // Handle form submission
        document.getElementById('bookingForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Here you would add your code to handle the form submission and payment
            alert('Booking submitted!');
            bookingModal.hide(); // Hide the modal after submission
        });
    });
</script>
@include('layouts.footer')<!--Include the footer of the website-->
