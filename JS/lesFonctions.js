function afficherTickets()
{
    

    $.ajax({
            
            type:"post",
            url:"index.php/CtrlAccueil/verifierLogin",
            data:"login="+$('#login').val()+"&mdp="+$('#mdp').val(),
            success:function(data)
            {
                $('#div1').empty();                
            }
            
    });
}