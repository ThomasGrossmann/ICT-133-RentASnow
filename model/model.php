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
function getSnowType($snowid)
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

function getRealSnow($snowid)
{
    try {
        $query = 'SELECT * FROM snows INNER JOIN snowtypes on snowtype_id = snowtypes.id WHERE snows.id =:snowid';
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

//Fonction permettant de récupérer tous les users depuis la base de données snows
function getUsers()
{
    require ".constant.php";
    try {
        $query = 'SELECT * FROM users';
        $statement = getPDO()->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

//Cette fonction est là pour éviter que ça change le password à chaque fois
function changePassword()
{
    $users = getUsers();
    foreach ($users as $user)
    {
        $hash = password_hash($user['firstname'], PASSWORD_DEFAULT);
        try {
            $query = 'UPDATE users SET password =:hash WHERE id=:id';
            $statement = getPDO()->prepare($query);//prepare query
            $statement->execute(['hash' => $hash, 'id' => $user['id']]);//execute query
            $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return null;
        }
    }
}

function getSnowsOfType($snowid)
{
    try {
        $query = 'SELECT * FROM snows WHERE snowtype_id =:snowid';
        $statement = getPDO()->prepare($query);
        $statement->execute(['snowid' => $snowid]);
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function updateSnow($snowdata)
{
    if (isset($snowdata['available']))
    {
        $snowdata['available'] = 1;
    }
    else
    {
        $snowdata['available'] = 0;
    }
    try {
        $query = "UPDATE snows SET code= :code, length= :length, state= :state, available= :available WHERE id=:snowid";
        $statement = getPDO()->prepare($query);
        $statement->execute($snowdata);
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
