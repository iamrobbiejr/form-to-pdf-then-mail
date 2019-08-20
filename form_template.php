<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Personal Loan Application</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- application form -->
     
        <form id="loanForm" method="POST" class="form-group" action="dbConn.php">
                <header>
                    <h3>Personal Loan Application</h3>
                </header>
                <hr>
                    <table class="table table-bordered" style="border: 1px solid #000000;margin: 10px;">
                        <thead class="thead-dark">
                            
                        <th colspan="2">Personal Details:</th>
                               
                        <th colspan="2">*To be completed by individual applicants</th>                                
                                
                        </thead>
                        <tbody>
                        <tr>
                            <td>Full Name</td>
                            <td>
                                <input class="form-control col-5" type="text" name="fname" value="" size="20" placeholder="Firstname" aria-required="true" required>
                                <input class="form-control col-5" type="text" size="4" placeholder="Middle Name/s" name="mname">
                                <input class="form-control col-5" type="text" name="lname" value="" placeholder="Surname" aria-required="true" required>
                            </td>
                            <td>I.D/ Driver's License/Passport:</td>
                            <td>
                                <input class="form-control" type="text" aria-required="true" name="nat_id" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Gender/Title</td>
                            <td>
                                <select class="custom-select col-5" id="inputGroupSelect01" name="gender">
                                    <option value="mr" selected>Mr</option>
                                    <option value="mrs">Mrs</option>
                                    <option value="ms">Ms</option>
                                    <option value="other">Other</option>
                                </select>
                            </td>
                            <td>Date of Birth</td>
                            <td>
                                <input class="form-control" type="date" name="dob" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Contact</td>
                            <td>
                                <label style=" margin-right:4%; " for="tel">Telephone: </label><input class="form-control" type="text" name="tel" value="" >
                            </td>
                            <td>
                                <label style=" margin-right:4%; " for="mobile">Mobile: </label><input class="form-control" type="text" name="mobile" value="" >
                            </td>
                            <td>
                                <label style=" margin-right:4%; " for="email">Email: </label><input class="form-control" id="inputEmail4" type="email" name="email" value="" >
                            </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><textarea class="form-control" name="address" cols="50" rows="5"></textarea></td>
                            <td>
                                Length of stay:<br><br>
                                Ownership of property (<em>Proof</em>):
                            </td>
                            <td>
                                <input class="form-control" type="number" name="los"><br><br>
                                <select class="custom-select" id="inputGroupSelect01" name="property">
                                    <option value="owned" selected>Owned</option>
                                    <option value="rented">Rented</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                        <th colspan="4">Employment Details:</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Employer</td>
                            <td>
                                <input class="form-control" type="text" placeholder="Employer Name" name="empName"><br>
                                <textarea class="form-control" rows="5" cols="10" placeholder="Address" name="empAddress"></textarea>
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="Mobile Number" name="empCell"><br>
                                <input class="form-control" id="inputEmail4" type="email" placeholder="Email" name="empEmail">
                            </td>
                            <td>
                                <h4>Job Title</h4>
                                <input class="form-control" type="text" placeholder="Job Title" name="jobTitle">
                                <h4>Date Employed</h4>
                                <input class="form-control" type="date" name="dateEmployed">
                                <h4>Gross Salary</h4>
                                <input class="form-control" type="text" placeholder="Gross Salary" name="grossSalary">
                            </td>
                        </tr>
                    </tbody>
                    </table>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <th colspan="4" >Banking Details:</th>
                </thead>
                <tbody>
                    
                            <td>
                                <h6>Name of Bank</h6>
                                <input class="form-control" type="text" placeholder="" name="bankName">
                            </td>
                            
                            <td>
                                <h6>Branch</h6>
                                <input class="form-control" type="text" placeholder="" name="branch">
                            </td>
                            
                            <td>
                                <h6>Account Number</h6>
                                <input class="form-control" type="text" placeholder="" name="accNum">
                            </td>
                 </tbody>
                    </table>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <th class="thead-dark" colspan="2">Financial Information</th>
                    <th class="thead-dark" colspan="2">*Provide full information about the loan</th>
                </thead>
                        <tr>
                            <td colspan="2">
                                <h6>Loan Amount</h6>
                                <input class="form-control col-7" type="text" placeholder="" name="loanAmnt" ><br>
                                <h6 style="margin-top:10%;">Repayment Source</h6>
                                <input class="form-control col-7"   type="text" placeholder="" name="repaymentSource">
                            </td>
                            <td colspan="2">
                                <h5>Purpose:</h5>
                                <textarea class="form-control" rows="5" cols="50" name="purpose"></textarea>
                            </td>
                        </tr>
                        <tr>
                          
                            <th>Existing Loans/Obligations</th>
                           
                            
                            <td>
                                <h6>Lender/Creditor</h6>
                                <input class="form-control" style="margin-top:5%;" type="text" placeholder="" name="lender">
                            </td>
                            <td>
                                <h6>Amount Outstanding</h6>
                                <input class="form-control" style="margin-top:5%;" type="text" name="outstandingAmnt">
                            </td>
                            <td>
                                <h6>Monthly Installment</h6>
                                <input class="form-control" style="margin-top:5%;" type="text" name="installment">
                            </td>
                        </tr>
                    </table>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <th colspan="4">Asset Details (Pledged)</th>
                </thead>
                        <tr>
                            <th>Applicant</th>
            
                            <td>
                                <h6>Asset Description</h6>
                                <textarea class="form-control" rows="5" cols="35" name="assetName"></textarea>
                            </td>
                            <td>
                                <h6>Serial Number</h6>
                                <input class="form-control" style="margin-top:5%;" size="40" type="text" name="serialNo">
                            </td>
                            <td>
                                <h6>Market Value</h6>
                                <input class="form-control" style="margin-top:5%;" type="text" name="value">
                            </td>
                        </tr>
                    </table>
                
                <button style="margin-bottom:5%;" class="btn btn-dark" type="submit" name="apply">Submit Application</button>
            </form>

        <!-- javascript -->
        <script src="" async defer></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
