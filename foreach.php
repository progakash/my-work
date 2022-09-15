<?php
 $data = array();
 foreach($progress_details as $key => $value){
     //$data[]['objective'] = $this->get_pi_progress_objective_workplan($value['id']);
     // $data[][] = $value;
     // dd($key);
     // $data['custome'] = 'custom value'; // parent array index
     // $data[]['custom_inner'] = 'inner value';
     //$data[] = $value; //all value store in parent array
     //$data[][] = $value; //one step increase
     // $data[$key] = 'vaload';
     /**
      * each array value = $value;
      * so, i want last array
      */
     $value['value_array']['data-1']= 'adjfkasdf';
     $value['value_array']['data-2']= 'adjfkasdf';
     $value['value_array']['data-3']= 'adjfkasdf';
     $value['test'] = 'test data 2'; //value store in each row (child array in last one)
     $value[] = 'test data'; //value store with defualt index (child array in last one)
     // dd($value['id']);
     $data[] =$value;
 }
 dd($data);
?>