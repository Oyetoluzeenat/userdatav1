<?php 
 $name=$email=$dob=$gender=$country="";

 if(isset($_POST["register"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $filename = "./userdata.csv";
    $file_open = fopen("$filename","a");

    $no_row=count(file($filename));
    if($no_row>1){
        $no_row=($no_row-1)+1;
    }
    

    $form_data = array(
    "sr-no"=> $no_row,
    "name"=> $name,
    "email" => $email,
    "dob"=> $dob,
    "gender"=> $gender,
    "country"=> $country,
);
fputcsv($file_open,$form_data);


print_r($_POST);

}
?>