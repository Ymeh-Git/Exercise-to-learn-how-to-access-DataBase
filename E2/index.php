<?php 
/* 
Read README.md first, this project is "easy", still, you need information first.
This way, you'll be able to access datas, in your DB (DataBase)
I comment a lot, hoping it'll help you understand.
*/

// Access variables 
$server = 'localhost';
$user = 'root'; //Username
$password = ''; //Usually empty for local
$dB = 'my_database'; //Don't forget to create your DataBase

//To catch errors in case of one, do it with a block try/catch
try {
    //Creation of our DataBase connection
    $database = new PDO ("mysql:host=$server;dbname=$dB;charset=utf8", $user, $password);
    
    //Error configuration
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Comment this one so we don't see it on your page
    // echo "Connection successful ! <br>";
    
    /* 
    What we are looking for in our DB : 
        - SELECT * (* = everything => id, firstName, lastName, age, ... every column)
        - FROM users (from my table users)
    */
    $sql = "SELECT * FROM users";

    //Using our connection, we execute our request
    $request = $database->query($sql);

    //We fetch all datas asked for ($sql) and put it in an associative array (PDO::FETCH_ASSOC)
    $results = $request->fetchAll(PDO::FETCH_ASSOC);

    /* 
    If your table is empty, here are some datas to help you : 
    
    INSERT INTO `users` (`id`, `firstName`, `lastName`, `age`) VALUES (NULL, 'Jeremy', 'Hybris', '28'), 
    (NULL, 'John', 'Doe', '34'), 
    (NULL, 'Philippe', 'Dore', '85'), 
    (NULL, 'François', 'Tyro', '22'), 
    (NULL, 'Felicy', 'Forgeon', '45'), 
    (NULL, 'Thomas', 'Drols', '62');

    Now we can use all those datas stored in $results to show it with HTML, example of how it will be presented : 
    <ul>
        <li> ~~ ID : 1 ~~
            <ul>
                <li> ~ Lastname : Hybris ~</li>
                <li> ~ Firstname : Jeremy ~</li>
                <li> ~ Age : 28 ~</li>
            </ul>
        </li>
    </ul>

    We will use "echo" so don't forget to open balises and close it as well.
    In case your are not confortable this way, you can use an index.html to help you visualise it, and then take the code back here and replace your text with $user['']
    */
    
    echo "<ul>";
    //A boucle foreach after opening the first unordered list.
    foreach($results as $user){
        echo "<li> ~~ ID : ". $user['id']." ~~";
        echo "<ul>";
        echo "<li> ~ Lastname : ". $user['lastName']." ~</li>";
        echo "<li> ~ Firstname : ". $user['firstName']." ~</li>";
        echo "<li> ~ Age : ". $user['age']." ~</li>";
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";

} catch (PDOException $error){
    //Catching error(s)
    echo "An error occured : ".$error->getMessage();

}