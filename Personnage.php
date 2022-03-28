<?php
/* Pourcréer une Classe on vas utiliser le mot clé class suivi du nom de notre classe, avec une majuscule . Le nom du fichgier, quand il contient une classe doit aussi prendre une majuscule.Attention  un fichier de classe ne contient que les informations relatives à la classe à l'intérieur, l'affichage se fera sur une autrepage */

class Personnage 
{
    /* On définit des caractéristiques de nos personages grâce à des propriétées.*/
    public $vie = 80;
    public $attaque = 20;
    public $nom ;
    // Cet purement par convention et pour s'y retrouver dans le code que l'on déclare notre propriété à cette endroit, on pourrais définir le nom directement dans la page affichage.phpmais c'est fortement déconseillé
    /* publis est la visibilité de notre variable // on en reparlera plus tard pour définir ce qu'elle veut dire mais il existe ausii par exemple private */


    /*
    Lorsque l'on crée une instance de classe on fait appelle à un constructeur, si on veut initialiser une donnée de la création il faudra utiliser la méthode __construct(), grâce à cxette méthode tout les paramétre qui seront passés entre parenthése permettront de définire les données voulues.
    En occurence nous voulons définir le nom de notre personnage dès sa création et donc on lance notre méthode construct */ 

    public function __construct($nom)
    {
        /* Gâce à la façon de faire qui suit nous allons pouvoir sauvgarder le nom du personnage passé lors de l'instanciation. Le constructeur permùet en fait d'implémenter des propriété de manière initiale*/
        $this->nom = $nom;
    }
    /* On définit une fonction (méthode ) qui lorsque l'on appelle, fait un echo de la phrase*/
    public function crier()
    {
        echo "JE PARS À L'ATTAQUE !";
    }
    // Création de la méthode regenerer
    // Pour cette méthode il faudra utiliser $this => fait référence au personnage (à l'objet) sur lequel on vas appliquer notre méthode 
    // Pour cette méthode le but est de mettre la vie du personnage sur lequel est appliqué à 100
    public function regenerer($vie = null)
    {
        
      if (is_null($vie)) { /* Si on ne précise pas de chiffre en paramétre */
         $this->vie = 100; /*alors la vie sera regénérer à 100 */
      }else{ // sinon si en paramétre on passe 5 par exemple, alors on ajoutera 5 à la vie de notre personnage 
          $this->vie += $vie;
      }

    }
    public function mort (){
        return $this->vie <= 0; // cette méthode renvoie le boolean false quand le personnage n'est pas mort et true si le personnage est mort
    }
}
