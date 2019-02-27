<?php


namespace oregmiskolcz;
use Database;
use PDO;
use PDOException;

require_once 'dbconfig.php';

class hetimenuszerkesztes
{
    private $kapcsolodik;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->kapcsolodik = $db;
    }

    public function runQuery($adatbazis)
    {
        $hetimenuszerkesztes = $this->kapcsolodik->prepare($adatbazis);
        return $hetimenuszerkesztes;
    }

    public function HetmenuRogzit($leves, $masodik, $date_tol, $date_ig, $napi_date, $napok, $ar)
    {
        try {
            $hetimenuszerkesztes = $this->kapcsolodik->prepare("INSERT INTO hetimenu (leves,masodik,date_tol,date_ig, napi_date,napok,ar) 
            VALUES(:leves,:masodik,:date_tol,:date_ig,:napi_date,:napok,:ar)");
            $hetimenuszerkesztes->bindparam(":leves", $leves, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindparam(":masodik", $masodik, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindparam(":date_tol", $date_tol, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindparam(":date_ig", $date_ig, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindparam(":napi_date", $napi_date, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindparam(":napok", $napok, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindparam(":ar", $ar, PDO::PARAM_STR);
            $hetimenuszerkesztes->execute();


            return $hetimenuszerkesztes;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }



    public function HetimenuUpDate($id, $leves, $masodik, $date_tol, $date_ig, $napi_date, $napok, $ar)
    {

        try {
            $hetimenuszerkesztes = $this->kapcsolodik->prepare("UPDATE hetimenu  SET leves= :leves, masodik= :masodik, date_tol= :date_tol, date_ig= :date_ig, napi_date= :napi_date, napok= :napok, ar= :ar WHERE id = :id");
            $hetimenuszerkesztes->bindParam(":id", $id, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindParam(":leves", $leves, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindParam(":masodik", $masodik, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindParam(":date_tol", $date_tol, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindParam(":date_ig", $date_ig, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindParam(":napi_date", $napi_date, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindParam(":napok", $napok, PDO::PARAM_STR);
            $hetimenuszerkesztes->bindParam(":ar", $ar, PDO::PARAM_STR);
            $hetimenuszerkesztes->execute();
            return $hetimenuszerkesztes;
        } catch (PDOException $hetimenuszerkesztes) {
            echo $hetimenuszerkesztes->getMessage();
        }
    }
    public function megrendeloleKerdez($id)
    {

        try {
            $hetimenuszerkesztes = $this->kapcsolodik->prepare("SELECT *  FROM hetimenu");
            $hetimenuszerkesztes->execute(array(':id' => $id));
            $hetimenuszerkesztes->execute();

            return $hetimenuszerkesztes;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
        exit();
    }

    public function fetch($rs)
    {

        $row = mysqli_fetch_assoc($rs);

        return $row;
    }

}
