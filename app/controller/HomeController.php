<?php
class APP__UsrHomeController {
 public function actionShowAboutMe() {
   require_once App__getViewPath("usr/home/aboutMe");
 }
}