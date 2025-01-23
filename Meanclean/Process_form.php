<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
&lt;?php  if ($_SERVER["REQUEST_METHOD"] == "POST") {      $name = htmlspecialchars($_POST['name']);      $email = htmlspecialchars($_POST['email']);      $phone = htmlspecialchars($_POST['phone']);      $message = htmlspecialchars($_POST['message']);        $to = "hey@itsmeanclean.com";      $subject = "New Contact Form Submission";      $body = "You have received a new message from the contact form.\n\n" .              "Name: $name\n" .              "Email: $email\n" .              "Phone: $phone\n" .              "Message:\n$message";      $headers = "From: $email";        if (mail($to, $subject, $body, $headers)) {          echo "Message sent successfully!";      } else {          echo "Failed to send message. Please try again later.";      }  } else {      echo "Invalid request method.";  }  ?&gt;
</body>
</html>