/*
 Navicat Premium Data Transfer

 Source Server         : phpstudy
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : homework

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 10/12/2024 21:00:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for discussion
-- ----------------------------
DROP TABLE IF EXISTS `discussion`;
CREATE TABLE `discussion`  (
  `Did` int(11) NOT NULL AUTO_INCREMENT,
  `Dtext` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Ddate` date NULL DEFAULT NULL,
  PRIMARY KEY (`Did`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of discussion
-- ----------------------------
INSERT INTO `discussion` VALUES (1, '测试一下', '2024-12-08');
INSERT INTO `discussion` VALUES (2, '测试两下QAQ', '2024-12-08');

-- ----------------------------
-- Table structure for domains
-- ----------------------------
DROP TABLE IF EXISTS `domains`;
CREATE TABLE `domains`  (
  `DomainID` int(11) NOT NULL,
  `DomainName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Tech` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Application` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `References` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`DomainID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of domains
-- ----------------------------
INSERT INTO `domains` VALUES (1, '机器学习与深度学习', '机器学习是一种人工智能技术，它使计算机能够从数据中学习并改进其性能，而无需明确编程。深度学习是机器学习的一个分支，它使用深度神经网络进行复杂的模式识别。', '图像识别、自然语言处理、推荐系统', '谷歌翻译、亚马逊推荐系统、自动驾驶汽车', 'https://en.wikipedia.org/wiki/Machine_learning');
INSERT INTO `domains` VALUES (2, '自然语言处理', '自然语言处理（NLP）是计算机科学、人工智能和语言学的交叉领域，旨在使计算机能够理解、解释和生成人类语言。', '文本分类、情感分析、机器翻译', '智能客服系统、情感分析工具、谷歌翻译', 'https://en.wikipedia.org/wiki/Natural_language_processing');
INSERT INTO `domains` VALUES (3, '计算机视觉', '计算机视觉是人工智能的一个分支，它使计算机能够从图像或视频中获取和理解视觉信息。', '目标检测、图像分割、人脸识别', '人脸识别系统、自动驾驶系统、安防监控系统', 'https://en.wikipedia.org/wiki/Computer_vision');
INSERT INTO `domains` VALUES (4, '强化学习', '强化学习是一种机器学习方法，它使智能体能够在环境中通过与环境的交互来学习最优策略。', '机器人控制、游戏智能', 'AlphaGo、自动驾驶系统、机器人控制', 'https://en.wikipedia.org/wiki/Reinforcement_learning');
INSERT INTO `domains` VALUES (5, '数据挖掘', '数据挖掘是从大量数据中提取有用信息的过程，它使用统计和机器学习技术来发现模式和知识。', '数据预处理、特征选择、模式挖掘', '客户关系管理（CRM）系统、市场篮分析、欺诈检测系统', 'https://en.wikipedia.org/wiki/Data_mining');
INSERT INTO `domains` VALUES (6, '专家系统', '专家系统是一种人工智能程序，它使用知识库和推理机制来模拟人类专家的决策过程。', '知识库、推理引擎', '医疗诊断系统、法律咨询系统', 'https://en.wikipedia.org/wiki/Expert_system');
INSERT INTO `domains` VALUES (7, '机器人技术', '机器人技术涉及设计和制造能够执行各种任务的机器人，包括自主导航和交互。', '传感器融合、路径规划、人机交互', '工业机器人、服务机器人、医疗机器人', 'https://en.wikipedia.org/wiki/Robotics');
INSERT INTO `domains` VALUES (8, '语音识别', '语音识别技术使计算机能够识别和理解人类语音，将其转换为文本或命令。', '声学模型、语言模型、端到端模型', '智能语音助手、语音转文字系统', 'https://en.wikipedia.org/wiki/Speech_recognition');
INSERT INTO `domains` VALUES (9, '情感计算', '情感计算旨在使计算机能够识别、理解和模拟人类情感，用于人机交互和情感智能。', '面部表情识别、语音情感分析', '情感识别系统、情感智能助手', 'https://en.wikipedia.org/wiki/Affective_computing');
INSERT INTO `domains` VALUES (10, '知识图谱', '知识图谱是一种用于表示和存储知识的结构化数据模型，用于支持智能问答和推荐系统。', '实体识别、关系抽取、知识推理', '智能问答系统、推荐系统', 'https://en.wikipedia.org/wiki/Knowledge_graph');

-- ----------------------------
-- Table structure for history
-- ----------------------------
DROP TABLE IF EXISTS `history`;
CREATE TABLE `history`  (
  `id` int(11) NOT NULL,
  `year` int(11) NULL DEFAULT NULL,
  `event_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `event_description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `technology_impact` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `references` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of history
-- ----------------------------
INSERT INTO `history` VALUES (1, 1950, '图灵测试（Turing Test）', '艾伦·图灵在其论文《计算机与智能》中提出了“图灵测试”，用于判定机器是否能够展现出与人类相似的智能行为。', '图灵测试提出了机器是否能“思考”的标准，成为人工智能哲学与伦理讨论的重要起点，并深刻影响了计算机科学和人工智能的定义。', 'https://en.wikipedia.org/wiki/Turing_test');
INSERT INTO `history` VALUES (2, 1956, '达特茅斯会议（Dartmouth Conference）', '由约翰·麦卡锡等人召开的会议首次提出“人工智能”这一术语，标志着人工智能学科的正式诞生。', '确定了人工智能作为学科的方向，极大促进了后续的研究。会议为人工智能的早期发展奠定了基础，并定义了其核心目标。', 'https://en.wikipedia.org/wiki/Dartmouth_Conference');
INSERT INTO `history` VALUES (3, 1966, 'ELIZA问答程序（ELIZA Program）', '约瑟夫·韦森鲍姆开发的ELIZA程序通过简单的规则模拟心理治疗师与人类进行对话，是早期的自然语言处理程序。', '展示了计算机可以处理自然语言并与人类进行有限的对话，成为聊天机器人和后来的自然语言处理技术的前驱。', 'https://en.wikipedia.org/wiki/ELIZA');
INSERT INTO `history` VALUES (4, 1972, 'SHRDLU程序（SHRDLU Program）', '由特里·温格尔于1972年开发的SHRDLU能够理解自然语言指令并在一个简单的虚拟世界中执行命令。', 'SHRDLU是早期的自然语言理解系统之一，推动了人机交互和计算机理解语言的研究，成为人工智能发展的一个重要里程碑。', 'https://en.wikipedia.org/wiki/SHRDLU');
INSERT INTO `history` VALUES (5, 1980, '专家系统的兴起（Rise of Expert Systems）', '1980年代，专家系统被广泛应用于医疗、金融等领域。MYCIN等专家系统能够模拟专业决策过程。', '专家系统的应用带动了人工智能从理论研究走向实际应用，并且推动了知识表示、推理系统的研究。', 'https://en.wikipedia.org/wiki/Expert_system');
INSERT INTO `history` VALUES (6, 1997, '深蓝击败卡斯帕罗夫（Deep Blue Defeats Kasparov）', 'IBM的深蓝计算机击败了国际象棋世界冠军卡斯帕罗夫，展示了AI在复杂推理和决策中的能力。', '深蓝的胜利标志着人工智能在博弈论和推理能力上的突破，提升了人们对计算机的认知和信任。', 'https://en.wikipedia.org/wiki/Deep_Blue_(chess_computer)');
INSERT INTO `history` VALUES (7, 2006, '深度学习的复兴（Deep Learning Revival）', 'Geoffrey Hinton等学者提出了深度神经网络的训练方法，重新激活了深度学习的研究。', '深度学习的复兴使得神经网络能够处理大量数据，推动了计算机视觉、语音识别等领域的快速进展。', 'https://en.wikipedia.org/wiki/Deep_learning');
INSERT INTO `history` VALUES (8, 2012, 'AlexNet图像识别突破（AlexNet Breakthrough）', '由Alex Krizhevsky等开发的AlexNet在ImageNet图像识别竞赛中取得了突破性进展，采用深度卷积神经网络（CNN）。', 'AlexNet推动了计算机视觉领域的革命，深度学习方法在图像识别中的应用取得了前所未有的成功，极大提升了AI技术的应用价值。', 'https://en.wikipedia.org/wiki/AlexNet');
INSERT INTO `history` VALUES (9, 2014, 'AlphaGo击败李世石（AlphaGo Defeats Lee Sedol）', 'Google DeepMind开发的AlphaGo击败了围棋世界冠军李世石，展现了强化学习和深度神经网络的巨大潜力。', 'AlphaGo的胜利不仅证明了AI在复杂决策和博弈中的能力，也为强化学习提供了实战案例，推动了此领域的广泛研究。', 'https://en.wikipedia.org/wiki/AlphaGo');
INSERT INTO `history` VALUES (10, 2016, 'GAN（生成对抗网络）提出', 'Ian Goodfellow等人提出生成对抗网络（GAN），这一创新算法通过生成器与判别器之间的博弈来生成高质量数据。', 'GAN的提出推动了图像生成、语音合成等多个领域的研究，为创造性人工智能应用打开了新的大门。', 'https://en.wikipedia.org/wiki/Generative_adversarial_network');
INSERT INTO `history` VALUES (11, 2018, 'BERT发布（BERT Release）', 'Google发布了BERT（Bidirectional Encoder Representations from Transformers），改变了NLP领域的研究方向。', 'BERT的双向编码器表示方法提升了自然语言理解能力，极大地提高了机器翻译、文本生成等NLP任务的表现。', 'https://en.wikipedia.org/wiki/BERT_(language_model)');
INSERT INTO `history` VALUES (12, 2019, 'GPT-2发布（GPT-2 Release）', 'OpenAI发布了GPT-2，一个基于Transformer的自然语言生成模型，展示了前所未有的语言生成能力。', 'GPT-2在生成流畅的自然语言文本方面达到了新高，推动了大规模预训练语言模型的广泛应用。', 'https://en.wikipedia.org/wiki/GPT-2');
INSERT INTO `history` VALUES (13, 2020, 'GPT-3发布（GPT-3 Release）', 'OpenAI发布了GPT-3，这是迄今为止规模最大、最强大的预训练语言模型，包含1750亿个参数。', 'GPT-3进一步提升了自然语言理解和生成的能力，并激发了关于AI伦理、创作和安全性的讨论。', 'https://en.wikipedia.org/wiki/GPT-3');
INSERT INTO `history` VALUES (14, 2021, 'AlphaFold2解决蛋白质折叠问题', 'DeepMind的AlphaFold2成功解决了生物学中的“蛋白质折叠问题”，该问题困扰科学家超过50年。', 'AlphaFold2在生物学和药物研发方面具有革命性意义，推动了生物科学领域的快速进展。', 'https://www.deepmind.com/research/case-studies/alphafold');
INSERT INTO `history` VALUES (15, 2022, 'DALL·E发布（DALL·E Release）', 'OpenAI发布了DALL·E，一个图像生成模型，能够根据自然语言描述生成全新图像。', 'DALL·E展示了AI在创意和艺术领域的潜力，能够基于文字描述生成原创的图像内容，推动了AI艺术创作的热潮。', 'https://en.wikipedia.org/wiki/DALL%E2%80%99E');

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log`  (
  `Logid` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Uname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Logtime` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`Logid`) USING BTREE,
  INDEX `name`(`Uname`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members`  (
  `Mid` int(11) NOT NULL,
  `Mname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Mnumber` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Mgroup` int(11) NULL DEFAULT NULL,
  `Mlink` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Mprofession` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Mid`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES (0, '石家伊', '2211532', 0, 'https://github.com/ya-yaa/NetDatabase.git', '信息安全');

-- ----------------------------
-- Table structure for people
-- ----------------------------
DROP TABLE IF EXISTS `people`;
CREATE TABLE `people`  (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `birth_and_death_year` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nationality` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `field` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `contributions` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `references` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of people
-- ----------------------------
INSERT INTO `people` VALUES (1, '艾伦·图灵 (Alan Turing)', '1912 - 1954', '英国', '计算机科学、人工智能、数学', '提出了“图灵测试”，被誉为现代计算机科学的奠基人之一。图灵的工作为人工智能的哲学研究提供了基础，并奠定了计算机科学的根基。', 'https://en.wikipedia.org/wiki/Alan_Turing');
INSERT INTO `people` VALUES (2, '约翰·麦卡锡 (John McCarthy)', '1927 - 2011', '美国', '人工智能、计算机科学、逻辑编程', '提出了“人工智能”这一术语，是LISP编程语言的创始人之一，推动了AI的理论和应用研究。提出了“通用人工智能”的概念，并为机器学习和推理系统的研究做出了贡献。', 'https://en.wikipedia.org/wiki/John_McCarthy');
INSERT INTO `people` VALUES (3, '马文·明斯基 (Marvin Minsky)', '1927 - 2016', '美国', '人工智能、认知科学、机器人学', '共同创立了人工智能实验室，提出了“社会心智”理论，强调人类思维是多个简单模块的组合。他对人工智能的哲学和心理学视角产生了深远影响。', 'https://en.wikipedia.org/wiki/Marvin_Minsky');
INSERT INTO `people` VALUES (4, '奈瑟尔 (Nathaniel Rochester)', '1922 - 2001', '美国', '人工智能、计算机科学', '作为达特茅斯会议的组织者之一，他帮助创建了人工智能这一学科，研究了计算机如何模拟智能行为。他还是IBM深蓝的早期开发者之一。', 'https://en.wikipedia.org/wiki/Nathaniel_Rochester');
INSERT INTO `people` VALUES (5, '约瑟夫·韦森鲍姆 (Joseph Weizenbaum)', '1923 - 2008', '德国/美国', '人工智能、计算机科学、社会学', '开发了ELIZA程序，提出了人工智能伦理问题，对人工智能的社会影响进行深入思考，特别是机器是否能模拟人类情感的讨论。', 'https://en.wikipedia.org/wiki/Joseph_Weizenbaum');
INSERT INTO `people` VALUES (6, '杰弗里·辛顿 (Geoffrey Hinton)', '1947 - 至今', '英国/加拿大', '机器学习、深度学习、神经网络', '被誉为“深度学习之父”，提出了反向传播算法，并成功应用深度神经网络解决了多个AI难题。他的工作为深度学习的复兴奠定了基础。', 'https://en.wikipedia.org/wiki/Geoffrey_Hinton');
INSERT INTO `people` VALUES (7, '扬·勒昆 (Yann LeCun)', '1960 - 至今', '法国', '机器学习、深度学习、计算机视觉', '提出了卷积神经网络（CNN），广泛应用于图像识别、视频分析等领域。是深度学习领域的先锋之一。', 'https://en.wikipedia.org/wiki/Yann_LeCun');
INSERT INTO `people` VALUES (8, '约书亚·本吉奥 (Yoshua Bengio)', '1964 - 至今', '加拿大', '机器学习、深度学习、神经网络', '提出了深度学习中的多层网络结构，与辛顿和勒昆一起推动了深度学习的复兴，并解决了多个深度神经网络的优化问题。', 'https://en.wikipedia.org/wiki/Yoshua_Bengio');
INSERT INTO `people` VALUES (9, '斯图尔特·罗素 (Stuart Russell)', '1962 - 至今', '英国/美国', '人工智能、伦理学、机器学习', '与彼得·诺维格合著《人工智能：一种现代方法》，该书成为AI领域的经典教材。他对AI的伦理学和安全性进行了深入的探讨。', 'https://en.wikipedia.org/wiki/Stuart_Russell');
INSERT INTO `people` VALUES (10, '理查德·萨尔斯基 (Richard S. Sutton)', '1948 - 至今', '加拿大/美国', '强化学习、机器学习', '被认为是强化学习领域的开创者之一，提出了强化学习中的许多重要理论和算法，包括价值迭代和Q学习等。', 'https://en.wikipedia.org/wiki/Richard_Sutton');
INSERT INTO `people` VALUES (11, '伊恩·古德费洛 (Ian Goodfellow)', '1985 - 至今', '美国', '机器学习、生成对抗网络（GAN）', '提出了生成对抗网络（GAN）这一突破性算法，极大推动了深度学习在图像生成和合成数据方面的应用。', 'https://en.wikipedia.org/wiki/Ian_Goodfellow');
INSERT INTO `people` VALUES (12, '李飞飞 (Fei-Fei Li)', '1976 - 至今', '中国/美国', '计算机视觉、人工智能', '在计算机视觉领域做出了杰出的贡献，特别是在图像识别、物体检测和深度学习应用方面。她也是ImageNet项目的创建者之一。', 'https://en.wikipedia.org/wiki/Fei-Fei_Li');
INSERT INTO `people` VALUES (13, '托马斯·米特尔霍尔兹 (Thomas Mitchell)', '1947 - 至今', '美国', '机器学习', '他是机器学习领域的开创者之一，提出了机器学习的“学习算法”理论，并撰写了广受欢迎的教材《机器学习》。', 'https://en.wikipedia.org/wiki/Thomas_M._Mitchell');
INSERT INTO `people` VALUES (14, '帕特里夏·查尔斯 (Patricia Churchland)', '1943 - 至今', '加拿大/美国', '神经科学、人工智能、哲学', '她是神经科学和哲学领域的先驱，研究了神经网络如何解释认知与意识，并在人工智能与伦理学方面提出了深刻的见解。', 'https://en.wikipedia.org/wiki/Patricia_Churchland');
INSERT INTO `people` VALUES (15, '尼古拉斯·卡尔 (Nicholas Carr)', '1959 - 至今', '美国', '技术哲学、人工智能、信息技术', '在人工智能与社会的关系方面做出了重要贡献，他的著作《浅薄：互联网如何影响我们的思维》对AI影响人类思维提出了重要警示。', 'https://en.wikipedia.org/wiki/Nicholas_Carr');

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project`  (
  `ID` int(11) NOT NULL,
  `ProjectName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Background` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Goal` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Tech` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Effect` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES (1, 'Google DeepMind 的 AlphaFold 项目', '蛋白质是生命的基本组成部分，了解它们的三维结构对于理解生物学过程和开发新药物至关重要。然而，传统的实验方法（如X射线晶体学）耗时且成本高昂。', '通过AI预测蛋白质的三维结构，加速药物研发和基础科学研究。', '深度学习：使用神经网络模型（如卷积神经网络CNN和Transformer架构）来处理氨基酸序列并预测蛋白质结构。\r\n大规模数据集：利用公开的蛋白质数据库（如PDB）进行训练。\r\n高性能计算：使用GPU集群进行模型训练和推理。', 'AlphaFold 2 在2020年的CASP竞赛中取得了突破性进展，能够以接近实验精度的准确度预测蛋白质结构，该技术已应用于多个研究领域，帮助科学家更好地理解疾病机制，并为药物设计提供重要支持。');
INSERT INTO `project` VALUES (2, '特斯拉的自动驾驶系统（Autopilot）', '随着城市交通拥堵和交通事故的增加，自动驾驶技术被视为提高交通安全性和效率的关键解决方案。', '开发一套高度自动化的驾驶系统，能够在各种道路条件下安全地驾驶车辆。', '计算机视觉：使用摄像头、雷达和超声波传感器捕捉周围环境信息，识别道路、行人、交通标志等。\r\n深度学习：通过卷积神经网络（CNN）和循环神经网络（RNN）处理传感器数据，进行物体检测、跟踪和分类。\r\n强化学习：优化驾驶策略，使车辆能够在复杂环境中做出最佳决策。\r\n高精地图：结合GPS和高精地图数据，实现精确的路径规划和导航。', '特斯拉的Autopilot系统已经能够在高速公路和城市道路上实现部分自动化驾驶，包括自动变道、跟车和停车等功能，该公司正在逐步推进完全自动驾驶（FSD）的研发，目标是在未来几年内实现无需人类干预的全自动驾驶。');
INSERT INTO `project` VALUES (3, ' 阿里巴巴的“城市大脑”项目', '随着城市化进程的加快，城市管理面临诸多挑战，如交通拥堵、环境污染和资源浪费等。智能化的城市管理系统成为解决这些问题的关键。', '通过AI技术优化城市资源分配，提升城市管理效率，改善居民生活质量。', '大数据分析：整合来自交通、能源、环境等多个部门的数据，进行实时监控和分析。\r\n机器学习：利用监督学习和无监督学习算法，预测交通流量、电力需求等，优化资源配置。\r\n物联网（IoT）：通过传感器网络收集城市各个角落的数据，如空气质量、温度、湿度等。\r\n云计算：依托阿里云平台，提供强大的计算能力和存储支持，确保系统的高效运行。', '“城市大脑”已经在杭州等多个城市成功部署，显著减少了交通拥堵，提高了公共交通的准点率，该系统还帮助城市管理者更好地应对突发事件，如火灾、洪水等，提升了应急响应速度。');
INSERT INTO `project` VALUES (4, 'IBM Watson for Oncology 项目', '癌症治疗是一个复杂的过程，涉及多种治疗方案的选择，医生需要综合考虑患者的病情、基因特征和治疗历史等因素。', '开发一个基于AI的辅助诊断系统，帮助医生制定个性化的癌症治疗方案。\r\n', '自然语言处理（NLP）：解析医学文献、临床指南和患者病历，提取关键信息。\r\n机器学习：分析大量的病例数据，识别不同治疗方案的效果和风险。\r\n知识图谱：构建癌症相关的知识图谱，将分散的知识点连接起来，形成完整的治疗建议。\r\n用户界面：提供直观的可视化工具，帮助医生快速理解和应用AI生成的治疗建议。', 'IBM Watson for Oncology\r\n已经在全球多家医院投入使用，帮助医生更快速、准确地制定治疗方案，尤其在复杂病例中表现出色，该系统还不断学习新的研究成果和临床数据，持续改进其推荐的准确性。');
INSERT INTO `project` VALUES (5, '微软的 Seeing AI 项目', '视力障碍者在日常生活中面临许多挑战，如阅读文本、识别物体和导航等。现有的辅助技术往往功能有限，无法满足多样化的需求。', '开发一款智能视觉辅助应用，帮助视力障碍者更好地感知和理解周围环境。', '计算机视觉：使用摄像头捕捉图像，识别文字、物体、人脸和场景。\r\n自然语言处理（NLP）：将识别结果转换为语音描述，帮助用户理解图像内容。\r\n深度学习：通过神经网络模型提高识别的准确性和鲁棒性。\r\n移动应用开发：基于iOS平台开发用户友好的应用程序，支持多种功能模块。', 'Seeing AI 已经成为视力障碍者的得力助手，帮助他们独立完成许多日常任务，如阅读书籍、识别货币、导航等，该应用还不断更新，增加了更多实用功能，如购物助手、社交互动等，极大地提升了用户的自主性和生活质量。');
INSERT INTO `project` VALUES (6, 'Deepfake 检测与防范项目', 'Deepfake 技术可以生成逼真的虚假视频，用于伪造身份、传播谣言等，给社会带来了严重的安全隐患。', '开发一套高效的Deepfake检测系统，保护公众免受虚假信息的侵害。', '深度学习：使用卷积神经网络（CNN）和生成对抗网络（GAN）分析视频帧中的细微差异，识别Deepfake视频。\r\n特征提取：提取面部表情、眨眼频率、皮肤纹理等特征，作为判断依据。\r\n大数据训练：利用大量真实和伪造的视频数据进行模型训练，提高检测的准确性和泛化能力。\r\n实时监测：部署在社交媒体平台和新闻网站上，实时监测上传的视频内容，及时标记可疑视频。', '该系统已经在多个平台上投入使用，有效阻止了大量Deepfake视频的传播，保护了公众利益，研究人员还在不断改进算法，应对日益复杂的Deepfake生成技术，确保检测系统的长期有效性。');
INSERT INTO `project` VALUES (7, 'Amazon 的 Alexa 智能语音助手', '随着智能家居设备的普及，用户对便捷、自然的交互方式需求增加。传统的手动操作和遥控器逐渐被语音控制取代。', '开发一款智能语音助手，能够理解用户的自然语言指令，并执行相应的任务，如播放音乐、查询信息、控制家电等。', '自动语音识别（ASR）：将用户的语音输入转换为文本，支持多种语言和方言。\r\n自然语言处理（NLP）：解析文本内容，理解用户的意图，并生成合适的响应。\r\n对话管理：通过对话状态跟踪和上下文理解，实现多轮对话，提供更自然的交互体验。\r\n技能插件（Skills）：允许第三方开发者为Alexa添加新的功能，如订餐、打车、购物等。\r\n云计算：依托AWS云平台，提供强大的计算能力和存储支持，确保系统的稳定性和扩展性。', 'Alexa 已经成为全球最受欢迎的智能语音助手之一，广泛应用于亚马逊的Echo系列智能音箱和其他智能家居设备，该系统不断学习用户的行为和偏好，优化其推荐和服务，提升了用户体验。');
INSERT INTO `project` VALUES (8, ' IBM Watson Assistant for Customer Service', '企业在提供客户服务时，面临着成本高、效率低的问题。传统的客服方式依赖大量人工，难以满足24/7的服务需求。', '开发一款基于AI的智能客服系统，能够自动处理常见的客户咨询，减少人工客服的工作量，提升服务效率。', '自然语言处理（NLP）：解析客户的文字或语音输入，理解其问题并生成合适的回答。\r\n对话管理：通过对话状态跟踪和上下文理解，实现多轮对话，处理复杂的客户请求。\r\n知识库集成：与企业的FAQ、产品手册等知识库无缝集成，确保答案的准确性和一致性。\r\n情感分析：分析客户的语气和情感，及时识别不满或紧急情况，转接至人工客服。\r\n机器学习：通过不断学习新的客户问题和反馈，优化回答的质量和覆盖范围。', 'IBM Watson Assistant 已经在全球多个行业的企业中投入使用，显著减少了人工客服的工作量，提升了客户满意度，该系统还支持多语言和跨平台部署，帮助企业更好地服务于国际市场。');
INSERT INTO `project` VALUES (9, 'Facebook 的 Fairness Flow 项目', '随着AI系统的广泛应用，公平性和偏见问题引起了广泛关注。如果AI模型存在偏见，可能会导致不公平的决策，影响特定群体的利益。', '开发一套工具，帮助开发者检测和消除AI模型中的偏见，确保其公平性和透明度。', '公平性评估指标：定义一系列评估指标，如均等机会差异、预测偏差等，量化模型的公平性。\r\n数据预处理：通过重采样、特征选择等方法，平衡训练数据中的不同群体，减少偏见的影响。\r\n模型调试：使用可视化工具，帮助开发者理解模型的决策过程，识别潜在的偏见来源。\r\n后处理调整：在模型输出阶段进行调整，确保最终结果符合公平性要求。\r\n持续监控：部署后实时监控模型的表现，及时发现并纠正新的偏见问题。', 'Facebook 的 Fairness Flow 工具已经在内部多个AI项目中应用，有效减少了模型中的偏见，提升了决策的公平性，该工具还开源给社区，帮助其他开发者构建更加公正的AI系统。');
INSERT INTO `project` VALUES (10, '微软的 Project Hanover 项目', '癌症治疗是一个高度个性化的领域，医生需要根据患者的基因组数据、病史和治疗反应，制定最合适的治疗方案。传统的方法往往依赖于医生的经验，难以全面考虑所有因素。', '开发一个基于AI的个性化医疗平台，帮助医生更精准地选择癌症治疗方案。\r\n', '深度学习：通过神经网络模型分析患者的基因组数据，预测不同药物的效果和副作用。\r\n自然语言处理（NLP）：解析医学文献和临床指南，提取最新的研究成果和治疗建议。\r\n知识图谱：构建癌症相关的知识图谱，将分散的知识点连接起来，形成完整的治疗建议。\r\n用户界面：提供直观的可视化工具，帮助医生快速理解和应用AI生成的治疗建议。\r\n云计算：依托Azure云平台，提供强大的计算能力和存储支持，确保系统的高效运行。', 'Project Hanover 已经在多家医院投入使用，帮助医生更快速、准确地制定个性化治疗方案，尤其在复杂病例中表现出色，该系统还不断学习新的研究成果和临床数据，持续改进其推荐的准确性。');
INSERT INTO `project` VALUES (11, 'Google 的 LaMDA（Language Model for Dialogue Applications）', '对话式AI系统的开发面临许多挑战，如理解复杂的对话上下文、生成连贯且有意义的回复等。传统的对话模型往往表现不佳，无法满足用户的期望。', '开发一个高性能的语言模型，专门用于对话应用，能够生成自然、流畅的对话，支持多种场景和任务。', 'Transformer架构：使用大规模Transformer模型，处理长文本序列，捕捉复杂的对话结构。\r\n无监督学习：通过大规模语料库进行预训练，学习语言的通用模式和表达方式。\r\n有监督微调：针对特定对话任务进行微调，提高模型的专精度和实用性。\r\n对话管理：通过对话状态跟踪和上下文理解，实现多轮对话，处理复杂的用户请求。\r\n安全性和可控性：引入安全机制，确保模型生成的内容符合道德和法律规范，避免产生有害信息。', 'LaMDA 已经在多个对话应用中展示出卓越的性能，如智能客服、虚拟助手等，该模型还不断学习新的对话数据，优化其生成能力，提供了更加自然、流畅的对话体验。');
INSERT INTO `project` VALUES (12, 'Salesforce 的 Einstein AI 平台', '企业在销售、市场和客户服务等领域面临大量的数据处理和决策需求。传统的数据分析方法往往耗时且不够智能，难以充分利用数据的价值。', '开发一个基于AI的商业智能平台，帮助企业在各个环节实现智能化决策，提升业务效率和客户满意度。', '预测分析：利用机器学习算法，分析历史数据，预测未来的销售趋势、客户需求等。\r\n推荐系统：根据用户行为和偏好，推荐合适的产品和服务，提升转化率。\r\n自然语言处理（NLP）：解析客户反馈和社交媒体评论，识别潜在的机会和问题，优化营销策略。\r\n自动化流程：通过AI驱动的自动化工具，简化日常任务，如邮件分类、日程安排等，节省时间和资源。\r\n集成与扩展：与Salesforce的核心CRM系统无缝集成，支持第三方应用的扩展，提供一站式的解决方案。\r\n', 'Salesforce Einstein 已经在全球多个行业中广泛应用，帮助企业实现了数据驱动的智能化决策，提升了业务效率和客户满意度，该平台还不断学习新的数据和用户反馈，优化其推荐和服务，提供了更加个性化的体验。');

-- ----------------------------
-- Table structure for reserch
-- ----------------------------
DROP TABLE IF EXISTS `reserch`;
CREATE TABLE `reserch`  (
  `ResearchID` int(11) NOT NULL,
  `PaperTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Authors` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Conference` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Year` int(11) NULL DEFAULT NULL,
  `SceneID` int(11) NULL DEFAULT NULL,
  `Link` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`ResearchID`) USING BTREE,
  INDEX `SceID`(`SceneID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reserch
-- ----------------------------
INSERT INTO `reserch` VALUES (1, 'Intelligent traffic management system', 'Prithvinath Manikonda; Anil Kumar Yerrapragada; Sai Sasank Annasamudram', '2011 IEEE Conference on Sustainable Utilization and Development in Engineering and Technology (STUDENT)', 2011, 1, 'https://ieeexplore.ieee.org/abstract/document/6089337/');
INSERT INTO `reserch` VALUES (2, 'Machine Learning-Based Traffic Flow Prediction and Intelligent Traffic Management', 'Zheng Xu Jiaqiang Yuan Liqiang Yu Guanghui Wang Mingwei Zhu', 'IJCSIT', 2024, 1, 'https://doi.org/10.62051/ijcsit.v2n1.03');
INSERT INTO `reserch` VALUES (3, 'Polyp-SAM: transfer SAM for polyp segmentation', 'Yuheng Li, Mingzhe Hu, Xiaofeng Yang', 'Medical Imaging 2024: Computer-Aided Diagnosis', 2024, 2, 'https://doi.org/10.1117/12.3006809');
INSERT INTO `reserch` VALUES (4, 'Polyp-Mamba: Polyp Segmentation with Visual Mamba', 'Zhongxing Xu, Feilong Tang, Zhe Chen, Zheng Zhou, Weishan Wu, Yuyao Yang, Yu Liang, Jiyu Jiang, Xuyue Cai & Jionglong Su', 'MICCAI', 2024, 2, 'https://link.springer.com/chapter/10.1007/978-3-031-72111-3_48');
INSERT INTO `reserch` VALUES (5, 'Design and implementation of intelligent monitoring system for agricultural environment in IoT', 'Yongchao Song, Jiping Bi, Xuan Wang', 'Internet of Things', 2024, 3, 'https://www.sciencedirect.com/science/article/pii/S2542660523003529');
INSERT INTO `reserch` VALUES (6, 'Intelligent Machines, IoT, and AI in Revolutionizing Agriculture for Water Processing', 'Krishnagandhi Pachiappan, K. Anitha, R. Pitchai, S. Sangeetha, T. V. V. Satyanarayana, Sampath Boopathi', 'Handbook of Research on AI and ML for Intelligent Machines and Systems', 2024, 3, 'https://www.igi-global.com/chapter/intelligent-machines-iot-and-ai-in-revolutionizing-agriculture-for-water-processing/334480');
INSERT INTO `reserch` VALUES (7, 'VoiceTuner: Self-Supervised Pre-training and Efficient Fine-tuning For Voice Generation', 'Rongjie Huang, Yongqi Wang, Ruofan Hu, Xiaoshan Xu', 'ACM MM', 2024, 4, 'https://dl.acm.org/doi/abs/10.1145/3664647.3681695');
INSERT INTO `reserch` VALUES (8, 'All You Need Is Your Voice: Emotional Face Representation with Audio Perspective for Emotional Talking Face Generation', 'Seongho Kim & Byung Cheol Song', 'ECCV', 2024, 4, 'https://link.springer.com/chapter/10.1007/978-3-031-73039-9_20');
INSERT INTO `reserch` VALUES (9, 'Multi-sensor fusion based industrial action recognition method under the environment of intelligent manufacturing', 'Zipeng Wang, Jihong Yan', 'Journal of Manufacturing Systems', 2024, 5, 'https://www.sciencedirect.com/science/article/pii/S0278612524000852');
INSERT INTO `reserch` VALUES (10, 'Intelligent manufacturing for strengthening operational resilience during the COVID-19 pandemic: A dynamic capability theory perspective', 'Mengjie Xi a, Yang Liu a, Wei Fang a, Taiwen Feng b', 'International Journal of Production Economics', 2024, 5, 'https://www.sciencedirect.com/science/article/pii/S0925527323003109');
INSERT INTO `reserch` VALUES (11, 'Financial Risk Analysis Using Integrated Data and Transformer-Based Deep Learning', 'Yijing WeiKe XuJianhua YaoMengfang SunYing Sun', 'Journal of Computer Science and Software Applications', 2024, 6, 'https://mfacademia.org/index.php/jcssa/article/view/167');
INSERT INTO `reserch` VALUES (12, 'Deep Learning Model-Driven Financial Risk Prediction and Analysis', 'Tianyi Yang *,Ang Li,Jiahao Xu,Guangze Su,Jiufan Wang', 'NaN', 2024, 6, 'https://www.preprints.org/manuscript/202406.2069');
INSERT INTO `reserch` VALUES (13, 'Recommender Systems in the Era of Large Language Models (LLMs)', 'Zihuai Zhao; Wenqi Fan; Jiatong Li; Yunqing Liu; Xiaowei Mei; Yiqi Wang', 'IEEE Transactions on Knowledge and Data Engineering', 2024, 7, 'https://ieeexplore.ieee.org/abstract/document/10506571/');
INSERT INTO `reserch` VALUES (14, 'On-Device Recommender Systems: A Comprehensive Survey', 'Hongzhi Yin, Liang Qu, Tong Chen, Wei Yuan, Ruiqi Zheng, Jing Long, Xin Xia, Yuhui Shi, Chengqi Zhang', 'NaN', 2024, 7, 'https://arxiv.org/abs/2401.11441');

-- ----------------------------
-- Table structure for scene
-- ----------------------------
DROP TABLE IF EXISTS `scene`;
CREATE TABLE `scene`  (
  `SceneID` int(11) NOT NULL,
  `SceneName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `TargetAudience` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Overview` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `RelatedTech` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Challenges` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `FuturePotential` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`SceneID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of scene
-- ----------------------------
INSERT INTO `scene` VALUES (1, '智能交通管理', '城市居民、交通管理部门', '通过AI优化交通信号灯和流量调控，提高交通流动性并减少拥堵', '深度学习、强化学习', '数据采集复杂性、实时响应需求', '全自动智能化交通网络管理');
INSERT INTO `scene` VALUES (2, '医疗影像辅助诊断', '医生、患者', 'AI帮助分析医学影像，提高病变识别准确率，辅助医生决策', '计算机视觉、神经网络', '医疗数据隐私保护、模型可靠性', '智能化个性医疗辅助系统');
INSERT INTO `scene` VALUES (3, '农业智能监控', '农户、农业合作社', '利用AI监测作物健康状况和病虫害风险，优化种植过程', '遥感技术、机器学习', '数据采集成本、设备部署复杂性', '实现农业全生命周期自动化监控');
INSERT INTO `scene` VALUES (4, '智能语音助手', '消费者、企业用户', '提供自然语言处理的对话功能，支持语音命令、智能应答和任务管理', '自然语言处理、语音识别', '情境理解不足、多语言支持问题', '实现全面的个性化人机交互');
INSERT INTO `scene` VALUES (5, '智能制造系统', '工厂管理者、工程师', '通过AI优化生产流程，实时监控设备状态，提升生产效率', '深度学习、物联网技术', '数据标准化、跨平台集成', '完全自动化工厂运营');
INSERT INTO `scene` VALUES (6, '金融风险管理', '银行、投资机构', 'AI识别金融交易中的风险模式，提供决策支持', '数据挖掘、时间序列分析', '数据复杂性、欺诈行为样本稀缺', '构建全球实时金融监控网络');
INSERT INTO `scene` VALUES (7, '教育个性化学习', '学生、教育工作者', '利用AI分析学生学习行为，提供定制化学习计划', '推荐系统、深度学习', '数据稀疏性、教育公平性', '打造全面自适应的学习管理平台');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Uname` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Upassword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Umail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Uid`) USING BTREE,
  INDEX `Uname`(`Uname`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (4, 'test1', '$2y$13$p.8ECt02tO4adWY/7lQfIuKdsDv5vbLDvCgeJ5rI2bvE9T4o4oT62', '15302128907@163.com');
INSERT INTO `users` VALUES (5, 'test2', '$2y$13$dVvPJqS866HW/XFvrfcId.CkcCt3VWpCGdSr2WCYtNFBpBKFSaGgO', '2211532@nankai.edu.cn');

SET FOREIGN_KEY_CHECKS = 1;
