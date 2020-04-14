
CREATE DATABASE flowers;
USE flowers;

CREATE TABLE `flori` (
  `id` int(11) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `culoare` varchar(30) NOT NULL,
  `marime` varchar(30) NOT NULL,
  `pret` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `flori` (`id`, `nume`, `culoare`, `marime`, `pret`) VALUES
(1, 'Trandafiri', 'rosii', 'mari', 30),
(2, 'Albastrele', 'albastre', 'mici', 10),
(3, 'Ghiocei', 'albi', 'mici', 15),
(4, 'Toporasi', 'violet', 'medii', 15),
(5, '44444', '11', '22', 33),
(6, 'dddd', '2', '3', 4);


ALTER TABLE `flori`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `flori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
