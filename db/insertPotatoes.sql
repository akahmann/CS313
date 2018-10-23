--Coment to commit
--INSERT INTO table (elements, elements) VALUES (value, value);
INSERT INTO users (firstName, lastName, username, password, critic)
   VALUES ('Adam', 'Kahmann', 'Hulk', 'hungryapples', 'true')
   , ('Justin', 'Bengtson', 'Spiderman', 'jb184351', 'false')
   , ('Austin', 'Nelson', 'Dr Strange', 'dalinar', 'true')
   , ('Rachel', 'Chang', 'Black Widow', 'rchang', 'false')
   , ('Shawn', 'Ashton', 'Groot', 'sAshton', 'false')
   , ('Conrad', 'Rife', 'Captian America', 'cRife', 'true')
   , ('Christian', 'Jensen', 'Iron Man', 'cJensen', 'false')
   , ('Kiefer', 'Hill', 'Drax', 'kHill', 'false')
   , ('Scott', 'Burton', 'Nick Fury', 'sBurton', 'true')
   , ('Aaron', 'Reekie', 'Superman', 'myaron', 'true')
   , ('Andrew', 'Jester', 'Batman', 'ajester', 'true');

INSERT INTO organizations (name, password)
   VALUES ('IGN', 'toomuchwater')
   , ('Metacritic', 'over9000')
   , ('Gamespot', 'poweroverwhelming');

INSERT INTO reviewers (firstName, lastName, password)
   VALUES ('Bob', 'Pickles', 'ignman')
   , ('Phil', 'Fryingpan', 'mrge')
   , ('Samantha', 'King', 'ftw')
   , ('Danny', 'Boy', 'thepipeiscalling')
   , ('Rebecca', 'Black', 'fridayfriday');

INSERT INTO reviewerOrganizations (organizationId, reviewerId)
   VALUES (1, 1)
   , (1, 3)
   , (2, 4)
   , (2, 3)
   , (3, 2)
   , (3, 5);

INSERT INTO developers (name)
   VALUES ('Nintendo')
   , ('Intelligent Systems')
   , ('Square Enix')
   , ('Toby Fox')
   , ('Blizzard');

INSERT INTO genres (name)
   VALUES ('Action-adventure')
   , ('2D Platformer')
   , ('RPG')
   , ('Real-time Strategy');

INSERT INTO games (name, developerId, genreId)
   VALUES ('The Legend of Zelda: Ocarina of Time', 1, 1)
   , ('Super Mario World', 1, 2)
   , ('Paper Mario', 2, 3)
   , ('Final Fantasy VII', 3, 3)
   , ('Undertale', 4, 3)
   , ('Star Craft 2', 5, 4);

INSERT INTO reviews (text, date, score, likes, userId, oranizationId, gameId)
   VALUES ('This Zelda has enchanted our minds with whimsy and fantasy. The lush
            detail and the riveting story makes it so powerful, so righteous,
            you''d be saying good-bye to reality within a few minutes. The emotions
            there had a real touch and added atmosphere to the game. It''s like
            something we''d love to see in a theatre. This is what happened with
            Titanic, the movie monopolized the movie box office, while Zelda
            monopolized the video game industry. This is truly the best game of
            all time... For now. Because later we''ll see a better Zelda, and we''ll
            hopefully experience the power and beauty of a new fantasy world.',
            TO_DATE('28/04/1999', 'DD/MM/YYYY'), 100, 40, NULL, 1, 1)
   , ('The Legend of Zelda: Ocarina of Time is the most fantastic game ever created
      in history. The storyline captures our attention and emotions and the graphics
      and land of Hyrule are breathtaking. No game, not even Super Mario 64, not even
      Goldeneye, not even Jedi Knight, not even the original Legends of Zelda will
      ever be able to overcome a game that has become a legend. It''s the greatest
      creation in history. Nintendo will never be surpassed by Sega or Sony.
      It''s the BEST!!!',
      TO_DATE('05/03/1999', 'DD/MM/YYYY'), 100, 42, 2, NULL, 1)
   , ('Graphics are good for the time, nice music, and the controls are good but that''s
      really the best I can see about this game as well as the rest of the series. I used
      to be a huge fan of Zelda but the series has gotten stagnant and it just doesn''t hit
      home with me anymore and a lot of my problems with the series do sorta strike with
      this game.',
      TO_DATE('14/11/2015', 'DD/MM/YYYY'), 76, 37, 8, NULL, 1)
   , ('Graphics are good for the time, nice music, and the controls are good but that''s
      really the best I can see about this game as well as the rest of the series. I used
      to be a huge fan of Zelda but the series has gotten stagnant and it just doesn''t hit
      home with me anymore and a lot of my problems with the series do sorta strike with
      this game.',
      TO_DATE('14/11/2015', 'DD/MM/YYYY'), 80, 37, 8, NULL, 1)
   , ('Mario games are known to have revolutionized 2D Platformers and then 3D Platformers.
      Nintendo always seem to be able to make Mario''s outings fun and entertaining and this
      one is no exception. Super Mario World is a 2D Platformer and it is truly the best in
      the world alongside Donkey Kong Country 2.'
      TO_DATE('13/09/2010', 'DD/MM/YYYY'), 90, 56, NULL, 2, 2)
   , ('Super Mario World was part of a lot of people''s childhoods, a fun and challenged
      platform game, and where the Mario saga started to change course and be better, the
      gameplay is fluid, the soundtrack is sensational, the dubbing is excellent , Has striking
      phases, obvious that there are those boring also, like those of water, a classic that
      will never be forgotten.'
      TO_DATE('18/04/2017', 'DD/MM/YYYY'), 85, 22, 7, NULL, 2)
   , ('Paper Mario is the follow-up to Super Mario RPG: The Legend of the Seven Stars for the
      SNES. Existing in a world composed of paper cutouts, Paper Mario combines the simplified
      RPG system that made Super Mario RPG such an innovative and fun game with the side-scrolling
      action that made the 2D Mario games so popular. Not only is Paper Mario a tender bit of
      nostalgia to anyone who misses the good old days, but it is also a shining example of what
      Nintendo does best.'
      TO_DATE('05/02/2001', 'DD/MM/YYYY'), 95, 67, 1, NULL, 3)
   , ('This was regarded as an incredibly well-crafted and ambitious RPG when it hit the N64 in
      2001. The ways it played with 2D and 3D visuals, along with its use of real-time combat elements,
      made for a great Mario experience and a great RPG experience, though the sum of its parts made
      it suitable for those who didn''t care for one, the other, or even both.'
      TO_DATE('30/08/2006', 'DD/MM/YYYY'), 88, 5, 4, NULL, 3)
   , ('Never before have technology, playability, and narrative combined as well as in Final Fantasy VII.
      The culmination of Square Soft''s monumental effort is a game that will enrich just as it will
      entertain. Yet, for all the boundless praise it so rightfully deserves, Final Fantasy VII is not
      without its shortcomings and occasional design problems. These are enough to make some gamers (who
      are unfamiliar with RPGs, to be sure) wonder just why anyone would bother playing through it in
      the first place.'
      TO_DATE('12/12/1999', 'DD/MM/YYYY'), 92, 33, NULL, 3, 4)
   , ('An ok game, but nothing more...Final Fantasy VII is one of the - if not the - most overrated game
      of all time, and defenetely one of my least favorite of the entire seires. Being a great FF fan, after
      the amazing experiences of II (4) and III (6) on the SNES, I couldn''t wait for the next chapter of the
      series, but, unfortunately, when I finally played it, I felt quite disappointed. Its main faults are
      the mediocre characters and one of the most confused story that I''ve ever saw in a videogame. Also, I
      wasn''t very impressed by the graphics (even though, to me, graphics is less important than other
      aspects of a game).'
      TO_DATE('01/06/2014', 'DD/MM/YYYY'), 63, 64, 8, NULL, 4)
   , ('While it seems to be a game that''s designed for RPG fans first and foremost, a lot of Undertale''s
      jokes have universal appeal. A pair of comically incompetent skeletons regularly spout puns and jokes
      while attempting--and failing--to halt your progress, and the social ineptitude exhibited by one character
      when they try to express their feelings for another is a regular source of laughter. With clever
      characterization and unexpected responses to actions we''ve been conditioned to view as predictable,
      Undertale elicits laughter and delight with ease.'
      TO_DATE('14/08/2018', 'DD/MM/YYYY'), 90, 39, 9, NULL, 5)
   , ('With a clever combat system, great characters and a humor filled story but a serious undertone. It''s
      a title to have this year and a change of pace from the titles big companies push unto our throaths every
      month. A title that will make you want to date a skeleton is something ... unique.'
      TO_DATE('06/11/2015', 'DD/MM/YYYY'), 90, 45, 7, NULL, 5)
   , ('As I play Legacy of the Void, I''m amazed how much more fun I''m having now, with the newest version of a
      six-year-old real-time strategy game, than I did when it was new. Maybe it''s the framing: Wings of Liberty
      had to live up to the genre-redefining StarCraft and Brood War. Legacy of the Void just has to be a great
      new edition of StarCraft 2, and it does that very well.'
      TO_DATE('20/11/2015', 'DD/MM/YYYY'), 93, 78, 3, NULL, 6)
   , ('StarCraft II continues the epic saga of the Protoss, Terran, and Zerg. These three distinct and powerful
      races clash once again in the fast-paced real-time strategy sequel to the legendary original, StarCraft.
      Legions of veteran, upgraded, and brand-new unit types do battle across the galaxy, as each faction struggles
      for survival. Featuring a unique single-player campaign that picks up where StarCraft: Brood War left off,
      StarCraft II presents a cast of new heroes and familiar faces in an edgy sci-fi story filled with adventure
      and intrigue.'
      TO_DATE('17/07/2015', 'DD/MM/YYYY'), 95, 42, 5, NULL, 6);


SELECT org.name, r.firstName, r.lastName FROM organizations org
   JOIN reviewerOrganizations rorg ON org.id = rorg.organizationId
   JOIN reviewers r ON rorg.reviewerId = r.id;

SELECT gm.name AS gmname, gr.name AS grname, d.name AS dname
FROM genres gr
JOIN games gm ON gr.id = gm.genreId
JOIN developers d ON gm.developerId = d.id;

SELECT name, score
FROM reviews
JOIN games ON gameId = id;