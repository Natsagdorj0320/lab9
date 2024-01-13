<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itu";
    
    $conn = new mysqli($servername, $username, $password, $dbname); 

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM product_information";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $json_data = json_encode($data);
        echo $json_data;
    } else {
        echo "No data found";
    }

    $conn->close(); 
?>
