TYPE=VIEW
query=select `studenspayment`.`tbl_class`.`ID` AS `ID`,`studenspayment`.`tbl_class`.`BookLevel` AS `BookLevel`,`studenspayment`.`tbl_class`.`StudyTime` AS `StudyTime`,`studenspayment`.`tbl_class`.`StudyDay` AS `StudyDay`,`studenspayment`.`tbl_class`.`TuitionFees` AS `TuitionFees`,`studenspayment`.`tbl_class`.`RoomNumber` AS `RoomNumber`,`studenspayment`.`tbl_teacher2`.`T_ChineseName` AS `T_ChineseName`,`studenspayment`.`tbl_teacher2`.`T_Gender` AS `T_Gender` from (`studenspayment`.`tbl_class` left join `studenspayment`.`tbl_teacher2` on(`studenspayment`.`tbl_class`.`TeacherID` = `studenspayment`.`tbl_teacher2`.`ID`))
md5=a73d37e1dc9e8853be19cf636b0d4212
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=0001715823179693416
create-version=2
source=SELECT\n	tbl_class.ID, \n	tbl_class.BookLevel, \n	tbl_class.StudyTime, \n	tbl_class.StudyDay, \n	tbl_class.TuitionFees, \n	tbl_class.RoomNumber, \n	tbl_teacher2.T_ChineseName, \n	tbl_teacher2.T_Gender\nFROM\n	tbl_class\n	LEFT JOIN\n	tbl_teacher2\n	ON \n		tbl_class.TeacherID = tbl_teacher2.ID
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `studenspayment`.`tbl_class`.`ID` AS `ID`,`studenspayment`.`tbl_class`.`BookLevel` AS `BookLevel`,`studenspayment`.`tbl_class`.`StudyTime` AS `StudyTime`,`studenspayment`.`tbl_class`.`StudyDay` AS `StudyDay`,`studenspayment`.`tbl_class`.`TuitionFees` AS `TuitionFees`,`studenspayment`.`tbl_class`.`RoomNumber` AS `RoomNumber`,`studenspayment`.`tbl_teacher2`.`T_ChineseName` AS `T_ChineseName`,`studenspayment`.`tbl_teacher2`.`T_Gender` AS `T_Gender` from (`studenspayment`.`tbl_class` left join `studenspayment`.`tbl_teacher2` on(`studenspayment`.`tbl_class`.`TeacherID` = `studenspayment`.`tbl_teacher2`.`ID`))
mariadb-version=100432
