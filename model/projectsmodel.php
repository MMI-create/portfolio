<?php
 class projectsModel {
 private $pdo;
 // constructeur
 public function __construct(PDO $pdo) {
 $this->pdo = $pdo;
 }
 // Méthode pour récupérer les informations de la base projects
 public function getInfo() {
 $sql = 'SELECT * FROM projects';
 $statement = $this->pdo->query($sql);
 return $statement->fetch(PDO::FETCH_ASSOC);
 }
 }
 ?>