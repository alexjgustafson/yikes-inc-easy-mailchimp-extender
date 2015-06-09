Yikes Inc. Easy MailChimp Free (*Beta Release Candidate 3.0*)
=====================

[![WordPress](https://img.shields.io/wordpress/plugin/dt/yikes-inc-easy-mailchimp-extender.svg)]()
![Rating](https://img.shields.io/wordpress/plugin/r/yikes-inc-easy-mailchimp-extender.svg)
[![License](https://poser.pugx.org/yikesinc/yikes-inc-easy-mailchimp-extender/license)](https://packagist.org/packages/yikesinc/yikes-inc-easy-mailchimp-extender)
![WordPress plugin](https://img.shields.io/wordpress/plugin/v/yikes-inc-easy-mailchimp-extender.svg)
![WordPress](https://img.shields.io/wordpress/v/yikes-inc-easy-mailchimp-extender.svg)

<strong>Latest Stable Beta - Release Candidate 3.0</strong>

> [Latest Stable Beta Release Download](https://cldup.com/TXlbe0izFH.zip)
> - Last Updated June 3rd, 2015

This is a complete re-write of the original [Yikes Inc Easy MailChimp Extender](https://wordpress.org/plugins/yikes-inc-easy-mailchimp-extender/) plugin.

This is the first release candidate for the final release of [Yikes Inc Easy MailChimp Extender](https://wordpress.org/plugins/yikes-inc-easy-mailchimp-extender/). We will be rolling things out to the repository as we get closer to finalizing all of the documentation.

Feel free to use this plugin now. When the final version rolls out, you'll have a smooth transition.

#### Grunt.js

To develop with grunt place Gruntfile.js file inside the plugin root during development (/wp-content/yikes-inc-easy-mailchimp-extender/). The paths inside Gruntfile.js are setup relative to the plugin root, so placing it anywhere else without changing the paths will cause an error.

To install the required dependencies we've included an [auto_install](https://www.npmjs.com/package/grunt-auto-install) tasks to make your life easier. 

First, make sure you install the latest version of Grunt to the local project directory.

`
$ npm install -g grunt -cli
$ npm install grunt
`

Then install autoprefixer-core using:

`
$ npm install autoprefixer-core --save-dev
`

Finally, run the [auto_install](https://www.npmjs.com/package/grunt-auto-install) task to install the required dependencies.

`
$ grunt auto_install
`


#### Minimum Requirements
- WordPress 3.8+ 
- PHP v5.3+

#### Plugin Preview Screenshots
[Cloudup Gallery](https://cloudup.com/cBKo-0D2HTV)

#### Questions?
Have any questions? Feel free to open up an issue in the issue tracker and we'll get back to you as soon as possible.


#### Documentation In The Works...

##### Shortcode

`[yikes-mailchimp form="#"]`

##### Full List of Shortcode Parameters
- form - the ID of the form you want to display *(required)*
- submit - the text of the submit button below the form *(optional - defaults to "Submit")*
- title - display the title above the form (1 or 0) *(optional - defaults to 0)*
- description - display the description above the form (1 or 0) *(optional - defaults to 0)*

##### CSS Ready Classes

###### 2 Column Layout
- field-left-half / field-right-half - assign this class to place the field in the left/right column of a 2 column form layout.

###### 3 Column Layout
- field-left-third / field-right-third - assign this class to place the field in the left/right most column of a 3 column form layout. 

###### 2/3/4 Colum Radio Buttons
- option-2/3/4-col - split the radio or checkbox options into 2, 3 or 4 columns


##### Filters + Hooks

###### Filters
- yikes-mailchimp-form-title-FORM_ID - alter the output of the form title of the specified form
- yikes-mailchimp-form-description-FORM_ID - alter the output of the form description of the specified form
- yikes-mailchimp-redirect-timer - (ms : 1 second = 1000ms) alter the amount of time the user sees the success message before being redirected ( defaults to 1500ms );
- yikes-mailchimp-before-submission - catch the merge variables of all forms before they get sent over to MailChimp
- yikes-mailchimp-before-submission-FORM_ID - catch the merge variables of the specified form before they get sent over to MailChimp
- yikes-mailchimp-after-submission - catch the merge variables of all forms after they get sent over to MailChimp
- yikes-mailchimp-after-submission-FORM_ID - catch the merge variables of the specified form after they get sent over to MailChimp
- yikes-mailchimp-user-role-access - Alter who can access this plugin page by capability (default 'manage_options' - admins)
- yikes-mailchimp-international-phone-pattern - Alter the regex pattern for acceptable international phone number formats. (process form shortcode - line 295)
- yikes-mailchimp-us-phone-pattern - Alter the regex pattern for acceptable US phone number formats. (process form shortcode - line 295)
- yikes-mailchimp-process-default-tag - Pass the default tag through a filter to populate with dynamic content from the current site (process_form_shortcode - line 256)

###### Hooks
- yikes-mailchimp-form-submission - do something with the user email + form data on form submission
- yikes-mailchimp-form-submission-FORM_ID - do something with the user email + form data on form submission (specific form)
- yikes-mailchimp-before-form - output content before all forms
- yikes-mailchimp-before-form-FORM_ID - output content before a specific form
- yikes-mailchimp-after-form - output content after all forms
- yikes-mailchimp-after-FORM_ID - output content after a specific form
- yikes-mailchimp-before-checkbox - output custom content before the opt-in checkbox for all integrations
- yikes-mailchimp-after-checkbox - output custom content after the opt-in checkbox for all integrations
- yikes-mailchimp-support-page - output custom content on the support page (used to add our support form for premium users)
- yikes-mailchimp-edit-form-section-links - add additional links to the edit form page next to 'Custom Messages'
- yikes-mailchimp-edit-form-sections	- add custom section to the edit form page

###### Hooks for Extensions
- yikes-mailchimp-menu - hook to add additional menu items inside of the "Easy MailChimp" menu item
