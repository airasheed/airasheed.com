<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>Abdullah Rasheed | Houston, TX | Web & Mobile Design and Development</title>
        <link href="style.css" rel="stylesheet"/>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,900,100' rel='stylesheet' type='text/css'/>
       <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
       <link href="css/flexslider.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <?php 
	
	class projects{
		
		
		var $project_name = "";
		var $project_description = "";
		var $roles = array();
		var $technologies = array();
		var $img_url,$img_alt = "";
		
		public function __construct($pnam, $pdesc, $roles, $tech, $url,$alt){
			
			$this->project_name = $pnam;
			$this->project_description = $pdesc;
			$this->technologies = $tech;
			$this->roles = $roles;
			$this->img_alt = $alt;
			$this->img_url = $url;
		}
		
		function set_roles($roles){
			
			$this->roles = $roles;	
		}
		function set_project_name($project_name){
			
			$this->project_name = $project_name;
			
			}
		public function set_project_description($proj_desc)
		{
			$this->project_description = $proj_desc;
		}
			
		function set_technologies($technologies){
			
			$this->technologies = $technologies;
			
			}
		public function get_img_url($url, $alt){
			$this->img_url = $url;
			$this->img_alt = $alt;
			
		}
		//output assumed roles
		public function output_roles(){
		
			echo "<ul class='roles'>";
		foreach($this->roles as $role)
		{
			echo "<li>" . $role . "</li>";
		}
			echo "</ul>";
		}
		//output techonolgies roles
		public function output_technologies(){
		
			echo "<ul class='technologies'>";
		foreach($this->technologies as $tech)
		{
			echo "<li>" . $tech . "</li>";
		}
			echo "</ul>";
		}
		public function output_info(){
			
			echo "<h2>" . $this->project_name . "</h2>";
			echo "<h3> Project Description </h3>";
			echo "<p>" . $this->project_description . "</p>";
			echo "<h3>My Role:</h3>";
			echo "<p>" . $this->output_roles() . "</p>";
			echo "<h3>Technologies Used:</h3>";
			echo "<p>" . $this->output_technologies() . "</p>";
			
			}
		public function output_display(){
			echo "<img src='$this->img_url' alt='$this->img_alt'/>";
			}
		
		}
		
		//resume url
		$resume_url = "2013-Resume-Abdullah-Rasheed.pdf";
		//fix the close button problem

    $freedomNation = new projects("Freedom Nation","Developed an application allowing the user to scan barcodes of members of the Freedom Nation organization for
event entry. The app scans the barcode, makes a call to the <a href='https://developers.podio.com/' target='_blank'>Podio API</a>
for member
information. If the member is active it allows entry to the event, if the member is inactive it declines the member
access. The app was built using the Adobe Cordova/Phonegap framework along with IONICs Angular JS framework. <a
href=\"https://github.com/airasheed/freedom-nation-mobile\" target='_blank'>Github Repository Here</a>
 ",array("Lead the visual design of the mobile app and developed documentation for user profiles, user flows, wire framing, and development spec.", "Developed HTML5 Hybrid Mobile app using Adobe Cordova/Phonegap Framework", "Developed Front end with AngularJs", "Made calls to REST API using AngularJS promises"),array("Angular JS","IONIC Framework","Javascript","HTML","CSS"),
        "images/displays/fn-web-display.jpg","Freedom Nation Display");


		$true = new projects("True Products","True's care and dedication to quality products, community service, and generation to generation economics made an easy collaboration for the building of their new website. ",array("Lead the visual design and interaction of True Products and developed documentation for user profiles, user flows, wire framing, sitemap, development spec., content spec., stylescapes, typography and style guide.", "Responsible for front end development including HTML, CSS, Javascript.", "Responsible for backend implemented in PHP."),array("PHP","Javascript","HTML","CSS"), "images/displays/true-web-display.jpg","True Products Display");
		$uhd = new projects("University of Houston-Downtown Noyce Math Scholarship","Math, Science, and Technology are dear to me. We collaborated with UHD Noyce, a University of Houston-Downtown Mathematics scholarship program to re-design their website. ",array("Front and Back End Development","Custom Wordpress Template","Custom Post Types and Loops"),array("PHP","Javascript","HTML","CSS"), "images/displays/uhd-web-display.jpg","University of Houston-Downtown");
		
		$kk = new projects("Kamp Khalil","Kamp Khalil's passion for youth made our callobration for their site re-design an exciting experience for our team. We strived to create a fun and exciting experience for parents and participants. The website launched May 2013.<a href='http://www.kampkhalil.org'> Visit Site</a> ",array("Developed and tested backend with PHP implementing custom database queries to MySQL through Wordpress Database API.", "Responsible for User Experience, Visual Design, and strategy for front end development include HTML, CSS, Javascript.", "Implemented custom Javascript tool tips, Pop-Up Modals, and JQuery UI elements."),array("PHP","Javascript","HTML","CSS"), "images/displays/kk-web-display.jpg","University of Houston-Downtown");
		
		$thb = new projects("The Halal Businesses","We Collaborated with The Halal Businesses to create a hub for its members to connect with customers. I have a strong interest in education, and the Halal Businesses donates part of their monthly membership fee to educational institutions. We created a campaign for their membership as well as integrated their site into a CMS. <a href='http://www.thehalalbusinesses.com'> Visit Site</a>  ",array("Front and Back End Development","Implemented dynamic searching terms based on business tags for consumer with Javascript and Ajax.", "Implemented PHP backend business profile functionality and communication with MySQL database."),array("PHP","Javascript","HTML","CSS"), "images/displays/thb-web-display.jpg","University of Houston-Downtown");
		
		
		$about_me = array("I am passionate about innovation, design, and development. I am a MEAN Developer with an eye for art and aesthetics with the technical mind for coding, structure and proper functionality. I have 5 years of experience managing and leading web projects from inception to launch and a Bachelors of Science in Computer Science. ", array("<bold>Languages: </bold>JavaScript, HTML 5, CSS3, JSON, Java, PHP, C++, Objective C","<bold>Frameworks: </bold> Angular JS, Node JS, Express JS, JQUERY, IOS Cocoa Touch, Bootstrap, Zerb, Git", "<bold>Methodologies: </bold> MEAN Stack, Agile, MVC, MVVM, Responsive Design, REST API","<bold>Database:</bold> Mongo DB, MySQL", "<bold>Tools: </bold> Webstorm, Dreamweaver, Visual Studio, Eclipse, xCode, Photoshop, Illustrator, InDesign, Balsamic"));
		
	?>
    <div id="dialog-large" title="Basic dialog">
        <div class="inner" id="fn-inner">
            <a href="" class="dialog-close" id="dialog-closer"></a>
            <div class="dialog-info"><?php $freedomNation->output_info(); ?></div>
            <div class="dialog-img"><?php $freedomNation->output_display();?></div>
        </div><!--inner div -->
    	<div class="inner" id="true-inner">
    		<a href="" class="dialog-close" id="dialog-closer"></a>
            <div class="dialog-info"><?php $true->output_info(); ?></div>
            <div class="dialog-img"><?php $true->output_display();?></div>
    	</div><!--inner div -->
        <div class="inner" id="uhd-inner">
    		<a href="" class="dialog-close" id="dialog-closer"></a>
           <div class="dialog-info"><?php $uhd->output_info(); ?></div>
            <div class="dialog-img"><?php $uhd->output_display();?></div>
    	</div><!--inner div -->
        <div class="inner" id="thb-inner">
    		<a href="" class="dialog-close" id="dialog-closer"></a>
            <div class="dialog-info"><?php $thb->output_info(); ?></div>
            <div class="dialog-img"><?php $thb->output_display();?></div>
    	</div><!--inner div -->
        <div class="inner" id="kk-inner">
    		<a href="" class="dialog-close" id="dialog-closer"></a>
            <div class="dialog-info"><?php $kk->output_info(); ?></div>
            <div class="dialog-img"><?php $kk->output_display();?></div>
    	</div><!--inner div -->
    </div>
            <div class="single-page-nav">
                <div class="name">Abdullah Rasheed</div>
                <ul id="top-menu"> 
                	<li style="display:none"><a href="#section1">Home</a></li>
                    <li><a href="#section2">About</a></li>
                    <li><a href="#section3">Work</a></li>
                    <li><a href="#section4">Contact</a></li>
                    <li><a href="<?php echo $resume_url;?>" download="Abdullah Rasheed Resume.pdf" id="resume-download">Download Resume</a></li>
                </ul>
                 <a id="mobile-nav-toggle">
            	&#9776;
            	</a>
                <!--<div class="desc">Ux Designer/Developer</div>-->
            </div><!--sigle page nava-->
        <div class="section header-projects" id="section1">
        	<div class="flexslider">
            	<ul class="slides">
                    <li class="slider-item" id="slider-item-fn">
                        <a class="see-project" id="fn-see"></a>
                    </li>
                	<li class="slider-item" id="slider-item-true">
                     <a class="see-project" id="true-see"></a>
                    </li>
                    <li class="slider-item" id="slider-item-kk">
                     <a class="see-project" id="kk-see"></a>
                    </li>
                    <li class="slider-item" id="slider-item-uhd">
                     <a class="see-project" id="uhd-see"></a>
                    </li>
                </ul>
            </div><!--flex slider-->
       
        </div><!--header Projects-->
        <div class="section about" id="section2">
        	<div class="inner">
                <h1>About.</h1>
                <div class="about-containter">
                	<div class="column-half-pg">
                        <h2>MEAN Developer</h2>
                    <p>
                    <?php echo $about_me[0];?>
                    <a href="<?php echo $resume_url;?>" download="Abdullah Rasheed Resume.pdf">Download Resume</a>
                    </p>
                    </div>
                    <div class="column-half-pg">
                    <h2>Technical Skills:</h2>
                    <p>
					<?php 
					foreach($about_me[1] as $about){
						echo "<p>". $about. "</p>".  "<br/>";
					}?>
                    </p>
                    </div>
                    <div class="clear"></div><!--clear div -->
                </div><!--about containter-->
                </div><!--inner-->
        </div>
        <div class="section work" id="section3">
        	<div class="inner">
                <h1 class="whiteText">Projects.</h1>
                <div class="light whiteText textCenter">Selection of featured work</div><!--selection of features -->
                <hr>
                <div class="column-wrapper">
                    <a class="column-x-large" id="fn-thumb">
                        <div class="black-overlay"></div>
                        <div class="click-symbol"></div>
                        <div class="helper-text">UX and Development</div>
                        <img src="images/freedom-nation-thumb.jpg"/>
                    </a>

                	<a class="column-large" id="true-thumb">
                    <div class="black-overlay">
                    </div>
                    <div class="click-symbol"></div>
                    <div class="helper-text">UX and Development</div>
                    <img src="images/Truedetergent-800x300.jpg"/>
                    </a>

                   <a class="column" id="uhd-thumb">
                   <div class="black-overlay">
                    </div>
                    <div class="click-symbol"></div>
                    <div class="helper-text">UX and Development</div>
                   <img src="images/uhd-500x300.jpg"/></a>
                   <a class="column" id="thb-thumb">
                   <div class="black-overlay">
                    </div>
                    <div class="click-symbol"></div>
                    <div class="helper-text">UX and Development</div>
                   <img src="images/thehalalbusinesses-500x300.jpg"/></a>
                   <a class="column-large" id="kk-thumb">
                   <div class="black-overlay">
                    </div>
                    <div class="click-symbol"></div>
                    <div class="helper-text">UX and Development</div>
                   <img src="images/kampkhalil-thumb-800x300.jpg"/></a>

                    <div class="clear"></div>
                </div>
           
            </div><!--inner-->
           
           <div class="clear"></div>
        </div>
        <div class="section contact" id="section4">
        	<div class="inner">
                <h1>Contact.</h1>
                <div class="contact-phone contact-info" id="phone"><a href="tel:+18325670957">Ph: 832.567.0957</a></div>
                <div class="contact-email contact-info" id="email"><a href="mailto:abdullah@airasheed.com">Emal: abdullah@airasheed.com</a></div>
                <div class="clear"></div><!--clear-->
                </div><!--inner-->
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="jquery.singlePageNav.min.js"></script>
        <script src="jquery.flexslider.js"></script>
        <script>
           $(".single-page-nav").singlePageNav({offset:$(".single-page-nav").outerHeight()}); $(document).ready(function(){$("#mobile-nav-toggle").click(function(){$("#top-menu").slideToggle("fast")});$(".flexslider").flexslider({animation:"slide"});$("#resume-download").click(function(){var a=$(this).attr("href");location.href="http://airasheed.com/"+a});$(".black-overlay");$("#dialog-closer").click(function(a){a.preventDefault();$(this).parent().fadeOut(500,function(){$("#dialog-large").slideUp(500)});$("body").css("overflow","scroll")});$(".column,.column-large,.column-x-large").click(function(){var a; switch($(this).attr("id")){case "true-thumb":a="true-inner";break;case "uhd-thumb":a="uhd-inner";break;case "thb-thumb":a="thb-inner";break;case "kk-thumb":a="kk-inner";break;case "fn-thumb":a="fn-inner"}$("body").css("overflow","hidden");$(".column, .column-large,.column-x-large").fadeOut(600,function(){$("#dialog-large").slideDown(500,function(){$("#"+a).fadeIn(500,function(){$(".column, .column-large,.column-x-large").fadeIn("fast")})})})});$(".see-project").click(function(){var a;switch($(this).attr("id")){case "true-see":a="true-inner";break;case "uhd-see":a= "uhd-inner";break;case "thb-see":a="thb-inner";break;case "kk-see":a="kk-inner";break;case "fn-see":a="fn-inner"}$("body").css("overflow","hidden");$(".column, .column-large").fadeOut(600,function(){$("#dialog-large").slideDown(500,function(){$("#"+a).fadeIn(500,function(){$(".column, .column-large,.column-x-large").fadeIn("fast")})})})});$(".column-large,.column-x-large").hover(function(){$(".black-overlay",this).fadeIn("fast");$("img",this).animate({marginLeft:"-200px"},300);$(".helper-text",this).animate({bottom:"40%"},300);$(".click-symbol",this).animate({top:"35%"}, 300)},function(){$(".black-overlay",this).fadeOut("fast");$(".helper-text",this).animate({bottom:"-30px"},300);$(".click-symbol",this).animate({top:"-80px"},300);$("img",this).animate({marginLeft:"0px"},300)});$(".column").hover(function(){$(".black-overlay",this).fadeIn("fast");$("img",this).animate({marginLeft:"-200px"},300);$(".helper-text",this).animate({bottom:"40%"},300);$(".click-symbol",this).animate({top:"35%"},300)},function(){$(".black-overlay",this).fadeOut("fast");$(".helper-text",this).animate({bottom:"-30px"}, 300);$(".click-symbol",this).animate({top:"-80px"},300);$("img",this).animate({marginLeft:"0px"},300)})});
        </script>
         <script>
		
	</script>
    </body>
</html>