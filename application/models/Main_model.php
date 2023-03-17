<?php
class Main_model extends CI_model{
	public function view($table){
		return $this->db->get($table);
	}
    
    public function getData($limit, $start)
    {
        return $this->db->get('rework_rate', $limit, $start)->result_array();
    }

    public function count_rr()
    {
        return $this->db->get('rework_rate')->num_rows();
    }

    public function count_expired()
    {
        $query = $this->db->query("SELECT count(*) FROM actionplan as a inner join oc as o ON a.TrackingNum = o.TrackingNum  where YEAR(o.Date)!='2023' AND ActionProgress=''");
        return $query->num_rows();
        
        // if($query->num_rows() > 0){
        //     foreach($query->result() as $data){
        //         $hasil[] = $data;
        //     }
        //     return $hasil;
        // }
    }
    
	public function viewAll($table){
		$this->db->select('*');
        $this->db->from($table);
		return $this->db->get()->result_array();
	}      
	public function edit($table, $data){
        return $this->db->get_where($table, $data);
    }
	public function view_detail($table, $data){
        return $this->db->get_where($table, $data);
    }
	public function insert($table, $data){
		return $this->db->insert($table, $data);
	}
	public function update($table, $data, $where){
        return $this->db->update($table, $data, $where); 
    }
	public function assign($table,$data,$id){
        $this->db->where_in('Id_aset',$id);
		return $this->db->update($table,$data);
	}
	public function delete($table, $where){
		return $this->db->delete($table, $where);
	}
	public function view_ordering($table,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }
    public function view_orderingg($table,$order){
        $this->db->select('id');
        $this->db->from($table);
        $this->db->order_by($order);
        return $this->db->get()->result_array();
    }
    public function view_ordering11($table,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->limit(1000);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }  
	public function view_ordering2($table,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
          return $this->db->get()->result_array();
    }
	
	public function view_join_cause($table1,$table2,$field,$where){
        $this->db->select("$table1.InvestigationNum,$table2.*");
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
		$this->db->where($table1.'.'.$field, $where); 
        return $this->db->get()->result_array();
    }
	
	public function view_join_core2($table1,$table2,$field,$where){
        $this->db->select("$table1.InvestigationNum,$table2.id as ID,$table2.Correct_preven_act as CORR,$table2.Responsible_person as RES,$table2.Target_Completion_Date as TARDATE,$table2.Actual_Completion_Date as ACTDATE,$table2.Cor_Image as Cor_Image,$table2.id");
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
       $this->db->where($table1.'.'.$field, $where); 
        return $this->db->get()->result_array();
    }
	
	public function view_orderwhere($table,$where){
        $this->db->select('*');
        $this->db->from($table);  
		$this->db->where("Notify_to like '%".$where."%' or Email_to like '%".$where."%' "); 
        return $this->db->get()->result_array();
    } 
	
    public function view_where_ordering($table,$data,$order,$ordering){
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        $query = $this->db->get($table);
        return $query->result_array();
    } 
	public function view_where($table,$data){
        $this->db->where($data);
        return $this->db->get($table); 
    } 
	public function count_where($data,$table,$where){
		$this->db->select($data);
		$this->db->where($where);
		$q=$this->db->get($table);
		$count=$q->result();
		return count($count);
		
    }
	public function view_where2($table,$data,$order){
        $this->db->where($data);
        $this->db->order_by($order);
        $query = $this->db->get($table);
        return $query->result_array();
		
    }
	public function view_join_one($table1,$table2,$field,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    } 
	public function view_join_2($table1,$table2,$table3,$table4,$field4,$field3,$field2,$field1,$where){
        $this->db->select("$table1.*,$table2.AreaID,$table2.LocID,$table3.AreaName,$table4.LocName");
        $this->db->from($table1);
        $this->db->join( $table2 , $table1.'.'.$field2.'='.$table2.'.'.$field2, 'Left');
        $this->db->join( $table3 , $table2.'.'.$field3.'='.$table3.'.'.$field3, 'Left');
        $this->db->join( $table4 , $table2.'.'.$field4.'='.$table4.'.'.$field4, 'Left');
		$this->db->where($table1.'.'.$field1, $where); 
        return $this->db->get()->result_array();
    }
	 
	public function view_join_7($table1,$table2,$table3,$field5,$field4,$field3,$field2,$field1,$where){
        $this->db->select("*");
        $this->db->from($table1);
        $this->db->join( $table2 , $table1.'.'.$field3.'='.$table2.'.'.$field2, 'LEFT'); 
        $this->db->join( $table3 , $table1.'.'.$field5.'='.$table3.'.'.$field4.' and '.$table2.'.'.$field2.'='.$table3.'.'.$field2, 'LEFT');  
		$this->db->where($table1.'.'.$field1, $where); 
        return $this->db->get()->result_array();
    }
	
	public function view_join_ones($table1,$table2,$table3,$field,$field2,$data){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field, 'LEFT'); 		
        $this->db->join($table3, $table1.'.'.$field2.'='.$table3.'.'.$field2, 'LEFT'); 		
        $this->db->where($table1.'.'.$field,$data); 		
        return $this->db->get()->result_array();
    }
	
	public function view_join_incident($table1,$table2,$table3,$field0,$field,$field2,$data){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field, 'LEFT'); 		
        $this->db->join($table3, $table1.'.'.$field2.'='.$table3.'.'.$field2, 'LEFT'); 		
        $this->db->where($table1.'.'.$field0,$data); 		
        return $this->db->get()->row_array();
    }
	
	public function SummaryActionPlan() {
           $this->db->select(array('i.Incident_Date', 'i.SpvName ','n.Status', 'c.Correct_preven_act','c.Actual_Completion_Date',));
           $this->db->from('incident i');
           $this->db->join('investigation n','i.IncidentNum = n.IncidentNum', 'INNER' ); 
		   $this->db->join('correctiveaction c','n.InvestigationNum = c.InvestigationNum','RIGHT'); 
           $query = $this->db->get();
           return $query->result();
       }
	   
	public function cek_login($username, $password, $table){
		return $this->db->query("SELECT * FROM $table where username='".$this->db->escape_str($username)."' AND password='".$this->db->escape_str($password)."'");
	}   
	public function generate_TrackNum()   {
		  $this->db->select('RIGHT(oc.TrackingNum,4) as tid', FALSE);
		  $this->db->order_by('TrackingNum','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('oc');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $trackingid = intval($data->tid) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $trackingid = 1;    
		  }
		  $max_TrackingID = str_pad($trackingid, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $trackingNum_gen = "OC-".$max_TrackingID;    // hasilnya OC-0001 dst.
		  return $trackingNum_gen;  
	} 
	public function generate_ActNum()   {
		  $this->db->select('RIGHT(actionplan.ActionNum,4) as aid', FALSE);
		  $this->db->order_by('ActionNum','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('actionplan');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $actionid = intval($data->aid) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $actionid = 1;    
		  }
		  $max_ActionID = str_pad($actionid, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $actionNum_gen = "ACT-".$max_ActionID;    // hasilnya ACT-0001 dst.
		  return $actionNum_gen;  
	}

    public function generate_ItemNum()   {
        $this->db->select('RIGHT(actionitem.CardNo,4) as aid', FALSE);
        $this->db->order_by('CardNo','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('actionitem');      //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query->row();      
         $actionid = intval($data->aid) + 1;    
        }
        else {      
         //jika kode belum ada      
         $actionid = 1;    
        }
        $max_ActionID = str_pad($actionid, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $actionNum_gen = "ACT-".$max_ActionID;    // hasilnya ACT-0001 dst.
        return $actionNum_gen;  
  }

	public function generate_CardNo()   {
		  $curdate =  date("Y-m");
		  $curday=date("d");
		  $this->db->select('RIGHT(qoc.CardNo,4) as cid', FALSE);
		  $this->db->order_by('CardNo','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('qoc');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){
			$this->db->select('Month(max(Date)) as M');
			$Mon = $this->db->get('qoc');
			$M=$Mon->row();
			if($M->M < date("m")){
				$cardid = 1;  
			}else{
				//jika kode ternyata sudah ada.      
				$data = $query->row();      
				$cardid = intval($data->cid) + 1;    
			}
		}else {      
		   //jika kode belum ada      
		   $cardid = 1;    
		  }
		  $max_CardID = str_pad($cardid, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $CardNo_gen = "QOC-".$curdate."-".$max_CardID;    // hasilnya ACT-0001 dst.
		  return $CardNo_gen;  
	}
    
    public function generate_iditem()   {
        $curdate =  date("Y-m");
        $curday=date("d");
        $this->db->select('RIGHT(items_status.CardNo,4) as cid', FALSE);
        $this->db->order_by('CardNo','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('items_status');      //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){
          $this->db->select('Month(max(Date)) as M');
          $Mon = $this->db->get('items_status');
          $M=$Mon->row();
          if($M->M < date("m")){
              $cardid = 1;  
          }else{
              //jika kode ternyata sudah ada.      
              $data = $query->row();      
              $cardid = intval($data->cid) + 1;    
          }
      }else {      
         //jika kode belum ada      
         $cardid = 1;    
        }
        $max_CardID = str_pad($cardid, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $CardNo_gen = "ITEM-".$curdate."-".$max_CardID;    // hasilnya ACT-0001 dst.
        return $CardNo_gen;  
  }
	
	public function generate_IncidentNum()   {
		  $this->db->select('RIGHT(incident.IncidentNum,4) as Iid', FALSE);
		  $this->db->order_by('IncidentNum','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('incident');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $incidentid = intval($data->Iid) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $incidentid = 1;    
		  }
		  $max_IncidentID = str_pad($incidentid, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $incidentNum_gen = "INC-".$max_IncidentID;    // hasilnya OC-0001 dst.
		  return $incidentNum_gen;  
	}
	
	public function generate_InvNum()   {
		  $this->db->select('RIGHT(investigation.InvestigationNum,4) as iid', FALSE);
		  $this->db->order_by('InvestigationNum','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('investigation');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $investigationid = intval($data->iid) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $investigationid = 1;    
		  }
		  $max_InvestigationID = str_pad($investigationid, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $investigationNum_gen = "INV-".$max_InvestigationID;    // hasilnya ACT-0001 dst.
		  return $investigationNum_gen;  
	}
	
	public function exportList() {
            $this->db->select(array('*'));
            $this->db->from('oc');
            $query = $this->db->get();
            return $query->result();
        } 
	
	public function exportList2() {
            $this->db->select(array('o.*', 'a.ActionNum','a.EmpName as Em', 'a.Action as ACT', 'a.ActionNum as AN','a.Status as ST','a.ImplementDate as IM', 'a.ActionProgress as AP', 'a.Remark as RE','a.Priority', 'a.EmpName as PIC', 'a.DueDate as DueDate', 'ar.areaName as arename', 'loc.LocName as locname'));
            $this->db->from('oc o');
            $this->db->join('actionplan a','o.TrackingNum = a.TrackingNum','LEFT');
            $this->db->join('area ar','o.areaID = ar.areaID','LEFT');
            $this->db->join('location loc','o.LocID = loc.LocID','LEFT');
            $query = $this->db->get();
            return $query->result();
    }
	
	public function exportList3() {
            $this->db->select(array('i.*', 'n.InvestigationNum','n.Leading_Investigation as Lead', 'n.Responsible_person as Rep', 'n.Target_Completion_Date as Target','n.Actual_Completion_Date as Actual','n.Investigation_level as Level', 'n.Investigation_Date as id', 'n.Cause as Cause', 'e.EmpName as  Name'));
            $this->db->from('incident i');
            $this->db->join('investigation n','i.IncidentNum = n.IncidentNum', 'left' );
            $this->db->join('employee e','i.EmpID = e.EmpID'); 
            $query = $this->db->get();
            return $query->result();
        }
		
	public function exportList4() {
           $this->db->select(array('i.*', 'n.IncidentNum','n.Incident_Date', 'n.Investigation_Date1','n.Incident_type', 'n.Incident_Desc',  'n.EmpID as EmpID', 'e.EmpName as  Name' ));
           $this->db->from('investigation i');
           $this->db->join('incident n','i.IncidentNum = n.IncidentNum', 'RIGHT OUTER' ); 
           $this->db->join('employee e','N.EmpID = e.EmpID','LEFT');  
           $query = $this->db->get();
           return $query->result();
    }
	public function exportList4s() {
           $this->db->select(array('i.*', 'n.InvestigationNum ','n.Leading_Investigation', 'e.EmpName as  Name' ));
           $this->db->from('incident i');
           $this->db->join('investigation n','i.IncidentNum = n.IncidentNum', 'LEFT' ); 
           $this->db->join('employee e','i.EmpID = e.EmpID','LEFT');  
           $query = $this->db->get();
           return $query->result();
    }
	   
	public function exportListQuality() {
            $this->db->select(array('q.*', 'l.LocID','l.Name'));
            $this->db->from('qoc q'); 
            $this->db->join('qlocation l','q.Location = l.LocID', 'Left');
            $query = $this->db->get();
            return $query->result();
    }	
		
	public function graph()
	{
		$data = $this->db->query("SELECT * from oc");
		return $data->result();
	} 
	public function get_loc($AreaID){
        $query = $this->db->get_where('location', array('AreaID' => $AreaID)); 
        return $query; 
    }
	public function get_Sloc($LocID){
        $query = $this->db->order_by('LocID', 'ASC')->get_where('sublocationhse', array('LocID' => $LocID)); 
        return $query; 
    }
	public function get_loc2($LocID){
        $query = $this->db->get_where('location', array('LocID' => $LocID)); 
        return $query; 
    }
	public function get_subloc($LocID){
        $query = $this->db->get_where('sublocation', array('LocID' => $LocID)); 
        return $query; 
    } 
	public function get_EmailSection($sid){
        $query = $this->db->get_where('section', array('SectionID' => $sid)); 
        return $query; 
    }
	
	public function get_Area($AreaID){
        $query = $this->db->get_where('area', array('AreaID' => $AreaID)); 
        return $query; 
    } 	
	public function get_Dept($EmpID){
        $query = $this->db->get_where('employee', array('EmpID' => $EmpID));
        return $query;
    }
	public function get_Emp($EmpID){
        $query = $this->db->get_where('employee', array('EmpID' => $EmpID));
        return $query;
    }
	function fetch_data($query)
	 {
	  $this->db->select("*");
	  $this->db->from("employee");
	  if($query != '')
	  {
	   $this->db->where('EmpID', $query);
	   $this->db->or_like('EmpName', $query); 
	  }
	  $this->db->order_by('EmpID', 'DESC');
	  return $this->db->get();
	 }
	 
	function fetch_data2($query)
	 {
	  $this->db->like('EmpID', $query);
	  $query = $this->db->get('employee');
	  if($query->num_rows() > 0)
	  {
	   foreach($query->result_array() as $row)
	   {
		$output[] = array(
		 'EmpID'  => $row["EmpID"],
		 'EmpName'  => $row["EmpName"]
		);
	   }
	   echo json_encode($output);
	  }
	 }
	
	function fetch_dataSPV($query)
	 {
	  $this->db->select("*");
	  $this->db->from("employee");
	  $this->db->where(" Level_position IN ('SPV','SPI','MANAGER')"); 
	  if($query != '')
	  {
	   $this->db->where('EmpID', $query);
	   $this->db->or_like('EmpName', $query); 
	  }
	  $this->db->order_by('EmpID', 'DESC');
	  return $this->db->get();
	 }
	 
	 
	public function Expired(){
		$query = $this->db->query('SELECT * FROM actionplan where DueDate < (SELECT CURDATE()) and DueDate != "0000-00-00" ');
		//return $query;
		$iw=$query->result_array();
		return json_encode($iw);
	}
	
	public function QualityExpired(){
		$query = $this->db->query('SELECT * FROM qoc where Target_Date < (SELECT CURDATE()) and Target_Date != "0000-00-00" and Status="Response"');
		//return $query;
		$iw=$query->result_array();
		return json_encode($iw);
	} 
	
	function month(){
        $query = $this->db->query("SELECT count(*) as total, MONTHNAME(Date) as Month, YEAR(Date) as Year FROM oc GROUP by Month,Year order by Date asc");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function Obmonth($Y){
        $query = $this->db->query("SELECT count(*) as total, MONTHNAME(Date) as Month, YEAR(Date) as Year FROM oc where YEAR(Date)='$Y' GROUP by Month,Year order by Date asc");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	
	function monthinc(){
        $query = $this->db->query("SELECT count(*) as total, MONTHNAME(Incident_Date) as Month, YEAR(Incident_Date) as Year FROM incident GROUP by Month,Year order by Incident_Date asc");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	 
	function month_quality(){
        $query = $this->db->query("SELECT count(*) as total, MONTHNAME(Date) as Month FROM qoc GROUP by Month");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function year(){
        $query = $this->db->query("SELECT count(*) as total, YEAR(Date) as Year FROM oc GROUP by Year");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    } 
	
	function yearinc(){
        $query = $this->db->query("SELECT count(*) as total, YEAR(Incident_Date) as Year FROM incident GROUP by Year");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function year_quality(){
        $query = $this->db->query("SELECT count(*) as total, YEAR(Date) as Year FROM qoc GROUP by Year");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function status(){
        $query = $this->db->query("SELECT count(*) as total,  Status FROM oc GROUP by Status ");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    } 
	
	function incstatus(){
        $query = $this->db->query("SELECT count(*) as total,  Status FROM incident GROUP by Status ");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function invstatus(){
        $query = $this->db->query("SELECT count(*) as total,  Status FROM investigation	GROUP by Status ");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function progres(){
        $query = $this->db->query("SELECT count(*) as total, (SELECT IF(ActionProgress='','Waiting Action', ActionProgress)) as ActionProgress FROM actionplan GROUP by ActionProgress ");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function filter($Y){
        $query = $this->db->query("SELECT count(*) as total, YEAR(o.Date) as Dat, (SELECT IF(ActionProgress='','Outstanding', ActionProgress)) as ActionProgress FROM actionplan as a inner join oc as o ON a.TrackingNum = o.TrackingNum  where YEAR(o.Date)='$Y' GROUP by Dat,ActionProgress");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function action(){
        $query = $this->db->query("SELECT count(*) as total, (SELECT IF(Status = 'Open' and DueDate < (SELECT CURDATE()) and DueDate != '0000-00-00',IF(Status='Closed',Status,'Expired'),Status) ) as Prog FROM actionplan GROUP by Prog ");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function topuser(){
        $query = $this->db->query("SELECT count(*) as total, empname from oc GROUP BY empname ORDER BY total DESC LIMIT 10"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function dept(){
        $query = $this->db->query("SELECT department.Dept_Name as Deptname,actionplan.status  as status, count(*) as total FROM actionplan join department on actionplan.DeptID=department.DeptID   GROUP by actionplan.DeptID,status"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function deptclosed(){
        $query = $this->db->query("SELECT department.Dept_Name as Deptname,actionplan.status  as status, count(*) as total FROM actionplan join department on actionplan.DeptID=department.DeptID WHERE Status='Closed' GROUP by actionplan.DeptID,status"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function deptopen(){
        $query = $this->db->query("SELECT department.Dept_Name as Deptname,actionplan.status  as status, count(*) as total FROM actionplan join department on actionplan.DeptID=department.DeptID WHERE Status='Open' GROUP by actionplan.DeptID,status"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function leadingtoJSON(){
        $query = $this->db->get('hse-leading'); 
        return json_encode($query->result(), JSON_PRETTY_PRINT); 
    }
	
	function dept_open(){
        $query = $this->db->query("SELECT department.Dept_Name as Deptname,actionplan.status  as status, count(*) as total FROM actionplan join department on actionplan.DeptID=department.DeptID where status='Open' GROUP by DeptName,status"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        } 
        
    }
	
	function category_quality(){
        $query = $this->db->query("SELECT Observation_category as Category, count(*) as Total  FROM qoc where Observation_category !='' group by Observation_category"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function category(){
        $query = $this->db->query("SELECT OCCategory AS Category, count(*) as Total  FROM oc group by OCCategory"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function categoryinc(){
        $query = $this->db->query("SELECT distinct Incident_Severity AS Severity, count(*) as Total  FROM investigation group by Incident_Severity"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function categoryinc2(){
        $query = $this->db->query("SELECT distinct Incident_Severity AS name, count(*) as y  FROM investigation group by Incident_Severity"); 
		if($query->num_rows() > 0){
            foreach($query->result() as $data){
             //    $datas[]=$data;
					$hasil[]=$data;
					//$hasil[] = array($data->name,$data->y);
                // $hasil[] = array($data->name, $data->y);
				// array("value"=>$row->EmpName,"label"=>$row->EmpID);
            }
            return $hasil;
        }
    }
	
	function type(){
        $query = $this->db->query("SELECT OCType AS Type, count(*) as Total  FROM oc WHERE OCType in('Suggestion','Un Safe Condition','BEHAVIOUR','Un Safe Action','Achievement','Nearmiss','ACCIDENT')group by OCType"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function typeinc(){
        $query = $this->db->query("SELECT Incident_type AS Type, count(*) as Total  FROM incident group by Incident_type"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function dept_closed(){
        $query = $this->db->query("SELECT department.Dept_Name as Deptname,actionplan.status  as status, count(*) as total FROM actionplan join department on actionplan.DeptID=department.DeptID   GROUP by actionplan.DeptID,status"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function dept_all(){
        $query = $this->db->query("SELECT department.Dept_Name as Deptname,actionplan.status  as status, count(*) as total FROM actionplan join department on actionplan.DeptID=department.DeptID GROUP by DeptName,status"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }  
	
	function dept_all2(){
        $query = $this->db->query("SELECT department.Dept_Name as Deptname,actionplan.status  as status, count(*) as total FROM actionplan join department on actionplan.DeptID=department.DeptID GROUP by DeptName, status"); 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function getEmployee($postData){ 
     $response = array(); 
     if(isset($postData['search']) ){
       // Select record
       $this->db->select('*');
       $this->db->where("EmpID like '%".$postData['search']."%' "); 
       $records = $this->db->get('employee')->result(); 
       foreach($records as $row ){
		  //$re = array($row->EmpID,$row->EmpName);
		  //$w=$re.join();
          $response[] = array("value"=>$row->EmpName,"label"=>$row->EmpID);
       } 
     } 
     return $response;
	}

    function searchAndDisplay($katakunci = null, $start = 0, $length = 0)
    {
        $builder = $this->table("rework-rate");
        if ($katakunci){
            $arr_katakunci = explode(" ", $katakunci);
            for ($x = 0; $x < count($arr_katakunci); $x++){
                $builder = $builder->orLike('id', $arr_katakunci[$x]);
                $builder = $builder->orLike('InspectionProcess', $arr_katakunci[$x]);
                $builder = $builder->orLike('Date', $arr_katakunci[$x]);
                $builder = $builder->orLike('MaterialType', $arr_katakunci[$x]);
                $builder = $builder->orLike('ProjectNo', $arr_katakunci[$x]);
                $builder = $builder->orLike('CladtekItemNo', $arr_katakunci[$x]);
                $builder = $builder->orLike('Result', $arr_katakunci[$x]);
                $builder = $builder->orLike('CategoryInspection', $arr_katakunci[$x]);
                $builder = $builder->orLike('FreqInspection', $arr_katakunci[$x]);
                $builder = $builder->orLike('Unit', $arr_katakunci[$x]);
            }
        }
        if ($start != 0 or $length !=0){
            $builder = $builder->limit($length, $start);
        }
        return $builder->orderBy('id')->get()->getResult();
    }
}
?>