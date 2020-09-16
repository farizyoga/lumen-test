# Lumen Test

## Sebelum memulai 
- Pastikan semua data yang akan di response dari API sudah memenuhi standard https://github.com/omniti-labs/jsend
- Pastikan memiliki versi PHP 7.2 atau diatasnya dan mysql database di komputer/laptop masing masing
- Fork repo ini
- Buat database di mysql
- Sambungkan aplikasi lumen ke database yang baru dibuat tadi
- Jalankan perintah php artisan migrate
- Jalankan perintah php artisan db:seed

## Setelah selesai
- Push ke repo hasil forking

## Soal
1. Pada endpoint "/users" API harus memberikan list dari table user tanpa attribute password, token, dan device<br><br><br>

2. Pada endpoint "/users" jika mobile memberikan parameter with, maka API harus memberikan response sesuai dengan relation yang diminta<br><br>
contoh request: "/users/?with=phone,address", maka API harus memberikan response list user dengan relation Phone dan Address<br><br>
note: jika relation tidak ditemukan di model, berikan response error<br><br><br>

3. Pada endpoint "/users/{user}" API harus memberikan detail user tersebut tanpa attribute password, token, dan device<br><br><br>
4. Pada endpoint "/secure/my-profile" API harus memberikan detail user yang sedang membuat request dengan cara membaca header authorization yang dikirim oleh mobile<br><br>
contoh request: "/secure/my-profile" dengan header {Authorization: Bearer xxxxxxxx}<br><br>
note: pada tahap ini anda harus memakai AuthServiceProvider dengan memanfaatkan viaRequest()<br><br><br>
5. Jika token invalid atau mobile tidak mengirimkan header Authorization, API harus memberikan response error<br><br>
note: pada tahap ini anda harus memanfaatkan middleware Authenticate
