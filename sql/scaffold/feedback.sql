CREATE TABLE feedback (
id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(100) NOT NULL, message TEXT NOT
NULL, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

INSERT INTO feedback (name, message) VALUES('Alice', 'I like this'), ('Bob',
'Hmmm... its interesting'), ('Trudy', 'Can I break this?');

-- LIKES table - to do after users

-- CREATE TABLE likes (
-- id INT AUTO_INCREMENT PRIMARY KEY, user_id INT NOT NULL, feedback_id INT NOT NULL,
-- UNIQUE (user_id, feedback_id), FOREIGN KEY (feedback_id REFERENCES feedback(id)));

-- CREATE TABLE likes (
-- id INT AUTO_INCREMENT PRIMARY KEY, user_id INT NOT NULL, feedback_id INT NOT NULL,
-- UNIQUE (user_id, feedback_id));