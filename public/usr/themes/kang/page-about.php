<?php 
    /** 
    * page-about
    * 
    * @package custom 
    */
?>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js no-touch" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  

  <title>Kang Liu - CV</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?php $this->options->themeUrl('page-about/stylesheets/foundation.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('page-about/stylesheets/app.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('page-about/stylesheets/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('page-about/stylesheets/tooltipster.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('page-about/stylesheets/style.css'); ?>">
  <!--[if IE 8]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
<![endif]-->

  <script src="<?php $this->options->themeUrl('page-about/javascripts/modernizr.foundation.js'); ?>"></script>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,700' rel='stylesheet' type='text/css'>

</head>
<body>
	<a id="home-nav"></a>
	<div class="navi" data-magellan-expedition>
						<ul >
						  <li data-magellan-arrival='home' class="hasatip" data-width="210" title="Home"><a href="#home-nav" class="scroll"><i class="fa fa-home"></i></a></li>
						  <li data-magellan-arrival='profile' class="hasatip" data-width="210" title="Profile"><a href="#profile-nav" class="scroll"><i class="fa fa-user"></i></a></li>
						  <li data-magellan-arrival='resume' class="hasatip" data-width="210" title="Resume"><a href="#resume-nav" class="scroll"><i class="fa fa-file-text"></i></a></li>
						 <!-- <li data-magellan-arrival='projects' class="hasatip" data-width="210" title="Projects"><a href="#projects-nav" class="scroll"><i class="fa fa-rocket" ></i></a></li>-->
						  <li data-magellan-arrival='contact' class="hasatip" data-width="210" title="Contact"><a href="#contact-nav" class="scroll"><i class="fa fa-envelope"></i></a></li>						  
						</ul>
    				</div>
  <div class="row">
    <div class="twelve columns" id="main-container">

    	<section class="row" id="home">
    
    			<div class="five columns home-left">
    				<div id="home-photo"></div>
    			</div>
    			
    			<div class="seven columns home-right">
    				<div id="home-text">
						<div id="home-social-container">
							<ul id="home-social">
								<li><a target="_blank" href="http://www.linkedin.com/in/kliucn"><i class="fa fa-linkedin"></i></a></li>
								<li><a target="_blank" href="http://www.tofact.com"><i class="fa fa-rss-square"></i></a></li>
								<li><a target="_blank" href="http://weibo.com/eekliu"><i class="fa fa-weibo"></i></a></li>
							</ul>
						</div>
    					<h3 class="bold" >Kang Liu</h3>
    					<h4 >M.Sc. Communication Engineering</h4>
    					<hr class="highlight-hr" />
    					<h5 class="text-left"><i class="fa fa-envelope-o">&nbsp;</i><script type="text/javascript">
    					  document.write('kang.liu' + '@' + 'tum.de')
    					</script></h5>
    					
    					<h5><br/></h5>
    					    					
    					<!--<a target="_blank" href="http://www.linkedin.com/in/kliucn"><h5 class="text-left"><i class="fa fa-linkedin">&nbsp;</i>www.linkedin.com/in/kliucn</h5></a>-->
    				</div>
    				
    			</div>
    		
    		
    	</section><!-- end of Home -->
    	  
		 	
    	<a id="profile-nav">&nbsp;</a>
    	<section class="row page" id="profile" data-magellan-destination='profile'>
    	
    		<div class="twelve columns">
    			<h5 class="page-heading">PROFILE</h5>
    			<hr />
    		</div>
    		
    		<div class="twelve columns">
    		
    			<div class="six columns">
    				<h4>
    					I would like to explore the working mechanism behind the powerful techniques.
    				</h4>
    				<hr />
    				<p>
    					I am a person with curiosity about how the techniques drive the world. Currently working in Computer Vision field to guide the computer to find the hidden information in the images. Always ready to find the facts, always ready to help others.
    				</p>	
    			</div>
    			
    			<div class="six columns">
    			
					<ul id="skill">
						<li><span class="bar bar100"></span><h5>Computer Vision</h5></li>
						<li><span class="bar bar100"></span><h5>Image Processing</h5></li>
						<li><span class="bar bar90"></span><h5>OpenCV</h5></li>
						<li><span class="bar bar65"></span><h5>Android Development</h5></li>
					</ul>
    			
    			</div>
    		</div>
    		
    	</section><!-- end of Profile -->
    	
    	<a id="resume-nav"></a>
    	
    	<section class="row divider text-center">
    			<div class="row">
    				<div class="twelve columns snapshot-timeline">
    					<div class="three columns">
    						<i class="fa fa-circle timeline-circle"></i>
    					</div>
    					
    					<div class="three columns">
    						<i class="fa fa-circle timeline-circle"></i>
    					</div>
    					
    					<div class="three columns">
    						<i class="fa fa-circle timeline-circle"></i>
    					</div>
    					
    					<div class="three columns">
    						<i class="fa fa-circle timeline-circle"></i>
    					</div>
    				</div>
    			</div>
    			
    			<!--<div class="three columns text-center snapshot">
    				<h3>2008</h3>
    				<h4 class="bold">Enter Shandong University</h4>
    				<h4><i class="fa fa-certificate"></i></h4>
    			</div>-->
    			
    			<div class="three columns text-center snapshot">
    				<h3>2010</h3>
    				<h4 class="bold">Exchange Program in NCKU, Taiwan</h4>
    				<h4><i class="fa fa-certificate"></i></h4>
    			</div>
    			
    			<div class="three columns text-center snapshot">
    				<h3>2012</h3>
    				<h4 class="bold">Bachelor Degree in Shandong University</h4>
    				<h4><i class="fa fa-certificate"></i></h4>
    			</div>
    			
    			<div class="three columns text-center snapshot">
    				<h3>Present</h3>
    				<h4 class="bold">Master Thesis at German Aerospace Center (DLR)</h4>
    				<h4><i class="fa fa-briefcase"></i></h4>
    			</div>
    			
    			<div class="three columns text-center snapshot">
    				<h3>2014 Oct</h3>
    				<h4 class="bold">Master Degree in Technical University of Munich (TUM)</h4>
    				<h4><i class="fa fa-check-circle"></i></h4>
    			</div>
    	</section>
    	
    	
    	
    	<section class="row page" id="resume">
    	
    	
    		<div class="twelve columns">
    			<h5 class="page-heading">RESUMÉ</h5>
    			<hr />
    		</div>
    		
    		<div class="twelve columns timeline-section">
    			<div class="three columns">
    				<h6>EXPERIENCE</h6>
    				<div class="resume-large-icon hide-for-small">
    					<i class="fa fa-briefcase"></i>
    				</div>
    			</div>
    			
					<div class="nine columns resume-entry">
						<div class="nine columns">
							<span class="resume-title"><i class="fa fa-user">&nbsp;</i>Master Thesis</span><br />
							<span class="resume-company"><i class="fa fa-building">&nbsp;</i>German Aerospace Center (DLR)</span><br />
							<br />
							<p>DLR has developed a system for monitoring the road traffic from aerial images. In both systems a crucial part is a reliable and fast visual object detector. In the next phases of the projects the existing detector needs to be extended for multiple object classes.</p>
							<ul>
								<li><i class="fa fa-caret-right">&nbsp;</i>Understand the existing vehicle detector</li>
								<li><i class="fa fa-caret-right">&nbsp;</i>Develop a visual object detector which detects multiple object types</li>
								<li><i class="fa fa-caret-right">&nbsp;</i>Evaluate the performance</li>
								<li><i class="fa fa-caret-right">&nbsp;</i>Deploy the new detector to the existing systems</li>
							</ul>
						</div>
						
						<div class="three columns text-right">
							Present
						</div>
						
					</div>
					
					<div class="nine columns resume-entry">
						<div class="nine columns right">
							<span class="resume-title"><i class="fa fa-user">&nbsp;</i>Research Assistant</span><br />
							<span class="resume-company"><i class="fa fa-building">&nbsp;</i>Institute for Media Technology of TUM</span><br />
							<br />
							<p>I built a demonstration system for the indoor location recognition system, which is capable of doing image retrieval by using both color and range images on a mobile platform. The demonstration system is made for the research work done by Al-Nuaimi, A., et al. <i>"Towards location recognition using range images." Multimedia and Expo Workshops (ICMEW), 2013 IEEE International Conference on. IEEE, 2013.</i></p>
							<ul>
								<li><i class="fa fa-caret-right">&nbsp;</i>Port OpenNI framework to the Android device</li>
								<li><i class="fa fa-caret-right">&nbsp;</i>Connect the Xtion 3D camera to the Android device via USB interface</li>
								<li><i class="fa fa-caret-right">&nbsp;</i>Implement a demonstration system on Android platform 
								for range image based location recognition</li>
								<li><i class="fa fa-caret-right">&nbsp;</i>Evaluate the performance of the demonstration system 
								</li>
							</ul>
						</div>
						
						<div class="three columns text-right">
							2013
						</div>
						
					</div>
    			
    			
			<hr />
    		</div>
    		

    		
    		<div class="twelve columns timeline-section">
    			<div class="three columns">
    				<h6>EDUCATION</h6>
    				<div class="resume-large-icon hide-for-small">
    					<i class="fa fa-book"></i>
    				</div>
    			</div>
    			
    			<div class="nine columns resume-entry">
    				<div class="nine columns">
    					<span class="resume-title"><i class="fa fa-certificate">&nbsp;</i>Master of Science in Communications Engineering</span><br />
    					<span class="resume-company"><i class="fa fa-building">&nbsp;</i>Technical University of Munich, Germany</span><br />
    					<br />
    					<ul>
    						<li><i class="fa fa-book">&nbsp;</i>Ferienakademie 2013, an interdisciplinary seminar in Visual Communication</li>
    						
    					</ul>
    				</div>
    				
    				<div class="three columns text-right">
    					2014
    				</div>
    				
    			</div>
    			
    			<div class="nine columns resume-entry">
    				<div class="nine columns">
    					<span class="resume-title"><i class="fa fa-certificate">&nbsp;</i>Bachelor of Communication Engineering</span><br />
    					<span class="resume-company"><i class="fa fa-building">&nbsp;</i>Shandong University, China</span><br />
    					<br />
    					<ul>
    						<li><i class="fa fa-certificate">&nbsp;</i>Scholarship for Outstanding Students</li>
    						<li><i class="fa fa-certificate">&nbsp;</i>Weichai Power Scholarship</li>
    						<li><i class="fa fa-trophy">&nbsp;</i>Mathematical Contest in Modeling 2011</li>
    						<li><i class="fa fa-trophy">&nbsp;</i>13th National University Students ’Challenge Cup’ Business Planning Competition</li>
    						<li><i class="fa fa-trophy">&nbsp;</i>Altera Innovate Asia FPGA Design Competition 2010.
    						</li>
    					</ul>
    				</div>
    				
    				<div class="three columns text-right">
    					2012
    				</div>
    				
    			</div>
    			    			
    			<div class="nine columns resume-entry">
    				<div class="nine columns">
    					<span class="resume-title"><i class="fa fa-certificate">&nbsp;</i>Student Exchange Program</span><br />
    					<span class="resume-company"><i class="fa fa-building">&nbsp;</i>National Cheng Kung University, Taiwan</span><br />
    					<br />    				
    					</div>
    				
    				<div class="three columns text-right">
    					2010
    				</div>
    				
    			</div>
    			

    		</div>
    		
    		<div class="button right">
    			<i class="fa fa-download-alt left">&nbsp;</i><span class="left">Download Resume</span>
    		</div>
    	
    	</section><!-- end of Resume -->
    	
    	<!--
    	
    	<a id="projects-nav"></a>
    	
    	<section class="row page" id="featured-project">
    	
    		<div class="twelve columns">
    			<h5 class="page-heading">FEATURED PROJECT</h5>
    			<hr />
    		</div>
    		
    		<div class="twelve columns">
    			

    				<div id="featured">
					  <img alt="featured image" src="page-about/images/1.jpg" />
					  <img alt="featured image" src="http://farm5.staticflickr.com/4026/4259597890_d66cb99325_b.jpg" />
					</div>
	
    		</div>
    		
    		<div class="twelve columns">
    		
    			<div class="eight columns featured-project-description">
    				<div class="emphasise-title">
    					<h6>Branding & Identity</h6>
    					<h5 class="highlight-color">The Featured Project Title</h5>
    				</div>
    				<p>
    					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    				</p>
    			</div>
    			
    			<div class="four columns">
    				<div class="featured-project-details">
    					<h6><i class="fa fa-group">&nbsp;</i>Client:</h6>
    					<span>The Important Client Co.</span>
    					<h6><i class="fa fa-calendar">&nbsp;</i>Date:</h6>
    					<span>November 2013</span>
    					<h6><i class="fa fa-money">&nbsp;</i>Budget:</h6>
    					<span>$3.5m</span>
    				
    				</div>
    			
    			</div>
    			
    		</div>
    		
    	
    	</section><!-- end of Featured Project -->
    	

    	<!--
    	<section class="row page" id="projects">
    	
    		<div class="twelve columns">
    			<h5 class="page-heading">PROJECTS</h5>
    			<hr />
    		</div>
    	
    		<div class="twelve columns project-row">
    		
    			<div class="six columns project-item">
    				<a href="#" data-reveal-id="project1">
						<div class="project-img-wrap" data-width="210" title="View this project">
							<img alt="project cover image" src="http://farm5.staticflickr.com/4007/4189651896_8707dcbec8.jpg" />
							<div class="project-hover text-center"><i class="fa fa-eye-open"></i><h3>VIEW PROJECT</h3></div>

						</div>
    				</a>
    				<div class="project-details">
    					<h5 class="bold">PROJECT TITLE</h5>
    					<h6 class="thick highlight-color">Client Name</h6>
    					<p>
    						Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
    					</p>
    				</div>
    			</div>
    			
    			<div class="six columns">
    				<a href="#" data-reveal-id="project1">
						<div class="project-img-wrap" data-width="210" title="View this project">
							<img  alt="project cover image" src="http://farm3.staticflickr.com/2673/4149519484_1cf9feb0f7.jpg" />
							<div class="project-hover text-center"><i class="fa fa-eye-open"></i><h3>VIEW PROJECT</h3></div>

						</div>
    				</a>
    				<div class="project-details">
    					<h5 class="bold">PROJECT TITLE</h5>
    					<h6 class="thick highlight-color">Client Name</h6>
    					<p>
    						Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
    					</p>
    				</div>
    			</div>
    		</div>
    		
    		<div class="twelve columns project-row">
    		
    			<div class="six columns project-item">
    				<a href="#" data-reveal-id="project1">
						<div class="project-img-wrap" title="View this project">
							<img  alt="project cover image" src="http://farm3.staticflickr.com/2584/4148761255_30602a56cd.jpg" />
							<div class="project-hover text-center"><i class="fa fa-eye-open"></i><h3>VIEW PROJECT</h3></div>
						</div>
						
    				</a>
    				<div class="project-details">
    					<h5 class="bold">PROJECT TITLE</h5>
    					<h6 class="thick highlight-color">Client Name</h6>
    					<p>
    						Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
    					</p>
    				</div>
    			</div>
    			
    			<div class="six columns project-item ">
    				<a href="#" data-reveal-id="project1">
						<div class="project-img-wrap">
							<img  alt="project cover image" src="http://farm3.staticflickr.com/2721/4294005167_042db581ac.jpg" />
							<div class="project-hover text-center"><i class="fa fa-eye-open"></i><h3>VIEW PROJECT</h3></div>

						</div>
    				</a>
    				<div class="project-details">
    					<h5 class="bold">PROJECT TITLE</h5>
    					<h6 class="thick highlight-color">Client Name</h6>
    					<p>
    						Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
    					</p>
    				</div>
    			</div>
    		</div>
    	
    	
    	</section><!-- end of Projects -->

    	
    	<section class="row divider text-center">
    			<h1 class="fa fa-comment"></i><br />
    			<h3>
    				He has the ability to deal with hardware and software details to achieve a task. <br/>A friendly person and pleasant to work with.
    			</h3>
    			<h5><i> - Anas Al-Nuaimi</i></h5>
    	</section>
    	
    	
    	<a id="contact-nav"></a>

    	
    	<section class="row page" id="contact">
    	
    		<div class="twelve columns">
    			<h5 class="page-heading">CONTACT</h5>
    			<hr />
    		</div>
    	
    		<div class="twelve columns">
    		
    			<div class="five columns" id="contact-left">
    				<div id="contact-icon">
    					<i class="fa fa-bullhorn"></i>
    				</div>
    				<h4>I am available for a job, so go on... hire me!</h4>
    				<hr />
    				<ul>
    					<li><span class="label contact-detail"><i class="fa fa-phone">&nbsp;</i>+49 176 5546 9044</span></li>
    					<li><span class="label contact-detail"><i class="fa fa-envelope">&nbsp;</i><script type="text/javascript">
    					  document.write('kang.liu' + '@' + 'tum.de')
    					</script></span></li>
    					<li><span class="label contact-detail"><i class="fa fa-map-marker">&nbsp;</i>Munich, Germany</span></li>

    				</ul>
    				
    			</div>
    			
    			<div class="seven columns">
    				<span class="label contact-detail right"><i class="fa fa-envelope-o">&nbsp;</i>Send me a message:</span>
    				<div id="form-sent" class="hide left">	
					  	<div class="alert-box success"><i class="fa fa-thumbs-up">&nbsp;</i>Message sent: Thank you for your enquiry</div>
					  </div>
    				<form id="contact-form">
					  <input id="form-name" type="text" placeholder="Name" />
					  <input id="form-email"  type="text" placeholder="Email Address" />
					  <textarea id="form-msg"  placeholder="Message"></textarea>
					  <div id="details-error-wrap"  class="hide">	
					  	<div class="alert-box alert error-box"><i class=" fa fa-exclamation-sign">&nbsp;</i>Error: Please ensure all fields are filled in correctly</div>
					  </div>	
					  <input id="form-security" type="text" placeholder="3 + 2 = ?" />
					  <div id="security-error-wrap"  class="hide">	
					  	<div class="alert-box alert error-box"><i class=" fa fa-exclamation-sign">&nbsp;</i>Error: Security question is incorrect</div>
					  </div>	
					  <input type="submit" class="form-button button right" />
					  
					</form>
					
    			</div>
    			
    		</div>
    		
    	</section><!-- end of Contact -->
    	
    	<!--
    	<div id="project1" class="project-single reveal-modal expand">
    	    
    	    <div id="project-1-slideshow" class="project-single-slideshow">
    	        <img alt="project image" src="http://farm3.staticflickr.com/2584/4148761255_30602a56cd.jpg" />
    	    	<img alt="project image" src="http://farm3.staticflickr.com/2673/4149519484_1cf9feb0f7.jpg" />
			</div>

			<div class="twelve columns">
    		
    			<div class="eight columns featured-project-description">
    				<div class="emphasise-title">
    					<h6>Branding</h6>
    					<h5 class="highlight-color">The Featured Project Title</h5>
    				</div>
    				<p>
    					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    				</p>
    			</div>
    			
    			<div class="four columns">
    				<div class="featured-project-details">
    					<h6><i class="fa fa-group">&nbsp;</i>CLIENT:</h6>
    					<span>The Important Client Co.</span>
    					<h6><i class="fa fa-calendar">&nbsp;</i>DATE:</h6>
    					<span>November 2013</span>
    					<h6><i class="fa fa-money">&nbsp;</i>BUDGET:</h6>
    					<span>$3.5m</span>
    				
    		</div>

    	</div>
    	
  	  </div> 
  	
  	</div>
  </div><!-- end of Main Container -->
  

  
  <!-- Included JS Files (Compressed) -->
  <script src="<?php $this->options->themeUrl('page-about/javascripts/foundation.min.js'); ?>"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="<?php $this->options->themeUrl('page-about/javascripts/app.js'); ?>"></script>
  <script src="<?php $this->options->themeUrl('page-about/javascripts/scripts.js'); ?>"></script>
  <script src="<?php $this->options->themeUrl('page-about/javascripts/jquery.tooltipster.js'); ?>"></script>
    <script>
    $(window).load(function(){
      $("#featured").orbit({
      	directionalNav: false,
      });
      
      $("#project-1-slideshow").orbit({
      	directionalNav: false,
      });
      
    });
    </script> 
  
</body>
</html>
