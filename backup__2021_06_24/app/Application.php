<?php
class App__Application {
  public function getEnvCode(): string {
    if ( $_SERVER['DOCUMENT_ROOT'] == '/web/2021_04_full/site13/public' ) {
      return 'prod';
    }

    return "dev";
  }

  public function getProdSiteDomain() {
    return "jsb-coding.site";
  }

  public function getDbConnectionByEnv(): mysqli {
    $envCode = $this->getEnvCode();

    if ( $envCode == 'dev' ) {
      $dbHost = "127.0.0.1";
      $dbId = "sbsst";
      $dbPw = "sbs123414";
      $dbName = "php_blog_2021";
    }
    else if ( $envCode == 'prod' ) {
      $dbHost = "127.0.0.1";
      $dbId = "st__2021_04_full__site13";
      $dbPw = "1234";
      $dbName = "st__2021_04_full__site13";
    }

    $dbConn = mysqli_connect($dbHost, $dbId, $dbPw, $dbName) or die("DB CONNECTION ERROR");
    
    return $dbConn;
  }
}