<?php 
function footer_mail_subcriber_shortcode_func( $atts ) {
    extract( shortcode_atts( array(
    'subtitle' => 'Contact Us',
    'title' => 'View Services',
   ), $atts) );


 ob_start();

 ?>
 <fieldset id="email-capture-form1" class="fieldset">
                                   
	<div class="textField" id="email-signup-textfield">
		<input name="emailSignUp1" class="textField-input js-email-capture-field input " id="emailSignUp1" type="email" placeholder="Sign up for emails">
		<a class="js-email-capture-submit1">
			<div class="signUpButton">
				<i class="icn icn_dropdown"></i>
			</div>
		</a>
		<span data-val-controltovalidate="emailsignup" class="isVisuallyHidden" id="spanemailsignup"  style="color: red; display: inline;">Please check your email address and try again.</span>
	</div>
</fieldset>


 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('footer_mail_subcriber', 'footer_mail_subcriber_shortcode_func');

