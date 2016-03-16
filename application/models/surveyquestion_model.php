<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class surveyquestion_model extends CI_Model
{
public function create($type,$survey,$starttime,$endtime,$content)
{
$data=array("type" => $type,"survey" => $survey,"starttime" => $starttime,"endtime" => $endtime,"content" => $content);
$query=$this->db->insert( "hq_surveyquestion", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("hq_surveyquestion")->row();
return $query;
}
function getsinglesurveyquestion($id){
$this->db->where("id",$id);
$query=$this->db->get("hq_surveyquestion")->row();
return $query;
}
  
public function edit($id,$type,$survey,$starttime,$endtime,$content)
{
    $data=array("type" => $type,"survey" => $survey,"starttime" => $starttime,"endtime" => $endtime,"content" => $content);
$this->db->where( "id", $id );
$query=$this->db->update( "hq_surveyquestion", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `hq_surveyquestion` WHERE `id`='$id'");
return $query;
}
public function getimagebyid($id)
{
$query=$this->db->query("SELECT `image` FROM `hq_surveyquestion` WHERE `id`='$id'")->row();
return $query;
}
public function getsurveyquestiondropdown()
{
$query=$this->db->query("SELECT * FROM `hq_surveyquestion`  ORDER BY `id` ASC")->result();
$return=array(
"" => "Choose Question"
);
foreach($query as $row)
{
  $return[$row->id]=$row->content;
}

return $return;
}
public function gettypedropdown()
{
    $return=array(
    "" => "Choose Type",
    "1" => "Text",
    "2" => "Paragraph text",
    "3" => "Multiple choice",
    "4" => "Drop Down",
    "5" => "Radio Button",
    );
    return $return;
}
    public function getisrequireddropdown()
{
    $return=array(
    "" => "Select if required",
    "1" => "Required",
    "2" => "Not Required"
    );
    return $return;
}
    public function newsurveysubmit($surveyname,$surveydescription,$question1,$question2,$question3,$question4,$question5,$question6,$question7,$question8,$question9,$question10,$type1,$type2,$type3,$type4,$type5,$type6,$type7,$type8,$type9,$type10,$required1,$required2,$required3,$required4,$required5,$required6,$required7,$required8,$required9,$required10,$message)
    {
        $data=array("conclusion" => $surveyname,"conclusionsuggestion" => $surveydescription,"message" => $message);
        $query=$this->db->insert( "hq_conclusionfinalsuggestion", $data );
        $surveyid=$this->db->insert_id();
        
        // survey created now
        
        // create questions
        
        //question1
        $data=array("type" => $type1,"survey" => $surveyid,"content" => $question1,"isrequired" => $required1);
        $query=$this->db->insert( "hq_surveyquestion", $data );
        $question1id=$this->db->insert_id();
        
        //question2
        $data=array("type" => $type2,"survey" => $surveyid,"content" => $question2,"isrequired" => $required2);
        $query=$this->db->insert( "hq_surveyquestion", $data );
        $question2id=$this->db->insert_id();
        
        //question3
        $data=array("type" => $type3,"survey" => $surveyid,"content" => $question3,"isrequired" => $required3);
        $query=$this->db->insert( "hq_surveyquestion", $data );
        $question3id=$this->db->insert_id();
        
        //question4
        $data=array("type" => $type4,"survey" => $surveyid,"content" => $question4,"isrequired" => $required4);
        $query=$this->db->insert( "hq_surveyquestion", $data );
        $question4id=$this->db->insert_id();
        
        //question5
        $data=array("type" => $type5,"survey" => $surveyid,"content" => $question5,"isrequired" => $required5);
        $query=$this->db->insert( "hq_surveyquestion", $data );
        $question5id=$this->db->insert_id();
        
        //question6
        $data=array("type" => $type6,"survey" => $surveyid,"content" => $question6,"isrequired" => $required6);
        $query=$this->db->insert( "hq_surveyquestion", $data );
        $question6id=$this->db->insert_id();
        
        //question7
        $data=array("type" => $type7,"survey" => $surveyid,"content" => $question7,"isrequired" => $required7);
        $query=$this->db->insert( "hq_surveyquestion", $data );
        $question7id=$this->db->insert_id();
        
        //question8
        $data=array("type" => $type8,"survey" => $surveyid,"content" => $question8,"isrequired" => $required8);
        $query=$this->db->insert( "hq_surveyquestion", $data );
        $question8id=$this->db->insert_id();
        
        //question9
        $data=array("type" => $type9,"survey" => $surveyid,"content" => $question9,"isrequired" => $required9);
        $query=$this->db->insert( "hq_surveyquestion", $data );
        $question9id=$this->db->insert_id();
        
        //question10
        $data=array("type" => $type10,"survey" => $surveyid,"content" => $question10,"isrequired" => $required10);
        $query=$this->db->insert( "hq_surveyquestion", $data );
        $question10id=$this->db->insert_id();
        
        
    } 
    public function editsurveysubmit($surveyname,$surveydescription,$question1,$question2,$question3,$question4,$question5,$question6,$question7,$question8,$question9,$question10,$type1,$type2,$type3,$type4,$type5,$type6,$type7,$type8,$type9,$type10,$required1,$required2,$required3,$required4,$required5,$required6,$required7,$required8,$required9,$required10,$message,$surveyid,$question1id,$question2id,$question3id,$question4id,$question5id,$question6id,$question7id,$question8id,$question9id,$question10id)
    {        
          $data=array("conclusion" => $surveyname,"conclusionsuggestion" => $surveydescription,"message" => $message);
          $this->db->where( "id", $surveyid );
          $query=$this->db->update( "hq_conclusionfinalsuggestion", $data );
        // survey updated now
//        
//        $getsurveyquestionid=$this->db->query("SELECT * FROM `hq_surveyquestion` WHERE `survey`='$surveyid'")->result();
//            foreach($getsurveyquestionid as $questionid)
//            {
//                for($i=1; $i<=10 ; $i++)
//                {
//                     $data=array("type" => $type1,"survey" => $surveyid,"content" => $question1,"isrequired" => $required1);
//                     $query=$this->db->insert( "hq_surveyquestion", $data );
//                     $question.$i.id=$this->db->insert_id();
//                }
//            }
//        // create questions
        
        //question1
        $data=array("type" => $type1,"survey" => $surveyid,"content" => $question1,"isrequired" => $required1);
        $this->db->where( "id", $question1id );
          $query=$this->db->update( "hq_surveyquestion", $data );
        
        //question2
        $data=array("type" => $type2,"survey" => $surveyid,"content" => $question2,"isrequired" => $required2);
        $this->db->where( "id", $question2id );
          $query=$this->db->update( "hq_surveyquestion", $data );
        
        //question3
        $data=array("type" => $type3,"survey" => $surveyid,"content" => $question3,"isrequired" => $required3);
        $this->db->where( "id", $question3id );
          $query=$this->db->update( "hq_surveyquestion", $data );
        
        //question4
        $data=array("type" => $type4,"survey" => $surveyid,"content" => $question4,"isrequired" => $required4);
        $this->db->where( "id", $question4id );
          $query=$this->db->update( "hq_surveyquestion", $data );
        
        //question5
        $data=array("type" => $type5,"survey" => $surveyid,"content" => $question5,"isrequired" => $required5);
       $this->db->where( "id", $question5id );
          $query=$this->db->update( "hq_surveyquestion", $data );
        
        //question6
        $data=array("type" => $type6,"survey" => $surveyid,"content" => $question6,"isrequired" => $required6);
       $this->db->where( "id", $question6id );
          $query=$this->db->update( "hq_surveyquestion", $data );
        
        //question7
        $data=array("type" => $type7,"survey" => $surveyid,"content" => $question7,"isrequired" => $required7);
        $this->db->where( "id", $question7id );
          $query=$this->db->update( "hq_surveyquestion", $data );
        
        //question8
        $data=array("type" => $type8,"survey" => $surveyid,"content" => $question8,"isrequired" => $required8);
        $this->db->where( "id", $question8id );
          $query=$this->db->update( "hq_surveyquestion", $data );
        
        //question9
        $data=array("type" => $type9,"survey" => $surveyid,"content" => $question9,"isrequired" => $required9);
        $this->db->where( "id", $question9id );
          $query=$this->db->update( "hq_surveyquestion", $data );
        
        //question10
        $data=array("type" => $type10,"survey" => $surveyid,"content" => $question10,"isrequired" => $required10);
       $this->db->where( "id", $question10id );
          $query=$this->db->update( "hq_surveyquestion", $data );
         return 1;
        
    }
    public function surveybeforeedit($id){
        $query['survey']=$this->db->query("SELECT * FROM `hq_conclusionfinalsuggestion` WHERE `id`='$id'")->row();
        $query['question']=$this->db->query("SELECT * FROM `hq_surveyquestion` WHERE `survey`='$id'")->result();
return $query;
    }
}
?>
