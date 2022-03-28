<!doctype html>
<html lang="fr">
  <head>
    <title>Cours orienté objet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">POO la programmation orienté objet</h1>
            <p class="lead">Jumbo helper text</p>
            <hr class="my-2">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center"><h2>
                    <p>Les ojets  ressemble fortement aux variables que l'on connaît (String, integer, float, array,etc) mais ces dernièrs sont limitées et on peux se retrouver bloqué. Par exemple. lorsque l'on crée un réseau social et que l'on veut sauvgarder un utilisateur, Ace moment là on voudra définir ses limites, ses droits, etc. Ces tableaux deviennent vite très complexe et si l'n doit transmettre notre code? le spersonne qui ne l'ont pas écrit seront perdus. Un autre exemple ou le procédurale est compliqué à appliquer est lorsque l'on s'occupe des dates. Elle sont en effet considérer comme des chaines de caractére et faire des ajouts de jours ou de mois dessus devient très compliqué.il faudra cenvertir les données et passer d'un format à l'autre. En orienté objet, les manipulations de date seront plus simples</p>
                    <p class="alert alert-info">
                        <strong>MaDate</strong>est une classe <br>
                        <strong>$date1 = new Madate;</strong> sont des objets ou bien des instanciations de cette classe.
                    </p>

                </div> 
                <div class="col-12">
                    <h2 class="text-center">Les propriétés</h2>
                    <p>Sur nos différents objets(on instanciations) nous allons avoir des propriétés, des variables. Un objet pourra contenir plusieurs propriétés mais aussi plusieurs méthodes : sur une classe MaDate on pourra imaginer des propriétés pour afficher le nombre de jours mais aussi des mèthodes pour ajouter des jours ou des mois</p>
                </div>
                <div class="col-12">
                    <h2 class="text-center">Les méthodes</h2>
                    <p>Comme nous en avons parler au dessus, les Classes peuvent aussi contenir des méthodes.Ces dernière sont en fait des fonctions, appelées méthodes dans le cadre de la POO. Elles ont donc la même nomenclature qu'en procédural: <code>nomMethode();</code>La différence est que la méthode est directement appliqué à notre objet de la façon suivante:<code>$date->addDays();</code> </p>
                </div> 
            </div>
        </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>