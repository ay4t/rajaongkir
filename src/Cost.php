<?php
/*
 * File: Cost.php
 * Project: src
 * Created Date: Mo Apr 2022
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
 * 
 * Ringkasan
 * Method “cost” digunakan untuk mengetahui tarif pengiriman (ongkos kirim) dari dan ke kecamatan tujuan tertentu dengan berat tertentu pula.
 * 
 * Contoh Penggunaan:
    $cost   = new Cost;
    $result = $cost
        ->setOrigin('501')
        ->setOriginType('city')
        ->setDestination('574')
        ->setDestinationType('subdistrict')
        ->setWeight(1000)
        ->setCourier('jne')
        ->get();

    var_dump($result);
 */

namespace Ay4t\Rajaongkir;

class Cost extends Rajaongkir
{

    /**
     * $origin
     * ID kota/kabupaten atau kecamatan asal
     * @var string
     */
    protected $origin;

    /**
     * $originType
     * Tipe origin: 'city' atau 'subdistrict'.
     * @var string
     */
    protected $originType;

    /**
     * $destination
     * ID kota/kabupaten atau kecamatan tujuan
     * @var string
     */
    protected $destination;

    /**
     * $destinationType
     * Tipe destination: 'city' atau 'subdistrict'.
     * @var string
     */
    protected $destinationType;

    /**
     * $weight
     * Berat kiriman dalam gram
     * @var int
     */
    protected $weight;

    /**
     * $courier
     * Kode kurir: jne, pos, tiki, rpx, pandu, wahana, sicepat, jnt, pahala, sap, jet, indah, dse, slis, first, ncs, star, ninja, lion, idl, rex, ide, sentral, anteraja.
     * @var string
     */
    protected $courier;

    /**
     * $length
     * (OPTIONAL)
     * Dimensi panjang paket kiriman (cm)
     * @var int
     */
    protected $length;

    /**
     * $width
     * (OPTIONAL)
     * Dimensi lebar paket kiriman (cm)
     * @var int
     */
    protected $width;

    /**
     * $height
     * (OPTIONAL)
     * Dimensi tinggi paket kiriman (cm)
     * @var int
     */
    protected $height;

    /**
     * $diameter
     * Dimensi diameter paket kiriman (cm)
     * @var int
     */
    protected $diameter;

    /**
     * __construct
     *
     */
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function get()
    {
        $params     = [];

        /** required */
        $params['origin']       = $this->getOrigin();
        $params['originType']   = $this->getOriginType();
        $params['destination']  = $this->getDestination();
        $params['destinationType']  = $this->getDestinationType();
        $params['weight']       = $this->getWeight();
        $params['courier']      = $this->getCourier();

        $this->setMethod('POST');
        return $this->exec('/cost', $params);
    }

    /**
     * Get iD kota/kabupaten atau kecamatan asal
     *
     * @return  string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set iD kota/kabupaten atau kecamatan asal
     *
     * @param  string  $origin  ID kota/kabupaten atau kecamatan asal
     *
     * @return  self
     */
    public function setOrigin(string $origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get tipe origin: 'city' atau 'subdistrict'.
     *
     * @return  string
     */
    public function getOriginType()
    {
        return $this->originType;
    }

    /**
     * Set tipe origin: 'city' atau 'subdistrict'.
     *
     * @param  string  $originType  Tipe origin: 'city' atau 'subdistrict'.
     *
     * @return  self
     */
    public function setOriginType(string $originType)
    {
        $this->originType = $originType;
        return $this;
    }

    /**
     * Get iD kota/kabupaten atau kecamatan tujuan
     *
     * @return  string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set iD kota/kabupaten atau kecamatan tujuan
     *
     * @param  string  $destination  ID kota/kabupaten atau kecamatan tujuan
     *
     * @return  self
     */
    public function setDestination(string $destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Get tipe destination: 'city' atau 'subdistrict'.
     *
     * @return  string
     */
    public function getDestinationType()
    {
        return $this->destinationType;
    }

    /**
     * Set tipe destination: 'city' atau 'subdistrict'.
     *
     * @param  string  $destinationType  Tipe destination: 'city' atau 'subdistrict'.
     *
     * @return  self
     */
    public function setDestinationType(string $destinationType)
    {
        $this->destinationType = $destinationType;
        return $this;
    }

    /**
     * Get berat kiriman dalam gram
     *
     * @return  int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set berat kiriman dalam gram
     *
     * @param  int  $weight  Berat kiriman dalam gram
     *
     * @return  self
     */
    public function setWeight(int $weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Get kode kurir: jne, pos, tiki, rpx, pandu, wahana, sicepat, jnt, pahala, sap, jet, indah, dse, slis, first, ncs, star, ninja, lion, idl, rex, ide, sentral, anteraja.
     *
     * @return  string
     */
    public function getCourier()
    {
        return $this->courier;
    }

    /**
     * Set kode kurir: jne, pos, tiki, rpx, pandu, wahana, sicepat, jnt, pahala, sap, jet, indah, dse, slis, first, ncs, star, ninja, lion, idl, rex, ide, sentral, anteraja.
     *
     * @param  string  $courier  Kode kurir: jne, pos, tiki, rpx, pandu, wahana, sicepat, jnt, pahala, sap, jet, indah, dse, slis, first, ncs, star, ninja, lion, idl, rex, ide, sentral, anteraja.
     *
     * @return  self
     */
    public function setCourier(string $courier)
    {
        $this->courier = $courier;
        return $this;
    }

    /**
     * Get dimensi panjang paket kiriman (cm)
     *
     * @return  int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set dimensi panjang paket kiriman (cm)
     *
     * @param  int  $length  Dimensi panjang paket kiriman (cm)
     *
     * @return  self
     */
    public function setLength(int $length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Get dimensi lebar paket kiriman (cm)
     *
     * @return  int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set dimensi lebar paket kiriman (cm)
     *
     * @param  int  $width  Dimensi lebar paket kiriman (cm)
     *
     * @return  self
     */
    public function setWidth(int $width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Get dimensi tinggi paket kiriman (cm)
     *
     * @return  int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set dimensi tinggi paket kiriman (cm)
     *
     * @param  int  $height  Dimensi tinggi paket kiriman (cm)
     *
     * @return  self
     */
    public function setHeight(int $height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Get dimensi diameter paket kiriman (cm)
     *
     * @return  int
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * Set dimensi diameter paket kiriman (cm)
     *
     * @param  int  $diameter  Dimensi diameter paket kiriman (cm)
     *
     * @return  self
     */
    public function setDiameter(int $diameter)
    {
        $this->diameter = $diameter;
        return $this;
    }
}
