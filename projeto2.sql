    create table tbl_desenvolvedor(
    id_desenvolvedor integer primary key auto_increment,
    nome_desenvolvedor varchar(80) not null,
    email varchar(45) not null);
    
    insert into tbl_desenvolvedor(nome_desenvolvedor, email)
    values('Mickael Fernandes', 'mickaelbpsouza@gmail.com');
    
    create table if not exists tbl_usuario( 
	id_usuario integer primary key auto_increment,
	nome_usuario varchar(50) not null,
    email varchar(45) not null,
    senha varchar(60) not null);

	insert into tbl_usuario(nome_usuario, email, senha)
	values('Silvia Fiacador', 'silvia@gmail.com', 20004000),
    ('Wheslley Rimar', 'whesley@gmail.com', 40502000),
    ('Fábio dos Reis', 'fabio@gmail.com', 24052002),
	('JS Barros', 'js@gmail.com', 25063000),
    ('Kátia Canto', 'katia@gmail.com', 24067869),
	('Aurora Seles', 'aurora@gmail.com', 35462352),
    ('Carla da Mata', 'carla@gmail.com', 34678940),
    ('Rosimara Donadio', 'rosimara@gmail.com', 24613097),
    ('Aline del Magro', 'aline@gmail.com', 52409613),
    ('Rodrigo Dib', 'dib@gmail.com', 34683245),
    ('Giovanna Magliocca', 'giovanna@gmail.com', 28953285),
    ('Fabiana Raulino', 'fabiraulino@gmail.com', 28379630),
    ('Athauane Caires', 'thaucaires@gmail.com', 200043210),
    ('Mariana Peramezza Del Fiol', 'mariana@gmail.com', 30034003),
    ('Athauane Caires', 'athauane@gmail.com', 20004000),
    ('Eloísa Silvestre', 'elo@gmail.com', 35001400),
    ('Luana Oliveira', 'luana@gmail.com', 10505009),
    ('Sérgio Monteiro', 'sergio@gmail.com', 25689091),
    ('Jhonatan Alves', 'jhonatan@gmail.com', 12003690);
   