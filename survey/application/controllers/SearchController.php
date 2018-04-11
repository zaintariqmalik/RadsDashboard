<?php
/**
 * Created by PhpStorm.
 * User: Waqas Ahmad
 * Date: 3/1/2018
 * Time: 11:54 AM
 */

class SearchController extends CI_Controller{
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
            $this->load->model('SearchModel');
            $data["fetch_data"] = $this->SearchModel->getWomenGeneralInfo();
            $this->load->view('SearchView',$data);
        }
        else // Display login page session is not set
            $this->load->view('login');
    }

    public function getDetailsOfWomenBySNo($SNO)
    {
        if($this->session->userdata('User_Logged_In'))
        {
            if($SNO != null) {
                $this->load->model('SearchModel');
                $data["fetch_data"] = $this->SearchModel->getWomenSpecificInfo($SNO);

                $this->load->view('ShowWomenHouseholdInfoView', $data);
            }
            else show_404();
        }
        else // Display login page session is not set
            $this->load->view('login');
    }
}
?>