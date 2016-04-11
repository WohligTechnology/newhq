<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Test_model extends CI_Model
{
	
	
	public function create($name,$schedule,$units,$startdate,$designation,$department,$branch,$team,$check)
	{
        $startdate = new DateTime($startdate);
        $startdate = $startdate->format('Y-m-d');
		$data  = array(
				'name' => $name,
			'schedule' => $schedule,
			'units' => $units,
			'startdate' => $startdate,
            'designation'=> $designation,
            'department'=> $department,
            'branch'=> $branch,
			'team' => $team,
			'check' => $check
		);
		$query=$this->db->insert( 'test', $data );
		$id=$this->db->insert_id();
        
		if(!$query)
			return  0;
		else
			return  1;
	}
    

	public function beforeedit( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'test' )->row();
		return $query;
	}
	
	public function edit($id,$name,$schedule,$units,$startdate,$designation,$department,$branch,$team,$check,$timestamp)
	{
        $startdate = new DateTime($startdate);
        $startdate = $startdate->format('Y-m-d');
		$data  = array(
			'name' => $name,
			'schedule' => $schedule,
			'units' => $units,
			'startdate' => $startdate,
            'designation'=> $designation,
            'department'=> $department,
            'branch'=> $branch,
			'team' => $team,
			'check' => $check,
			'timestamp' => $timestamp
		);
        $this->db->where( "id", $id );
        $query=$this->db->update( "test", $data );
        
        
        //CURL COMMAND FOR STARTDATE
        
        $this->load->helper('url');
        $mainurl=$this->config->base_url();
        $exactpathforcredential=$mainurl.'/index.php/json/StartPackage?date='.$startdate;
    
      // GET CURL
        $ch = curl_init();  
        $url=$exactpathforcredential;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
      curl_setopt($ch,CURLOPT_HEADER, false); 
        $output=curl_exec($ch);
        curl_close($ch);
        
        // CURL ENDS HERE
        
        return 1;
	
	}
 public function delete($id)
{
$query=$this->db->query("DELETE FROM `test` WHERE `id`='$id'");
return $query;
}
     public function gettestdropdown()
	{
		$query=$this->db->query("SELECT * FROM `test`  ORDER BY `id` ASC")->result();
		$return=array(
		"" => ""
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	} 
    
    public function gettestdatabyid($testid)
    {
        $query=$this->db->query("SELECT `id`, `name`, `units`, `schedule`, `startdate`, `department`, `branch`, `designation`, `check`, `team`, `timestamp`, `enddate` FROM `test` WHERE `id`='$testid'")->row();
        return $query;
    }
}
?>