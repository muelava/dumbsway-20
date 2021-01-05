<?php
CREATE TABLE `ambilmk` (
  `nim` varchar(5),
  `kodemk` varchar(4),
  `nilai` float,
  `smt` varchar(10),
  `thajar` varchar(10),
  PRIMARY KEY (`nim`,`kodemk`)
);

CREATE TABLE `mhs` (
  `nim` varchar(5),
  `namamhs` varchar(20),
  `alamat` text,
  `tgllhr` date,
  PRIMARY KEY (`nim`)
);

CREATE TABLE `mk` (
  `kodemk` varchar(4),
  `namamk` varchar(20),
  `sks` int(11),
  `smt` varchar(10),
  PRIMARY KEY (`kodemk`)
);
?>