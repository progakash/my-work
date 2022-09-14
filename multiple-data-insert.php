<?php
// array_map() :: returns an array

//input form user <> ui should be add more button <or> input should be array that means multiple row

// Array
// (
//     [0] => Objectives1
//     [1] => Objectives2
//     [2] => Objectives3
// )
$objectives_name = $this->input->post('objectives_name',TRUE);
$progress_achiev1= $this->input->post('progress_achiev1',TRUE);
$parcent_range1  = $this->input->post('parcent_range1',TRUE);
$remark1         = $this->input->post('remark1',TRUE);

// dd($objectives_name)
if ($objectives_name) { //check objectives_name 

         $data_objective  = array();
         foreach ($objectives_name as $i => $code) {

            //array create for all field
                $inputData = [
                    'objectives_name' => $objectives_name[$i],
                    'progress_achiev1'=> $progress_achiev1[$i],
                    'parcent_range1'  => $parcent_range1[$i],
                    'remark1'         => $remark1[$i]
                ];
            
                //using array_map value with string like- within single quation
                $objectiveData = array_map(function ($item) {return "'{$item}'";}, $inputData);
                //all data store in data_objective array
                $data_objective[$i] = $objectiveData;
         } //end foreach
    } //end if <objectives_name>
    // dd($data_objective);

//insert multple records at a time
$this->db->insert_batch('table_name', $data_objective, false);

//example
// INSERT ALL INTO table_name (objectives_name, parcent_range1, progress_achiev1, remark1) 
//     VALUES ('Objectives1','12','Objectives1','Remarks1') 
// INTO test (objectives_name, parcent_range1, progress_achiev1, remark1) 
//     VALUES ('Objectives2','11','Objectives2','Remarks2') 
// INTO test (objectives_name, parcent_range1, progress_achiev1, remark1) 
//     VALUES ('Objectives3','34','Objectives3','Remarks3') 

?>