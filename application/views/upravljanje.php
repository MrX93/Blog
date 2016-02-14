
				<!-- Blog Entries Column -->
				<div class="col-md-8">

					<h1 class="page-header">
						Page Heading
						<small>Secondary Text</small>
					</h1>
					
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Username</th>
								<th>Password</th>
								<th>E-mail</th>
								<th>Role</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Pera</td>
								<td>Peric</td>
								<td>pera@gmail.com</td>
								<td>admin</td>
								<td>
									<button type="button" class="btn btn-xs" aria-label="Left Align">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
								</td>
								<td>
									<button type="button" class="btn btn-xs" aria-label="Left Align">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<?php echo form_open(''); ?>
								<td>
									<?php
									$data = array(
										'name' => 'username',
										'id' => 'username',
										'value' => 'Pera',
										'class' => 'form-control',
									);
									echo form_input($data);
									?>
								</td>
								<td>
									<?php
									$data = array(
										'name' => 'password',
										'id' => 'password',
										'value' => 'pera123',
										'class' => 'form-control',
									);
									echo form_input($data);
									?>
								</td>
								<td>
									<?php
									$data = array(
										'name' => 'email',
										'id' => 'email',
										'value' => 'pera@gmail.com',
										'class' => 'form-control',
									);
									echo form_input($data);
									?>
								</td>
								<td>
									<?php
									$options = array(
										'admin' => 'Admin',
										'user' => 'User',
									);
									$params = 'id="uloga" class="form-control"';
									echo form_dropdown('uloga', $options, 'user', $params);
									?>
								</td>
								<td>
									<?php
									$data = array(
										'name' => 'save',
										'id' => 'save',
										'type' => 'button',
										'class' => 'btn btn-sm glyphicon glyphicon-ok',
									);
									echo form_button($data);
									?>
								</td>
								<td>
									<?php
									$data = array(
										'name' => 'delete',
										'id' => 'delete',
										'type' => 'button',
										'class' => 'btn btn-sm glyphicon glyphicon-trash',
									);
									echo form_button($data);
									?>
								</td>
								<?php echo form_close(); ?>
							</tr>
						</tbody>
					</table>
					
					<!-- First Blog Post -->
					<h2>
						<a href="#">Blog Post Title</a>
					</h2>
					<p class="lead">
						by <a href="index.php">Start Bootstrap</a>
					</p>
					<p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
					<hr>
					<img class="img-responsive" src="http://placehold.it/900x300" alt="">
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
					<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

					<hr>

					<!-- Pager -->
					<ul class="pager">
						<li class="previous">
							<a href="#">&larr; Older</a>
						</li>
						<li class="next">
							<a href="#">Newer &rarr;</a>
						</li>
					</ul>

				</div>
