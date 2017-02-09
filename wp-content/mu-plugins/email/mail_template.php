<?php  ?>
<img src="<?php echo $logoUrl; ?>" alt="MySite"/>

<?php if ( $user->first_name != '' ) : ?>
	<h1><?php echo $user->first_name; ?>, Welcome to the Jason Debus Heigl Foundation</h1>
<?php else : ?>
	<h1>Welcome to the Jason Debus Heigl Foundation</h1>
<?php endif; ?>

<p>
	We're glad you're here.
</p>

<p>
	<a href="<?php echo $siteUrl; ?>">Jason Debus Heigl Foundation</a>
</p>

<p>
	Thank you,<br>
	Jason Debus Heigl Foundation
</p>
