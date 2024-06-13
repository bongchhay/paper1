TYPE=VIEW
query=select `studenspayment`.`tbl_class`.`ID` AS `ID`,`studenspayment`.`tbl_class`.`BookLevel` AS `BookLevel`,`studenspayment`.`tbl_teacher`.`T_ChineseName` AS `T_ChineseName`,`studenspayment`.`tbl_class`.`StudyTime` AS `StudyTime`,`studenspayment`.`tbl_class`.`StudyDay` AS `StudyDay` from (`studenspayment`.`tbl_class` left join `studenspayment`.`tbl_teacher` on(`studenspayment`.`tbl_class`.`TeacherID` = `studenspayment`.`tbl_teacher`.`ID`))
md5=c69861bd8efe4d0b5f200ae25f1ec9b8
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=0001713469101717182
create-version=2
source=SELECT\n	tbl_class.ID, \n	tbl_class.BookLevel, \n	tbl_teacher.T_ChineseName, \n	tbl_class.StudyTime, \n	tbl_class.StudyDay\nFROM\n	tbl_class\n	LEFT JOIN\n	tbl_teacher\n	ON \n		tbl_class.TeacherID = tbl_teacher.ID
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `studenspayment`.`tbl_class`.`ID` AS `ID`,`studenspayment`.`tbl_class`.`BookLevel` AS `BookLevel`,`studenspayment`.`tbl_teacher`.`T_ChineseName` AS `T_ChineseName`,`studenspayment`.`tbl_class`.`StudyTime` AS `StudyTime`,`studenspayment`.`tbl_class`.`StudyDay` AS `StudyDay` from (`studenspayment`.`tbl_class` left join `studenspayment`.`tbl_teacher` on(`studenspayment`.`tbl_class`.`TeacherID` = `studenspayment`.`tbl_teacher`.`ID`))
mariadb-version=100432
