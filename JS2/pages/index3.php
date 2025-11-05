<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap5_3/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Gestion des salaires</title>
    <style>
        
    </style>
</head>
<body class = "text-center">
    <h2 class = "mt-5">Gestion des salaires</h2>
    <br>
        <input type="text" id="monInput" placeholder="Tapez votre nom ici" class = "rounded-start-pill bg-secondary text-white p-1">
        <input type="number" id="number" placeholder="Salaire" class= "border-black bg-secondary text-white p-1">
        <button id="monBouton" onclick="getNomSalaire()" class ="border-none rounded-end-pill bg-secondary text-white p-1"  >Valider</button>
    <br>
    <br>
    <table class = "table table-bordered table-striped border-black mt-3">
        <tr>
            <th>Nom</th>
            <th>Salaire</th>
            <th>Action</th>
        </tr>
    </table>

    <script>
        var salaires = [];
        var totalsalaire = 0;

        function getNomSalaire() {
            var nom = document.getElementById("monInput");
            var salaire = document.getElementById("number");
            var table = document.querySelector("table");
            const total = document.querySelector("#total");

            if (total) {
                total.remove();
            }

            if (nom.value != "" && salaire.value != "") {
                const tr = document.createElement("tr");

                tr.innerHTML = "<td>" + nom.value + "</td>" +
                               "<td>" + salaire.value + " euros</td>" +
                               "<td><button onclick='supprimerLigne(this, " + salaire.value + ")'>Supprimer</button></td>";

                table.appendChild(tr);

                salaires.push(parseInt(salaire.value));
                recalculTotal();
            } else {
                alert("Veuillez entrer un nom et un salaire");
            }
        }

        function supprimerLigne(btn, salaire) {
            var row = btn.parentNode.parentNode;
            row.remove();
            
            
            const index = salaires.indexOf(salaire);
            if (index !== -1) {
                salaires.splice(index, 1);
            }

            recalculTotal();
        }

        function recalculTotal() {
            var table = document.querySelector("table");
            var oldTotal = document.getElementById("total");
            if (oldTotal) {
                oldTotal.remove();
            }

            
            var totalsalaire = 0;
            for (var i = 0; i < salaires.length; i++) {
                totalsalaire = totalsalaire + salaires[i];
            }

            
            var tot = document.createElement("tr");
            tot.id = "total";
            tot.innerHTML = "<td>TOTAL</td><td>" + totalsalaire + " euros</td>";
            table.appendChild(tot);
        }
    </script>
</body>
</html>
