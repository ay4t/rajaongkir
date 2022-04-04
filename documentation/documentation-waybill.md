
# Dokumentasi Rajaongkir [Waybill]

Berikut ini adalah fungsi untuk melacak paket berdasarkan nomor resi dan jenis ekspedisi tertentu

Semua fungsi ini akan bekerja Jika anda sudah meng-install atau mengkloning dan menambahkan pada Project anda


## Melacak Paket dengan RESI
```bash
$waybill = new \Ay4t\Rajaongkir\Waybill();

/* nomor resi Anda */
$waybill->setWaybill('10004100136555'); 

/* masukkan jenis ekspedisi, Kode kurir: pos, wahana, jnt, sap, sicepat, jet, dse, first, ninja, lion, idl, rex, ide, sentral, anteraja */
$waybill->setCourier('anteraja'); 

$result  = $waybill->get();
var_dump($result);
```