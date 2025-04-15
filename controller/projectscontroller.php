<?php
 require_once 'model/projectsmodel.php';
 class projectscontroller {
 private $projectsModel;
 public function __construct(projectsModel $projectsModel) {
 $this->projectsModel = $projectsModel;
 }
 // Action pour afficher tous les utilisateurs
 public function getTitle() {
 $info = $this->projectsModel->getInfo();
 return $info['projects_section'];
 }
 public function getsubTitle() {
 $info = $this->projectsModel->getInfo();
 return $info['description'];
 }
 public function getShowIcons() {
 $info = $this->projectsModel->getInfo();
 return $info['showicons'];
 }
 // Autres actions pour la gestion des utilisateurs...
 }
 ?>