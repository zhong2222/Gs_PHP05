-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-20 04:09:27
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `action_reading_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `title` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `evaluate` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `purpuse` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `thoughts` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `action` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plan` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `indate` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `img` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `title`, `author`, `url`, `start`, `end`, `evaluate`, `purpuse`, `thoughts`, `action`, `plan`, `indate`, `update_at`, `img`) VALUES
(5, 'アクション リーディング', '赤羽雄二', 'https://play.google.com/store/books/details?id=QrE7DAAAQBAJ&source=gbs_api', '2022-12-11', '2022-12-16', '◎', '効率的に読書する方法を知りたい', '読書→行動に重要性を感じました', '読書プランを立て直す', '読書→行動の習慣化→気づき', '2022-12-31 18:15:28', '0000-00-00 00:00:00', NULL),
(7, 'これから学ぶHTML/CSS', '齊藤新三,山田祥寛', 'https://play.google.com/store/books/details?id=AZueDwAAQBAJ&source=gbs_api', '2022-11-01', '2022-12-30', '◎', '基礎を学ぶ', 'わかりやすかった', 'たくさんのコードを書きます。慣れるように', 'コードをすらすら書けるように', '2022-12-15 23:59:26', '2022-12-31 18:30:22', NULL),
(11, 'スラスラわかるPython', '北川慎治,岩崎圭', 'http://books.google.co.jp/books?id=t9UuDwAAQBAJ&dq=python&hl=&source=gbs_api', '0000-00-00', '0000-00-00', '◎', '', '', '', '', '2022-12-30 21:27:19', '0000-00-00 00:00:00', NULL),
(12, 'ホームページ辞典', '株式会社アンク', 'http://books.google.co.jp/books?id=jZ1BDwAAQBAJ&dq=css&hl=&source=gbs_api', '2022-12-01', '2022-12-24', '✕', '', '', '', '', '2022-12-31 10:13:38', '2023-01-03 22:41:04', NULL),
(16, 'iOSデバッグ&最適化技法', '國居貴浩', 'http://books.google.co.jp/books?id=g-Lryf9X_64C&dq=ios&hl=&source=gbs_api', '2022-12-27', '2023-01-03', '△', '', '', '', '', '2022-12-31 18:46:45', '2023-01-03 22:23:01', NULL),
(27, '', '', '', '0000-00-00', '0000-00-00', '✕', '', '', '', '', '2023-01-12 14:26:55', '2023-01-12 17:29:37', NULL),
(30, '初心者からちゃんとしたプロになる', '相原典佳,草野あけみ,サトウハルミ,塚口祐司', 'http://books.google.co.jp/books?id=ijrGzQEACAAJ&dq=css&hl=&source=gbs_api', '2023-01-01', '2023-01-20', '◯', '', '', '', '', '2023-01-20 02:10:30', '0000-00-00 00:00:00', NULL),
(31, 'ゼロ秒思考', '赤羽雄二', 'https://play.google.com/store/books/details?id=mYWAAgAAQBAJ&source=gbs_api', '2023-01-04', '2023-01-18', '◯', '', '', '', '', '2023-01-20 02:13:45', '0000-00-00 00:00:00', NULL),
(33, '一歩先にいくWordPressのカスタマイズがわかる本', '相原知栄子,大曲仁', 'http://books.google.co.jp/books?id=QMHiCwAAQBAJ&dq=wordpress&hl=&source=gbs_api', '2023-01-06', '2023-01-27', '✕', '', '', '', '', '2023-01-20 03:11:40', '2023-01-20 10:24:01', NULL),
(34, '僕がグーグルで成長できた理由(わけ)', '上阪徹', 'http://books.google.co.jp/books?id=2XXloAEACAAJ&dq=google&hl=&source=gbs_api', '0000-00-00', '0000-00-00', '△', '', '', '', '', '2023-01-20 10:16:34', '2023-01-20 10:23:38', NULL),
(36, '1', '2', '3', '2023-01-07', '2023-01-14', '◯', '1', '2', '3', '5', '2023-01-20 11:49:29', '2023-01-20 11:50:02', NULL),
(37, '1', '2', '3', '2023-01-07', '2023-01-14', '◯', '1', '2', '3', '6', '2023-01-20 11:55:52', '0000-00-00 00:00:00', NULL),
(38, '1', '2', '3', '2023-01-07', '2023-01-14', '◯', '1', '2', '3', '4', '2023-01-20 11:57:11', '0000-00-00 00:00:00', NULL),
(39, '', '', '', '0000-00-00', '0000-00-00', '未選択', '', '', '', '', '2023-01-20 12:05:21', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_user_table`
--

CREATE TABLE `gs_bm_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_bm_user_table`
--

INSERT INTO `gs_bm_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'テスト１管理者', 'test1', '$2y$10$OkYECWicYIBYNtV.JVB9beN/.dmzW1Hbs5ILRoL4w4pLlOj.wMQfK', 1, 0),
(2, 'テスト２一般', 'test2', '$2y$10$h3XJffrill4DfZaqj4HfUeEoCxURFGwGbOZMoGPmj7/j2dhOrRp2C', 0, 0),
(3, 'テスト３', 'test3', '$2y$10$9rCYkEq.eLVksL6hoIp4KegJKYdqjAbsH2IBgdGBEwm6wtV17X.Zy', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_bm_user_table`
--
ALTER TABLE `gs_bm_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- テーブルの AUTO_INCREMENT `gs_bm_user_table`
--
ALTER TABLE `gs_bm_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
