<?php 

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");

echo "<center>";
echo "<b>RECRUITMENT TABLE</b><br>";
echo "<a href='tampilan.php'>::DAFTAR ISI::</a><br><br>";
echo "<table border='1'>";

    echo "<tr>";
        echo "<td>";
        echo "Tanggal";
        echo "</td>";

        echo "<td>";
        echo "Nama";
        echo "</td>";

        echo "<td>";
        echo "Alamat";
        echo "</td>";

        echo "<td>";
        echo "Email";
        echo "</td>";

        echo "<td>";
        echo "Status";
        echo "</td>";

        echo "<td>";
        echo "Notes";

    echo "</tr>";
    
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr>";
        echo "<td>";
        echo date("l, j F Y");
        echo "</td>";

        echo "<td>";
        echo "$pisah[0]";
        echo "</td>";

        echo "<td>";
        echo "$pisah[1]";
        echo "</td>";

        echo "<td>";
        echo "$pisah[2]";
        echo "</td>";

        echo "<td>";
        echo "$pisah[3]";
        echo "</td>";

        echo "<td>";
        echo "$pisah[4]";
        echo "</td>";
    echo "</tr>";
}
echo "</center>";
echo "</table>";
?>