<?php
require_once("/Applications/XAMPP/xamppfiles/htdocs/farah-main/config.php"); // Change it later !!!
class OrderController{
    function getAllOrders()
    {
        $connection = config::getConnection();
        $sql = "select * from orders";
        try {
            $query = $connection->prepare($sql);
            $query->execute();
            $products = $query->fetchAll();
            return $products;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function getOrderById($id)
    {
        $connection = config::getConnection();
        $sql = "select * from orders WHERE id = :id";
        try {
            $query = $connection->prepare($sql);
            $query->execute(["id"=>$id]);
            $products = $query->fetchAll();
            return $products;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function getOrderByIdUser($id)
    {
        $connection = config::getConnection();
                $sql = "select * from orders WHERE idUser = :idUser";
                try {
                    $query = $connection->prepare($sql);
                    $query->execute(["idUser"=>$id]);
                    $products = $query->fetchAll();
                    return $products;
                } catch (Exception $e) {
                    die('Erreur: ' . $e->getMessage());
                }
    }
    function addOrder($idUser, $idProduct, $status){
        $connection = config::getConnection();
        $query = "UPDATE product SET quantity = quantity - 1 WHERE id = :idProduct";
                                $request = $connection->prepare($query);
                                $request->execute(["idProduct" => $idProduct]);
        $sql = "insert into orders (idUser, idProduct, status) values (?,?,?)";
        try {
            $request = $connection->prepare($sql);
            $request->execute([
            intval($idUser),
            intval($idProduct),
            $status
            ]);
        } catch (Exception $e) {

            echo "Error: " . $e->getMessage();
        }
    }
    function editStatus($id){
    $status = "Delivered";
    $connection = config::getConnection();
            $sql = "update orders set status = :status where id = :id";
            try {
                $request = $connection->prepare($sql);
                $request->execute(["status" => $status, "id" => $id,                ]);
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
    }
    function removeOrder($id, $idProduct)
    {
        $connection = config::getConnection();
        $query = "UPDATE product SET quantity = quantity + 1 WHERE id = :idProduct";
                        $request = $connection->prepare($query);
                        $request->execute(["idProduct" => $idProduct]);
                        $req = "delete from orders where id = :id";
                         $request = $connection->prepare($req);
                                                $request->execute(["id" => $id]);

    }
}
?>