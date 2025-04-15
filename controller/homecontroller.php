<?php
 require_once 'model/homemodel.php';
 class HomeController {
 private $homeModel;
 public function __construct(HomeModel $homeModel) {
 $this->homeModel = $homeModel;
 }
 // Action pour afficher tous les utilisateurs
 public function getTitle() {
 $info = $this->homeModel->getInfo();
 return $info['nom_prenom'];
 }
 public function getsubTitle() {
 $info = $this->homeModel->getInfo();
 return $info['description'];
 }
 public function getShowIcons() {
 $info = $this->homeModel->getInfo();
 return $info['showicons'];
 }
 // Autres actions pour la gestion des utilisateurs...
 }
 ?>