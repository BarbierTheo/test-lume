<?php

class Faq
{

    /**
     * Récupère tous les articles de la FAQ
     *
     * @return faq|array Tableau contenant tous les articles (ID, title, article, timestamp)
     */
    public static function getAllFaq()
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT `faq_id`,`faq_title`,`faq_article`, `faq_timestamp` FROM lume_faq ORDER BY `faq_id` DESC");
        $faq = $stmt->fetchAll();
        return $faq;
    }

    /**
     * Récupère un article par son ID de la FAQ
     *
     * @return faq|array Tableau contenant toutes les data de l'article
     */
    public static function getOneFaq($faq_id)
    {
        $pdo = Database::getConnection();

        $sql = "SELECT `faq_id`,`faq_title`,`faq_article`, `faq_timestamp` FROM lume_faq WHERE `faq_id` = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', intval($faq_id), PDO::PARAM_INT);
        $stmt->execute();

        $faq = $stmt->fetch();
        return $faq;
    }

    /**
     * Récupère tous les articles selon le titre
     *
     * @return faq|array Tableau contenant tous les articles
     */
    public static function searchFaq($search)
    {
        $search = "%" . Safe::input($search) . "%";
        $pdo = Database::getConnection();

        $stmt = $pdo->prepare("SELECT `faq_id`,`faq_title`,`faq_article`, `faq_timestamp` FROM lume_faq
        WHERE `faq_title` LIKE :search 
        ORDER BY `faq_id` DESC");
        $stmt->bindValue(':search', $search, PDO::PARAM_STR);
        $stmt->execute();

        $faq = $stmt->fetchAll();
        return $faq;
    }

    /**
     * Compte le nombres d'articles de la FAQ
     *
     * @return result|int Nombres d'articles sur le site
     */
    public static function countAllFaq()
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT count('faq_id') AS `countFAQ` FROM lume_faq");
        $result = $stmt->fetchAll();
        return $result[0]['countFAQ'];
    }

    /**
     * Ajout d'un article à la FAQ
     *
     * @return boolean true si executé, false si ne marche pas
     */
    public static function addFaq(string $title, string $article)
    {
        $pdo = Database::getConnection();

        $sql = "INSERT INTO `lume_faq`( `faq_title`, `faq_article`, `faq_timestamp`) VALUES (:title, :article, NOW());";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':title', Safe::input($title), PDO::PARAM_STR);
        $stmt->bindValue(':article', $article, PDO::PARAM_STR);

        return $stmt->execute();
    }

    /**
     * Modifier un article de la FAQ
     *
     * @return boolean true si executé, false si ne marche pas
     */
    public static function modifyFaq(string $title, string $article, int $id)
    {
        $pdo = Database::getConnection();

        $sql = "UPDATE `lume_faq` SET `faq_title`= :title,`faq_article`= :article WHERE `faq_id` = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':title', Safe::input($title), PDO::PARAM_STR);
        $stmt->bindValue(':article', $article, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }

    /**
     * Supprimer un article de la FAQ
     *
     * @return boolean true si executé, false si ne marche pas
     */
    public static function deleteFaq(int $id)
    {
        $pdo = Database::getConnection();

        $sql = "DELETE FROM `lume_faq` WHERE `faq_id` = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }
}
