<?php 
	
use GuzzleHttp\Client;


class Igphoto_model extends CI_Model
{

    public function getPhotoIg()
    {
        $client = new Client();
        $response  = $client->request('GET', 'https://api.instagram.com/v1/users/self/media/recent', [
        	'query' => [
        		'access_token' => $this->generalset->sosial_api()->api_ig_token,
        		'count' => $this->generalset->sosial_api()->api_ig_count
        	]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }
}
