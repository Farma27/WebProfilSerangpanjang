<p align="center"><img src="https://user-images.githubusercontent.com/53842787/106160108-0f176400-61b8-11eb-9f3a-dfdb0e47ab09.png" width="260"></p>

## WEB PROFILE
Sistem ini dibuat untuk template Web Profil OPD

## Instalasi
    masuk ke direktori local web server (www/htdocs)
    buka cmd lalu masukkan perintah berikut:
    git clone -b master https://github.com/mocharasa-dev/opd-profil.git
    cd opd-profil
    composer install
    composer dump-autoload

## Konfigurasi .env untuk development
    APP_ENV=local
    APP_DEBUG=true
    LOG_CHANNEL=daily

## Migrasi Database
    pastikan database telah dibuat dan sudah terkoneksi dengan aplikasi

    kemudian lakukan perintah berikut:

    php artisan config:cache
    php artisan key:generate
    php artisan cache:clear
    php artisan view:cache
    php artisan optimize
    php artisan migrate:fresh --seed
    php artisan storage:link

    well done, silahkan digunakan tanpa ribet

## Credential Login
    operator    =>  email : operator@gmail.com
                    password : password
    admin       =>  email : admin@gmail.com
                    password : password
    super-admin =>  email : suadmin@gmail.com
                    password : password
# Repository-Baru
# Web-Serangpanjang-PKL
# WebProfilSerangpanjang
