<?php
$author=addslashes($_POST['author']);
$email=addslashes($_POST['email']);
$subject=addslashes($_POST['subject']);
$text=addslashes($_POST['text']);
$message='You have a message from contact form. Sender is '.$author;
if(isset($_POST['submit'])){
    //send email
    @mail('byrettekennedy@gmail.com',$subject,$message.' '.$text);
    echo 'Your message has been sent successfully.';
}
?>