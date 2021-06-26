<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	
	<?php
		echo $this->Html->meta('icon');

		// echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		// echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">

		<!-- <div id="header"> -->
			<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<?php if (AuthComponent::user('id')): ?>
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php echo $this->Html->link('Posts', array('controller' => 'posts', 'action' => 'index'), ['class'=>'navbar-brand']); ?>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li	><?php echo $this->Html->link('User', array('controller' => 'users', 'action' => 'index')); ?></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
							</li>
							<li><?php echo $this->Html->link('Profile', array('controller' => 'profiles', 'action' => 'index')); ?></li>

							<?php else: ?>

							<li><?php echo $this->Html->link('login', array('controller' => 'users', 'action' => 'login'), ['class'=>'navbar-brand']); ?></li>
							<?php endif ?>
						</ul>
						</li>
					</ul>
					</div><!-- /.navbar-collapse -->
				
			</div><!-- /.container-fluid -->
			</nav>
		<!-- </div> -->

		<div id="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>

		<div id="footer">
		<br><br>
			<div class="text-center">
				<hr>
				<h5>Sample footer, by Me.</h5>
			</div>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
