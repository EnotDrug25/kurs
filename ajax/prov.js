function avtor() {
	var flag=0; 
	Name = $("#Name").val();
	Srename = $("#Sure").val();
	Lastname = $("#Last").val();
	
	$("#result_form").html("");
    if(Name=""){
        flag=1;
     $("#result_form").html("<p style='color:red;'>Сообщение об ошибке</p>"); 
    }
    if(Sure=""){
        flag=1;
     $("#result_form").html("<p style='color:red;'>Сообщение об ошибке</p>"); 
    }
    if(Last=""){
        flag=1;
     $("#result_form").html("<p style='color:red;'>Сообщение об ошибке</p>"); 
    }
}

