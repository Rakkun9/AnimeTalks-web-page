var usuario; 
var pass; 
var correo; 

function usuarios (usuario, pass, correo) {
    this.usuario = usuario;
    this.pass = pass;
    this.correo = correo;
}

var usuario2 = new usuarios ("hola", "A", "Todos");

