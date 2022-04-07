<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\..\css\index.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="\js\Ajax.js"></script>
    <script src="\js\Urlap.js"></script>
    <script src="\js\Bejegyzes.js"></script>
    <script src="\js\index.js"></script>
    <meta name="csrf-token" content=<?php $token=csrf_token(); echo $token;?>>
    <title>Illés Lejla</title>
</head>
<body>

    <main>
    <header><h1>Kizöldítjük a földet!</h1></header>
      
    <article>
    
                <form id="form">
                    <fieldset>
                    <legend>Mit tettél ma a földért?</legend>
                    <select id="osztaly">
                       

                    </select>
                    <select id="tevekenyseg">

                    </select>
                    <input type="button" id="submit" value="Küld">
                </fieldset> 
                </form>

                <div class="chart">
                        <h2>Pontszámok osztályonként chart helye</h2>
</div>
                <div class="bejegyzesek">


                <table id="bejegyzes">
  <tr>
    <th>Osztály</th>
    <th>Tevékenység</th>
    <th>Pont</th>
    <th>Státusz</th>
    
  </tr>
  <tbody class="bejegyzesSzulo">

  <tr class="bejegyzesSablon">
    <td class="osztaly"></td>
    <td class="tevekenyseg"></td>
    <td class="pont"></td>
    <td class="statusz"></td>
  </tr>
</tbody>
</table>
</div>

        </article>
        <footer>Illés Lejla</footer>
    </main>
</body>
</html>