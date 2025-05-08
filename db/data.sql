
-- FAQ exemples
INSERT INTO `lume_faq`( `faq_title`, `faq_article`) VALUES 
('Pourquoi faire appel à un architecte pour mon projet ?','Un architecte apporte son expertise pour créer un projet esthétique, fonctionnel et conforme aux normes. Il optimise les coûts, gère le respect des délais et supervise les travaux, garantissant la qualité et la sécurité du chantier. En plus, il veille à la valorisation de votre bien immobilier à travers une conception réfléchie et unique.'),
("Quelles sont les étapes d'un projet avec une agence ?","Le processus commence par une étude de vos besoins et une définition du cahier des charges. L'agence conçoit ensuite un projet adapté, valide avec vous avant de commencer les travaux. Durant la réalisation, elle supervise le chantier et s'assure de la qualité. Enfin, elle procède à la réception du projet et aux ajustements nécessaires."),
('Vous voulez proposer un projet à distance ?',"Il est tout à fait possible de nous confier un projet à distance. Grâce aux outils numériques, nous pouvons échanger, collaborer et suivre l’avancement du projet de manière fluide, tout en respectant vos attentes et délais.");


-- Admin add
INSERT INTO `lume_admin`(`admin_pseudo`, `admin_password`) VALUES ('admin','1234');

-- Messages

INSERT INTO `lume_contact`(`contact_nom`, `contact_prenom`, `contact_email`, `contact_telephone`, `contact_title`, `contact_message`) VALUES
('Dupont', 'Claire', 'claire.dupont@example.com', '0612345678', 'Projet de rénovation maison ancienne', 'Bonjour, je possède une maison ancienne en pierre et je souhaiterais la rénover tout en conservant son cachet. Pourriez-vous me proposer un accompagnement architectural sur ce projet ? Merci d’avance.'),
('Lemoine', 'Romain', 'r.lemoine@mail.com', '0678543210', 'Demande de devis pour une extension', 'Bonjour, nous souhaitons agrandir notre maison avec une extension en ossature bois. Serait-il possible d’avoir un devis estimatif pour une mission complète d’architecte ?'),
('Petit', 'Alice', 'a.petit@gmail.com', '0754123689', 'Permis de construire', 'Bonjour, je cherche un architecte pour m’aider à déposer un permis de construire pour un terrain que je viens d’acquérir. Merci de me dire si vous proposez ce service.'),
('Benoit', 'Luc', 'luc.benoit@orange.fr', '0698432157', 'Aménagement intérieur', 'Bonjour, je souhaite repenser complètement l’aménagement intérieur de mon appartement. Travaillez-vous également sur les projets de décoration ?'),
('Morel', 'Sophie', 'sophie.morel@yahoo.fr', '0667892345', 'Construction d’une maison contemporaine', 'Bonjour, nous souhaitons faire construire une maison contemporaine sur un terrain récemment acquis. Nous cherchons un architecte pour concevoir le projet.'),
('Durand', 'Julien', 'julien.durand@free.fr', '0645872310', 'Réhabilitation de local commercial', 'Bonjour, j’ai un local commercial que je souhaite transformer en cabinet de soins. Avez-vous de l’expérience dans ce type de réhabilitation ?'),
('Fabre', 'Élodie', 'elodie.fabre@mail.com', '0632147854', 'Surélévation maison', 'Bonjour, nous envisageons de surélever notre maison pour ajouter un étage. Est-ce un projet que vous pouvez prendre en charge ?'),
('Chevalier', 'Antoine', 'antoine.chevalier@outlook.com', '0685471236', 'Projet d’atelier en fond de cour', 'Bonjour, je voudrais faire construire un petit atelier dans le fond de mon jardin. Je voudrais savoir si un permis est nécessaire et si vous pouvez m’aider à concevoir ce projet.'),
('Giraud', 'Marion', 'marion.giraud@laposte.net', '0654237890', 'Demande de conseil en urbanisme', 'Bonjour, j’ai une question sur les règles d’urbanisme en vigueur pour mon terrain situé en zone B1. Pourriez-vous m’accompagner ?'),
('Leclerc', 'Hugo', 'hugo.leclerc@gmail.com', '0678941256', 'Projet maison passive', 'Bonjour, je souhaite construire une maison passive. Avez-vous une expertise sur les matériaux et techniques permettant de respecter ces normes ?');
