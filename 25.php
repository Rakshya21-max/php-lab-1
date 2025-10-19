<!DOCTYPE html>
<html>
<head>
    <title>Display Array in Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 20%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: left;
        }
        
    </style>
</head>
<body>
    <h2>  Array in HTML Table</h2>

    <?php
    // Given array
    $info = [
        'Name'    => 'Ram Bahadur',
        'Address' => 'Lalitpur',
        'Email'   => 'info@ram.com',
        'Phone'   => 98454545,
        'Website' => 'www.ram.com'
    ];
    ?>

    <table>
        <?php
        // Loop through array and display in table rows
        foreach ($info as $key => $value) {
            echo "<tr>
                    <th>$key</th>
                    <td>$value</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
