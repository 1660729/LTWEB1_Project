-- MySQL Script generated by MySQL Workbench
-- Sat Dec  8 01:25:45 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `onlineshop` DEFAULT CHARACTER SET utf8 ;
USE `onlineshop` ;

-- -----------------------------------------------------
-- Table `mydb`.`taikhoan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`taikhoan` (
  `ID` varchar(40),
  `NguoiDung` VARCHAR(45) NULL,
  `MatKhau` VARCHAR(45) NULL,
  `DienThoai` VARCHAR(45) NULL,
  `DiaChi` NVARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `HinhAnh` VARCHAR(45) NULL,
  `Quyen` INT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sanpham`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`sanpham` (
  `ID` varchar(40),
  `MaSP` VARCHAR(45) NULL,
  `TenSP` NVARCHAR(45) NULL,
  `LoaiSP` INT NULL,
  `NhaSanXuatId` VARCHAR(40) NULL,
  `XuatXu` VARCHAR(45) NULL,
  `MoTa` TEXT NULL,
  `NgayTao` DATETIME NULL,
  `SoLuong` INT NULL,
  `HinhAnh` VARCHAR(45) NULL,
  `Gia` DECIMAL NULL,
  `LuotXem` INT NULL,
  `TinhTrang` TINYINT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`nhasanxuat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`nhasanxuat` (
  `ID` varchar(40),
  `Ten` NVARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`diachinhanhang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`diachinhanhang` (
  `ID` varchar(40),
  `NguoiDungId` varchar(40),
  `TenNguoiNhan` NVARCHAR(45) NULL,
  `SoDienThoai` VARCHAR(45) NULL,
  `DiaChiGiaoHang` NVARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`dathang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`dathang` (
  `ID` varchar(40),
  `UserId` varchar(40),
  `TongGia` DECIMAL NULL,
  `LoaiGiaoHang` INT NULL,
  `TinhTrang` INT NULL,
  `NgayTao` DATETIME NULL,
  `NgayDuKienGiaoHang` DATETIME NULL,
  `DiaChiNhanHangId` varchar(40),
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`chitietdathang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`chitietdathang` (
  `ID` varchar(40),
  `DatHangId`  varchar(40),
  `MaSP`VARCHAR(45) ,
  `SoLuong` INT NULL,
  `Gia` DECIMAL NULL,
  `TinhTrang` INT NULL,
  `NgayDuKienGiaoHang` DATETIME NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`danhmuc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`danhmuc` (
  `ID` varchar(40),
  `Ten` NVARCHAR(45) NULL,
  
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('1', 'SP001', 'Áo thun KiriMaru Basic AA10', '1', '1', 'VietNam', 'Nữ', '2018-04-06 8:00', '123', 'img/1.jpg','90000', '232', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('2', 'SP002', 'Áo thun KiriMaru Basic AA11', '1', '1', 'VietNam', 'Nam', '2018-04-07 8:06', '122', 'img/2.jpg', '90000', '321', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('3', 'SP003', 'Áo thun KiriMaru Basic AA12', '1', '1', 'VietNam', 'Nữ', '2018-04-03 9:10', '160', 'img/3.jpg', '90000', '222', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('4', 'SP004', 'Áo thun KiriMaru Basic AA13', '1', '3', 'ThaiLand', 'Nữ', '2018-04-08 8:15', '554', 'img/4.jpg', '100000', '432', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('5', 'SP005', 'Áo thun KiriMaru Basic AA14', '1', '3', 'ThaiLand', 'Nam', '2018-04-05 8:19', '112', 'img/5.jpg', '100000', '612', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('6', 'SP006', 'Áo thun KiriMaru Basic AA15', '1', '3', 'ThaiLand', 'Nam', '2018-08-05 8:19', '100', 'img/6.jpg', '100000', '112', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('7', 'SP007', 'Áo thun KiriMaru Basic AA17', '1', '4', 'QuangChau', 'Nam', '2018-06-17 8:20', '333', 'img/7.jpg', '120000', '431', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('8', 'SP008', 'Áo thun KiriMaru Basic AA18', '1', '4', 'QuangChau', 'Nam', '2018-05-20 11:20', '122', 'img/8.jpg', '12000', '443', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('9', 'SP009', 'Áo thun Adachi ST45', '1', '4', 'QuangChau', 'Nữ', '2018-05-17 14:20', '321', 'img/9.jpg', '200000', '111', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('10', 'SP010', 'Áo thun Adachi ST46', '1', '1', 'VietNam', 'Nữ', '2018-01-18 14:20', '654', 'img/10.jpg', '200000', '155', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('11', 'SP011', 'Áo thun Adachi ST47', '1', '2', 'USA', 'Nữ', '2018-03-18 14:25', '124', 'img/11.jpg', '200000', '157', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('12', 'SP012', 'Áo thun Adachi ST48', '1', '2', 'USA', 'Nữ', '2018-02-18 14:25', '221', 'img/12.jpg', '200000', '200', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('13', 'SP013', 'Áo thun Adachi ST49', '1', '2', 'USA', 'Nữ', '2018-06-18 14:25', '224', 'img/13.jpg', '200000', '199', '0');

INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('14', 'SP014', 'Áo khoác ak14', '2', '1', 'VietNam', 'Nữ', '2018-04-06 8:00', '123', 'img/14.jpg','90000', '232', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('15', 'SP015', 'Áo khoác ak15', '2', '1', 'VietNam', 'Nữ', '2018-04-07 8:06', '122', 'img/15.jpg', '90000', '321', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('16', 'SP016', 'Áo khoác ak16', '2', '1', 'VietNam', 'Nữ', '2018-04-03 9:10', '160', 'img/16.jpg', '90000', '222', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('17', 'SP017', 'Áo khoác ak17', '2', '1', 'VietNam', 'Nữ', '2018-04-08 8:15', '554', 'img/17.jpg', '100000', '432', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('18', 'SP018', 'Áo khoác ak18', '2', '3', 'ThaiLand', 'Nữ', '2018-04-05 8:19', '112', 'img/18.jpg', '100000', '612', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('19', 'SP019', 'Áo khoác ak19', '2', '3', 'ThaiLand', 'Nữ', '2018-08-05 8:19', '100', 'img/19.jpg', '100000', '112', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('20', 'SP020', 'Áo khoác ak20', '2', '3', 'ThaiLand', 'Nữ', '2018-06-17 8:20', '333', 'img/20.jpg', '120000', '431', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('21', 'SP021', 'Áo khoác ak21', '2', '4', 'QuangChau', 'Nam', '2018-05-20 11:20', '122', 'img/21.jpg', '12000', '443', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('22', 'SP022', 'Áo khoác ak22', '2', '4', 'QuangChau', 'Nam', '2018-05-17 14:20', '321', 'img/22.jpg', '200000', '111', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('23', 'SP023', 'Áo khoác ak23', '2', '4', 'QuangChau', 'Nam', '2018-01-18 14:20', '654', 'img/23.jpg', '200000', '155', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('24', 'SP024', 'Áo khoác ak24', '2', '2', 'USA', 'Nữ', '2018-03-18 14:25', '124', 'img/24.jpg', '200000', '157', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('25', 'SP025', 'Áo khoác ak25', '2', '2', 'USA', 'Nam', '2018-02-18 14:25', '221', 'img/25.jpg', '200000', '200', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('26', 'SP026', 'Áo khoác ak26', '2', '2', 'USA', 'Nữ', '2018-06-18 14:25', '224', 'img/26.jpg', '200000', '199', '0');

INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('27', 'SP027', 'Giày lười gl27', '3', '1', 'VietNam', 'Nam', '2018-04-06 8:00', '123', 'img/27.jpg','90000', '232', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('28', 'SP028', 'Giày lười gl28', '3', '1', 'VietNam', 'Nam', '2018-04-07 8:06', '122', 'img/28.jpg', '90000', '321', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('29', 'SP029', 'Giày lười gl29', '3', '1', 'VietNam', 'Nam', '2018-04-03 9:10', '160', 'img/29.jpg', '90000', '222', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('30', 'SP030', 'Giày lười gl30', '3', '1', 'VietNam', 'Nam', '2018-04-08 8:15', '554', 'img/30.jpg', '100000', '432', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('31', 'SP031', 'Giày lười gl31', '3', '3', 'ThaiLand', 'Nam', '2018-04-05 8:19', '112', 'img/31.jpg', '100000', '612', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('32', 'SP032', 'Giày lười gl32', '3', '3', 'ThaiLand', 'Nam', '2018-08-05 8:19', '100', 'img/32.jpg', '100000', '112', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('33', 'SP033', 'Giày lười gl33', '3', '3', 'ThaiLand', 'Nữ', '2018-06-17 8:20', '333', 'img/33.jpg', '120000', '431', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('34', 'SP034', 'Giày lười gl34', '3', '4', 'QuangChau', 'nữ', '2018-05-20 11:20', '122', 'img/34.jpg', '12000', '443', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('35', 'SP035', 'Giày lười gl35', '3', '4', 'QuangChau', 'Nũ', '2018-05-17 14:20', '321', 'img/35.jpg', '200000', '111', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('36', 'SP036', 'Giày lười gl36', '3', '4', 'QuangChau', 'Nữ', '2018-01-18 14:20', '654', 'img/36.jpg', '200000', '155', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('37', 'SP037', 'Giày lười gl37', '3', '2', 'USA', 'Nữ', '2018-03-18 14:25', '124', 'img/37.jpg', '200000', '157', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('38', 'SP038', 'Giày lười gl38', '3', '2', 'USA', 'Nữ', '2018-02-18 14:25', '221', 'img/38.jpg', '200000', '200', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('39', 'SP039', 'Giày lười gl39', '3', '2', 'USA', 'Nữ', '2018-06-18 14:25', '224', 'img/39.jpg', '200000', '199', '0');

INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('40', 'SP040', 'Giày Sandal s40', '4', '1', 'VietNam', 'Nữ', '2018-04-06 8:00', '123', 'img/40.jpg','90000', '232', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('41', 'SP041', 'Giày Sandal s41', '4', '1', 'VietNam', 'Nữ', '2018-04-07 8:06', '122', 'img/41.jpg', '90000', '321', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('42', 'SP042', 'Giày Sandal s42', '4', '1', 'VietNam', 'Nữ', '2018-04-03 9:10', '160', 'img/42.jpg', '90000', '222', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('43', 'SP043', 'Giày Sandal s43', '4', '1', 'VietNam', 'Nữ', '2018-04-08 8:15', '554', 'img/43.jpg', '100000', '432', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('44', 'SP044', 'Giày Sandal s44', '4', '3', 'ThaiLand', 'Nam', '2018-04-05 8:19', '112', 'img/44.jpg', '100000', '612', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('45', 'SP045', 'Giày Sandal s45', '4', '3', 'ThaiLand', 'Nữ', '2018-08-05 8:19', '100', 'img/45.jpg', '100000', '112', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('46', 'SP046', 'Giày Sandal s46', '4', '3', 'ThaiLand', 'Nữ', '2018-06-17 8:20', '333', 'img/46.jpg', '120000', '431', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('47', 'SP047', 'Giày Sandal s47', '4', '4', 'QuangChau', 'nữ', '2018-05-20 11:20', '122', 'img/47.jpg', '12000', '443', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('48', 'SP048', 'Giày Sandal s48', '4', '4', 'QuangChau', 'Nũ', '2018-05-17 14:20', '321', 'img/48.jpg', '200000', '111', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('49', 'SP049', 'Giày Sandal s49', '4', '4', 'QuangChau', 'Nam', '2018-01-18 14:20', '654', 'img/49.jpg', '200000', '155', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('50', 'SP050', 'Giày Sandal s50', '4', '2', 'USA', 'Nữ', '2018-03-18 14:25', '124', 'img/50.jpg', '200000', '157', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('51', 'SP051', 'Giày Sandal s51', '4', '2', 'USA', 'Nam', '2018-02-18 14:25', '221', 'img/51.jpg', '200000', '200', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('52', 'SP052', 'Giày Sandal s52', '4', '2', 'USA', 'Nữ', '2018-06-18 14:25', '224', 'img/52.jpg', '200000', '199', '0');

INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('53', 'SP053', 'Giày Thể Thao T53', '5', '1', 'VietNam', 'Nữ', '2018-04-06 8:00', '123', 'img/53.jpg','90000', '232', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('54', 'SP054', 'Giày Thể Thao T54', '5', '1', 'VietNam', 'Nữ', '2018-04-07 8:06', '122', 'img/54.jpg', '90000', '321', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('55', 'SP055', 'Giày Thể Thao T55', '5', '1', 'VietNam', 'Nữ', '2018-04-03 9:10', '160', 'img/55.jpg', '90000', '222', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('56', 'SP056', 'Giày Thể Thao T56', '5', '1', 'VietNam', 'Nữ', '2018-04-08 8:15', '554', 'img/56.jpg', '100000', '432', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('57', 'SP057', 'Giày Thể Thao T57', '5', '3', 'ThaiLand', 'Nam', '2018-04-05 8:19', '112', 'img/57.jpg', '100000', '612', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('58', 'SP058', 'Giày Thể Thao T58', '5', '3', 'ThaiLand', 'Nam', '2018-08-05 8:19', '100', 'img/58.jpg', '100000', '112', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('59', 'SP059', 'Giày Thể Thao T59', '5', '3', 'ThaiLand', 'Nữ', '2018-06-17 8:20', '333', 'img/59.jpg', '120000', '431', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('60', 'SP060', 'Giày Thể Thao T60', '5', '4', 'QuangChau', 'Nam', '2018-05-20 11:20', '122', 'img/60.jpg', '12000', '443', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('61', 'SP061', 'Giày Thể Thao T61', '5', '4', 'QuangChau', 'Nam', '2018-05-17 14:20', '321', 'img/61.jpg', '200000', '111', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('62', 'SP062', 'Giày Thể Thao T62', '5', '4', 'QuangChau', 'Nữ', '2018-01-18 14:20', '654', 'img/62.jpg', '200000', '155', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('63', 'SP063', 'Giày Thể Thao T63', '5', '2', 'USA', 'Nữ', '2018-03-18 14:25', '124', 'img/63.jpg', '200000', '157', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('64', 'SP064', 'Giày Thể Thao T64', '5', '2', 'USA', 'Nam', '2018-02-18 14:25', '221', 'img/64.jpg', '200000', '200', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('65', 'SP065', 'Giày Thể Thao T65', '5', '2', 'USA', 'Nam', '2018-06-18 14:25', '224', 'img/65.jpg', '200000', '199', '0');

INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('66', 'SP066', 'Quần Jeans j66', '6', '1', 'VietNam', 'Nam', '2018-04-06 8:00', '123', 'img/66.jpg','90000', '232', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('67', 'SP067', 'Quần Jeans j67', '6', '1', 'VietNam', 'Nam', '2018-04-07 8:06', '122', 'img/67.jpg', '90000', '321', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('68', 'SP068', 'Quần Jeans j68', '6', '1', 'VietNam', 'Nữ', '2018-04-03 9:10', '160', 'img/68.jpg', '90000', '222', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('69', 'SP069', 'Quần Jeans j69', '6', '1', 'VietNam', 'Nữ', '2018-04-08 8:15', '554', 'img/69.jpg', '100000', '432', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('70', 'SP070', 'Quần Jeans j70', '6', '3', 'ThaiLand', 'Nữ', '2018-04-05 8:19', '112', 'img/70.jpg', '100000', '612', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('71', 'SP071', 'Quần Jeans j71', '6', '3', 'ThaiLand', 'Nam', '2018-08-05 8:19', '100', 'img/71.jpg', '100000', '112', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('72', 'SP072', 'Quần Jeans j72', '6', '3', 'ThaiLand', 'Nam', '2018-06-17 8:20', '333', 'img/72.jpg', '120000', '431', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('73', 'SP073', 'Quần Jeans j73', '6', '4', 'QuangChau', 'Nữ', '2018-05-20 11:20', '122', 'img/73.jpg', '12000', '443', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('74', 'SP074', 'Quần Jeans j74', '6', '4', 'QuangChau', 'Nữ', '2018-05-17 14:20', '321', 'img/74.jpg', '200000', '111', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('75', 'SP075', 'Quần Jeans j75', '6', '4', 'QuangChau', 'Nữ', '2018-01-18 14:20', '654', 'img/75.jpg', '200000', '155', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('76', 'SP076', 'Quần Jeans j76', '6', '2', 'USA', 'Nữ', '2018-03-18 14:25', '124', 'img/76.jpg', '200000', '157', '1');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('77', 'SP077', 'Quần Jeans j77', '6', '2', 'USA', 'Nữ', '2018-02-18 14:25', '221', 'img/77.jpg', '200000', '200', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `HinhAnh`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('78', 'SP078', 'Quần Jeans j78', '6', '2', 'USA', 'Nữ', '2018-06-18 14:25', '224', 'img/78.jpg', '200000', '199', '0');

INSERT INTO `onlineshop`.`nhasanxuat` (`ID`, `Ten`) VALUES ('1', 'VietNam');
INSERT INTO `onlineshop`.`nhasanxuat` (`ID`, `Ten`) VALUES ('2', 'USA');
INSERT INTO `onlineshop`.`nhasanxuat` (`ID`, `Ten`) VALUES ('3', 'ThaiLand');
INSERT INTO `onlineshop`.`nhasanxuat` (`ID`, `Ten`) VALUES ('4', 'QuangChau');


INSERT INTO `onlineshop`.`danhmuc` (`ID`, `Ten`) VALUES ('1', 'Áo thun');
INSERT INTO `onlineshop`.`danhmuc` (`ID`, `Ten`) VALUES ('2', 'Áo Khoác');
INSERT INTO `onlineshop`.`danhmuc` (`ID`, `Ten`) VALUES ('3', 'Giày Lười');
INSERT INTO `onlineshop`.`danhmuc` (`ID`, `Ten`) VALUES ('4', 'Giày Sandanl');
INSERT INTO `onlineshop`.`danhmuc` (`ID`, `Ten`) VALUES ('5', 'Giày Thể Thao');
INSERT INTO `onlineshop`.`danhmuc` (`ID`, `Ten`) VALUES ('6', 'Quần Jeans');

INSERT INTO `onlineshop`.`dathang` (`ID`, `UserId`, `TongGia`, `LoaiGiaoHang`, `TinhTrang`, `NgayTao`, `NgayDuKienGiaoHang`, `DiaChiNhanHangId`) VALUES ('1', '1', '250000', '1', '0', '2018-04-06 12:00:00', '2018-04-09 08:00:00', '1');
INSERT INTO `onlineshop`.`dathang` (`ID`, `UserId`, `TongGia`, `LoaiGiaoHang`, `TinhTrang`, `NgayTao`, `NgayDuKienGiaoHang`, `DiaChiNhanHangId`) VALUES ('2', '2', '320000', '1', '0', '2018-04-10 12:20:00', '2018-04-13 12:00:00', '1');
INSERT INTO `onlineshop`.`dathang` (`ID`, `UserId`, `TongGia`, `LoaiGiaoHang`, `TinhTrang`, `NgayTao`, `NgayDuKienGiaoHang`, `DiaChiNhanHangId`) VALUES ('3', '3', '220000', '1', '0', '2018-04-11 12:30:00', '2018-04-15 11:00:00', '1');
INSERT INTO `onlineshop`.`dathang` (`ID`, `UserId`, `TongGia`, `LoaiGiaoHang`, `TinhTrang`, `NgayTao`, `NgayDuKienGiaoHang`, `DiaChiNhanHangId`) VALUES ('4', '4', '140000', '2', '0', '2018-05-11 11:30:00', '2018-05-14 15:30:00', '2');
INSERT INTO `onlineshop`.`dathang` (`ID`, `UserId`, `TongGia`, `LoaiGiaoHang`, `TinhTrang`, `NgayTao`, `NgayDuKienGiaoHang`, `DiaChiNhanHangId`) VALUES ('5', '5', '420000', '2', '1', '2018-06-16 10:30:00', '2018-06-20 16:30:00', '1');
INSERT INTO `onlineshop`.`dathang` (`ID`, `UserId`, `TongGia`, `LoaiGiaoHang`, `TinhTrang`, `NgayTao`, `NgayDuKienGiaoHang`, `DiaChiNhanHangId`) VALUES ('6', '6', '550000', '2', '1', '2018-06-19 12:30:00', '2018-06-23 13:30:00', '2');
INSERT INTO `onlineshop`.`dathang` (`ID`, `UserId`, `TongGia`, `LoaiGiaoHang`, `TinhTrang`, `NgayTao`, `NgayDuKienGiaoHang`, `DiaChiNhanHangId`) VALUES ('7', '7', '540000', '3', '1', '2018-07-12 17:30:00', '2018-07-18 15:30:00', '2');
INSERT INTO `onlineshop`.`dathang` (`ID`, `UserId`, `TongGia`, `LoaiGiaoHang`, `TinhTrang`, `NgayTao`, `NgayDuKienGiaoHang`, `DiaChiNhanHangId`) VALUES ('8', '8', '130000', '3', '1', '2018-07-22 16:30:00', '2018-07-27 13:30:00', '2');

INSERT INTO `onlineshop`.`diachinhanhang` (`ID`, `NguoiDungId`, `TenNguoiNhan`, `SoDienThoai`, `DiaChiGiaoHang`) VALUES ('1', '1', 'Nguyễn Văn Tí', '0121323231', '224 Nguyễn Văn cừ, Phường 4, Quận 5, TPHCM');
INSERT INTO `onlineshop`.`diachinhanhang` (`ID`, `NguoiDungId`, `TenNguoiNhan`, `SoDienThoai`, `DiaChiGiaoHang`) VALUES ('2', '2', 'Trương Công Lam', '03453y3472', '123 Nguyễn Thị Thập, Phường 7, Quận 10, TPHCM');
INSERT INTO `onlineshop`.`diachinhanhang` (`ID`, `NguoiDungId`, `TenNguoiNhan`, `SoDienThoai`, `DiaChiGiaoHang`) VALUES ('3', '3', 'Đỗ Công Nam', '0643434987', '765 Trần Xuân Soạn, Phường 5, Quận 7, TPHCM');
INSERT INTO `onlineshop`.`diachinhanhang` (`ID`, `NguoiDungId`, `TenNguoiNhan`, `SoDienThoai`, `DiaChiGiaoHang`) VALUES ('4', '4', 'Nguyễn Thị Tuyền', '0687934987', '332 Nguyễn Văn Linh, Phường 2, Quận 7, TPHCM');
INSERT INTO `onlineshop`.`diachinhanhang` (`ID`, `NguoiDungId`, `TenNguoiNhan`, `SoDienThoai`, `DiaChiGiaoHang`) VALUES ('5', '5', 'Lê Văn Nam', '0644554987', '322 Lý Thường Kiệt, Phường 3, Quận 10, TPHCM');
INSERT INTO `onlineshop`.`diachinhanhang` (`ID`, `NguoiDungId`, `TenNguoiNhan`, `SoDienThoai`, `DiaChiGiaoHang`) VALUES ('6', '6', 'Lê Chí Tài', '0444554987', '622 Lý Chính Thắng, Phường 3, Quận 3, TPHCM');
INSERT INTO `onlineshop`.`diachinhanhang` (`ID`, `NguoiDungId`, `TenNguoiNhan`, `SoDienThoai`, `DiaChiGiaoHang`) VALUES ('7', '7', 'Nguyễn Chí Nam', '0994567497', '432 ba tháng hai, Phường 3, Quận 10, TPHCM');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


