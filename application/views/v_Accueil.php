<html>
    <head>
        <title>Connexion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
            <script type="text/javascript">
            
            $(
            function()
    {
        $('#btnGo').click(
                function()
        {
            afficherTickets();
        }
          );      
            
            
    }
            
                    
            
            );
            
            </script>
    </head>
    <body>
        <h1> <?php $titre ?> </h1>
        
        <p>Login</p>
        <input id="login" type="text" value="">
        
        <p>Mot de passe</p>
        <input id="mdp" type="text" value="">
        <input id="btnGo" type="button" value="Go">
        
    </body>
</html>


