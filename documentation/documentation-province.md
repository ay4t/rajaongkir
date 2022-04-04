
# Dokumentasi Rajaongkir [Province]

Berikut ini adalah dokumentasi cara penggunaan untuk mengambil daftar atau semua Atau hanya ID provinsi tertentu saja yang ada di Indonesia. 

Semua fungsi ini akan bekerja Jika anda sudah meng-install atau mengkloning dan menambahkan pada Project anda


## Mengambil semua daftar provinsi yang ada di Indonesia
```bash
$prov       = new \Ay4t\Rajaongkir\Province();
$result     = $prov->get();
var_dump($result);
```

## Mengambil daftar ID provinsi tertentu saja
```bash
$prov       = new \Ay4t\Rajaongkir\Province();
$prov->setProvId((string) '1');
$result     = $prov->get();
var_dump($result);
```