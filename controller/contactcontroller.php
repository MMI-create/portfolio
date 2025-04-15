<?php
 require_once 'model/contactmodel.php';
 class contacttcontroller {
 private $contactModel;
 public function __construct(contactModel $contactModel) {
 $this->contactModel = $contactModel;
 }
 // Action pour afficher tous les utilisateurs
 public function getTitle() {
 $info = $this->contactModel->getInfo();
 return $info['contact_section'];
 }
 public function getsubTitle() {
 $info = $this->contactModel->getInfo();
 return $info['description'];
 }
 public function getShowIcons() {
 $info = $this->contactModel->getInfo();
 return $info['showicons'];
 }
 // Autres actions pour la gestion des utilisateurs...
 }
 ?>