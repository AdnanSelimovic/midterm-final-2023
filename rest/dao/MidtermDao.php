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

    }

    /** TODO
    * Implement DAO method to validate email format and check if email exists
    */
    public function investor_email($email){

    }

    /** TODO
    * Implement DAO method to return list of investors according to instruction in MidtermRoutes.php
    */
    public function investors(){
        $query = 
        // "SELECT i.first_name, i.last_name, i.company, SUM(ct.diluted_shares) AS total_shares
        // FROM investors i
        // JOIN cap_table ct ON i.id = ct.investor_id
        // GROUP BY i.id";

        "SELECT * FROM investors WHERE id > 0";


         $stmt = $this->conn->prepare($query);
         $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}
?>
