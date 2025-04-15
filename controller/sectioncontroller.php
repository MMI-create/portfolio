<?php
 require_once 'model/sectionmodel.php';
 class sectioncontroller {
 private $sectionModel;
 public function __construct(sectionModel $sectionModel) {
 $this->sectionModel = $sectionModel;
 }
 // Action pour afficher tous les utilisateurs
 public function getTitle() {
 $info = $this->sectionModel->getInfo();
 return $info['home_section'];
 }
 public function getsubTitle() {
 $info = $this->sectionModel->getInfo();
 return $info['about_section'];
 }
 public function getShowIcons() {
 $info = $this->sectionModel->getInfo();
 return $info['contact_section'];
 }
 // Autres actions pour la gestion des utilisateurs...
 }
 ?>