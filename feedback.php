
<?php 
    if(isset($_GET['feedback_form_submit'])){
        $first_name=$_GET["first_name"];
        $last_name=$_GET["last_name"]; 
        $feedback=$_GET["feedback"];
        
        $servername="localhost";
        $username="*****";
        $password="****";

        
        $conn = mysqli_connect($servername, $username, $password);
            
        if(!$conn){
            die("Connection failed: ".$conn->connect_error);
        } else{   
            if(!(is_null($first_name)) && !(is_null($last_name)) && !(is_null($feedback))){      
                $query="insert into firmait.feedbacks(first_name, last_name,message) values (?,?,?);";
                $stmt=$conn->prepare($query);
                $stmt->bind_param("sss", $first_name, $last_name, $feedback);
        
                $stmt->execute();    
            }
        }     
        mysqli_close($conn);
}
?>