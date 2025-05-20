<?php

class Portfolio
{


    /**
     * Récupère tous les projets du portfolio
     *
     * @return projects|array Tableau contenant tous les projets
     */
    public static function getAllProjects()
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT `project_id`, `project_name`, `project_tagline`, `project_description`, `project_date`, `project_place`, `project_area`, `project_timestamp`, `category_id`, `img_url` FROM `lume_project` NATURAL JOIN `lume_img` WHERE `img_order` = 1  ORDER BY `project_id` DESC");
        $projects = $stmt->fetchAll();
        return $projects;
    }

    /**
     * Récupère un projet par son ID
     *
     * @return project|array Tableau contenant tous les projets
     */
    public static function getOneProject($project_id)
    {
        $pdo = Database::getConnection();
        $sql = "SELECT `project_id`, `project_name`, `project_tagline`, `project_description`, `project_date`, `project_place`, `project_area`, `project_timestamp`, `category_id` FROM `lume_project` WHERE `project_id` = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', intval($project_id), PDO::PARAM_INT);
        $stmt->execute();

        $project = $stmt->fetch(PDO::FETCH_ASSOC);
        return $project;
    }



    /**
     * Récupère les images d'un projet par l'ID du projet
     *
     * @return images|array Images du projets
     */
    public static function getImgFromProject($project_id)
    {
        $pdo = Database::getConnection();

        $sql = "SELECT `img_id`, `img_url`, `img_alt`, `img_order`, `project_id` FROM `lume_img` WHERE `project_id` = :id ORDER BY `img_order` ASC";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', intval($project_id), PDO::PARAM_INT);
        $stmt->execute();

        $images = $stmt->fetchAll();
        return $images;
    }


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

        if ($hasSurface) {
            $stmt->bindValue(':area', Safe::input($safepost['surface']), PDO::PARAM_STR);
        }

        $stmt->bindValue(':category', Safe::input($safepost['categorie']), PDO::PARAM_INT);

        $stmt->execute();

        $projectId = $pdo->lastInsertId();
        return $projectId;
    }

    /**
     * Update un projet du portfolio
     *
     * @return projectId|integer ID du dernier projet ajouté à la BDD
     */
    public static function updateProject($safepost, $project_id)
    {
        $pdo = Database::getConnection();

        $hasSurface = !empty($safepost['surface']);

        // $sql = "INSERT INTO `lume_project`(`project_name`, `project_tagline`, `project_description`, `project_date`, `project_place`, " . ($hasSurface ? "`project_area`," : "") . " `category_id`) 
        // VALUES (:title, :tagline, :description, :date, :place, " . ($hasSurface ? ":area," : "") . ":category)";
        $sql = "UPDATE `lume_project` SET `project_name`= :title,
                                    `project_tagline`= :tagline,
                                    `project_description`= :description,
                                    `project_date`= :date,
                                    `project_place`= :place,"
            . ($hasSurface ? "`project_area` = :area," : "") .
            "`category_id`= :category
                                    WHERE `project_id` = :project_id";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':title', Safe::input($safepost['title']), PDO::PARAM_STR);
        $stmt->bindValue(':tagline', Safe::input($safepost['tagline']), PDO::PARAM_STR);
        $stmt->bindValue(':description', Safe::input($safepost['description']), PDO::PARAM_STR);
        $stmt->bindValue(':date', Safe::input($safepost['date']), PDO::PARAM_STR);
        $stmt->bindValue(':place', Safe::input($safepost['place']), PDO::PARAM_STR);

        if ($hasSurface) {
            $stmt->bindValue(':area', Safe::input($safepost['surface']), PDO::PARAM_STR);
        }

        $stmt->bindValue(':category', Safe::input($safepost['categorie']), PDO::PARAM_INT);
        $stmt->bindValue(':project_id', Safe::input($project_id), PDO::PARAM_INT);

        return $stmt->execute();
    }

    /**
     * Ajoute les images au portfolio
     *
     * @return i|integer Nombres d'image insérés
     */
    public static function addImagesToProject($images, $projectId)
    {
        $pdo = Database::getConnection();
        $i = 1;

        $sql = "INSERT INTO `lume_img`(`img_url`, `img_order`, `project_id`) VALUES (:img_url, :img_order, :project_id)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':project_id', intval(Safe::input($projectId)), PDO::PARAM_INT);
        foreach ($images as $value) {
            $stmt->bindValue(':img_url', Safe::input($value), PDO::PARAM_STR);
            $stmt->bindValue(':img_order', $i, PDO::PARAM_INT);
            $i++;
            $stmt->execute();
        }
        return $i;
    }

    /**
     * Ajoute une images au portfolio
     *
     * 
     */
    public static function addImageToProject($image, $order, $projectId)
    {
        $pdo = Database::getConnection();

        $sql = "INSERT INTO `lume_img`(`img_url`, `img_order`, `project_id`) VALUES (:img_url, :img_order, :project_id)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':project_id', intval(Safe::input($projectId)), PDO::PARAM_INT);
        $stmt->bindValue(':img_url', Safe::input($image), PDO::PARAM_STR);
        $stmt->bindValue(':img_order', $order, PDO::PARAM_INT);
        return $stmt->execute();
    }

    /**
     * Update une image d'un projet
     *
     *
     */
    public static function updateImage($img_url, $img_id)
    {
        $pdo = Database::getConnection();

        $sql = "UPDATE `lume_img` SET `img_url` = :img_url WHERE `img_id` = :img_id";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':img_url', Safe::input($img_url), PDO::PARAM_STR);
        $stmt->bindValue(':img_id', Safe::input($img_id), PDO::PARAM_INT);

        return $stmt->execute();
    }

    /**
     * Compte le nombres de projets dans le portfolio
     *
     * @return result|int Nombres de projets sur le site
     */
    public static function countAllProjects()
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT count('project_id') AS `count` FROM lume_project");
        $result = $stmt->fetch();
        return $result['count'];
    }

    /**
     * Compte le nombres d'images dans un projet
     *
     * @return result|int Nombres d'image au sein du projet
     */
    public static function countImageProject($project_id)
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT COUNT(`img_id`) AS count FROM `lume_img` WHERE `project_id` = " . $project_id);
        $result = $stmt->fetch();
        return $result['count'];
    }

    /**
     * Compte le nombres d'images dans le portfolio
     *
     * @return result|int Nombres d'images sur le site
     */
    public static function countAllImages()
    {
        $pdo = Database::getConnection();

        $stmt = $pdo->query("SELECT count('img_id') AS `count` FROM lume_img");
        $result = $stmt->fetch();
        return $result['count'];
    }

    /**
     * Récupère l'URL d'une image selon le projet et son ordre
     *
     * @return oneImage|string Lien vers l'image
     */
    public static function getOneImage(int $projectId, int $img_index)
    {
        $pdo = Database::getConnection();

        $sql = "SELECT `img_url`, `img_id` FROM `lume_img` WHERE `project_id` = :project AND `img_order` = :index";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':project', Safe::input($projectId), PDO::PARAM_INT);
        $stmt->bindValue(':index', Safe::input($img_index), PDO::PARAM_INT);

        $stmt->execute();

        $oneImage = $stmt->fetch();
        return $oneImage;
    }

    /**
     * Supprimer projet du portfolio, puis ses images par cascade
     *
     * @return boolean true si executé, false si ne marche pas
     */
    public static function deleteProject(int $id)
    {
        $pdo = Database::getConnection();

        $sql = "DELETE FROM `lume_project` WHERE `project_id` = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }
    
}
