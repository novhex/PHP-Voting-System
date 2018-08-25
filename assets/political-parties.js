var site_url = 'http://localhost/PHP-Voting-System/';

$(document).on('click','#add-politcal-party',function(){

	$.ajax({

		url: site_url+"admin/admin_ajax/ajax_popup_addparty",
		success:function(response){

			var add_politcal_party_ui = bootbox.dialog({
				'title' : ' Add Political Partylist',
				'message' : ' ',
				'size': 'medium',
				onEscape:function(){

				}

			});

			add_politcal_party_ui.contents().find('.bootbox-body').html(response);
		}
	});

});

$(document).on('click','.btn-add-political-party',function(){

	$.ajax({

		url: site_url+"admin/admin_ajax/add_party",
		method: "POST",
		data:{

			party_name : $("input[name='political_party_name']").val()
		},
		success:function(response){

			var server_response = JSON.parse(response);

			if(server_response.response!==true){
				$("#form_errors").html(server_response.response);
			}else{
				window.location = site_url+"admin/political-parties";
			}
		}

	})

});