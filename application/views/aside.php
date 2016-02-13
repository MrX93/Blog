
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
						<!-- /.input-group -->
					</div>

					<!-- Blog Categories Well -->
					<div class="well">
						<h4>Blog Categories</h4>
						<div class="row">
							<div class="col-lg-6">
								<ul class="list-unstyled">
									<li><a href="#">Category Name</a>
									</li>
									<li><a href="#">Category Name</a>
									</li>
									<li><a href="#">Category Name</a>
									</li>
									<li><a href="#">Category Name</a>
									</li>
								</ul>
							</div>
							<!-- /.col-lg-6 -->
							<div class="col-lg-6">
								<ul class="list-unstyled">
									<li><a href="#">Category Name</a>
									</li>
									<li><a href="#">Category Name</a>
									</li>
									<li><a href="#">Category Name</a>
									</li>
									<li><a href="#">Category Name</a>
									</li>
								</ul>
							</div>
							<!-- /.col-lg-6 -->
						</div>
						<!-- /.row -->
					</div>

					<!-- Side Widget Well -->
					<div class="well">
						<h4>Side Widget Well</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
					</div>

				</div>

