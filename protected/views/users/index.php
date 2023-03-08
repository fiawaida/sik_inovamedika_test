		<section id="main-content">
			<section class="wrapper">
				<section class="wrapper">
					<div class="table-agile-info">
						<!---728x90--->
						<div class="panel panel-default">
							<div class="panel-heading">
								Tabel Data User
							</div>
							<div class="row w3-res-tb">
								<div class="col-sm-5 m-b-xs">
									<a href="<?= Yii::app()->request->baseUrl; ?>/users/create" data-toggle="modal" class="btn btn-success"><i class="fa fa-plus-square"></i>
										Tambah User Baru
									</a>
								</div>
								<div class="col-sm-4">
								</div>
								<div class="col-sm-3">
									<div class="input-group">
										<input type="text" class="input-sm form-control" placeholder="Search">
										<span class="input-group-btn">
											<button class="btn btn-sm btn-default" type="button">Go!</button>
										</span>
									</div>
								</div>
							</div>
							<div class="table-responsive">
								<table class="table table-striped b-t b-light">
									<thead>
										<tr>
											<th>Id User</th>
											<th>Username</th>
											<th>Password</th>
											<th>Status</th>
											<th>Role</th>
											<th style="width:30px;"></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($model as $u) : ?>
											<tr>
												<td><?= $u['id_user'] ?></td>
												<td><?= $u['username']; ?></td>
												<td><?= $u['password']; ?></span></td>
												<td><?= $u['status']; ?></span></td>
												<td><?= $u['role']; ?></span></td>

												<td>
													<a href="#" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
												</td>
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
							<footer class="panel-footer">
								<div class="row">

									<div class="col-sm-5 text-center">
										<small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
									</div>
									<div class="col-sm-7 text-right text-center-xs">
										<ul class="pagination pagination-sm m-t-none m-b-none">
											<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
									</div>
								</div>
							</footer>
						</div>
						<!---728x90--->
					</div>
				</section>
			</section>