<?php

class Contact
{

    /**
     * Récupère tous les messages
     *
     * @return messages|array Tableau contenant tous les messages
     */
    public static function getAllMessages()
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT `contact_id`,`contact_nom`,`contact_prenom` ,`contact_email`, `contact_telephone`, `contact_title`, `contact_message`, `contact_status` FROM lume_contact ORDER BY `contact_id` DESC");
        $messages = $stmt->fetchAll();
        return $messages;
    }

    /**
     * Récupère un message par son ID
     *
     * @return message|array Tableau contenant toutes les data du message
     */
    public static function getOneMessage($message_id)
    {
        $pdo = Database::getConnection();

        $sql = "SELECT `contact_id`,`contact_nom`,`contact_email`, `contact_telephone`, `contact_message`, `contact_status` FROM lume_contact WHERE `contact_id` = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', intval($message_id), PDO::PARAM_INT);
        $stmt->execute();

        $message = $stmt->fetch();
        return $message;
    }

    /**
     * Compte le nombre de messages reçus par statut
     *
     * @return result|int Nombres de messages reçus
     */
    public static function countMessageByStatus()
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT `contact_status` as `status`, count(`contact_status`) as `count` FROM `lume_contact` GROUP BY `contact_status`; ");
        $result = $stmt->fetchAll();
        return $result;
    }

    /**
     * Compte le nombre de messages reçus
     *
     * @return result|int Nombres de messages reçus
     */
    public static function countAllMessage()
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT count('contact_id') AS `countMessage` FROM lume_contact");
        $result = $stmt->fetchAll();
        return $result[0]['countMessage'];
    }

    /**
     * Envoi d'un message dans la BDD
     *
     * @return boolean true si executé, false si ne marche pas
     */
    public static function sendMessage($surname, $firstname, $email, $tel, $title, $message)
    {
        $pdo = Database::getConnection();

        $sql = "INSERT INTO `lume_contact`(`contact_nom`, `contact_prenom`, `contact_email`, `contact_telephone`, `contact_title`, `contact_message`, `contact_status`) VALUES 
        (:surname, :firstname, :email, :tel, :title, :message, 'unread')";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':surname', Safe::input($surname), PDO::PARAM_STR);
        $stmt->bindValue(':firstname', Safe::input($firstname), PDO::PARAM_STR);
        $stmt->bindValue(':email', Safe::input($email), PDO::PARAM_STR);
        $stmt->bindValue(':tel', Safe::input($tel), PDO::PARAM_STR);
        $stmt->bindValue(':title', Safe::input($title), PDO::PARAM_STR);
        $stmt->bindValue(':message', Safe::input($message), PDO::PARAM_STR);

        return $stmt->execute();
    }


    /**
     * Supprimer un message
     *
     * @return boolean true si executé, false si ne marche pas
     */
    public static function deleteMessage(int $id)
    {
        $pdo = Database::getConnection();

        $sql = "DELETE FROM `lume_contact` WHERE `contact_id` = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }

    /**
     * Modifie le statut d'un message
     *
     * @return boolean true si executé, false si ne marche pas
     */
    public static function changeMessageStatus(int $id, string $status)
    {
        $pdo = Database::getConnection();

        $sql = "UPDATE `lume_contact` SET `contact_status`= :status WHERE `contact_id` = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':status', $status, PDO::PARAM_STR);

        return $stmt->execute();
    }

    // UPDATE `lume_contact` SET `contact_status`='read' WHERE `contact_id`

}
