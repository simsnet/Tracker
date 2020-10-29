<meta name="viewport" content="width=device-width, initial-scale=1">
<h2>Fill out the fields below to create your tracking link:</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
<p>Event Name: <input type="text" name="event" required="required"></p>
<p>Email Address (for receiving tracking information): <input type="text" name="email" required="required"></p>
<p>Image URL: </p><textarea name="imgurl"></textarea>
<br /></br />
<input name="submit" type="submit" value="Create Link">
</form>
<?php 
if (isset($_POST["email"], $_POST["event"], $_POST["imgurl"])) {
    $email = $_POST["email"];
    $event = $_POST["event"];
    $img = $_POST["imgurl"];
    echo "<h3>Link created!  Copy the link below into your program or website's embed window.</h3>";
    echo "<code>https://www.yourwebsite.com/path/to/track.php?event=" . $event . "&email=" . $email . "&imgurl=" . $img . "</code>";
}
?>
