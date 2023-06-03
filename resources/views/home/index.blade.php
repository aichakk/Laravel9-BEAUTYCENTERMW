@extends('layouts.frontbase')

@section('title', ' BEAUTY CENTER PROJECT')



@section('content')
    WELCOME TO OUR BEAUTY CENTER
{{--    <section class="what-other-say">--}}
{{--       <!-- <div class="container">--}}
{{--            <div class="wrap-others-say" itemprop="review" itemscope itemtype="http://schema.org/ReviewAction">--}}
{{--                <h1>what other say about us</h1>--}}
{{--                <div id="carousel" class="flexslider">--}}
{{--                    <ul class="slides">--}}
{{--                        <li class="img-wrap">--}}
{{--                            <figure itemprop="{{asset('assets')}}/csse">--}}
{{--                                <img src="{{asset('assets')}}/csses/review-big-img.jpg" alt="Person Image">--}}
{{--                                <figcaption class="hidden">--}}
{{--                                    <h3>Sagar Sapkota</h3>--}}
{{--                                    <h4>UI Designer</h4>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </li>--}}
{{--                        <li class="img-wrap">--}}
{{--                            <figure itemprop="{{asset('assets')}}/csse">--}}
{{--                                <img src="{{asset('assets')}}/csses/review-big-img.jpg" alt="Person Image">--}}
{{--                                <figcaption class="hidden">--}}
{{--                                    <h3>Sagar Sapkota</h3>--}}
{{--                                    <h4>UI Designer</h4>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </li>--}}
{{--                        <li class="img-wrap">--}}
{{--                            <figure itemprop="{{asset('assets')}}/csse">--}}
{{--                                <img src="{{asset('assets')}}/csses/review-big-img.jpg" alt="Person Image">--}}
{{--                                <figcaption class="hidden">--}}
{{--                                    <h3>Sagar Sapkota</h3>--}}
{{--                                    <h4>UI Designer</h4>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </li>--}}
{{--                        <li class="img-wrap">--}}
{{--                            <figure itemprop="{{asset('assets')}}/csse">--}}
{{--                                <img src="{{asset('assets')}}/csses/review-big-img.jpg" alt="Person Image">--}}
{{--                                <figcaption class="hidden">--}}
{{--                                    <h3>Sagar Sapkota</h3>--}}
{{--                                    <h4>UI Designer</h4>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </li>--}}
{{--                        <li class="img-wrap">--}}
{{--                            <figure itemprop="{{asset('assets')}}/csse">--}}
{{--                                <img src="{{asset('assets')}}/csses/review-big-img.jpg" alt="Person Image">--}}
{{--                                <figcaption class="hidden">--}}
{{--                                    <h3>Sagar Sapkota</h3>--}}
{{--                                    <h4>UI Designer</h4>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </li>--}}
{{--                        <li class="img-wrap">--}}
{{--                            <figure itemprop="{{asset('assets')}}/csse">--}}
{{--                                <img src="{{asset('assets')}}/csses/review-big-img.jpg" alt="Person Image">--}}
{{--                                <figcaption class="hidden">--}}
{{--                                    <h3>Sagar Sapkota</h3>--}}
{{--                                    <h4>UI Designer</h4>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </li>--}}
{{--                        <li class="img-wrap">--}}
{{--                            <figure itemprop="{{asset('assets')}}/csse">--}}
{{--                                <img src="{{asset('assets')}}/csses/review-big-img.jpg" alt="Person Image">--}}
{{--                                <figcaption class="hidden">--}}
{{--                                    <h3>Sagar Sapkota</h3>--}}
{{--                                    <h4>UI Designer</h4>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </li>--}}
{{--                        <li class="img-wrap">--}}
{{--                            <figure itemprop="{{asset('assets')}}/csse">--}}
{{--                                <img src="{{asset('assets')}}/csses/review-big-img.jpg" alt="Person Image">--}}
{{--                                <figcaption class="fig">--}}
{{--                                    <h3 class="hidden">Sagar Sapkota</h3>--}}
{{--                                    <h4 class="hidden">UI Designer</h4>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--                <div id="slider" class="flexslider">--}}
{{--                      <ul class="slides">--}}
{{--                        <li>--}}
{{--                            <div class="testimonial-holder" itemprop="description">--}}
{{--                                <strong class="title">Amazing service and amazing team. Thank you!</strong>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>--}}
{{--                                <div class="rateYo"></div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="testimonial-holder" itemprop="description">--}}
{{--                                <strong class="title">Very Satisfaied with their service</strong>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>--}}
{{--                                <div class="rateYo"></div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="testimonial-holder" itemprop="description">--}}
{{--                                <strong class="title">Quick, efficient and meets your expectations</strong>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>--}}
{{--                                <div class="rateYo"></div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="testimonial-holder" itemprop="description">--}}
{{--                                <strong class="title">The website was according our imagination</strong>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>--}}
{{--                                <div class="rateYo"></div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="testimonial-holder" itemprop="description">--}}
{{--                                <strong class="title">Amazing service and amazing team. Thank you!</strong>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>--}}
{{--                                <div class="rateYo"></div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="testimonial-holder" itemprop="description">--}}
{{--                                <strong class="title">Very Satisfaied with their service</strong>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>--}}
{{--                                <div class="rateYo"></div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="testimonial-holder" itemprop="description">--}}
{{--                                <strong class="title">Quick, efficient and meets your expectations</strong>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>--}}
{{--                                <div class="rateYo"></div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="testimonial-holder" itemprop="description">--}}
{{--                                <strong class="title">The website was according our imagination</strong>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>--}}
{{--                                <div class="rateYo"></div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                      </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div> -->--}}
{{--        <div class="container">--}}
{{--            <h4 class="article-subtitle">Get to Know</h4>--}}
{{--            <h2 class="head">what our customer say</h2>--}}
{{--            <div class="three owl-carousel owl-theme">--}}
{{--                <div class="customer-item" itemscope itemtype="http://schema.org/Rating">--}}
{{--                    <div class="border">--}}
{{--                        <div class="customer">--}}
{{--                            <figure>--}}
{{--                                <img class="customer-img" src="{{asset('assets')}}/csses/customer-img.jpg" alt="Person image">--}}
{{--                                <figcaption>--}}
{{--                                    <span itemprop="author">SAGAR KUMAR SAPKOTA</span>--}}
{{--                                    <div class="rateYo" itemprop="ratingValue"></div>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </div>--}}
{{--                        <div class="customer-review">--}}
{{--                            <p itemprop="description">--}}
{{--                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
{{--                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,--}}
{{--                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
{{--                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non"--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="customer-item" itemscope itemtype="http://schema.org/Rating">--}}
{{--                    <div class="border">--}}
{{--                        <div class="customer">--}}
{{--                            <figure>--}}
{{--                                <img class="customer-img" src="{{asset('assets')}}/csses/customer-img.jpg" alt="Person image">--}}
{{--                                <figcaption>--}}
{{--                                    <span itemprop="author">SAGAR KUMAR SAPKOTA</span>--}}
{{--                                    <div class="rateYo" itemprop="ratingValue"></div>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </div>--}}
{{--                        <div class="customer-review">--}}
{{--                            <p itemprop="description">--}}
{{--                                "22222Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
{{--                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,--}}
{{--                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
{{--                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non"--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End of Others talk -->--}}
{{--    <section class="page-heading">--}}
{{--        <div class="container">--}}
{{--            <h2>latest news</h2>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="latest-news">--}}
{{--        <div class="container" itemprop="event" itemscope itemtype=" http://schema.org/Event">--}}
{{--            <div class="owl-two owl-carousel">--}}
{{--                <div class="news-wrap" itemprop="event">--}}
{{--                    <div class="news-img-wrap" itemprop="{{asset('assets')}}/csse">--}}
{{--                        <img src="{{asset('assets')}}/csses/latest-new-img.jpg" alt="Latest News Images">--}}
{{--                    </div>--}}
{{--                    <div class="news-detail" itemprop="description">--}}
{{--                        <a href=""><h1>Orientation Programme for new Students.</h1></a>--}}
{{--                        <h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>--}}

{{--                        <p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="news-wrap" itemprop="event">--}}
{{--                    <div class="news-img-wrap" itemprop="{{asset('assets')}}/csse">--}}
{{--                        <img src="{{asset('assets')}}/csses/latest-new-img.jpg" alt="Latest News Images">--}}
{{--                    </div>--}}
{{--                    <div class="news-detail" itemprop="description">--}}
{{--                        <a href=""><h1>Orientation Programme for new Students.</h1></a>--}}
{{--                        <h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>--}}

{{--                        <p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="news-wrap" itemprop="event">--}}
{{--                    <div class="news-img-wrap" itemprop="{{asset('assets')}}/csse">--}}
{{--                        <img src="{{asset('assets')}}/csses/latest-new-img.jpg" alt="Latest News Images">--}}
{{--                    </div>--}}
{{--                    <div class="news-detail" itemprop="description">--}}
{{--                        <a href=""><h1>Orientation Programme for new Students.</h1></a>--}}
{{--                        <h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>--}}

{{--                        <p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Latest News CLosed -->--}}
{{--    <section class="query-section">--}}
{{--        <div class="container">--}}
{{--            <p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></p>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
