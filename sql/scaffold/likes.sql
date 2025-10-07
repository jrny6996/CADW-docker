-- LIKES table - to do after users

CREATE TABLE likes (
id INT AUTO_INCREMENT PRIMARY KEY, user_id INT NOT NULL, feedback_id INT NOT NULL,
UNIQUE (user_id, feedback_id), FOREIGN KEY (feedback_id REFERENCES feedback(id)));

