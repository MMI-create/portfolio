<?php
 class sectionmodel {
 private $pdo;
 // constructeur
 public function __construct(PDO $pdo) {
 $this->pdo = $pdo;
 }
 // Méthode pour récupérer les informations de la base section_control
 public function getInfo() {
 $sql = 'SELECT * FROM section_control';
 $statement = $this->pdo->query($sql);
 return $statement->fetch(PDO::FETCH_ASSOC);
 }
 }
 ?>