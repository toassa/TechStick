let count = 1;
document.getElementById("radio1").checked = true;

setInterval( function(){
    nextImage();
}, 6000)


function nextImage(){
    count++;
    if(count>4){
        count = 1;
    }

    document.getElementById("radio"+count).checked = true;

}
function reloadWithParam(){
    var d = document.getElementById("tipo_produto").value;
    window.location.href="./G2_selecao_produtos_front.php?tipo_produto=" + d;
}
// function select(){
//     alert("a")
//     document.getElementById("botons").setAttribute("selected","")
// }

function mostrarOcultarSenha()
{
	var senha=document.getElementById("senha");
	if(senha.type=="password"){
	senha.type="text";
	}else{

	senha.type=="password";
		}
}