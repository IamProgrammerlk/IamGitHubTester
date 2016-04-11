<?php

require_once '../Source/IamFirebasePHP/IamClassAutoloader.php';

use IamProgrammerlk\IamFirebasePHP\IamFirebasePHP;

?>
<pre>
// !important:: if you didn't set any of optional parameters for IamFirebasePHP, it's always
// use default options or last options you made previously.    
 

// option 01 - use IamFirebase easy way
	$Firebace01  = new IamFirebasePHP([ 
		'IamFirebaseUrl' => 'https://www.firebase.com', // always required
		'IamFirebaseSecret' => 'asdfghjklswertyuicvbn', // always required
	]);
	
	$Firebace01_Node01 = $Firebace01->IamSetNode('/example/Firebace01/Node01');
	$Firebace01_Json_Response01 = $Firebace01_Node01->IamGet();
	var_dump($Firebace01_Json_Response01);
	
	$Firebace01_Node02 = $Firebace01->IamSetNode('/example/Firebace01/Node02');
	$Firebace01_Json_Response02 = $Firebace01_Node02->IamGet();
	var_dump($Firebace01_Json_Response02);
	
	// or more and more nodes or any other functions


// option 02 - use IamFirebase middle way
	$Firebace02  = new IamFirebasePHP([ 
		'IamFirebaseUrl' => 'https://www.firebase.com', // always required
		'IamFirebaseSecret' => 'asdfghjklswertyuicvbn', // always required
		'IamNodePath' => '/example/Firebace02/Node01', // optional - Default::"/" - required for middle way
		'IamResponseHandler' =>'IamResponseHandler', // optional - Default::"IamResponseHandler"
		'IamResponseTimeout' => 20, // optional - Default::"10"
	]);

	$Firebace02_Json_Response01 = $Firebace02->IamNode->IamGet();
	
	var_dump($Firebace02_Json_Response01);
	
	// use IamInit() function to change options.
	// !important:: you can't set or change 'IamFirebaseUrl' and 'IamFirebaseSecret' propertes in IamInit()
	$Firebace02->IamInit([
		'IamNodePath' => '/example/Firebace02/Node02',
		'IamResponseHandler' => 'cURL',
		// 'IamResponseTimeout' => 20, // don't set array eliment to use default value 
	]);
	$Firebace02_Json_Response02 = $Firebace02->IamNode->IamGet();
	
	var_dump($Firebace02_Json_Response02);

	$Firebace02->IamInit([
		'IamNodePath' => '/example/Firebace02/Node03',
	]);
	$Firebace02_Json_Response03 = $Firebace02->IamNode->IamGet();
	
	var_dump($Firebace02_Json_Response03);
	
// option 03 - use IamFirebase custom way
	$Firebace03  = new IamFirebasePHP([ 
		'IamFirebaseUrl' => 'https://www.firebase.com', // always required
		'IamFirebaseSecret' => 'asdfghjklswertyuicvbn', // always required
	]);
	
	$Firebace03->IamSetTimeout(50);
	$Firebace03->IamSetResponseHandler('cURL');
	$Firebace03->IamSetNodePath('/example/Firebace03/Node01');
	$Firebace03_Json_Response01 = $Firebace03->IamNode->IamGet();
	
	var_dump($Firebace03_Json_Response01);
	
	$Firebace03->IamSetNodePath('/example/Firebace03/Node02');
	$Firebace03_Json_Response02 = $Firebace03->IamNode->IamGet();
	
	var_dump($Firebace03_Json_Response02);

</pre>


<?php
	$fb  = new IamFirebasePHP([ 
		'IamFirebaseUrl' => 'https://www.firebase.com', // always required
		'IamFirebaseSecret' => 'asdfghjklswertyuicvbn', // always required
	]);
	
	$fbnode01 = $fb->IamSetNode('new node path is / here / 01');
	echo '</br>From "$fbnode01->IamGet" -->> ' . $fbnode01->IamGet();

	$fbnode02 = $fb->IamSetNode('new node path is / here / 02');
	echo '</br>From "$fbnode02->IamGet" -->> ' . $fbnode02->IamGet();



