
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tb_ep` (
  `nyckel` int(50) NOT NULL,
  `anamn` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  `fnamn` varchar(50) NOT NULL,
  `enamn` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
)



INSERT INTO `tb_ep` (`nyckel`, `anamn`, `password`, `fnamn`, `enamn`, `Tel`,`Admin`) VALUES

ALTER TABLE `tb_ep`
  ADD PRIMARY KEY (`nyckel`);


ALTER TABLE `tb_ep`
  MODIFY `nyckel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
