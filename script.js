function fonction() {
    const randomNumber = Math.floor(Math.random() * 101);
    console.log('nombre ' + randomNumber);
    let nbrTentatives = 0;
    let reponse = 0;

    while (true) {
        reponse = prompt("Quel est le nombre mystère ?");
        if(reponse === null) {
            break;
        }
        
        reponse = Number(reponse);
        if(isNaN(reponse)) {
            alert("La valeur est incorrecte. Veuillez entrer un nombre valide");
        }

        if (reponse > randomNumber)    {
            alert("Le nombre mystère est plus petit");
            nbrTentatives = nbrTentatives + 1;
        }

        if (reponse < randomNumber)    {
            alert("Le nombre mystère est plus grand");
            nbrTentatives = nbrTentatives + 1;
        }

        if (reponse == randomNumber)    {
            nbrTentatives = nbrTentatives + 1;
            alert("Bravo ! Vous avez trouvé le nombre mystère");
            window.location.href = 'game.php?tentative='+nbrTentatives;
            break;
        }
    }
}

async function postData(url, data) {
    const response = await fetch(url, {
        method: "POST",
        headers: {
        "Content-type": "application/json",
        "Accept": "application/json",
        },
        body: JSON.stringify(data),
    })

    return response.json();
}


