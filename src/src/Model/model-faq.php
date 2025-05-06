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
     * Compte le nombres d'articles de la FAQ
     *
     * @return result|int Nombres d'articles sur le site
     */
    public static function countAllFaq()
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT count('faq_id') AS `countFAQ` FROM lume_faq");
        $result = $stmt->fetchAll();
        return $result;
    }

}
