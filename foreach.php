<?php
/**
 * $array_data from sql query like : result_array, or 
 * $array_data from plain array, ja foreach diye run kora jai 
 */


 $data = array(); // storing =>> new customize data 
 foreach($array_data as $key => $value){
            /**
             * rule of customize array
             * foreach as value ta hobe actual array for working
             * like ekhane $value variable hocche amar main array
             * example: $value[1st_index];
             * now ami jodi chai 1st_index a kichu rakte tobe $value[1st_index] ekhane 1st_index er ..
             * name diye value set korlei peye jabo. like  $value['custom_index_name'] = 'ja store korte cai-plain value/array/object';
             * $value[kichu na dile, default value dhorbe-- like 0 theke suru korbe]
             * 1st index: $value[1st_index], 2nd index : $value[1st_index][2nd_index]
             * 3rd index : $value[1st_index][2nd_index][3rd_index] so on...
             */

             /**
             * array $value
             * $value[index]
             * $value[index][inner_index]
             */

            /**
             * each array value = $value;
             * so, i want to last array with custome index where mutliple index
             * [value_array] => Array
             *  (
             *     [data-1] => value-one
             *     [data-2] => adjfkasdf
             *     [data-3] => adjfkasdf
             * )
            */
            $value['value_array']['index-1']= 'value or array_value';
            $value['value_array']['index-2']= 'value or array_value';
            $value['value_array']['index-3']= 'value or array_value';
            $value['value_array']['index-4']['index-5']= 'value or array_value';

            /**
             * i need outer index : like $data array te new index cachi 
             * 
             */
            $data[]= 'value';
            $data['name'][]= 'value';
            $data['name'][][]= 'value';
            //.....so, 1st forward

            /**
             * same index a multiple data store
             */
            $data['same_index']['name']= 'how are you';
            $data['same_index']['name1']= 'how are you';

            //FINALY ALL VALUE IN STORE 
            $data[] = $value;
 }
 dd($data);
?>