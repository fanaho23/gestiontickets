function afficherTickets()
{    
    $.ajax({
            
            type:"post",
            url:"index.php/CtrlTickets/verifierLogin",
            data:"login="+$('#login').val()+"&mdp="+$('#mdp').val(),
            success:function(data)
            {
                alert('Ca fonctionne');
                $('#div1').empty(); 
                $('#div1').append(data);
            },
            error:function(data)
            {
              alert('Problème de connexion');  
            }
            
    });
}