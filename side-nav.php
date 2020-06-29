<header class="header text-center">	    
    <div class="force-overflow">
        <h1 class="blog-name pt-lg-4 mb-0"><a href="index.php">Remuelito Remulta</a></h1>
        
        <nav class="navbar navbar-expand-lg navbar-dark" >
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div id="navigation" class="collapse navbar-collapse flex-column" >
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/profile.jpg" alt="image" >			
                    
                    <div class="bio mb-3">Hi, my name is Remuelito Remulta and I'm a Fullstack Software Developer. Welcome to my personal website!</div><!--//bio-->
                    <ul class="social-list list-inline py-2 mx-auto">
                        <li class="list-inline-item"><a href="https://twitter.com/sharkmaster999" target="_blank"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://ph.linkedin.com/in/remuelito-remulta-69268654" target="_blank"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://gitlab.com/sharkmaster999" target="_blank"><i class="fab fa-gitlab fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://instagram.com/sharkmaster999" target="_blank"><i class="fab fa-instagram fa-fw"></i></a></li>
                    </ul><!--//social-list-->
                    <hr> 
                </div><!--//profile-section-->
                
                <ul class="navbar-nav flex-column text-left">
                    <li class="nav-item <?php if($page_active == 'index') { echo "active"; }?>">
                        <a class="nav-link" href="index.php"><i class="fas fa-user fa-fw mr-2"></i>About Me<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php if($page_active == 'portfolio') { echo "active"; }?>">
                        <a class="nav-link" href="portfolio.php"><i class="fas fa-laptop-code fa-fw mr-2"></i>Portfolio</a>
                    </li>
                    <li class="nav-item <?php if($page_active == 'resume') { echo "active"; }?>">
                        <a class="nav-link" href="resume.php"><i class="fas fa-file-alt fa-fw mr-2"></i>Resume</a>
                    </li>
                    <li class="nav-item <?php if($page_active == 'contact') { echo "active"; }?>">
                        <a class="nav-link" href="contact.php"><i class="fas fa-envelope-open-text fa-fw mr-2"></i>Contact</a>
                    </li>
                </ul>
                
                <div class="my-2">
                    <a class="btn btn-primary" href="https://www.upwork.com/freelancers/~01fc8f1d871e5edaad" target="_blank"><i class="fas fa-paper-plane mr-2"></i>Hire Me NOW</a>
                </div>
                
                <div class="dark-mode-toggle text-center w-100">
                    <hr class="mb-4">
                    <h4 class="toggle-name mb-3 "><i class="fas fa-adjust mr-1"></i>Dark Mode</h4>
                    
                    <input class="toggle" id="darkmode" type="checkbox">
                    <label class="toggle-btn mx-auto mb-0" for="darkmode"></label>
                </div><!--//dark-mode-toggle-->
            </div>
        </nav>
    </div><!--//force-overflow-->
</header>