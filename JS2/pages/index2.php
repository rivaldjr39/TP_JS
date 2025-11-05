<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap5_3/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="text-center mt-5">
        <input type="text"  id="monInput" placeholder="Tapez votre nom ici" class="rounded-pill p-1">
        <button id="monBouton" onclick="getnom()" class="btn btn-secondary fw-bold rounded-pill">Valider</button>
        <p></p>
        
        
        <input type="number"  id="number" placeholder="Tapez un nombre ici" class="rounded-pill p-1">
        <button id="Bouton" onclick="tablewithnumber()" class="btn btn-secondary fw-bold rounded-pill" >Valider</button>
        <table id = "table" class="table-md table-bordered border-black"></table>

        <h2 class="mt-5 fw-bold text-secondary">Gestion des salaires</h2>
        <input type="text" id="monInput" placeholder="Tapez votre nom ici" class="rounded-start-pill p-1">
        <input type="number" id="number" placeholder="Salaire" class="rounded-0 p-1">
        <button id="monBouton" onclick="getNomSalaire()" class="rounded-end-pill p-1">Valider</button>
        <br></br>

        <script>

            let user = prompt("Veillez saisir votre nom svp :");
            if(user !="")
            {
                let tittle = document.querySelector("title");
                tittle.textContent = user;
            }
            else
            {
                alert("Veuillez entrer un nom");
            }
            function getnom()
            {
                var nom = document.getElementById("monInput");
                var pg = document.getElementsByTagName("p")[0];
                if(nom.value !="")
                {
                    pg.innerHTML="Bonjour, " + nom.value;
                }
                else
                {
                    alert("Veuillez entrer un nom");
                }
            }
            function tablewithnumber()
            {
                var nb = document.getElementById("number");
                var li = document.getElementById("table");
                if(nb.value !="") 
                {
                    li.innerHTML = "";
                    for(let i=1; i<=10; i++) 
                    {   
                        let result = nb.value * i;
                        const tr = document.createElement("tr");
                        li.appendChild(tr);

                        const td = document.createElement("td");
                        td.textContent = nb.value + " x " + i + " = " + result; 
                        tr.appendChild(td);

                        console.log(nb.value + " x " + i + " = " + result);
                    }
                }

                else
                {
                    alert("Veuillez entrer un nombre");
                }
            } 
        </script>
</body>
</html>