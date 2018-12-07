<?php
	//$this->Html->script('/js/jquery.validate', array('inline' => false));
    //$this->Html->script('/js/jquery.form', array('inline' => false));
?>
<h2 class="title sec-title-color">Get In Touch</h2>
<p></p>
<div class="row">
	<div class="8u 12u$(small)">
		<div id="frmContact" class="">
		    <div id="mail-status"></div>
		    
		    <div class="6u 12u$(xsmall)">
		        <label>Name</label><span id="userName-info" class="info"></span>
		        <input type="text" name="userName" id="userName" class="demoInputBox">
		    </div>
		    <div class="6u 12u$(xsmall)">
		        <label>Email</label><span id="userEmail-info" class="info"></span>
		        <input type="text" name="userEmail" id="userEmail" class="demoInputBox">
		    </div>
		    <!--div class="6u 12u$(xsmall)">
		        <label>Subject</label><span id="subject-info" class="info"></span>
		        <input type="text" name="subject" id="subject" class="demoInputBox">
		    </div-->
		    <div class="12u$">
		        <label>Content</label><span id="content-info" class="info"></span>
		        <textarea name="content" id="content" class="demoInputBox" cols="60" rows="6"></textarea>
		    </div>
		    <div class="12u$ margin-top-1em text-center">
		    	<input type="submit" onclick="sendContact();" value="Send Message">
		    </div>
		</div>

		<!--form id="send-email" method="post" action="#">
			<div class="row uniform 50%">
				<div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
				<div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
				<div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
			</div>
			
			<ul class="actions">
				<li><input type="submit" onclick="sendContact()" value="Send Message" /></li>
			</ul>
		</form-->
	</div>
	<div class="4u$ 12u$(small)">
		<ul class="labeled-icons">
			<li>
				<h3 class="icon fa-home"><span class="label">Address</span></h3>
				900 University Ave.<br />
				Riverside, CA 92521<br />
				United States
			</li>
			<li>
				<!--h3 class="icon fa-mobile"><span class="label">Phone</span></h3-->
			</li>
			<li>
				<h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
				noaa99 at gmail dot com
			</li>
		</ul>
	</div>
</div>

<script>


$(function() {

	
});

function sendContact() {
    var valid;	
    valid = validateContact();
    var username = $("#userName").val();
    var useremail = $("#userEmail").val();
    //var subject = $("#subject").val();
    var content = $("#content").val();

    //var form = $('#frmContact');
    //var formData = $(form).serialize();
    var formData = 'userName='+username+'&userEmail='+useremail+'&content='+content;

    console.log(formData);
    if(valid) {
        jQuery.ajax({
            url: "contact_mail.php",
            //data:'userName="'+$("#userName").val()+'"&userEmail="'+$("#userEmail").val()+'"&subject="'+$("#subject").val()+'"&content="'+$("#content").val()+'"',
            data: formData,
            type: "POST",
            success:function(data){
                $("#mail-status").html(data);
            },
            error:function (){}
        });
    }
}

function validateContact() {
    var valid = true;	
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    if(!$("#userName").val()) {
        $("#userName-info").html("(required)");
        $("#userName").css('background-color','#FFD37F');
        valid = false;
    }
    if(!$("#userEmail").val()) {
        $("#userEmail-info").html("(required)");
        $("#userEmail").css('background-color','#FFD37F');
        valid = false;
    }
    if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#userEmail-info").html("(invalid)");
        $("#userEmail").css('background-color','#FFD37F');
        valid = false;
    }
    if(!$("#subject").val()) {
        $("#subject-info").html("(required)");
        $("#subject").css('background-color','#FFD37F');
        valid = false;
    }
    if(!$("#content").val()) {
        $("#content-info").html("(required)");
        $("#content").css('background-color','#FFD37F');
        valid = false;
    }
    return valid;
}

</script>