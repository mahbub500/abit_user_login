$(document).ready(function(){
	$("#registration_btn").click(function(e){
		e.preventDefault();

	var name 	= $("#RegInputName").val();
	var email 	= $("#RegInputEmail1").val();
	var status 	= $("#Regeditor_status").val();
	var password= $("#RegPassword").val();

		$.ajax({
			url: "Test.php",
			type: "POST",
			success: function(res){
				console.log( status );
			}
		});
	});
});