CREATE DATABASE sigadget;				 
CREATE TABLE tb_category(                       
    cat_id INT(11) NOT NULL AUTO_INCREMENT,
    cat_name VARCHAR(50) NOT NULL,
    cat_text VARCHAR(255) NOT NULL,
    PRIMARY KEY (cat_id)
);
CREATE TABLE tb_post(
    post_id INT(11) NOT NULL AUTO_INCREMENT,
    cat_id INT (11),
    post_date date NOT NULL,
    post_slug VARCHAR(25) NOT NULL,
    post_title VARCHAR(100) NOT NULL,
    post_text TEXT NOT NULL,
    PRIMARY KEY (post_id),
    FOREIGN KEY (cat_id)
        REFERENCES tb_category(cat_id)
);
CREATE TABLE tb_photos(
    photo_id INT(11) NOT NULL AUTO_INCREMENT,
    photo_date date NOT NULL,
    photo_title VARCHAR(100) NOT NULL,
    photo_text TEXT NOT NULL,
    post_id INT (11),
    PRIMARY KEY (photo_id),
    FOREIGN KEY (post_id)
        REFERENCES tb_post(post_id)
);
CREATE TABLE tb_album(
    album_id INT(11) NOT NULL AUTO_INCREMENT,
    album_name VARCHAR (100) NOT NULL,
    album_text VARCHAR(100) NOT NULL,
    photo_id INT (11),
    PRIMARY KEY (album_id),
    FOREIGN KEY (photo_id)
        REFERENCES tb_photos(photo_id)
);
CREATE TABLE tb_users(
    user_id INT(11) NOT NULL AUTO_INCREMENT,
    user_email VARCHAR(50) NOT NULL,
    user_password VARCHAR(100) NOT NULL,
    user_nama VARCHAR(100) NOT NULL,
    user_hp VARCHAR(25) NOT NULL,
    user_role TINYINT(2),
    PRIMARY KEY (user_id),
    UNIQUE KEY (user_email)
);
