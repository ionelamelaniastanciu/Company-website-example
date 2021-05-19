<?php 
  
    if(isset($_GET['cv_form_submit'])){
        $first_name=$_GET["first_name"];
        $last_name=$_GET["last_name"]; 
        $link_cv=$_GET["cv"];        
        $servername="localhost";
        $username="*****";
        $password="****";
      
        $conn = mysqli_connect($servername, $username, $password);            
        if(!$conn){
            die("Connection failed: ".$conn->connect_error);
        } else{  
            if(!(is_null($first_name)) && !(is_null($last_name)) && !(is_null($link_cv))){           
                $query="insert into firmait.cvs(first_name, last_name, link_cv) values (?,?,?);";
                $stmt=$conn->prepare($query);
                $stmt->bind_param("sss", $first_name, $last_name, $link_cv);        
                $stmt->execute();     
            }
        }       
            
        mysqli_close($conn);
}
?>