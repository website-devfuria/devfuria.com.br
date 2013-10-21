<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	    <script type="text/javascript">
		var ajax;
		
		function fazer(){

			obj = document.getElementById("txtqq");
			try{
				var ajax = new XMLHttpRequest();
			}catch(error){
				try{
					var ajax = new ActiveXObject("Microsoft.XMLHTTP");
				}catch(error){
					window.alert("try" + error);
				}
			}

			if(ajax != null){
				obj.value = "ajax != null - ";
				ajax.open("GET", "testarAjax.php?id=123", true);
				ajax.onreadystatechange = function(){
				
					if(ajax.readyState == 4){
						obj.value += " readyState";
						if(ajax.status == 200 || ajax.staus == 304){
							obj.value = ajax.responseText;
						}
					}
				}// onreadystattechange
				ajax.send(null);
			}
		
		} // end funcion fazer
		</script>
	
  </head>

  <body>
  
	  <input type="button" onClick="fazer();" value="fazer"/>
	  <input type="text" id="txtqq" style="width: 600px"/>


  </body>
</html>