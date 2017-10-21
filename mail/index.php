<form method="post">
    <input type="email" name="email" placeholder="Target email"><br>
    <input type="text" name="title" placeholder="Email title"><br>
    <textarea name="message" placeholder="Your message"></textarea><br>

    <input type="submit" formaction="/mail.php" value="Mail">
    <input type="submit" formaction="/phpmailer.php" value="PHP Mailer">
</form>