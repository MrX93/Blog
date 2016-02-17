
				<!-- Blog Entries Column -->
				<div class="col-md-8">
					
					<?php if (isset($id)) : ?>
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<strong>Uspeh</strong> Obrisali ste korisnika ciji je id <?php echo $id; ?>.
						</div>
					<?php endif; ?>

					<h1 class="page-header">
						Upravljanje korisnicima
						<small>Unos, izmena i brisanje</small>
					</h1>
					
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Username</th>
								<th>Password</th>
								<th>E-mail</th>
								<th>Role</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<?php echo form_open(''); ?>
								<td>
									<?php
									$data = array(
										'name' => 'username',
										'id' => 'username',
										'value' => '',
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
										'value' => '',
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
										'value' => '',
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
										'name' => 'delete',
										'id' => 'delete',
										'type' => 'button',
										'title' => 'Unesi',
										'class' => 'btn btn-sm glyphicon glyphicon-plus',
									);
									echo form_button($data);
									?>
								</td>
								<?php echo form_close(); ?>
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
										'class' => 'btn btn-sm glyphicon glyphicon-pencil',
										'title' => 'Izmeni',
									);
									echo form_button($data);
									?>
								</td>
								<?php echo form_close(); ?>
							</tr>
							
							<tr>
								<td>Pera</td>
								<td>Peric</td>
								<td>pera@gmail.com</td>
								<td>admin</td>
								<td>
									<?php
									echo form_open('administracija/brisanje/korisnik');
//									echo '<button type="button" class="btn btn-sm glyphicon glyphicon-trash" title="Obrisi"></button>';
									echo form_submit('korisnik', 'Obrisi', 'class="btn btn-sm" title="Obrisi" name="1"');
									echo form_close(); ?>
								</td>
							</tr>
							
						</tbody>
					</table>

				</div>
