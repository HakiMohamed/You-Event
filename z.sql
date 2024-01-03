-- Table Rôles
CREATE TABLE roles (
    id INT PRIMARY KEY,
    name_role VARCHAR(50)
);

-- Table Utilisateurs
CREATE TABLE utilisateurs (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(100),
    ID_Role INT,
    FOREIGN KEY (id_role) REFERENCES roles(id)
);

-- Table Événements
CREATE TABLE evenements (
    id INT PRIMARY KEY,
    name VARCHAR(100),
    date_evenement DATE,
    lieu VARCHAR(100),
    description TEXT,
    disponibilite INT
);

-- Table Réservations
CREATE TABLE reservations (
    id INT PRIMARY KEY,
    id_utilisateur INT,
    ID_Evenement INT,
    type_tickert VARCHAR(50),
    nomre_ticket INT,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id),
    FOREIGN KEY (id_evenement) REFERENCES evenements(id)
);