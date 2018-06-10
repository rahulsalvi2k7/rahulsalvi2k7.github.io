if(isset($_POST['Submit'])) {
    // do code
    // submitted to server through form
    // build the email message by using
    // info received by the HTML form
    $msg =  'Name: ' .$_POST['reply_form_name'] ."\n"
	        'Email: ' .$_POST['reply_form_email'] ."\n"
	        'Comment: ' ."\n" .$_POST['reply_form_message'];

    // send email using PHP's built in 
    // command, mail()
    mail('contactus@thehirepoint.com',  'Message on Website ' .$_POST['reply_form_name'] , $msg);

    // redirect to the thank you page
    header('location: index.html');

    // exit this script - just to make sure nothing else gets run
    exit(0);
} else {
  // do other code block
  header('Location: index.html#contactUs');
}