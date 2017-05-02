	<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-md-12">
			<h1>Presidential Candidates </h1>

			<a id="add-pres-cand" class="btn btn-primary" style="margin-bottom: 20px;"><i class="fa fa-user"></i> Add New Presidential Candidate </a>

			<div class="table-responsive">
				<table class="table table-condensed table-stripped">
					<thead>
					<tr>
						<th> # </th>
						<th> Presidential Candidate Name </th>
						<th> Party  </th>
						<th> Actions </th>
					</tr>
					</thead>
					<tbody>
						<?php $c=1; foreach($presidential_candidates as $pres):?>
							<tr>
								
									<td><?php echo $c++; ?></td>
									<td><?php echo $pres['pres_name']; ?></td>
									<td><?php echo $pres['party_name']; ?></td>
									<td>
										<a href="" class="btn btn-xs btn-info"> Edit</a>
										<a href="" class="btn btn-xs btn-danger"> Delete</a>
									</td>
								
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>