<?php
if(isset($_POST['submit'])){
    $from = $_POST['email'];
    $name = $_POST['names'];
    $message = $_POST['message'];
    $subject = "Wedding RSVP";
    $headers = "From:" . $from;

    $to1 = "rsvp@gettywedding.com";
    $content1 = "names: " . $names . "\n\n" .
      "attending: " . $attending .
      "message:" . "\n\n" . $message;
      mail($to1,$subject,$content1,$headers);
      echo "<p class='message'>Mail sent! We'll get in touch with you soon.</p>";


    $to2 = "ccziemer@gmail.com";



    mail($to,$subject,$message,$headers);
    echo "<p class='message'>Mail sent! We'll get in touch with you soon.</p>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
