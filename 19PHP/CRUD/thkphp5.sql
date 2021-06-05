-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: thkphp5
-- ------------------------------------------------------
-- Server version	5.7.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `keywords` varchar(64) NOT NULL,
  `autor` varchar(16) NOT NULL,
  `addtime` date NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (2,'新闻2','军事','李四','2018-01-13','港媒称歼20开展首次实战训练'),(3,'新闻3','科技','王五','2018-01-12','英特尔再曝新漏洞，黑客可控制笔记本'),(5,'新闻666','历史','赵七','2018-01-06','毛泽东生前警卫：不孤独因有毛主席相伴'),(4,'新闻4','电影','马六','2018-01-09','2018内地好莱坞引进片前瞻'),(1,'新闻1','社会','张三','2018-01-14','2018春运售票进入高峰期');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zixun`
--

DROP TABLE IF EXISTS `zixun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zixun` (
  `ZX_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '咨询ID号',
  `ZX_name` varchar(80) NOT NULL COMMENT '咨询标题',
  `ZX_fenlei` varchar(80) NOT NULL COMMENT '资讯分类',
  `ZX_zuozhe` varchar(80) NOT NULL COMMENT '资讯作者',
  `gengxin_time` datetime NOT NULL DEFAULT '2016-01-01 01:01:01' COMMENT '更新时间',
  `liulan_cishu` int(11) NOT NULL COMMENT '浏览次数',
  `fabu_zhuangtai` varchar(50) NOT NULL COMMENT '发布状态',
  PRIMARY KEY (`ZX_id`)
) ENGINE=MyISAM AUTO_INCREMENT=100011 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zixun`
--

LOCK TABLES `zixun` WRITE;
/*!40000 ALTER TABLE `zixun` DISABLE KEYS */;
INSERT INTO `zixun` VALUES (10001,'PHP','理论','王超','2017-08-07 11:58:01',100,'草稿'),(10002,'C语言','理论','王超','2017-08-07 11:58:01',100,'草稿'),(10003,'JAVA语言','理论','王超','2017-08-07 11:58:01',100,'草稿'),(10004,'Mysql语言','理论','王超','2017-08-07 11:58:01',100,'草稿'),(10005,'html','理论','王超','2017-08-07 11:58:01',100,'草稿'),(10006,'spring','理论','王超','2017-08-07 11:58:01',100,'草稿'),(10007,'scence','理论','王超','2017-08-07 11:58:01',100,'草稿'),(10008,'computer','理论','王超','2017-08-07 11:58:01',100,'草稿'),(10009,'math','理论','王超','2017-08-07 11:58:01',100,'草稿'),(100010,'english','理论','王超','2017-08-07 11:58:01',100,'草稿'),(10011,'word','理论','王超','2017-08-07 11:58:01',100,'草稿'),(10012,'jsp','理论','王超','2017-08-07 11:58:01',100,'草稿'),(10013,'CSS','理论','王超','2017-08-07 11:58:01',100,'草稿');
/*!40000 ALTER TABLE `zixun` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-08  9:20:55
