/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:3306
 Source Schema         : sblog

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 29/10/2018 11:35:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admins_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'admin@admin.com', '$2y$10$NqkGQmy69wnoEdmwfz4KLu6RvWuMm5D4pnOiZb6x5j02XX6N9fZj6', NULL, '2018-10-28 13:22:57', '2018-10-28 13:22:57');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2018_10_28_130600_create_admins_table', 1);
INSERT INTO `migrations` VALUES (4, '2018_10_28_141652_create_posts_table', 2);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve` tinyint(4) NOT NULL DEFAULT 0,
  `author` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, 'Máy bay Indonesia chở gần 200 người rơi xuống biển', 'Một máy bay của hãng hàng không giá rẻ Lion Air chở 189 người đã rơi sáng nay 29/10 khi trên đường từ Jakarta Pangkal Pinang', 'Một quan chức địa phương cho biết với Reuters, lực lượng tìm kiếm, cứu hộ đã tìm thấy các mảnh vỡ của máy bay, trong đó có ghế ngồi, trôi nổi ở vùng biển Java gần cơ sở hạ tầng của công ty dầu khí quốc gia Indonesia Pertamina.\r\n\r\n\"Chúng tôi thấy mảnh vỡ máy bay trên mặt biển ở vị trí cách nơi máy bay mất liên lạc khoảng 2 hải lý\", ông Muhammad Syaugi, người đứng đầu Cơ quan tìm kiếm cứu hộ Indonesia, cho biết. Vùng biển nơi máy bay rơi sâu khoảng 30-35m, ông Syaugi cho biết.', 1, 1, '2018-10-28 14:54:03', '2018-10-29 03:54:56');
INSERT INTO `posts` VALUES (2, 'Bộ Công an tiếp tục điều tra sai phạm thi THPT quốc gia 2018 tại nhiều tỉnh', 'Theo thông tin, hiện nay Bộ Công an đang tiếp tục điều tra sai phạm trong kỳ thi THPT quốc gia 2018', 'Kỳ thi THPT quốc gia 2018 đã gây chấn động với một loạt vụ gian lận xảy ra ở các tỉnh Hà Giang, Sơn La, Hòa Bình. 330 bài thi của 114 thí sinh ở Hà Giang sửa từ 1-8 điểm. Đặc biệt, nếu như Hà Giang có thể khôi phục điểm thi gốc thì tại Hòa Bình, Sơn La, gian lận tinh vi khiến việc khôi phục điểm thi gốc gặp khó khăn.\r\n\r\nTheo đó, số cán bộ giáo dục, nhà giáo đã bị xử lý kỷ luật, bắt giam là 11, trong đó Hà Giang 2; Sơn La 6; Hòa Bình 3; Số học sinh đã bị xử lý là 151, trong đó Hà Giang 114; Sơn La 29: Lạng Sơn 8.\r\n\r\nBộ trưởng Phùng Xuân Nhạ thừa nhận, những sai phạm trên là do phần mềm chấm thi trắc nghiệm tuy đã được Bộ GDĐT hoàn thiện một bước, cơ bản đáp ứng yêu cầu chấm thi nhưng vẫn còn có những kẽ hở trong bảo mật có thể dẫn đến bị lợi dụng để làm sai lệch kết quả thi, nhất là khi người dùng thực hiện gian lận có tổ chức và có chủ đích từ trước.', 1, 1, '2018-10-28 14:55:25', '2018-10-29 04:08:36');
INSERT INTO `posts` VALUES (4, 'Vô Tình', 'Sáng tác', '<p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Đôi khi tôi vô tình nhìn thấy anh&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Anh vô tình đi rất nhanh&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Trái tim rung động theo từng câu hát&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Lấp lánh những ánh đèn chiếu xung quanh&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Tôi thấy mình trong mắt anh...&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Nhưng có lẽ anh không nhận ra.&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Tôi muốn nói anh nghe những tầm thường của thế giới ở ngoài kia,&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Anh có biết không? Tôi muốn nói ra hết nhưng lại sợ mình không thể đi cùng nhau&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Sợ người vô tình. Vô tình lạc mất anh, giữa thênh thang do dự rối ren&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Anh có thể nắm tay em để em không phải tìm anh nữa không?&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Sao anh vẫn chưa thấy em đã cố gắng để mình giống như Em vô tình như thế thôi !&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Em vô tình yêu lấy anh mà sâu đậm như thế này?&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Cùng em đi thật xa đến mọi nơi phương trời lạ&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Phiêu bạt như những áng mây giữa đất trời&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Rồi anh sẽ nhận ra những thứ sâu trong lòng em&nbsp;</span></p><p><span style=\"font-family: Roboto, &quot;segoe ui&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(246, 246, 246);\">Vô tình như là một giấc mơ dài cả đời.</span></p>', 1, 2, '2018-10-29 04:14:00', '2018-10-29 04:28:15');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'user', 'user@user.com', NULL, '$2y$10$jGafB5UJrckL/RyMWPRjJOgEO9rU3eREeFlYm6.YbtI3F7DHDMb06', 'D0dbcfe9rMa5S5XWjg8XD8nQvOdzvImvh7M5AnvHIu59yQ28lF2OjZ1M9x5E', '2018-10-28 13:40:41', '2018-10-28 13:40:41');
INSERT INTO `users` VALUES (2, 'user2', 'user2@user2.com', NULL, '$2y$10$QJaL6PDGr0O2N1UL4sXyR.bPmgGeFKqKV.Xo2C5sIsjnbYMkaThk6', 'T4GmVNrXNbwFLoYnwy5ovudzehLZkUWiO6tY9FDxKay0nnhUui8zvM15nmGQ', '2018-10-28 15:13:22', '2018-10-28 15:13:22');

SET FOREIGN_KEY_CHECKS = 1;
