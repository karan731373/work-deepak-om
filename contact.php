
 <?php include 'include/header.php'; ?>


    <!-- contact-banner -->
    <section class="contact-banner centred" style="background-image: url(images/om/contact-banner.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Contact Us</h1>
                <!-- <h3>If you have any general enquiries, we'd love to hear from you</h3> -->
            </div>
        </div>
    </section>
    <!-- contact-banner end -->


  
<section class="om-contact-section">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="om-contact-card">
                    <div class="om-contact-icon-wrapper">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <h3 class="om-contact-title">Main Office</h3>
                    <div class="om-contact-divider"></div>
                    <div class="om-contact-detail">
                        Industrial Area, Phase 2, Ludhiana, Punjab
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="om-contact-card">
                    <div class="om-contact-icon-wrapper">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    </div>
                    <h3 class="om-contact-title">Phone Support</h3>
                    <div class="om-contact-divider"></div>
                    <div class="om-contact-detail">
                        <a href="tel:+917719530167">+917719530167</a>
                        <!-- <a href="tel:029292162">+02 929 2162</a> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 mb-4">
                <div class="om-contact-card">
                    <div class="om-contact-icon-wrapper">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <h3 class="om-contact-title">Email Inquiries</h3>
                    <div class="om-contact-divider"></div>
                    <div class="om-contact-detail">
                        <a href="mailto:omexports2021@gmail.com">omexports2021@gmail.com</a>
                        <a href="mailto:support@example.com">support@om-group.com</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
    <!-- contact-section -->
    <section class="contact-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="contact-form-area">
                        <h2>Drop us a line</h2>
                        <form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Your Name*" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email*" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group message-btn">
                                <button type="submit" class="theme-btn" name="submit-form">Submit a Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                    <div class="google-map-area">
                        <div 
                            class="google-map" 
                            id="contact-google-map" 
                            data-map-lat="40.712776" 
                            data-map-lng="-74.005974" 
                            data-icon-path="images/icons/map-marker.png"  
                            data-map-title="Brooklyn, New York, United Kingdom" 
                            data-map-zoom="12" 
                            data-markers='{
                                "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","images/icons/map-marker.png"]
                            }'>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

    
 <?php include 'include/footer.php'; ?>