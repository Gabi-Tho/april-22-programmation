<?php

/* 
  Notions qui peuvent être utiles pour coder la question 1
  ========================================================
*/

// Suppression des caractères non significatifs
$chaine = "    azerty  ";
$chaine = trim($chaine);
afficher(strlen($chaine)); // 6

// Longueur d'une chaîne 
$chaine1 = "azerty";
afficher(strlen($chaine1));    // 6
afficher(mb_strlen($chaine1)); // 6
if (strlen($chaine1) === mb_strlen($chaine1)) {
  afficher("Cette chaîne ne contient que des caractères utf-8 sur un seul octet.");	
}
$chaine2 = "azérty";
afficher(strlen($chaine2));    // 7
afficher(mb_strlen($chaine2)); // 6

// Balayage des caractères d'une chaîne de caractères utf-8 codés sur un seul octet
$chaine = "azerty1234567";
for ($i = 0; $i < strlen($chaine); $i++) {
  $c = $chaine[$i];
}

// Comparaison d'un caractère avec une plage de la table ascii
$c = "E";
if ($c >= "B" && $c <= "P") {
  afficher($c." est bien compris dans la plage des caractères ascii de B à P");
}

// Ajout d'un élément dans un tableau 
// par exemple pour l'utilisation d'un tableau des différents caractères
$t = ["d", "%", "3"];
$c = "1";
$t[] = $c; // -> $t = ["d", "%", "3", "1"];
// nombre d'éléments de ce tableau
afficher(count($t));


/* 
  Notions qui peuvent être utiles pour coder la question 2
  ========================================================
  
  Utilisation d'opérateurs et de fonctions arithmétiques.
  Utilisation de tableau(x) si vous choisissez une programmation itérative.     
*/
?>
