# Le blog de CREA

## Installation    
1/git pull  
2/Installer la BDD et les fichiers ignorés (cf .gitignore)  
3/Changer les paramètres de connexions (wp-config.php)  
4/Si besoin, changer les droits sur les répertoires (https://stackoverflow.com/questions/18352682/correct-file-permissions-for-wordpress)  
5/Changer le base_path en base de donnée :  
```
UPDATE  `creablog`.`wp_options` SET  `option_value` =  '[LE_NOUVEAU_PATH]' WHERE  `wp_options`.`option_id` =1;  
UPDATE  `creablog`.`wp_options` SET  `option_value` =  '[LE_NOUVEAU_PATH]' WHERE  `wp_options`.`option_id` =2;  
```

###### Tips  
- Élargir les droits pour permettre les mises à jours automatiques  
- Site de démo : http://213.32.18.30/creablog-demo/ 

###### Fait
- Changement des prefix de tables (http://www.wpbeginner.com/wp-tutorials/how-to-change-the-wordpress-database-prefix-to-improve-security/)  


