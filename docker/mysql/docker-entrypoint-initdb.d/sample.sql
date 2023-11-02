SET CHARSET UTF8;
CREATE DATABASE IF NOT EXISTS book_review DEFAULT CHARACTER SET utf8;
USE book_review;

CREATE TABLE IF NOT EXISTS `review`
(
  `id`          int(11) NOT NULL AUTO_INCREMENT,
  `poster`      varchar(255) NOT NULL,
  `book_name`   varchar(255) NOT NULL,
  `review`      text,
  PRIMARY KEY (`id`)
);

INSERT INTO `review`(`poster`, `book_name`, `review`) VALUES
('さくら', 'ポケモン', 'キャラが可愛く、大人から子供まで楽しめると思います。'),
('もみじ', '桃太郎', '幼稚園の子供に読み聞かせるのにいい本でした。');