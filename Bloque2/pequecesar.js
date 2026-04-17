const formulario = document.getElementById("formulario");

if (formulario){
    formulario.addEventListener("submit", function(lirusita){
        const Nombre = document.getElementById("nombre").value.trim();
        const Apellido = document.getElementById("apellido").value.trim();
        const Email = document.getElementById("email").value.trim();
        const Clave = document.getElementById("password").value.trim();

        if (Nombre === "" && Apellido === "" && Email === "" && Clave === ""){
            lirusita.preventDefault();
            alert("Rellenar los campos");
            return false;
        } else {
            alert("Datos enviados correctamente");
            return true;
        }
    });
}