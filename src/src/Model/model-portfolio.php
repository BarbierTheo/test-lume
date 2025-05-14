<?php

class Portfolio
{

    /**
     * Ajoute un projet au portfolio
     *
     * @return projectId|integer ID du dernier projet ajouté à la BDD
     */
    public static function addProject($safepost)
    {
        $pdo = Database::getConnection();

        $hasSurface = !empty($safepost['surface']);

        $sql = "INSERT INTO `lume_project`(`project_name`, `project_tagline`, `project_description`, `project_date`, `project_place`, " . ($hasSurface ? "`project_area`," : "") . " `category_id`) 
        VALUES (:title, :tagline, :description, :date, :place, " . ($hasSurface ? ":area," : "") . ":category)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':title', Safe::input($safepost['title']), PDO::PARAM_STR);
        $stmt->bindValue(':tagline', Safe::input($safepost['tagline']), PDO::PARAM_STR);
        $stmt->bindValue(':description', Safe::input($safepost['description']), PDO::PARAM_STR);
        $stmt->bindValue(':date', Safe::input($safepost['date']), PDO::PARAM_STR);
        $stmt->bindValue(':place', Safe::input($safepost['place']), PDO::PARAM_STR);
        
        if($hasSurface){
            $stmt->bindValue(':area', Safe::input($safepost['surface']), PDO::PARAM_STR);
        }

        $stmt->bindValue(':category', Safe::input($safepost['categorie']), PDO::PARAM_INT);

        $stmt->execute();
        
        $projectId = $pdo->lastInsertId();
        return $projectId;

    }
}