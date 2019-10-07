<?php
include_once("../model/resource/learninghistory.txt");
class LearningHistory {
    var $id;
    var $yearForm;
    var $yearTo;
    var $schoolName;
    var $schoolAddress;
    var $idStudent;
    function _construct($id , $yearForm ,$yearTo,$schoolName,$schoolAddress, $idStudent){
        $this->id =$id;
        $this->yearForm =$yearForm;
        $this->yearTo =$yearTo;
        $this->schoolName =$ischoolName;
        $this->schoolAddress =$schoolAddress;
        $this->idStudent =$idStudent;
    }
    static function getList($idStudent){
        var $rs = array();
        for($i=0 ;$i<5;$i++)
        {
              array_push($rs, new LearningHistory($i,2001,2002,"phan bội châu"," Huế",$idStudent)
        }
        //array_push($rs, new learninghistory(1,2001,2002,"phan bội châu"," Huế",$idStudent));
        return $rs;
    }
    static function getListFromFile($idStudent){
        $lines = file("../model/resource/learninghistory.txt",FILE_IGNORE_NEW_LINES);
        $rs =  array();
        foreach($lines as $key=> $value){
            $arr = explode("#",$value);
         //   if($arr[5]==$idStudent)
          //  array_push($rs, new learninghistory($arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5]));
        }
    return $rs;
    }
}
?>