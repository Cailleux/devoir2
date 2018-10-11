<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Techdays</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JQuery/jquery-3.1.1.js"></script>
    <script src="JS/fonctions.js"></script>

<body>
<p>Numero de la conference: <input class="form-control" name="test" type="text" value='<?php echo ($numeroConf[0]->maxConf)+1 ?>' readonly="readonly"> Titre de la conference: <input type="text" name="titreConf"/></p>

<p>Contenu de la conférence: <input type="text" name="contenueConf"/>
Choix de niveau: <select id="selectNiveaux">
<?php
        foreach($lesNiveaux as $unNiveau){
        ?> <option value='<?php echo $unNiveau->IDNIVEAU ?>' name='niveau'><?php echo $unNiveau->NIVEAU ?></option>
        <?php    
        }

    ?></select></p>
</p>

<p>Choix du thème:     <select id="selectThemes">
    <?php
        foreach($lesThemes as $unTheme){
        ?> <option value='<?php echo $unTheme->IDTHEME ?>' name='theme'><?php echo $unTheme->LIBELLETHEME ?></option>
        <?php    
        }

    ?></select></p>
 <p>Choix des technologies<br>
    <?php
        foreach($lesTechnologies as $uneTechnologie){
        ?> <input type="checkbox" value='<?php echo $uneTechnologie->IDTECHNO ?>' name='technologie'><?php echo $uneTechnologie->NOMTECHNO ?>
        <?php    
        }

    ?></select></p>
    <input type="button" value="Insérer une conférence" id="validCreateConf" onclick='InsertNewTime()'/>
</body>
</html>