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

//Fonction permettant de récupérer les données des news depuis la base de données snows
/*function getNews()
{
    try {
        $query = 'SELECT * FROM news';
        $statement = getPDO()->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
    //return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}*/

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
        $query = 'SELECT * FROM snowtypes INNER JOIN snows ON snowtype_id = snowtypes.id';
        $statement = getPDO()->prepare($query);
        $statement->execute();
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
    //return json_decode(file_get_contents("model/dataStorage/snows.json"), true);
}

//Fonction permetttant de récupérer les données des users depuis la base de données snows
function getUsers()
{
    try {
        $query = 'SELECT * FROM users';
        $statement = getPDO()->prepare($query);
        $statement->execute();
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
    }
    //return json_decode(file_get_contents("model/dataStorage/Users.json"), true);
}

//Fonction permettant de ressortir un utilisateur via son username afin de vérifier la connection
function getUser($username)
{
    /*$listUsers = getUsers();
    foreach ($listUsers as $user) {
        if ($user['username'] == $username) {
            return $user;
        }
    }*/
    try {
        $query = "SELECT * FROM users WHERE id=:id";
        $statment = getPDO()->prepare($query);//prepare query
        $statment->execute(['id' => $id]);//execute query
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);//prepare result for client
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

//Fonction permettant de créer un nouvel utilisateur et de l'inscrire dans le fichier Users.json
function NewUser($newusername, $newpassword, $employe)
{
    $User = getUsers();
    $addUser = [
        'username' => $newusername,
        'password' => $newpassword,
        'employe' => $employe
    ];
    $User[] = $addUser;
    file_put_contents("model/dataStorage/Users.json", json_encode($User));
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
