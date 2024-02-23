

// de Seleccion de pagador -> Carga el ID
function Pagador_ID(){
    // obtenemos el valor de desplegable y lo almacenamos en una variable
    valor=document.querySelector('#pagador').value
    // igualamos el valor de ID Pagador al de la variable
    document.querySelector('#idPagador').value=valor;
}

// de ID -> Carga Seleccione Pagador
function ID_Pagador(){
    // obtenemos el valor de ID y lo almacenamos en una variable
    valor=document.querySelector('#idPagador').value
    // igualamos el valor del Desplegable al de la variable

    document.querySelector('#pagador').value=valor;
}