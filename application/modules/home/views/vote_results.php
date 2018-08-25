<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
	<title>SQLiTE</title>
</head>
<body>

<div class="container" style="margin-top: 60px;">
	<div class="row">
		<a href="<?php echo base_url('/'); ?>">&larr; Back to Voting</a>
		<div class="col-md-12">
			<h1> Results </h1>

			<h4><i class="fa fa-user"></i> Presidential Candidates</h4>

			<table  class="table table-condensed table-hover table-stripped">
				<tr  class="success">
					<td > Presidential Candidate Name </td>
					<td> Votes Gained </td>
					
				</tr>
				<?php $pres_total_votes = 0; foreach($pres_vote_results as $pres_res): $pres_total_votes+=$pres_res['gained_votes']; ?>
					<tr>
						<td><?php echo $pres_res['pres_name']; ?></td>
						<td><?php echo $pres_res['gained_votes']; ?></td>
						
					</tr>
				<?php endforeach; ?>
			</table>


			<h4><i class="fa fa-user"></i> Vice Presidential Candidates</h4>

			<table  class="table table-condensed table-hover table-stripped">
				<tr  class="success">
					<td >Vice Presidential Candidate Name </td>
					<td> Votes Gained </td>
					
				</tr>
				<?php $vp_total_votes = 0; foreach($vp_vote_results as $vp_res): $vp_total_votes+=$vp_res['gained_votes']; ?>
					<tr>
						<td><?php echo $vp_res['vp_name']; ?></td>
						<td><?php echo $vp_res['gained_votes']; ?></td>
						
					</tr>
				<?php endforeach; ?>
			</table>


			<h4><i class="fa fa-users"></i>  Senatorial Candidates</h4>

			<table  class="table table-condensed table-hover table-stripped">
				<tr  class="success">
					<td> Senatorial Candidate Name </td>
					<td> Votes Gained </td>
					
				</tr>
				<?php $sen_total_votes = 0; foreach($sen_vote_results as $sen_res): $sen_total_votes+=$sen_res['gained_votes']; ?>
					<tr>
						<td><?php echo $sen_res['sen_name']; ?></td>
						<td><?php echo $sen_res['gained_votes']; ?></td>
						
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
	</body>
</html>