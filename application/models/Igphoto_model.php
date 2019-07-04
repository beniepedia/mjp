<?php 
	
use GuzzleHttp\Client;


class Igphoto_model extends CI_Model
{

    public function getPhotoIg()
    {
        $client = new Client();
        $response  = $client->request('GET', 'https://api.instagram.com/v1/users/self/media/recent', [
        	'query' => [
        		'access_token' => '10016460928.640eb2b.4a170bed44784d40b2027b6daa0ea773',
        		'count' => '12'
        	]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }
}
