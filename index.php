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
                <h3>Lähetä meilisi</h3>
            </DIV>
            <BR>
        </div>
        <BR>
        <div id="viesti" class="border text-center col-sm p-3 bg-light">
        <p>Ole hyvä ja jätä nimesi ja sähköpostiosoitteesi</p>
        <!-- validoidaan jo kentissä, oikeasti tämä kannattaisi tehdä javascriptillä -->
            <form action="kerain.php" method="post">
                <input required placeholder="Nimesi" 
                type="text" name="nimi" class="form-control" 
                minlength="3"
                maxlength="20"
                name="sposti"><br>
                <br>
                <input required placeholder="Sähköpostiosoitteesi" 
                type="email" class="form-control" name="sposti"
                minlength="7"
                maxlength="20">
                <br>
                <input class="shadow btn btn-primary" type="submit" value="Lähetä">
            </form>
        </div>
    </div>
</body>

</html>