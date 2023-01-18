<?php
/* Template Name: Components */
get_header();

?>

<div class="components">
	<div class="container">
		<h4 class="mb-2"><em>Typogrphy</em></h4>
		<hr>
		<h1>Heading 1</h1>
		<h2>Heading 2</h2>
		<h3>Heading 3</h3>
		<h4>Heading 4</h4>
		<h5>Heading 5</h5>
		<h6>Heading 6</h6>
		<hr>
		<hr>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ab voluptates quo blanditiis nihil deserunt asperiores. Explicabo eligendi eaque labore, dolorum odio temporibus cupiditate vel officia recusandae corporis sed harum.</p>
		<hr>
		<hr>
		<h4 class="mb-2"><em>Icomoon</em></h4>
		<i class="icon-Play-Icon"></i>
		<i class="icon-facebook"></i>
		<i class="icon-instagram"></i>
		<i class="icon-pin"></i>
		<i class="icon-mesage"></i>
		<hr>
		<hr>
		<h4 class="mb-2"><em>Buttons</em></h4>
		<a href="#" class="btn">View All Events</a>
		<a href="#" class="btn btn-primary">View All Events</a>
		<a href="#" class="btn btn-primary btn-lg">View All Events</a>
		<a href="#" class="btn btn-primary btn-primary--alt">View All Events</a>
		<div class="p-1" style="background-color: black; display:inline-block;">
			<a href="#" class="btn btn-secondary">View All Events</a>
		</div>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.block-title</em></h4>
		<header class="block-title">
			<h2>
				<span>OUR PASTOR</span>
				Pastor Gyan Lama
			</h2>
		</header>
		<hr>
		<header class="block-title text-center block-width-60 mx-auto">
			<h2>
				Pastor Gyan Lama
			</h2>
			<p>Join our holy upcoming events join our holy upcoming events</p>
		</header>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.card-video</em></h4>
		<div class="row">
			<div class="container">
				<div class="col-lg-5">
					<div class="card-video ">
						<picture class="card-video__media light-overlay">
							<source srcset="<?php echo site_url(); ?>/media/video-img.webp" type="image/webp">
							<source srcset="<?php echo site_url(); ?>/media/video-img.jpg" type="image/jpg">
							<img srcset="<?php echo site_url(); ?>/media/video-img.jpg" width="500" height="299" loading="lazy" alt="Video thumblain">
						</picture>
						<div class="btn-wrap">
							<a href="https://www.youtube.com/watch?v=xcJtL7QggTI&t=19s" data-fancybox><i class="icon-Play-Icon"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.card-overlay</em></h4>
		<div class="row">
			<div class="container">
				<div class="col-lg-3 col-sm-6">
					<div class="card-overlay bg-cover dark-overlay">
						<img src="<?php echo site_url(); ?>/media/baby.jpg" width="300" height="400" loading="lazy" alt="Video thumblain">
						<div class="card-overlay__content text-center">
							<h5>For Kids</h5>
						</div>
						<a href="#" class="stretched-link"></a>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.card-overlay.card-overlay--alt</em></h4>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="card-overlay card-overlay--alt bg-cover light-gradient light-gradient--alt">
						<img src="<?php echo site_url(); ?>/media/card-overlay-image-01.jpg" width="397" height="424" loading="lazzy" alt="Family">
						<div class="card-overlay__content text-center">
							<h5>Foundation Course</h5>
						</div>
						<a href="#" class="stretched-link"></a>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.card-event</em></h4>
		<div class="row">
			<div class="container">
				<div class="col-lg-5">
					<div class="card-event ">
						<picture class="card-event__media">
							<source srcset="<?php echo site_url(); ?>/media/members.webp" type="image/webp">
							<source srcset="<?php echo site_url(); ?>/media/members.jpg" type="image/jpg">
							<img src="<?php echo site_url(); ?>/media/members.jpg" width="350" height="250" loading="lazzy" alt="Video thumblain">
						</picture>
						<div class="card-event__content">
							<h5>Christmas Program and Jesus Birthday Celebration</h5>
							<span class="timing">Sun, Dec 10, 10:00 AM</span>
							<span class="location"><i class="icon-pin"></i>KIF Church | Thamel, Kathmandu</span>
						</div>
						<a href="#" class="stretched-link"></a>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.card-event .card-event--alt</em></h4>
		<div class="row">
			<div class="container">
				<div class="col-lg-5">
					<div class="card-event card-event--alt">
						<picture class="card-event__media">
							<source srcset="<?php echo site_url(); ?>/media/family.webp" type="image/webp">
							<source srcset="<?php echo site_url(); ?>/media/family.jpg" type="image/jpg">
							<img src="<?php echo site_url(); ?>/media/family.jpg" width="370" height="232" loading="lazzy" alt="Video thumblain">
						</picture>
						<div class="card-event__content">
							<h5>Christmas Program and Jesus Birthday Celebration</h5>
							<span class="location">Slate helps you see how many more days.</span>
							<span class="timing">1 July 2019 </span>
						</div>
						<a href="#" class="stretched-link"></a>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.card-icon</em></h4>
		<div class="row">
			<div class="container">
				<div class="col-lg-4 col-sm-6">
					<div class="card-icon text-center">
						<i class="icon-instagram"></i>
						<h4>Our Vision</h4>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.card-icon .card-icon--alt</em></h4>
		<div class="row">
			<div class="container">
				<div class="col-lg-4 col-sm-6">
					<div class="card-icon card-icon--alt text-center">
						<div class="icon">
							<i class="icon-phone-call"></i>
						</div>
						<h5>Phone</h5>
						<div class="card-icon__cta">
							<span>984-8053658</span>
							<span>984-8053658</span>
						</div>
						<div class="btn-wrap mt-auto">
							<a href="#" class="btn btn-sm">Call Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.media-overlay .media-offset__btmRight</em></h4>
		<div class="row">
			<div class="col-lg-5">
				<div class="media-offset media-offset--btmLeft">
					<picture class="media-offset__under">
						<source srcset="<?php echo site_url(); ?>/media/speaker.webp" type="image/webp">
						<source srcset="<?php echo site_url(); ?>/media/speaker.jpg" type="image/jpg">
						<img src="<?php echo site_url(); ?>/media/speaker.jpg" width="355" height="417" loading="lazzy" alt="Video thumblain">
					</picture>
					<picture class="media-offset__over">
						<source srcset="<?php echo site_url(); ?>/media/hands.webp" type="image/webp">
						<source srcset="<?php echo site_url(); ?>/media/hands.jpg" type="image/jpg">
						<img src="<?php echo site_url(); ?>/media/hands.jpg" width="437" height="506" loading="lazzy" alt="Video thumblain">
					</picture>

				</div>
			</div>
		</div>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.media-overlay .media-offset__btmRight</em></h4>
		<div class="row">
			<div class="col-lg-5">
				<div class="media-offset media-offset--btmRight">
					<picture class="media-offset__under">
						<source srcset="<?php echo site_url(); ?>/media/speaker.webp" type="image/webp">
						<source srcset="<?php echo site_url(); ?>/media/speaker.jpg" type="image/jpg">
						<img src="<?php echo site_url(); ?>/media/speaker.jpg" width="355" height="417" loading="lazzy" alt="Video thumblain">
					</picture>
					<picture class="media-offset__over">
						<source srcset="<?php echo site_url(); ?>/media/hands.webp" type="image/webp">
						<source srcset="<?php echo site_url(); ?>/media/hands.jpg" type="image/jpg">
						<img src="<?php echo site_url(); ?>/media/hands.jpg" width="437" height="506" loading="lazzy" alt="Video thumblain">
					</picture>

				</div>
			</div>
		</div>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.card-news</em></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="row card-news no-gutters">
					<div class="col-md-4">
						<picture class="card-news__media">
							<source srcset="<?php echo site_url(); ?>/media/kif-ing-01.webp" type="image/webp">
							<source srcset="<?php echo site_url(); ?>/media/kif-ing-01.jpg" type="image/jpg">
							<img src="<?php echo site_url(); ?>/media/kif-ing-01.jpg" width="408" height="432" loading="lazzy" alt="image">
						</picture>
					</div>
					<div class="col-md-8 align-self-center">
						<div class="card-news__content block-width-70">
							<span class="date">20 JUNE 2019</span>
							<h3>Life Tips From Top Ten Adventure Travelers</h3>

							<?php
							$ab_content = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using';
							?>
							<div class="btn-wrap">
								<?php echo wpautop(wp_trim_words($ab_content, 42, '... <a href="#" class="read-btn mt-1" data-toggle="modal" data-target="#aboutModal">Read More</a>')); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<hr>
		<h4 class="mb-2"><em>.form-contact</em></h4>
		<div class="form-holder">
			<header class="block-title text-center mb-lg-3 mb-2">
				<h2>
					<span>Contact Us</span>
					Send Your Message
				</h2>
			</header>
			<form action="#" class="row contact-form">
				<div class=" col-md-6 form-group">
					<input type="text" class="form-control" placeholder="Full Name*">
				</div>
				<div class="col-md-6 form-group">
					<input type="email" class="form-control" placeholder="Enter email*">
				</div>
				<div class="col-md-6 form-group">
					<input type="numebr" class="form-control" placeholder="Phone*">
				</div>
				<div class="col-md-6 form-group">
					<select class="form-control option" id="exampleFormControlSelect1">
						<option selected disabled>subject*</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
				<div class="col-12 form-group">
					<textarea class="form-control textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
			</form>
			<div class="btn-wrap text-center mt-lg-3 mt-2">
				<a href="#" class="btn">Send Message</a>
			</div>
		</div>
	</div>
</div>

</div>

<?php
get_footer();
