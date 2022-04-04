
# Dokumentasi Rajaongkir [City]

Berikut ini adalah dokumentasi cara penggunaan untuk mengambil daftar atau semua Atau hanya ID Kota tertentu saja yang ada di Indonesia. 

Semua fungsi ini akan bekerja Jika anda sudah meng-install atau mengkloning dan menambahkan pada Project anda


## Mengambil semua daftar Kota / Kabupaten yang ada di Indonesia
```bash
$kota       = new \Ay4t\Rajaongkir\City();
$result     = $kota->get();
var_dump($result);
```

## Mengambil daftar ID Kota / Kabupaten tertentu saja
```bash
$kota       = new \Ay4t\Rajaongkir\City();
$kota->setProvId((string) 5);
$result     = $kota->get();
var_dump($result);
```