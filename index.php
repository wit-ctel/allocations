<?php
	include ("lib/database.php");
?>
	<html lang="en">
  <head>
    <meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/import.js"></script>
	<title>Moodle Module Importer</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="css/import.css">

</head>

<body>
	<nav>
		<img src="https://moodle.wit.ie/pluginfile.php/1/core_admin/logocompact/0x70/1534931879/moodlewit_small.png" alt="Moodle">	
	</nav>
	<div class="wrapper">
	<div class="container">
	<div class="jumbotron">
	  <h1 class="display-4">Allocations</h1>
	  <p class="lead"><b>Note:</b> Search for your module by module name or programme code and click "Add Me" to request access. You can also filter by department or year.</p>
	  <hr class="my-4">	
	  <div class="search-box">
	  <div style="height:70px; width:100%;"> <p>Search by Module Title: </p>
	  	<input class ="module-title" type="text" />	
	  </div>
	  <div style="height:70px;  width:100%;"><p>Search by Programme Code: </p>
	  	<input class ="prog" type="text" />	
	  </div>
	  <h5>Filter by academic deptartment:</h5>
	  	<div class="search-dept">
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
	  	<div class="search-year">
	  		<h5>Filter by year:</h5>
	  		<button type="button" class="year btn btn-primary">1</button>
	  		<button type="button" class="year btn btn-primary">2</button>
			<button type="button" class="year btn btn-primary">3</button>
			<button type="button" class="year btn btn-primary">4</button>
			<button type="button" class="year btn btn-primary">5</button>
			
		</div>
	  	
	  	<br />
	  	<button type="button" class="search-btn btn-lg btn-info">Search</button>
	  </div>  
	</div>

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
	</table>
	<br />
	<br />





	<div class="jumbotron jumbotron-lower">
	  <p class="lead">The module listing above was generated on September 1st. You can search by the following criteria: <br /></p> 
	  <ul> 
		  <li>Module Title</li> 
		  <li>Programme Code</li> 
	  </ul>
	  <p class="lead">You can also filter by academic department and year of the programme the module is on: <br /></p>
	  <br />

	  <p>
		  <a class="btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
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
      <div id="modal-footer" class="modal-footer">
        <button type="button" class="btn btn-secondary cancel" data-dismiss="modal">Cancel</button>
        <button type="button" class="send-request btn btn-primary" >Send request</button>
      </div>
    </div>
  </div>
</div>    



</body>
</html>