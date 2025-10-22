<?php

require_once 'config.php';

class MovieModel
{
  private $db;

  public function __construct()
  {
    $this->db = new PDO("mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DB . ";charset=utf8", MYSQL_USER, MYSQL_PASS);
    $this->deploy();
  }

  // AUTODEPLOY
  private function deploy()
  {
    $query = $this->db->query('SHOW TABLES');
    $tables = $query->fetchAll();
    if (count($tables) == 0) {
      $sql = "CREATE TABLE `genre` (
        `id_genre` int(11) NOT NULL,
        `main_genre` varchar(45) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
        
        INSERT INTO `genre` (`id_genre`, `main_genre`) VALUES
        (12, 'aventura'),
        (14, 'fantasia'),
        (16, 'animación'),
        (18, 'drama'),
        (27, 'terror'),
        (28, 'acción'),
        (35, 'comedia'),
        (53, 'suspenso'),
        (80, 'crimen'),
        (878, 'ciencia fición'),
        (10749, 'romance'),
        (10751, 'familia');
        
        CREATE TABLE `movie` (
        `id_movie` int(11) NOT NULL,
        `title` varchar(60) NOT NULL,
        `poster_path` varchar(60) NOT NULL,
        `release_date` date NOT NULL,
        `overview` text NOT NULL,
        `company` varchar(45) NOT NULL,
        `id_genre` int(11) NOT NULL)
        ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
        
        INSERT INTO `movie` (`id_movie`, `title`, `poster_path`, `release_date`, `overview`, `company`, `id_genre`) VALUES
        (7451, 'Aristogatos', 'images/movies/Aristogatos.jpeg', '2002-08-09', 'En Parí­s una anciana millonaria y excéntrica lleva una vida feliz con sus gatos en su enorme mansión, con la única ayuda de su fiel mayordomo, Edgar. Allí­, Duquesa vive con sus tres traviesos cachorros, sin saber que en realidad el mayordomo planea acabar con todos los gatos para convertirse en el único heredero de la enorme fortuna de la anciana Madame Bonfamille. Decidido a acabar con los gatos, los abandona en un lugar remoto, donde son ayudados por Thomas O’Malley, un atractivo gato vagabundo con mucho mundo a sus espaldas.', 'Columbia Pictures', 16),
        (365177, 'Cuando acecha la maldad', 'images/movies/Cuando acecha la maldad', '2024-08-07', '\"Cuando acecha la maldad\" es el título de una película de terror argentina de 2023 dirigida por Demián Rugna, que se estrenó internacionalmente y llegó a Netflix en junio de 2024. La película, ganadora del Festival de Sitges en 2023, se ambienta en la zona rural de Argentina y cuenta la historia de dos hermanos que descubren a un hombre poseído por un demonio, lo que desencadena una serie de eventos que amenazan con propagar el mal por todo el pueblo y el mundo. ', 'Lionsgate', 27),
        (519182, 'El Padrino', 'images/movies/ElPadrino.jpg', '2024-06-20', 'Don Vito Corleone es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York en los años 40. El hombre tiene cuatro hijos: Connie, Sonny, Fredo y Michael, que no quiere saber nada de los negocios sucios de su padre. Cuando otro capo, Sollozzo, intenta asesinar a Corleone, empieza una cruenta lucha entre los distintos clanes.', 'Universal Pictures', 18),
        (917496, 'El viaje de chihiro', 'images/movies/ElViajeDeChihiro.jpg', '2024-09-04', 'Chihiro es una niña de diez años caprichosa y testaruda que cree que el universo entero debe someterse a sus deseos. Camino de su nuevo hogar junto a sus padres, una idea que la enfurece, la familia se equivoca de camino y aparece al final de un misterioso callejón sin salida, donde topan con un extraño edificio con un largo pasaje que los conduce a un pueblo fantasmal donde los espera un magnífico banquete.\n', 'Studio Ghibli', 16),
        (933260, 'Perfect Blue', 'images/movies/Perfect_Blue.jpg', '2024-09-09', 'Mima, una cantante muy popular, decide abandonar su banda de música para empezar una carrera como actriz en una serie de televisión. La imagen sabia y endulzada de este icono del pop se rompe cuando la joven tiene que protagonizar escenas de violación colectiva y aparecer desnuda.\n', 'Working Title Films', 18),
        (957452, 'Get Out', 'images/movies/GetOut.jpg', '2024-08-21', 'Chris es un joven y exitoso fotógrafo afroamericano que, desde hace cinco meses, sale con Rose, una chica blanca. Aunque no está muy convencido, termina accediendo a la invitación de Rose para conocer a su familia por lo que ella le invita a pasar un fin de semana en el campo con sus padres, Missy y Dean. Al principio, Chris piensa que el comportamiento complaciente de los padres se debe a su nerviosismo por la relación interracial de su hija, pero a medida que pasan las horas, todo cambia.\n', 'Davis Films', 53),
        (1022789, 'Suspiria', 'images/movies/Suspiria.jpg', '2024-06-11', 'Una joven estadounidense viaja a Berlín para formar parte de una compañía de danza de renombre mundial, pero la academia esconde una historia oscura y horripilante.\n', 'Pixar Animation Studios', 27),
        (1034541, 'Guardianes de la galaxia', 'images/movies/GuardianesDeLaGalaxia.jpg', '2024-10-09', 'El temerario aventurero Peter Quill ha robado una misteriosa esfera codiciada por Ronan, un poderoso villano cuyas ambiciones amenazan a todo el universo. Quill se convierte en la presa más codiciada por todos los cazarrecompensas de la galaxia.', 'Cineverse', 12),
        (1079091, 'Hannibal Lecter', 'images/movies/Hannibal.jpg', '2024-08-07', 'Hace diez años que el Dr. Hannibal Lecter conoció a la agente Clarice Starling y huyó del hospital de máxima seguridad, pero ninguno de los dos ha podido olvidarse del otro. Mason Verger también recuerda a Hannibal y está obsesionado con vengarse.\n', 'Wayfarer Studios', 80);


        CREATE TABLE `user` (
        `id_user` int(11) NOT NULL,
        `email` varchar(100) NOT NULL,
        `password` char(100) NOT NULL)
        ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
              
        INSERT INTO `user` (`id_user`, `email`, `password`) VALUES
        (1, 'web@admin.com', '\$2y\$10\$th8zeOQxEIOTkYz4J0ePmuueSxKJWoCdn2P1MPWymyqZLPQSIf3h2');
        
        ALTER TABLE `genre`
        ADD PRIMARY KEY (`id_genre`),
        ADD KEY `id_genre` (`id_genre`);
            
        ALTER TABLE `movie`
        ADD PRIMARY KEY (`id_movie`),
        ADD KEY `id_genre` (`id_genre`);
        
        ALTER TABLE `user`
        ADD PRIMARY KEY (`id_user`);
          
        ALTER TABLE `user`
        MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
            
        ALTER TABLE `movie`
        ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`) ON DELETE CASCADE ON UPDATE CASCADE;
        COMMIT;
        ";
      $this->db->query($sql);
    }
  }

  // -- ACCESO PÚBLICO -- 
  // obtener todas las películas
  public function getMovies()
  {
    $query = $this->db->prepare('SELECT id_movie, title, poster_path, release_date, overview, company, main_genre FROM movie INNER JOIN genre ON movie.id_genre = genre.id_genre');
    $query->execute();
    $movies = $query->fetchAll(PDO::FETCH_OBJ);

    return $movies;
  }

  // buscar película según id o título
  public function getMovie($id_movie, $title)
  {
    $query = $this->db->prepare('SELECT id_movie, title, poster_path, release_date, overview, company, main_genre FROM movie INNER JOIN genre ON movie.id_genre = genre.id_genre WHERE id_movie = ? || title = ?');
    $query->execute([$id_movie, $title]);
    $movie = $query->fetch(PDO::FETCH_OBJ);

    return $movie;
  }

  // obtener la lista de géneros
  public function getGenres()
  {
    $query = $this->db->prepare('SELECT * FROM genre');
    $query->execute();
    $genres = $query->fetchAll(PDO::FETCH_OBJ);

    return $genres;
  }

  // obtener la lista de películas según género
  public function getMoviesByGenre($genre)
  {
    $query = $this->db->prepare('SELECT id_movie, title, poster_path, release_date, overview, company, main_genre FROM movie INNER JOIN genre ON movie.id_genre = genre.id_genre WHERE main_genre = ?');
    $query->execute([$genre]);
    $movies = $query->fetchAll(PDO::FETCH_OBJ);

    return $movies;
  }

  // -- ACCESO ADMINISTRADOR --
  // insertar una película
  public function add($id_movie, $title, $imgToLoad, $release_date, $overview, $company, $id_genre)
  {
    $poster_path = $this->uploadImage($imgToLoad);

    $query = $this->db->prepare('INSERT INTO movie (id_movie, title, poster_path, release_date, overview, company, id_genre) VALUES (?,?,?,?,?,?,?)');
    $query->execute([$id_movie, $title, $poster_path, $release_date, $overview, $company, $id_genre]);

    $id = $this->db->lastInsertId();
    return $id;
  }

  public function uploadImage($imgToLoad)
  {
    $poster_path = 'images/movies/' . uniqid("", true) . '.' . strtolower(pathinfo($imgToLoad['full_path'], PATHINFO_EXTENSION));
    move_uploaded_file($imgToLoad['tmp_name'], $poster_path);
    return $poster_path;
  }

  // eliminar una película
  public function delete($title)
  {
    $query = $this->db->prepare('DELETE FROM movie WHERE title = ?');
    $query->execute([$title]);
  }

  // editar una película
  public function edit($id_movie, $title, $imgToLoad, $release_date, $overview, $company, $id_genre)
  {
    $poster_path = $this->uploadImage($imgToLoad);
    
    $query = $this->db->prepare("UPDATE movie SET title = ?, poster_path = ?, release_date = ?, overview = ?, company = ?, id_genre = ? WHERE movie.id_movie = ?");
    $query->execute([$title, $poster_path, $release_date, $overview, $company, $id_genre, $id_movie]);

    $id = $this->db->lastInsertId();
    return $id;
  }

  // buscar un género
  public function getGenre($id_genre, $main_genre)
  {
    $query = $this->db->prepare('SELECT * FROM genre WHERE id_genre = ? || main_genre = ?');
    $query->execute([$id_genre, $main_genre]);
    $genre = $query->fetch(PDO::FETCH_OBJ);

    return $genre;
  }

  // insertar un género
  public function addGenre($id_genre, $main_genre)
  {
    $query = $this->db->prepare('INSERT INTO genre(id_genre, main_genre) VALUES (?, ?)');
    $query->execute([$id_genre, $main_genre]);

    $id = $this->db->lastInsertId();
    return $id;
  }

  // eliminar género
  public function deleteGenre($main_genre)
  {
    $query = $this->db->prepare('DELETE FROM genre WHERE main_genre = ?');
    $query->execute([$main_genre]);
  }

  // editar un género
  public function editGenre($main_genre, $id_genre)
  {
    $query = $this->db->prepare("UPDATE genre SET main_genre = ? WHERE genre.id_genre = ?");
    $query->execute([$main_genre, $id_genre]);

    $id = $this->db->lastInsertId();
    return $id;
  }
}
