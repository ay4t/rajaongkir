<?php
/*
 * File: Subdistrict.php
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
 * Ringkasan:
 * Method "subdistrict" digunakan untuk mendapatkan daftar kecamatan yang ada di Indonesia.
 * 
 * Catatan:
 * Jika ID kecamatan kosong, maka akan menampilkan semua kecmatan pada kabupaten/kota terkait. Jika ID kecamatan diisi, maka akan menampilkan detil kecamatan.
 * Parameter "android-key" wajib disertakan jika Anda mengaktifkan perujuk untuk aplikasi Android.
 * Parameter "ios-key" wajib disertakan jika Anda mengaktifkan perujuk untuk aplikasi iOS.
 */

namespace Ay4t\Rajaongkir;

class Subdistrict extends Rajaongkir
{

    /**
     * $cityId
     *
     * @var string
     */
    protected $cityId;

    /**
     * $districtId
     *
     * @var string
     */
    protected $districtId;


    /**
     * __construct
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * get
     *
     * @return mixed
     */
    public function get()
    {
        $params     = [];

        /** required */
        $params['city']     = $this->getCityId();

        /** optional */
        if (!empty($this->getDistrictId())) {
            $params['id']       = $this->getDistrictId();
        }

        return $this->exec('/subdistrict', $params);
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
     * Get $districtId
     *
     * @return  string
     */
    public function getDistrictId()
    {
        return $this->districtId;
    }

    /**
     * Set $districtId
     *
     * @param  string  $districtId  $districtId
     *
     * @return  self
     */
    public function setDistrictId(string $districtId)
    {
        $this->districtId = $districtId;
        return $this;
    }
}
