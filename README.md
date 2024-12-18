# web-crud
## instalation in server
- ```sudo apt install apache2 php libapache2-mod-php php-mysql unzip```
- ```sudo apt install mysql-client -y```
- ```mysql -h <RDS-endpoint> -u <master-username> -p```
- ```sudo systemctl restart apache2```
---
# create databse sql
```sql
CREATE DATABASE sarana;
USE sarana;
CREATE TABLE tabel_barang (
  id_barang INT AUTO_INCREMENT PRIMARY KEY,
  nama_barang VARCHAR(255),
  stok INT(11),
  harga_barang INT(11),
  tgl_masuk VARCHAR(255)
);
```
---
## see item in database
- ```SELECT * FROM tabel_barang;```
---

