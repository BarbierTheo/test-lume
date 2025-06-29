<?php

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
define('ROOT', __DIR__);

switch ($uri) {
    case '':
    case 'home':
        require ROOT . '/../src/Controller/controller-home.php';
        break;

    case 'services':
        require ROOT . '/../src/Controller/controller-services.php';
        break;

    case 'portfolio':
        require ROOT . '/../src/Controller/controller-gallery.php';
        break;

    case 'project':
        require ROOT . '/../src/Controller/controller-projets.php';
        break;

    case 'about':
        require ROOT . '/../src/Controller/controller-about.php';
        break;

    case 'contact':
        require ROOT . '/../src/Controller/controller-contact.php';
        break;

    case 'faq':
        require ROOT . '/../src/Controller/controller-faq.php';
        break;

    case 'legal':
        require ROOT . '/../src/View/view-legal.php';
        break;

    case 'admin':
        require ROOT . '/../src/Controller/controller-dashboard.php';
        break;

    case 'login':
        require ROOT . '/../src/Controller/controller-login.php';
        break;

    case 'admin/contact':
        require ROOT . '/../src/Controller/controller-dashboard-contact.php';
        break;

    case 'admin/contact/delete':
        require ROOT . '/../src/Controller/controller-contactdelete.php';
        break;

    case 'admin/faq':
        require ROOT . '/../src/Controller/controller-dashboard-faq.php';
        break;

    case 'admin/faq/add':
        require ROOT . '/../src/Controller/controller-dashboard-faq-add.php';
        break;

    case 'admin/faq/modify':
        require ROOT . '/../src/Controller/controller-dashboard-faq-modify.php';
        break;

    case 'admin/faq/delete':
        require ROOT . '/../src/Controller/controller-faqdelete.php';
        break;

    case 'admin/portfolio':
        require ROOT . '/../src/Controller/controller-dashboard-portfolio.php';
        break;

    case 'admin/portfolio/add':
        require ROOT . '/../src/Controller/controller-dashboard-portfolio-add.php';
        break;

    case 'admin/portfolio/modify':
        require ROOT . '/../src/Controller/controller-dashboard-portfolio-modify.php';
        break;

    case 'admin/portfolio/delete':
        require ROOT . '/../src/Controller/controller-projectdelete.php';
        break;

    case 'admin/portfolio/imgdelete':
        require ROOT . '/../src/Controller/controller-imagedelete.php';
        break;

    case 'logout':
        require ROOT . '/../src/Controller/controller-logout.php';
        break;

    default:
        http_response_code(404);
        require ROOT . '/../src/View/404.php';
        break;
}
