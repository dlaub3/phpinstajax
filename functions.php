<?php

class ClassCurlInstagram
{
    public function queryUsername(string $username): string
    {
        //set URL
    $url = "https://www.instagram.com/$username/?__a=1";

    //get API data
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //send request
    $result = curl_exec($ch);

        if ($result === false) {
            //check for errors
        $result = curl_error($curl_connection);
        } elseif ($result != strip_tags($result)) {
            // contains HTML ?
        $result = "Sorry, this page isn't available.";
        }

    // Close connection
    curl_close($ch);

    //return result
    return $result;
    }

    public function queryURL(string $url): string
    {

    //get API data
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //send request
    $result = curl_exec($ch);


        if ($result === false) {
            //check for errors
            $result = curl_error($curl_connection);
        } elseif ($result != strip_tags($result)) {
            // contains HTML ?
            $result = "Sorry, this page isn't available.";
        }

    // Close connection
    curl_close($ch);

    //return result
    return $result;
    }
}
