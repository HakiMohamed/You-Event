CREATE TABLE roles(
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_name VARCHAR (255)
)ENGINE = InnoDB;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name  VARCHAR (255),
    last_name VARCHAR (255),
    email VARCHAR (255),
    passwordd VARCHAR (255),
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES roles (id)
)ENGINE = InnoDB;

CREATE TABLE events (
    id INT PRIMARY KEY AUTO_INCREMENT,
    evente_name VARCHAR (255),
    date_create DATE,
    localisation VARCHAR (2550),
    capability INT,
    available_Tickets INT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
)ENGINE = InnoDB;

CREATE TABLE tickets (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tickets_type VARCHAR (255),
    quentity INT,
    event_id INT,
    FOREIGN KEY (event_id) REFERENCES events (id); 
)ENGINE = InnoDB;

CREATE TABLE reservations (
    id INT PRIMARY KEY AUTO_INCREMENT,
    reservation_date DATE,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
)ENGINE = InnoDB;

CREATE TABLE command_etems (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tickets_id INT,
    FOREIGN KEY (tickets_id) REFERENCES tickets (id),
    reservation_id INT,
    FOREIGN KEY (reservation_id) REFERENCES reservations (id),
    quentity INT
)ENGINE = InnoDB;