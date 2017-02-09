<?php  ?>

<?php if ( $user->first_name != '' ) : ?>
	<h1><?php echo $user->first_name; ?>, Welcome to the Jason Debus Heigl Foundation</h1>
<?php else : ?>
	<h1><?php echo $user->user_login; ?>, Welcome to the Jason Debus Heigl Foundation</h1>
<?php endif; ?>
<p> <a href="<?php echo $siteUrl; ?>/login/">Click Here to Login</a> </p>
<p>
	Thank you,<br>
	<a href="<?php echo $siteUrl; ?>">Jason Debus Heigl Foundation</a>
</p>
