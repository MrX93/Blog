
				<!-- Blog Sidebar Widgets Column -->
				<div class="col-md-4">

					<!-- Blog Search Well -->
					<div class="well">
						<h4>Blog Search</h4>
						<div class="input-group">
							<input type="text" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
						<!-- /.input-group -->
					</div>
					
					<div class="well">
						<?php if ($this->session->userdata('ime')) : ?>
							<h4><?php echo $this->session->userdata('ime'); ?></h4>
							<p><?php echo $this->session->userdata('poruka'); ?></p>
							<?php echo anchor('logovanje/logout', 'Odjavi se'); ?>
						<?php else : ?>
							<h4>Uloguj se</h4>
							<div class="input-group">
								<?php
								echo form_open('logovanje/login');
								$data = array(
										'name' => 'username',
										'id' => 'username',
										'placeholder' => 'Username',
										'class' => 'form-control',
								);
								echo form_input($data);
								$data = array(
										'name' => 'password',
										'id' => 'password',
										'placeholder' => 'Password',
										'class' => 'form-control',
								);
								echo form_password($data);
								$data = array(
										'name' => 'submit',
										'id' => 'submit',
										'value' => 'Uloguj se!',
										'class' => 'btn btn-default',
								);
								echo form_submit($data);
								echo form_close();
								?>
							</div>
						<?php endif; ?>

						<!-- /.input-group -->
					</div>

					<!-- Blog Categories Well -->
					<div class="well">
						<h4>Vidljivo samo ulogovanim korisnicima</h4>
						<?php if (true) : ?>
							<div class="row">
								<div class="col-lg-12">
									<ul class="list-unstyled">
										<li>
											<?php
											$data = array(
													'id' => 'link'
											);
											echo anchor('#', 'Link za AJAX', $data);
											?>
										</li>
									</ul>
								</div>
								<!-- /.col-lg-6 -->
							</div>
							<!-- /.row -->
						<?php endif; ?>
					</div>

					<!-- Side Widget Well -->
					<div class="well">
						<h4>Podaci iz ajax-a</h4>
						<ul id='prikaz_podataka'>
							
						</ul>
					</div>

				</div>

