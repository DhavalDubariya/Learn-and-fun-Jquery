<?php



    $data = $_POST['data'];
    $data['first_name_dp'] = $_POST['first_name_d'];
    $data['last_name_dp'] = $_POST['last_name_d'];
    $data['full_name_dp'] = $_POST['first_name_d'].' '.$_POST['last_name_d'];
    if(!empty($data['first_name_dp']) && !empty($data['last_name_dp']) )
    {  
        $data['Response'] = "True";
        $data['Message'] = "Data is getting";
        echo json_encode($data);
    }
    else{
        $data['Response'] = "False";
        $data['Message'] = "Data is not getting";
        echo json_encode($data);
    }
    
?>
