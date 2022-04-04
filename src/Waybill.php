<?php
/*
 * File: Waybill.php
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
 * CONTOH PENGGUNAAN:
 * 
 * $waybill = new Waybill();
 * $waybill->setWaybill('nomor_resi_anda');
 * $waybill->setCourier('pos');
 * $result  = $waybill->get();
 * 
 */

namespace Ay4t\Rajaongkir;

class Waybill extends Rajaongkir
{

    /**
     * $waybill
     * Nomor resi JNE
     * @var string
     */
    protected $waybill;

    /**
     * $courier
     * Kode kurir: pos, wahana, jnt, sap, sicepat, jet, dse, first, ninja, lion, idl, rex, ide, sentral, anteraja
     * @var string
     */
    protected $courier = 'pos';

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
        $params     = [
            'waybill' => $this->getWaybill(),
            'courier' => $this->getCourier(),
        ];

        $this->setMethod('POST');
        return $this->exec('/waybill', $params);
    }

    /**
     * Get nomor resi JNE
     *
     * @return  string
     */
    public function getWaybill()
    {
        return $this->waybill;
    }

    /**
     * Set nomor resi JNE
     *
     * @param  string  $waybill  Nomor resi JNE
     *
     * @return  self
     */
    public function setWaybill(string $waybill)
    {
        $this->waybill = $waybill;
        return $this;
    }

    /**
     * Get kode kurir: pos, wahana, jnt, sap, sicepat, jet, dse, first, ninja, lion, idl, rex, ide, sentral, anteraja
     *
     * @return  string
     */
    public function getCourier()
    {
        return $this->courier;
    }

    /**
     * Set kode kurir: pos, wahana, jnt, sap, sicepat, jet, dse, first, ninja, lion, idl, rex, ide, sentral, anteraja
     *
     * @param  string  $courier  Kode kurir: pos, wahana, jnt, sap, sicepat, jet, dse, first, ninja, lion, idl, rex, ide, sentral, anteraja
     *
     * @return  self
     */
    public function setCourier(string $courier)
    {
        $this->courier = $courier;
        return $this;
    }
}
