var site_url = 'http://localhost/PHP-Voting-System/';

$(document).on('click','#add-vp-cand',function(){

	$.ajax({
		url: site_url+"admin/admin_ajax/ajax_popup_add_vppres_candidate",
		success:function(response){

			var add_vp_presidential_president_ui = bootbox.dialog({
				'title' : ' Add Vice Presidential Candidate',
				'message' : ' ',
				'size': 'medium',
				onEscape:function(){

				}

			});

			add_vp_presidential_president_ui.contents().find('.bootbox-body').html(response);

		}
	});
})


$(document).on("change","select[name='assigned_party']",function(){
	$("#form_errors").html("");
});

$(document).on('click','.btn-add-vpres-candidate',function(){

		$.ajax({

		url: site_url+"admin/admin_ajax/add_vppresidential_candidate",
		method : "POST",
		data:{

			assigned_party: $("select[name='assigned_party']").val(),
			vp_pres_name : 	$("input[name='vice_presidential_candidate_name']").val()
		},
		success:function(response){

			var server_response = JSON.parse(response);

			if(server_response.response!==true){
				$("#form_errors").html(server_response.response);
			}else{
				window.location = site_url+"admin/vp-presidential-candidates";
			}
		}
	})

});