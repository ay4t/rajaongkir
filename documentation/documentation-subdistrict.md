
# Dokumentasi Rajaongkir [Subdistrict]

Berikut ini adalah dokumentasi cara penggunaan untuk mengambil daftar atau semua Atau hanya ID Kecamatan / Desa tertentu saja yang ada di Indonesia. 

Semua fungsi ini akan bekerja Jika anda sudah meng-install atau mengkloning dan menambahkan pada Project anda


## Mengambil semua daftar Kecamatan / Desa yang ada di Indonesia
```bash
$subdistrict    = new \Ay4t\Rajaongkir\Subdistrict();
$subdistrict->setCityId((string) 100);
$result = $subdistrict->get();
var_dump($result);
```

## Mengambil daftar ID Kecamatan / Desa tertentu saja
```bash
$subdistrict    = new \Ay4t\Rajaongkir\Subdistrict();
$subdistrict->setCityId((string) 100);
$subdistrict->setId((string) 10);
$result = $subdistrict->get();
var_dump($result);
```