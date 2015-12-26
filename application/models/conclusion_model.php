<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class conclusion_model extends CI_Model
{
public function create($order,$name)
{
$data=array("order" => $order,"name" => $name);
$query=$this->db->insert( "hq_conclusion", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("hq_conclusion")->row();
return $query;
}
function getsingleconclusion($id){
$this->db->where("id",$id);
$query=$this->db->get("hq_conclusion")->row();
return $query;
}
public function edit($id,$order,$name)
{
$data=array("order" => $order,"name" => $name);
$this->db->where( "id", $id );
$query=$this->db->update( "hq_conclusion", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `hq_conclusion` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `hq_conclusion` WHERE `id`='$id'")->row();
return $query;
}
    public function getConclusionDropDown()
	{
		$query=$this->db->query("SELECT * FROM `hq_conclusion`  ORDER BY `id` ASC")->result();
		$return=array(
		"" => "Choose Conclusion"
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	
}
}
?>
