$('#comunidad')[0].addEventListener('change',provincias);


function provincias() {
    $idcom = $('#comunidad')[0].value;

    $('#showprov').load("/api/comunidad/"+$idcom+"/provincias" , function() { 
            $('#provincia')[0].addEventListener('change',municipios); 
         }
    );
}

function municipios() {
    $idpro = $('#provincia')[0].value;

    $codicompro = parseInt($idcom * 1000) + parseInt($idpro);
    
    $('#showmun').load("/api/provincia/"+$idpro+"/municipios" , function () {
        $('#municipio')[0].addEventListener('change',poblaciones);
    });
}

function poblaciones() {
    $idmun = $('#municipio')[0].value;

    $codicompromun = parseInt($codicompro * 100000) + parseInt($idmun);
    $('#showpob').load("/api/municipio/"+$codicompromun+"/poblaciones" , function () {
        $('#poblacion')[0].addEventListener('change',cpostales);
    });
}

function cpostales() {
    $idpob = $('#poblacion')[0].value;

    $('#showcp').load("/api/poblacion/"+$idpob+"/cpostales" , function () {
        $('#cpostal')[0].addEventListener('change',calles);
    });
}

function calles() {
    $idpostal = $('#cpostal')[0].value;

    $('#showcalles').load("/api/cpostal/"+$idpostal+"/calles" , function () {
       // $('#cpostal')[0].addEventListener('change',calles);
    });
}

$('#comunidaddest')[0].addEventListener('change',provinciasdest);

function provinciasdest() {
    $idcom = $('#comunidaddest')[0].value;

    $('#showprovdest').load("/api/comunidad/"+$idcom+"/provincias?id=comunidaddest" , function() { 
            $('#provinciadest')[0].addEventListener('change',municipiosdest);
         }
    );
}

function municipiosdest() {
    $idpro = $('#provinciadest')[0].value;

    $codicompro = parseInt($idcom * 1000) + parseInt($idpro);
    
    $('#showmundest').load("/api/provincia/"+$idpro+"/municipios?id=comunidaddest" , function () {
        $('#municipiodest')[0].addEventListener('change',poblacionesdest);
    });
}

function poblacionesdest() {
    $idmun = $('#municipiodest')[0].value;

    $codicompromun = parseInt($codicompro * 100000) + parseInt($idmun);
    $('#showpobdest').load("/api/municipio/"+$codicompromun+"/poblaciones?id=comunidaddest" , function () {
        $('#poblaciondest')[0].addEventListener('change',cpostalesdest);
    });
}

function cpostalesdest() {
    $idpob = $('#poblaciondest')[0].value;

    $('#showcpdest').load("/api/poblacion/"+$idpob+"/cpostales?id=comunidaddest" , function () {
        $('#cpostaldest')[0].addEventListener('change',callesdest);
    });
}

function callesdest() {
    $idpostal = $('#cpostaldest')[0].value;

    $('#showcallesdest').load("/api/cpostal/"+$idpostal+"/calles?id=comunidaddest" , function () {
       // $('#cpostal')[0].addEventListener('change',calles);
    });
}