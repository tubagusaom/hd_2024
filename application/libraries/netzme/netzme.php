<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    // namespace XenditClient;

    class Netzme {

        // function __construct ($options) {
        function __construct () {
            $this->server_domain = 'https://tokoapisnap-stg.netzme.com/api/';
            // $this->secret_api_key = $options['secret_api_key'];
            // api live
            // $this->secret_api_key = 'xnd_public_production_vr9SFhto0C96YKhd7PoTwfJE2gBxawkbaRyrtX8NUVIyzAOAdkkFXPYd419txnd_production_TtjkJnt7WUzbM6hQjaE8DxOASTvGUZtQcFPz6rQIwFQTVAcoox0e1mtfKX12jV';
            
            // api test
            $this->secret_api_key = 'MIIBOQIBAAJBANc7z1t1ANC4KPdi1NzJyyfPTtzDlr0S4rb4C01l0k3Iq7sf2iTZ0UCxFd/xBjYWV68VOfoyguN90h0Nwok0+xsCAwEAAQI/XinMjjaiJK5tPc3/Upj2SHRqDCuFxzJ7/ZCHYVUqrNxQfYXkaKEUR3kHpCaUyQa9L/URpx9OzA04ISzLVuQBAiEA+aSTzWN3QzRr13xhvw4dNhrAm3anoJkSCIH+LTxC9WECIQDctuss6VYC1CbSsyWgcgNchQZRsNHUwr4JMQRUH/OF+wIhAJUcWXAfjjflEtkGIThGDOqpNgxl5iAF7gCI7LJGQVRhAiAl3gxDTFVBbvyqMapG+Miy2u/WnCukATVxhkNj24eAeQIgHB50dFzubjWmqQSQcFNDDDjTSzMs/c02wFx1gIPENdg=';
            $this->secret_api_client_key = 'fc03d7ff06864c81880201ff67721b8d';
        }

        function testnetzme(){
        //   echo "ini adalah test netzme <br>";
        //   echo $this->secret_api_key;

            echo "sorry server maintenance , <a href='".base_url()."'>back</a>";
        }

        function payment_channels () {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/payment_channels';

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            curl_close($curl);

            $responseObject = json_decode($response, true);
            return $responseObject;
        }

        function getBalance () {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/balance';

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            curl_close($curl);

            $responseObject = json_decode($response, true);
            return $responseObject;
        }

    }
?>
