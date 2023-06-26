CREATE DATABASE `we_love_food`;
CREATE TABLE `we_love_food`.`users` ( `user_id` INT NOT NULL AUTO_INCREMENT , `full_name` VARCHAR(64) NOT NULL , `email` VARCHAR(512) NOT NULL , `password` VARCHAR(512) NOT NULL , `age` INT NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = MyISAM;
CREATE TABLE `we_love_food`.`recipes` ( `recipe_id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(128) NOT NULL , `recipe` TEXT NOT NULL , `author` VARCHAR(512) NOT NULL , `is_enabled` BOOLEAN NOT NULL , PRIMARY KEY (`recipe_id`)) ENGINE = MyISAM;


insert into `users` (`age`, `email`, `full_name`, `password`, `user_id`) values (34, 'michel.andre@exemple.com', 'Michel André', 'S3cr3t', 1);
insert into `users` (`age`, `email`, `full_name`, `password`, `user_id`) values (35, 'mat.veli@exemple.com', 'Mat Veli', 'MiamMiam', 2);
insert into `users` (`age`, `email`, `full_name`, `password`, `user_id`) values (28, 'laurine.shell@exemple.com', 'Laurine Shell', 'laShell28', 3);
;


insert into `recipes` (`author`, `is_enabled`, `recipe`, `recipe_id`, `title`) values ('michel.andre@exemple.com', 1, "Etape 1 ....", 1, 'Salade niçoise');
insert into `recipes` (`author`, `is_enabled`, `recipe`, `recipe_id`, `title`) values ('michel.andre@exemple.com', 0, "Etape 1 ...", 2, 'Aïoli');
insert into `recipes` (`author`, `is_enabled`, `recipe`, `recipe_id`, `title`) values ('laurine.shell@exemple.com', 0, "La salade Romaine est une recette de cuisine de salade composée de la cuisine américaine, traditionnellement préparée en salle à côté de la table, à base de laitue romaine, œuf dur, croûtons, parmesan et de « sauce César » à base de parmesan râpé, huile d'olive, pâte d'anchois, ail, vinaigre de vin, moutarde, jaune d'œuf et sauce Worcestershire.", 4, 'Salade Romaine');
insert into `recipes` (`author`, `is_enabled`, `recipe`, `recipe_id`, `title`) values ('mat.veli@exemple.com', 1, "L'escalope à la milanaise, ou escalope milanaise est une escalope panée, de viande de veau, traditionnellement prise dans le faux-filet. Historiquement, on la cuit avec du beurre. Elle est généralement servie avec salade ou frites, accompagnée de sauce mayonnaise. On peut y ajouter un filet de jus de citron.\n\nEn Italie, ce mets ne se sert pas avec des pâtes.", 3, 'Escalope milanaise');
