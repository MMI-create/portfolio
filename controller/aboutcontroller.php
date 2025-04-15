<?php
 require_once 'model/aboutmodel.php';
 class aboutcontroller {
 private $aboutModel;
 public function __construct(aboutModel $aboutModel) {
 $this->aboutModel = $aboutModel;
 }
 // Action pour afficher tous les utilisateurs
 public function getTitle() {
 $info = $this->aboutModel->getInfo();
 return $info['about_section'];
 }
 public function getsubTitle() {
 $info = $this->aboutModel->getInfo();
 return $info['description'];
 }
 public function getShowIcons() {
 $info = $this->aboutModel->getInfo();
 return $info['showicons'];
 }
 // Autres actions pour la gestion des utilisateurs...
 }
 ?>