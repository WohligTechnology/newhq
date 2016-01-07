<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class User_model extends CI_Model
{
	protected $id,$username ,$password;
	public function validate($username,$password )
	{
		
		$password=md5($password);
		$query ="SELECT `user`.`id`,`user`.`name` as `name`,`email`,`user`.`accesslevel`,`accesslevel`.`name` as `access` FROM `user`
		INNER JOIN `accesslevel` ON `user`.`accesslevel` = `accesslevel`.`id` 
		WHERE `email` LIKE '$username' AND `password` LIKE '$password' AND `status`=1 AND `isblock`=0 AND `accesslevel` IN (1,2,3,5)";
		$row =$this->db->query( $query );
		if ( $row->num_rows() > 0 ) {
			$row=$row->row();
			$this->id= $row->id;
			$this->name = $row->name;
			$this->email = $row->email;
			$newdata        = array(
				'id' => $this->id,
				'email' => $this->email,
				'name' => $this->name ,
				'accesslevel' => $row->accesslevel ,
				'logged_in' => 'true',
			);
			$this->session->set_userdata( $newdata );
            
            
            
            // CHECK FIRST LOGIN
            
           
			return true;
		} //count( $row_array ) == 1
		else
			return false;
	}

    public function checkfirstlogin($id){
        
//        $this->db->query(" UPDATE `user` SET `isfirst`='1' WHERE `id`='$this->id'")
        $query=$this->db->query("SELECT `isfirst` FROM `user` WHERE `id`='$id'")->row();
        if($query->isfirst==1){
            return false;
        }
        else{
            return true;
        }
    } 
    public function makeuserold($id){
  $this->db->query(" UPDATE `user` SET `isfirst`='1' WHERE `id`='$id'");
    }
	
	
	public function create($name,$email,$password,$accesslevel,$status,$socialid,$logintype,$image,$json,$username,$gender,$age,$maritalstatus,$designation,$department,$noofyearsinorganization,$spanofcontrol,$description,$employeeid,$branch,$language,$team,$salary)
	{
		$data  = array(
			'name' => $name,
			'email' => $email,
			'password' =>md5($password),
			'accesslevel' => $accesslevel,
			'status' => $status,
            'socialid'=> $socialid,
            'image'=> $image,
            'json'=> $json,
			'username' => $username,
			'gender' => $gender,
			'age' => $age,
			'maritalstatus' => $maritalstatus,
			'designation' => $designation,
			'department' => $department,
			'noofyearsinorganization' => $noofyearsinorganization,
			'spanofcontrol' => $spanofcontrol,
			'description' => $description,
			'employeeid' => $employeeid,
			'branch' => $branch,
			'language' => $language,
			'team' => $team,
			'salary' => $salary
		);
		$query=$this->db->insert( 'user', $data );
		$id=$this->db->insert_id();
        
		if(!$query)
			return  0;
		else
			return  1;
	}
    
	function viewusers($startfrom,$totallength)
	{
		$user = $this->session->userdata('accesslevel');
		$query="SELECT DISTINCT `user`.`id` as `id`,`user`.`firstname` as `firstname`,`user`.`lastname` as `lastname`,`accesslevel`.`name` as `accesslevel`	,`user`.`email` as `email`,`user`.`contact` as `contact`,`user`.`status` as `status`,`user`.`accesslevel` as `access`
		FROM `user`
	   INNER JOIN `accesslevel` ON `user`.`accesslevel`=`accesslevel`.`id`  ";
	   $accesslevel=$this->session->userdata('accesslevel');
	   if($accesslevel==1)
		{
			$query .= " ";
		}
		else if($accesslevel==2)
		{
			$query .= " WHERE `user`.`accesslevel`> '$accesslevel' ";
		}
		
	   $query.=" ORDER BY `user`.`id` ASC LIMIT $startfrom,$totallength";
		$query=$this->db->query($query)->result();
        
        $return=new stdClass();
        $return->query=$query;
        $return->totalcount=$this->db->query("SELECT count(*) as `totalcount` FROM `user`
	   INNER JOIN `accesslevel` ON `user`.`accesslevel`=`accesslevel`.`id`  ")->row();
        $return->totalcount=$return->totalcount->totalcount;
		return $return;
	}
	public function beforeedit( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'user' )->row();
		return $query;
	}
	
	public function edit($id,$name,$email,$password,$accesslevel,$status,$socialid,$logintype,$image,$json,$username,$gender,$age,$maritalstatus,$designation,$department,$noofyearsinorganization,$spanofcontrol,$description,$employeeid,$branch,$timestamp,$language,$team,$salary)
	{
		$data  = array(
			'name' => $name,
			'email' => $email,
			'accesslevel' => $accesslevel,
			'status' => $status,
            'socialid'=> $socialid,
            'image'=> $image,
            'json'=> $json,
			'logintype' => $logintype,
			'username' => $username,
			'gender' => $gender,
			'age' => $age,
			'maritalstatus' => $maritalstatus,
			'designation' => $designation,
			'department' => $department,
			'noofyearsinorganization' => $noofyearsinorganization,
			'spanofcontrol' => $spanofcontrol,
			'description' => $description,
			'employeeid' => $employeeid,
			'branch' => $branch,
			'timestamp' => $timestamp,
			'language' => $language,
			'team' => $team,
			'salary' => $salary
		);
		if($password != "")
			$data['password'] =md5($password);
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'user', $data );
        
		return 1;
	}
    
	public function getuserimagebyid($id)
	{
		$query=$this->db->query("SELECT `image` FROM `user` WHERE `id`='$id'")->row();
		return $query;
	}
	function deleteuser($id)
	{
		$query=$this->db->query("DELETE FROM `user` WHERE `id`='$id'");
	}
	function changepassword($id,$password)
	{
		$data  = array(
			'password' =>md5($password),
		);
		$this->db->where('id',$id);
		$query=$this->db->update( 'user', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}
    
    public function getuserdropdown()
	{
		$query=$this->db->query("SELECT * FROM `user`  ORDER BY `id` ASC")->result();
		$return=array(
		"" => ""
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}  
    public function getcheckdropdown()
	{
		
		$return=array(
		"1" => "Organization",
		"2" => "Branch",
		"3" => "Department",
		"4" => "Team"
		);
		
		return $return;
	}
    public function getscheduledropdown()
	{
		
		$return=array(
		"1" => "Per Day",
		"2" => "Per Two Days",
		"3" => "Per Three Days",
		"4" => "Per Four Days",
		"5" => "Per Five Days",
		"6" => "Per Six Days",
		"7" => "Per week",
		"14" => "Per two week",
		"21" => "Per three week",
		"30" => "Per month"
		);
		
		return $return;
	}
    
	public function getaccesslevels()
	{
		$return=array();
		$query=$this->db->query("SELECT * FROM `accesslevel` ORDER BY `id` ASC")->result();
		$accesslevel=$this->session->userdata('accesslevel');
			foreach($query as $row)
			{
				if($accesslevel==1)
				{
					$return[$row->id]=$row->name;
				}
				else if($accesslevel==2)
				{
					if($row->id > $accesslevel)
					{
						$return[$row->id]=$row->name;
					}
				}
				else if($accesslevel==3)
				{
					if($row->id > $accesslevel)
					{
						$return[$row->id]=$row->name;
					}
				}
				else if($accesslevel==4)
				{
					if($row->id == $accesslevel)
					{
						$return[$row->id]=$row->name;
					}
				}
			}
	
		return $return;
	}
    public function getstatusdropdown()
	{
		$query=$this->db->query("SELECT * FROM `statuses`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	} 
	public function getteamdropdown()
	{
		$query=$this->db->query("SELECT * FROM `hq_team`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}

	  public function getmaritalstatustypedropdown()
	{
		$maritalstatus=array(
            ""=>"Choose Marital Status",
			"0"=>"Unmarried",
			"1"=>"Married"
		);

		
		return $maritalstatus;
	}
	public function getgendertypedropdown()
	{
		$gender=array(
			""=>"Choose Gender",
			"0"=>"Male",
			"1"=>"Female" 
		);

		
		return $gender;
	} 	
	public function getlanguagetypedropdown()
	{
		$language=array(
			"0"=>"English"
		);

		
		return $language;
	} 
	public function getdesignationtypedropdown()
	{
		$query=$this->db->query("SELECT * FROM `hq_designation`  ORDER BY `id` ASC")->result();
		$return=array(
            ""=>"Choose Designation"
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	} 
	public function getdepartmenttypedropdown()
	{
		$query=$this->db->query("SELECT * FROM `hq_department`  ORDER BY `id` ASC")->result();
		$return=array(
            ""=>"Choose Department"
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
	public function getbranchtypedropdown()
	{
		$query=$this->db->query("SELECT * FROM `hq_branch`  ORDER BY `id` ASC")->result();
		$return=array(
            ""=>"Choose Branch"
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
	
	
	function changestatus($id)
	{
		$query=$this->db->query("SELECT `status` FROM `user` WHERE `id`='$id'")->row();
		$status=$query->status;
		if($status==1)
		{
			$status=0;
		}
		else if($status==0)
		{
			$status=1;
		}
		$data  = array(
			'status' =>$status,
		);
		$this->db->where('id',$id);
		$query=$this->db->update( 'user', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}
	function editaddress($id,$address,$city,$pincode)
	{
		$data  = array(
			'address' => $address,
			'city' => $city,
			'pincode' => $pincode,
		);
		
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'user', $data );
		if($query)
		{
			$this->saveuserlog($id,'User Address Edited');
		}
		return 1;
	}
	
	function saveuserlog($id,$status)
	{
//		$fromuser = $this->session->userdata('id');
		$data2  = array(
			'onuser' => $id,
			'status' => $status
		);
		$query2=$this->db->insert( 'userlog', $data2 );
        $query=$this->db->query("UPDATE `user` SET `status`='$status' WHERE `id`='$user'");
	}
    function signup($email,$password) 
    {
         $password=md5($password);   
        $query=$this->db->query("SELECT `id` FROM `user` WHERE `email`='$email' ");
        if($query->num_rows == 0)
        {
            $this->db->query("INSERT INTO `user` (`id`, `firstname`, `lastname`, `password`, `email`, `website`, `description`, `eventinfo`, `contact`, `address`, `city`, `pincode`, `dob`, `accesslevel`, `timestamp`, `facebookuserid`, `newsletterstatus`, `status`,`logo`,`showwebsite`,`eventsheld`,`topeventlocation`) VALUES (NULL, NULL, NULL, '$password', '$email', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP, NULL, NULL, NULL,NULL, NULL, NULL,NULL);");
            $user=$this->db->insert_id();
            $newdata = array(
                'email'     => $email,
                'password' => $password,
                'logged_in' => true,
                'id'=> $user
            );

            $this->session->set_userdata($newdata);
            
          //  $queryorganizer=$this->db->query("INSERT INTO `organizer`(`name`, `description`, `email`, `info`, `website`, `contact`, `user`) VALUES(NULL,NULL,NULL,NULL,NULL,NULL,'$user')");
            
            
           return $user;
        }
        else
         return false;
        
        
    }
    function login($email,$password) 
    {
        $password=md5($password);
        $query=$this->db->query("SELECT `id` FROM `user` WHERE `email`='$email' AND `password`= '$password'");
        if($query->num_rows > 0)
        {
            $user=$query->row();
            $user=$user->id;
            

            $newdata = array(
                'email'     => $email,
                'password' => $password,
                'logged_in' => true,
                'id'=> $user
            );

            $this->session->set_userdata($newdata);
            //print_r($newdata);
            return $user;
        }
        else
        return false;


    }
    function authenticate() {
        $is_logged_in = $this->session->userdata( 'logged_in' );
        //print_r($is_logged_in);
        if ( $is_logged_in !== 'true' || !isset( $is_logged_in ) ) {
            return false;
        } //$is_logged_in !== 'true' || !isset( $is_logged_in )
        else {
            $userid = $this->session->userdata( 'id' );
         return $userid;
        }
    }
    
    function frontendauthenticate($email,$password) 
    {
        $query=$this->db->query("SELECT `id`, `name`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json` FROM `user` WHERE `email` LIKE '$email' AND `password`='$password' LIMIT 0,1");
        if ($query->num_rows() > 0)
        {
        	$query=$query->row();
            $data['user']=$query;
            $id=$query->id;
            $status=$query->status;
            if($status==3)
            {
//                $updatequery=$this->db->query("UPDATE `user` SET `status`=4 WHERE `id`='$id'");
                $status=4;
//                if($updatequery)
//                {
                    $this->saveuserlog($id,$status);
//                }
            }
            else if($status==1)
            {
                $status=2;
//                $updatequery=$this->db->query("UPDATE `user` SET `status`=2 WHERE `id`='$id'");
//                if($updatequery)
//                {
                    $this->saveuserlog($id,$status);
//                }
            }
            
        $query2=$this->db->query("SELECT `id`, `name`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json` FROM `user` WHERE `id`='$id' LIMIT 0,1")->row();
            
        $newdata        = array(
				'id' => $query2->id,
				'email' => $query2->email,
				'name' => $query2->name ,
				'accesslevel' => $query2->accesslevel ,
				'status' => $query2->status ,
				'logged_in' => 'true',
			);
			$this->session->set_userdata( $newdata );
            
            
            $accesslevel=$query->accesslevel;
            if($accesslevel==2)
            {
            $data['category']=$this->db->query("SELECT `id`,`categoryid`,`operatorid` FROM `operatorcategory` WHERE `operatorid`='$id'")->result();
            }
        	return $data;
        }
        else 
        {
        	return false;
        }
    }
    
    function frontendregister($name,$email,$password,$socialid,$logintype,$json) 
    {
        $data  = array(
			'name' => $name,
			'email' => $email,
			'password' =>md5($password),
			'accesslevel' => 3,
			'status' => 2,
            'socialid'=> $socialid,
            'json'=> $json,
			'logintype' => $logintype
		);
		$query=$this->db->insert( 'user', $data );
		$id=$this->db->insert_id();
        $queryselect=$this->db->query("SELECT * FROM `user` WHERE `id` LIKE '$id' LIMIT 0,1")->row();
        
        $accesslevel=$queryselect->accesslevel;
//        $queryselect=$query;
        $data1['user']=$queryselect;
        if($accesslevel==2)
        {
            $data1['category']=$this->db->query("SELECT `id`,`categoryid`,`operatorid` FROM `operatorcategory` WHERE `operatorid`='$id'")->result();
        }
        return $data1;
    }
    
	function getallinfoofuser($id)
	{
		$user = $this->session->userdata('accesslevel');
		$query="SELECT DISTINCT `user`.`id` as `id`,`user`.`firstname` as `firstname`,`user`.`lastname` as `lastname`,`accesslevel`.`name` as `accesslevel`	,`user`.`email` as `email`,`user`.`contact` as `contact`,`user`.`status` as `status`,`user`.`accesslevel` as `access`
		FROM `user`
	   INNER JOIN `accesslevel` ON `user`.`accesslevel`=`accesslevel`.`id` 
       WHERE `user`.`id`='$id'";
		$query=$this->db->query($query)->row();
		return $query;
	}
    
	public function getlogintypedropdown()
	{
		$query=$this->db->query("SELECT * FROM `logintype`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
    
	public function frontendlogout($user)
	{
        $query=$this->db->query("SELECT `id`, `name`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json` FROM `user` WHERE `id`='$user' LIMIT 0,1")->row();
        $status=$query->status;
        if($status==4)
        {
            $status=3;
//            $updatequery=$this->db->query("UPDATE `user` SET `status`=3 WHERE `id`='$user'");
//            if($updatequery)
//            {
                $this->saveuserlog($id,$status);
//            }
        }
        else if($status==2)
        {
            $status=1;
//            $updatequery=$this->db->query("UPDATE `user` SET `status`=1 WHERE `id`='$user'");
//            if($updatequery)
//            {
                $this->saveuserlog($id,$status);
//            }
        }
//        $updatequery=$this->db->query("UPDATE `user` SET `status`=5 WHERE `id`='$user'");
        
//        if(!$updatequery)
//            return 0;
//        else
//        {
            
		$this->session->sess_destroy();
            return 1;
//        }
	}
	
    function sociallogin($user_profile,$provider)
    {
        $query=$this->db->query("SELECT * FROM `user` WHERE `user`.`socialid`='$user_profile->identifier'");
        if($query->num_rows == 0)
        {

					$googleid="";
					$facebookid="";
					$twitterid="";
					switch($provider)
					{
						case "Google":
						$googleid=$user_profile->identifier;
						break;
						case "Facebook":
						$facebookid=$user_profile->identifier;
						break;
						case "Twitter":
						$twitterid=$user_profile->identifier;
						break;
					}

            $query2=$this->db->query("INSERT INTO `user` (`id`, `name`, `password`, `email`, `accesslevel`, `timestamp`, `status`, `image`, `username`, `socialid`, `logintype`, `json`, `dob`, `street`, `address`, `city`, `state`, `country`, `pincode`, `facebook`, `google`, `twitter`) VALUES (NULL, '$user_profile->displayName', '', '$user_profile->email', '3', CURRENT_TIMESTAMP, '1', '$user_profile->photoURL', '', '$user_profile->identifier', '$provider', '', '$user_profile->birthYear-$user_profile->birthMonth-$user_profile->birthDay', '', '$user_profile->address,$user_profile->region', '$user_profile->city', '', '$user_profile->country', '', '$facebookid', '$googleid', '$twitterid')");
            $id=$this->db->insert_id();
            $newdata = array(
                'email'     => $user_profile->email,
                'password' => "",
                'logged_in' => true,
                'id'=> $id,
                'name'=> $user_profile->displayName,
                'image'=> $user_profile->photoURL,
                'logintype'=>$provider
            );

            $this->session->set_userdata($newdata);

            return $newdata;

        }
        else
        {
            $query=$query->row();
            $newdata = array(
                'email'     => $user_profile->email,
                'password' => "",
                'logged_in' => true,
                'id'=> $query->id,
                'name'=> $user_profile->displayName,
                'image'=> $user_profile->photoURL,
                'logintype'=>$provider
            );

            $this->session->set_userdata($newdata);

            return $newdata;
        }
    }
    
    //avinash function
    
    
	public function createbycsv($file)
	{
        foreach ($file as $row)
        {
            $name=$row['name'];
            $email=$row['email'];
            $username=$row['username'];
            $gender=$row['gender'];
            $dob=$row['dob'];
            $maritalstatus=$row['maritalstatus'];
            $designation=$row['designation'];
            $department=$row['department'];
            $experience=$row['experience'];
            $spanofcontrol=$row['spanofcontrol'];
            $employeeid=$row['employeeid'];
            $branch=$row['branch'];
            $team=$row['team'];
            $language=$row['language'];

            $from = new DateTime($dob);
            $to   = new DateTime('today');
            $calculatedage=$from->diff($to)->y;
            
            $age=$calculatedage;
            
            if(strtolower($maritalstatus)=='Unmarried')
            {
                $maritalstatus=1;
            }
            else if(strtolower($maritalstatus)=='Married')
            {
                $maritalstatus=2;
            }
            if(strtolower($gender)=='M')
            {
                $gender=1;
            }
            else if(strtolower($gender)=='F')
            {
                $gender=2;
            }
            
        
            $designationquery=$this->db->query("SELECT * FROM `hq_designation` WHERE `name`LIKE '$designation'")->row();
            if(empty($designationquery))
            {
                $this->db->query("INSERT INTO `hq_designation`(`name`) VALUES ('$designation')");
                $designation=$this->db->insert_id();
            }
            else
            {
                $designation=$designationquery->id;
            }
            
        
            $departmentquery=$this->db->query("SELECT * FROM `hq_department` WHERE `name`LIKE '$department'")->row();
            if(empty($departmentquery))
            {
                $this->db->query("INSERT INTO `hq_department`(`name`) VALUES ('$department')");
                $department=$this->db->insert_id();
            }
            else
            {
                $department=$departmentquery->id;
            }
            
            $branchquery=$this->db->query("SELECT * FROM `hq_branch` WHERE `name`LIKE '$branch'")->row();
            if(empty($branchquery))
            {
                $this->db->query("INSERT INTO `hq_branch`(`name`) VALUES ('$branch')");
                $branch=$this->db->insert_id();
            }
            else
            {
                $branch=$branchquery->id;
            }
            
            $teamquery=$this->db->query("SELECT * FROM `hq_team` WHERE `name`LIKE '$team'")->row();
            if(empty($teamquery))
            {
                $this->db->query("INSERT INTO `hq_team`(`name`) VALUES ('$team')");
                $team=$this->db->insert_id();
            }
            else
            {
                $team=$teamquery->id;
            }
            
		$data  = array(
			'name' => $name,
			'email' => $email,
			'accesslevel' => 4,
			'status' => 1,
			'username' => $username,
			'gender' => $gender,
			'age' => $age,
			'maritalstatus' => $maritalstatus,
			'designation' => $designation,
			'department' => $department,
			'noofyearsinorganization' => $experience,
			'spanofcontrol' => $spanofcontrol,
			'employeeid' => $employeeid,
			'branch' => $branch,
			'language' => 0,
			'team' => $team
		);
		$query=$this->db->insert( 'user', $data );
		$id=$this->db->insert_id();
         
            
        }
			return  1;
	}
}
?>