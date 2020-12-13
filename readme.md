# Transisi-test

[[ NOTE UNTUK PENGGUNAAN APLIKASI LARAVEL ]]

1. Saya menggunakan middleware untuk validasi login, jadi saat melakukan register dengan form register akan diarahkan ke dashboard user bukan admin.
   Solusinya untuk sementara ini dengan cara inject database dan dirubah kolom roles dari USER ke ADMIN.

2. Saya menyiapkan factory faker untuk memudahkan mengenerate database, namun harus melakukan sedikit konfigurasi pada database(mysql) untuk merubah kolom logo
   pada table companies ===
   ex : isi awal kolom logo [assets/companies/logo-test.png] => dirubah menjadi [assets/companies/logo-test-1.png]. angka dibelakan kata test harus diurutkan dari 1 hingga 9
