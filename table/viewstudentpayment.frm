TYPE=VIEW
query=select `studenspayment`.`studentpay`.`ID` AS `ID`,`techer_and_class`.`T_ChineseName` AS `T_ChineseName`,`techer_and_class`.`T_Gender` AS `T_Gender`,`techer_and_class`.`BookLevel` AS `BookLevel`,`techer_and_class`.`StudyTime` AS `StudyTime`,`techer_and_class`.`StudyDay` AS `StudyDay`,`techer_and_class`.`TuitionFees` AS `TuitionFees`,`techer_and_class`.`RoomNumber` AS `RoomNumber`,`studenspayment`.`studentpay`.`PayMonthly` AS `PayMonthly`,`studenspayment`.`studentpay`.`PhoneNumber` AS `PhoneNumber`,`studenspayment`.`studentpay`.`DateClickToPay` AS `DateClickToPay`,`studenspayment`.`studentpay`.`text` AS `text`,`studenspayment`.`studentpay`.`InvoiceNumber` AS `InvoiceNumber`,`studenspayment`.`tbl_student2`.`S_ChineseName` AS `S_ChineseName`,`studenspayment`.`tbl_student2`.`S_Gender` AS `S_Gender` from ((`studenspayment`.`studentpay` left join `studenspayment`.`tbl_student2` on(`studenspayment`.`studentpay`.`StudantID` = `studenspayment`.`tbl_student2`.`ID`)) left join `studenspayment`.`techer_and_class` on(`studenspayment`.`studentpay`.`ClassID` = `techer_and_class`.`ID`))
md5=ad806e31adf0e05695c1821aab59a59a
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=0001715823343956083
create-version=2
source=SELECT\n	studentpay.ID, \n	techer_and_class.T_ChineseName, \n	techer_and_class.T_Gender, \n	techer_and_class.BookLevel, \n	techer_and_class.StudyTime, \n	techer_and_class.StudyDay, \n	techer_and_class.TuitionFees, \n	techer_and_class.RoomNumber, \n	studentpay.PayMonthly, \n	studentpay.PhoneNumber, \n	studentpay.DateClickToPay, \n	studentpay.text, \n	studentpay.InvoiceNumber, \n	tbl_student2.S_ChineseName, \n	tbl_student2.S_Gender\nFROM\n	studentpay\n	LEFT JOIN\n	tbl_student2\n	ON \n		studentpay.StudantID = tbl_student2.ID\n	LEFT JOIN\n	techer_and_class\n	ON \n		studentpay.ClassID = techer_and_class.ID
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `studenspayment`.`studentpay`.`ID` AS `ID`,`techer_and_class`.`T_ChineseName` AS `T_ChineseName`,`techer_and_class`.`T_Gender` AS `T_Gender`,`techer_and_class`.`BookLevel` AS `BookLevel`,`techer_and_class`.`StudyTime` AS `StudyTime`,`techer_and_class`.`StudyDay` AS `StudyDay`,`techer_and_class`.`TuitionFees` AS `TuitionFees`,`techer_and_class`.`RoomNumber` AS `RoomNumber`,`studenspayment`.`studentpay`.`PayMonthly` AS `PayMonthly`,`studenspayment`.`studentpay`.`PhoneNumber` AS `PhoneNumber`,`studenspayment`.`studentpay`.`DateClickToPay` AS `DateClickToPay`,`studenspayment`.`studentpay`.`text` AS `text`,`studenspayment`.`studentpay`.`InvoiceNumber` AS `InvoiceNumber`,`studenspayment`.`tbl_student2`.`S_ChineseName` AS `S_ChineseName`,`studenspayment`.`tbl_student2`.`S_Gender` AS `S_Gender` from ((`studenspayment`.`studentpay` left join `studenspayment`.`tbl_student2` on(`studenspayment`.`studentpay`.`StudantID` = `studenspayment`.`tbl_student2`.`ID`)) left join `studenspayment`.`techer_and_class` on(`studenspayment`.`studentpay`.`ClassID` = `techer_and_class`.`ID`))
mariadb-version=100432
