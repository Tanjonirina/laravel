function voire(id){
    var myid = "" +id;
    let url = document.getElementById(myid).getAttribute("data-href");

    $.get(url,function(data,status){
        var departement = JSON.parse(data);
        document.getElementById("nom").value =employer.nom;
        document.getElementById("prenom").value =employer.prenom;
        document.getElementById("email").value =employer.email;
        document.getElementById("contact").value =employer.contact;
        document.getElementById("sexe").value =employer.sexe;
        document.getElementById("image").value =employer.image;
        document.getElementById("salaire*heure").value =employer.salaire*employer.heure;
        $('#voire').modal("voire");
    })
}