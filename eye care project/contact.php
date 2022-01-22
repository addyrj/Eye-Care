<?php include"header.php" ?>
<!--Start Medipath-banner area -->
<section class="medipath-banner">
    <img src="assets/contact-us.jpg" alt="Parijat Eye Care">
</section>
<!--End Medipath-banner area -->




<!--Satrt contact Section -->
<section class="contact section-padding">
    <div class="container">
        <div class="row">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-us-header">
                    <h2>Parijat Eye Care</h2>
                </div>
                <div class="contact-us">
                    <ul>
<li><i class="fa fa-map-marker"></i><span>Sable Heights, Gat No. 284, Bharatmata Chowk,Dehu Road, Moshi - 412 105</span></li>
                        <li><i class="fa fa-phone"></i><span>+91-94086 68181</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>sarvadnyapathlab@gmail.com</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <div id="error" class="alert alert-danger" style="display: none">Msg Sending Failed</div>
                    <div id="success" class="alert alert-success" style="display: none">Msg Sending Success</div>
                    <div class="appoinment-form">
                        <form name="sentMessage" id="contactForm" action="email.php" method="post">
                            <div class="col-md-12 contact-us-header">
                                <div class="form-group">
                                    <h2>Book Appointment Now </h2>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name" id="name" name="name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Enter Your Mobile Number" id="Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Write your Message here..." id="message" name="message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="confirm text-center">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End contact Section -->

<section>
    <div class="container">
        <div class="row"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.6593482583485!2d73.84562571489512!3d18.679276387316733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c81b560d9e03%3A0xbb3647fc7b04cbbc!2sSarvadnya%20Multispeciality%20Hospital!5e0!3m2!1sen!2sin!4v1634106531963!5m2!1sen!2sin"
width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
       
</div>1d1512
    </div>
</section>

<?php include"footer.php"; ?>
