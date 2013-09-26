-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 09 月 25 日 10:01
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `newspaperbook`
--
CREATE DATABASE IF NOT EXISTS `newspaperbook` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `newspaperbook`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AID` varchar(20) CHARACTER SET utf8 NOT NULL,
  `APASS` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`AID`, `APASS`) VALUES
('admin_1', '111111'),
('admin_2', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `BID` varchar(5) CHARACTER SET utf8 NOT NULL,
  `UID` varchar(20) CHARACTER SET utf8 NOT NULL,
  `NID` char(4) CHARACTER SET utf8 NOT NULL,
  `BCT` int(11) NOT NULL,
  `BMONTH` int(11) NOT NULL,
  PRIMARY KEY (`BID`),
  KEY `user-booking` (`UID`),
  KEY `newspaper-booking` (`NID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `booking`
--

INSERT INTO `booking` (`BID`, `UID`, `NID`, `BCT`, `BMONTH`) VALUES
('10001', '13459876582sz', 'N142', 5, 2),
('10002', 'dadaowushi', 'N177', 2, 2),
('10003', 'renduanqi1', 'N401', 3, 1),
('10004', 'chuangqianmingyue', 'N020', 6, 1),
('10005', 'jutouwangyue', 'N191', 1, 2),
('10006', '67danxinzhaohan', 'N038', 2, 1),
('10007', 'eeexiangtiange', 'N092', 1, 1),
('10008', 'fengchuijidanke9', 'N159', 1, 2),
('10009', 'yeshenhumeng', 'N327', 3, 1),
('10010', 'jietianheye', 'N379', 7, 2),
('10011', 'yingrihehua', 'N291', 4, 1),
('10012', 'xiaohecailou', 'N020', 2, 3),
('10013', 'zaoyou7ting', 'N259', 1, 1),
('10014', 'ba3yeyu', 'N379', 1, 2),
('10015', 'xunmeng123', 'N342', 2, 3),
('10016', 'xiamuguizhi', 'N246', 1, 1),
('10017', 'yaotiaoshunv11', 'N291', 3, 2),
('10018', 'danshilongcheng', 'N047', 1, 1),
('10019', 'qunianjinri', 'N310', 4, 3),
('10020', 'niannianyoujinri', 'N221', 2, 1),
('10021', 'xiaoniudegege', 'N139', 5, 2),
('10022', 'riluoxishan', 'N342', 3, 1),
('10023', 'shanchongshuifu', 'N142', 2, 3),
('10024', '2438essb', 'N230', 1, 1),
('10025', 'changtingwai', 'N092', 3, 2),
('10026', 'fangcao', 'N201', 1, 3),
('10027', 'zaitianyuanzuo', 'N177', 6, 2),
('10028', 'huimouyixiao', 'N246', 2, 2),
('10029', '6gongfendai', 'N191', 3, 1),
('10030', 'liangxiaoerbianri', 'N047', 1, 1),
('10031', 'xiyue', 'N401', 4, 1),
('10032', 'zhongyue', 'N159', 2, 2),
('10033', 'nanyue', 'N368', 6, 2),
('10034', 'quanjungeng', 'N020', 5, 3),
('10035', 'xichuyangguan', 'N327', 2, 2),
('10036', 'longlongtime', 'N139', 8, 1),
('10037', 'youmadehaizi', 'N310', 3, 3),
('10038', 'geianzhong', 'N368', 1, 1),
('10039', 'yibubuxugouzhe', 'N259', 4, 2),
('10040', 'jiegou0909', 'N392', 2, 3),
('10041', 'beihoukenengde', 'N237', 5, 1),
('10042', 'zaihuisedidaili', 'N201', 2, 2),
('10043', 'heishou', 'N237', 3, 3),
('10045', 'jintianweini', 'N230', 1, 1),
('10046', 'yingzhemeng', 'N038', 4, 2);

-- --------------------------------------------------------

--
-- 表的结构 `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `DNAME` varchar(20) CHARACTER SET utf8 NOT NULL,
  `DID` char(5) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`DID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `department`
--

INSERT INTO `department` (`DNAME`, `DID`) VALUES
('版本管理一部', 'BG401'),
('版本管理二部', 'BG402'),
('测试一部', 'CS301'),
('测试二部', 'CS302'),
('测试三部', 'CS303'),
('测试四部', 'CS304'),
('开发一部', 'KF001'),
('开发二部', 'KF002'),
('开发三部', 'KF003'),
('开发四部', 'KF004'),
('开发五部', 'KF005'),
('开发六部', 'KF006'),
('设计一部', 'SJ201'),
('设计二部', 'SJ202'),
('设计三部', 'SJ203'),
('设计四部', 'SJ204'),
('需求一部', 'XQ101'),
('需求二部', 'XQ102'),
('需求三部', 'XQ103'),
('运维一部', 'YW501'),
('运维二部', 'YW502'),
('运维三部', 'YW503'),
('运维四部', 'YW504'),
('运维五部', 'YW505'),
('运维六部', 'YW506');

-- --------------------------------------------------------

--
-- 表的结构 `newspaper`
--

CREATE TABLE IF NOT EXISTS `newspaper` (
  `NNAME` varchar(20) CHARACTER SET utf8 NOT NULL,
  `NID` char(4) CHARACTER SET utf8 NOT NULL,
  `NPS` varchar(20) CHARACTER SET utf8 NOT NULL,
  `NPD` int(11) NOT NULL,
  `NCT` int(11) NOT NULL,
  `NPR` varchar(30) CHARACTER SET utf8 NOT NULL,
  `NNUM` int(11) NOT NULL,
  `SID` char(4) CHARACTER SET utf8 NOT NULL,
  `AID` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`NID`),
  KEY `sort-newspaper` (`SID`),
  KEY `admin-newspaper` (`AID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `newspaper`
--

INSERT INTO `newspaper` (`NNAME`, `NID`, `NPS`, `NPD`, `NCT`, `NPR`, `NNUM`, `SID`, `AID`) VALUES
('广州日报', 'N020', '广州日报出版社', 1, 120, '广州市及周边地区时事新闻', 36, '01', 'admin_2'),
('人民日报', 'N038', '人民日报出版社', 1, 160, '国内时事新闻', 36, '01', 'admin_2'),
('娱乐周刊', 'N047', '娱乐出版社', 7, 70, '娱乐新闻', 36, '03', 'admin_2'),
('篮球周刊', 'N092', '篮球周刊出版社', 7, 90, '篮球相关新闻', 36, '04', 'admin_2'),
('美国新闻', 'N139', '外国新闻出版社', 7, 150, '美国政治新闻', 36, '07', 'admin_2'),
('股票周刊', 'N142', '经济出版社', 7, 88, '股票介绍及指导', 36, '02', 'admin_2'),
('健康与养生', 'N159', '健康生活出版社', 7, 92, '健康生活及养生知识', 36, '06', 'admin_2'),
('NBA日报', 'N177', '篮球周刊出版社', 1, 163, 'NBA球队相关新闻', 36, '04', 'admin_2'),
('足球周刊', 'N191', '体育出版社', 7, 90, '足球相关新闻', 36, '04', 'admin_2'),
('电影新闻', 'N201', '电影新闻出版社', 7, 85, '每周电影推荐', 36, '03', 'admin_2'),
('连续剧导读', 'N221', '电影新闻出版社', 7, 80, '每周电视剧推荐', 36, '03', 'admin_2'),
('动漫水晶', 'N230', '动漫出版社', 7, 77, '每周动漫推荐', 36, '03', 'admin_2'),
('基金实时知', 'N237', '经济出版社', 1, 162, '基金购买及相关指南', 36, '02', 'admin_2'),
('音乐抢先看', 'N246', '娱乐出版社', 1, 158, '各类音乐介绍及推荐', 36, '03', 'admin_2'),
('参考消息', 'N259', '人民出版社', 1, 160, '国内政治新闻', 36, '01', 'admin_2'),
('电脑报', 'N291', '电脑信息出版社', 1, 168, '电脑相关新闻', 36, '05', 'admin_2'),
('每日经济', 'N310', '经济出版社', 1, 183, '每日各种经济新闻', 36, '02', 'admin_2'),
('经济观察报', 'N327', '经济出版社', 1, 152, '经济新闻集锦', 36, '02', 'admin_2'),
('南方日报', 'N342', '南方日报出版社', 1, 124, '广东省及周边新闻', 36, '01', 'admin_2'),
('健康周报', 'N368', '健康周报出版社', 7, 78, '健康类新闻周刊', 36, '06', 'admin_2'),
('欧洲新闻', 'N379', '外国新闻出版社', 7, 88, '欧洲政治时事新闻', 36, '07', 'admin_2'),
('国际要闻', 'N392', '国际新闻出版社', 1, 138, '国际政治要闻', 36, '07', 'admin_2'),
('中国计算机报', 'N401', '计算机出版社', 7, 78, '计算机相关新闻', 36, '05', 'admin_2'),
('动漫周刊', 'N439', '动漫周刊出版社', 7, 180, '动漫相关', 62, '03', 'admin_2');

-- --------------------------------------------------------

--
-- 表的结构 `sort`
--

CREATE TABLE IF NOT EXISTS `sort` (
  `SNAME` varchar(20) CHARACTER SET utf8 NOT NULL,
  `SID` char(4) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `sort`
--

INSERT INTO `sort` (`SNAME`, `SID`) VALUES
('时事新闻', '01'),
('经济理财', '02'),
('娱乐新闻', '03'),
('体育新闻', '04'),
('科普益智', '05'),
('健康生活', '06'),
('国外新闻', '07');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `st_dep`
--
CREATE TABLE IF NOT EXISTS `st_dep` (
`部门名称` varchar(20)
,`订阅总数` decimal(32,0)
);
-- --------------------------------------------------------

--
-- 替换视图以便查看 `st_sort`
--
CREATE TABLE IF NOT EXISTS `st_sort` (
`报刊类别` varchar(20)
,`订阅总数` decimal(32,0)
);
-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UID` varchar(20) CHARACTER SET utf8 NOT NULL,
  `UPASS` varchar(20) CHARACTER SET utf8 NOT NULL,
  `UNAME` varchar(8) CHARACTER SET utf8 NOT NULL,
  `UIDNUM` char(18) CHARACTER SET utf8 NOT NULL,
  `UPHONE` varchar(12) CHARACTER SET utf8 NOT NULL,
  `UAD` varchar(30) CHARACTER SET utf8 NOT NULL,
  `DID` char(5) CHARACTER SET utf8 NOT NULL,
  `AID` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`UID`),
  KEY `department-user` (`DID`),
  KEY `admin-user` (`AID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`UID`, `UPASS`, `UNAME`, `UIDNUM`, `UPHONE`, `UAD`, `DID`, `AID`) VALUES
('1234jodo', 'kimiwa', '粱乐', '308291198211025349', '15672319087', '康永璐780号', 'SJ204', 'admin_1'),
('13459876582sz', 'sz123', '苏辙', '290879198210199807', '13184326329', '东山路809号', 'CS302', 'admin_1'),
('2438essb', 'quancun888', '谢婉莹', '179103198210094613', '15247856432', '永昌路740号', 'KF005', 'admin_1'),
('67danxinzhaohan', 'lingding', '陶渊明', '678901198010098721', '15605092410', '荣超花园五幢301', 'CS303', 'admin_1'),
('6gongfendai', '5yanse', '诸葛孔明', '871132198804098721', '13844487291', '中山路930号', 'SJ201', 'admin_1'),
('7xingsixiang', 'sancailiangyi', '梁羽生', '563919198503058380', '13834592319', '康才小区一幢630', 'XQ102', 'admin_1'),
('aaaa1111', '11112222', '谢文东', '110222198909102371', '15980909009', '康华路179号', 'CS303', 'admin_1'),
('ba3yeyu', 'zhangqouchi', '辛弃疾', '418937198912094382', '13959040278', '长江北路391号', 'KF002', 'admin_1'),
('baijuyizaici', 'nixiangzadi', '白居易', '562348198702022829', '13287295437', '龙泉小区五幢312', 'CS301', 'admin_1'),
('beihoukenengde', 'shulou98765', '刘禹锡', '543929198304185432', '13111147231', '荣超花园一幢472', 'YW505', 'admin_1'),
('biekengdie1', 'jiukengni1', '王勃', '101110198909086578', '18987135432', '中山路761号', 'BG402', 'admin_1'),
('blievthat', 'p1ople', '古龙', '081273199108267123', '15960308780', '安雅小区一幢430', 'XQ102', 'admin_1'),
('caojudonglixia', 'youranjiannanshan', '贾文和', '418979198512056759', '13731832894', '河江小区三幢430', 'YW501', 'admin_1'),
('changtingwai', 'gudaobian', '周公瑾', '462938198905034618', '13909034387', '安雅小区四幢402', 'KF005', 'admin_1'),
('chuangqianmingyue', 'yishidishang3', '孟郊', '345678198412192319', '13578629546', '龙泉小区三幢302', 'CS303', 'admin_1'),
('chunquhuahaizai', 'renlainiaobujing', '张子布', '419998198712094738', '15941997386', '永恒小区一幢210', 'SJ203', 'admin_1'),
('dadaowushi', 'tianyansijiu', '孟浩然', '123456198405138976', '13683479119', '永昌路793号', 'CS302', 'admin_1'),
('danshilongcheng', 'feijiangzai', '鲁迅', '873218198204154873', '13970202829', '荣超花园三幢305', 'KF003', 'admin_1'),
('dazhuxiaozhu', 'luoyupan', '卞之琳', '549281198405095793', '13920528564', '平安路740号', 'XQ103', 'admin_1'),
('dongyue', 'taishan3', '张天翼', '534879198307035639', '15836103013', '康才小区一幢520', 'YW501', 'admin_1'),
('eeexiangtiange', 'bishuiqingbo', '骆宾王', '789012198203057281', '15798310274', '龙珠花园四幢409', 'CS304', 'admin_1'),
('fangcao', 'biliantian', '林徽因', '413698198508024137', '13789050618', '莲花小区三幢103', 'KF006', 'admin_1'),
('fengchuijidanke9', 'paiqurenanle9', '李商隐', '012345198308124382', '13267098721', '荔湾路429号', 'CS304', 'admin_1'),
('geianzhong', 'kuitanzhe', '余光中', '348281198706258422', '15882094781', '康才小区三幢401', 'YW504', 'admin_1'),
('guimeicike', 'queer', '刘子阳', '319743198205285648', '15682023718', '和平路563号', 'XQ101', 'admin_1'),
('heishou', 'zhongyudengdao', '贾平凹', '478291198607194328', '13809884347', '永福路530号', 'YW506', 'admin_1'),
('huangdilaozi', 'liyuliyu', '李煜', '440980197904136543', '15898071789', '花园小区一幢603', 'BG401', 'admin_1'),
('huidanglingjued', 'yilanzhongshanx', '赵子龙', '987131198810061789', '13542308321', '永福路601号', 'SJ202', 'admin_1'),
('huimouyixiao', '100meisheng', '貂蝉', '346988198708034398', '15245428928', '安雅小区三幢313', 'KF006', 'admin_1'),
('jiegou0909', 'tuiqiaoshijian', '巴金', '631890198804285832', '13423497824', '平安路492号', 'YW504', 'admin_1'),
('jietianheye', 'wuqiongbi04', '屈原', '444190198309037291', '18964824568', '安雅小区三幢437', 'KF001', 'admin_1'),
('jintianweini', 'juniyipou', '肖复兴', '731984198805092410', '15382671253', '龙珠花园三幢602', 'YW506', 'admin_1'),
('jiuxiaolinghu', 'xiaowei', '甘兴霸', '319091198709083289', '13741498319', '建设路830号', 'SJ204', 'admin_1'),
('jodo111', 'omaiwa', '徐林伟', '112221199012037689', '13123445632', '长江路101号', 'SJ204', 'admin_1'),
('jutouwangyue', 'ditousixiang', '贾岛', '456789198810036289', '15920841846', '北京路673号', 'CS303', 'admin_1'),
('lalayoyo12', '1234yoyo', '高适', '567890198904027898', '15687158721', '永恒小区一幢210', 'CS301', 'admin_1'),
('liangxiaoerbianri', 'kongzi', '刘玄德', '894221198410044798', '15204136543', '北京路782号', 'SJ201', 'admin_1'),
('lingboweibu', 'luowashengchen', '甄宓', '648930198304245638', '18985024137', '花园小区二幢318', 'SJ204', 'admin_1'),
('liuyonggege11', '11223344', '刘永', '989798198809083456', '13589464478', '北京路458号', 'BG402', 'admin_1'),
('longlongtime', 'ago3300987', '林语堂', '241890198804197319', '15923416362', '东山路104号', 'YW503', 'admin_1'),
('luoshenfu', 'qingyunbiyue', '孙尚香', '129882198912094781', '15342038972', '永恒小区三幢104', 'SJ202', 'admin_1'),
('nanyue', 'hengshan333', '马孟起', '746911198512084184', '13208799807', '莲花小区三幢402', 'YW502', 'admin_1'),
('niannianyoujinri', 'suisuiyoujinzhao', '艾青', '834791198407184638', '15854185432', '永恒小区四幢106', 'KF004', 'admin_1'),
('nvhanzi909', '9090909', '李清照', '321908198603087809', '13908934556', '中山路862号', 'BG401', 'admin_1'),
('quanjungeng', 'jinyibeijiu', '丁玲', '843287199010246329', '15910295634', '文华小区一幢316', 'YW502', 'admin_1'),
('qunianjinri', 'bujianbusan', '顾城', '438798198207194318', '13754928193', '建设路401号', 'KF003', 'admin_1'),
('renduanqi1', 'liuyishenglu', '王维', '234567198212163628', '13478057281', '幸福小区二幢630', 'CS302', 'admin_1'),
('riluoxishan', 'hongxiafei', '戴望舒', '713498198310274613', '13803563965', '龙泉小区三幢201', 'KF004', 'admin_1'),
('sansus987', 'susans0123', '苏洵', '432156198512038972', '13694382794', '长江北路139号', 'BG402', 'admin_1'),
('shanchongshuifu', 'yiwulu', '郭沫若', '341798198209041687', '15982052952', '平安路209号', 'KF005', 'admin_1'),
('shanheposui', 'fengpiaoxu', '张文远', '321891198611084138', '18941897919', '莲花小区五幢720', 'SJ203', 'admin_1'),
('shenshifuchen', 'yudaping', '黄汉升', '872181198503194371', '13212094382', '龙珠花园一幢493', 'SJ203', 'admin_1'),
('shudaonan', 'nanyushang7t', '关云长', '413899197903081279', '15864884119', '中山路491号', 'SJ202', 'admin_1'),
('tangchao123', 'libaijun', '李白', '110889198911147231', '13242089876', '和平路742号', 'BG401', 'admin_1'),
('traditional', 'chinesedct', '金庸', '428841197604229421', '13290416877', '龙泉小区二幢214', 'XQ102', 'admin_1'),
('xiamuguizhi', 'niangkou33', '范仲淹', '413647198202093718', '15756389819', '幸福小区二幢709', 'KF002', 'admin_1'),
('xiangmoshizhe', 'jinggongzhu', '陆伯言', '657921198310275672', '13241389919', '永昌路899号', 'SJ204', 'admin_1'),
('xiaohecailou', 'jianjianjiao2', '贺知章', '320134198305179032', '15663180198', '花园小区二幢209', 'KF001', 'admin_1'),
('xiaoniudegege', 'daizhetazhuoniq', '闻一多', '469287197909034387', '13212094782', '幸福小区二幢305', 'KF004', 'admin_1'),
('xichuyangguan', 'wuguren', '田汉', '943271198603089432', '13224189019', '安雅小区三幢401', 'YW503', 'admin_1'),
('xiyue', 'huashan3', '何其芳', '563898198403098432', '15112194372', '永恒小区四幢341', 'YW501', 'admin_1'),
('xuanbingci', 'simazhongdajun', '司马仲达', '786918198406295467', '15708034398', '荔湾路309号', 'XQ101', 'admin_1'),
('xunmeng123', 'chengchanggao233', '李贺', '318973198610301982', '13856398380', '东山路830号', 'KF002', 'admin_1'),
('yaotiaoshunv11', 'junzihaoqiu09', '曾巩', '312897199012194372', '13607096268', '文华小区一幢420', 'KF003', 'admin_1'),
('yeshenhumeng', 'shaonianshi2', '苏轼', '123456198212197824', '15531027672', '中山路591号', 'CS304', 'admin_1'),
('yibubuxugouzhe', 'zhecehuahaode', '曹禺', '414983198903195429', '13805138976', '建设路720号', 'YW504', 'admin_1'),
('yingrihehua', 'bieyanghong333', '温庭筠', '562391199007096268', '13250808715', '和平路247号', 'KF001', 'admin_1'),
('yingzhemeng', 'nizhetong000', '舒庆春', '634231198508038715', '13701234519', '永昌路893号', 'YW506', 'admin_1'),
('yinyangshi', 'tianlangwushi', '周幼平', '539778198812094782', '13606258422', '龙泉小区一幢104', 'XQ101', 'admin_1'),
('yipianyipian', 'youyipian', '韩夏生', '219220198710083672', '15819848920', '锦龙小区二幢208', 'CS302', 'admin_1'),
('youbaopipa', 'banzhemian', '夏衍', '279413198210295634', '15330517903', '荔湾路530号', 'XQ103', 'admin_1'),
('youmadehaizi', 'xianghuaibao', '沈从文', '454289198309145428', '13617910613', '幸福小区二幢314', 'YW503', 'admin_1'),
('yoyoqiekenao', 'qiekenao123', '陆游', '998877199002089876', '13710054372', '中二横路430号', 'CS301', 'admin_1'),
('yuanmingsansheng', 'leizhanshan', '张恨水', '574892198305218542', '15432189119', '永福路743号', 'XQ103', 'admin_1'),
('zaihuisedidaili', 'youzoude', '张爱玲', '501589198205295872', '15810116578', '河江小区五幢309', 'YW505', 'admin_1'),
('zaitianyuanzuo', 'biyiniao', '孙仲谋', '312789198603074138', '13445676289', '文华小区一幢503', 'KF006', 'admin_1'),
('zaoyou7ting', 'lishangtou898', '欧阳修', '423879197210308321', '13758305218', '康才小区三幢109', 'KF001', 'admin_1'),
('zhongyue', 'songshan3', '朱自清', '098714198309088437', '13989307413', '荔湾路843号', 'YW502', 'admin_1'),
('zhougongtubu', 'tianxiaguixin', '吕奉先', '871311198810034372', '13943879819', '长江北路562号', 'SJ201', 'admin_1');

-- --------------------------------------------------------

--
-- 视图结构 `st_dep`
--
DROP TABLE IF EXISTS `st_dep`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_dep` AS select `department`.`DNAME` AS `部门名称`,sum(`booking`.`BCT`) AS `订阅总数` from ((`department` join `user` on((`department`.`DID` = `user`.`DID`))) join `booking` on((`user`.`UID` = `booking`.`UID`))) group by `department`.`DNAME`;

-- --------------------------------------------------------

--
-- 视图结构 `st_sort`
--
DROP TABLE IF EXISTS `st_sort`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_sort` AS select `sort`.`SNAME` AS `报刊类别`,sum(`booking`.`BCT`) AS `订阅总数` from ((`newspaper` join `sort` on((`newspaper`.`SID` = `sort`.`SID`))) join `booking` on((`newspaper`.`NID` = `booking`.`NID`))) group by `sort`.`SNAME`;

--
-- 限制导出的表
--

--
-- 限制表 `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `newspaper-booking` FOREIGN KEY (`NID`) REFERENCES `newspaper` (`NID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user-booking` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `newspaper`
--
ALTER TABLE `newspaper`
  ADD CONSTRAINT `admin-newspaper` FOREIGN KEY (`AID`) REFERENCES `admin` (`AID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sort-newspaper` FOREIGN KEY (`SID`) REFERENCES `sort` (`SID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `admin-user` FOREIGN KEY (`AID`) REFERENCES `admin` (`AID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `department-user` FOREIGN KEY (`DID`) REFERENCES `department` (`DID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
