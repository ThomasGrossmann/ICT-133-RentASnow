<?php
/*
 * Programme : Rent A Snow (model)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

//Fonction permettant de se connecter à la base de données
function getPDO()
{
    require ".constant.php";
    return new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
}

//Fonction permettant de récupérer un seul snow depuis la base de données snows
function getSnow($snowid)
{
    try {
        $query = 'SELECT * FROM snowtypes WHERE id =:snowid';
        $statement = getPDO()->prepare($query);
        $statement->execute(['snowid' => $snowid]);
        $queryResult = $statement->fetch(PDO::FETCH_ASSOC);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

//Fonction permettant de récupérer l'auteur des news depuis la base de données snows
function getAuthorNews()
{
    try {
        $query = 'SELECT * FROM news INNER JOIN users ON news.user_id = users.id';
        $statement = getPDO()->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

//Fonction permettant de récupérer les données des snowboards depuis la base de données snows
function getSnows()
{
    try {
        $query = 'SELECT * FROM snowtypes';
        $statement = getPDO()->prepare($query);
        $statement->execute();
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

//Fonction permettant de ressortir un utilisateur via son username afin de vérifier la connection
function getUserByEmail($email)
{
    require ".constant.php";
    try {
        $query = 'SELECT * FROM users WHERE email=:email';
        $statement = getPDO()->prepare($query);//prepare query
        $statement->execute(['email' => $email]);//execute query
        $queryResult = $statement->fetch(PDO::FETCH_ASSOC);//prepare result for client
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

/*Fonction permettant de changer l'état d'un snowboard en non disponible
function MajLocation($id)
{
    $snows = getSnows();
    foreach ($snows as $snow)
    {
        if ($snow['id'] == $id)
        {
            $snows[$id]['disponible'] = "Non";
        }
    }
    file_put_contents('model/dataStorage/snows.json', json_encode($snows));
}*/
?>
