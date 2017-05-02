var site_url = 'http://localhost/sqliteci/';

$(document).on('click','#add-pres-cand',function(){

	$.ajax({

		url: site_url+"admin/admin_ajax/ajax_popup_add_pres_candidate",
		success:function(response){

			var add_presidential_president_ui = bootbox.dialog({
				'title' : ' Add Presidential Candidate',
				'message' : ' ',
				'size': 'medium',
				onEscape:function(){

				}

			});

			add_presidential_president_ui.contents().find('.bootbox-body').html(response);
		}
	});

});


$(document).on("change","select[name='assigned_party']",function(){
	$("#form_errors").html("");
});

$(document).on('click','.btn-add-pres-candidate',function(){

	$.ajax({

		url: site_url+"admin/admin_ajax/add_presidential_candidate",
		method : "POST",
		data:{

			assigned_party: $("select[name='assigned_party']").val(),
			pres_name : 	$("input[name='presidential_candidate_name']").val()
		},
		success:function(response){

			var server_response = JSON.parse(response);

			if(server_response.response!==true){
				$("#form_errors").html(server_response.response);
			}else{
				window.location = site_url+"admin/presidential-candidates";
			}
		}
	})

});