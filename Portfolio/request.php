<?php

/* request.php

 * Gets data from guest/index.html

 * 11/13/2020

 */



// Turn on error reporting

ini_set('display_errors', 1);

error_reporting(E_ALL);


//var_dump($cnxn);
include ('head.html');
include ('dbcreds.php');
?>
<body>

<div class="container" id="bg">
<br>
    <h5> <a href="guestbook.php"> Guestbook page <i class="material-icons">computer</i></a> </h5>
    <h1>Guest Summary</h1>
    <br>

    <table id="request-table" class="display" style="width:100%">
        <thead>
        <tr>
            <td>Guest ID</td>
            <td>FirstName</td>
            <td>LastName</td>
            <td>Email</td>
            <td>Job</td>
            <td>TimeStamp</td>
        </tr>
        </thead>
        <tbody>

        <?php

        $sql = "SELECT * FROM `guest` ORDER BY `request_date` DESC";
        $result = mysqli_query($cnxn, $sql);

        foreach ($result as $row) {
            // var_dump($row);
            $guest_id = $row['guest_id'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $email = $row['email'];
            $job = $row['job'];
            $request_date = date("M d, Y g:i a", strtotime($row ['request_date']));
            echo "<tr>";
            echo "<td> $guest_id </td>";
            echo "<td> $fname </td>";
            echo "<td> $lname </td>";
            echo "<td> $email </td>";
            echo "<td> $job </td>";
            echo "<td> $request_date </td>";
            echo "</tr>";
        }

        ?>
        </tbody>
    </table>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


<script>

    $('#request-table').DataTable();

</script>


</body>


</html>