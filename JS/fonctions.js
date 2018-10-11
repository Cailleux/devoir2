function Exo1()
{
    alert("lol");
    $.ajax
    (
        {
            type:"get",
            url:"PHP/getLesCategories.php",
            success:function(data)
            {
                $('#divCategories').empty();
                $('#divInterface').empty();
                $('#divCategories').append(data);
            },
            error:function()
            {
                alert("Erreur lors de la récupération des catégories.");
            }
        }
    );
}