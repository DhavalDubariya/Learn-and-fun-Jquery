<?php
    try
    {   
        if(isset($_POST['path']))
        {   
            if($_POST['button'] == 'back')
            {   
                $root = pathinfo($_POST['path'])["dirname"];
            }   
            else
            {
                $root  = $_POST['path'];
            }
        }
        else
        {
            $root  = $_SERVER["DOCUMENT_ROOT"].'/root';
        }
        $glob = glob("$root/*");
        $data = array();
        $count = 0;
        foreach($glob as $values)
        {  
            if(is_file($values))
            {
                $data[] = [
                    'name' =>basename($values),
                    'path' => $values,
                    'type' => 'file',
                    'id'   =>  $count,
                ];
            }
            else
            {
                $data[] = [
                    'name' =>basename($values),
                    'path' => $values,
                    'type' => 'folder',
                    'id'   =>  $count,
                ];
            }
            $count++;
        }
        $res['path'] = $root;
        $res['status'] = true;
        $res['data'] = $data;
        $res['message'] = "Data is getting";    
        echo json_encode($res);

       
    }
    catch(Exception $e) 
    {
        $res['status'] = false;
        $res['message'] = $e->getMessage();    
        echo json_encode($res);
    }
    
?>