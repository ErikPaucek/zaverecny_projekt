<?php
require_once "db-connection.php";

class Menu {
    private $db;

    public function __construct( $db) {
        $this->db = $db;
    }

    public function create($obrazok, $nazov, $popis, $cena, $typ) {
        $sql = "INSERT INTO menu (obrazok, nazov, popis, cena, typ) VALUES (:obrazok, :nazov, :popis, :cena, :typ)";
        $stmt = $this->db->prepare($sql);
        $adjustedPath = '../assets/img/' . basename($obrazok);
        $stmt->bindParam(':obrazok', $adjustedPath);
        $stmt->bindParam(':nazov', $nazov);
        $stmt->bindParam(':popis', $popis);
        $stmt->bindParam(':cena', $cena);
        $stmt->bindParam(':typ', $typ);
        $stmt->execute();
    }
    
    public function read($typ, $sectionClass) {
    $sql = "SELECT * FROM menu WHERE typ = :typ";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':typ', $typ);
    $stmt->execute(); 
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<section class='" . $sectionClass . "'>";
        echo "<div>";
        echo "<img src='" . $row['obrazok'] . "' alt='Menu Image'><br>";
        echo "<p>" . $row['nazov'] . "</p><br>";
        echo "<p>" .$row['popis'] ."</p><br>";
        echo "<p>" .$row['cena']."€" . "</p><br>";
        echo '<a href="../update.php?id=' . $row['id'] . '" class="btn btn-update btn-sm">Update</a> ';
        echo '<a href="../delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Delete</a>';
        echo "</div>";
        echo "</section>";
    }
}

public function update($id, $obrazok, $nazov, $popis, $cena) {
    $sql = "UPDATE menu SET obrazok = :obrazok, nazov = :nazov, popis = :popis, cena = :cena WHERE id = :id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $adjustedPath = '../assets/img/' . basename($obrazok);
    $stmt->bindParam(':obrazok', $adjustedPath);
    $stmt->bindParam(':nazov', $nazov);
    $stmt->bindParam(':popis', $popis);
    $stmt->bindParam(':cena', $cena);
    $stmt->execute();
}

    

    public function delete($id) {
        $sql = "DELETE FROM menu WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM menu WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
        $stmt->execute(); 
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }
}

?>
