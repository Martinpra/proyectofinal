function confirmacion(e){
if (confirm("¿esta seguro que desea eliminar?")){
return true;
}else {
    e.preventdefault();
}
}
let LinkDelete = document.querySelectorAll(".borrar");
for (i=0; i<LinkDelete.length; i++){

    LinkDelete[i].addEventListener('click', confirmacion);
}