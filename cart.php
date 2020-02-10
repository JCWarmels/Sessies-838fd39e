<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->
        
        <?php
        if(!isset($_POST["in"])) {
            ?>
            <form method="POST">
            <h4>Keuze:
                <input type="text" placeholder="Typ hier uw keuze" name="in">
                <input type="submit" value="submit" name="submit">
            </h4>
            </form>
            <?php    
        }
        else {
           
            if($_POST["in"]>=1 && $_POST["in"]<=3) {
                if (!isset($_SESSION["in"])) {
                    $_SESSION["in"] = $_POST["in"];
                }
                ?>
                <h2><?php echo "Gekozen optie: #".$_SESSION["in"];?></h2><?php
            }
            else {?>
                <h2><?php echo($_POST["in"]." is geen geldige optie.");?></h2><?php
            }
        }
        ?>
    </body>
</html>