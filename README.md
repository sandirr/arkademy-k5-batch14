# arkademy-k5-batch14

# arkademy-k3-test
Jawaban soal-soal test arkademy kloter 5 batch 14

Jawaban-jawaban saya dari soal-soal yang diberikan oleh arkademy untuk mengikuti bootcamp

no.1 menggunakan javascript 
no.2 - no.5 menggunakan PHP.
no.6A menggunakan mySQL
no.6B menggunakan HTML/HTML5, CSS/CSS3, framework materialize
no.6c menggunakan source no.6B dan CRUD dengan PHP connect dengan mySQL (Semua fitur berfungsi)

/////////////////////////////

Jawaban No. 6A

Siapkan table yang diminta dan buat relasinya

![tabel kasir](https://user-images.githubusercontent.com/50796200/71543029-ff23c400-29a8-11ea-9774-e3284444e317.JPG)
![tabel kategori](https://user-images.githubusercontent.com/50796200/71543034-267a9100-29a9-11ea-94ae-f4aa15dd5315.JPG)
![tabel product](https://user-images.githubusercontent.com/50796200/71543036-2b3f4500-29a9-11ea-9422-578f2bdaf2a3.JPG)
![relasi](https://user-images.githubusercontent.com/50796200/71543040-31cdbc80-29a9-11ea-9153-8ab5894e89f7.JPG)

Masukkan query berikut untuk menampilkan data yang diminta pada soal no.6A

SELECT tch.name AS KASIR, tp.name AS PRODUCT, tc.name AS KATEGORI,tp.price  from tabel_product AS tp
left join tabel_category tc ON tp.id_category = tc.id
left join table_cashier tch ON tp.id_cashier = tch.id
WHERE tp.id_category = tc.id AND tp.id_cashier = tch.id

Maka hasilnya..

![query untuk menampilkan permintaan pada nomor 6 A](https://user-images.githubusercontent.com/50796200/71543045-3c885180-29a9-11ea-80b6-273e14e43bb5.JPG)

/////////////////////////////

Jawaban No. 6B

![index](https://user-images.githubusercontent.com/50796200/71544270-11f1c500-29b8-11ea-9e99-0589ed7458a1.JPG)
![add](https://user-images.githubusercontent.com/50796200/71544273-174f0f80-29b8-11ea-9a44-d8232fbb759f.JPG)
![edit](https://user-images.githubusercontent.com/50796200/71544274-1ae29680-29b8-11ea-926f-d4abc79d6bfb.JPG)
![hapus](https://user-images.githubusercontent.com/50796200/71544276-1e761d80-29b8-11ea-8c37-9d6aee4e55de.JPG)

/////////////////////////////

Jawaban No. 6C



