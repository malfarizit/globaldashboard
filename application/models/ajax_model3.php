<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ajax_model3 extends CI_Model {
 
    var $table = 'qc_nde';
    // var $column_order = array('id','Inspection_Process','Date','Material_Type','Project_No','Cladtek_Item_No','Result','CategoryInspection','Issue','Freq_Inspection','Defect_Zone','Defect_Length','Item_Type','Size','WOL_Start_Date','WOL_Finish_Date','WOL_Machine','WOL_Welder_ID','Rework_ADD_Start_Date','Rework_ADD_Finish_Date','Rework_ADD_Machine','Rework_ADD_WelderID','R1Start_Date','R1Finish_Date','R1Machine','R2Start_Date','R2Finish_Date','R2Machine','R3Start_Date','R3Finish_Date','R3Machine','FMStart_Date','FMFinish_Date','FMMachine','FMRepair_Date','FMRepair_Machine','Issue_QC','Length_Repair','Length_Pipe','Size_OD_inc','Size_OD_mm','Area_Surface_Tested','Unit'); //set column field database for datatable orderable
    // var $column_search = array('id','Inspection_Process','Date','Material_Type','Project_No','Cladtek_Item_No','Result','CategoryInspection','Issue','Freq_Inspection','Defect_Zone','Defect_Length','Item_Type','Size','WOL_Start_Date','WOL_Finish_Date','WOL_Machine','WOL_Welder_ID','Rework_ADD_Start_Date','Rework_ADD_Finish_Date','Rework_ADD_Machine','Rework_ADD_WelderID','R1Start_Date','R1Finish_Date','R1Machine','R2Start_Date','R2Finish_Date','R2Machine','R3Start_Date','R3Finish_Date','R3Machine','FMStart_Date','FMFinish_Date','FMMachine','FMRepair_Date','FMRepair_Machine','Issue_QC','Length_Repair','Length_Pipe','Size_OD_inc','Size_OD_mm','Area_Surface_Tested','Unit'); //set column field database for datatable searchable 
    var $column_order = array('Inspection_Process','Project_No','Cladtek_Item_No'); //set column field database for datatable orderable
    var $column_search = array('Inspection_Process','Project_No','Cladtek_Item_No'); //set column field database for datatable searchable 
    //var $column_search = array('id'); //set column field database for datatable searchable 
    //var $order = array('id' => 'asc'); // default order 
 
    public function _get_data_query()
    {
        $this->db->from($this->table);
        if (isset($_POST['search']['value'])){
            $this->db->like('Inspection_Process', $_POST['search']['value']);
            $this->db->or_like('Project_No', $_POST['search']['value']);
            $this->db->or_like('Cladtek_Item_No', $_POST['search']['value']);
            // $this->db->or_like('Date', $_POST['search']['value']);
            // $this->db->or_like('Material_Type', $_POST['search']['value']);
            // $this->db->or_like('Project_No', $_POST['search']['value']);
            // $this->db->or_like('Cladtek_Item_No', $_POST['search']['value']);
            // $this->db->or_like('Result', $_POST['search']['value']);
            // $this->db->or_like('CategoryInspection', $_POST['search']['value']);
            // $this->db->or_like('Issue', $_POST['search']['value']);
            // $this->db->or_like('Freq_Inspection', $_POST['search']['value']);
            // $this->db->or_like('Defect_Zone', $_POST['search']['value']);
            // $this->db->or_like('Defect_Length', $_POST['search']['value']);
            // $this->db->or_like('Item_Type', $_POST['search']['value']);
            // $this->db->or_like('Size', $_POST['search']['value']);
            // $this->db->or_like('WOL_Start_Date', $_POST['search']['value']);
            // $this->db->or_like('WOL_Finish_Date', $_POST['search']['value']);
            // $this->db->or_like('WOL_Machine', $_POST['search']['value']);
            // $this->db->or_like('WOL_Welder_ID', $_POST['search']['value']);
            // $this->db->or_like('Rework_ADD_Start_Date', $_POST['search']['value']);
            // $this->db->or_like('Rework_ADD_Finish_Date', $_POST['search']['value']);
            // $this->db->or_like('Rework_ADD_Machine', $_POST['search']['value']);
            // $this->db->or_like('Rework_ADD_WelderID', $_POST['search']['value']);
            // $this->db->or_like('R1Start_Date', $_POST['search']['value']);
            // $this->db->or_like('R1Finish_Date', $_POST['search']['value']);
            // $this->db->or_like('R1Machine', $_POST['search']['value']);
            // $this->db->or_like('R2Start_Date', $_POST['search']['value']);
            // $this->db->or_like('R2Finish_Date', $_POST['search']['value']);
            // $this->db->or_like('R2Machine', $_POST['search']['value']);
            // $this->db->or_like('R3Start_Date', $_POST['search']['value']);
            // $this->db->or_like('R3Finish_Date', $_POST['search']['value']);
            // $this->db->or_like('R3Machine', $_POST['search']['value']);
            // $this->db->or_like('FMStart_Date', $_POST['search']['value']);
            // $this->db->or_like('FMFinish_Date', $_POST['search']['value']);
            // $this->db->or_like('FMMachine', $_POST['search']['value']);
            // $this->db->or_like('FMRepair_Date', $_POST['search']['value']);
            // $this->db->or_like('FMRepair_Machine', $_POST['search']['value']);
            // $this->db->or_like('Issue_QC', $_POST['search']['value']);
            // $this->db->or_like('Length_Repair', $_POST['search']['value']);
            // $this->db->or_like('Length_Pipe', $_POST['search']['value']);
            // $this->db->or_like('Size_OD_inc', $_POST['search']['value']);
            // $this->db->or_like('Size_OD_mm', $_POST['search']['value']);
            // $this->db->or_like('Area_Surface_Tested', $_POST['search']['value']);
            // $this->db->or_like('Unit', $_POST['search']['value']);
        }

        if(isset($_POST['order']))
        {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('Date','DESC');
        }
    }

    public function getDataTable()
    {
        $this->_get_data_query();
        if(@$_POST['length'] != -1)
        $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();

        // $query = $this->db->get();
        // return $query->result();
    }

    public function count_filtered_data()
    {
        $this->_get_data_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_data()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }


 
    // private function _get_datatables_query()
    // {
         
    //     $this->db->from($this->table);
 
    //     $i = 0;
     
    //     foreach ($this->column_search as $item) // loop column 
    //     {
    //         if($_POST['search']['value']) // if datatable send POST for search
    //         {
                 
    //             if($i===0) // first loop
    //             {
    //                 $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
    //                 $this->db->like($item, $_POST['search']['value']);
    //             }
    //             else
    //             {
    //                 $this->db->or_like($item, $_POST['search']['value']);
    //             }
 
    //             if(count($this->column_search) - 1 == $i) //last loop
    //                 $this->db->group_end(); //close bracket
    //         }
    //         $i++;
    //     }
         
    //     if(isset($_POST['order'])) // here order processing
    //     {
    //         $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    //     } 
    //     else if(isset($this->order))
    //     {
    //         $order = $this->order;
    //         $this->db->order_by(key($order), $order[key($order)]);
    //     }
    // }
 
    // function get_datatables()
    // {
    //     $this->_get_datatables_query();
    //     if($_POST['length'] != -1)
    //     $this->db->limit($_POST['length'], $_POST['start']);
    //     $query = $this->db->get();
    //     return $query->result();
    // }
 
    // function count_filtered()
    // {
    //     $this->_get_datatables_query();
    //     $query = $this->db->get();
    //     return $query->num_rows();
    // }
 
    // public function count_all()
    // {
    //     $this->db->from($this->table);
    //     return $this->db->count_all_results();
    // }
 
}