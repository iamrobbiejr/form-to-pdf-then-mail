<?php


//Variable Declaration
//applicantsVariable
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nat_id = $_POST['nat_id'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$property = $_POST['property'];
$los = $_POST['los'];
//assetsVariable
$assetName = $_POST['assetName'];
$serialNo = $_POST['serialNo'];
$value = $_POST['value'];
//bankingDetails
$bankName = $_POST['bankName'];
$branch = $_POST['branch'];
$accNum = $_POST['accNum'];
//employment
$empName = $_POST['empName'];
$empAddress = $_POST['empAddress'];
$empCell = $_POST['empCell'];
$empEmail = $_POST['empEmail'];
$jobTitle = $_POST['jobTitle'];
$grossSalary = $_POST['grossSalary'];
$dateEmployed = $_POST['dateEmployed'];
//financialInfo
$loanAmnt = $_POST['loanAmnt'];
$repaymentSource = $_POST['repaymentSource'];
$purpose = $_POST['purpose'];
$lender = $_POST['lender'];
$outstandingAmnt = $_POST['outstandingAmnt'];
$installment = $_POST['installment'];


require("fpdf181/fpdf.php");

// fpdf object
$pdf=new FPDF();

// generate PDF
$pdf->AddPage();
$pdf->SetFont("Arial","B",12);

//get info from the HTML form
$pdf->Cell(40,10, "Loan Application for [$gender $fname $lname]",1,1,'C');

//personal details
$pdf->Cell(40,10,"Personal Details",1,1);
$pdf->Cell(40,10,"DOB:	",0,0);
$pdf->Cell(40,10,$dob,0,1);
$pdf->Cell(40,10,"National ID:",0,0);
$pdf->Cell(40,10,$nat_id,0,1);
$pdf->Cell(40,10,"Contact:	",0,0);
$pdf->Cell(40,10,"Cell: [$mobile]	Email: [$email]",0,1);
$pdf->Cell(40,10,"Address:	",0,0);
$pdf->Cell(40,10,$address,0,1);
$pdf->Cell(40,10,"Ownership of Property: ",0,0);
$pdf->Cell(40,10,$property,0,1);

//employment details
$pdf->Cell(40,10,"Employment Details",1,1);
$pdf->Cell(40,10,"Employer:	",0,0);
$pdf->Cell(40,10,$empName,0,1);
$pdf->Cell(40,10,"Address:	",0,0);
$pdf->Cell(40,10,$empAddress,0,1);
$pdf->Cell(40,10,"Contact:	",0,0);
$pdf->Cell(40,10,"Cell: [$empCell]	Email: [$empEmail]",0,1);
$pdf->Cell(40,10,"Job Title: ",0,0);
$pdf->Cell(40,10,$jobTitle,0,1);
$pdf->Cell(40,10,"Date Employed: ",0,0);
$pdf->Cell(40,10,$dateEmployed,0,1);
$pdf->Cell(40,10,"Gross Salary:  ",0,0);
$pdf->Cell(40,10,$grossSalary,0,1);

//Banking details
$pdf->Cell(40,10,"Banking Details",1,1);
$pdf->Cell(40,10,"Bank Name:",0,0);
$pdf->Cell(40,10,$bankName,0,1);
$pdf->Cell(40,10,"Branch:",0,0);
$pdf->Cell(40,10,$branch,0,1);
$pdf->Cell(40,10,"Account Number:",0,0);
$pdf->Cell(40,10,$accNum,0,1);

//Financial Details
$pdf->Cell(40,10,"Financial Details",1,1);
$pdf->Cell(40,10,"Loan Amount: ",0,0);
$pdf->Cell(40,10,$loanAmnt,0,1);
$pdf->Cell(40,10,"Repayment Src",0,0);
$pdf->Cell(40.10,$repaymentSource,0,1);
$pdf->Cell(40,10,"Purpose:",0,0);
$pdf->Cell(40,10,$purpose,0,1);
$pdf->Cell(40,10,"Lender: [$lender]",0,0);
$pdf->Cell(40,10,"Outstanding: [$outstandingAmnt]",0,1);
$pdf->Cell(40,10,"Monthly Installments:[$installment]",0,2);

//Asset Details
$pdf->Cell(40,10,"Asset Details",1,1);
$pdf->Cell(40,10,"Asset Description",0,0);
$pdf->Cell(40,10,$assetName,0,1);
$pdf->Cell(40,10,"Serial No: ",0,0);
$pdf->Cell(40,10,$serialNo,0,1);
$pdf->Cell(40,10,"Market Value: ",0,0);
$pdf->Cell(40,10,$value,0,1);

// email stuff
$to = "malungarobbie@gmail.com";
$from = "loanapplications@success.co.zw";
$subject = "Loan Application";
$message = "Please find the attached.";

// a random hash will be necessary to send mixed content
$separator = md5(time());

// carriage return type
$eol = PHP_EOL;

// attachment name
$filename = "application.pdf";

// encode data (put attachment in proper format)
$pdfdoc = $pdf->Output("", "S");
$attachment = chunk_split(base64_encode($pdfdoc));

// main header (multipart mandatory)
$headers  = "From: ".$from.$eol;
$headers .= "MIME-Version: 1.0".$eol; 
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol.$eol; 
$headers .= "Content-Transfer-Encoding: 7bit".$eol;
$headers .= "This is a MIME encoded message.".$eol.$eol;

// message
$headers .= "--".$separator.$eol;
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"".$eol;
$headers .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
$headers .= $message.$eol.$eol;

// attachment
$headers .= "--".$separator.$eol;
$headers .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
$headers .= "Content-Transfer-Encoding: base64".$eol;
$headers .= "Content-Disposition: attachment".$eol.$eol;
$headers .= $attachment.$eol.$eol;
$headers .= "--".$separator."--";

// send message
mail($to, $subject, "", $headers);
?>