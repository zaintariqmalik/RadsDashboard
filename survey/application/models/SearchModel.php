<?php
/*
 * Created by PhpStorm.
 * User: Waqas Ahmad
 * Date: 3/1/2018
 * Time: 12:15 PM
 */
class SearchModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public  function  getWomenGeneralInfo(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `API`, `SM`, `Name`,`Age`, `Date`  FROM `household`');
        return $query->result();
    }

    public  function  notYetFollowedUp(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM household WHERE SNO not in (SELECT SNO FROM followup ) AND CurrentlyUsingFPMethod LIKE 'no' AND WantToUseAnyFPMethod LIKE 'yes'");
        return  $query->result();
    }

    public  function  notNewUsers(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM household WHERE areYouPregnant LIKE 'no' AND currentFPMethodName in ('','tm','traditional method') AND WantToUseAnyFPMethod like 'yes' AND SNO NOT IN ( SELECT SNO FROM followup WHERE conclusion LIKE 'new user case closed')");
        return  $query->result();
    }
//-------------------------------------------------------------------------------
    public  function  jan_data(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `API`, `SM`, `Name`,`Age`, `Date`  FROM household where date between "2018-01-01" and "2018-01-31"');
        return $query->result();
    }
    public  function  feb_data(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `API`, `SM`, `Name`,`Age`, `Date`  FROM household where date between "2018-02-01" and "2018-02-29"');
        return $query->result();
    }
    public  function  mar_data(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `API`, `SM`, `Name`,`Age`, `Date`  FROM household where date between "2018-03-01" and "2018-03-31"');
        return $query->result();
    }
    public  function  apr_data(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `API`, `SM`, `Name`,`Age`, `Date`  FROM household where date between "2018-04-01" and "2018-04-30"');
        return $query->result();
    }
    public  function  may_data(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `API`, `SM`, `Name`,`Age`, `Date`  FROM household where date between "2018-05-01" and "2018-05-31"');
        return $query->result();
    }
    public  function  jun_data(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `API`, `SM`, `Name`,`Age`, `Date`  FROM household where date between "2018-06-01" and "2018-06-30"');
        return $query->result();
    }
    public  function  jul_data(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `API`, `SM`, `Name`,`Age`, `Date`  FROM household where date between "2018-07-01" and "2018-07-31"');
        return $query->result();
    }
    
    public  function  aug_data(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `API`, `SM`, `Name`,`Age`, `Date`  FROM household where date between "2018-08-01" and "2018-08-31"');
        return $query->result();
    }
    /*
    public  function  sept_data(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query('SELECT `SNO`,`MUHALA`, `APIName`, `API`, `SM`, `Name`,`Age`, `Date`  FROM household where date between "2018-09-01" and "2018-09-30"');
        return $query->result();
    }*/

//************************************************************** */
    public  function getWomenSpecificInfo($SNO){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM `household` where `SNO` ='$SNO'");
        return $query->result();
    }

    public  function getWomenSpecificInfo_FollowUp($SNO){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM `followup` where `SNO` ='$SNO' and followUpNumber <> 0 ");
        return $query->result();
    }
/*
    public function getNewUsersInfo(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.areYouPregnant LIKE 'no' AND h.everFPMethod <> 'TL' AND h.everFPMethod <> 'operation' AND (h.currentFPMethodName = '' OR h.currentFPMethodName LIKE 'TM' OR h.currentFPMethodName LIKE 'traditional Method') AND f.conclusion LIKE 'new user case closed' AND h.date between '2018-01-01' AND '2018-04-30'");
        return $query->result();
    }
*/
    public function NU_q2(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.areYouPregnant LIKE 'no' AND h.everFPMethod <> 'TL' AND h.everFPMethod <> 'operation' AND (h.currentFPMethodName = '' OR h.currentFPMethodName LIKE 'TM' OR h.currentFPMethodName LIKE 'traditional Method') AND f.conclusion LIKE 'new user case closed' AND h.date between '2018-01-01' AND '2018-04-30'");
        return $query->result();
    }

    public function NU_q3(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.areYouPregnant LIKE 'no' AND h.everFPMethod <> 'TL' AND h.everFPMethod <> 'operation' AND (h.currentFPMethodName = '' OR h.currentFPMethodName LIKE 'TM' OR h.currentFPMethodName LIKE 'traditional Method') AND f.conclusion LIKE 'new user case closed' AND h.date between '2018-05-01' AND '2018-07-31'");
        return $query->result();
    }

    public function NU_q4(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM household h JOIN followup f ON h.SNO = f.SNO WHERE h.areYouPregnant LIKE 'no' AND h.everFPMethod <> 'TL' AND h.everFPMethod <> 'operation' AND (h.currentFPMethodName = '' OR h.currentFPMethodName LIKE 'TM' OR h.currentFPMethodName LIKE 'traditional Method') AND f.conclusion LIKE 'new user case closed' AND h.date between '2018-08-01' AND '2018-10-31'");
        return $query->result();
    }

    public function getConversions(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query =  $otherdb->query("SELECT h.*, f.conclusion, f.methodName FROM household h JOIN followup f ON h.SNO = f.SNO 
                                    WHERE h.currentFPMethodName LIKE 'condom' AND f.methodName IN ('injection','pills','iucd','implant','tl', 'tubal ligation', 'operation') 
                                    OR h.currentFPMethodName LIKE 'pills' AND f.methodName IN ('injection', 'iucd', 'implant', 'tl', 'tubal ligation', 'operation') 
                                    OR h.currentFPMethodName LIKE 'injection' AND f.methodName IN ('iucd', 'implant', 'tl', 'tubal ligation', 'operation') 
                                    OR h.currentFPMethodName LIKE 'iucd' AND f.methodName IN ('tl', 'tubal ligation', 'operation') 
                                    OR h.currentFPMethodName LIKE 'implant' AND f.methodName IN ('tl', 'tubal ligation', 'operation')
                                "); 
        return $query->result();
    }

    public function HH_followup(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * from followup where followUpNumber = 1");
        return $query->result();
    }

    public function searchLarcs(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query(" SELECT h.*,f.conclusion, f.methodName
                                    FROM household h join followup f on h.SNO = f.SNO  
                                    WHERE f.methodName IN ('injection','implant','IUCD') 
                                    AND h.areYouPregnant LIKE 'no' AND h.everFPMethod <> 'TL' AND h.everFPMethod <> 'operation' 
                                    AND (h.currentFPMethodName = '' OR h.currentFPMethodName LIKE 'TM' OR h.currentFPMethodName LIKE 'traditional method')
                                    OR ((
                                    h.currentFPMethodName LIKE 'condom' AND f.methodName IN ('injection','pills','iucd','implant','tl', 'tubal ligation', 'operation') 
                                    OR h.currentFPMethodName LIKE 'pills' AND f.methodName IN ('injection', 'iucd', 'implant', 'tl', 'tubal ligation', 'operation') 
                                    OR h.currentFPMethodName LIKE 'injection' AND f.methodName IN ('iucd', 'implant', 'tl', 'tubal ligation', 'operation') 
                                    OR h.currentFPMethodName LIKE 'iucd' AND f.methodName IN ('tl', 'tubal ligation', 'operation') 
                                    OR h.currentFPMethodName LIKE 'implant' AND f.methodName IN ('tl', 'tubal ligation', 'operation')
                                ) 
                                AND f.methodName IN ('injection','implant','iucd')
                                )
                                ");
        return $query->result();
    }
    
    public function getCommunityMeetings(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM `communitymeetings`");
        return $query->result();
    }

    public function getPWDNewUsersInfo(){
        $otherdb = $this->load->database('otherdb',TRUE);
        $query = $otherdb->query("SELECT * FROM `pwdhealthcamp` WHERE 1");
         //SNO IN ( SELECT SNO FROM followup WHERE conclusion like 'New User' or conclusion like 'New User Case Closed')");
        return $query->result();
    }
}
?>