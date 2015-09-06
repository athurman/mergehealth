<div id="sidebar1" class="sidebar m-all t-1of3 d-1of4 last-col cf" role="complementary">
  <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar1' ); ?>
    <!--Begin CTCT Sign-Up Form-->
    <!-- EFD 1.0.0 [Thu Aug 20 21:33:00 EDT 2015] -->
    <div class="ctct-embed-signup" style="font: 16px Helvetica Neue, Arial, sans-serif; font: 1rem Helvetica Neue, Arial, sans-serif; line-height: 1.5; -webkit-font-smoothing: antialiased;">
      <div style="color:#ffffff; background-color: #2f90cc; border-radius:5px; padding: 20px;">
        <span id="success_message" style="display:none;">
          <div style="text-align:center;">Thanks for signing up!</div>
        </span>
        <form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
          <h2 style="margin:0;">Sign up to stay in touch!</h2>
          <p>Join the Merge Community! Look for Monthly Newsletters, Holistic Health &amp; Wellness Tips, Easy, Family Friendly Recipes, Community Events - Both Local and Online</p>
          <!-- The following code must be included to ensure your sign-up form works properly. -->
          <input data-id="ca:input" type="hidden" name="ca" value="409b66f2-7f4e-4b93-8274-859f830ec665">
          <input data-id="list:input" type="hidden" name="list" value="1484759777">
          <input data-id="source:input" type="hidden" name="source" value="EFD">
          <input data-id="required:input" type="hidden" name="required" value="list,email,first_name">
          <input data-id="url:input" type="hidden" name="url" value="">
          <p data-id="Email Address:p" ><label data-id="Email Address:label" data-name="email" class="ctct-form-required">Email Address</label> <input data-id="Email Address:input" type="text" name="email" value="" maxlength="80"></p>
          <p data-id="First Name:p" ><label data-id="First Name:label" data-name="first_name" class="ctct-form-required">First Name</label> <input data-id="First Name:input" type="text" name="first_name" value="" maxlength="50"></p>
          <button type="submit" class="Button ctct-button Button--block Button-secondary" data-enabled="enabled">Sign Up</button>
          <div>
            <p class="ctct-form-footer">By submitting this form, you are granting: Merge Health Fitness &amp; Nutrition, Inc., PO Box 2530, Kennesaw, Georgia, 30156, United States, http://www.mergeintohealth.com permission to email you. You may unsubscribe via the link found at the bottom of every email.  (See our <a href="http://www.constantcontact.com/legal/privacy-statement" target="_blank">Email Privacy Policy</a> for details.) Emails are serviced by Constant Contact.</p>
          </div>
        </form>
      </div>
    </div>
    <script type='text/javascript'>
       var localizedErrMap = {};
       localizedErrMap['required'] =    'This field is required.';
       localizedErrMap['ca'] =      'An unexpected error occurred while attempting to send email.';
       localizedErrMap['email'] =       'Please enter your email address in name@email.com format.';
       localizedErrMap['birthday'] =    'Please enter birthday in MM/DD format.';
       localizedErrMap['anniversary'] =   'Please enter anniversary in MM/DD/YYYY format.';
       localizedErrMap['custom_date'] =   'Please enter this date in MM/DD/YYYY format.';
       localizedErrMap['list'] =      'Please select at least one email list.';
       localizedErrMap['generic'] =     'This field is invalid.';
       localizedErrMap['shared'] =    'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
       localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
      localizedErrMap['state_province'] = 'Select a state/province';
       localizedErrMap['selectcountry'] =   'Select a country';
       var postURL = 'https://visitor2.constantcontact.com/api/signup';
    </script>
    <script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
    <!--End CTCT Sign-Up Form-->
  <?php else : ?>
    <?php
      /*
      * This content shows up if there are no widgets defined in the backend.
      */
    ?>
    <div class="no-widgets">
      <p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'mergehealth' );  ?></p>
    </div>
  <?php endif; ?>
</div>
