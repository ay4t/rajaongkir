<?php
/*
 * File: City.php
 * Project: src
 * Created Date: Su Apr 2022
 * Author: Ayatulloh Ahad R
 * Email: ayatulloh@indiega.net
 * Phone: 085791555506
 * -------------------------
 * Last Modified: Sun Apr 03 2022
 * Modified By: Ayatulloh Ahad R
 * -------------------------
 * Copyright (c) 2022 Indiega Network 

 * -------------------------
 * HISTORY:
 * Date      	By	Comments 

 * ----------	---	---------------------------------------------------------
 * 
    $kota       = new City();
    $kota->setProvId(5);
    $result     = $kota->get();

 * 
 */

namespace Ay4t\Rajaongkir;

class City extends Rajaongkir
{
    /**
     * $cityId
     *
     * @var string
     */
    protected $cityId;

    /**
     * $provId
     *
     * @var string
     */
    protected $provId;

    /**
     * __construct
     *
     */
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    /**
     * get
     *
     * @return mixed
     */
    public function get()
    {
        $params     = [];

        if (!empty($this->getProvId())) {
            $params['province'] = $this->getProvId();
        }

        if (!empty($this->getCityId())) {
            $params['id'] = $this->getCityId();
        }

        return $this->exec('/city', $params);
    }

    /**
     * Get $cityId
     *
     * @return  string
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set $cityId
     *
     * @param  string  $cityId  $cityId
     *
     * @return  self
     */
    public function setCityId(string $cityId)
    {
        $this->cityId = $cityId;
        return $this;
    }

    /**
     * Get $provId
     *
     * @return  string
     */
    public function getProvId()
    {
        return $this->provId;
    }

    /**
     * Set $provId
     *
     * @param  string  $provId  $provId
     *
     * @return  self
     */
    public function setProvId(string $provId)
    {
        $this->provId = $provId;
        return $this;
    }
}
