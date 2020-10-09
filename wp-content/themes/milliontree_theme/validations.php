<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script>
   jQuery(function() {
     	jQuery("#downloadAppForm").validate({
     		rules: {
				number:{
					required:true,
					digits:true,
					minlength: 10,
					maxlength: 12
				}
     		},
     		messages: {
				number:{
					required:'Please enter your number',
					digits:'Please enter contact in proper format',
					minlength: 'Number should be of minimum 10 digits',
					maxlength: 'Number should be of maximum 12 digits'
				}
     		},
			submitHandler: function(form) {				
			var formData = $("#downloadAppForm").serialize();
			console.log(formData);
			var url = '<?php echo bloginfo('template_directory'); ?>';
			$.ajax({
				type: "POST",
				url: url+'/src/enquiry_submit.php',
				data: formData,
				beforeSend: function() {
				$('#submit_btn').hide();
				$('#submit_spinner').show();
				},					
				success: function(data){
					console.log(data);
					$('#submit_btn').show();
					$('#submit_spinner').hide();
				   	if(data == 200){
				   		setTimeout(($('#responseMsgDiv').empty().append('<p>You will receive an SMS shortly. Click on the link in the SMS to Download the App.</p>')),10000);
				   	}else{
				   		setTimeout(($('#responseMsgDiv').empty().append('<p>Something went wrong.</p>')),10000);
				   	}
					
				$("#downloadAppForm")[0].reset();
				}
			});
			return false;
			     
			 }				
		});			
	});
    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
    });
</script>