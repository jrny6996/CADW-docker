CREATE TABLE feedback (
id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(100) NOT NULL, message TEXT NOT
NULL, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

INSERT INTO feedback (name, message) VALUES('Alice', 'I like this'), ('Bob',
'Hmmm... its interesting'), ('Trudy', 'Can I break this?');

