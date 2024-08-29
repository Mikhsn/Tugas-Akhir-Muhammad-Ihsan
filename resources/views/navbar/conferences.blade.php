@extends('master.layout')
@section('section')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/about.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <h1 class="mb-3 bread">Conference Upcoming</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Upcoming <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
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
@endsection
