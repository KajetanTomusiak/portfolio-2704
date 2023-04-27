<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Kajetan Tomusiak </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand navbar-dark " href="index.php">Kajetan Tomusiak</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Strona główna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">O mnie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row pt-4">

        <div id="home" class="slide slide1 w-100 h-200">
            <div class="container ">
                <div class="row header">
                    <div class="col-12 text-center text-white" id="hometxt">
                        <h2 class="display-2 my-4 text-white">KAJETAN<br /> TOMUSIAK</h2>
                        <a href="#about" class="btn btn-outline-light ms-3">Poznaj mnie!</a>
                    </div>
                </div>
            <section id="about">
                <div class="container">
                <h2>O mnie</h2><br>
                <p>Nazywam się <b>Kajetan Tomusiak</b> i uczę się w Technikum nr 1 w
                    <a href="https://ckziu.powiatslubicki.pl/">
                        <b><i>Centrum Kształcenia Zawodowego i Ustawicznego w Słubicach</i></b>
                    </a>
                    na profilu Technik Informatyk. Zdałem z bardzo wysokim wynikiem egzamin <b>INF.02</b> 
                    i aktualnie przygotowuję się do egzaminu INF.03. Języki programowania, w których piszę to: 
                    <b>HTML, CSS, JavaScript, PHP, MySQL.</b></p>
                </div>
            </section>

      <section id="portfolio" class="gallery min-vh-100">
        <div class="container-lg">
        <h2 class="text-center mb-5">Moje realizacje</h2>
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <?php
                // Dane do połączenia z bazą danych
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "portfolio";

                // Tworzymy połączenie z bazą danych
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Sprawdzamy, czy udało się połączyć z bazą danych
                if ($conn->connect_error) {
                    die("Nie udało się połączyć z bazą danych: " . $conn->connect_error);
                }

                // Zapytanie do bazy danych o wszystkie realizacje
                $sql = "SELECT * FROM projects";
                $result = $conn->query($sql);

                // Wyświetlamy realizacje na stronie
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4">';
                        echo '<div class="card">';
                        echo '<img class="gallery-item" src="' . $row["image"] . '" alt="' . $row["title"] . '">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $row["title"] . '</h5>';
                        echo '<hr>';
                        echo '<p class="card-text">' . $row["description"] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';  
                      }
                  } else {
                      echo "Brak realizacji do wyświetlenia";
                  }
      
                  // Zamykamy połączenie z bazą danych
                  $conn->close();
                  ?>
              </div>
          </div>
          </div>
            </section>
            </div>
        </div>
      </section>
      <section id="contact">
        <div class="container">
          <h2>Formularz kontaktowy</h2><br>
          <form action="https://formspree.io/f/xknakelp" method="POST">
            <div class="form-group">
                <input placeholder="E-mail" type="email" name="email">
                <p class="email-error error-message"></p> 
            </div>
            <div class="form-group">
                <textarea placeholder="Wiadomość"
                name="message"></textarea>
                <p class="message-error error-message"></p>
            </div>
            <div class="form-group">
              <button type="submit" class="button btn btn-outline-light ms-3">Wyślij</button>
            </div>
          </form>
          </div>
        </section>
      </main>
     <footer class="p-4 w-100 d-flex justify-content-center align-items-center" id="footer">
        <p class="mb-0 text-center">© 2023 Kajetan Tomusiak</p>   
     </footer>
        </div>
    </div>
    </div>
    </div>
    <!-- JavaScript Bootstrap -->
    <!-- <script src="writing.js"></script> -->
    <script src="warningform.js"></script>
    <!-- <script src="smooth-scrolling.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!-- W tym kodzie HTML, CSS i PHP używamy biblioteki Bootstrap do stylizacji strony i układu projektów. 
Wykorzystujemy również połączenie z bazą danych MySQL, aby pobierać tytuł realizacji, zdjęcie i opis z bazy danych.

W bazie danych MySQL musimy utworzyć tabelę "projects" z kolumnami "id", "title", "image" i "description". 
Następnie dodajemy do tabeli kilka przykładowych projektów.
 -->