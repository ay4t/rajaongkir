<?php
/*
 * File: Province.php
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
 * contoh penggunaan:
    
    $prov       = new Province();

    optional
    $prov->setProvId(1);    

    $result     = $prov->get();
    var_dump($result);

 * 
 */

namespace Ay4t\Rajaongkir;

class Province extends Rajaongkir
{
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
            $params     = [
                'id' => $this->getProvId()
            ];
        }

        return $this->exec('/province', $params);
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
