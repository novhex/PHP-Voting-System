var site_url = 'http://localhost/sqliteci/';

$(document).on('click','#add-sen-cand',function(){

	$.ajax({
		url: site_url+"admin/admin_ajax/ajax_popup_add_sen_candidate",
		success:function(response){

			var add_senatorial_president_ui = bootbox.dialog({

				'title' : ' Add Senatorial Candidate',
				'message' : ' ',
				'size': 'medium',
				onEscape:function(){

				}

			});

			add_senatorial_president_ui.contents().find('.bootbox-body').html(response);

		}
	})

});


$(document).on("change","select[name='assigned_party']",function(){
	$("#form_errors").html("");
});

$(document).on('click','.btn-add-senatorial-candidate',function(){

	$.ajax({

		url : site_url+"admin/admin_ajax/add_senatorial_candidate",
		method: "POST",
		data:{
			assigned_party: $("select[name='assigned_party']").val(),
			senator_name : 	$("input[name='senatorial_candidate_name']").val()
		},
		success:function(response){
			var server_response = JSON.parse(response);

			if(server_response.response!==true){
				$("#form_errors").html(server_response.response);
			}else{
				window.location = site_url+"admin/senatorial-candidates";
			}

		}
	})

});