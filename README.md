# web-crud
## instalation in server
- ```sudo apt update -y```
- ```sudo apt install apache2 php libapache2-mod-php mysql-client php-mysql unzip -y```
- ```sudo systemctl start apache2```
- ```sudo systemctl enable apache2```
- ```mysql -h <endpoint database> -u <username> -p```
- ```cd /var/www/<taruh file>```
- ```sudo systemctl restart apache2```
---
## create database
```sql
CREATE DATABASE <nama database>;
USE <nama database>;
CREATE TABLE <nama table> (
  id_barang INT AUTO_INCREMENT PRIMARY KEY,
  nama_barang VARCHAR(255),
  stok INT(11),
  harga_barang INT(11),
  tgl_masuk VARCHAR(255)
);
SELECT * FROM <nama table>;
```
---
