<?php
include 'database.php'; // Asegúrate de incluir tu archivo de conexión
$result = $conn->query("SELECT * FROM products");
 if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='3'>No hay productos disponibles</td></tr>";
}
$result = $conn->query("SELECT * FROM products");

if ($result-> num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='3'>No hay productos disponibles</td></tr>";
}
?>
