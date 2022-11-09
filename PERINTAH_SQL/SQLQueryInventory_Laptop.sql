CREATE DATABASE Inventory_Laptop

create table tb_Karyawan
(
Nama_Karyawan varchar(20) primary key not null,
No_Telpon varchar(12) not null,
Alamat varchar (20) not null,
)
select*from tb_Karyawan

alter table tb_Karyawan
add Gaji varchar(25)

drop table tb_Karyawan

insert into tb_Karyawan (Nama_Karyawan , No_Telpon , Alamat) values
('ANGGIE','081238693349','Tulungagung'),
('ZIDAN','081567890098','Jember'),
('BAYU','081387654321','Kediri'),
('HANSEN','081223458765','Surabaya'),
('AKBAR','081234568762','Trenggalek'),
('LUCAS','081222299233','Blitar'),
('OLIF','081233339999','Jakarta'),
('RIDO','081233365999','Lumajang'),
('HADDAD','081598766543','Pasuruan')

create table tb_datalaptop
(
nama_laptop varchar(20) primary key not null,
jumlah_laptop varchar(20) not null,
warna_laptop varchar(20) not null,
)

select*from tb_datalaptop 

alter table tb_data_laptop
add harga integer

exec SP_RENAME 'tb_datalaptop.nama_laptop' , 'merk' 

alter table tb_datalaptop
alter column jumlah_laptop integer

drop table tb_data_laptop

insert into tb_datalaptop (nama_laptop,
jumlah_laptop, warna_laptop) values
('Asus','1','Hitam'),
('Dell','2','Silver'),
('HP','2','Silver'),
('Lenovo','2','Hitam'),
('Macbox','1','Gold'),
('Samsung','1','Hitam'),
('Acer Aspire','1','Putih'),
('Toshiba','1','Hitam'),
('Huawei','2','Biru'),
('Apple','1','Gold')

create table tb_pembeli
(
id_pembeli varchar (20) primary key not null,
nama_pembeli varchar (20) not null,
no_tlp varchar (25) not null,
)

select * from tb_pembeli 

alter table tb_pembeli
add alamat varchar (50) 

drop table tb_pembeli

insert into tb_pembeli (id_pembeli,
nama_pembeli, no_tlp) values
('A0001','ANGGIE','081238693349'),
('A0002','JEJE','081234590991'),
('A0003','ZIDAN','081567890098'),
('A0004','BAYU','081387654321'),
('A0005','HANSEN','081223458765'),
('A0006','AKBAR','081234568762'),
('A0007','LUCAS','081222299233'),
('A0008','OLIF','081233339999'),
('A0009','RIDO','081233365999'),
('A0010','HADDAD','081598766543')

select b.nama_pembeli, a.id_pembeli,
a.no_tlp,b.jumlah_barang, b.total_pembayaran 
from tb_pembeli as a 
inner join tb_pembayaran as b
on a.id_pembeli = b.id_pembeli

select b.nama_pembeli, a.id_pembeli,
a.no_tlp,b.jumlah_barang, b.total_pembayaran 
from tb_pembeli as a 
left outer join tb_pembayaran as b
on a.id_pembeli = b.id_pembeli

select b.nama_pembeli, a.id_pembeli,
a.no_tlp,b.jumlah_barang, b.total_pembayaran 
from tb_pembeli as a 
right outer join tb_pembayaran as b
on a.id_pembeli = b.id_pembeli

select b.nama_pembeli, a.id_pembeli,
a.no_tlp,b.jumlah_barang, b.total_pembayaran 
from tb_pembeli as a 
full outer join tb_pembayaran as b
on a.id_pembeli = b.id_pembeli

select c.nama_karyawan, a.no_tlp, b.jumlah_barang, c.total_gaji_karyawan
from tb_pembeli as a 
inner join tb_pembayaran as b
on a.id_pembeli = b.id_pembeli
inner join tb_gaji_karyawan as c on b.id_pembeli = c.Id_Karyawan

create table tb_pembayaran
(
id_pembeli varchar (20) primary key not null,
nama_pembeli varchar (20) not null,
jumlah_barang integer not null,
total_pembayaran integer not null,
dibayarkan integer not null,
kembalian integer not null,
)
select * from tb_pembayaran

alter table tb_pembayaran
add tanggal_transaksi date 

drop table tb_pembayaran 

insert into tb_pembayaran (id_pembeli,
nama_pembeli, jumlah_barang, total_pembayaran, dibayarkan, kembalian) values
('A0001','ANGGIE','1','1500000','3000000','15000000'),
('A0002','JEJE','2','2000000','2000000','0'),
('A0003','ZIDAN','2','2000000','2000000','0'),
('A0004','BAYU','2','1000000','2000000','1000000'),
('A0005','HANSEN','1','1600000','2000000','400000'),
('A0006','AKBAR','1','1200000','200000','80000'),
('A0007','LUCAS','1','1000000','2000000','1000000'),
('A0008','OLIF','1','1500000','2000000','500000'),
('A0009','RIDO','2','1000000','2000000','1000000'),
('A0010','HADDAD','3','2000000','200000','0')


UPDATE tb_pembayaran SET id_pembeli = 'A000A'
WHERE nama_pembeli = 'ANGGIE'

DELETE FROM tb_pembayaran WHERE id_pembeli = 'A0002'

SELECT nama_pembeli FROM tb_pembayaran

SELECT * FROM tb_pembayaran WHERE nama_pembeli= 'ANGGIE'

SELECT a.nama_pembeli,a.jumlah_barang FROM tb_pembayaran AS a

SELECT DISTINCT nama_pembeli FROM tb_pembayaran

SELECT id_pembeli FROM tb_pembayaran 
ORDER BY id_pembeli ASC

SELECT * FROM tb_pembayaran 
WHERE id_pembeli BETWEEN 'A0003' AND 'A0007'

SELECT * FROM tb_pembayaran 
WHERE nama_pembeli LIKE 'A%'

select id_pembeli, nama_pembeli,jumlah_barang, dibayarkan as 'total pembayaran' from tb_pembayaran

select id_pembeli, nama_pembeli,jumlah_barang, total_pembayaran as 'dibayarkan' from tb_pembayaran

select * from tb_pembayaran where total_pembayaran < 2000000

select * from tb_pembayaran where total_pembayaran > 1000000

select * from tb_pembayaran where total_pembayaran < 2000000 AND dibayarkan < 2000000

select * from tb_pembayaran where jumlah_barang < 3 AND dibayarkan < 2000000

select total_pembayaran, SUM(dibayarkan) 'total_pembayaran'
from tb_pembayaran
group by total_pembayaran

select total_pembayaran, AVG(dibayarkan) 'total_pembayaran'
from tb_pembayaran
group by total_pembayaran

select jumlah_barang, count (*) 'banyak_barang'
from tb_pembayaran
group by jumlah_barang

select jumlah_barang, max(dibayarkan) 'dibayarkan_tertinggi'
from tb_pembayaran
group by jumlah_barang


select jumlah_barang, min (dibayarkan) 'dibayarkan_terendah'
from tb_pembayaran
group by jumlah_barang

select dibayarkan,SUM(kembalian) 'total_pembayaran'
from tb_pembayaran
group by dibayarkan
having SUM (kembalian)>3000000

select upper (nama_pembeli) as 'upper'
FROM tb_pembayaran

select lower (nama_pembeli) as 'lower'
FROM tb_pembayaran

SELECT SUBSTRING(nama_pembeli,1,4) as 'nama_pembeli'
FROM tb_pembayaran

SELECT LEN (nama_pembeli) as 'nama_pembeli'
FROM tb_pembayaran

SELECT TOP 5 * FROM tb_pembayaran

create login _A0003 with
password='123',check_policy=off
go
use Penjualan_Laptop
go
create user coba for login _A0003
with default_schema = [dbo] 

grant select on object ::dbo.tb_pembayaran to coba

revoke select on object ::dbo.tb_pembayaran from coba

deny select on object ::dbo.tb_pembayaran to coba

create table tb_gaji_karyawan
(
Id_karyawan varchar (20) primary key not null,
nama_karyawan varchar (20) not null,
total_gaji_karyawan integer not null,
)
select * from tb_gaji_karyawan 

alter table tb_gaji_karyawan
add tanggal_pembayaran date 

drop table tb_gaji_karyawan 

insert into tb_gaji_karyawan (Id_Karyawan,
nama_karyawan, total_gaji_karyawan) values
('A0001','ANGGIE','1000000'),
('A0002','JEJE','10000000'),
('A0003','ZIDAN','1000000'),
('A0004','BAYU','1000000'),
('A0005','HANSEN','1000000'),
('A0006','AKBAR','1000000'),
('A0007','LUCAS','1000000'),
('A0008','OLIF','1000000'),
('A0009','RIDO','1000000'),
('A0010','HADDAD','1000000')


create table Transaksi
(
Nama_Karyawan varchar(20) primary key not null,
No_Telpon varchar(12) not null,
Alamat varchar (20) not null,
Total_Pembayaran integer not null,
Tanggal_Transaksi date not null,
)

select*from Transaksi 

insert into Transaksi (Nama_Karyawan , No_Telpon , Alamat , Total_Pembayaran , Tanggal_Transaksi ) values
('ANGGIE','081238693349','Tulungagung','3000000','28 April 2021'),
('ZIDAN','081567890098','Jember','2000000','28 April 2021'),
('BAYU','081387654321','Kediri','2000000','28 April 2021'),
('HANSEN','081223458765','Surabaya','2000000','28 April 2021'),
('AKBAR','081234568762','Trenggalek','200000','28 April 2021'),
('LUCAS','081222299233','Blitar','2000000','28 April 2021'),
('OLIF','081233339999','Jakarta','2000000','28 April 2021'),
('RIDO','081233365999','Lumajang','2000000','28 April 2021'),
('HADDAD','081598766543','Pasuruan','200000','28 April 2021')

select nama_pembeli from tb_pembayaran
union all
select Nama_Karyawan from Transaksi 


create view data_gaji
as
select b.id_pembeli,a.Nama_Karyawan,b.Total_Pembayaran 
from Transaksi as a inner join tb_pembayaran as b 
on a.Nama_Karyawan = b.nama_pembeli

select b.nama_pembeli, a.id_pembeli,
a.no_tlp,b.jumlah_barang, b.total_pembayaran 
from tb_pembeli as a 
left outer join tb_pembayaran as b
on a.id_pembeli = b.id_pembeli

select b.nama_pembeli, a.id_pembeli,
a.no_tlp,b.jumlah_barang, b.total_pembayaran 
from tb_pembeli as a 
right outer join tb_pembayaran as b
on a.id_pembeli = b.id_pembeli

select b.nama_pembeli, a.id_pembeli,
a.no_tlp,b.jumlah_barang, b.total_pembayaran 
from tb_pembeli as a 
full outer join tb_pembayaran as b
on a.id_pembeli = b.id_pembeli

select c.nama_karyawan, a.no_tlp, b.jumlah_barang, c.total_gaji_karyawan
from tb_pembeli as a 
inner join tb_pembayaran as b
on a.id_pembeli = b.id_pembeli
inner join tb_gaji_karyawan as c on b.id_pembeli = c.Id_Karyawan

select * from data_gaji

delete from data_gaji where id_pembeli = 'A0004'

alter view data_gaji
as
select b.id_pembeli,a.Nama_Karyawan,b.dibayarkan
from Transaksi as a inner join tb_pembayaran as b 
on a.Nama_Karyawan = b.nama_pembeli

drop view data_gaji

select Nama_Karyawan,Alamat 
from Transaksi
where Total_Pembayaran > (select AVG(Total_Pembayaran) from
Transaksi)

select id_pembeli from tb_pembayaran as a 
where exists
(select Nama_Karyawan from Transaksi as b where
a.id_pembeli = b.Nama_Karyawan)


select id_pembeli from tb_pembayaran as a 
where not exists
(select Nama_Karyawan from Transaksi as b where
a.id_pembeli = b.Nama_Karyawan)

select nama_pembeli from tb_pembayaran
union all
select Nama_Karyawan from Transaksi 


select nama_pembeli from tb_pembayaran
union
select Nama_Karyawan from Transaksi 

select total_pembayaran from tb_pembayaran
intersect
select Total_Pembayaran from Transaksi 

select total_pembayaran from tb_pembayaran
except
select Total_Pembayaran from Transaksi

alter table Transaksi
add Gaji varchar(25)


drop table Transaksi 

create table tb_pemasukan
(Keterangan text,
Waktu datetime)

insert into tb_gaji_karyawan (Id_Karyawan,
nama_karyawan, total_gaji_karyawan) values
('A0111','MEISYA','5000000'),
('A0112','NAILA','7000000')

create trigger insert_informasi on tb_gaji_karyawan for insert as
insert into tb_pemasukan (Keterangan, Waktu)
values ('Pemasukan data baru', getdate())

create trigger update_informasi on tb_gaji_karyawan for update as
insert into tb_pemasukan (Keterangan, Waktu)
values ('Pembaruan data', getdate())

create trigger update_informasi on tb_gaji_karyawan for delete as
insert into tb_pemasukan (Keterangan, Waktu)
values ('Penghapusan data', getdate())

drop trigger insert_informasi

select * from tb_pemasukan
select * from tb_gaji_karyawan


create procedure hitung_gaji (@gajian int)
as
begin
select id_pembeli, nama_pembeli, jumlah_barang, 
@gajian 'gajian',total_pembayaran + kembalian
+ @gajian
as 'total gaji' from tb_pembayaran
end

hitung_gaji @gajian = 1000000

alter procedure hitung_gaji (@gajian int)
as
begin
select b.id_pembeli, b.nama_pembeli, jumlah_barang, 
@gajian 'gajian',dibayarkan + kembalian
+ @gajian
as 'total gaji' from tb_pembayaran as a
join tb_pembeli as b on b.id_pembeli =  a.id_pembeli
end

drop procedure hitung_gaji 
hitung_gaji @gajian = 2000000

create procedure sp_keuangan
as
begin
declare @keuangan integer
select Nama_Karyawan, max(Total_Pembayaran) as
'tertinggi' from Transaksi group by Nama_Karyawan
end
drop procedure sp_keuangan
sp_keuangan

alter procedure sp_keuangan
as
begin
declare @keuangan integer
select Nama_Karyawan, min(Total_Pembayaran) as
'terrendah' from Transaksi group by Nama_Karyawan
end

drop procedure sp_keuangan

create function fn_pendapatan (@nil float)
returns varchar(30)
begin
declare @hasil varchar (20)
if @nil < (select avg(total_pembayaran) from
tb_pembayaran)
set @hasil = 'pendapatan menurun'
else
 if @nil > (select avg(total_pembayaran) from
tb_pembayaran)
set @hasil = 'pendapatan meningkat'
else
 if @nil = (select avg(total_pembayaran) from
tb_pembayaran)
set @hasil = 'pendapatan stabil'
return (@hasil)
end

drop function dbo.fn_pendapatan
select dbo.fn_pendapatan (200000) 'total_pembayaran'


create function fn_dibayarkan (@nil float)
returns varchar(30)
begin
declare @hasil varchar (20)
if @nil < (select avg(dibayarkan) from
tb_pembayaran)
set @hasil = 'pendapatan menurun'
else
 if @nil > (select avg(dibayarkan) from
tb_pembayaran)
set @hasil = 'pendapatan meningkat'
else
 if @nil = (select avg(dibayarkan) from
tb_pembayaran)
set @hasil = 'pendapatan stabil'
return (@hasil)
end

select dbo.fn_dibayarkan (2000000) 'dibayarkan'

create function fn_kembalian (@nil float)
returns varchar(30)
begin
declare @hasil varchar (20)
if @nil < (select avg(kembalian) from
tb_pembayaran)
set @hasil = 'pendapatan menurun'
else
 if @nil > (select avg(kembalian) from
tb_pembayaran)
set @hasil = 'pendapatan meningkat'
else
 if @nil = (select avg(kembalian) from
tb_pembayaran)
set @hasil = 'pendapatan stabil'
return (@hasil)
end

select dbo.fn_kembalian (80000) 'kembalian'



select * from tb_gaji_karyawan
begin transaction
update tb_gaji_karyawan set nama_karyawan = 'RIDO'
where Id_Karyawan = 'A0009'

Rollback transaction

commit transaction

backup database Inventory_Laptop to
disk = 'D:\SEMESTER 2\Inventory_Laptop.bak'
with stats = 10

restore database Inventory_Laptop from
disk = 'D:\SEMESTER 2\Inventory_Laptop.bak'
with stats = 10