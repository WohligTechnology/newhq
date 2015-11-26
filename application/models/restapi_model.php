<?php
if (!defined("BASEPATH"))
    exit("No direct script access allowed");
class restapi_model extends CI_Model
{
    public function getQuestionAnswer()
    {
        $query = $this->db->query("SELECT `id`, `pillar`, `noofans`, `order`, `timestamp`, `text` FROM `hq_question` WHERE 1 ORDER BY `order` ASC")->result();
        foreach ($query as $row) {
            $questionoption = array();
            $row->options   = $this->db->query("SELECT `id`, `question`, `representation`, `actualorder`, `image`, `order`, `weight`, `optiontext`, `text` FROM `hq_options` WHERE `question`='$row->id'")->result();
            array_push($questionoption, $row->options);
        }
        return $query;
    }
	
    public function getSingleQuestionAndOption($id)
    {
        $query = $this->db->query("SELECT `id`, `pillar`, `noofans`, `order`, `timestamp`, `text` FROM `hq_question` WHERE `id`='$id'")->row();
        $query->options = $this->db->query("SELECT `id`, `question`, `representation`, `actualorder`, `image`, `order`, `weight`, `optiontext`, `text` FROM `hq_options` WHERE `question`='$query->id'")->result();
        return $query;
    }
	
    public function storeUserAnswer($user, $option, $question, $test)
    {
        // get pillar id
        
        $query1   = $this->db->query("SELECT `pillar` FROM `hq_question` WHERE `id`='$question'")->row();
        $pillarid = $query1->pillar;
        
        $data  = array(
            "user" => $user,
            "question" => $question,
            "option" => $option,
            "test" => $test,
            "pillar" => $pillarid
        );
        $query = $this->db->insert("hq_useranswer", $data);
        $id    = $this->db->insert_id();
        if (!$query)
            return false;
        else
            return true;
    }
	
	public function pingHq($user)
	{
        
        $normalfromhash=base64_decode ($user);
       $returnvalue=explode("&",$normalfromhash);
       $user=$returnvalue[0];
        
         $todaysdate=date("Y-m-d");
        $gettest = $this->db->query("SELECT `id` FROM `test` WHERE `startdate`<'$todaysdate'")->result();
    
         
        $ids="(";
            foreach($gettest as $key=>$value){
//            $catid=$row->id;
                if($key==0)
                {
                    $ids.=$value->id;
                }
                else
                {
                    $ids.=",".$value->id;
                }
            }
            $ids.=")";
              if($ids=="()")
        {
           $ids="(0)";
        }
        
        $gettestquestionsids = $this->db->query("SELECT `question` FROM `testquestion` WHERE `test` IN $ids")->result();
    
        $questionids="(";
            foreach($gettestquestionsids as $key=>$value){
//            $catid=$row->id;
                if($key==0)
                {
                    $questionids.=$value->question;
                }
                else
                {
                    $questionids.=",".$value->question;
                }
            }
            $questionids.=")";
              if($questionids=="()")
        {
           $questionids="(0)";
        }
         $query = $this->db->query("SELECT `question` FROM `hq_useranswer` WHERE `user`='$user' AND `option` =0 AND `question` IN $questionids")->result();
        $questionidstext="(";
            foreach($query as $key=>$value){
//            $catid=$row->id;
                if($key==0)
                {
                    $questionidstext.=$value->question;
                }
                else
                {
                    $questionidstext.=",".$value->question;
                }
            }
            $questionidstext.=")";
              if($questionidstext=="()")
        {
           $questionidstext="(0)";
        }
         $queryquestion = $this->db->query("SELECT `id`, `pillar`, `noofans`, `order`, `timestamp`, `text` FROM `hq_question` WHERE `id` IN $questionidstext")->result();
        return $queryquestion;
       
	}
    
    public function getUsers()
	{
		 $query   = $this->db->query("SELECT `id` FROM `user` WHERE `accesslevel`=4")->result();
        return $query;
	}
    
}
?>