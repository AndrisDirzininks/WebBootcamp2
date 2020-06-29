window.onload=()=>{
  // alert("čau")
// getElementsByClassName("kast01").src="media/kast/001.jpg";

var bilzuMas = new Array();

bilzuMas[0] = 'media/kast/00.jpg';
bilzuMas[1] = 'media/kast/01.jpg';
bilzuMas[2] = 'media/kast/02.jpg';
bilzuMas[3] = 'media/kast/IMG_4374.jpg';
bilzuMas[4] = 'media/kast/IMG_4381.jpg';
bilzuMas[5] = 'media/kast/IMG_4388.jpg';
bilzuMas[6] = 'media/kast/IMG_4512.jpg';
bilzuMas[7] = 'media/kast/IMG_4390.jpg';
bilzuMas[8] = 'media/kast/IMG_4437.jpg';
bilzuMas[9] = 'media/kast/IMG_4446.jpg';
bilzuMas[10] = 'media/kast/IMG_4461.jpg';
bilzuMas[11] = 'media/kast/IMG_4462.jpg';


//funkcija labajai pogai
let turp=document.getElementById("turp");
turp.addEventListener("click", manaFunkcija);
var i=1;
function manaFunkcija(){
if(i>-1&&i<=11){let bilde1=document.getElementById("kast01");
bilde1.src=bilzuMas[i];
i++}else if(i>11){i=1}
console.log(i);
}



//funkcija kreisajai pogai
let atp=document.getElementById("atpakal");
atp.addEventListener("click", manaFunkcija2);

function manaFunkcija2(){

if(i>1&&i<=12){
i=i-1;
let bilde1=document.getElementById("kast01");
bilde1.src=bilzuMas[i-1];}
else if(i=1){i=11}
console.log(i);

}

// Otrajama karuselim
var bilzuMas2 = new Array();

bilzuMas2[0] = 'media/zvan/DSC_0154.jpg';
bilzuMas2[1] = 'media/zvan/02_02_7gVNFCX.jpg';
bilzuMas2[2] = 'media/zvan/02_DSC_0014.jpg';
bilzuMas2[3] = 'media/zvan/02.jpg';
bilzuMas2[4] = 'media/zvan/03.jpg';
bilzuMas2[5] = 'media/zvan/05_DSC_0026.jpg';
bilzuMas2[6] = 'media/zvan/05.jpg';
bilzuMas2[7] = 'media/zvan/07_DSC_0068.jpg';
bilzuMas2[8] = 'media/zvan/08_DSC_0157.jpg';
bilzuMas2[9] = 'media/zvan/DSC_0017.jpg';
bilzuMas2[10] = 'media/zvan/DSC_0021.jpg';
bilzuMas2[11] = 'media/zvan/DSC_0136_MkvRMLk.jpg';
bilzuMas2[12] = 'media/zvan/DSC_0140_WSKXl2e.jpg';

//funkcija labajai pogai
let turp02=document.getElementById("turp02");
turp02.addEventListener("click", manaFunkcija3);
var i=1;
function manaFunkcija3(){
if(i>-1&&i<=11){let bilde1=document.getElementById("zvan01");
bilde1.src=bilzuMas2[i];
i++}else if(i>11){i=1}
console.log(i);
}



//funkcija kreisajai pogai
let atp02=document.getElementById("atpakal02");
atp02.addEventListener("click", manaFunkcija4);

function manaFunkcija4(){

if(i>1&&i<=12){
i=i-1;
let bilde1=document.getElementById("zvan01");
bilde1.src=bilzuMas2[i-1];}
else if(i=1){i=11}
console.log(i);
}



}
