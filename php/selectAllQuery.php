<!doctype html>
<!-- (C) Cansu Ozturk -->
<html>
<head>
    <title>Display Records of a table</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
<body>
<body>

    <?php
    $servername = "localhost";
    $dbname = "Cansu";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p style='color:green'>Connection Was Successful</p>";
    } catch (PDOException $err) {
        echo "<p style='color:red'> Connection Failed: " . $err->getMessage() . "</p>\r\n";
    }

    try {
        $sql = "SELECT  StudentID,FName,LName,Mail FROM Students";
        $stmnt = $conn->prepare($sql);    // read about prepared statement here: https://www.w3schools.com/php/php_mysql_prepared_statements.asp

        $stmnt->execute();

        $row = $stmnt->fetch();  // fetches the first row of the table
        if ($row) {      // if there is any result from the query
            echo '<table>';
            echo '<tr> <th>StudentID</th> <th>FName</th> <th>LName</th> <th>Mail</th> </tr>';
            do {
                echo "<tr><td>$row[StudentID]</td><td>$row[FName]</td><td>$row[LName]</td><td>$row[Mail]</td><td></tr>";
            } while ($row = $stmnt->fetch());     // fetches another row from the query result, until we reach to the end of the result
            echo '</table>';
        } else {
            echo "<p> No Record Found!</p>";
        }
    } catch (PDOException $err) {
        echo "<p style='color:red'>Record Retrieval Failed: " . $err->getMessage() . "</p>\r\n";
    }
    // Close the connection
    unset($conn);

    echo "<a href='../index.html'>Back to the Homepage</a>";

    ?>
</body>

</html>