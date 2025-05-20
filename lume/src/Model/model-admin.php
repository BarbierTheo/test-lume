<?php


class Admin
{

    /**
     * Vérifie que les identifiants sont bons
     *
     * @return connected|boolean Vrai si correct, faux si incorrent
     */
    public static function getConnect(string $pseudo, string $password)
    {
        $pdo = Database::getConnection();
        $sql = "SELECT * FROM lume_admin WHERE admin_pseudo = :pseudo;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->rowCount() == 0 ? $found = false : $found = true;
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);
        $connected = false;
        if ($found == true && $password == $admin['admin_password']){
            $connected = true;
            $_SESSION = $admin;
            unset($_SESSION['admin_password']);
            return $connected;
        } else {
            $connected = false;
            return $connected;
        }
    }
}
