CREATE TABLE header (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL UNIQUE,
    description TEXT
);

CREATE TABLE `function` (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL UNIQUE,
    description TEXT,
    header_id INTEGER,
    FOREIGN KEY (header_id) REFERENCES header (id)
);