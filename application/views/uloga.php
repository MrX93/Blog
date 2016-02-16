
				<!-- Blog Entries Column -->
				<div class="col-md-8">

					<h1 class="page-header">
						Upravljanje ulogama
						<small>Unos, izmena i brisanje</small>
					</h1>
					
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Uloga</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<?php echo form_open(''); ?>
								<td>
									<?php
									$data = array(
										'name' => 'name',
										'id' => 'name',
										'value' => '',
										'class' => 'form-control',
									);
									echo form_input($data);
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
										'value' => 'Admin',
										'class' => 'form-control',
									);
									echo form_input($data);
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
								<td>Admin</td>
								<td>
									<button type="button" class="btn btn-sm glyphicon glyphicon-trash" title="Obrisi"></button>
								</td>
							</tr>
							
						</tbody>
					</table>

				</div>
