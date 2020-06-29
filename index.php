<?php
	$page_active = "index";
	include "header.php";
	include "side-nav.php";
?>
<div class="main-wrapper">
	<section class="about-me-section p-3 p-lg-5 theme-bg-light">
		<div class="container">
			<div class="profile-teaser media flex-column flex-lg-row">
				<div class="media-body">
					<br><br>
					<h2 class="name font-weight-bold mb-1">Remuelito Remulta</h2>
					<div class="tagline mb-3">Fullstack Software Developer</div>
					<div class="bio mb-4">
						I'm a Fullstack Software Developer specialised in frontend and backend development for complex scalable web and desktop apps. Want to know how I may help your project? Check out my project <a class="link-on-bg" href="projects.html">portfolio</a> and <a class="link-on-bg" href="resume.html">online resume</a>.
					</div><!--//bio-->
					<div class="mb-4">
						<a class="btn btn-primary mr-2 mb-3" href="portfolio.php"><i class="fas fa-arrow-alt-circle-right mr-2"></i><span class="d-none d-md-inline">View</span> Portfolio</a>
						<a class="btn btn-secondary mb-3" href="resume.php"><i class="fas fa-file-alt mr-2"></i><span class="d-none d-md-inline">View</span> Resume</a>
					</div>
				</div><!--//media-body-->
				<img class="profile-image mb-3 mb-lg-0 ml-lg-5 mr-md-0" src="assets/images/profile-lg.jpg" alt="">
			</div>
		</div>
	</section><!--//about-me-section-->
	
	<section class="overview-section p-3 p-lg-5">
		<div class="container">
			<h2 class="section-title font-weight-bold mb-3">Work Experiences</h2>
			<div class="section-intro mb-5">I have more than 5 years experience in building software for clients on local and online basis. Below is a quick overview of my main technical skill sets and technologies I use. Want to find out more about my experience? Check out my <a href="resume.html">online resume</a> and <a href="portfolio.html">project portfolio</a>.</div>
			<div class="row">
				<div class="item col-6 col-lg-3">
					<div class="item-inner">
						<div class="item-icon"><i class="fab fa-php"></i></div>
						<h3 class="item-title">PHP</h3>
						<div class="item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus aut eaque beatae, qui omnis quisquam ab porro earum aliquam quae ipsum iste nesciunt, esse neque blanditiis quas dignissimos sed sunt.</div>
					</div><!--//item-inner-->
				</div><!--//item-->
				<div class="item col-6 col-lg-3">
					<div class="item-inner">
						<div class="item-icon"><i class="fab fa-html5 mr-2"></i><i class="fab fa-css3-alt"></i></div>
						<h3 class="item-title">HTML &amp; CSS</h3>
						<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
					</div><!--//item-inner-->
				</div><!--//item-->
				<div class="item col-6 col-lg-3">
					<div class="item-inner">
						<div class="item-icon"><i class="fab fa-js-square"></i></div>
						<h3 class="item-title">Vanilla JavaScript</h3>
						<div class="item-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. reprehenderit soluta ducimus nostrum, corporis commodi at esse molestias deserunt voluptatem quas expedita officia.</div>
					</div><!--//item-inner-->
				</div><!--//item-->
				<div class="item col-6 col-lg-3">
					<div class="item-inner">
						<div class="item-icon"><i class="fab fa-python"></i></div>
						<h3 class="item-title">Python &amp; Django</h3>
						<div class="item-desc">List skills/technologies here. You can change the icon above to any of the 1500+ <a class="theme-link" href="https://fontawesome.com/" target="_blank">FontAwesome 5 free icons</a> available. Aenean commodo ligula eget dolor.  </div>
					</div><!--//item-inner-->
				</div><!--//item-->
			</div><!--//row-->
			
		</div><!--//container-->
	</section>
	
	<div class="container"><hr></div>
	
	<section class="testimonials-section p-3 p-lg-5">
		<div class="container">
			<h2 class="section-title font-weight-bold mb-5">Testimonials</h2>
			
			<div class="testiomonial-carousel-container">
				<div class="testimonial-carousel  tiny-slider">
					<div class="item">
						<div class="item-inner">
							<div class="quote-holder">
								<blockquote class="quote-content">
									Remuelito is very keen to details, he work so hard even for some unpaid task. He is also a better teamplayer and he is in passion for his field. 
								</blockquote>
								<i class="fas fa-quote-left"></i>
							</div><!--//quote-holder-->
							<div class="source-holder">
								<div class="source-profile">
									<img src="assets/images/clients/profile-2.png" alt="image"/>
								</div>
								<div class="meta">
									<div class="name">Viktor Nagornyy</div>
									<div class="info">Chief Executive Officer, ProjectArmy LLC.</div>
								</div>
							</div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item">
						<div class="item-inner">
							<div class="quote-holder">
								<blockquote class="quote-content">
								Remuelito is a colleages of mine, he has good performance and has a passion in developing web applications. He is excellent in his field of programming.
								</blockquote>
								<i class="fas fa-quote-left"></i>
							</div><!--//quote-holder-->
							<div class="source-holder">
								<div class="source-profile">
									<img src="assets/images/clients/profile-1.png" alt="image"/>
								</div>
								<div class="meta">
									<div class="name">Gregorec Vince Lapesora</div>
									<div class="info">Technical Specialist, Alliance Software Inc.</div>
								</div>
							</div>
						</div><!--//item-inner-->
					</div><!--//item-->
				</div><!--//testimonial-carousel-->	
			</div><!--//testimonial-carousel-container-->	
		</div><!--//container-->
	</section><!--//testimonials-section-->
	
	<div class="container"><hr></div>
	
	<section class="featured-section p-3 p-lg-5">
		<div class="container">
			<h2 class="section-title font-weight-bold mb-5">Featured Projects</h2>
			<div class="row">
				<div class="col-md-6 mb-5">
					<div class="card project-card">
						<div class="row no-gutters">
							<div class="col-lg-4 card-img-holder">
								<img src="assets/images/project/project-1.jpg" class="card-img" alt="image">
							</div>
							<div class="col-lg-8">
								<div class="card-body">
									<h5 class="card-title"><a href="project.php" class="theme-link">Visayas State University Supreme Student Council Quick Response Attendance Monitoring System</a></h5>
									<p class="card-text">Project intro lorem ipsum dolor sit amet,...</p>
									<p class="card-text"><small class="text-muted">Client: Visayas State University SSC</small></p>
								</div>
							</div>
						</div>
						<div class="link-mask">
							<a class="link-mask-link" href="project.php"></a>
							<div class="link-mask-text">
								<a class="btn btn-secondary" href="project.php">
									<i class="fas fa-eye mr-2"></i>View Project
								</a>
							</div>
						</div><!--//link-mask-->
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-md-6 mb-5">
					<div class="card project-card">
						<div class="row no-gutters">
							<div class="col-lg-4 card-img-holder">
								<img src="assets/images/project/project-1.jpg" class="card-img" alt="image">
							</div>
							<div class="col-lg-8">
								<div class="card-body">
									<h5 class="card-title"><a href="project.php" class="theme-link">VisCA Laboratory Integrated High School Enrollment System</a></h5>
									<p class="card-text">Project intro lorem ipsum dolor sit amet,...</p>
									<p class="card-text"><small class="text-muted">Client: Dolores National High School Ormoc City</small></p>
								</div>
							</div>
						</div>
						<div class="link-mask">
							<a class="link-mask-link" href="project.php"></a>
							<div class="link-mask-text">
								<a class="btn btn-secondary" href="project.php">
									<i class="fas fa-eye mr-2"></i>View Project
								</a>
							</div>
						</div><!--//link-mask-->
					</div><!--//card-->
				</div><!--//col-->
			</div><!--//row-->
			<div class="text-center py-3"><a href="portfolio.php" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>View Portfolio</a></div>
			
		</div><!--//container-->
	</section><!--//featured-section-->
	
	<div class="container"><hr></div>
	
	<footer class="footer text-center py-4">
		<small class="copyright">
			Copyright &copy; Remuelito M. Remulta. <br> 
			All rights reserved.
		</small>
	</footer>
	
</div>
<?php include "footer.php"?>

