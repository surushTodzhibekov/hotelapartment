@extends('layouts.frontend')
   
@section('content')
    <h1>Contact</h1>

    <div class="contact-us-area box-contact">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contact-us-inner">
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Contact-form-area Start -->
                                <div class="contact-form-area">
                                    <h3>Send Message</h3>
                                    <!-- contact-form-warp Start -->
                                    <div class="contact-form-warp">
                                        <form id="contact-form" action="mail.php" method="post">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" placeholder="Your Name*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" placeholder="Mail Address*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" placeholder="Your Message*"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-submit-btn">
                                                <button type="submit" class="btn btn-primary">Send Email</button>
                                                <p class="form-messege"></p>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- contact-form-warp End -->
                                </div>
                                <!-- Contact-form-area End -->
                            </div>
                            <div class="col-lg-3 offset-lg-1">
                                <!-- Contact-info-wrap Start -->
                                <div class="contact-info-wrap">
                                    <!-- single-contact-info start -->
                                    <div class="single-contact-info">
                                        <h3>Location</h3>
                                        <p>Greenline, 4/3 north corn walinon, concord palase,Usa.</p>
                                    </div>
                                    <!-- single-contact-info End -->
                                    <!-- single-contact-info start -->
                                    <div class="single-contact-info">
                                        <h3>Phone</h3>
                                        <p><a href="#">+88345 789 456</a></p>
                                    </div>
                                    <!-- single-contact-info End -->
                                    <!-- single-contact-info start -->
                                    <div class="single-contact-info">
                                        <h3>E-mail</h3>
                                        <p><a href="mailto:devonahasan@gmail.com">airconserv11@gmail.com</a></p>
                                    </div>
                                    <!-- single-contact-info End -->
                                </div>
                                <!-- Contact-info-wrap End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection