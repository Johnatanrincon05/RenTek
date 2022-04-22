@include('layouts.header')


    <header id="header" class="fixed-top d-flex">
        <div class="container-fluid p-0 m-0 d-flex flex-column">
            <div class="container-fluid d-flex flex-row-reverse socialmedia">
                <div class="m-2 me-5">
                    <span class="bi bi-linkedin"></span>
                </div>
                <div class="m-2">
                    <span class="align-middle bi bi-facebook"></span>
                </div>
            </div>
            <div class="divnav container-fluid d-flex align-items-center">
                <h1 class="logo mx-auto">
                    <a href="index.html"><span class="text-dark">Factor</span><span class="text-color1">Tek</span></a>
                </h1>

                <nav id="navbar" class="navbar me-5">
                    <ul>
                        <li>
                            <a href="index.html" class="active">Home</a>
                        </li>

                        <li class="dropdown">
                            <a href="#"><span>FINANCIAL SOLUTIONS</span>
                                <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li>
                                    <a href="testimonials.html">Testimonials</a>
                                </li>

                                <li class="dropdown">
                                    <a href="#"><span>Deep Drop Down</span>
                                        <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li>
                                            <a href="#">Deep Drop Down 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Deep Drop Down 2</a>
                                        </li>
                                        <li>
                                            <a href="#">Deep Drop Down 3</a>
                                        </li>
                                        <li>
                                            <a href="#">Deep Drop Down 4</a>
                                        </li>
                                        <li>
                                            <a href="#">Deep Drop Down 5</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="services.html">ABOUT US </a></li>
                        <li><a href="portfolio.html">FAQs</a></li>
                        <li><a href="pricing.html">REFERRALS</a></li>
                        <li><a href="blog.html">GET STARTED</a></li>
                        <li><a href="contact.html">CONTACT US</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </div>
    </header>

    <section id="hero">
        <div class="carousel-item active" style="
                    background-image: url(assets/img/sections/hero/fondo1.jpg);
                ">
            <div class="carousel-container">
                <div class="col-sm-12 col-md-6">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown text-start">
                            Built By Truckers,<br />
                            For Truckers.
                        </h2>
                        <p class="animate__animated animate__fadeInUp text-start">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quaerat temporibus sequi minus odio fugiat eum soluta nesciunt laborum voluptatibus in consequatur, recusandae omnis? Est porro reiciendis impedit natus corporis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia facere sed ipsa officiis explicabo reprehenderit at perspiciatis, cumque ducimus quos illo, et numquam quasi eos minus itaque. Deserunt, accusamus soluta!
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 text-color2">
                    <div class="card transparent">
                        <div class="card-body">
                            <div class="">
                                <label for="inputNames" class="form-label"><strong>Names*</strong></label>
                                <input type="email" class="form-control" id="inputNames" aria-describedby="inputNames"
                                    placeholder="Fist & Last name" />
                            </div>
                            <br />
                            <div class="mb-4">
                                <label for="inputNames" class="form-label"><strong>Company Name*</strong></label>
                                <input type="email" class="form-control" id="inputNames" aria-describedby="inputNames"
                                    placeholder="Full Legal Name" />
                            </div>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <label for="inputNames" class="form-label">
                                        <strong>Phone Number*</strong></label>
                                    <input type="email" class="form-control" id="inputNames"
                                        aria-describedby="inputNames" placeholder="(000) 000-0000" />
                                </div>
                                <div class="col-6">
                                    <label for="inputNames" class="form-label"><strong>Company Email*</strong></label>
                                    <input type="email" class="form-control" id="inputNames"
                                        aria-describedby="inputNames" placeholder="name@company.com" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputNames" class="form-label">
                                    <strong>Solution Type</strong></label>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1" />
                                        Freight Factoring
                                    </label>
                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                            id="flexRadioDefault2" />
                                        Freight Factoring - Fuel Card
                                    </label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="inputNames" class="form-label">
                                    <strong> Referred </strong>
                                </label>
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" />
                                Yes
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" />
                                No
                                <input type="email" class="form-control" id="inputNames" aria-describedby="inputNames"
                                    placeholder="Who did refer you?" />
                            </div>
                            <div class="mb-4">
                                <label for="inputNames" class="form-label">
                                    <strong> Additional Comments </strong>
                                </label>
                                <textarea name="textarea1" class="form-control" id="" cols="30" rows="2"></textarea>
                            </div>
                            <div class="container-fluid">
                                <div class="row justify-content-end">
                                    <button class="btn bg-color2 text-white col-2 ms-auto" type="button">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="mb-4">
                        <h1 class="d-flex justify-content-center text-color2">
                            Don't let your cash flow stop you
                        </h1>
                        <hr />
                        <p class="d-flex justify-content-center text-color3">
                            Turn your oustanding invoices into cash quickly
                            and easy.
                        </p>
                    </div>
                </div>
                <div class="row content justify-content-center">
                    <div class="card col-md-5 m-2 shadow-sm">
                        <div class="card-body m-3">
                            <div class="row">
                                <div class="col-5 p-4">
                                    <img src="./assets/img/icons/importers.png" alt="" class="img-fluid col-12" />
                                </div>
                                <div class="col-7">
                                    <h5 class="card-title">
                                        <strong>Funding for exporters and
                                            importers</strong>
                                    </h5>
                                    <ul>
                                        <li>Invoice Factoring</li>
                                        <li>International Factoring</li>
                                        <li>Supply chain finance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-5 m-2 shadow-sm">
                        <div class="card-body m-3">
                            <div class="row">
                                <div class="col-5 p-4">
                                    <img src="./assets/img/icons/found.png" alt="" class="img-fluid col-12" />
                                </div>
                                <div class="col-7">
                                    <h5 class="card-title">
                                        <strong>Funding for owner-operators and
                                            fleet</strong>
                                    </h5>
                                    <label><strong>Freight factoring</strong></label>
                                    <ul>
                                        <li>Invoice Factoring</li>
                                        <li>International Factoring</li>
                                        <li>Supply chain finance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="benefits">
            <div class="container">
                <div class="row">
                    <div class="mb-4">
                        <h1 class="d-flex justify-content-center text-color2">
                            <strong>Don't let your cash flow stop you</strong>
                        </h1>
                        <hr />
                        <p class="d-flex justify-content-center text-color3">
                            Get an advance on your outstanding invoices. The
                            cash flow you need, when you need it.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-md-center p-5">
                    <div class="card text-center p-0 col-sm-8 col-md-3 m-2">
                        <img src="./assets/img/sections/benefits/benefit1.jpg" class="img-fluid" />
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="./assets/img/icons/funding.png" class="img-fluid col-3" />
                            </div>
                            <br />
                            <div class="container">
                                <h5 class="card-title">
                                    <strong>Manage your cashflow</strong>
                                </h5>
                                <br />
                                <p class="card-text">
                                    Some quick example text to build on the
                                    card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="card text-center p-0 col-sm-8 col-md-3 m-2">
                        <img src="./assets/img/sections/benefits/benefit2.jpg" class="img-fluid" />
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="./assets/img/icons/money.png" class="img-fluid col-3" />
                            </div>
                            <br />
                            <div class="container">
                                <h5 class="card-title">
                                    <strong>Manage your cashflow</strong>
                                </h5>
                                <br />
                                <p class="card-text">
                                    Some quick example text to build on the
                                    card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                            <br />
                        </div>
                    </div>
                    <div class="card text-center p-0 col-sm-8 col-md-3 m-2">
                        <img src="./assets/img/sections/benefits/smiling.jpg" class="img-fluid" />
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="./assets/img/icons/billetes.png" class="img-fluid col-3" />
                            </div>
                            <br />
                            <div class="container">
                                <h5 class="card-title">
                                    <strong>Manage your cashflow</strong>
                                </h5>
                                <br />
                                <p class="card-text">
                                    Some quick example text to build on the
                                    card title and make up the bulk of the
                                    card's content.
                                </p>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="pre-footer" class="container-fluid d-flex justify-content-center text-white">
        <strong>
            <p class="my-2">Follow Us:</p>
        </strong>
        <span class="align-middle bi bi-facebook my-auto mx-2"></span>
        <span class="bi bi-linkedin my-auto mx-2"></span>
    </div>

    @include('layouts.footer')