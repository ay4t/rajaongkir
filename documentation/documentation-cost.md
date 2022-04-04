
# Dokumentasi Rajaongkir [Cost]

Berikut ini adalah fungsi untuk melihat berapa biaya pengiriman atau Ongkos Kirim (ONGKIR)

Semua fungsi ini akan bekerja Jika anda sudah meng-install atau mengkloning dan menambahkan pada Project anda


## Melihat Biaya Pengiriman
```bash
$cost   = new \Ay4t\Rajaongkir\Cost();
$result = $cost
    ->setOrigin( (string) '501')
    ->setOriginType('city')
    ->setDestination((string) '574')
    ->setDestinationType('subdistrict')
    ->setWeight(int) 1000)
    ->setCourier('jne')
    ->get();

var_dump($result);
```