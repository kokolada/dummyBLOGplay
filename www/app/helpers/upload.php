<?php 

class Image{
	
	public static function upload($img){
		  $filename = $img['tmp_name'];
  		$client_id="e8699bc73a86b8e";
  		$handle = fopen($filename, "r");
  		$data = fread($handle, filesize($filename));
  		$pvars   = array('image' => base64_encode($data));
  		$curl = curl_init();
  		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  		curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
  		curl_setopt($curl, CURLOPT_TIMEOUT, 30);
  		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
  		curl_setopt($curl, CURLOPT_POST, 1);
  		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  		curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
  		$out = curl_exec($curl);
  		curl_close ($curl);
 		  $pms = json_decode($out,true);
  		$url=$pms['data']['link'];
  		return $url;
	}
  
}

 ?>