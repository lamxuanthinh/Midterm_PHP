CREATE TABLE TRUONG (
    matruong  VARCHAR(10) NOT NULL PRIMARY KEY,
    tentruong TEXT NOT NULL
)


CREATE TABLE SINHVIEN (
    mahs VARCHAR(10) NOT NULL PRIMARY KEY ,
    hodem VARCHAR(15) NOT NULL ,
    tenhs VARCHAR(10) NOT NULL ,
    ngaysinh VARCHAR(10) NOT NULL ,
    matruong VARCHAR(10) NOT NULL ,
    khoithi VARCHAR(1) NOT NULL ,
    FOREIGN KEY (matruong) REFERENCES TRUONG(matruong)
)

INSERT INTO TRUONG (`matruong`,`tentruong`)
VALUES ('','');
INSERT INTO TRUONG (`matruong`,`tentruong`) VALUES ('BKA','Bach Khoa Da Nang');
INSERT INTO TRUONG (`matruong`,`tentruong`) VALUES ('KT','Dai Hoc Kinh Te');
INSERT INTO TRUONG (`matruong`,`tentruong`) VALUES ('DT','Dai Hoc Duy Tan');
INSERT INTO TRUONG (`matruong`,`tentruong`) VALUES ('VKU','Dai Hoc CNTT Va TT Viet Han');


INSERT INTO `SINHVIEN`( `mahs`, `hodem`, `tenhs`, `ngaysinh`,`matruong`,`khoithi`)
VALUES ('','','','','','');

INSERT INTO `SINHVIEN`(`mahs`, `hodem`, `tenhs`, `ngaysinh`, `matruong`, `khoithi`) VALUES ('VHA0001','Nguyen Tuan','Anh','23/07/1990','VKU','A');

INSERT INTO `SINHVIEN`(`mahs`, `hodem`, `tenhs`, `ngaysinh`, `matruong`, `khoithi`) VALUES ('VHC0001','Dao Duy ','Binh','25/02/1990','VKU','C');

INSERT INTO `SINHVIEN`(`mahs`, `hodem`, `tenhs`, `ngaysinh`, `matruong`, `khoithi`) VALUES ('BKA0001','Nguyen Thi ','Dao','09/11/1991','BKA','A');

INSERT INTO `SINHVIEN`(`mahs`, `hodem`, `tenhs`, `ngaysinh`, `matruong`, `khoithi`) VALUES ('KTA0001','Le My','Huong','13/10/1992','KT','A');

INSERT INTO `SINHVIEN`(`mahs`, `hodem`, `tenhs`, `ngaysinh`, `matruong`, `khoithi`) VALUES ('DTB0001','Nguyen Dinh','Thang','26/12/1992','DT','B');
