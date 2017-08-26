<?php  


	ini_set('soap.wsdl_cache_enabled',0); 
	ini_set('soap.wsdl_cache_ttl',0);


	$client = new SoapClient('http://vicente:8080/ProgDist-Mini-Projeto-III/LivrariaWebService?wsdl');

	$arguments = array(
		
		'atualizar' => array(
			'codigo' => $_POST['codigo'],
			'titulo' => $_POST['titulo'],
			'editora' => $_POST['editora'],
			'isbn' => $_POST['isbn'],
			'edicao' => $_POST['edicao'],
			'autor' => $_POST['autor']
		)
		
	);

	$result = $client->__soapCall('atualizar', $arguments);


	var_dump($result);
	 


?>