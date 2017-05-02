<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-md-12">
			<h1>Vice Presidential Candidates </h1>

			<a id="add-vp-cand" class="btn btn-primary" style="margin-bottom: 20px;"><i class="fa fa-user"></i> Add New Vice Presidential Candidate </a>

			<div class="table-responsive">
				<table class="table table-condensed table-stripped">
					<thead>
					<tr>
						<th> # </th>
						<th>Vice Presidential Candidate Name </th>
						<th> Party  </th>
						<th> Actions </th>
					</tr>
					</thead>
					<tbody>
						<?php $c=1; foreach($vp_presidential_candidates as $vppres):?>
							<tr>
								
									<td><?php echo $c++; ?></td>
									<td><?php echo $vppres['vp_name']; ?></td>
									<td><?php echo $vppres['party_name']; ?></td>
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