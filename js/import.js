$( document ).ready(function() {

	//Get Depts for selected school
	$('.school').click(function(){		
		var school= $(this).attr('value');
		var url = 'get-depts.php?school='+ school;
		$.ajax({
			url: url,
		  	context: document.body
			}).done(function(data) {
		  	console.log(data);
		  	if(data){  	
		  		$('.search-dept').html(data);
		  	}
		  });
	});


	$('.year').click(function(){	
		if($(this).hasClass('btn-success')){
			$(this).toggleClass('btn-success btn-primary');
		}
		else if($('.year').hasClass('btn-success')){
			$('.btn-success').toggleClass('btn-success btn-primary');
			$(this).toggleClass('btn-primary btn-success');
		}
		else{
			$(this).toggleClass('btn-primary btn-success');
		}
		getModules();
	});

	
			
});

//Document on click because dept content loaded by ajax after document ready
$(document).on('click', '.dept', function(){
	if($(this).val()==''){
		$('.selected').removeClass('selected');
	}
	else{
		if($('.dept').hasClass('selected')){
			$('.selected').removeClass('selected');
		}	
		$(this).addClass('selected');		
	}
	getModules();
}); 

$(document).on('click', '.search-btn', function(){
		getModules();
	});

$(document).on('click', '.add-me', function(){
	$('.modal-content').html(formHTML());  
	var button = $(event.relatedTarget) // Button that triggered the modal
  	var title = 'Request access to module:<br /> ' + $(this).attr('data-title') +"(CRN: "+ $(this).attr('data-crn')+")";
  	var crn = $(this).attr('data-crn');
  	$('#requestModalLabel').html(title);
  	$('.send-request').attr('data-title', $(this).attr('data-title'));
  	$('.send-request').attr('data-prog', $(this).attr('data-prog'));
  	$('.send-request').attr('data-crn',crn)
	$('#requestModal').modal('show');
});

$(document).on('click', '.send-request', function(){
	var queryString = 'title='+$('.send-request').attr('data-title');
	queryString += '&crn='+$(this).attr('data-crn');
	queryString += '&email='+$('#email').val();
	queryString += '&prog='+$(this).attr('data-prog');;
	var url = 'send-request.php?'+queryString;
	console.log(url);
	$.ajax({
		url: url,
	  	context: document.body
		}).done(function(data) {
	  	console.log(data);
	});
	$('.modal-footer').html('<button class="btn btn-success modal-ok" data-dismiss="modal">OK</button>');
	$('.form-group').html('<p>Access to this module has been requested. It may take up to 24 hours for access to be granted. You will recieve an email once access has been granted</p>');
});

function getModules(){
	var queryString = '?getmodules=yes';

	if($('.module-title').val()){
		var moduleTitle = $('.module-title').val();
		queryString += '&title='+moduleTitle;
	}
	if($('.year').hasClass('btn-success')){
		var year = $('.btn-success').html();
		queryString += '&year='+year;
	}
	
	var dept ='';
	if($('.dept').hasClass('selected')){
		var dept = $('.selected').val();
		queryString += '&dept='+dept;
	}
	if($('.prog').val().length){
		var prog = $('.prog').val();
		queryString += '&prog='+prog;
	}
	var url = 'get-modules.php'+queryString;
	console.log(url);

	$.ajax({
		url: url,
	  	context: document.body
		}).done(function(data) {
	  	console.log(data);
	  	if(data){  	
	  		$('#module-table').html(data);
	  	}
	  });
}
function formHTML(){
	var html = $([
		'<div class="modal-header">',
		'  <h5 class="modal-title" id="requestModalLabel"></h5>',
		'  <p> </p>',
		'  <button type="button" class="close" data-dismiss="modal" aria-label="Close">',
		'  <span aria-hidden="true">&times;</span>',
		'  </button>',
		'</div>',
		'<div class="modal-body">',
		'  <form>',
		'    <div class="form-group">',
		'       <label for="name" class="col-form-label">Please enter your WIT email address to request access:</label>',
		'       <input type="text" class="form-control" id="email">',
		'    </div>',
		'  </form>',
		'  <div class="modal-footer">',
		'    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>',
		'    <button type="button" class="send-request btn btn-primary" >Send request</button>',
		'  </div>',
		'</div>'
	].join("\n"));
	return html;
}

