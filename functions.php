<?php

class ClassCurlInstagram {
  public function(string $username): string {
    //set URL
    $url = "https://www.instagram.com/$username/?__a=1";

    //get API data
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);

    //send request
    $result = curl_exec($ch);
    if ($result === false) {
        //check for errors
        $result = curl_error($curl_connection);
    }

    // Close connection
    curl_close($ch);

    //return result
    return $result;
  }
}
