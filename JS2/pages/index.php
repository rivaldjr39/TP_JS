<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
    <style>
        .rouge{color :red ;}
        .vert {color :green ; font-weight :bold ;}
    </style>
</head>
<body>
    <h1 id = "titre" >Titre Original</h1>
    <p id = "paragraphe"> Ceci est un paragraphe</p>
    <p><a id = "lien" href="#"> Lien par defaut</a></p>
    <button id = "btn" onclick="changeh1()" >Cliquez moi</button>
    <p><a href = "index2.php "> Ouvrir index 2</a></p>
    <p><a href = "index3.php "> Ouvrir index 3</a></p>
    <script>
        function changeh1()
        {
            let titre = document.getElementById("titre");
            titre.innerHTML = "Titre modifie avec JavaScript";

            let paragraphe = document.getElementById("paragraphe");
            paragraphe.style.color = "blue";
            paragraphe.style.fontSize = "20px";

            let liengoogle = document.getElementById("lien");
            liengoogle.setAttribute("href", "https://www.google.com");
            liengoogle.textContent = "Aller sur Google";

            let chnaageclasse = document.getElementById("paragraphe");
            chnaageclasse.classList.add = "rouge";
        }
    </script>
</body>
</html>