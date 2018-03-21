<?php
require_once "core/bootstrap.php";

function okMessage($message)
{
    echo "<li>&#x2705; $message</li>";
}

function notOkMessage($message)
{
    echo "<li>&#x274C; $message</li>";
}

function echoInfoWithOutput($info, $output)
{
    echo "$info:<br><div class=\"alert alert-secondary\" role=\"alert\"><samp>$output</samp></div>";
}

function executeQuery($query, $params)
{
    $dbConnection = connectToDatabase();
    $sth = $dbConnection->prepare($query);
    $sth->execute($params);
    return $sth->fetch(PDO::FETCH_ASSOC);
}

function executeModifyingQuery($query, $params)
{
    $dbConnection = connectToDatabase();
    $sth = $dbConnection->prepare($query);
    return $sth->execute($params);
}

function deleteDump()
{
    unlink(CONFIG["databaseDumpFileName"]);
}

function readDump()
{
    return file_get_contents(CONFIG["databaseDumpFileName"]);
}

function createDump()
{
    deleteDump();
    $command = CONFIG["mysqlDumpExecutable"] . " -u" . CONFIG["databaseUser"] . " -p" . CONFIG["databasePassword"] . " --add-drop-database --databases " . CONFIG["databaseName"] . " > " . CONFIG["databaseDumpFileName"];
    echo "Command that will be executed on command line:<br><div class=\"alert alert-secondary\" role=\"alert\"><samp>$command</samp></div>";
    shell_exec($command);
    echo "Content of " . CONFIG["databaseDumpFileName"] . " after dump:<br><div class=\"alert alert-secondary\" role=\"alert\"><pre><samp>" . readDump() . "</samp></pre></div>";
}

function restoreDump()
{
    $command = CONFIG["mysqlExecutable"] . " -u" . CONFIG["databaseUser"] . " -p" . CONFIG["databasePassword"] . " < " . CONFIG["databaseDumpFileName"];
    echo "Command that will be executed on command line:<br><div class=\"alert alert-secondary\" role=\"alert\"><samp>$command</samp></div>";
    $output = shell_exec($command);
    echo "<ul>" . testDoesDbExist() . "</ul>";
}

function deleteAllRowsInContentTable()
{
    $query = "DELETE FROM " . CONFIG["nameOfContentTable"];
    echoInfoWithOutput("Query that will be executed:", $query);
    $result = executeModifyingQuery($query, array());
    if ($result) {
        echo "<ul>";
        okMessage("Table " . CONFIG["nameOfContentTable"] . " is now empty.");
        echo "</ul>";
    } else {
        echo "<ul>";
        notOkMessage("Rows in  " . CONFIG["nameOfContentTable"] . " could not be deleted.");
        echo "</ul>";
    }
}

/*TESTS*/
function testDbDumpExists()
{
    $filename = CONFIG["databaseDumpFileName"];
    if (file_exists($filename)) {
        okMessage("Db dump file at $filename found.");
    } else {
        notOkMessage("Db dump file at $filename not found.");
    }
}

function testMySqlDumpExecutableExists()
{
    $filename = CONFIG["mysqlDumpExecutable"];
    if (file_exists($filename)) {
        okMessage("MySQL dump executable exists at $filename.");
    } else {
        notOkMessage("Did not find MySQL dump executable at $filename.");
    }
}

function testMySqlExecutableExists()
{
    $filename = CONFIG["mysqlExecutable"];
    if (file_exists($filename)) {
        okMessage("MySQL  executable exists at $filename.");
    } else {
        notOkMessage("Did not find MySQL executable at $filename.");
    }
}

function testDbConnection()
{
    $dbConnection = connectToDatabase();
    if ($dbConnection) {
        okMessage("Connection to database successful.");
    }
}

function testDoesDbExist()
{
    $result = executeQuery("SELECT count(SCHEMA_NAME) as count FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ?", array(CONFIG["databaseName"]));
    if ($result["count"] == 1) {
        okMessage("Database " . CONFIG["databaseName"] . " exists.");
    } else {
        notOkMessage("Database " . CONFIG["databaseName"] . " does not exists.");
    }
}

function testDoesContentTableExist()
{
    $result = executeQuery("SHOW TABLES like ?", array(CONFIG["nameOfContentTable"]));
    if ($result["count"] == 1) {
        okMessage("Your content table <samp>" . CONFIG["nameOfContentTable"] . "</samp> was found in the database.");
    } else {
        notOkMessage("Your content table <samp>" . CONFIG["nameOfContentTable"] . "</samp> could not be found in the database.");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Testing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <style>
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="?">Testing-Overview</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <!--<li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Database '<?= CONFIG["databaseName"] ?>'</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="?f=createDbDump">Create db dump to
                        '<?= CONFIG["databaseDumpFileName"] ?>'</a>
                    <a class="dropdown-item" href="?f=restoreDump">Load db dump from
                        '<?= CONFIG["databaseDumpFileName"] ?>'</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Manage table '<?= CONFIG["nameOfContentTable"] ?>'</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="?f=deleteAllRowsInContentTable">Delete all rows in
                        '<?= CONFIG["nameOfContentTable"] ?>'</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">

    <?php
    $action = $_GET["f"] ?? "";
    if ($action == "restoreDump") {
        ?>
        <h1>Restore Db Dump</h1>

        <?php
        restoreDump();
    } elseif ($action == "createDbDump") {
        ?>
        <h1>Create Db Dump</h1>

        <?php
        createDump();
    } elseif ($action == "deleteAllRowsInContentTable") {
        ?>
        <h1>Delete all rows in table <samp><?= CONFIG["nameOfContentTable"] ?></samp></h1>
        <h2>Pre tests</h2>
        <ul>
            <?php
            testDoesContentTableExist();
            ?>
        </ul>
        <h2>Execution</h2>
        <?php
        deleteAllRowsInContentTable();
    } else {
        ?>
        <h1>Testing and Overview</h1>

        <h2>Configuration</h2>
        <div class="alert alert-secondary" role="alert">
            <?php
            var_dump(CONFIG)
            ?>
        </div>

        <h2>Database</h2>
        <ul>
            <?php
            testDbConnection();
            testDoesDbExist();
            testDoesContentTableExist();
            ?>
        </ul>

        <h2>Database dump possible?</h2>
        <ul>
            <?php
            testDbDumpExists();
            testMySqlDumpExecutableExists();
            testMySqlExecutableExists();
            ?>
        </ul>

        <?php
    }
    ?>
</main>
</body>
</html>

