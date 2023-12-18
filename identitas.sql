
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `akun` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `akun` (`username`, `password`) VALUES
('212egin', 'itera21');


CREATE TABLE `data` (
  `Nama` varchar(225) NOT NULL,
  `TTL` varchar(225) NOT NULL,
  `Usia` char(50) NOT NULL,
  `JK` varchar(50) NOT NULL,
  `Asal` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `data` VALUES
('Andin', '15 Januari 1998', 25, 'Perempuan', 'Palembang'),
('Boni', '28 Desember 1995', 27, 'Laki-Laki', 'Medan'),
('Rina', '4 Mei 2000', 23, 'Perempuan', 'Lampung Timur'),
('Lani', '2 Juni 1993', 30, 'Perempuan', 'Metro');
COMMIT;
