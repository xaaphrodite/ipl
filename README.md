## Cara Install

Butuh composer mun ewh download hela
https://getcomposer.org/download
Jieun database 'ipl_db' (kosongken, ulh diisi)

```sh
git clone https://github.com/xaaphrodite/ipl.git
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```

bisi ngaran database na rk ganti, ganti oge di file .env
...
DB_DATABASE=ipl_db
DB_USERNAME=root
DB_PASSWORD=isi_password_mun_make // mun xampp defaultnamh kosong
...

## Database
php artisan migrate:roleback // reset database (dikosongan)
php artisan migrate          // migrate model (ngisi tabel) database, kode aya di path 'database/migrations/*'

## Dokumentasi
https://laravel.com/docs/8.x

mun bisamh pake github/gitlab na, jdi tinggal pull request gabungken hasil gawena bareng bareng