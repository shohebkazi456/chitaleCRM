<?php

class CRM_Model extends CI_Model
{

	public function save_register_new_client($shopname,$cname,$mobileno,$emailid,
          	$myproduct,$shopaddress, $deliveryby)
	{
		$myquery="insert into new_client 
		

		   (shopname,cname,mobileno,emailid,product,shopaddress, deliveryby)
          	values
          ('$shopname','$cname','$mobileno','$emailid','$myproduct','$shopaddress', '$deliveryby')";

          $this->db->query($myquery);
	}


    public function dispayallnewclient()
	{
		return $this->db->query("select * from new_client")->result(); 
	}


	public function deletenewclient($inputdata)
	{
		$this->db->query("delete from new_client where client_id=$inputdata");
	}

	public function dispayclientdataAccToId($inputdata)
	{
		return $this->db->query("select * from new_client where client_id=$inputdata")->result();
	}


	public function updatenewclient($inputdata,$shopname,$cname,$mobileno,$emailid,
            $myproduct,$shopaddress,$deliveryby)
	{
		$this->db->query("update new_client set shopname='$shopname',cname='$cname',mobileno='$mobileno',emailid='$emailid',product='$myproduct',shopaddress='$shopaddress',deliveryby='$deliveryby' where client_id=$inputdata");
	}

	public function insertClientInvoice($invoicedate,$companyname,$ownername,$deliveryaddress,$contactno,$pname1,$unitprice1,$qty1,$billamt1,$pname2,$unitprice2,$qty2,$billamt2,$pname3,$unitprice3,$qty3,$billamt3,$totalbillamt,$gstamt,$finalbillamt,$invoicepreparedby)
	{
		$this->db->query("insert into client_invoice values ('','$invoicedate','$companyname','$ownername','$deliveryaddress',$contactno,'$pname1',$unitprice1,$qty1,$billamt1,'$pname2',$unitprice2,$qty2,$billamt2,'$pname3',$unitprice3,$qty3,$billamt3,$totalbillamt,$gstamt,$finalbillamt,'$invoicepreparedby')");
	}

	public function dispayallclientinvoice()
	{
		return $this->db->query("select * from client_invoice")->result();
	}

	public function deleteclientinvoice($inputdata)
	{
		$this->db->query("delete from client_invoice where invoice_id=$inputdata");
	}

	public function dispayclientinvoiceAccToId($inputdata)
	{
		return $this->db->query("select * from client_invoice where invoice_id=$inputdata")->result();
	}

	public function updateClientInvoice($inputdata,$invoicedate,$companyname,$ownername,$deliveryaddress,$contactno,$pname1,$unitprice1,$qty1,$billamt1,$pname2,$unitprice2,$qty2,$billamt2,$pname3,$unitprice3,$qty3,$billamt3,$totalbillamt,$gstamt,$finalbillamt,$invoicepreparedby)
	{
		$this->db->query("update client_invoice set invoice_date='$invoicedate',company_name='$companyname',owner_name='$ownername',deliveryaddress='$deliveryaddress',contactno=$contactno,pname1='$pname1',unitprice1=$unitprice1,qty1=$qty1,billamt1=$billamt1,pname2='$pname2',unitprice2=$unitprice2,qty2=$qty2,billamt2=$billamt2,pname3='$pname3',unitprice3=$unitprice3,qty3=$qty3,billamt3=$billamt3,totalbillamt=$totalbillamt,gstamt=$gstamt,finalbillamt=$finalbillamt,invoicepreparedby='$invoicepreparedby' where invoice_id=$inputdata");
	}

	public function dispayclientbill()
	{
		return $this->db->query("select company_name,sum(finalbillamt) 'finalclientbill' from client_invoice group by company_name")->result();
	}

	public function save_register_new_retailer($fname,$lname,$phoneno,$emailid,$address,$aadharcardno,$gender,$myproduct)
	{
		$this->db->query("insert into new_retailer values ('','$fname','$lname',$phoneno,'$emailid','$address','$aadharcardno','$gender','$myproduct')");
	}

	public function dispayallnewretailer()
	{
		return $this->db->query("select * from new_retailer")->result();
	}

	public function deletenewretailer($inputdata)
	{
		$this->db->query("delete from new_retailer where retailer_id=$inputdata");
	}

	public function dispayretailerdataAccToId($inputdata)
	{
		return $this->db->query("select * from new_retailer where retailer_id=$inputdata")->result();
	}

	public function updatenewretailer($inputdata,$fname,$lname,$phoneno,$emailid,$address,$aadharcardno,$gender,$myproduct)
	{
		$this->db->query("update new_retailer set fname='$fname',lname='$lname',phoneno='$phoneno',emailid='$emailid',address='$address',aadharcardno=$aadharcardno,gender='$gender',product='$myproduct' where retailer_id=$inputdata");
	}

	public function insertClientRetailer($invoicedate,$companyname,$ownername,$deliveryaddress,$contactno,$pname1,$unitprice1,$qty1,$billamt1,$pname2,$unitprice2,$qty2,$billamt2,$pname3,$unitprice3,$qty3,$billamt3,$totalbillamt,$gstamt,$finalbillamt,$invoicepreparedby)
	{
		$this->db->query("insert into retailer_invoice values ('','$invoicedate','$companyname','$ownername','$deliveryaddress',$contactno,'$pname1',$unitprice1,$qty1,$billamt1,'$pname2',$unitprice2,$qty2,$billamt2,'$pname3',$unitprice3,$qty3,$billamt3,$totalbillamt,$gstamt,$finalbillamt,'$invoicepreparedby')");
	}

	public function dispayallretailerinvoice()
	{
		return $this->db->query("select * from retailer_invoice")->result();
	}

	public function deleteretailerinvoice($inputdata)
	{
		$this->db->query("delete from retailer_invoice where retailer_invoice_id=$inputdata");
	}

	public function dispayretailerinvoiceAccToId($inputdata)
	{
		return $this->db->query("select * from retailer_invoice where retailer_invoice_id=$inputdata")->result();
	}

	public function updateRetailerInvoice($inputdata,$invoicedate,$companyname,$ownername,$deliveryaddress,$contactno,$pname1,$unitprice1,$qty1,$billamt1,$pname2,$unitprice2,$qty2,$billamt2,$pname3,$unitprice3,$qty3,$billamt3,$totalbillamt,$gstamt,$finalbillamt,$invoicepreparedby)
	{
		$this->db->query("update retailer_invoice set invoice_date='$invoicedate',company_name='$companyname',owner_name='$ownername',deliveryaddress='$deliveryaddress',contactno=$contactno,pname1='$pname1',unitprice1=$unitprice1,qty1=$qty1,billamt1=$billamt1,pname2='$pname2',unitprice2=$unitprice2,qty2=$qty2,billamt2=$billamt2,pname3='$pname3',unitprice3=$unitprice3,qty3=$qty3,billamt3=$billamt3,totalbillamt=$totalbillamt,gstamt=$gstamt,finalbillamt=$finalbillamt,invoicepreparedby='$invoicepreparedby' where retailer_invoice_id=$inputdata");
	}

	public function dispayretailerbill()
	{
		return $this->db->query("select company_name,sum(finalbillamt) 'finalclientbill' from retailer_invoice group by company_name")->result();
	}

	public function insertNewEmployee($firstname,$lastname,$phone,$email,$address,$job,$aadharcardno,$pancardno,$gender,$jobloc,$year_of_exp,$hiredate,$emp_blood_group,$spouse_name,$spouse_phoneno,$monthly_sal,$incentive,$insurance)
	{
		$this->db->query("insert into employee_register values ('','$firstname','$lastname',$phone,'$email','$address','$job',$aadharcardno,'$pancardno','$gender','$jobloc',$year_of_exp,'$hiredate','$emp_blood_group','$spouse_name','$spouse_phoneno','$monthly_sal','$incentive','$insurance')");
	}

	public function dispayemployees()
	{
		return $this->db->query("select * from employee_register")->result();
	}

	public function deleteemployee($inputdata)
	{
		$this->db->query("delete from employee_register where employee_id=$inputdata");

	}

	public function dispayemployeeAccToId($inputdata)
	{
		return $this->db->query("select * from employee_register where employee_id=$inputdata")->result();

	}

	public function updateEmployee($inputdata,$firstname,$lastname,$phone,$email,$address,$job,$adharcardno,$pancardno,$gender,$jobloc,$year_of_exp,$hiredate,$emp_blood_group,$spouse_name,$spouse_phoneno,$monthly_sal,$incentive,$insurance)
	{
		$this->db->query("update employee_register set firstname='$firstname',lastname='$lastname',phone='$phone',email='$email',address='$address',job='$job',adharcardno='$adharcardno',pancardno='$pancardno',gender='$gender',jobloc='$jobloc',year_of_exp='$year_of_exp',hiredate='$hiredate',emp_blood_group='$emp_blood_group',spouse_name='$spouse_name',spouse_phoneno='$spouse_phoneno',monthly_sal='$monthly_sal',incentive='$incentive',insurance='$insurance'  where employee_id=$inputdata");
	}

	public function insertPurchaseDetails($pdate,$pname,$cop,$qty,$pamt,$purchaseby,$pofp)
	{
		$this->db->query("insert into purchase values ('','$pdate','$pname','$cop','$qty','$pamt','$purchaseby','$pofp')");
	}

	public function dispaypurchase_details()
	{
		return $this->db->query("select * from purchase")->result();	
	}

	public function deletepurchasedata($inputdata)
	{
		$this->db->query("delete from purchase where pid=$inputdata");
	}

	public function dispaypurchasedataAccToId($inputdata)
	{
		return $this->db->query("select * from purchase where pid=$inputdata")->result();

	}

	public function updatePurchaseDetails($inputdata,$pdate,$pname,$cop,$qty,$pamt,$purchaseby,$pofp)
	{
		$this->db->query("update purchase set pdate='$pdate',pname='$pname',cop='$cop',qty='$qty',pamt='$pamt',purchaseby='$purchaseby',pofp='$pofp'  where pid=$inputdata");
	}

	public function candidateInterviewDetails($idate,$firstname,$lastname,$gender,$phone,$email,$address,$branch,$toc,$companyname,$prev_salary,$year_of_exp,$notice_period,$salary_expectation,$grade,$hr_remark,$status)
	{
		$this->db->query("insert into candidate_interview values ('','$idate','$firstname','$lastname','$gender',$phone,'$email','$address','$branch','$toc','$companyname','$prev_salary','$year_of_exp','$notice_period','$salary_expectation','$grade','$hr_remark','$status')");
	}

	public function dispay_interview_screening()
	{
		return $this->db->query("select * from candidate_interview")->result();
	}

	public function deleteinterviewscreening($inputdata)
	{
		$this->db->query("delete from candidate_interview where ci_id=$inputdata");
	}

	public function dispayinterviewcadidateAccToId($inputdata)
	{
		return $this->db->query("select * from candidate_interview where ci_id=$inputdata")->result();
	}

	public function updatefreshercandidateInterviewDetails($inputdata,$idate,$firstname,$lastname,$gender,$phone,$email,$address,$branch,$toc,$salary_expectation,$grade,$hr_remark,$status)
	{
		$this->db->query("update candidate_interview set idate='$idate',firstname='$firstname',lastname='$lastname',gender='$gender',phone='$phone',email='$email',address='$address',branch='$branch',toc='$toc',salary_expectation='$salary_expectation',grade='$grade',hr_remark='$hr_remark',status='$status' where ci_id=$inputdata");
	}

	public function updateexperiencecandidateInterviewDetails($inputdata,$idate,$firstname,$lastname,$gender,$phone,$email,$address,$branch,$toc,$companyname,$prev_salary,$year_of_exp,$notice_period,$salary_expectation,$grade,$hr_remark,$status)
	{
		$this->db->query("update candidate_interview set idate='$idate',firstname='$firstname',lastname='$lastname',gender='$gender',phone='$phone',email='$email',address='$address',branch='$branch',toc='$toc',companyname='$companyname',prev_salary='$prev_salary',year_of_exp='$year_of_exp',notice_period='$notice_period',salary_expectation='$salary_expectation',grade='$grade',hr_remark='$hr_remark',status='$status' where ci_id=$inputdata");
	}
	

	public function dispay_all_selected_candidates()
	{
		return $this->db->query("select * from candidate_interview where status='Selected'")->result();
	}

	public function verificationcandidateDetails($vdate,$firstname,$lastname,$psphone,$address_status,$branch_status,$toc,$company_status,$sal_status,$exp_status,$hr_verification_status)
	{
		$this->db->query("insert into candidate_verification values ('','$vdate','$firstname','$lastname','$psphone','$address_status','$branch_status','$toc','$company_status','$sal_status','$exp_status','$hr_verification_status')");
	}

	public function register_new_supplier($sname,$phoneno,$address,$email,
            $aadharcardno,$myproduct,$cow_milk_cost,$buffalo_milk_cost)
	{

		$this->db->query("insert into supplier values ('','$sname','$phoneno','$address','$email','$aadharcardno','$myproduct','$cow_milk_cost','$buffalo_milk_cost')");

	}

	public function dispay_all_suppliers()
	{
		return $this->db->query("select * from supplier")->result();
	}

	public function deletesupplier($inputdata)
	{
		$this->db->query("delete from supplier where supplier_id=$inputdata");
	}

	public function dispaysupplierdataAccToId($inputdata)
	{
		return $this->db->query("select * from supplier where supplier_id=$inputdata")->result();
	}

	public function updateSupplier($inputdata,$sname,$phoneno,$address,$email,
            $aadharcardno,$myproduct,$cow_milk_cost,$buffalo_milk_cost)
	{
		$this->db->query("update supplier set sname='$sname',phoneno='$phoneno',address='$address',email='$email',aadharcardno='$aadharcardno',supply_for='$myproduct',cow_milk_cost='$cow_milk_cost',buffalo_milk_cost='$buffalo_milk_cost' where supplier_id=$inputdata");		
	}

	public function register_daily_collection3($sname,$sdate,$myproduct,$cmqty,$cmfat,$cmrate,$cbill,$bmqty,$bmfat,$bmrate,$bbill,$tbillamt)
	{
		$this->db->query("insert into dailycollection values ('','$sname','$sdate','$myproduct','$cmqty','$cmfat','$cmrate','$cbill','$bmqty','$bmfat','$bmrate','$bbill','$tbillamt')");
	}

	public function display_dailycollection()
	{
		return $this->db->query("select * from dailycollection")->result();

	}

	public function deletedailycollection($inputdata)
	{
		$this->db->query("delete from dailycollection where dc_id=$inputdata");

	}

	public function dispaydailycollectiondataAccToId($inputdata)
	{
		return $this->db->query("select * from dailycollection where dc_id=$inputdata")->result();
	}

	public function update_daily_collection($inputdata,$sname,$sdate,$myproduct,$cmqty,$cmfat,$cmrate,$cbill,$bmqty,$bmfat,$bmrate,$bbill,$tbillamt)
	{
		$this->db->query("update dailycollection set sname='$sname',sdate='$sdate',myproduct='$myproduct',cmqty='$cmqty',cmfat='$cmfat',cmrate='$cmrate',cbill='$cbill',bmqty='$bmqty',bmfat='$bmfat',bmrate='$bmrate',bbill='$bbill',tbillamt='$tbillamt' where dc_id=$inputdata");		
	}

	public function display_supplierbilldetails()
	{
		return $this->db->query("select sname,sum(cmqty) 'cmqty',sum(bmqty) 'bmqty',sum(cbill) 'cbill',sum(bbill) 'bbill',sum(tbillamt) 'tbillamt' from dailycollection group by sname")->result();
	}

	public function display_dailystock()
	{
		return $this->db->query("select sum(cmqty) 'cmqty',sum(bmqty) 'bmqty' from dailycollection")->result();
	}

	public function display_purchase_qty_details_client_cow()
	{
		return $this->db->query("select sum(qty1) 'c_cm_purchase' from client_invoice where pname1='Cow Milk' or pname2='Cow Milk'")->result();
	}

	public function display_purchase_qty_details_client_buffalo()
	{
		return $this->db->query("select sum(qty2) 'c_bm_purchase' from client_invoice where pname1='Buffalo Milk' or pname2='Buffalo Milk'")->result();
	}

	public function display_purchase_qty_details_retailer_cow()
	{
		return $this->db->query("select sum(qty1) 'r_cm_purchase' from retailer_invoice where pname1='Cow Milk' or pname2='Cow Milk'")->result();
	}

	public function display_purchase_qty_details_retailer_buffalo()
	{
		return $this->db->query("select sum(qty2) 'r_bm_purchase' from retailer_invoice where pname1='Buffalo Milk' or pname2='Buffalo Milk'")->result();
	}

	public function insertVehicleDetails($vname,$vno,$dname,$lno,$address,$phoneno,$aphoneno,$aadharcardno,$insurance,$insurance_c)
	{
		$this->db->query("insert into vehicle_details values ('','$vname','$vno','$dname','$lno','$address','$phoneno','$aphoneno','$aadharcardno','$insurance','$insurance_c')");
	}

	public function display_vehicledetails()
	{
		return $this->db->query("select * from vehicle_details")->result();
	}


	public function deletevehicledata($inputdata)
	{
		$this->db->query("delete from vehicle_details where vehicle_id=$inputdata");
	}

	public function dispayvehicledataAccToId($inputdata)
	{
		return $this->db->query("select * from vehicle_details where vehicle_id=$inputdata")->result();

	}

	public function updatevehicleDetails($inputdata,$vname,$vno,$dname,$lno,$address,$phoneno,$aphoneno,$aadharcardno,$insurance,$insurance_c)
	{
		$this->db->query("update vehicle_details set vname='$vname',vno='$vno',dname='$dname',lno='$lno',address='$address',phoneno='$phoneno',aphoneno='$aphoneno',aadharcardno='$aadharcardno',insurance='$insurance',insurance_c='$insurance_c'  where vehicle_id=$inputdata");
	}


}


?>