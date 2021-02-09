<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EKSTRA: Brukerstøtteskjema HTML</title>
</head>
<body>

<style type='text/css'>
  #comment{
       display:inline;
       float:left;}
 </style>

    <form action="./Submit.php" method="post">
        <p>Hvordan synes du det er å arbeide her</p>
        <label for="1">1: Dårlig</label>
        <label for="3">3: Passe</label>
        <label for="5">5: Supert</label><br><br>
        <input type="radio" id="1">
        <input type="radio" id="2">
        <input type="radio" id="3">
        <input type="radio" id="4">
        <input type="radio" id="5">
    <br>
    <br>
    <hr>
        <label for="comment">Smaker kaffen (eventuelle andre drikker) godt? *</label><br>
        <div>
                <textarea id="comment" name="Kommentar" cols="40" rows="4"></textarea><br><br><br><br><br><br>
        </div>
        <hr>
        <p>Hva syns du om fasilitetene</p>
        <label for="1">1: Dårlig</label>
        <label for="3">5: Passe</label>
        <label for="5">9: Supert</label><br><br>
        <input type="radio" id="1">
        <input type="radio" id="2">
        <input type="radio" id="3">
        <input type="radio" id="4">
        <input type="radio" id="5">
        <input type="radio" id="6">
        <input type="radio" id="7">
        <input type="radio" id="8">
        <input type="radio" id="9">
        <br>
        <br>
        <hr>

        <div>
            <h4>Hva syns du om fasilitetene</h4>
            <p>Beskriv ditt svar (kort)</p>
                <textarea id="comment" name="Kommentar" cols="20" rows="2"></textarea><br><br>
        </div>
        <br>
        <br>
        <hr>
        
        <div>
            <h4>Syns du dine med arbeidere er greie</h4>
            <label for="1">Ja</lable>
            <input type="radio" id="1"><br>
            <lable for="2">Nei</lable>
            <input type="radio" id="2"><br>
            <lable for="3">Ikke så viktig/vet ikke</lable>
            <input type="radio" id="3">
        </div><hr>

        <div>
            <h4>Har du en begrunnelse for ditt svar</h4>
            <p>Om du svarte Ikke så viktig/vet ikke treger du ikke å tenke på denne</p>
                <textarea id="comment" name="Kommentar" cols="20" rows="2"></textarea><br><br>
        </div>
        <br><br><br><br><input type="submit">
    </form>
</body>
</html>