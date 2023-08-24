function limpiar(){
    document.form.restet();
    document.form.cod.focus();
}
function validar(){
    var form = document.form;
    if(form.cod.value == ""){
        alert("Debe ingresar el codigo");
        document.form.cod.focus();
        return false;
    }
    if(form.nom.value == ""){
        alert("Debe ingresar el nombre");
        document.form.nom.focus();
        return false;
    }
    if(form.em.value == ""){
        alert("Debe ingresar el email");
        document.form.em.focus();
        return false;
    }
    if(form.tel.value == ""){
        alert("Debe ingresar el telefono");
        document.form.tel.focus();
        return false;
    }
    form.submit();
    
}