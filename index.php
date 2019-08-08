<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>CTEL: Module Search</title>
	<meta name="robots" content="noindex, nofollow">
	<meta name="description" content="">
	<meta name="author" content="Peter Windle, eLearning Support Unit, WIT">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="js/import.js"></script>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:,300,400,400italic,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://ctel.wit.ie/assets/css/style.css" media="screen, projection">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="css/import.css">

</head>
  <body>
    <div class="wrapper mast">
      <header class="masthead landmark" role="banner">
        <a href="/" class="logo site-logo" title="eLearning Support Unit">eLearning Support Unit</a>
        
        <nav role="navigation">
  <ul class='site-nav site-nav--compact'>
  <li class=""><a id="home" href="/" title="Home"><span>Home</span></a></li>
  
  <li class="selected"><a id="support" href="/support" title="Support"><span>Support</span></a></li>
  
  <li class=""><a id="" href="/workshops" title="Workshops"><span>Workshops</span></a></li>
  
  <li class=""><a id="" href="/events/" title="Events"><span>Events</span></a></li>
  
  <li class=""><a id="" href="/professional-development/" title="Professional Development"><span>Professional Development</span></a></li>
  
  <li class=""><a id="" href="/projects" title="Projects"><span>Projects</span></a></li>
  
  <li class=""><a id="" href="/about" title="About Us"><span>About Us</span></a></li>
  
  <li class=""><a id="moodle" href="http://moodle.wit.ie" title="Moodle"><span>Moodle</span></a></li>
  </ul>
</nav>
      </header>
       
  <div class="hero hero__sub-page support-hero">
<section class="support-search landmark hero__body hero__body--highlight hero__body--small hero__body--inner">
  <h1 class="display-4">Module Search</h1>
	  <p class="lead"><b>Note:</b> Search for your module by module name or programme code and click "Add Me" to request access. You can also filter by department or year.</p>

	  <div class="search-box">
	  <div class="search search-title"> <h5>Search by Module Title: </h5>
	  	<input class ="module-title" type="text" placeholder="(eg. Programming Fundamentals)"/>	
	  </div>
	  <div class="search search-year""><h5>Search by Programme Code: </h5>
	  	<input class ="prog" type="text" placeholder="(eg. WD_KCOMP_B)" />	
	  </div>
	  
	  	<div class="search search-dept">
        <h5>Filter by academic deptartment:</h5>
	  		<select name="depts">
				<option class="dept" value="">Select A Department</option>
				<option class="dept" value="BA">Accountancy &amp; Economics</option>
				<option class="dept" value="DA">Adult Continuing Education</option>
				<option class="dept" value="HA">Applied Arts</option>
				<option class="dept" value="EA">Architecture</option>
				<option class="dept" value="EB">Built Environment</option>
				<option class="dept" value="SP">Computing and Mathematics</option>
				<option class="dept" value="HC">Creative and Performing Arts</option>
				<option class="dept" value="EE">Engineering Technology</option>
				<option class="dept" value="BG">Graduate Business</option>
				<option class="dept" value="HL">Languages and Tourism</option>
				<option class="dept" value="BM">Management &amp; Organisation</option>
				<option class="dept" value="XN">Nursing</option>
				<option class="dept" value="SC">Science</option>				
				<option class="dept" value="XE">Sport and Exercise Science</option>		
				<option class="dept" value="ET">Trade Studies</option>
			</select>
	  	</div>
	  	<div class="search search-year">
	  		<h5>Filter by year:</h5>
	  		<button type="button" class="year btn btn-light">1</button>
	  		<button type="button" class="year btn btn-light">2</button>
			<button type="button" class="year btn btn-light">3</button>
			<button type="button" class="year btn btn-light">4</button>
			<button type="button" class="year btn btn-light">5</button>
			
		</div>
	  	
	  
	  	<button type="button" class="search-btn btn-lg btn-info">Search</button>
	  </div>  
</section> <!-- end .support-search -->
</div>

 
    </div> <!-- end .wrapper -->
          
    <main class="content landmark" role="main">
      
	  	<div class="grid">
	  		<table id="module-table">
			  <tr>
			   <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->  
			    <th>Module Title</th>
			    <th>CRN</th>
			    <th>Year</th>
			    <th>Programme Code</th>
			    <th>Subject Code</th>
			    <th>Request Access</th>
			  </tr>
        <tr>
          <td colspan="5" align="left">Please search for modules above</td>
        </tr>
			</table>

    <div class="jumbotron jumbotron-lower">
    <p class="lead">The module listing above was generated on September 1st. You can search by the following criteria: <br /></p> 
    <ul> 
      <li>Module Title</li> 
      <li>Programme Code</li> 
    </ul>
    <p class="lead">You can also filter by academic department and year of the programme the module is on: <br /></p>
    <br />

    <p>
      <a class="faq-btn btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        FAQs
      </a>
    </p>
    <div class="collapse" id="collapseExample">
      <div class="card card-body">
         <b>How long will it take for the import to complete? </b>
    Imports will be scheduled to run every hour depending on the volume of requests and may take up to 12 hours to complete. </p>  

    <p><b>How do I know that the import is complete?</b>
    You can check back to this page and the status will change from ‘Import requested’ to ‘import completed’ or you can log into the module space in moodle for the current academic year and see if the content is in place </p>  

    <p><b>What will be imported?</b>
    All module content excluding assignments.  </p>
      </div>
    </div>
      </div>
    </div>
    </div>

<!-- Button trigger modal -->


<div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="requestModalLabel"></h5>
        <p> </p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name" class="col-form-label">Please enter your WIT email address to request access:</label>
            <input type="text" class="form-control" id="email">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="send-request btn btn-primary" >Send request</button>
      </div>
    </div>
  </div>
</div>    

		</div>




    </main> <!-- end .content -->

    
    <footer class="page-footer" role="contentinfo">

  <div class="wrapper">
    
    <div class="vcard grid grid--rev">
      <div class="grid__item desk--four-fifths ">
        
        <div class="grid">
          <div class="grid__item lap-and-up-one-half">
            
            <section class="block footer-section">
  <h4>Contact Details</h4>
  <div class="adr contact-adr">
    <span class="street-address">Flexible Teaching Building</span>,<br/>
    <span class="extended-address">WIT Main Campus</span>,<br/>
    <span class="locality">Waterford</span>
  </div>
            
  <ul class="nav nav--stacked nav--with-icon contact-tel">
    <li>
      <a class="tel" href="tel:+353 51 834114">
        <i class="icon icon--phone" aria-hidden="true"></i>+353 51 834114</a>
    </li>
    <li>
      <a class="email" href="mailto:moodle@wit.ie">
        <i class="icon icon--email" aria-hidden="true"></i>moodle@wit.ie</a>
    </li>              	
  </ul> <!-- end .contact -->
</section>
          
            <section class="block footer-section">
  <h4>Connect with us</h4>
  <ul class="nav nav--with-icon">
    <li>
      <a href="http://www.facebook.com/witctel" rel="external" title="eLearning Support Unit on Facebook" class="url">
        <i class="icon icon--facebook" aria-hidden="true"></i>Facebook</a>
      </li>
    <li>
      <a href="https://twitter.com/witctel" rel="external" title="eLearning Support Unit on Twitter" class="url">
        <i class="icon icon--twitter" aria-hidden="true"></i>Twitter</a>
    </li>
    <li>
      <a href="http://vimeo.com/witctel/videos" rel="external" title="eLearning Support Unit on Vimeo" class="url">
        <i class="icon icon--vimeo" aria-hidden="true"></i>Vimeo</a>
    </li>
  </ul>
</section>
            
          </div><!-- 
       --><div class="grid__item lap-and-up-one-half">
            <div class="site-brand site-brand--rev">
   <a href="http://www.wit.ie/" target="_blank" class="logo site-brand__logo" title="go to Waterford Institute of Technology homepage">Waterford Institute of Technology</a>
</div> <!-- end .site-brand -->
          </div>
        </div>
      
      </div><!--
      
   --><div class="grid__item desk--one-fifth">
        <a class="fn org url logo site-logo--alt" href="/">Centre for Technology-Enhanced Learning</a>
      </div>
            
    </div> <!-- end .vcard -->
  </div> <!-- end .wrapper -->
  
  <div class="page-footer__end">
    <div class="wrapper text--center">
      <a class="icon-text icon-text--center top-link" href="#" title="Back to top">
        <i class="icon icon-text__icon icon--arrow-up" aria-hidden="true"></i>
        <p>Back to top</p>
      </a>
      <p class="zeta copyright">&copy; Copyright 2019 Waterford Institute of Technology.</p>
      <div class="pubble-app" data-app-id="42279" data-app-identifier="42279"></div>
    </div>
  </div>
</footer> <!-- end .main-footer -->
    
    
    <!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
<!-- end scripts-->

<!-- Change UA-XXXXX-X to be your site's ID -->
<script>
  window._gaq = [['_setAccount','UA-5259392-9'],['_trackPageview'],['_trackPageLoadTime']];
  Modernizr.load({
    load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
  });
</script>
  </body>  
</html>
    




