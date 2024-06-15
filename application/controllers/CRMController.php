
<?php

class CRMController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();// crm_chitale   database name
		$this->load->helper('url'); // use for redirect page

		$this->load->model('CRM_Model');

	}

	public function register_new_user()
	{
		
       //empid	ename	email	password	mobileno	emp_post

        if($this->input->post("userregistersubmit"))
        {
                 $ename=$this->input->post("ename");   
                 $email=$this->input->post("email");   
                 $pass=$this->input->post("pass");
                 $mobileno=$this->input->post("mobileno");
                 $emp_post=$this->input->post("emp_post");

                 
        $query=$this->db->query("select * from user_register where email='$email'");
        $row=$query->num_rows();


               if($row) // checking of existing email id
                {
                      $data['msg']="<h3 style='color:yellow'>
                                           This email already register with us
                                    </h3>";                 
                }
                else
                {

                       $query=$this->db->query("insert into user_register 
                       	      (ename,email,password,mobileno,emp_post)
                       	              values
                   ('$ename','$email','$pass','$mobileno','$emp_post')");

                        $data['msg']="<h3 style='color:white'>
                                           Employee account created successfully......
                                    </h3>";   
                } 	

 

        }// end of if registersubmit
       
        $this->load->view("User_Register",@$data); // load first before if condition



	}// end of register method


	public function login()
	{

		if($this->input->post("loginsubmit"))
        {
                  
            $email=$this->input->post("email");    
            $pass=$this->input->post("pass");  
                     
        $query=$this->db->query("select * from user_register where email='$email' and password='$pass'");

        $row=$query->num_rows();


        	if($row)
        	{
               redirect('CRMController/go_to_dashboard');
        	}
        	else
        	{
           	 $data['msg']="<h3 style='color:white'>
                      Invalid user.. You are not register with us 
                        </h3>";         
        	}

        }// end of loginsubmit button

          $this->load->view('Login',@$data); // load first
	}// end of login method 

   public function go_to_dashboard()
   {
      $this->load->view('Dashboard'); // here Dashboard is a file name
   }


   public function register_new_client()
   {

   	    if($this->input->post("registerclient"))
   	    {
           $shopname=$this->input->post("shopname");
           $cname=$this->input->post("cname");
           $mobileno=$this->input->post("mobileno");
           $emailid=$this->input->post("emailid");
           $product=$this->input->post("product");
           $shopaddress=$this->input->post("shopaddress");
          $deliveryby=$this->input->post("deliveryby");

          //code for check box


          $myproduct="";

          foreach ($product as $p) 
          {
          	$myproduct.=$p." ";
          }


          $this->CRM_Model->save_register_new_client($shopname,$cname,$mobileno,$emailid,
          	$myproduct,$shopaddress, $deliveryby);


            	 $data['msg']="<h3 style='color:white'>
                           New Client Registration done successfully...
                        </h3>";         


   	    }

   	    $this->load->view("New_Client",@$data);
   } // register_new_client

  
  public function display_new_client_data_fun()
   {
      redirect('CRMController/show_new_client_data');
   }

  
   public function show_new_client_data()
    {
      $result['data']=$this->CRM_Model->dispayallnewclient();
      $this->load->view('Display_NewClient',$result);
    }


   public function delete_new_client_data()
   {

      $inputdata=$this->input->get('id');

      $this->CRM_Model->deletenewclient($inputdata);

      redirect('CRMController/show_new_client_data');

   }

   public function update_new_client_data()
   {
       $inputdata=$this->input->get('id');

       $result['data']=$this->CRM_Model->dispayclientdataAccToId($inputdata);

       $this->load->view('Update_NewClient',$result);

       if($this->input->post('updateclientsubmit'))
       {
           $shopname=$this->input->post("shopname");
           $cname=$this->input->post("cname");
           $mobileno=$this->input->post("mobileno");
           $emailid=$this->input->post("emailid");
           $product=$this->input->post("product");
           $shopaddress=$this->input->post("shopaddress");
          $deliveryby=$this->input->post("deliveryby");

          //code for check box


          $myproduct="";

          foreach ($product as $p) 
          {
            $myproduct.=$p." ";
          }


          $this->CRM_Model->updatenewclient($inputdata,$shopname,$cname,$mobileno,$emailid,
            $myproduct,$shopaddress, $deliveryby);

          redirect('CRMController/show_new_client_data');

       }// end of if

   }

   public function insert_invoice_for_client()
   {

      if($this->input->post('submitinvoice'))
      {

        $invoicedate=$this->input->post("invoicedate");
        $companyname=$this->input->post("companyname");
        $ownername=$this->input->post("ownername");
        $deliveryaddress=$this->input->post("deliveryaddress");
        $contactno=$this->input->post("contactno");

        $pname1=$this->input->post("pname1");
        $unitprice1=$this->input->post("unitprice1");
        $qty1=$this->input->post("qty1");
        $billamt1=$this->input->post("billamt1");

        $pname2=$this->input->post("pname2");
        $unitprice2=$this->input->post("unitprice2");
        $qty2=$this->input->post("qty2");
        $billamt2=$this->input->post("billamt2");

        $pname3=$this->input->post("pname3");
        $unitprice3=$this->input->post("unitprice3");
        $qty3=$this->input->post("qty3");
        $billamt3=$this->input->post("billamt3");

        $totalbillamt=$this->input->post("totalbillamt");
        $gstamt=$this->input->post("gstamt");
        $finalbillamt=$this->input->post("finalbillamt");
        $invoicepreparedby=$this->input->post("invoicepreparedby");

        $this->CRM_Model->insertClientInvoice($invoicedate,$companyname,$ownername,$deliveryaddress,$contactno,$pname1,$unitprice1,$qty1,$billamt1,$pname2,$unitprice2,$qty2,$billamt2,$pname3,$unitprice3,$qty3,$billamt3,$totalbillamt,$gstamt,$finalbillamt,$invoicepreparedby);

        $data['msg']="<h3 style='color:white'>
                           Invoice for Client submitted successfully...
                        </h3>";     

      }

      $this->load->view('Invoice_For_Client',@$data);
   }

   public function show_client_invoice()
   {
      $result['data']=$this->CRM_Model->dispayallclientinvoice();
      $this->load->view('Display_Client_Invoice',$result);
   }

   public function delete_client_invoice()
   {
      $inputdata=$this->input->get('id');

      $this->CRM_Model->deleteclientinvoice($inputdata);

      redirect('CRMController/show_client_invoice');
   }

   public function update_client_invoice()
   {

       $inputdata=$this->input->get('id');

       $result['data']=$this->CRM_Model->dispayclientinvoiceAccToId($inputdata);

       $this->load->view('Update_ClientInvoice',$result);

       if($this->input->post('updateinvoice'))
      {

        $invoicedate=$this->input->post("invoicedate");
        $companyname=$this->input->post("companyname");
        $ownername=$this->input->post("ownername");
        $deliveryaddress=$this->input->post("deliveryaddress");
        $contactno=$this->input->post("contactno");

        $pname1=$this->input->post("pname1");
        $unitprice1=$this->input->post("unitprice1");
        $qty1=$this->input->post("qty1");
        $billamt1=$this->input->post("billamt1");

        $pname2=$this->input->post("pname2");
        $unitprice2=$this->input->post("unitprice2");
        $qty2=$this->input->post("qty2");
        $billamt2=$this->input->post("billamt2");

        $pname3=$this->input->post("pname3");
        $unitprice3=$this->input->post("unitprice3");
        $qty3=$this->input->post("qty3");
        $billamt3=$this->input->post("billamt3");

        $totalbillamt=$this->input->post("totalbillamt");
        $gstamt=$this->input->post("gstamt");
        $finalbillamt=$this->input->post("finalbillamt");
        $invoicepreparedby=$this->input->post("invoicepreparedby");

        $this->CRM_Model->updateClientInvoice($inputdata,$invoicedate,$companyname,$ownername,$deliveryaddress,$contactno,$pname1,$unitprice1,$qty1,$billamt1,$pname2,$unitprice2,$qty2,$billamt2,$pname3,$unitprice3,$qty3,$billamt3,$totalbillamt,$gstamt,$finalbillamt,$invoicepreparedby);

          redirect('CRMController/show_client_invoice');

      }

   }

   public function show_client_bill()
   {
      $result['data']=$this->CRM_Model->dispayclientbill();
      $this->load->view('Display_Client_Bill',$result);
   }

   public function register_new_retailer()
   {

      if($this->input->post("registerretailer"))
        {
           $fname=$this->input->post("fname");
           $lname=$this->input->post("lname");
           $phoneno=$this->input->post("phoneno");
           $emailid=$this->input->post("emailid");
           $address=$this->input->post("address");
           $aadharcardno=$this->input->post("aadharcardno");
           $gender=$this->input->post("gender");
           $product=$this->input->post("product");
        
          //code for check box

          $myproduct="";

          foreach ($product as $p) 
          {
            $myproduct.=$p." ";
          }

          $this->CRM_Model->save_register_new_retailer($fname,$lname,$phoneno,$emailid,$address,$aadharcardno,$gender,$myproduct);

               $data['msg']="<h3 style='color:white'>
                           New Retailer Registration done successfully...
                        </h3>";         



        }
     
      $this->load->view('New_Retailer',@$data);

   }

   public function show_all_retailer()
   {
      $result['data']=$this->CRM_Model->dispayallnewretailer();
      $this->load->view('Display_NewRetailer',$result);
   }
   
   public function delete_new_retailer_data()
   {
      $inputdata=$this->input->get('id');

      $this->CRM_Model->deletenewretailer($inputdata);

      redirect('CRMController/show_all_retailer');
   }

   public function update_new_retailer_data()
   {
       $inputdata=$this->input->get('id');

       $result['data']=$this->CRM_Model->dispayretailerdataAccToId($inputdata);

       $this->load->view('Update_NewRetailer',$result);

       if($this->input->post("updateretailer"))
        {
           $fname=$this->input->post("fname");
           $lname=$this->input->post("lname");
           $phoneno=$this->input->post("phoneno");
           $emailid=$this->input->post("emailid");
           $address=$this->input->post("address");
           $aadharcardno=$this->input->post("aadharcardno");
           $gender=$this->input->post("gender");
           $product=$this->input->post("product");
        
          //code for check box

          $myproduct="";

          foreach ($product as $p) 
          {
            $myproduct.=$p." ";
          }

          $this->CRM_Model->updatenewretailer($inputdata,$fname,$lname,$phoneno,$emailid,$address,$aadharcardno,$gender,$myproduct);

          redirect('CRMController/show_all_retailer');

        }

   }


   public function insert_invoice_for_retailer()
   {

      if($this->input->post('submitretailerinvoice'))
      {

        $invoicedate=$this->input->post("invoicedate");
        $companyname=$this->input->post("companyname");
        $ownername=$this->input->post("ownername");
        $deliveryaddress=$this->input->post("deliveryaddress");
        $contactno=$this->input->post("contactno");

        $pname1=$this->input->post("pname1");
        $unitprice1=$this->input->post("unitprice1");
        $qty1=$this->input->post("qty1");
        $billamt1=$this->input->post("billamt1");

        $pname2=$this->input->post("pname2");
        $unitprice2=$this->input->post("unitprice2");
        $qty2=$this->input->post("qty2");
        $billamt2=$this->input->post("billamt2");

        $pname3=$this->input->post("pname3");
        $unitprice3=$this->input->post("unitprice3");
        $qty3=$this->input->post("qty3");
        $billamt3=$this->input->post("billamt3");

        $totalbillamt=$this->input->post("totalbillamt");
        $gstamt=$this->input->post("gstamt");
        $finalbillamt=$this->input->post("finalbillamt");
        $invoicepreparedby=$this->input->post("invoicepreparedby");

        $this->CRM_Model->insertClientRetailer($invoicedate,$companyname,$ownername,$deliveryaddress,$contactno,$pname1,$unitprice1,$qty1,$billamt1,$pname2,$unitprice2,$qty2,$billamt2,$pname3,$unitprice3,$qty3,$billamt3,$totalbillamt,$gstamt,$finalbillamt,$invoicepreparedby);

        $data['msg']="<h3 style='color:white'>
                           Invoice for Retailer submitted successfully...
                        </h3>";     

      }

      $this->load->view('Invoice_For_Retailer',@$data);
   }

   public function show_retailer_invoice()
   {
      $result['data']=$this->CRM_Model->dispayallretailerinvoice();
      $this->load->view('Display_Retailer_Invoice',$result);
   }

   public function delete_retailer_invoice()
   {
      $inputdata=$this->input->get('id');

      $this->CRM_Model->deleteretailerinvoice($inputdata);

      redirect('CRMController/show_retailer_invoice');
   }

   public function update_retailer_invoice()
   {

       $inputdata=$this->input->get('id');

       $result['data']=$this->CRM_Model->dispayretailerinvoiceAccToId($inputdata);

       $this->load->view('Update_RetailerInvoice',$result);

       if($this->input->post('updateretailerinvoice'))
      {

        $invoicedate=$this->input->post("invoicedate");
        $companyname=$this->input->post("companyname");
        $ownername=$this->input->post("ownername");
        $deliveryaddress=$this->input->post("deliveryaddress");
        $contactno=$this->input->post("contactno");

        $pname1=$this->input->post("pname1");
        $unitprice1=$this->input->post("unitprice1");
        $qty1=$this->input->post("qty1");
        $billamt1=$this->input->post("billamt1");

        $pname2=$this->input->post("pname2");
        $unitprice2=$this->input->post("unitprice2");
        $qty2=$this->input->post("qty2");
        $billamt2=$this->input->post("billamt2");

        $pname3=$this->input->post("pname3");
        $unitprice3=$this->input->post("unitprice3");
        $qty3=$this->input->post("qty3");
        $billamt3=$this->input->post("billamt3");

        $totalbillamt=$this->input->post("totalbillamt");
        $gstamt=$this->input->post("gstamt");
        $finalbillamt=$this->input->post("finalbillamt");
        $invoicepreparedby=$this->input->post("invoicepreparedby");

        $this->CRM_Model->updateRetailerInvoice($inputdata,$invoicedate,$companyname,$ownername,$deliveryaddress,$contactno,$pname1,$unitprice1,$qty1,$billamt1,$pname2,$unitprice2,$qty2,$billamt2,$pname3,$unitprice3,$qty3,$billamt3,$totalbillamt,$gstamt,$finalbillamt,$invoicepreparedby);

          redirect('CRMController/show_retailer_invoice');

      }

   }


   public function show_retailer_bill()
   {
      $result['data']=$this->CRM_Model->dispayretailerbill();
      $this->load->view('Display_Retailer_Bill',$result);
   }

   public function register_new_emp()
   {

      if($this->input->post('submit_register_new_emp'))
      {

        $firstname=$this->input->post("firstname");
        $lastname=$this->input->post("lastname");
        $phone=$this->input->post("phone");
        $email=$this->input->post("email");
        $address=$this->input->post("address");
        $job=$this->input->post("job");
        $adharcardno=$this->input->post("adharcardno");
        $pancardno=$this->input->post("pancardno");
        $gender=$this->input->post("gender");
        $jobloc=$this->input->post("jobloc");
        $year_of_exp=$this->input->post("year_of_exp");
        $hiredate=$this->input->post("hiredate");
        $emp_blood_group=$this->input->post("emp_blood_group");
        $spouse_name=$this->input->post("spouse_name");
        $spouse_phoneno=$this->input->post("spouse_phoneno");
        $monthly_sal=$this->input->post("monthly_sal");
        $incentive=$this->input->post("incentive");
        $insurance=$this->input->post("insurance");
       
        $this->CRM_Model->insertNewEmployee($firstname,$lastname,$phone,$email,$address,$job,$adharcardno,$pancardno,$gender,$jobloc,$year_of_exp,$hiredate,$emp_blood_group,$spouse_name,$spouse_phoneno,$monthly_sal,$incentive,$insurance);

        $data['msg']="<h3 style='color:white'>
                           Employee Registered successfully...
                        </h3>";     

      }

      $this->load->view('New_Emp_Register',@$data);
   }

   public function show_employee()
   {
      $result['data']=$this->CRM_Model->dispayemployees();
      $this->load->view('Display_Employees',$result);
   }

   public function delete_employee_data()
   {
      $inputdata=$this->input->get('id');

      $this->CRM_Model->deleteemployee($inputdata);

      redirect('CRMController/show_employee');
   }

   public function update_employee_data()
   {

      $inputdata=$this->input->get('id');

       $result['data']=$this->CRM_Model->dispayemployeeAccToId($inputdata);

       $this->load->view('Update_Employee',$result);

       if($this->input->post('updateemployee'))
      {

        $firstname=$this->input->post("firstname");
        $lastname=$this->input->post("lastname");
        $phone=$this->input->post("phone");
        $email=$this->input->post("email");
        $address=$this->input->post("address");
        $job=$this->input->post("job");
        $adharcardno=$this->input->post("adharcardno");
        $pancardno=$this->input->post("pancardno");
        $gender=$this->input->post("gender");
        $jobloc=$this->input->post("jobloc");
        $year_of_exp=$this->input->post("year_of_exp");
        $hiredate=$this->input->post("hiredate");
        $emp_blood_group=$this->input->post("emp_blood_group");
        $spouse_name=$this->input->post("spouse_name");
        $spouse_phoneno=$this->input->post("spouse_phoneno");
        $monthly_sal=$this->input->post("monthly_sal");
        $incentive=$this->input->post("incentive");
        $insurance=$this->input->post("insurance");
       
        $this->CRM_Model->updateEmployee($inputdata,$firstname,$lastname,$phone,$email,$address,$job,$adharcardno,$pancardno,$gender,$jobloc,$year_of_exp,$hiredate,$emp_blood_group,$spouse_name,$spouse_phoneno,$monthly_sal,$incentive,$insurance);

          redirect('CRMController/show_employee');

      }

   }


   public function insert_purchase_details()
   {

       if($this->input->post('submit_purchase_details'))
      {

        $pdate=$this->input->post("pdate");
        $pname=$this->input->post("pname");
        $cop=$this->input->post("cop");
        $qty=$this->input->post("qty");
        $pamt=$this->input->post("pamt");
        $purchaseby=$this->input->post("purchaseby");
        $pofp=$this->input->post("pofp");
        
       
        $this->CRM_Model->insertPurchaseDetails($pdate,$pname,$cop,$qty,$pamt,$purchaseby,$pofp);

        $data['msg']="<h3 style='color:white'>
                           Purchase Details Submitted successfully...
                        </h3>";   

     }

      $this->load->view('Purchase_Details',@$data);
   }

   public function show_purchase_details()
   {
      $result['data']=$this->CRM_Model->dispaypurchase_details();
      $this->load->view('Display_Purchase_Details',$result);
   }

   public function delete_purchase_data()
   {
      $inputdata=$this->input->get('id');

      $this->CRM_Model->deletepurchasedata($inputdata);

      redirect('CRMController/show_purchase_details');
   }

   public function update_purchase_data()
   {

      $inputdata=$this->input->get('id');

       $result['data']=$this->CRM_Model->dispaypurchasedataAccToId($inputdata);

       $this->load->view('Update_Purchase_Details',$result);

       if($this->input->post('update_purchase_details'))
      {

        $pdate=$this->input->post("pdate");
        $pname=$this->input->post("pname");
        $cop=$this->input->post("cop");
        $qty=$this->input->post("qty");
        $pamt=$this->input->post("pamt");
        $purchaseby=$this->input->post("purchaseby");
        $pofp=$this->input->post("pofp");
        
       
        $this->CRM_Model->updatePurchaseDetails($inputdata,$pdate,$pname,$cop,$qty,$pamt,$purchaseby,$pofp);

        redirect('CRMController/show_purchase_details');

      }

   }

   public function candidate_interview()
   {  

      if($this->input->post('submit_candidate_interview'))
      {

        $idate=$this->input->post("idate");
        $firstname=$this->input->post("firstname");
        $lastname=$this->input->post("lastname");
        $gender=$this->input->post("gender");
        $phone=$this->input->post("phone");
        $email=$this->input->post("email");
        $address=$this->input->post("address");
        $branch=$this->input->post("branch");
        $toc=$this->input->post("toc");

        $companyname=$this->input->post("companyname");
        $prev_salary=$this->input->post("prev_salary");
        $year_of_exp=$this->input->post("year_of_exp");
        $notice_period=$this->input->post("notice_period");

        $salary_expectation=$this->input->post("salary_expectation");
        $grade=$this->input->post("grade");
        $hr_remark=$this->input->post("hr_remark");
        $status=$this->input->post("status");


        $this->CRM_Model->candidateInterviewDetails($idate,$firstname,$lastname,$gender,$phone,$email,$address,$branch,$toc,$companyname,$prev_salary,$year_of_exp,$notice_period,$salary_expectation,$grade,$hr_remark,$status);

        $data['msg']="<h3 style='color:white'>
                           Candidate Interview Details submitted successfully...
                        </h3>";     

      }

      $this->load->view('New_Candidate_Interview',@$data);

   }

   public function show_interview_screening()
   {

      $result['data']=$this->CRM_Model->dispay_interview_screening();
      $this->load->view('Display_Screening_Dashboard',$result);
      
   }

   public function show_fresher_interview_screening()
   {
      $result['data']=$this->CRM_Model->dispay_interview_screening();
      $this->load->view('Display_Fresher_Interview_Screening',$result);
   }


   public function show_exp_interview_screening()
   {
      $result['data']=$this->CRM_Model->dispay_interview_screening();
      $this->load->view('Display_Exp_Interview_Screening',$result);
   }

   public function show_exp_shot_np_interview_screening()
   {
      $result['data']=$this->CRM_Model->dispay_interview_screening();
      $this->load->view('Display_Exp_Shot_NP_Interview_Screening',$result);
   }

  
   public function delete_interview_screening()
   {
      $inputdata=$this->input->get('id');

      $t=$this->input->get('t');

      $this->CRM_Model->deleteinterviewscreening($inputdata);

      if($t=='Fresher')
      {

        redirect('CRMController/show_fresher_interview_screening');

      }

      if($t=='Experience')
      {

        redirect('CRMController/show_exp_interview_screening');

      } 

   }

   public function delete_interview_screening_short_np()
   {
      $inputdata=$this->input->get('id');

      $this->CRM_Model->deleteinterviewscreening($inputdata);

      redirect('CRMController/show_exp_shot_np_interview_screening');
   }


   public function update_interview_screening()
   {
   
      $inputdata=$this->input->get('id');

      $t=$this->input->get('t');

      $result['data']=$this->CRM_Model->dispayinterviewcadidateAccToId($inputdata);

      if($t=='Fresher')
      {

        $this->load->view('Update_Fresher_Candidate_Interview',$result);

        if($this->input->post('update_fresher_candidate_interview'))
        {

            $idate=$this->input->post("idate");
            $firstname=$this->input->post("firstname");
            $lastname=$this->input->post("lastname");
            $gender=$this->input->post("gender");
            $phone=$this->input->post("phone");
            $email=$this->input->post("email");
            $address=$this->input->post("address");
            $branch=$this->input->post("branch");
            $toc=$this->input->post("toc");

            $salary_expectation=$this->input->post("salary_expectation");
            $grade=$this->input->post("grade");
            $hr_remark=$this->input->post("hr_remark");
            $status=$this->input->post("status");


            $this->CRM_Model->updatefreshercandidateInterviewDetails($inputdata,$idate,$firstname,$lastname,$gender,$phone,$email,$address,$branch,$toc,$salary_expectation,$grade,$hr_remark,$status);

            redirect('CRMController/show_fresher_interview_screening');

        } // end of if submit update_fresher_candidate_interview


      } // end of Fresher

      if($t=='Experience')
      {

        $this->load->view('Update_Experience_Candidate_Interview',$result);

        if($this->input->post('update_experience_candidate_interview'))
        {

          $idate=$this->input->post("idate");
          $firstname=$this->input->post("firstname");
          $lastname=$this->input->post("lastname");
          $gender=$this->input->post("gender");
          $phone=$this->input->post("phone");
          $email=$this->input->post("email");
          $address=$this->input->post("address");
          $branch=$this->input->post("branch");
          $toc=$this->input->post("toc");

          $companyname=$this->input->post("companyname");
          $prev_salary=$this->input->post("prev_salary");
          $year_of_exp=$this->input->post("year_of_exp");
          $notice_period=$this->input->post("notice_period");

          $salary_expectation=$this->input->post("salary_expectation");
          $grade=$this->input->post("grade");
          $hr_remark=$this->input->post("hr_remark");
          $status=$this->input->post("status");


          $this->CRM_Model->updateexperiencecandidateInterviewDetails($inputdata,$idate,$firstname,$lastname,$gender,$phone,$email,$address,$branch,$toc,$companyname,$prev_salary,$year_of_exp,$notice_period,$salary_expectation,$grade,$hr_remark,$status);

          redirect('CRMController/show_exp_interview_screening');
 
        } // end of if submit update_experience_candidate_interview


      } // end of Experience


   } // end of update_interview_screening

   public function update_interview_screening_short_np()
   {
      $inputdata=$this->input->get('id');

      $t=$this->input->get('t');

      $result['data']=$this->CRM_Model->dispayinterviewcadidateAccToId($inputdata);

      $this->load->view('Update_Experience_Candidate_Interview',$result);

        if($this->input->post('update_experience_candidate_interview'))
        {

          $idate=$this->input->post("idate");
          $firstname=$this->input->post("firstname");
          $lastname=$this->input->post("lastname");
          $gender=$this->input->post("gender");
          $phone=$this->input->post("phone");
          $email=$this->input->post("email");
          $address=$this->input->post("address");
          $branch=$this->input->post("branch");
          $toc=$this->input->post("toc");

          $companyname=$this->input->post("companyname");
          $prev_salary=$this->input->post("prev_salary");
          $year_of_exp=$this->input->post("year_of_exp");
          $notice_period=$this->input->post("notice_period");

          $salary_expectation=$this->input->post("salary_expectation");
          $grade=$this->input->post("grade");
          $hr_remark=$this->input->post("hr_remark");
          $status=$this->input->post("status");


          $this->CRM_Model->updateexperiencecandidateInterviewDetails($inputdata,$idate,$firstname,$lastname,$gender,$phone,$email,$address,$branch,$toc,$companyname,$prev_salary,$year_of_exp,$notice_period,$salary_expectation,$grade,$hr_remark,$status);

          redirect('CRMController/show_exp_shot_np_interview_screening');
 
        }

   }


   public function show_all_selected_candidates()
   {
      $result['data']=$this->CRM_Model->dispay_all_selected_candidates();
      $this->load->view('Display_Selected_All_Interview',$result);
   }

   public function verify_selected_candidate()
   {
      $result['data']=$this->CRM_Model->dispay_all_selected_candidates();

      if($this->input->post('submit_verification_candidate'))
      {

        $vdate=$this->input->post("vdate");
        $firstname=$this->input->post("firstname");
        $lastname=$this->input->post("lastname");

        $psphone=$this->input->post("psphone");
        $address_status=$this->input->post("address_status");
        $branch_status=$this->input->post("branch_status");
        $toc=$this->input->post("toc");

        $company_status=$this->input->post("company_status");
        $sal_status=$this->input->post("sal_status");
        $exp_status=$this->input->post("exp_status");

        if($company_status=="" && $sal_status=="" && $exp_status=="")
        {
          $company_status="NA";
          $sal_status="NA";
          $exp_status="NA";
        }

        $hr_verification_status=$this->input->post("hr_verification_status");


        $query=$this->db->query("select * from candidate_interview where status='Selected' and firstname='$firstname' and lastname='$lastname'");

        $row=$query->num_rows();

        if($row==1)
        {

          $this->CRM_Model->verificationcandidateDetails($vdate,$firstname,$lastname,$psphone,$address_status,$branch_status,$toc,$company_status,$sal_status,$exp_status,$hr_verification_status);

         $result['msg']="<h3 style='color:white'>
                           Candidate Verification Details submitted successfully...
                        </h3>";   

          // echo "you can submit";
        }
        else
        {
          $result['msg']="<script>
                           alert('This Candidate is not selected after interview or not applied for interview');
                        </script>";  
          // echo "unknown employee";
        }

      }

      $this->load->view('New_Candidate_Verification',$result);
   }

   public function register_new_supplier()
   {

      if($this->input->post("registersupplier"))
        {
           $sname=$this->input->post("sname");
           $phoneno=$this->input->post("phoneno");
           $address=$this->input->post("address");
           $email=$this->input->post("email");
           $aadharcardno=$this->input->post("aadharcardno");
           $supply_for=$this->input->post("supply_for");
         
          //code for check box

          $myproduct="";

          $cow_milk_cost=0;
          $buffalo_milk_cost=0;

          foreach ($supply_for as $sf) 
          {
            $myproduct.=$sf." ";

            if($sf=="Cow Milk")
            {
              $cow_milk_cost=30;
            }

            if($sf=="Buffalo Milk")
            {
              $buffalo_milk_cost=40;
            }

          }

          // echo $myproduct;
          // echo $cow_milk_cost;
          // echo $buffalo_milk_cost;

          $this->CRM_Model->register_new_supplier($sname,$phoneno,$address,$email,
            $aadharcardno,$myproduct,$cow_milk_cost,$buffalo_milk_cost);


               $data['msg']="<h3 style='color:white'>
                           New Supplier Registration done successfully...
                        </h3>";         


        }

        $this->load->view("New_Supplier",@$data);

   }

   public function show_suppliers()
   {
      $result['data']=$this->CRM_Model->dispay_all_suppliers();
      $this->load->view('Display_NewSupplier',$result);
   }

   public function delete_new_supplier_data()
   {

      $inputdata=$this->input->get('id');

      $this->CRM_Model->deletesupplier($inputdata);
  
      redirect('CRMController/show_suppliers');

   }

   public function update_new_supplier_data()
   {

      $inputdata=$this->input->get('id');

       $result['data']=$this->CRM_Model->dispaysupplierdataAccToId($inputdata);

       $this->load->view('Update_Supplier',$result);

       if($this->input->post('updatesupplier'))
      {

           $sname=$this->input->post("sname");
           $phoneno=$this->input->post("phoneno");
           $address=$this->input->post("address");
           $email=$this->input->post("email");
           $aadharcardno=$this->input->post("aadharcardno");
           $supply_for=$this->input->post("supply_for");
         
          //code for check box

          $myproduct="";

          $cow_milk_cost=0;
          $buffalo_milk_cost=0;

          foreach ($supply_for as $sf) 
          {
            $myproduct.=$sf." ";

            if($sf=="Cow Milk")
            {
              $cow_milk_cost=30;
            }

            if($sf=="Buffalo Milk")
            {
              $buffalo_milk_cost=40;
            }

          }

       
        $this->CRM_Model->updateSupplier($inputdata,$sname,$phoneno,$address,$email,
            $aadharcardno,$myproduct,$cow_milk_cost,$buffalo_milk_cost);

        redirect('CRMController/show_suppliers');

      }

   }

   public function daily_collection()
   {

    if($this->input->post("registerdailycollection"))
        {
           $sname=$this->input->post("sname");

           $sdate=$this->input->post("sdate");

           $supply_for=$this->input->post("supply_for");
         
          //code for check box

          $myproduct="";

          $cmqty=0;
          $cmfat=0;
          $cmrate=0;

          $bmqty=0;
          $bmfat=0;
          $bmrate=0;

          $cbill=0;
          $bbill=0;

          $tbillamt=0;

          foreach ($supply_for as $sf) 
          {

            $myproduct.=$sf." ";

            if($sf=="Cow Milk")
            {

               $cmqty=$this->input->post("cmqty");
               $cmfat=$this->input->post("cmfat");
               $cmrate=$this->input->post("cmrate");

               $cbill=$cmqty*$cmrate;

               $tbillamt=$tbillamt+$cbill;
              
            }

            if($sf=="Buffalo Milk")
            {
              $bmqty=$this->input->post("bmqty");
              $bmfat=$this->input->post("bmfat");
              $bmrate=$this->input->post("bmrate");

              $bbill=$bmqty*$bmrate;

              $tbillamt=$tbillamt+$bbill;

            }

          }

            $this->CRM_Model->register_daily_collection3($sname,$sdate,$myproduct,$cmqty,$cmfat,$cmrate,$cbill,$bmqty,$bmfat,$bmrate,$bbill,$tbillamt);
           
               $data['msg']="<h3 style='color:white'>
                           Daily Collection Registration done successfully...
                        </h3>";         


        }

      $this->load->view('Daily_Collection',@$data);
   }

   public function show_dailycollection()
   {
      $result['data']=$this->CRM_Model->display_dailycollection();
      $this->load->view('Display_Daily_Collection',$result);
   }

   public function delete_dailycollection_data()
   {
      $inputdata=$this->input->get('id');

      $this->CRM_Model->deletedailycollection($inputdata);
  
      redirect('CRMController/show_dailycollection');
   }

   public function update_dailycollection_data()
   {

      $inputdata=$this->input->get('id');

      $result['data']=$this->CRM_Model->dispaydailycollectiondataAccToId($inputdata);

      $this->load->view('Update_Daily_Collection',$result);

      if($this->input->post("updatedailycollection"))
        {
           $sname=$this->input->post("sname");

           $sdate=$this->input->post("sdate");

           $supply_for=$this->input->post("supply_for");
         
          //code for check box

          $myproduct="";

          $cmqty=0;
          $cmfat=0;
          $cmrate=0;

          $bmqty=0;
          $bmfat=0;
          $bmrate=0;

          $cbill=0;
          $bbill=0;
          $tbillamt=0;

          foreach ($supply_for as $sf) 
          {

            $myproduct.=$sf." ";

            if($sf=="Cow Milk")
            {

               $cmqty=$this->input->post("cmqty");
               $cmfat=$this->input->post("cmfat");
               $cmrate=$this->input->post("cmrate");

               $cbill=$cmqty*$cmrate;

               $tbillamt=$tbillamt+$cbill;
              
            }

            if($sf=="Buffalo Milk")
            {
              $bmqty=$this->input->post("bmqty");
              $bmfat=$this->input->post("bmfat");
              $bmrate=$this->input->post("bmrate");

              $bbill=$bmqty*$bmrate;

              $tbillamt=$tbillamt+$bbill;

            }

          }

            $this->CRM_Model->update_daily_collection($inputdata,$sname,$sdate,$myproduct,$cmqty,$cmfat,$cmrate,$cbill,$bmqty,$bmfat,$bmrate,$bbill,$tbillamt);
           
            redirect('CRMController/show_dailycollection');

        }


   }

   public function show_supplier_bill_details()
   {
      $result['data']=$this->CRM_Model->display_supplierbilldetails();
      $this->load->view('Display_Supplier_Bill_Details.php',$result);
   }



   public function show_dailycollection_stock()
   {
   
      $result['data']=$this->CRM_Model->display_dailystock();


      $result['c_data_cm']=$this->CRM_Model->display_purchase_qty_details_client_cow();
      $result['c_data_bm']=$this->CRM_Model->display_purchase_qty_details_client_buffalo();


      $result['r_data_cm']=$this->CRM_Model->display_purchase_qty_details_retailer_cow();
      $result['r_data_bm']=$this->CRM_Model->display_purchase_qty_details_retailer_buffalo();
      

      $this->load->view('Display_Milk_Stock',$result);
   
   }


   public function vehicle_registration()
   {

      if($this->input->post('submit_vehicle_details'))
      {

        $vname=$this->input->post("vname");
        $vno=$this->input->post("vno");
        $dname=$this->input->post("dname");
        $lno=$this->input->post("lno");
        $address=$this->input->post("address");
        $phoneno=$this->input->post("phoneno");
        $aphoneno=$this->input->post("aphoneno");
        $aadharcardno=$this->input->post("aadharcardno");
        $insurance=$this->input->post("insurance");
        $insurance_c=$this->input->post("insurance_c");
          
       
        $this->CRM_Model->insertVehicleDetails($vname,$vno,$dname,$lno,$address,$phoneno,$aphoneno,$aadharcardno,$insurance,$insurance_c);

        $data['msg']="<h3 style='color:white'>
                           Vehicle Details Submitted successfully...
                        </h3>";   

     }

      $this->load->view('vehicle_registration',@$data);

   }


   public function show_vehicle_detail()
   {
      $result['data']=$this->CRM_Model->display_vehicledetails();
      $this->load->view('Display_Vehicle_Details.php',$result);  
   }


   public function delete_vehicle_data()
   {
      $inputdata=$this->input->get('id');

      $this->CRM_Model->deletevehicledata($inputdata);

      redirect('CRMController/show_vehicle_detail');
   }

   public function update_vehicle_data()
   {

      $inputdata=$this->input->get('id');

       $result['data']=$this->CRM_Model->dispayvehicledataAccToId($inputdata);

       $this->load->view('Update_Vehicle_Details',$result);

       if($this->input->post('update_vehicle_details'))
      {

        $vname=$this->input->post("vname");
        $vno=$this->input->post("vno");
        $dname=$this->input->post("dname");
        $lno=$this->input->post("lno");
        $address=$this->input->post("address");
        $phoneno=$this->input->post("phoneno");
        $aphoneno=$this->input->post("aphoneno");
        $aadharcardno=$this->input->post("aadharcardno");
        $insurance=$this->input->post("insurance");
        $insurance_c=$this->input->post("insurance_c");
          
       
        $this->CRM_Model->updatevehicleDetails($inputdata,$vname,$vno,$dname,$lno,$address,$phoneno,$aphoneno,$aadharcardno,$insurance,$insurance_c);

        redirect('CRMController/show_vehicle_detail');

      }

   }


   public function show_vehicle_status()
   {

   }




 // ----------------------------------------



   public function emp_attendance()
   {
      $result['data']=$this->CRM_Model->dispayemployees();
      $this->load->view('Attendance',$result);
   }

   public function show_day_book()
   {
      $this->load->view('DayBook');
   }


}// end of class

?>

