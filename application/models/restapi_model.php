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
    
}
?>