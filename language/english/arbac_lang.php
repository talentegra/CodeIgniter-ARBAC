<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* E-mail Messages */

// Account verification
$lang['arbac_email_verification_subject'] = 'Account Verification';
$lang['arbac_email_verification_code'] = 'Your verification code is: ';
$lang['arbac_email_verification_text'] = " You can also click on (or copy and paste) the following link\n\n";

// Password reset
$lang['arbac_email_reset_subject'] = 'Reset Password';
$lang['arbac_email_reset_text'] = "To reset your password click on (or copy and paste in your browser address bar) the link below:\n\n";

// Password reset success
$lang['arbac_email_reset_success_subject'] = 'Successful Pasword Reset';
$lang['arbac_email_reset_success_new_password'] = 'Your password has successfully been reset. Your new password is : ';


/* Error Messages */

// Account creation errors
$lang['arbac_error_email_exists'] = 'Email address already exists on the system. If you forgot your password, you can click the link below.';
$lang['arbac_error_username_exists'] = "Account already exists on the system with that username.  Please enter a different username, or if you forgot your password, please click the link below.";
$lang['arbac_error_email_invalid'] = 'Invalid e-mail address';
$lang['arbac_error_password_invalid'] = 'Invalid password';
$lang['arbac_error_username_invalid'] = 'Invalid Username';
$lang['arbac_error_username_required'] = 'Username required';
$lang['arbac_error_totp_code_required'] = 'Authentication Code required';
$lang['arbac_error_totp_code_invalid'] = 'Invalid Authentication Code';


// Account update errors
$lang['arbac_error_update_email_exists'] = 'Email address already exists on the system.  Please enter a different email address.';
$lang['arbac_error_update_username_exists'] = "Username already exists on the system.  Please enter a different username.";


// Access errors
$lang['arbac_error_no_access'] = 'Sorry, you do not have access to the resource you requested.';
$lang['arbac_error_login_failed_email'] = 'E-mail Address and Password do not match.';
$lang['arbac_error_login_failed_name'] = 'Username and Password do not match.';
$lang['arbac_error_login_failed_all'] = 'E-mail, Username or Password do not match.';
$lang['arbac_error_login_attempts_exceeded'] = 'You have exceeded your login attempts, your account has now been locked.';
$lang['arbac_error_recaptcha_not_correct'] = 'Sorry, the reCAPTCHA text entered was incorrect.';

// Misc. errors
$lang['arbac_error_no_user'] = 'User does not exist';
$lang['arbac_error_account_not_verified'] = 'Your account has not been verified. Please check your e-mail and verify your account.';
$lang['arbac_error_no_group'] = 'Group does not exist';
$lang['arbac_error_self_pm'] = 'It is not possible to send a Message to yourself.';
$lang['arbac_error_no_pm'] = 'Private Message not found';


/* Info messages */
$lang['arbac_info_already_member'] = 'User is already member of group';
$lang['arbac_info_group_exists'] = 'Group name already exists';
$lang['arbac_info_perm_exists'] = 'Permission name already exists';
