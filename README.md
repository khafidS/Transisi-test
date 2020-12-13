# Transisi-test

[[ NOTE UNTUK PENGGUNAAN APLIKASI LARAVEL ]]

1. Saya menggunakan middleware untuk validasi login, jadi saat melakukan register dengan form register akan diarahkan ke dashboard user bukan admin.<br/>
   Solusinya untuk sementara ini dengan cara inject database dan dirubah kolom roles dari USER ke ADMIN.

2. Saya menyiapkan factory faker untuk memudahkan mengenerate database dengan laravel tinker sebanyak 9, namun harus melakukan sedikit konfigurasi pada database(mysql) untuk merubah kolom logo pada table companies <br/>
   ex : isi awal kolom logo [assets/companies/logo-test.png] => dirubah menjadi [assets/companies/logo-test-1.png]. angka dibelakan kata test harus diurutkan dari 1 hingga 9
   <br/><br/>
   Kemudian melakukan storage:link dengan menambahkan folder assets/companies pada folder public dalam storage. dan copy image yang tersedia kedalam folder companies
