CREATE TABLE users
(
   id SERIAL PRIMARY KEY
   , firstName VARCHAR(50) NOT NULL
   , lastName VARCHAR(50) NOT NULL
   , username VARCHAR(50) UNIQUE NOT NULL
   , password VARCHAR(50) NOT NULL
   , critc BOOLEAN NOT NULL
);

CREATE TABLE organizations
(
   id SERIAL PRIMARY KEY
   , name VARCHAR(50) UNIQUE NOT NULL
   , password VARCHAR(50) NOT NULL
);

CREATE TABLE reviewers
(
   id SERIAL PRIMARY KEY
   , firstName VARCHAR(50) NOT NULL
   , lastName VARCHAR(50) NOT NULL
   , password VARCHAR(50) NOT NULL
);

CREATE TABLE reviewerOrganizations
(
   id SERIAL PRIMARY KEY
   , organizationId INT NOT NULL REFERENCES organizations(id)
   , reviewerId INT NOT NULL REFERENCES reviewers(id)
);

CREATE TABLE developers
(
   id SERIAL PRIMARY KEY
   , name VARCHAR(50) NOT NULL
   , lastName VARCHAR(50)
);

CREATE TABLE genres
(
   id SERIAL PRIMARY KEY
   , name VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE games
(
   id SERIAL PRIMARY KEY
   , name VARCHAR(100) UNIQUE NOT NULL
   , developerId INT NOT NULL REFERENCES developers(id)
   , genreId INT NOT NULL REFERENCES genres(id)
);

CREATE TABLE reviews
(
   id SERIAL PRIMARY KEY
   , text TEXT NOT NULL
   , date DATE NOT NULL
   , score INT NOT NULL
   , CHECK (score > 0 AND score < 100)
   , likes INT
   , userId INT REFERENCES users(id)
   , organizationId INT REFERENCES users(id)
   , CHECK ((userId = NULL AND organizationId != NULL) OR ((userId != NULL AND organizationId = NULL)))
   , gameId INT NOT NULL REFERENCES games(id)
);

--FOREIGN KEY = REFERENCES users(id)

--Extra comment to commit