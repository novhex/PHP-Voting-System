<script type="text/javascript" src="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/apx/js/jquery.min.js';?>"></script>
<script type="text/javascript" src="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/apx/js/bootstrap.min.js';?>"></script>
<script type="text/javascript" src="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/apx/js/bootbox.js';?>"></script>
<script type="text/javascript" src="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/apx/js/dataTables.js';?>"></script>
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
