<?php

$conn = mysqli_connect("localhost","root","","lms_db") or die("Connection Failed");

$sql = "SELECT * FROM project";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th width="60px">Id</th>
                <th>Project Name</th>
                <th>Project Members</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["project_id"]}</td><td>{$row["project_name1"]} {$row["project_name2"]} {$row["project_name3"]} {$row["project_name4"]} {$row["project_name5"]} {$row["project_name6"]} {$row["project_name7"]} {$row["project_name8"]} {$row["project_name9"]} {$row["project_name10"]} {$row["project_name11"]} {$row["project_name12"]} {$row["project_name13"]} {$row["project_name14"]} {$row["project_name15"]} {$row["project_name16"]} {$row["project_name17"]} {$row["project_name18"]} {$row["project_name19"]} {$row["project_name20"]} {$row["project_name21"]} {$row["project_name22"]}</td><td align='center'>{$row["project_members"]}</td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>
