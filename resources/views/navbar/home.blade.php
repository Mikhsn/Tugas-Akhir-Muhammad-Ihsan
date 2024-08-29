@extends('master.layout')
@section('section')
    <div class="hero-wrap" style="background-image: url('/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Business Leaders
                        <br><span>Conference 2024</span>
                    </h1>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="icon-calendar mr-2"></span>20-23 November 2024 - Los Angeles CA</p>
                    {{-- <div id="timer" class="d-flex">
                    <div class="time" id="days"></div>
                    <div class="time pl-3" id="hours"></div>
                    <div class="time pl-3" id="minutes"></div>
                    <div class="time pl-3" id="seconds"></div>
                </div> --}}
                </div>
                <div class="col-lg-2 col"></div>
                {{-- <div class="col-lg-4 col-md-6 mt-0 mt-md-5">
                    <form action="#" class="request-form ftco-animate">
                        <h2>Join Our Member & Get Discount</h2> --}}
                        {{-- <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter your Phone">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input type="checkbox" value="" class="mr-2"> I have read and accept
                                    the terms and conditions</label>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group">
                            <input type="submit" value="Join now" class="btn btn-primary py-3 px-4">
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- <section class="ftco-section services-section bg-primary">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Venue</h3>
                            <p> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-world"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Transport</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-hotel"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Hotel</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-cooking"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Restaurant</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center py-4 bg-primary mb-4">
                        <div class="text">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-guest"></span>
                            </div>
                            <strong class="number" data-number="3590">0</strong>
                            <span>Papers Pulished</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center py-4 bg-primary mb-4">
                        <div class="text">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-handshake"></span>
                            </div>
                            <strong class="number" data-number="9630">0</strong>
                            <span>Awards Winning</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center py-4 bg-primary mb-4">
                        <div class="text">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-chair"></span>
                            </div>
                            <strong class="number" data-number="8560">0</strong>
                            <span>Global Partners</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center py-4 bg-primary mb-4">
                        <div class="text">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-idea"></span>
                            </div>
                            <strong class="number" data-number="4850">0</strong>
                            <span>Active Author</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                   style="background-image: url(images/sotvi.jpeg);">
                   </div>
                <div class="col-md-7 wrap-about py-md-5 ftco-animate">
                    <div class="heading-section mb-5 pt-5 pl-md-5">
                        <div class="pr-md-5 mr-md-5">
                            <h2 class="mb-4">The 1st 2023 Asia-Europe Conference on Applied Information Technology 2023 (AETECH)</h2>
                        </div>

                        <p>The 1st 2023 Asia-Europe Conference on Applied Information Technology 2023 (AETECH) is an international symposium which covers Applied Information Technology . AETECH 2023 will be held on October 6, 2023 in United Kingdom. This conference organized by Society of Visual Informatics.</p>
                        {{-- <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                            would have been rewritten a thousand times and everything that was left from its origin
                            would be the word "and" and the Little Blind Text should turn around and return to its own,
                            safe country. But nothing the copy said could convince her and so it didn’t take long until
                            a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged
                            her into their agency, where they abused her for their.</p> --}}
                        <p><a href="/login" class="btn btn-primary">Join now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Conference Upcoming</h2>
                </div>
            </div>
            <div class="ftco-schedule">
                <div class="row">
                    <div class="col-md-3 nav-link-wrap text-center text-md-center">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                role="tab" aria-controls="v-pills-1" aria-selected="true">11 NOVEMBER<span>
                                    2024</span></a>
                            <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                role="tab" aria-controls="v-pills-2" aria-selected="false">02 OCTOBER <span>
                                    2024</span></a>
                            <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"
                                role="tab" aria-controls="v-pills-3" aria-selected="false">12 SEPTEMBER<span>
                                    2024</span></a>
                            <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4"
                                role="tab" aria-controls="v-pills-4" aria-selected="false">06 DECEMBER<span>
                                    2024</span></a>
                        </div>
                    </div>
                    <div class="col-md-9 tab-wrap">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="day-1-tab">
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/sotvia.png);"></div>
                                    <div class="text">
                                        <h2><a href="#">The 2nd 2024 Software & Technologies, Visual Informatics & Applications (SOTVIA) Conference</a></h2>
                                        <p>The 2nd 2024 Software & Technologies, Visual Informatics & Applications (SOTVIA) Conference is an international
                                            symposium which covers Applied Information Technology and Innovation. SOTVIA 2024 will be held on Bali, Indonesia in November 11, 2024. This conference organized by Society of Visual Informatics.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>11 November 2024 - Bali, Indonesia</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Hidra Amnur</a> <span
                                                class="position">Founder of Sotvi</span></h3>
                                    </div>
                                </div>
                                {{-- <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/staff-2.jpg);"></div>
                                    <div class="text">
                                        <h2><a href="#">Introduction to Business Leaders</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
                                            Building Los Angeles CA</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
                                                class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/staff-3.jpg);"></div>
                                    <div class="text">
                                        <h2><a href="#">Introduction to Business Leaders</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
                                            Building Los Angeles CA</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
                                                class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/ailc.png);"></div>
                                    <div class="text">
                                        <h2><a href="#">AiIC2024 2024 APPLIED INFORMATICS INTERNATIONAL CONFERENCE</a></h2>
                                        <p>AiIC2024 marks the 4th international conference organized collaboratively by
                                            Universiti Putra Malaysia (UPM), its partner universities, and industry stakeholders. This conference serves as a pivotal platform for researchers and practitioners to delve into the latest advancements in applied informatics research and development.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>02 October 2024 - Universiti Putra Malaysia (UPM)</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Rahmat Hidayat</a> <span
                                                class="position">Founder of Sotvi</span></h3>
                                    </div>
                                </div>
                                {{-- <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/staff-1.jpg);"></div>
                                    <div class="text">
                                        <h2><a href="#">Introduction to Business Leaders</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
                                            Building Los Angeles CA</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
                                                class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/staff-2.jpg);"></div>
                                    <div class="text">
                                        <h2><a href="#">Introduction to Business Leaders</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
                                            Building Los Angeles CA</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
                                                class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                aria-labelledby="v-pills-day-3-tab">
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/ic2ie.png);"></div>
                                    <div class="text">
                                        <h2><a href="#">IC2IE 2024 GENERATIVE AI IN DEMOCRATIZING ACCESS TO KNOWLEDGE AND SKILLS</a></h2>
                                        <p>Generative Artificial Intelligence (AI) has gained immense significance and popularity nowadays
                                            due to its crucial role in transforming various industries. Its importance arises from the ability
                                            to autonomously generate content, ranging from text to images and beyond. This technology not only
                                            facilitates innovation but also plays an important role in optimizing processes, enhancing creativity,
                                            and addressing complex problems. The fame of generative AI is propelled by its capacity to revolutionize
                                            how we approach tasks, fostering efficiency, and opening new growth opportunities for exploration and
                                            advancement across diverse domains, making it one of the most disruptive trends of this decade.
                                            By 2026, more than 80% of enterprises will have used generative AI APIs and deployed GenAI-enabled
                                            applications in production environments, up from less than 5% in 2023 (Gartner, 2023). In making
                                            generative AI technologies and capabilities accessible and available to a broader and more diverse
                                            audience, users, technology, and governance as the main components to be considered as shown in the figure below.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>12 September 2024 - Hall,
                                            Building Los Angeles CA</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Aldo Erianda</a> <span
                                                class="position">Founder of Sotvi</span></h3>
                                    </div>
                                </div>
                                {{-- <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/staff-4.jpg);"></div>
                                    <div class="text">
                                        <h2><a href="#">Introduction to Business Leaders</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
                                            Building Los Angeles CA</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
                                                class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/staff-1.jpg);"></div>
                                    <div class="text">
                                        <h2><a href="#">Introduction to Business Leaders</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
                                            Building Los Angeles CA</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
                                                class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/ICIST.png);"></div>
                                    <div class="text">
                                        <h2><a href="#">ICIST 2024 The 6th International Conference on Innovation in Science and Technology</a></h2>
                                        <p>The 6th International Conference on Innovation in Science Technology (ICIST 2024) is devoted to computer
                                            science, electrical and electronics engineering, telecommunication engineering, mechanical engineering,
                                            civil engineering, economics and business that will take place in a hybrid format from December 5 to 6,
                                            2024 at the Sense Sunset Hotel in Seminyak, Bali, Indonesia.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>05-06 December 2024 - Hotel Seminyak Bali, Indonesia.</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Alde Alanda</a> <span
                                                class="position">Founder of Sotvi</span></h3>
                                    </div>
                                </div>
                                {{-- <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/staff-1.jpg);"></div>
                                    <div class="text">
                                        <h2><a href="#">Introduction to Business Leaders</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
                                            Building Los Angeles CA</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
                                                class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div>
                                <div class="speaker-wrap ftco-animate d-md-flex">
                                    <div class="img speaker-img" style="background-image: url(/images/staff-2.jpg);"></div>
                                    <div class="text">
                                        <h2><a href="#">Introduction to Business Leaders</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <span class="time">09:00 am - 4:30 pm</span>
                                        <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
                                            Building Los Angeles CA</p>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.</p>
                                        <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
                                                class="position">Founder of Wordpress</span></h3>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-gallery ftco-no-pt">
        <div class="container-fluid px-4">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Conference Gallery</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/image_1.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-linkedin"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/image_2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-twitter"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/image_3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/image_4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-facebook"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Conference Ticket Pricing</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <h2 class="heading">Personal</h2>
                            <span class="price"><sup>$</sup> <span class="number">85</span></span>
                            <span class="excerpt d-block">per month</span>

                            <h3 class="heading-2 my-4">Enjoy All The Features</h3>
                            <ul class="pricing-text">
                                <li>Conference Seats</li>
                                <li>Free Wifi</li>
                                <li>Coffee Breaks</li>
                                <li>Lunch</li>
                                <li>Workshops</li>
                                <li>One Speakers</li>
                                <li>Papers</li>
                            </ul>
                            <a href="#" class="btn btn-primary d-block px-2 py-3">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="block-7 active">
                        <div class="text-center">
                            <h2 class="heading">Small Team</h2>
                            <span class="price"><sup>$</sup> <span class="number">200</span></span>
                            <span class="excerpt d-block">per month</span>
                            <h3 class="heading-2 my-4">Enjoy All The Features</h3>
                            <ul class="pricing-text">
                                <li>Conference Seats</li>
                                <li>Free Wifi</li>
                                <li>Coffee Breaks</li>
                                <li>Lunch</li>
                                <li>Workshops</li>
                                <li>One Speakers</li>
                                <li>Papers</li>
                            </ul>
                            <a href="#" class="btn btn-primary d-block px-2 py-3">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <h2 class="heading">Family Pack</h2>
                            <span class="price"><sup>$</sup> <span class="number">499</span></span>
                            <span class="excerpt d-block">per month</span>
                            <h3 class="heading-2 my-4">Enjoy All The Features</h3>
                            <ul class="pricing-text">
                                <li>Conference Seats</li>
                                <li>Free Wifi</li>
                                <li>Coffee Breaks</li>
                                <li>Lunch</li>
                                <li>Workshops</li>
                                <li>One Speakers</li>
                                <li>Papers</li>
                            </ul>
                            <a href="#" class="btn btn-primary d-block px-2 py-3">Buy Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-1">Ourteam</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="speaker ftco-animate d-flex align-items-stretch">
                        <div class="img" style="background-image: url(images/staff-3.jpg);">
                            <div class="text text-absolute">
                                <h3>Robert Bonner</h3>
                                <span class="position">Businessmen</span>
                                <ul class="ftco-social mt-3">
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="speaker ftco-animate speaker-1 d-flex align-items-center mb-5">
                        <div class="img" style="background-image: url(images/staff-1.jpg);"></div>
                        <div class="text pl-4">
                            <h3>Kyle Bochs</h3>
                            <span class="position">Businessman</span>
                            <p>A small river named Duden flows by their place and supplies</p>
                            <ul class="ftco-social">
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker ftco-animate speaker-1 d-flex align-items-center mb-5">
                        <div class="img" style="background-image: url(images/staff-2.jpg);"></div>
                        <div class="text pl-4">
                            <h3>Arnold Thompson</h3>
                            <span class="position">Businessman</span>
                            <p>A small river named Duden flows by their place and supplies</p>
                            <ul class="ftco-social">
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker ftco-animate speaker-1 d-flex align-items-center mb-5">
                        <div class="img" style="background-image: url(images/staff-3.jpg);"></div>
                        <div class="text pl-4">
                            <h3>Ryan Sy</h3>
                            <span class="position">Businessman</span>
                            <p>A small river named Duden flows by their place and supplies</p>
                            <ul class="ftco-social">
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker ftco-animate speaker-1 d-flex align-items-center mb-5">
                        <div class="img" style="background-image: url(images/staff-4.jpg);"></div>
                        <div class="text pl-4">
                            <h3>Alysa Derick</h3>
                            <span class="position">Businesswoman</span>
                            <p>A small river named Duden flows by their place and supplies</p>
                            <ul class="ftco-social">
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Conference News</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="/home/news/news-single" class="block-20" style="background-image: url('/images/image_1.jpg');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">July. 14, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                        <h3 class="heading mt-2"><a href="/home/news/news-single">Why Lead Generation is Key for Business
                                    Growth</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="/home/news/news-single" class="block-20" style="background-image: url('/images/image_2.jpg');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">July. 14, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="/home/news/news-single">Why Lead Generation is Key for Business
                                    Growth</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="/home/news/news-single" class="block-20" style="background-image: url('/images/image_3.jpg');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">July. 14, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="/home/news/news-single">Why Lead Generation is Key for Business
                                    Growth</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
