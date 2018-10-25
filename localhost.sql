-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Anamakine: localhost
-- Üretim Zamanı: 21 Aralık 2012 saat 14:20:09
-- Sunucu sürümü: 5.0.51
-- PHP Sürümü: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Veritabanı: `iletisim`
-- 
CREATE DATABASE `iletisim` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `iletisim`;

-- --------------------------------------------------------

-- 
-- Tablo yapısı: `ilet`
-- 

CREATE TABLE `ilet` (
  `id` int(11) NOT NULL auto_increment,
  `konu` text NOT NULL,
  `mail_gonderen` text NOT NULL,
  `gelen_mail` varchar(200) NOT NULL,
  `mesaj` text NOT NULL,
  `tarih` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Tablo döküm verisi `ilet`
-- 

