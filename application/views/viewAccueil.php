<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Techdays</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JQuery/jquery-3.1.1.js"></script>
    <script src="JS/fonctions.js"></script>
    <script type="text/javascript">
    $
    (
        function()
        {
            $('#createConf').click(Exo1);
            $('#voteConf').click(Exo2);
        }
    )
    </script>
</head>
<body>
<h1>Devoir TechDays</h1>
<input type="button" value="Creer une conference" id="createConf"/>
<br><br>
<input type="button" value="Voter pour une conference" id="voteConf"/>
<div id="divCreate"></div>
    
</body>
</html>