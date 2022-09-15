<?php
 $data = array();
 foreach($progress_details as $key => $value){
            /**
             * rule of customize array
             * foreach as value ta hobe actual array for working
             * like ekhane $value variable hocche amar main array
             * example: $value[1st_index];
             * now ami jodi chai 1st_index a kichu rakte tobe $value[1st_index] ekhane 1st_index er ..
             * name diye value set korlei peye jabo. like  $value['custom_index_name'] = 'ja store korte cai-plain value/array/object';
             * 
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
            $value['value_array']['data-1']= 'value or array_value';
            $value['value_array']['data-2']= 'value or array_value';
            $value['value_array']['data-3']= 'value or array_value';
 }
 dd($data);
?>