function toggle(id)
{
	$(id).toggle();
}

function JQUERY_ajax()
{
	$("div#ajax_jquery").load("ajax.htm");
}

function AJAX_Crea()
{
	var xmlhttp=false;
	
	try 
	{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} 
	catch(e) 
	{
		try 
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} 
		catch (E) 
		{
			xmlhttp = false;
		}
	}
	
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') 
	{
		xmlhttp = new XMLHttpRequest();
	}
	
	return xmlhttp;
}


function JAVASCRIPT_ajax()
{
	var contenedor = document.getElementById('ajax_js');
	
	ajax=AJAX_Crea();	
	
	ajax.open("GET", "ajax.htm",true);
	ajax.onreadystatechange=function() 
	{
		if(ajax.readyState==4) 
		{
			if(ajax.status==200)
					contenedor.innerHTML = ajax.responseText;
		}
	}
	ajax.send(null);
}




function JQUERY_suma()
{
 	$("input#form_2_valor").val(parseInt($("input#form_2_valor").val())+1);
}

function JAVASCRIPT_suma()
{
	var elemento = document.getElementById('form_1_valor');
	var valor = elemento.value;
	elemento.value = parseInt(valor)+1;
}
