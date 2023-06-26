<?php
require_once "BaseDao.php";

class MidtermDao extends BaseDao {

    public function __construct(){
        parent::__construct();
    }

    /** TODO
    * Implement DAO method used add new investor to investor table and cap-table
    */
    public function investor(){
        $query = 
        
        //query for investor
        // "SELECT * FROM investors"; //placeholder


         $stmt = $this->conn->prepare($query);
         $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /** TODO
    * Implement DAO method to validate email format and check if email exists
    */
    public function investor_email($email){
        $query = 
        
        //query for investor_email
        // "SELECT * FROM investors"; //placeholder


         $stmt = $this->conn->prepare($query);
         $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /** TODO
    * Implement DAO method to return list of investors according to instruction in MidtermRoutes.php
    */
    public function investors(){
        $query = 
        
        //query for investors
        // "SELECT * FROM investors"; //placeholder


         $stmt = $this->conn->prepare($query);
         $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}
?>
