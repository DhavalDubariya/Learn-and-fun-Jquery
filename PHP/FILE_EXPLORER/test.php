<?php
$dir = 'root';

if(strpos(realpath($dir),"storage")){ // Check if the path is valid or not
    $a = scandir($dir);
    $a = array_slice($a,2);
    function generatePath($v){ // Generate full path
        return ($_POST['path'].$v."/");
    }
    function get_extension($v){ // Generate extension of file/folder
        return pathinfo($v, PATHINFO_EXTENSION);
    }
    $b = array_map("generatePath",$a);
    $c = array_map("get_extension",$a);
    $d['file'] = [];
    $d['folder'] = [];
    $count = 0;
    for($i=0;$i<count($a);$i++){ // Generate response data
        $path = $_POST['path'].$a[$i];
        $tmp = [
            'name' => $a[$i],
            'path' => $b[$i],
            'extension' => $c[$i]
        ];
        if(!is_dir($path)){
           array_push($d['file'],$tmp);            
        }else{
            array_push($d['folder'],$tmp);
        }
    }
    $res['status']=true;
    $res['data']=$d;
    $res['message']='Success';
}else{
    $res['status']=true;
    $res['data']=[];
    $res['message']='Enter proper path';
}
header("Content-Type:application/json");
echo(json_encode($res));
?>