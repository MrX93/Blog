
				<!-- Blog Entries Column -->
				<div class="col-md-8">

					<h1 class="page-header">
						Upravljanje korisnicima
						<small>Unos, izmena i brisanje</small>
					</h1>
					<?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
					<?php
					if (isset($korisnik)) {
						echo "<div class='alert alert-success alert-dismissible' role='alert'>";
						echo "Spremni ste da unesete korisnika " . $korisnik['ime'] . " (" . $korisnik['email'] . "), cija uloga je " . $korisnik['uloga'];
						echo "</div>";
					}
					?>
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
											'value' => set_value('username'),
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
											'value' => set_value('password'),
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
											'value' => set_value('email'),
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
											'type' => 'submit',
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
									$data = array(
											'name' => 'obrisi',
											'id' => 'obrisi',
											'type' => 'submit',
											'class' => 'btn btn-sm glyphicon glyphicon-trash',
											'title' => 'Obrisi',
									);
									echo form_button($data);
									echo form_close();
									?>
								</td>
							</tr>

						</tbody>
					</table>

				</div>
