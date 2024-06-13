TYPE=VIEW
query=select `studenspayment`.`datayear`.`ID` AS `ID`,`studenspayment`.`datayear`.`StudenID` AS `StudenID`,`studenspayment`.`datayear`.`ClassID` AS `ClassID`,`studenspayment`.`datayear`.`ManyMonths` AS `ManyMonths`,`studenspayment`.`datayear`.`Payment` AS `Payment`,`studenspayment`.`datayear`.`StartDate` AS `StartDate`,`studenspayment`.`datayear`.`EndDate` AS `EndDate`,`studenspayment`.`datayear`.`Discount` AS `Discount`,`studenspayment`.`datayear`.`PaymentDate` AS `PaymentDate`,`studenspayment`.`datayear`.`InvoiceNumber` AS `InvoiceNumber`,`studenspayment`.`datayear`.`Other` AS `Other`,`studenspayment`.`datayear`.`PayBack` AS `PayBack`,`studenspayment`.`datayear`.`BackMonth` AS `BackMonth`,`studenspayment`.`tbl_class2`.`BookLevel` AS `BookLevel`,`studenspayment`.`tbl_class2`.`TuitionFees` AS `TuitionFees` from (`studenspayment`.`tbl_class2` join `studenspayment`.`datayear` on(`studenspayment`.`tbl_class2`.`ID` = `studenspayment`.`datayear`.`ClassID`))
md5=3931fece72593b92789da014309b82a8
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=0001715829039179012
create-version=2
source=SELECT\n	datayear.ID, \n	datayear.StudenID, \n	datayear.ClassID, \n	datayear.ManyMonths, \n	datayear.Payment, \n	datayear.StartDate, \n	datayear.EndDate, \n	datayear.Discount, \n	datayear.PaymentDate, \n	datayear.InvoiceNumber, \n	datayear.Other, \n	datayear.PayBack, \n	datayear.BackMonth, \n	tbl_class2.BookLevel, \n	tbl_class2.TuitionFees\nFROM\n	tbl_class2\n	INNER JOIN\n	datayear\n	ON \n		tbl_class2.ID = datayear.ClassID
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `studenspayment`.`datayear`.`ID` AS `ID`,`studenspayment`.`datayear`.`StudenID` AS `StudenID`,`studenspayment`.`datayear`.`ClassID` AS `ClassID`,`studenspayment`.`datayear`.`ManyMonths` AS `ManyMonths`,`studenspayment`.`datayear`.`Payment` AS `Payment`,`studenspayment`.`datayear`.`StartDate` AS `StartDate`,`studenspayment`.`datayear`.`EndDate` AS `EndDate`,`studenspayment`.`datayear`.`Discount` AS `Discount`,`studenspayment`.`datayear`.`PaymentDate` AS `PaymentDate`,`studenspayment`.`datayear`.`InvoiceNumber` AS `InvoiceNumber`,`studenspayment`.`datayear`.`Other` AS `Other`,`studenspayment`.`datayear`.`PayBack` AS `PayBack`,`studenspayment`.`datayear`.`BackMonth` AS `BackMonth`,`studenspayment`.`tbl_class2`.`BookLevel` AS `BookLevel`,`studenspayment`.`tbl_class2`.`TuitionFees` AS `TuitionFees` from (`studenspayment`.`tbl_class2` join `studenspayment`.`datayear` on(`studenspayment`.`tbl_class2`.`ID` = `studenspayment`.`datayear`.`ClassID`))
mariadb-version=100432
