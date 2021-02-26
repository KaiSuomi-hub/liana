<!-- tilausvahvistus -->
<!DOCTYPE html>
<html lang="fi">
<head>
    <title>
        Meilikeräin
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap jquery -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <style>
        div {

            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div id="main" class="border float-left container w-25 m-3 p-3">
        <br>
        <div id="chat" class="border shadow-sm row p-3 bg-light">
            <DIV class="col-sm bg-light">
                <h3>Liittymisen kuittaus</h3>
            </DIV>
            <BR>
        </div>
        <BR>
        <div id="viesti" class="border text-center col-sm p-3 bg-light">
            <b>Tilausvahvistus</b>
            <br>
           

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "koe";
$nimi = $_POST["nimi"];
$sposti = $_POST["sposti"];
// varmistetaan email ja nimi, stock classic
$nimiErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nimi"])) {
    //tsekataan onko tyhjä jos tulee toiselta lomakkeelta kuin ./index.php
    $nimiErr = "nimi vaaditaan";
    } else {
    // tarkista että nimi ok
if (!preg_match("/^[a-zA-Z-' ]*$/",$nimi)) {
    $nimiErr = "Ainoastaan kirjaimet ja välilyönnit ovat sallittuja nimessä";
    echo $nimiErr;
    echo '
    <br>
    <a href="./show_tilaajat.php">Katso tilaajakanta</a>
    </div>
    </div>';
    exit();
}
}
}
///siistitään ja tarkistetaan sposti
$spostiB = filter_var($sposti, FILTER_SANITIZE_EMAIL);
if (filter_var($spostiB, FILTER_VALIDATE_EMAIL) === false ||
    $spostiB != $sposti
) {
    echo 'Tarkista sähköpostiosoitteesi!
    <br>
    <a href="./show_tilaajat.php">Katso tilaajakanta</a>
    </div>
    </div>';
    exit();
}
//mietin, että kannattako tarkistaa mx tiedot, mutta tulkitsin tehtävän sellaiseksi
//jossa haetaan vain perus sanitointia ja checkkia

// luo conn
$conn = new mysqli($servername, $username, $password, $dbname);
// check conn
$select = mysqli_query($conn, "SELECT `sposti` FROM `tilaajat` WHERE `sposti` = '".$_POST['sposti']."'") or exit(mysqli_error($conn));

if(mysqli_num_rows($select)) {
// sposti kaytossa
echo 'Sähköpostiosoitteesi on jo käytössä.<br>
Terveisin ylläpito.
    <br>
<a href="./show_tilaajat.php">Katso tilaajakanta</a>
</div>
</div>';
    exit();
}
else
// sposti ei kaytossa
{   echo "Hei ";  
    echo $_POST["nimi"];
    echo "! <br>Sähköpostiosoite "; 
    echo $_POST["sposti"]; 
    echo ' on lisätty uutiskirjeemme tilaajaksi!<br>
    Terveisin ylläpito.
    <br>
<a href="./show_tilaajat.php">Katso tilaajakanta</a>
</div>
</div>';
//=>tauluun
    $sql = "INSERT INTO tilaajat (nimi, sposti)
VALUES ('$nimi', '$sposti')";
    if ($conn->query($sql) === true) {
        
    } else {
        echo "Virhe: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
</body>
</html>