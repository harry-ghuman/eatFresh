<?php
include "admin_header.php";
include "connection.php";
$query="SELECT * FROM `contact_us` order by id DESC";//query to fetch the results store in "contact_us" table of database
$result=mysqli_query($conn,$query);
?>
<!doctype>
<html>
<head>
</head>
<body>
    <div class="container" style="padding-top: 100px;">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <!--
            Table shows the list of inquiries received from "contact" form submitted by users.Admin can
            easily reply to the user inquiries by clicking on his/her email address.
            -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center><h2>List of inquiries</h2></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Subject</th>
                        <th>Received on</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact number</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count=1;
                    while($row=mysqli_fetch_array($result))
                    {
                        ?>
                        <tr>
                            <td><?php echo $count."." ?></td>
                            <td><?php echo $row[2] ?></td>
                            <td><?php echo $row[6] ?></td>
                            <td><?php echo $row[1] ?></td>
                            <td>
                                <a href="mailto:<?php echo $row[3] ?>" target="_top"><?php echo $row[3] ?></a>
                            </td>
                            <td><?php echo $row[4] ?></td>
                            <td><?php echo $row[5] ?></td>
                        </tr>
                    <?php
                    $count++;
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
