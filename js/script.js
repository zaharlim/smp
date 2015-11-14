$(document).ready(function(e) {
    $("#no_kp").keyup(function(){
		$(this).val(testNumericOnly($(this).val()));
	});
	
	$('#tarikh_lahir').datepicker({
		todayHighlight: true,
		startView: 2,
	    autoclose: true,
		format: "mm/dd/yyyy",
		defaultViewDate: { year: 1990}
	});
	
	$("#agama5").hide();
	$("#bangsa4").hide();
	$("#oku2").hide();
	$("#vto").hide();
	$("#dlpv").hide();
	$("#skm").hide();
	$("#akademik").hide();
	$("#kod_tenaga").hide();
	$("#tahap").hide();
	$("#noss").hide();
	/* HIDE SHOW */
	$(".modal").nextAll().hide();
	$("fieldset").hide();
	$("fieldset").eq(0).show();
	$(".divider").hide();
	// END
	
	$("input[name*='agama']" ).click(function(){
		if($(this).val() == "Lain") {
			$("#agama5").show(100);
			$("#agama5").val("");
		}
		else {
			$("#agama5").hide(100);
			$("#agama5").val($(this).val());
		}
		
	});
	
	$("input[name*='bangsa']" ).click(function(){
		if($(this).val() == "Lain") {
			$("#bangsa4").show(100);
			$("#bangsa4").val("");
		}
		else {
			$("#bangsa4").hide(100);
			$("#bangsa4").val($(this).val());
		}
	});
	
	$("input[name*='oku']" ).click(function(){
		if($(this).val() == "1") {
			$("#oku2").show(100);
			$("#oku2").val("");
		}
		else {
			$("#oku2").hide(100);
		}
	});
	
	$("input[name*='kursus']" ).click(function(){
		if($(this).val() == "VTO") {
			$(".select-course").hide(100);
			$("#vto").show(100);
		}
		if($(this).val() == "DLPV"){
			$(".select-course").hide(100);
			$("#dlpv").show(100);
		}
		if($(this).val() == "SKM"){
			$(".select-course").hide(100);
			$("#skm").show(100);
		}
	});
	
	$("input[name*='kelayakan']" ).click(function(){
		if($(this).val() == "0") {
			$("#kod_tenaga").hide();
			$("#tahap").hide();
			$("#noss").hide();
			$("#akademik").show(100);
		}
		if($(this).val() == "1"){
			$("#kod_tenaga").hide();
			$("#tahap").show(100);
			$("#noss").show(100);
			$("#akademik").hide();
		}
		if($(this).val() == "2"){
			$("#kod_tenaga").show(100);
			$("#tahap").hide();
			$("#noss").hide();
			$("#akademik").hide();
		}
	});
	
	$(".akuan").click(function(){
		if($(".akuan").eq(0).prop("checked") && $(".akuan").eq(1).prop("checked"))
			$("#hantar").attr("disabled", false);
		else
			$("#hantar").attr("disabled", true);
	});
	
	$("#batal").click(function(){	
		$(".akuan").prop("checked", false);
	});
	
	//$("#hantar").click(function(){
		//validate();	
	//});
	
	$("#periksa").click(function(){
		$.post("checkIc.php", {nokp:$("#no_kp").val()}, function(data){
			if($.trim(data)/1 == 0) {
				$(".modal").nextAll().show(100);
				$("fieldset").show(100);
				$("fieldset").eq(0).show(100);
				$(".divider").show(100);
			}
			else
				$(".modal").modal();

			
		});
			
	});
	
	$("#reapply").click(function(){
		$(".modal-body p").text("Permohonan semula telah berjaya. Tidak perlu mengulangisi borang permohonan ini.");
		$("#close").text("Tutup");
		$(this).hide();
	});
});


function validate() {
	var must = $(".must");
	var l = must.length;
	
	for(var i = 0; i < l; i++) {
		must.css("background", "");
	}
	for(var i = 0; i < l; i++) {
		if(must.eq(i).val() == "") {
			must.eq(i).css("background", "red");
			must.eq(i).focus();
			return false;
		}
	}
	
	
	if($("input[name*='jantina']:checked").length == 0) {
		$("input[name*='jantina']").parent().css("background", "red");
		$("input[name*='jantina']").eq(0).focus();
		return false;
	}
	else
		$("input[name*='jantina']").parent().css("background", "");
	
	
	if($("input[name*='agama']:checked").length == 0) {
		$("input[name*='agama']").parent().css("background", "red");
		$("input[name*='agama']").eq(0).focus();
		return false;
	}
	else
		$("input[name*='agama']").parent().css("background", "");
		
		
	if($("input[name*='status']:checked").length == 0) {
		$("input[name*='status']").parent().css("background", "red");
		$("input[name*='status']").eq(0).focus();
		return false;
	}
	else
		$("input[name*='status']").parent().css("background", "");
		
	if($("input[name*='bangsa']:checked").length == 0) {
		$("input[name*='bangsa']").parent().css("background", "red");
		$("input[name*='bangsa']").eq(0).focus();
		return false;
	}
	else
		$("input[name*='bangsa']").parent().css("background", "");
		
	if($("input[name*='warga']:checked").length == 0) {
		$("input[name*='warga']").parent().css("background", "red");
		$("input[name*='warga']").eq(0).focus();
		return false;
	}
	else
		$("input[name*='warga']").parent().css("background", "");
		
	if($("input[name*='oku']:checked").length == 0) {
		$("input[name*='oku']").parent().css("background", "red");
		$("input[name*='oku']").eq(0).focus();
		return false;
	}
	else
		$("input[name*='oku']").parent().css("background", "");
	
	/// validation course
	if($("input[name*='kursus']:checked").length == 0) {
		$("input[name*='kursus']").parent().css("background", "red");
		$("input[name*='kursus']").eq(0).focus();
		return false;
	}
	else {
		$("input[name*='kursus']").parent().css("background", "");
		for(var i = 0; i < 3; i++) {
			if($(".select-course").eq(i).is(":visible") && $(".select-course").eq(i).val() == "") {
				$(".select-course").eq(i).css("background", "red");
				$(".select-course").eq(i).focus();
				return false;
			}
			else
				$(".select-course").eq(i).css("background", "");
		}			
	}
	
	//$("input[name*='kelayakan']").removeAttr("checked");
	
	if($("input[name*='kelayakan']:checked").length == 0) {
		$("input[name*='kelayakan']").parent().css("background", "red");
		$("input[name*='kelayakan']").eq(0).focus();
		return false;
	}
	else {
		$("input[name*='kelayakan']").parent().css("background", "");
		if($("input[name*='kelayakan']:checked").val() == "0") {
			if($("#akademik").val() == "") {
				$("#akademik").css("background", "red");
				$("#akademik").focus();
				return false;
			}
			else
				$("#akademik").css("background", "");
		}
		
		if($("input[name*='kelayakan']:checked").val() == "1") {
			if($("#tahap").val() == "") {
				$("#tahap").css("background", "red");
				$("#tahap").focus();
				return false;
			}
			else
				$("#tahap").css("background", "");
			
			if($("#noss").val() == "") {
				$("#noss").css("background", "red");
				$("#noss").focus();
				return false;
			}
			else
				$("#noss").css("background", "");
		}
		
		if($("input[name*='kelayakan']:checked").val() == "2") {
			if($("#kod_tenaga").val() == "") {
				$("#kod_tenaga").css("background", "red");
				$("#kod_tenaga").focus();
				return false;
			}
			else
				$("#kod_tenaga").css("background", "");
		}
	}
	
	return true;
}

function testNumericOnly(x) {
	str = "0123456789";
	k = 0;
	temp = "";
	for(i = 0; i < x.length; i++)
	{
		for(j = 0; j < str.length; j++) {
			if(str.substr(j,1) == x.substr(i,1))
			{
				k = k + 1;
			}
		}
		if(k == 0) {
			temp = x.substr(0, i)+x.substr(i+1, x.length-i);
			return temp;
		}
		k = 0
	}
	return x;
	
}
