-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2018 at 05:40 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` text,
  `admin_pass` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_pass`) VALUES
(1, 'johndoe@gmail.com', '$2y$10$UjtiJ62gTGE0IbjKghgvh.JgZRyKOL3Y79jqCGmOZku/.hbrM1Rny');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `party_id` int(11) NOT NULL,
  `party_name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`party_id`, `party_name`) VALUES
(1, 'Democartic Party'),
(2, 'Republican Party'),
(3, 'Independent'),
(4, 'Digong Duterte Society'),
(5, 'Liberal Party'),
(6, 'Nationalista Party'),
(7, 'Bagong Simula');

-- --------------------------------------------------------

--
-- Table structure for table `presidents`
--

CREATE TABLE `presidents` (
  `pres_id` int(11) NOT NULL,
  `pres_name` text,
  `pres_party` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presidents`
--

INSERT INTO `presidents` (`pres_id`, `pres_name`, `pres_party`) VALUES
(1, 'Donald Trump', 2),
(2, 'Hillary Clinton', 1),
(3, 'Edgar Matobato', 3),
(4, 'Rody Duterte', 4),
(5, 'Juan Tamad', 3),
(6, 'Mar Roxas', 5),
(7, 'Miriram Defensor Santiago', 7),
(8, 'Jejomar Binay', 6);

-- --------------------------------------------------------

--
-- Table structure for table `senators`
--

CREATE TABLE `senators` (
  `sen_id` int(11) NOT NULL,
  `sen_name` text,
  `sen_party` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senators`
--

INSERT INTO `senators` (`sen_id`, `sen_name`, `sen_party`) VALUES
(1, 'Saul Hernandez', 1),
(2, 'James Frey', 1),
(3, 'Ysabelle Jenssen', 1),
(4, 'Patrick Merit', 1),
(5, 'Justin Richford', 1),
(6, 'Mark Douglas', 1),
(7, 'Ray West', 1),
(8, 'Simon Denver', 1),
(9, 'Jay Smith', 2),
(10, 'Shey McNeal', 2),
(11, 'Samantha Musk', 2),
(12, 'Danica Nguyen', 2),
(13, 'Brian Harrison', 2),
(14, 'Catherine Anderson', 2),
(15, 'Elly Buckheimer', 3),
(16, 'Kortney Kool', 1),
(17, 'Margaret Baker', 1),
(18, 'Lori Sanders', 1),
(19, 'Jonathan Rivera', 1),
(20, 'Wanda Phillips', 2),
(21, 'Ann Watkins', 2),
(22, 'Jack Wilfred', 4),
(23, 'Bill Jones', 2),
(24, 'Brenda Wilson', 2),
(25, 'Nicole Carr', 2),
(26, 'Laura Thompson', 2),
(27, 'JJ Smith', 4),
(28, 'Joseph Clark', 4),
(29, 'Tim Barnes', 4),
(30, 'Joseph Lee', 4),
(31, 'Sergio Brozbi', 3),
(32, 'Jack Daniels', 4),
(33, 'Sari Po', 4),
(34, 'Alan Sugar', 4),
(35, 'Mikhail Sorovich', 4),
(36, 'Jessie Vard', 4),
(37, 'Jose Paterno', 4),
(38, 'Jasmine Reynolds', 4),
(39, 'Kiko Pangilinan', 5),
(40, 'Bam Aquino', 5);

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `id` int(11) NOT NULL,
  `username` text,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`id`, `username`, `password`) VALUES
(3, 'novi', '$2y$11$vLcTdt4PwG6.Nhlj91nT9OCwikGG56dtStQEoqWGK/6GY0Oz/OtfO');

-- --------------------------------------------------------

--
-- Table structure for table `vice_presidents`
--

CREATE TABLE `vice_presidents` (
  `vp_id` int(11) NOT NULL,
  `vp_name` text,
  `vp_party` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vice_presidents`
--

INSERT INTO `vice_presidents` (`vp_id`, `vp_name`, `vp_party`) VALUES
(1, 'John Cena', 1),
(2, 'Mr. Bean', 2),
(3, 'Chuck Norris', 3),
(4, 'Alan Peter Cayetano', 4),
(5, 'Leni Robredo', 5),
(6, 'Gringo Honasan', 6),
(7, 'Bong Bong Marcos', 7);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voters_id` int(11) NOT NULL,
  `email_address` text,
  `password` text,
  `has_voted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voters_id`, `email_address`, `password`, `has_voted`) VALUES
(1, 'novhz0514@gmail.com', '$2y$10$35bQRlvP7hAMVkD/GctX2OzFBINvTeMcwywDAx0vkgYhk4s34Vq7C', 0),
(2, 'novhex94@gmail.com', '$2y$10$35bQRlvP7hAMVkD/GctX2OzFBINvTeMcwywDAx0vkgYhk4s34Vq7C', 0),
(3, 'crazycoder@yahoo.com', '$2y$10$FfN.jE0WHRlVHbNmGChVtuE0DAPrMvl7id6.djVeWICCrhArMQ/lm', 0),
(4, 'pbNKkWOd@gmail.com', '$2y$10$duN2pucpSJ3.AGqg8XX8fuE92ORhrBTxsSatbM9eObqQ5jfpsp28K', 0),
(5, 'LxJ3GKgd@gmail.com', '$2y$10$jWflAO34xhKyQVy59oOzGugHPTiXBfL8LKj.Le8QYZOUg1ye7ZcDu', 0),
(6, 'Hy1zqSYV@gmail.com', '$2y$10$V9btHctw2AX5lpB9v1RzV.NivvcadorSDw/NYo7PpQnw/VZI9bXEq', 0),
(7, 'Cs9D70bF@gmail.com', '$2y$10$Gp94toCnfLYi/1C5tyHb.ObPDcsEllHZmM0Pii8M9K35OFhY8ft76', 0),
(8, 'au8H7GAf@gmail.com', '$2y$10$fp5oXJ.HnRSIWX8oFFmUDuCI0TxCurmi8vlI8WFPfS4.raNHK2FDG', 0),
(9, 'MPkLROCZ@gmail.com', '$2y$10$mVl9Cf0z3wmJ1i8EziNu3Ok59yh4ZHvx62arZP2RMzguXFydLlajq', 0),
(10, 'sRakFpJb@gmail.com', '$2y$10$lAb7kRFAo./zF/AmMMKwV.cct57PCR0aISLJ2ZQAUzyCJ1d5oyooC', 0),
(11, 'eHGbSpua@gmail.com', '$2y$10$2mK/23QS2aMJ7vynWEqN/e7jJolqT8nntPY.eTsf8AikNQlCUkA4a', 0),
(12, 'YuXOlF0q@gmail.com', '$2y$10$b8nCGET3yh5WGUj8oMkEmOcnfmmAVFyaN7IMy14LDeupElklkuHie', 0),
(13, '60UPJGEa@gmail.com', '$2y$10$j5mZyK.8zZjFnDJqT6rMdeHorbbdMoZ2uc5mq/jI8TXhw17aoFXfO', 0),
(14, 'Pg0xQ5iu@gmail.com', '$2y$10$hMyMdd7fAz2WXymQoatNRew6m2SDuOvSWwyHQljMLBlU.zFyIKYQy', 0),
(15, 'L0q1h3Cz@gmail.com', '$2y$10$CeirYRYPdYqw3arCzkocluxDAKlcb01L3QfzpRZo0M40u2nD7FIIG', 0),
(16, '6wn3hgzU@gmail.com', '$2y$10$ZmusWzZ6SHFVkOgUFURLJ.T3vRaVsVIR.1m32yIQ91Pg2Dx0vyqh2', 0),
(17, 'e7J3wvLs@gmail.com', '$2y$10$G8Oj204K1w.9PCTo17saF.Ar4vgarW5Q2aKvuaGZ4xRZqwBerwhtW', 0),
(18, '41VzRhPX@gmail.com', '$2y$10$EKqG7CoLcaCvBi8TlZSLMeeVleE6v8fMd.ICURjlE6IrukSaUgwaW', 0),
(19, 'ATnFyjN3@gmail.com', '$2y$10$WK75IuAsuUx1TiRHrYXtfeKdypVeDIuPESLUfb9pAro02jww3ubte', 0),
(20, 'VAFZaIrb@gmail.com', '$2y$10$RGfOtvbpij7zZZqtwQUUJujuUvVm/a5AHqpzEu0IH8Oiozc4Gfb9S', 0),
(21, 'AJVnQcEj@gmail.com', '$2y$10$SWMDLhSBtVg/kn4oKehlhOOoKcxc8veJSNR7pGEKutLCPm5CS0w6G', 0),
(22, 'Hyi7Y0KD@gmail.com', '$2y$10$MjTEGUtXH5u7pK/rJg3dIuHrCgD0EtjCIIjQAKPRn/hnRM/g8BFKy', 0),
(23, 'e3PWRCDi@gmail.com', '$2y$10$DwTIyvPGINX0zznf8Fj1UuICSt.lM5CS/Mw6iXzDaxQSpK8YpprcS', 0),
(24, 'iJ0Fuj8e@gmail.com', '$2y$10$W5H36gUX0dZuSyeR2A6lD.j.a7fTNlsUxwA2Z7AoxKAfBbPXWDJrS', 0),
(25, '1kftgcxr@gmail.com', '$2y$10$XTXXkHpsKager5u/kmwce.YmCallmJ7k.weWqnnKow8NRQsSFAGOy', 0),
(26, 'diflaptx@gmail.com', '$2y$10$7KYvCKWIuxcoVW3.KRLxWuyN7nCgxdFGiPfo/iQVFaVKKodVhX2/.', 0),
(27, '82hnz5gn@gmail.com', '$2y$10$hmF8TGU16d6dtPsr0/J9B.8nQqQCc9ipFXUAlpRvA3hEI9vbztHrm', 0),
(28, 'obpsmwza@gmail.com', '$2y$10$cJtYz.cyz4/VvRWvDcOrn.9mNVzB2qhx7bYIbb4dKoDnGjFgN/Nua', 0),
(29, 'gdgqpfki@gmail.com', '$2y$10$1.o1azm0pBQ650hH8SbQAebd/YmOKSN.4c8ik4oUKg27RuDPMtW/S', 0),
(30, 'dioplfim@gmail.com', '$2y$10$0x2ShEIDEVAZoNu5M44qiOtjyM6wU7hO7I7RfT0rbuxN8qu.mzi6C', 0),
(31, 'k2zpmpis@gmail.com', '$2y$10$PfXp1yHWZVcQOR9q23GqCeXGey9QP92jyvajWSlrUp8J07n5TY48.', 0),
(32, '3wfk2ymx@gmail.com', '$2y$10$UrfmTlLuDrzirorxnbtMfOHXBLwW6P/tj00rk5aE5JTHvYfHt.GIa', 0),
(33, '8uimcwxh@gmail.com', '$2y$10$Vo8uG7XHAwVCARI7xSZTRuw.XdUP1CTc0RGRb6VgOcZq4t50M4fV.', 0),
(34, '9knnp8ab@gmail.com', '$2y$10$z/ro3/p2g3qnRCl1rg9fIOAmvG.TUCH5dXJ7ACNYDGpPnAgH6ZLAe', 0),
(35, 'perv9xun@gmail.com', '$2y$10$eYRXh6a5HK5WuQMbPi/.9OyOn1nB88NPIv6cHAXQzxldwM6WOGGoy', 0),
(36, 'bqsnylnf@gmail.com', '$2y$10$LFgS5g2ktOAX4rsgeTBlw.azf1inlrsJqofW25NuZhFipoVyAkhcm', 0),
(37, '7koit1xt@gmail.com', '$2y$10$Mn8GjcKk5mAovuJuuJi3guTxRsLFGit0GLBLeeckFtmT34LMZWu0q', 0),
(38, 'cjwyldzr@gmail.com', '$2y$10$D4UpkncY/pROFis0Jf6aUe7MVXfvr8MUUK1SbkyGnb3dF8hrUL7fy', 0),
(39, 'veyk8og3@gmail.com', '$2y$10$3LmMuUr1z9SE1jonhqK7KuITaqsyQXBnWeQtDo3wfgLdGM.nmR032', 0),
(40, 'jeswkcys@gmail.com', '$2y$10$EMqBiTTCzM2sNnblfb6yG.2rab0lxEPFEUMYJieidySYO/KBUslAy', 0),
(41, 'e5ukthsz@gmail.com', '$2y$10$c6fvr4QhPy5cyDlTNJrkbOw6qrxu6XuT.3B4oC20ed0//TCJFtIi.', 0),
(42, 'xaiikh47@gmail.com', '$2y$10$B2zJ5ixonn355zlcq0z/1uwPsUsy3Gi.vSjhnC/yGePnNXXu9vMT.', 0),
(43, 'o1pknshk@gmail.com', '$2y$10$lhBlaLMvIoVrkM2amJYjN.N/HkePVX65omt3VATDjyFn9Fqx23HcK', 0),
(44, 'mp7s6tqv@gmail.com', '$2y$10$eNR0BhYPILb4Hd/4mdo2U.9w4nPbccAo3dUYFrArDUv6lp.LEEXEG', 0),
(45, 'asw3nvu5@gmail.com', '$2y$10$aiMG0yjZImU3.YgUqbGsEud0AfLb9bnqm5WJAFFyZF9BbDzmKZFre', 0),
(46, 'gzmwhkmv@gmail.com', '$2y$10$V8xsra33fE4Je2x2.dx3UeW2U/6M2NMPEnGg4FEF.Uu5B1l281QBG', 0),
(47, 'byb2qpgm@gmail.com', '$2y$10$2D6Q0xAdxfBjMAwXRXnCQ.Nullv8DmFVJKaIUVIPpwpXz3YtRhiN6', 0),
(48, 'icq2ey3a@gmail.com', '$2y$10$euzPAsSuIJSHPSSyfNbYuO44qrKP9osm9ETId8o1FagAoT8VS3TG2', 0),
(49, 'hk45xog2@gmail.com', '$2y$10$DUGDdZ5wDbGbYCEcEtUF1.XRPGp3sF2rMj5OMTGnr4jvsLm4kKP2e', 0),
(50, 'owzldelg@gmail.com', '$2y$10$g/68hhOlf9LCMVZnuVZxuuKRHkMTiYNYGMT.tFwWjrsemBh0nshn2', 0),
(51, 'rfjbn6vq@gmail.com', '$2y$10$Lwx21Ttd9viyuWcNBCFQwOhRwazsKqTJt5MVB3zYMsmMsd7hE11jK', 0),
(52, 'avdb8lge@gmail.com', '$2y$10$qd5/THMu8z4YVL1jQU/DPuTUvi3ChU3lHGaXj8UaZh3Boe7chmetO', 0),
(53, 'b6du1yv7@gmail.com', '$2y$10$JrRsu.kS97f8NWh7fYfRWOzJMGXGWGZEvC1aUAjDU4HBKUeKs47cq', 0),
(54, 'qyop6g2k@gmail.com', '$2y$10$xgoOvrbJcCYHuqIwd.J5aurAmfpdgz7ABf5VmZS3H7JUn5SCwx8IW', 0),
(55, 'mwu9tgis@gmail.com', '$2y$10$a6Nb/DPmp9rDaXth3HE9D.LcDwHzR2ZUJslGJ1VKMRMjW4dre8ZaK', 0),
(56, 'omaug0u2@gmail.com', '$2y$10$HqVjoqqjYmea9PZx34Jufuo.QLCxURHpbj8kUlJch8Zm67FdwhuMm', 0),
(57, 'w45jz3ha@gmail.com', '$2y$10$G7jmqQHCdr6Z9RKw5pWICeH63mopwarg1x4.IAxwM4bbKM1IEz3Tm', 0),
(58, 'cvsez5ok@gmail.com', '$2y$10$1wGA72Ei/G3O83dwwoDAU.8gXYHB0daUuRxSgNs3aiKVvFrKPBmvy', 0),
(59, 'nzarzqbg@gmail.com', '$2y$10$tB4pH7uLLu0ImHKWMLEdtesmuQC0K/dUbvT5qyHTVWaBaZLOm1F8y', 0),
(60, 'qzb4rl6v@gmail.com', '$2y$10$nBAzUXJCkpGPUTvysF7E7OsayD4YFknxLGwQ.unweB0Z0OpVAnFji', 0),
(61, '2naxyuf8@gmail.com', '$2y$10$LN5W/vqG1U3CvVH4XrC9JeL8SZQ5ttLsypliVL.QJUjP7nG9bDVl2', 0),
(62, 'iuomzyus@gmail.com', '$2y$10$UzJf428KENa5lD7nLXbef.SYktcV.QKbpRlvy0W.QfglM9z.ch2sa', 0),
(63, '3qthhfgn@gmail.com', '$2y$10$OlZ6DI5FO0CqH2mZb4xFy.lckz5TK3ajtGgPI3100XtTLOO8alKQC', 0),
(64, 'sbon2vpa@gmail.com', '$2y$10$leWx0RlBN7xIoZ5flJghtu.a/0eAD0iYTfuT5uIF.wgypDYGOPSni', 0),
(65, 'omgsbkad@gmail.com', '$2y$10$dy1UP/oWkDnkb5T3qrK3yutWXtfD4Lq1ELWTwDjlGsDY/zYrbwQzS', 0),
(66, '0mxzued4@gmail.com', '$2y$10$dpqzEdSpGi8NSRM7aOK.MO0pFmdwII0Ui9a70I7lBEruIbJpEkXu6', 0),
(67, 'xkziub23@gmail.com', '$2y$10$cqqUkFLuG7kt09XTuUZFfe21GyoYIOs.DOqEzK4CpE2rKbtb2LF5i', 0),
(68, 'kipxxrbi@gmail.com', '$2y$10$9qvBE5zRpuBp6xp2FKigO.1LD7J9yMz6lV8rzEh4dE.lmxshemmke', 0),
(69, 'nbtixgbl@yahoo.com', '$2y$10$HcM9ENDs1mDn2aosUo.poe7Qwhme3F9ffEqzmdcgEGKc6D2.en8Hm', 0),
(70, 'slhh8la1@yahoo.com', '$2y$10$n1CkJ0WP7iqAxIVkJWWH.eiJLHCKg/Dgriw1yQdKVipkqZJheIQMS', 0),
(71, 'vyun24sk@yahoo.com', '$2y$10$6e1Qayi2utgk5zdL3IuAwuVtxfEnE.PB9sZ9FB1NgNP5RB7Im0582', 0),
(72, 'fasb5iyq@yahoo.com', '$2y$10$nd5CowskF1z4fOBDuQ7aJuD6.ICj45fzVh1iAikdEc1V9Mg3JBHfe', 0),
(73, 'wrasl5ie@yahoo.com', '$2y$10$LqvQlnDQbqhZAcL5Ko9r7u1SUfZYawtWWhBaj8Tvj7K4TdFcQvQpq', 0),
(74, 'kmy43eth@yahoo.com', '$2y$10$KpwYKbNRocn1Xvce4umHUOEyI/exNvtuu5na5BXrofTW0IEg7S8lO', 0),
(75, 'xrwnjzb4@yahoo.com', '$2y$10$TAReu00ee5m.mdbu.kpm4uRSC3rsFChgOWMZE28BK7brOPgLPQLqW', 0),
(76, 'vkxn9ay6@yahoo.com', '$2y$10$LVNe/eQ0cESn5fM4bkrZi.z8wHm1Yu7UOplEeonPIA6iztaNnsNQi', 0),
(77, 'hz9u0yhb@yahoo.com', '$2y$10$DYo6PaXqE8OVuEkYUDzCduJSoTggK0NlYvXNhNjpUfp/wA8D2T7AS', 0),
(78, 'bgmmdrxp@yahoo.com', '$2y$10$Ck4CfsATIRdIDO1vF/so.uW.Sl4f1Et3..s.833ZaFR0f3kOv9inm', 0),
(79, '0epb2lag@yahoo.com', '$2y$10$w36/M6k.YspUWVaYRGCzb.Cap2bQXkwJLqjRQatT9C5QYnHlZcRWC', 0),
(80, 'ajvolpke@yahoo.com', '$2y$10$09wh1885.fu9Mabdft6/yui2ZoEsKOzp8pFNOJ6VfOulKS8by0vqS', 0),
(81, 'uhsclm1d@yahoo.com', '$2y$10$Blcne6tKEuR8CKBBPJG/ZuRT8szHw.Pa1Rmk2YuxyKB2V56pHyRna', 0),
(82, 'nnr9vmwj@yahoo.com', '$2y$10$rP0gedCibsvpTud.0QBxoOIqlDr//RsgiR3vd0JUK0.Eh7TcvPEve', 0),
(83, 'mnstjr5t@yahoo.com', '$2y$10$AnqCwPmY55Jw0RTI3m0OIuSwc779p3moMwYLGvXf6ZZRsuM3wLmTa', 0),
(84, '9wmhk1sb@yahoo.com', '$2y$10$Rr5igC2PaPDWR8UXQej35.TV7k4PzCdF56MJMs9ocphalKG5Pip1.', 0),
(85, 'mld2zys0@yahoo.com', '$2y$10$MZyxN10H9h6e4XZQLjeopO2oukth33Qt1LHUxWRAQrJQeUClvYS6q', 0),
(86, 'wthc9zkr@yahoo.com', '$2y$10$M85r3qJj2CoKfG5B56zNvOybM2nTzw6pJHZUkd6Zax6sATCwPBcz.', 0),
(87, 'ut5a93dj@yahoo.com', '$2y$10$lKcyJfxz2raSOLjFXXDUoOoEhnGLi70BQ3VjfhCpt0r.Lbyu0lKsy', 0),
(88, 'q5x1gdtd@yahoo.com', '$2y$10$IUyMGxB2CPcQLJhsdFVC3.xtLSICXeyi0uJcZ4hjevUCsJa11530.', 0),
(89, 'ldwvstcp@msn.com', '$2y$10$iucv8VCH2aH6SMYefLmErOYPtLtXIfOUGj3J8LFd67vCYHhAXnA8G', 0),
(90, 'c9k2tfjd@msn.com', '$2y$10$m47EmVSARPgNNEmw6UrG0.pdRCu8oKQEczO/qIQldmh6Ltt2l1auC', 0),
(91, 'yszgibj1@msn.com', '$2y$10$sTn7i9rSVE9s/DN.D0EJ5eCd8MyF/M0qSV6dcbIok2ZZzV0ZWopQa', 0),
(92, 'f0eepwhr@msn.com', '$2y$10$k8SOw4bF6cOTxp/sThS6Dej9olSFJI9Y91rq8F457iwAPFEiOTOSi', 0),
(93, '2vhypnt9@msn.com', '$2y$10$NsU2P8ymNfXRq/jrPLUXauCH4fsywy5yA67U4coE8M1.mB.zzcxx2', 0),
(94, 'mnm50o3o@msn.com', '$2y$10$5mMC080PTf6.dSFa7wraZ./s2IEzVVPkFlJIioLp86lndXCAkaNVS', 0),
(95, 'rfnfqlap@msn.com', '$2y$10$pzGkoZwU6izzwNSLLX2SoOgsHRlJ/SW70jv..b0Y7wTuqJ61TNmJ2', 0),
(96, 'yakxs6rh@msn.com', '$2y$10$hhjWb/SdJW8ZlnTwmbBP..Mc7/7PRNg0RMqe4WKXC.olTR.ditJxO', 0),
(97, 'yokguddz@msn.com', '$2y$10$WS6MS3/813VyM8w97NMMqe7GKlaIqu08YbgFOAMPn95J1zsO2oML2', 0),
(98, 'yocdg9xv@msn.com', '$2y$10$zFmuGPJU/OO8hKaOVLXfVOvu9TbiQZHv7pBmpxJ8lyNL2qlkqpAam', 0),
(99, 'kjwwmgre@msn.com', '$2y$10$vCnH6APdwa3FXYuJtA44QenFyP7HZ/IEE3OmM8szZnaluOqcnED.S', 0),
(100, 'vizhjmd4@msn.com', '$2y$10$AzyzWZUchMwkcIa3vvBvfOkKw5nl10yboqE2QwwzNHkMf8rLqGF4a', 0),
(101, 'rjoed2xk@msn.com', '$2y$10$hgFUHdfCLeDWdkNhixxoq.pVI9Iu.lCbZlkrWfoRSspKTKbDVmfKq', 0),
(102, 'kechbzos@msn.com', '$2y$10$riprIW2ke92KfTdx.o7/Lusb8Wlh.KPEBI77FBxJnv/k5Jjebp9vK', 0),
(103, '42gotrwn@msn.com', '$2y$10$zvtpSOxK4EseeM9EF3fpqeGI9lY2GlmAbQqe/kaWdl3buHlnrPf0u', 0),
(104, 'yab3oq6e@msn.com', '$2y$10$Wdr96WIHYEBJA5GDggBfKOEsE4/3hQXyAEdUmFJeqHDhTY/d7snSS', 0),
(105, 'qf9d5rog@msn.com', '$2y$10$58VGps9F9VkCbCLPy0FpJOq3RhBGPBDib1AElsD.48r4LmXqUeB4m', 0),
(106, 'jo9gksd8@msn.com', '$2y$10$MdQUXQHrhNePJsa/0xdMP.cCUq/GX970DTtxo1WO0rENGw5Zxbe0G', 0),
(107, '7ksexzou@msn.com', '$2y$10$MAuiepFqPeydq5UaLoZQp.v838DbCguXOyFG5Y4ybrtoOO2fHnJZK', 0),
(108, 'ejtpsxca@msn.com', '$2y$10$Riba5/ZuAMYom6qB/l4yCOr4vRVC0AD.1uWaXdzMXqk9qthon1B3O', 0),
(109, 'sfvdoea6@msn.com', '$2y$10$lamx0vnLO25Dz24SB3FQa.iX9/tWHLooZsCZ8nX2RJYndDuhEy9QK', 0),
(110, 'tf9uf17y@msn.com', '$2y$10$xYC7azAJsCkXnQFe7.WmBeKaCNEgCjMUudx3VzXZqOb.yKBwNSZme', 0),
(111, 'cfa6tzwz@msn.com', '$2y$10$vjwVFK6FQCRkws1preq3bOfJMRstQjHX8TFtwe6oDmeTzpXd9rzVa', 0),
(112, '9jdfwwmh@msn.com', '$2y$10$f5QjnfbxkH8ZTn3cITr8LOJ2mpb.xqCMj2jjFE1JLAOdjYHx2edzq', 0),
(113, 'qsufcwl7@msn.com', '$2y$10$ASXjOT0H4KBHlc2a.X02D.7CckLPEUBSQ/uazes3qRRBOgv8e/0tS', 0),
(114, 'ghwrxrqn@msn.com', '$2y$10$qjVlbKogpBfmCAa0ML.Gku9jzsWuSBXFFZmWnXGr/1M3Z4nnLpmtW', 0),
(115, '3mc2nqpr@msn.com', '$2y$10$UjtiJ62gTGE0IbjKghgvh.JgZRyKOL3Y79jqCGmOZku/.hbrM1Rny', 0),
(116, 'zeivhyzw@msn.com', '$2y$10$eryoYZ.nqqvRHT1neGJ3IuT0qZQF0RGIgSjPnZuLVU2SU0nm./cCC', 0),
(117, 'kelnovi@mail.com', '$2y$12$vkJchgzSxj2fawAxde1W2OjjNts4gh7X9UnRD5m5bSib0VTAwYhCG', 0),
(118, 'boom@mail.com', '$2y$12$Wo.ZnZiBDqywDrFO7fS1G.Q4BvZRPa4YPZgyLNs34261ftC1Xj2dy', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vote_logs`
--

CREATE TABLE `vote_logs` (
  `vote_idlog` int(11) NOT NULL,
  `vote_value` int(11) DEFAULT NULL,
  `vote_type` text,
  `date_logged` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`party_id`);

--
-- Indexes for table `presidents`
--
ALTER TABLE `presidents`
  ADD PRIMARY KEY (`pres_id`);

--
-- Indexes for table `senators`
--
ALTER TABLE `senators`
  ADD PRIMARY KEY (`sen_id`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vice_presidents`
--
ALTER TABLE `vice_presidents`
  ADD PRIMARY KEY (`vp_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voters_id`);

--
-- Indexes for table `vote_logs`
--
ALTER TABLE `vote_logs`
  ADD PRIMARY KEY (`vote_idlog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `party_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `presidents`
--
ALTER TABLE `presidents`
  MODIFY `pres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `senators`
--
ALTER TABLE `senators`
  MODIFY `sen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vice_presidents`
--
ALTER TABLE `vice_presidents`
  MODIFY `vp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `vote_logs`
--
ALTER TABLE `vote_logs`
  MODIFY `vote_idlog` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
