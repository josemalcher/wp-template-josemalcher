

<!-- Footer Area Start -->
<div id="footer">
    <div class="container">
        <!-- Footer Copyright Start -->
        <div class="footer--copyright">
            <p>Copyright &copy; 2017 <a href="#">CVIT</a>. All Rights Reserved.</p>
        </div>
        <!-- Footer Copyright End -->
    </div>
</div>
<!-- Footer Area End -->

<!-- Back To Top Area Start -->
<div id="backToTop">
    <a href="#banner" class="btn--default AnimateScrollLink"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Back To Top Area End -->

<!-- Hire Me Modal Start -->
<div class="hire-me--modal modal fade" id="hireMeModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal Content Start -->
        <div class="modal-content">
            <!-- Modal Header Start-->
            <div class="modal-header">
                <span class="close" data-dismiss="modal">&times;</span>

                <h4 class="modal-title">HAVE A PROJECT?</h4>
                <p>I’m ready to help you. You just type details below, and/or send us a file.</p>
            </div>
            <!-- Modal Header End-->

            <!-- Modal Body Start-->
            <div class="modal-body">
                <form action="hire-me.php" method="post" id="popupContactForm">
                    <div class="row">
                        <div class="col-md-8 form-controls">
                            <div class="row">
                                <div class="col-md-6 name">
                                    <input type="text" name="name" placeholder="Your Name..." />
                                </div>

                                <div class="col-md-6 email">
                                    <input type="email" name="email" placeholder="Please Enter Your Email..." />
                                </div>

                                <div class="col-md-6 project-title">
                                    <input type="text" name="project_title" placeholder="Your Project Title..." />
                                </div>

                                <div class="col-md-6 case-category">
                                    <select name="category" class="bg-fa-caret-down SelectMenu">
                                        <option value="">-Select Case Category-</option>
                                        <option value="example">Example Category</option>
                                    </select>
                                </div>

                                <div class="col-md-6 budget">
                                    <select name="budget" class="bg-fa-caret-down SelectMenu">
                                        <option value="">-Budget-</option>
                                        <option value="0">0</option>
                                    </select>
                                </div>

                                <div class="col-md-6 date">
                                    <input type="text" name="date" class="DatePicker bg-fa-calender" placeholder="-Estimate Date-" />
                                </div>

                                <div class="col-md-12 message">
                                    <textarea name="message" rows="9">Your Message...</textarea>
                                </div>

                                <div class="col-md-4 text-center attachment reset-padding">
                                    <label for="fileUpload">
                                        <i class="glyphicon glyphicon-paperclip"></i>
                                        Attach File
                                    </label>

                                    <input type="file" name="attachment" id="fileUpload">
                                </div>

                                <div class="col-md-8 attachment-status">
                                    <span>No File Choosen</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 estimate-container">
                            <div class="estimate-img">
                                <img src="img/hire-me-pic.png" alt="" class="center-block img-responsive"/>
                            </div>

                            <div class="estimate-text">
                                <h4>Is An Estimate Required?</h4>

                                <div class="radio">
                                    <input type="radio" name="estimate" value="no" checked="checked" id="estimateZERO"><label for="estimateZERO">No Estimate Required</label>
                                </div>

                                <div class="radio">
                                    <input type="radio" name="estimate" value="yes" id="estimateONE"><label for="estimateONE">Yes, I require an estimate cost of services. I understand I need to allow 2-4 business days to receive the estimate.</label>
                                </div>

                                <input type="submit" value="SEND OFFER" class="submit-btn btn--primary btn-block" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Modal Body End-->
        </div>
        <!-- Modal Content End -->
    </div>
</div>
<!-- Hire Me Modal End -->
</div>
<!-- Wrapper End -->

<!-- ==== jQuery ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>

<!-- ==== Bootstrap ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>

<!-- ==== jQuery UI DatePicker Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-ui.min.js"></script>

<!-- ==== Owl Carousel Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>

<!-- ==== Isotope Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/isotope-docs.min.js"></script>

<!-- ==== jQuery Form Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.form.min.js"></script>

<!-- ==== jQuery Validation Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.validate.min.js"></script>

<!-- ==== Google Map API ==== -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>

<!-- ==== GMaps Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/gmaps.min.js"></script>

<!-- ==== jQuery Waypoints Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>

<!-- ==== Animate Scroll Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/animatescroll.min.js"></script>

<!-- ==== CounterUp Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.counterup.min.js"></script>

<!-- ==== jQuery Nice Scroll Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.nicescroll.min.js"></script>

<!-- ==== Parallax Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/parallax.min.js"></script>

<!-- ==== RetinaJS Plugin ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/retina.min.js"></script>

<!-- ==== Main Script ==== -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
