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
       $userid=$returnvalue[0];
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
//        echo $ids;
        $gettestquestionsids = $this->db->query("SELECT `question` FROM `testquestion` WHERE `test` IN $ids")->result();
//        print_r($gettestquestionsids);
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
         $query = $this->db->query("SELECT `question`,`test` FROM `hq_useranswer` WHERE `user`='$userid' AND `option` =0 AND `question` IN $questionids")->result();
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
         $queryquestion['question'] = $this->db->query("SELECT `hq_question`.`id`, `hq_question`.`pillar`, `hq_question`.`noofans`, `hq_question`.`order`, `hq_question`.`timestamp`, `hq_question`.`text`,`hq_useranswer`.`test` FROM `hq_question`
         LEFT OUTER JOIN `hq_useranswer` ON `hq_useranswer`.`question`=`hq_question`.`id`
         WHERE `hq_question`.`id` IN $questionidstext")->result();
        foreach($queryquestion['question'] as $getoptn){
            $options=array();
             $getoptn->option = $this->db->query("SELECT `id`, `question`, `representation`, `actualorder`, `image`, `order`, `weight`, `optiontext`, `text` FROM `hq_options` WHERE `question`='$getoptn->id'")->result();
            array_push($options, $getoptn->option);
        }
        return $queryquestion;
       
	}
    
    public function getUsers()
	{
		 $query   = $this->db->query("SELECT `id` FROM `user` WHERE `accesslevel`=4")->result();
        return $query;
	}
    
}
?>