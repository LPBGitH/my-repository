<?php 

// estrae il nome del file che stiamo utilizzando
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');

// $title = str_replace(search, replace, subject);

// str_replace rimpiazza quello che vuoi scrivendo 3 parametri:
// cosa rimuovere, cosa aggiungere, dove(assegnado una variabile)
$title = str_replace('_', ' ', $title);



// se si naviga su index allora il nome di title diventa 'home
if ($title == 'index'){
    $title = 'home';
}

// ucwords è una funzione che imposta la prima lettera in maiuscola per ogni parola
$title = ucwords($title);
?>
