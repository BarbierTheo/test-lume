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

        $stmt = $pdo->query("SELECT `faq_id`,`faq_title`,`faq_article`, `faq_timestamp` FROM lume_faq");
        $faq = $stmt->fetchAll();
        return $faq;
    }
    
}
