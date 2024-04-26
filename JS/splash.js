let contador = 0
var continuar = true
const progressbar = () =>{
 if(continuar == true){
    Contar()
    if(contador == 10){
        continuar = false
}
}
else {
    Parar()
}
}
function Contar(){
    let cont = 1
    contador += cont
    console.log(contador)
setInterval(progressbar,1000)
}
function Parar(){
   window.location.href = "index.php"
}