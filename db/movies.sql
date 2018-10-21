--Comment to commit
CREATE TABLE actor (
   id SERIAL PRIMARY KEY
   , name VARCHAR(100) NOT NULL
   , birthYear SMALLINT
);

CREATE TABLE movie (
   id SERIAL PRIMARY KEY
   , title VARCHAR(100) NOT NULL
   , runtime SMALLINT
   , year SMALLINT
);

CREATE TABLE actor_movie (
   id SERIAL PRIMARY KEY
   , actor_id INT NOT NULL REFERENCES actor(id)
   , movie_id INT NOT NULL REFERENCES movie(id)
);

INSERT INTO actor (name, birthYear) VALUES ('Jimmy Stewart', 1908);
INSERT INTO actor (name, birthYear) VALUES ('Chris Pratt', 1979);
INSERT INTO actor (name, birthYear) VALUES
   ('Tom Cruise', 1962)
   , ('Meryl Streen', 1949)
   , ('Carrie Fisher', 1956);

INSERT INTO movie (title, runtime, year) VALUES
   ('It''s a Wonderful Life', 120, 1957)
   , ('The Devil Wears Prada', 125, 2006)
   , ('Guardians of the Galaxy', 140, 2014);

INSERT INTO actor_movie (actor_id, movie_id) VALUES
   (2, 3)
   , (1, 1)
   , (1, 3)
   , (4, 2)
   , (1, 2);

SELECT * FROM movie WHERE title = 'It''s a Wonderful Life';
SELECT * FROM movie WHERE title LIKE '%W%';

SELECT a.name, m.title FROM movie m
   JOIN actor_movie am ON m.id = am.movie_id
   JOIN actor a ON am.actor_id = a.id
   WHERE m.title LIKE 'The Devil%'
   ORDER BY a.birthYear;

