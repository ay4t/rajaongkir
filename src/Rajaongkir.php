<?php
/*
 * File: Rajaongkir.php
 * Project: src
 * Created Date: Su Apr 2022
 * Author: Ayatulloh Ahad R
 * Email: ayatulloh@indiega.net
 * Phone: 085791555506
 * -------------------------
 * Last Modified: Mon Apr 04 2022
 * Modified By: Ayatulloh Ahad R
 * -------------------------
 * Copyright (c) 2022 Indiega Network 

 * -------------------------
 * HISTORY:
 * Date      	By	Comments 

 * ----------	---	---------------------------------------------------------
 */


namespace Ay4t\Rajaongkir;

class Rajaongkir
{
    /**
     * $apiKey
     *
     * @var string
     */
    protected $apiKey;

    /**
     * $baseUrl
     *
     * @var string
     */
    protected $baseUrl;

    /**
     * $tipeAkun
     * Starter | Basic | Pro
     * @var string
     */
    protected $tipeAkun;

    /**
     * $method
     *
     * @var string
     */
    protected $method   = 'GET';


    public function __construct($apiKey = null)
    {
        /**
         * load config File
         */
        $config     = new Config();

        if (empty($this->getApiKey())) {
            $this->setApiKey($config->apiKey);
        }

        if (!empty($apiKey)) {
            $this->setApiKey($apiKey);
        }

        if (empty($this->getTipeAkun())) {
            $this->setTipeAkun($config->tipeAkun);
        }

        /**
         * membuat default Base URL endpoint API
         */
        $this->baseUrlSetter();
    }

    /**
     * exec
     * method untuk memproses data
     * @param mixed $endpoint
     * @param null $parameters
     * 
     * @return mixed
     */
    protected function exec($endpoint, $parameters = NULL)
    {
        // Start building URL
        $url = $this->getBaseUrl() . '/';

        // Add endpint
        $url .= trim($endpoint, '/');

        if ($this->getMethod() == 'GET') {
            $url .= '?' . http_build_query((array) $parameters);
        }

        // $parameters['key']  = $this->getApiKey();

        $parameters     = array_merge($parameters, [
            'key' => $this->getApiKey()
        ]);

        // setup curl POST FIELD
        $post_field     = json_encode($parameters);

        // Get CURL resource
        $curl = curl_init();

        // Set options
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $this->getMethod());
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_field);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

        // set header
        $headers = array();
        // $headers[] = 'Accept: application/json';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'key: ' . $this->getApiKey();
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        // Send the request & save response
        $response = curl_exec($curl);

        // Close request to clear up some resources
        curl_close($curl);

        var_dump($parameters);

        // Return the decoded response as an associative array
        return json_decode($response, TRUE);
        // return $response;
    }

    /**
     * baseUrlSetter
     * Setiap tipe akun memiliki base URL API yang berbeda. Hal ini bertujuan agar aplikasi yang telah Anda buat tetap dapat berjalan meskipun Anda melakukan upgrade akun. Akun dengan tipe Basic dapat menggunakan endpoint akun Starter, tapi tidak sebaliknya. Begitu pula dengan Pro dapat menggunakan endpoint akun Starter dan Basic tapi tidak sebaliknya.
     * @return mixed
     */
    private function baseUrlSetter()
    {
        $baseArray  = [
            'Starter'   => 'https://api.rajaongkir.com/starter',
            'Basic'     => 'https://api.rajaongkir.com/basic',
            'Pro'       => 'https://pro.rajaongkir.com/api',
        ];
        foreach ($baseArray as $key => $value) {
            if ($this->getTipeAkun() == $key) {
                $this->setBaseUrl($value);
            }
        }

        return $this->getBaseUrl();
    }


    /**
     * Get $apiKey
     *
     * @return  string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set $apiKey
     *
     * @param  string  $apiKey  $apiKey
     *
     * @return  self
     */
    public function setApiKey(string $apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * Get $baseUrl
     *
     * @return  string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * Set $baseUrl
     *
     * @param  string  $baseUrl  $baseUrl
     *
     * @return  self
     */
    public function setBaseUrl(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    /**
     * Get starter | Basic | Pro
     *
     * @return  string
     */
    public function getTipeAkun()
    {
        return $this->tipeAkun;
    }

    /**
     * Set starter | Basic | Pro
     *
     * @param  string  $tipeAkun  Starter | Basic | Pro
     *
     * @return  self
     */
    public function setTipeAkun(string $tipeAkun)
    {
        $this->tipeAkun = $tipeAkun;
        return $this;
    }

    /**
     * Get $method
     *
     * @return  string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set $method
     *
     * @param  string  $method  $method
     *
     * @return  self
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
        return $this;
    }
}
