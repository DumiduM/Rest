<?php
function get_price($find){
// 	$books=array(
// 		"java"=>299,
// 		"c"=>348,
// 		"php"=>267);


// foreach ($books as $book => $price) {
// 	# code...

// 	if($book==$find){
// 		return $price;
// 		break;
// 	}
// }

	define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'bookss');
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
   

   $sql = "SELECT * FROM books where lang = '$find';";
                                  $result = $conn->query($sql);
                                
                        
                                if ($result->num_rows > 0) {
                                          // output data of each row
                                      $row=".";
                                      
                                          while($row = $result->fetch_assoc()) {
                                            
                                            // echo "<br>". "crop: " . $row["cropID"]. "priority: " . $row["priority"];
                                            $name = $row["name"];
                                            $author = $row["author"];
                                            $image = $row["image"];
                                            $price = "$".$row["price"];
                                          }

                                          $ret = array($name,$author,$image,$price);
                                          return $ret;
                                }        
                                else{
                                	return "";
                                }   
   $conn->close();
   
}
?>