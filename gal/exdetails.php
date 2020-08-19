<html>
    <title></title>
    <body>
    </body>
</html>
<?php
$con =mysqli_connect("localhost:3306","root","","gallery");
if(isset($_POST['exdetails'])){
    $ex_name=$_POST['ex_name'];
    $ex_place=$_POST['ex_place'];
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $organiser=$_POST['organiser'];
    $org_contact=$_POST['org_contact'];
    $query="insert into exhibition(ex_name,ex_place,start_date,end_date,organiser,org_contact) values ('$ex_name',
    '$ex_place','$start_date','$end_date','$organiser','$org_contact')";
    $result=mysqli_query($con,$query);
    }
    include 'details.php';
    echo"<script type='text/javascript'>alert('Details Added');</script>";
?>