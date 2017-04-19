 <?php



require_once('init.php');

$data = null;

if(isset($_GET['req'])){

$req = $_GET['req'];

	#
	#	Settings updating
	#

	if($req == 'getWeather'){
			// grab weather 
			// debug(goCurl('www.qwebdev.eu'));

			$data = goCurl('http://samples.openweathermap.org/data/2.5/weather?q='.$_POST['city'].'&appid=1ba9046eef2325952a8c49cf91f183a6');
 			print $data;

			

	}
}

// require_once(dirname(__FILE__). '/core-helper.php');
 	
//  	$data = array();
//  	$city = $_POST['city'];		



