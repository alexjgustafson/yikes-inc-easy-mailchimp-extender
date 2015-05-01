<?php
	// set our text domain
	$text_domain = 'yikes-inc-easy-mailchimp-extender';
?>

<?php if( get_option( 'yikes-mc-api-validation' , 'invalid_api_key' ) == 'valid_api_key' ) { ?>
	<div class="about-description">
		<?php echo __( "Before you can create any opt-in forms, you'll first need to enter your MailChimp API key into the" , $text_domain ) . ' <a href="' . admin_url( 'admin.php?page=yikes-inc-easy-mailchimp-settings&section=general-settings' ) . '" title="' . __( 'Yikes Easy MailChimp Settings' , $text_domain ) . '">' . __( 'settings page' , $text_domain ) . '</a>'; ?>
	</div>
<?php } ?>

<div class="changelog">
	
	<h3><?php _e( 'Creating Your First Opt-In Form' , $text_domain ); ?></h3>
	
	<div class="feature-section">
		
		<img src="<?php echo YIKES_MC_URL . 'includes/images/Welcome_Page/create-first-optin-form.jpg'; ?>" alt="" class="yikes-easy-mc-feature-image">
					
		<h4><a href="<?php echo admin_url( 'admin.php?page=yikes-inc-easy-mailchimp' ); ?>" title="<?php _e( 'Manage Forms' , $text_domain ); ?>">Easy MailChimp → Forms</a></h4>
		<p><?php _e( "Before you can start collecting users email addresses and building your mailing list, you'll need to create your first form. You can create as many forms as you'd like and assign each form to the same or different mailing lists.",  $text_domain ); ?></p>
	
		<p>&nbsp;</p>
		
		<h4><?php _e( 'Additional Options' , $text_domain ); ?></h4>
		<p><?php _e( "Once you create your form, you can pick and choose which fields you want to display and customize the success and error messages returned by the MailChimp API.",  $text_domain ); ?></p>
		
	</div>
	
	<div class="feature-section">
		
		<img src="<?php echo YIKES_MC_URL . 'includes/images/Welcome_Page/optin-settings.png'; ?>" alt="" class="yikes-easy-mc-feature-image" style="float:left;margin-right:30px;margin-left:0 !important;">
					
		<h4><?php _e( 'Customize the Form' , $text_domain ); ?></h4>
		<p><?php _e( "Once created, you can heavily customize the form to your liking. This included customizing the success and error messages displayed to the user, picking and choosing which fields or interest groups you'd like displayed, add additional classes to form fields, assign default values and placeholders and tons more!.",  $text_domain ); ?></p>
		
		<p>&nbsp;</p>
		
		<p><?php _e( "Quickly and easily switch which list the form is associated with, toggle single or double optin, whether the welcome email should be sent, toggle AJAX form submissions and more. Get customizing!",  $text_domain ); ?></p>

	</div>

	<div class="feature-section">
		
		<img src="<?php echo YIKES_MC_URL . 'includes/images/Welcome_Page/add-field-to-page.png'; ?>" alt="" class="yikes-easy-mc-feature-image">
					
		<h4><?php _e( 'Add Form to Page/Post' , $text_domain ); ?></h4>
		<p><?php _e( "When you're ready to add your MailChimp opt-in form to a page or post, you can click on the small MailChimp button in the content editor toolbar.",  $text_domain ); ?></p>
		
		<p>&nbsp;</p>
		
		<h4><?php _e( 'Add Form to Widget' , $text_domain ); ?></h4>
		<p><?php _e( "We've created a separate MailChimp widget to easily add your forms to any sidebar or widgetized area on your site. The widget allows you to select from any of the forms you've created..",  $text_domain ); ?></p>

	</div>
	
	<div class="feature-section">
		<h3><span class="dashicons dashicons-format-status" style="line-height:1.5;"></span> <?php _e( "Need Support" , $text_domain ); ?></h3>		
		
		<h4><?php _e( 'Free Support' , $text_domain ); ?></h4>
		<p><?php _e( "If you require assistance you can post your support inquiries to two seperate locations.",  $text_domain ); ?></p>
		<ul style="display:inline-block;width:100%;">
			<li style="float:left;"><a href="https://wordpress.org/plugins/yikes-inc-easy-mailchimp-extender/" title="<?php _e( 'WordPress Plugin Repository' , $text_domain ); ?>"><?php _e( 'WordPress Plugin Repository' , $text_domain ); ?></a></li>
			<li style="float:left;margin-left:10px;"><a href="https://github.com/yikesinc/yikes-inc-easy-mailchimp-extender/issues" target="_blank" title="<?php _e( 'GitHub Issue Tracker' , $text_domain ); ?>"><?php _e( 'GitHub Issue Tracker' , $text_domain ); ?></a></li>
		</ul>
		
		<h4><?php _e( 'Priority Support' , $text_domain ); ?></h4>
		<p><?php _e( "If you are looking for immediate support, please consider purchasing our pro version. With the pro version, not only will you get 1 full year of automatic updates and priority support, but there are a ton of features packed into the pro version that just couldn't make it into the free one. Check it out!" , $text_domain ); ?></p>
		
	</div>
	
</div>