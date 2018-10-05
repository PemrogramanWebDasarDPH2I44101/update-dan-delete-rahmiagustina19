<?php
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <h1><center>Daftar Tabel</center></h1>
</head>
<body>
    <table width="500px" border="1" align="center">
        <tr align="left">
            <th>Id</th>
            <th>Nama</th>
            <th>Tgl Lahir</th>
            <th>Option</th>
        </tr>

        <?php
            $sql = "SELECT * FROM siswa";

            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);

            if ($row > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["id"];
                    echo "<tr>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["tgl_lahir"] . "</td>";
                    echo "<td>" . "<a href='form_update.php?id=$id'>Edit</a> | <a href='delete.php?id=$id'>Hapus</a>" . "</td>";
                    echo "</tr>";
                }
            }else {
                echo "<tr><td colspan='4' align='center'>0 results.</td></tr>";
            }
        ?>

    </table>
</body>
</html>