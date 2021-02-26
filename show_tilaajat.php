<!-- tilausvahvistus -->
<!DOCTYPE html>
<html lang="fi">
<head>
    <title>
        Tilaajalista
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
    <?php 
$username = "root"; 
$password = ""; 
$database = "koe"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM tilaajat";


echo '
<div id="main" class="border float-left container w-25 m-3 p-3">
<br>
<div id="chat" class="border shadow-sm row p-3 bg-light">
    <DIV class="col-sm bg-light">
        <h3>Tilaajat</h3>
    </DIV>
</div>
<br>
            <table border="1" cellspacing="2" cellpadding="10"> 
            <thead class="thead-dark">
            <tr>   
            <th> <font face="Arial">ID</font> </th>  
            <th> <font face="Arial">Nimi</font> </th> 
            <th> <font face="Arial">Sähköposti</font> </th> 
            </tr>
            </thead>';
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["nimi"];
        $field3name = $row["sposti"];
        echo '<tr>
            <tbody>
            <td>'.$field1name.'</td> 
            <td>'.$field2name.'</td> 
            <td>'.$field3name.'</td> 
            </tr>
            </tbody>
            
            </div>
            </div>';
    }
    $result->free();
} 
?>
</body>

</html>
