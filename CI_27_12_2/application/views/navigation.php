
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Start Bootstrap</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><?php echo anchor('', 'Pocetna', 'title="Pocetna"'); ?></li>
						<li><?php echo anchor('korisnik', 'Profil', 'title="Profil"'); ?></li>
						<li><?php echo anchor('administracija', 'Administracija', 'title="Administracija"'); ?></li>
						<li><?php echo anchor('logovanje/logout', 'Logout', 'title="Logout"'); ?></li>
						<?php
						if (isset($linkovi)) {
							foreach ($linkovi as $link) {
								?>
								<li><?php echo $link; ?></li>
								<?php
							}
						}
						?>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
			
			<div class="row">
