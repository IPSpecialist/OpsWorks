<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>IPSpecialist</title>
</head>
<body>
    <section class="congratulations">
        <h1>Welcome to your Application</h1>
        <p>Your AWS OpsWorks <em>PHP</em> application is now running on your own dedicated environment in the AWS&nbsp;Cloud</p>
        <p>You are running PHP new version <?= phpversion() ?></p>
		<p>Your Application is now running on the host "<?php echo gethostname(); ?>"; in a new stack and layer in OpsWorks.</p>
                <p>This host is running PHP version <?php echo phpversion(); ?>.</p>
    </section>

    <section class="instructions">
       
        <h2>IPSpecialist</h2>
        <ul>
            <li><a href="https://ipspecialist.net/"><img src="IP.png"></a></li>

        </ul>
    </section>

</body>
</html>
<? 
} 
?>
