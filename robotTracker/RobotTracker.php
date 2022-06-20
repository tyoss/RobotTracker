<!DOCTYPE html> 
<html>
    <head>
        <! -- <script> <! -- import {} from 'https://www.gstatic.com/firebasejs/9.8.3/firebase-functions';</script>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" />
        <! -- <script src="functions/index.js"></script>
        
        <br></br>
        <title>
            Robot Tracker
        </title>
    </head>
    <body>
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=robotTracker', $vincent, $password);

        if (isset($_POST['A2']))
        {
            $chemin = $bdd->query('SELECT Source,Dest,chemin FROM chemin WHERE Dest = A2');
        }
        ?>

        <form action="" method="POST">
            <input type="submit" name="A1" value="envoyer">
            <input type="submit" name="A2" value="envoyer">
        </form> 

        <?php
        echo '<table>
                <tr>
                    <th>Source</th>
                    <th>Dest</th>
                    <th>chemin</th>
                </tr>
                <tr>';
        while ($data = $chemin->fetch()) {
           echo '<td>'.$data['Source']. '</td>
                 <td>'.$data['Dest'].'</td>
                 <td>'.$data['chemin'].'</td>
                </tr>';
            }
        echo '</table>';
     ?> 

        <H1>
            Robot Tracker
        </H1>
            <br></br>
            <p>Bienvenu sur le site du projet Robot Tracker.</p>
            <p>Ici vous pouvez ordoner au robot ou il doit aller,en clicant sur l'un des boutons du tableau.</p>

            <! -- <input type="button" value="A1" onclick="buttonClickGET()"  />
            <br></br>
            
            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">A1</button>
                <button type="button" class="btn btn-primary">A2</button>
                <button type="button" class="btn btn-primary">A3</button>

            </div>

            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">B1</button>
                <button type="button" class="btn btn-primary">B2</button>
                <button type="button" class="btn btn-primary">B3</button>

            </div>

            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">C1</button>
                <button type="button" class="btn btn-primary">C2</button>
                <button type="button" class="btn btn-primary">C3</button>

            </div>
            <br></br>

            <form>
                <a href="">
                    <input type="submit" name="Marche" value="Marche">
                </a>
                <form>
                <a href="">
                    <input type="submit" name="arret" value="arret">
                </a>
            </form>

                <br></br>
            <form>
                <a href="file:///home/vincent/Documents/robot-Tracker/Stocks.html">
                    <! -- <input type="button" value="Stock">
                </a>
            </form>
    </body>
</html>