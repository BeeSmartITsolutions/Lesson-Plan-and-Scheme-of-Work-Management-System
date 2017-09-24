
  $(document).ready(function(){
      
	$('#slider1').bxSlider({
      mode: 'fade',
      captions: true,
      auto: true,
      controls: false,
      randomStart:true,
      autoHover:true,
      pause:15000
    });
	
	$('#slider2').bxSlider({
      mode: 'fade',
      captions: true,
      auto: true,
      randomStart:true,
      controls: false
    });
	
	$('#slider3').bxSlider({
      mode: 'fade',
      auto: true,
      randomStart:true,
      pause:5000,
      controls: false
    });
	
	$('#slider4').bxSlider({
      mode: 'fade',
      captions: true,
      auto: true,
      randomStart:true,
       displaySlideQty: 1,
       pause:12000,
       autoHover:true,
      controls:false
    });
    
	$('#slider5').bxSlider({
      mode: 'fade',
      captions: true,
      auto: true,
      randomStart:true,
       displaySlideQty: 1,
       pause:12000,
       autoHover:true,
      controls:false
    });
    
	$('#matches').dataTable(
	{
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"iDisplayLength":10,
		"aLengthMenu": [[10,20, 50,75,100,125, -1], [10,20, 50,75,100,125, "All"]],
                "aaSorting": [[ 1, "asc" ]]
	}
	);
	
        // validate signup form on keyup and submit
	var validator = $(".form").validate({
		messages: {
			first_name: "Enter your firstname",
			other_names: "Enter your other names",
			title: "Select a title",
			username: {
				required: "Enter a username",
				minlength: jQuery.format("Enter at least {0} characters"),
			},
			password: {
				required: "Provide a password",
				rangelength: jQuery.format("Enter at least {0} characters")
			},
			confirm_password: {
				required: "Repeat your password",
				minlength: jQuery.format("Enter at least {0} characters"),
				equalTo: "Enter the same password as above"
			},
			date_of_birth: {
				required: "Enter your date of birth",
				remote: jQuery.format("Sorry you are below 18 years")
			},
			email: {
				email: "Please enter a valid email address",
				remote: "Email already registered"
			},
			gender:"Select your gender",
			result: "Please select your prediction",
			phone_number:{
			  required: "Enter your phone number",
			  remote: jQuery.format("{0} is already registered")
			},
			stake: {
				required: "Enter your stake",
				min: jQuery.format("Bet atleast{0} UGX"),
				max: "You have less credit"
			},
			old_password:{
			  required: "Enter your current password",
			  remote: "Wrong password"
			},
		        amount: {
				required: "Enter the amount you want to withdraw",
				max: jQuery.format("You can't withdraw more than {0} UGX")
			},
                        send_to_email:{
			  required: "Enter your registered email",
			  remote: "Email not registered"
			},
			secret_code: {
				required: "Choose a secret code",
				minlength: "Must be 4 digits",
				digits:	"Enter only digits"
			},
			terms: "Agree to the terms"
		}
	});
        
        
        // validaten contact form on keyup and submit
	var validator = $("#contact_form").validate({
		messages: {
			name: "Enter your name",
			message: "Type your message",
			subject: "Enter the message subject",
                        department: "Select your target deparment",
			sender_email: {
				required: "Enter your email address",
				email: "Invalid email address"
			}
                }
        });
        

	  //Date picker
	$('#date_of_birth').datepick({dateFormat: 'yyyy-mm-dd', yearRange: '-80:-18', defaultDate:-18});
	$('.date_pick').datepick({dateFormat: 'yyyy-mm-dd'});
	
	//Registration form thickbox
	$('.register').each(function(){
	var url = $(this).attr('href') + '?TB_iframe=true&height=500&width=580&KeepThis=true';
	$(this).attr('href', url);
      });
	
	//Ticket games thickbox
	$('.games').each(function(){
	$(this).attr('href', url);
      });
	
	//Prifile edit thickbox
	$('#profile_edit').each(function(){
	var url = $(this).attr('href') + '?TB_iframe=true&height=400&width=580&KeepThis=true';
	$(this).attr('href', url);
      });
	
	//Change password thickbox
	$('#password_change').each(function(){
	var url = $(this).attr('href') + '?TB_iframe=true&height=180&width=580&KeepThis=true';
	$(this).attr('href', url);
      });
        
        //Password recovery thickbox
	$('#password_recovery').each(function(){
	var url = $(this).attr('href') + '?TB_iframe=true&height=100&width=590&KeepThis=true';
	$(this).attr('href', url);
      });
	
	//Close error box
	$('a.close').click(function() {
        $($(this).attr('href')).slideUp();
        return false;
    });
	
	
	//Populate pay out.
	$('#stake').change(function() {
	var stake=$('#stake').val();
	var odds=$('#tt_odds').val();
	if(!isNaN(stake))
	{
	  var pay_out=stake*odds;
	  /*if(pay_out>20000000) 
	  {
	  var msg="Error: Your payout ("+pay_out+") Exceeded the maximum of 2000000UGX. Please reduce the games";
	  alert(msg)
	  }
	  else
	  {
		pay_out=pay_out.toFixed(0);
		document.getElementById('pay_out').value=pay_out;
	  }*/
      
      //Comment later
      pay_out=pay_out.toFixed(0);
      document.getElementById('pay_out').value=pay_out;
      
	}
      });
        
        //Verify deposit amount.
        $('#deposit_form').submit(function() {
            var amount=$('#deposit_amount').val();
            if(confirm('Are you sure you want to deposit '+ amount+' UGX?'))
            return true;
            return false;
    });
        
        //Verify Withdraw amount.
        $('#withdraw_form').submit(function() {
            var amount=$('#withdraw_amount').val();
            if(confirm('Are you sure you want to grant withdraw of '+ amount+' UGX?'))
            return true;
            return false;
    });
     });
        
	
     