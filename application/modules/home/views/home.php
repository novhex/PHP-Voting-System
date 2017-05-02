<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/bstheme/cerulean_bootstrap.min.css';?>">

<link rel="stylesheet" type="text/css" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/apx/font-awesome/css/font-awesome.min.css';?>">	

	<title>Voting Menu</title>
</head>
<body>



<div class="container" style="margin-top: 70px;">

<a class="btn btn-info btn-xs" href="<?php echo base_url('logout');?>" style="margin-bottom: 15px;"> Logout </a>

	<div class="row">
		<div class="col-md-12">
		<?php foreach($party_list as $plist): if($plist['party_id']!=='3'):?>
		<label>	
		<input  style="margin-bottom: 20px;" type="radio" class="castparty" name="party_cast_vote" data-id="<?php echo $plist['party_id']; ?>" value="<?php echo $plist['party_id']; ?>">  Cast Vote For <?php echo $plist['party_name']; ?></label>


		
	<?php endif; endforeach;?>
			<div class="panel panel-primary">
				<div class="panel-heading"> Voting Form (Labels with asterisk is required) </div>
				<div class="panel-body">
				<?php echo validation_errors();?>
					<form action="" method="POST">

						<h4> President</h4>
							<div class="form-group">
								<div class="checkbox">
								<?php foreach($pres_list as $presinfo):?>
								<label>
									<input class="rb_pres_<?php echo $presinfo['party_id']; ?>" type="radio" name="radio_pres[]" value="<?php echo $presinfo['pres_id']; ?>">
									<?php echo $presinfo['pres_name']; ?> (<?php echo $presinfo['party_name']; ?>)
								</label>
								<?php endforeach; ?>
								</div>
							</div>

						<h4> Vice President</h4>
							<div class="form-group">
								<div class="checkbox">
								<?php foreach($vp_list as $vpinfo):?>
								<label>
									<input class="rb_vp_<?php echo $vpinfo['party_id']; ?>" type="radio" name="radio_vppres[]" value="<?php echo $vpinfo['vp_id']; ?>">
									<?php echo $vpinfo['vp_name']; ?> (<?php echo $vpinfo['party_name']; ?>)
								</label>
								<?php endforeach; ?>
								</div>
							</div>			
						
						<h4>* Senators (select up to 12)</h4>
						<div class="form-group">
								<div class="checkbox">
							<?php foreach($sen_list as $senlist): ?>
								<label style="margin-bottom: 1px;">
									<input class="cb_<?php echo $senlist['party_id']; ?>" type="checkbox" name="cb_senators[]" value="<?php echo $senlist['sen_id']; ?>" />
									<?php echo $senlist['sen_name']; ?> (<?php echo $senlist['party_name']; ?>)
								</label>
									<br>
							<?php endforeach; ?>
							</div>
						</div>


							<button name="btn_vote" type="submit" value="vote" class="btn btn-success"><i class="fa fa-thumbs-up"></i> Vote Now</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/apx/js/jquery.min.js';?>"></script>
<script type="text/javascript" src="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/apx/js/bootstrap.min.js';?>"></script>
<script type="text/javascript">

var arrlist = [];
var current;
var prev;

$(".castparty").click(function(){

	current = this.dataset.id;



	$(".rb_pres_"+current).not(this).prop('checked',this.checked);
	$(".rb_vp_"+current).not(this).prop('checked',this.checked);

	if(add_datasetid(current)!==true){

		arrlist.push(current);
		
		
		$(".cb_"+current).not(this).prop('checked',this.checked);
		
		current_dataseid_selected(current);
		

	}else{


		
		$(".cb_"+current).not(this).prop('checked',this.checked);		
		current_dataseid_selected(current);
		
	}


});

function add_datasetid(id){

	if(arrlist.length==0){
		
	}else{

		for(i=0;i<arrlist.length;i++){

			if(id==arrlist[i]){

				return true;
				break;
			}

		}
	}
}


function current_dataseid_selected(selected_id){

	if(arrlist.length==1){

		$(".rb_pres_"+selected_id).attr('checked',true);
		
	}else{

		for(y=0;y<arrlist.length;y++){

			if(selected_id==arrlist[y]){

				$(".cb_"+selected_id).not(this).prop('checked',this.checked);
				
				
			}else{	

			
				$(".cb_"+arrlist[y]).attr('checked',false);
				
			
				
			}
		}
	}
	
}
</script>
</body>
</html>