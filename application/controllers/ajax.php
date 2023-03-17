<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ajax extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ajax_model');
    }
 
    public function index()
    {
        
    }

    public function getData()
    {
        $results = $this->ajax_model->getDataTable();
		// var_dump($result);
		// die;
        // $data = [];
        // $no = $_POST['start'];
        $data = array();
        $no = $this->input->post('start');
        foreach ($results as $result)
        {
            $row = array();
            $row[] = ++$no;
            $row[] = $result->id;
            $row[] = $result->Inspection_Process;
            $row[] = $result->Date;
            $row[] = $result->Material_Type;
            $row[] = $result->Project_No;
            $row[] = $result->Cladtek_Item_No;
            $row[] = $result->Result;
            $row[] = $result->CategoryInspection;
            $row[] = $result->Issue;
            $row[] = $result->Freq_Inspection;
            $row[] = $result->Defect_Zone;
            $row[] = $result->Defect_Length;
            $row[] = $result->Item_Type;
            $row[] = $result->Size;
            $row[] = $result->WOL_Start_Date;
            $row[] = $result->WOL_Finish_Date;
            $row[] = $result->WOL_Machine;
            $row[] = $result->WOL_Welder_ID;
            $row[] = $result->Rework_ADD_Start_Date;
            $row[] = $result->Rework_ADD_Finish_Date;
            $row[] = $result->Rework_ADD_Machine;
            $row[] = $result->Rework_ADD_WelderID;
            $row[] = $result->R1Start_Date;
            $row[] = $result->R1Finish_Date;
            $row[] = $result->R1Machine;
            $row[] = $result->R2Start_Date;
            $row[] = $result->R2Finish_Date;
            $row[] = $result->R2Machine;
            $row[] = $result->R3Start_Date;
            $row[] = $result->R3Finish_Date;
            $row[] = $result->R3Machine;
            $row[] = $result->FMStart_Date;
            $row[] = $result->FMFinish_Date;
            $row[] = $result->FMMachine;
            $row[] = $result->FMRepair_Date;
            $row[] = $result->FMRepair_Machine;
            $row[] = $result->Issue_QC;
            $row[] = $result->Length_Repair;
            $row[] = $result->Length_Pipe;
            $row[] = $result->Size_OD_inc;
            $row[] = $result->Size_OD_mm;
            $row[] = $result->Area_Surface_Tested;
            $row[] = $result->Unit;
            // add html for action
            $row[] = '<a href="'.site_url('Main/E_operation_qual/'.$result->id).'" class="btn btn-primary       btn-xs"><i class="fa fa-pencil"></i> Update</a>
                    <a href="'.site_url('Main/D_operation_qual/'.$result->id).'" onclick="return confirm(\'Yakin hapus data?\')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>';
            $data[] = $row;

        }

        $output = array (
            // "draw" => $_POST['draw'],
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->ajax_model->count_all_data(),
            "recordsFiltered" => $this->ajax_model->count_filtered_data(),
            "data" => $data,
        );

        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function rrAjax()
        {
            $list = $this->roww->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $roww) {
                $no++;
                $row = array();
                $row[] = $no;
                $row[] = $roww->InspectionProcess;
                $row[] = $roww->Date;
                $row[] = $roww->MaterialType;
                $row[] = $roww->ProjectNo;
                $row[] = $roww->CladtekItemNo;
                $row[] = $roww->Result;
                $row[] = $roww->CategoryInspection;
                $row[] = $roww->FreqInspection;
                $row[] = $roww->Unit;

    
                $data[] = $row;
            }
    
            $output = array(
                            "draw" => $_POST['draw'],
                            "recordsTotal" => $this->roww->count_all(),
                            "recordsFiltered" => $this->roww->count_filtered(),
                            "data" => $data,
                    );
            //output to json format
            echo json_encode($output);
        }
        
    }