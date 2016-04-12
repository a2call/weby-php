CREATE TABLE categories(
  id integer auto_increment,
  name varchar(100),
  primary key(id)
);

CREATE TABLE articles(
  id integer auto_increment,
  title varchar(100),
  content text,
  date_add datetime,
  autor varchar(100),
  id_categories integer,
  primary key(id),
  foreign key(id_categories) references categories(id)
);

CREATE TABLE usercookies(
  id integer auto_increment,
  ip varchar(100),
  primary key(id)
);

CREATE TABLE categorycounters(
  id integer auto_increment,
  id_usercookie integer,
  id_category integer,
  count integer,
  primary key(id),
  foreign key(id_category) references categories(id) ON DELETE CASCADE,
  foreign key(id_usercookie) references usercookies(id) ON DELETE CASCADE,
  constraint unique_index UNIQUE (id_usercookie, id_category)
);

INSERT INTO categories (name) VALUES ('Sport'), ('Nauka'), ('Muzyka'), ('Technologia'), ('Turystyka');
INSERT INTO articles (title, content, date_add, autor, id_categories) VALUES
  ('Artykul sportowy 1', 'Tresc artykulu', '2016-04-12', 'Autor sportowy', '1'),
  ('Artykul sportowy 2', 'Tresc artykulu', '2016-04-13', 'Autor sportowy', '1'),
  ('Artykul sportowy 3', 'Tresc artykulu', '2016-04-14', 'Autor sportowy', '1'),
  ('Artykul sportowy 4', 'Tresc artykulu', '2016-04-15', 'Autor sportowy', '1'),
  ('Artykul naukowy 1', 'Tresc artykulu', '2016-04-12', 'Autor naukowy', '2'),
  ('Artykul naukowy 2', 'Tresc artykulu', '2016-04-13', 'Autor naukowy', '2'),
  ('Artykul naukowy 3', 'Tresc artykulu', '2016-04-14', 'Autor naukowy', '2'),
  ('Artykul naukowy 4', 'Tresc artykulu', '2016-04-15', 'Autor naukowy', '2'),
  ('Artykul muzyczny 1', 'Tresc artykulu', '2016-04-12', 'Autor muzyczny', '3'),
  ('Artykul muzyczny 2', 'Tresc artykulu', '2016-04-13', 'Autor muzyczny', '3'),
  ('Artykul muzyczny 3', 'Tresc artykulu', '2016-04-14', 'Autor muzyczny', '3'),
  ('Artykul muzyczny 4', 'Tresc artykulu', '2016-04-15', 'Autor muzyczny', '3'),
  ('Artykul technologiczny 1', 'Tresc artykulu', '2016-04-12', 'Autor technologiczny', '4'),
  ('Artykul technologiczny 2', 'Tresc artykulu', '2016-04-13', 'Autor technologiczny', '4'),
  ('Artykul technologiczny 3', 'Tresc artykulu', '2016-04-14', 'Autor technologiczny', '4'),
  ('Artykul technologiczny 4', 'Tresc artykulu', '2016-04-15', 'Autor technologiczny', '4'),
  ('Artykul turystyczny 1', 'Tresc artykulu', '2016-04-12', 'Autor turystyczny', '5'),
  ('Artykul turystyczny 2', 'Tresc artykulu', '2016-04-13', 'Autor turystyczny', '5'),
  ('Artykul turystyczny 3', 'Tresc artykulu', '2016-04-14', 'Autor turystyczny', '5'),
  ('Artykul turystyczny 4', 'Tresc artykulu', '2016-04-15', 'Autor turystyczny', '5');
