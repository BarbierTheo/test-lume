<?php

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
define('ROOT', __DIR__);

switch ($uri) {
    case '':
    case 'home':
        require __DIR__ . '/../src/Controller/controller-home.php';
        break;

    case 'services':
        require __DIR__ . '/../src/Controller/controller-services.php';
        break;

    case 'portfolio':
        require __DIR__ . '/../src/Controller/controller-gallery.php';
        break;

    case 'project':
        require __DIR__ . '/../src/Controller/controller-projets.php';
        break;

    case 'about':
        require __DIR__ . '/../src/Controller/controller-about.php';
        break;

    case 'contact':
        require __DIR__ . '/../src/Controller/controller-contact.php';
        break;

    case 'legal':
        require __DIR__ . '/../src/View/view-legal.php';
        break;

    case 'admin':
        require __DIR__ . '/../src/Controller/controller-dashboard.php';
        break;

    case 'login':
        require __DIR__ . '/../src/Controller/controller-login.php';
        break;

    case 'admin/contact':
        require __DIR__ . '/../src/Controller/controller-dashboard-contact.php';
        break;

    case 'admin/contact/delete':
        require __DIR__ . '/../src/Controller/controller-contactdelete.php';
        break;

    case 'admin/faq':
        require __DIR__ . '/../src/Controller/controller-dashboard-faq.php';
        break;

    case 'admin/faq/add':
        require __DIR__ . '/../src/Controller/controller-dashboard-faq-add.php';
        break;

    case 'admin/faq/modify':
        require __DIR__ . '/../src/Controller/controller-dashboard-faq-modify.php';
        break;

    case 'admin/faq/delete':
        require __DIR__ . '/../src/Controller/controller-faqdelete.php';
        break;

    case 'admin/portfolio':
        require __DIR__ . '/../src/Controller/controller-dashboard-portfolio.php';
        break;

    case 'admin/portfolio/add':
        require __DIR__ . '/../src/Controller/controller-dashboard-portfolio-add.php';
        break;

    case 'admin/portfolio/modify':
        require __DIR__ . '/../src/Controller/controller-dashboard-portfolio-modify.php';
        break;

    case 'admin/portfolio/delete':
        require __DIR__ . '/../src/Controller/controller-projectdelete.php';
        break;

    case 'logout':
        require __DIR__ . '/../src/Controller/controller-logout.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/../src/View/404.php';
        break;
}
