CREATE TABLE lume_contact(
   contact_id INT AUTO_INCREMENT,
   contact_nom VARCHAR(50) NOT NULL,
   contact_prenom VARCHAR(50) NOT NULL,
   contact_email VARCHAR(70) NOT NULL,
   contact_telephone VARCHAR(12),
   contact_description TEXT NOT NULL,
   PRIMARY KEY(contact_id)
);

CREATE TABLE lume_admin(
   admin_id INT AUTO_INCREMENT,
   admin_pseudo VARCHAR(50) NOT NULL,
   admin_password VARCHAR(250) NOT NULL,
   PRIMARY KEY(admin_id),
   UNIQUE(admin_pseudo)
);

CREATE TABLE lume_category(
   category_id INT AUTO_INCREMENT,
   category_name VARCHAR(50) NOT NULL,
   PRIMARY KEY(category_id),
   UNIQUE(category_name)
);

CREATE TABLE lume_faq(
   faq_id INT AUTO_INCREMENT,
   faq_title VARCHAR(200) NOT NULL,
   faq_article TEXT NOT NULL,
   PRIMARY KEY(faq_id)
);

CREATE TABLE lume_faq_index(
   index_id INT AUTO_INCREMENT,
   faq_id INT NOT NULL,
   PRIMARY KEY(index_id),
   FOREIGN KEY(faq_id) REFERENCES lume_faq(faq_id)
);

CREATE TABLE lume_project(
   project_id INT AUTO_INCREMENT,
   project_name VARCHAR(50) NOT NULL,
   project_tagline VARCHAR(200) NOT NULL,
   project_description TEXT NOT NULL,
   project_date VARCHAR(50) NOT NULL,
   project_place VARCHAR(200),
   project_customer VARCHAR(100),
   project_area INT,
   category_id INT NOT NULL,
   PRIMARY KEY(project_id),
   FOREIGN KEY(category_id) REFERENCES lume_category(category_id)
);

CREATE TABLE lume_img(
   img_id INT AUTO_INCREMENT,
   img_url VARCHAR(200) NOT NULL,
   img_alt VARCHAR(100) NOT NULL,
   img_order INT NOT NULL,
   project_id INT NOT NULL,
   PRIMARY KEY(img_id),
   FOREIGN KEY(project_id) REFERENCES lume_project(project_id)
);
