<?php
/**
* Filename: MonitoringAndEvaluationController.php
* Created By: M Zeeshan Shahzad
* Date: 19-04-2018
* Change history:
* ---
*/


class MonitoringAndEvaluationController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * [index call by default and load view "SearchView.php"]
     * @see SearchModel::getWomenGeneralInfo()
     */ 
    public function index()
    {
        if($this->session->userdata('User_Logged_In'))
        {
            $this->load->model('MonitoringAndEvaluationModel');
            $data["fetch_data"] = $this->MonitoringAndEvaluationModel->getMEGeneralInfo();
        /*   
            $count = $this->MonitoringAndEvaluationModel->countRows();
            $data["sno"] = $this->MonitoringAndEvaluationModel->sno();
            $data["smName"] = $this->MonitoringAndEvaluationModel->smName();
            $data["aapiCode"] = $this->MonitoringAndEvaluationModel->aapiCode();
            $data["respondent"] = $this->MonitoringAndEvaluationModel->respondent();
            $data["usedServices"] = $this->MonitoringAndEvaluationModel->usedServices();
            $data["satisfied"] = $this->MonitoringAndEvaluationModel->satisfied();
            $data["date"] = $this->MonitoringAndEvaluationModel->date();
            $data["givenFPservice"] = $this->MonitoringAndEvaluationModel->givenFPservice();
        */

            $this->load->view('MonitoringAndEvaluationView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    }

    public function getDetailsOfMEBySNo($SNO)
    {
        if($this->session->userdata('User_Logged_In'))
        {
            if($SNO != null) {
                $this->load->model('MonitoringAndEvaluationModel');
                $data["fetch_data"] = $this->MonitoringAndEvaluationModel->getMESpecificInfo($SNO);

                $this->load->view('ShowWomenMEInfoView', $data);
            }
            else show_404();
        }
        else // Display login page session is not set
            $this->load->view('login');
    }
}
?>