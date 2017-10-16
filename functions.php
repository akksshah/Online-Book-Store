<?php

$con = mysqli_connect("localhost","root","","hasstore");

function display1(){
    global $con;
    $get_prod = "select * from products";
    $run_prod = mysqli_query($con,$get_prod);
    while($row_prod = mysqli_fetch_array($run_prod)){
        $id = $row_prod['id'];
        $year = $row_prod['year'];
        $semester = $row_prod['semester'];
        $department = $row_prod['department'];
        $university = $row_prod['university'];
        $subject = $row_prod['subject'];
        $name = $row_prod['name'];
        $author = $row_prod['author'];
        $cost = $row_prod['cost'];
        $publisher = $row_prod['publisher'];
        $imgurl = $row_prod['imgurl'];
        $edition = $row_prod['edition'];
        $description = $row_prod['description'];

       echo "hello";
                                        
    }
}
?>