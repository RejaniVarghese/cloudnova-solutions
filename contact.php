<?php include 'includes/header.php'; ?>

<section>

<h2>Contact CloudNova Solutions</h2>

<p>
Have questions about Cloud, DevOps or Automation?
Send us a message.
</p>

<h3>Contact Information</h3>

<p>

📍 Kochi, Kerala, India<br>

📧 support@cloudnova.com<br>

📞 +91 9876543210

</p>

<hr>

<?php

if(isset($_POST['submit']))
{
    echo "<h3 style='color:green;'>Thank you! Your message has been received.</h3>";
}

?>

<form method="POST">

<label>Name</label><br>

<input type="text" name="name" required><br><br>

<label>Email</label><br>

<input type="email" name="email" required><br><br>

<label>Message</label><br>

<textarea name="message" rows="6" cols="50" required></textarea>

<br><br>

<input type="submit" name="submit" value="Send Message">

</form>

</section>

<?php include 'includes/footer.php'; ?>
