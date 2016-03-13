<?php

// use Goutte\Client; // UNCOMMENT TO USE THE CRAWLER OR DELETE

class APPSPARAANDROID extends Service
{
	/**
	 * Function executed when the service is called
	 * 
	 * @param Request
	 * @return Response
	 * */
	public function _main(Request $request)
	{
		/* UNCOMMENT TO USE THE CRAWLER OR DELETE
		// create a new client
		$client = new Client();
		$guzzle = $client->getClient();
		$guzzle->setDefaultOption('verify', false);
		$client->setClient($guzzle);

		// create a crawler
		$crawler = $client->request('GET', "https://google.com");

		// search for result
		$result = $crawler->filter('.health-topic-boost-wrapper')->text();
		*/
		
		 $emailSubject = $request->subject;
      $response = new Response();
      if ($emailSubject == "appsparaandroid" ){
        $responseContent = array("a" => "b");
		$response->setResponseSubject("Su listado de apps");
		$response->createFromTemplate("basic.tpl", $responseContent);
		return $response;
      }
      if ($emailSubject == "appsparaandroid cuba map"){
		$response->setResponseSubject("Su Aplicacion Cuba Map");
        
		$response->createFromTemplate("aplicacion.tpl", 
                                      array("app_name" => "Cuba Map"), null, array($this->pathToService . "appsparaandroidenCuba/CubaMapoffline_apkpure.com.apk"));
		return $response;
      }
      





      if ($emailSubject == "appsparaandroid aplicacion2**"){
		$response->setResponseSubject("Su Aplicacion nombre app 2");
        
		$response->createFromTemplate("aplicacion.tpl", 
                                      array("app_name" => "nombre app 2"), null, 
                                      array($this->pathToService . "AppsparaandroidenCuba/apkfile.apk"));
		return $response;
      }
      

		// create a json object to send to the template
		
      else{
		// create the response
		$response->setResponseSubject("Su listado de apps");
		$response->createFromTemplate("basic.tpl", array(""));
		return $response;
      }
	}
}
