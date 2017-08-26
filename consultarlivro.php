<?php  

	ini_set('soap.wsdl_cache_enabled',0); 
	ini_set('soap.wsdl_cache_ttl',0);

	$client = new SoapClient('http://vicente:8080/ProgDist-Mini-Projeto-III/LivrariaWebService?wsdl');

	$arguments = array(
		'consultar' => array(
			'isbn' => $_POST['isbn']
		)
	);

	$result = $client->__soapCall('consultar', $arguments);

	var_dump($result);
	 
	
?>