CREATE DATABASE IF NOT EXISTS laravel_master;
USE laravel_master;

CREATE TABLE IF NOT EXISTS users(
	id INT(255) AUTO_INCREMENT NOT NULL,
	role VARCHAR(20),
	name VARCHAR(100),
	surname VARCHAR(200),
	nick  VARCHAR(100),
	email VARCHAR(255),
	password VARCHAR(255),
	image VARCHAR(255) NOT NULL,
	create_at DATETIME NOT NULL,
	updated_at DATETIME NOT NULL,
	remember_token VARCHAR(255) NOT NULL,
	CONSTRAINT pk_users PRIMARY KEY(id)
);


CREATE TABLE IF NOT EXISTS images(
	id INT(255) AUTO_INCREMENT NOT NULL,
	user_id INT(255),
	image_path VARCHAR(255),
	description TEXT,
	created_at DATETIME,
	updated_at DATETIME,
	CONSTRAINT pk_images PRIMARY KEY(id),
	CONSTRAINT fk_images_users FOREIGN KEY(user_id) REFERENCES users(id)
);


CREATE TABLE IF NOT EXISTS comments(
	id INT(255) AUTO_INCREMENT NOT NULL,
	user_id INT(255),
    image_id INT(255),
    content TEXT,
    create_at DATETIME,
	updated_at DATETIME,
	CONSTRAINT pk_comments PRIMARY KEY(id),
	CONSTRAINT fk_comments_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_comments_images FOREIGN KEY(image_id) REFERENCES images(id)
);

CREATE TABLE IF NOT EXISTS likes(
	id INT(255) AUTO_INCREMENT NOT NULL,
	user_id INT(255),
    image_id INT(255),
    create_at DATETIME,
	updated_at DATETIME,
	CONSTRAINT pk_likes PRIMARY KEY(id),
	CONSTRAINT fk_likes_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_likes_images FOREIGN KEY(image_id) REFERENCES images(id)
);

-- Usuarios
INSERT INTO users VALUES (null, 'user', 'pepe', 'perez', 'pepito', 'pepe@gmail.com', '123', null, CURTIME(), CURTIME(), null);
INSERT INTO users VALUES (null, 'user', 'juan', 'perez', 'juanito', 'juan@gmail.com', '456', null, CURTIME(), CURTIME(), null);

-- Imágenes
INSERT INTO images VALUES (null, 1, 'test.jpg', 'descripcion de prueba 1', CURTIME(), CURTIME()  );
INSERT INTO images VALUES (null, 1, 'playa.jpg', 'descripcion de prueba 2', CURTIME(), CURTIME() );
INSERT INTO images VALUES (null, 1, 'arena.jpg', 'descripcion de prueba 3', CURTIME(), CURTIME() );
INSERT INTO images VALUES (null, 3, 'familia.jpg', 'descripcion de prueba 4', CURTIME(), CURTIME() );

-- Comentarios
INSERT INTO comments VALUES (null, 1, 4, 'Buena foto de familia!!', CURTIME(), CURTIME());
INSERT INTO comments VALUES (null, 3, 2, 'Buena foto de la playa!!', CURTIME(), CURTIME());
INSERT INTO comments VALUES (null, 1, 3, 'Buena foto en la arena!!', CURTIME(), CURTIME());

-- Likes
INSERT INTO likes VALUES (null, 1, 5, CURTIME(), CURTIME());
INSERT INTO likes VALUES (null, 3, 5, CURTIME(), CURTIME());
INSERT INTO likes VALUES (null, 3, 1, CURTIME(), CURTIME());
INSERT INTO likes VALUES (null, 3, 2, CURTIME(), CURTIME());