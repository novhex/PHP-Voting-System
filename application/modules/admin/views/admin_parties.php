<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-md-12">
			<h1>Political Parties</h1>

			<a id="add-politcal-party" class="btn btn-primary" style="margin-bottom: 20px;"><i class="fa fa-user"></i> Add New Political Party </a>

			<div class="table-responsive">
				<table class="table table-condensed table-stripped">
					<thead>
					<tr>
						<th> # </th>
						<th> Political Party Name </th>
						<th> Action </th>
					</tr>
					</thead>
					<tbody>
						<?php $c=1; foreach($political_partylist as $partylist):?>
							<tr>
								
									<td><?php echo $c++; ?></td>
									<td><?php echo $partylist['party_name']; ?></td>
									<td>
										<?php if($partylist['party_id']!=3):?>
										<a href="" class="btn btn-xs btn-info"> Edit</a>
										<a href="" class="btn btn-xs btn-danger"> Delete</a>
										<?php else:?>
											<label class="label label-info"> Database Preset </label>
										<?php endif;?>
									</td>
								
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>