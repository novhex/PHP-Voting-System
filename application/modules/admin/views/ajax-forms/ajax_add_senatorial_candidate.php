<div style="color:red;" id="form_errors"></div>

<div class="form-group">
	<labelV>Senatorial Candidate Name</label>
	<input type="text" name="senatorial_candidate_name" class="form-control" placeholder="" />
</div>

<div class="form-group">
	<label>Select Assigned Party</label>
	<select name="assigned_party" class="form-control">
		<option value="">-Select-</option>
		<?php foreach($political_partylist as $party):?>
			<option value="<?php echo $party['party_id']; ?>"><?php echo $party['party_name']; ?></option>
		<?php endforeach;?>
	</select>
</div>

<div class="form-group">
	<button class="btn btn-primary btn-md btn-add-senatorial-candidate"> Add Senatorial Candidate</button>
</div>