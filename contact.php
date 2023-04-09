		<?php
    		include ('include/header.php');
		?>
<div class="page-title-area bg-22">
			<div class="container">
				<div class="page-title-content">
					<h2>Contact</h2>
					<ul>
						<li>
							<a href="index.php">
								Home 
							</a>
						</li>
						
						<li class="active">Contact</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->
		
		<!-- Start Contact Info Area -->
		<section class="contact-info-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3">
						<div class="single-contact-info">
							<i class="bx bx-location-plus"></i>
							<h3>Metrotouch Technologies</h3>
							<p>4th floor, Haripriya Plaza, Near Domino's, Rajarampuri, Kolhapur 416001</p>
							<a href="#">Email: <span class="__cf_email__">info@metrotouch.in</span></a>
							<a href="tel: +91 9371812019"> +91 9371812019</a>
						</div>
					</div>

					<div class="col-lg-3 p-0">
						<div class="single-contact-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d705.4751904552719!2d74.24079305303252!3d16.698137932048308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc101e7b54f2fab%3A0xeca671d8f385eef1!2sHaripriya%20Plaza!5e0!3m2!1sen!2sin!4v1680679381199!5m2!1sen!2sin" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"style="border:0;"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Info Area -->

		<!-- Start Contact Area -->
		<section class="faq-contact-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="contact-wrap">
							<div class="contact-form">
								<div class="section-title">
									<span class="top-title">Contact Us</span>
									<h2>Drop us a message for any query</h2>
									<p>If You have any Queries Any time you will contact us. We wil provide great services to You</p>
								</div>

								<form action="contact_form/db.php" id="contactForm" method="post">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="contact" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn page-btn">
												Send Message
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <?php
    		include ('include/footer.php');
		?>