<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://github.com/makeusabrew/bootbox/releases/download/v4.4.0/bootbox.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(".table").DataTable();
</script>
<?php 

	$current_url =  $this->uri->segment(2);

	switch ($current_url) {

		case 'political-parties':
			
			echo "<script type=\"text/javascript\" src=\"".base_url('assets/political-parties.js')."\"></script> \n\n";

			break;

		case 'presidential-candidates':
			echo "<script type=\"text/javascript\" src=\"".base_url('assets/presidential-candidates.js')."\"></script> \n\n";
		break;

		case 'vp-presidential-candidates':
			echo "<script type=\"text/javascript\" src=\"".base_url('assets/vp_presidential-candidates.js')."\"></script> \n\n";
		break;

		case 'senatorial-candidates':
			echo "<script type=\"text/javascript\" src=\"".base_url('assets/senatorial-candidates.js')."\"></script> \n\n";
		break;
		
		default:
			# code...
		break;
	}

?>
	</body>
</html>
