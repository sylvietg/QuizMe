
//------------------------------------------//
// 											//
// Quiz Me: Mix Op. Registration			//
//											//
//------------------------------------------//


document.getElementById("d1").onclick=genOneDigit;
document.getElementById("d2").onclick=genTwoDigits
document.getElementById("d3").onclick=genThreeDigits;
document.getElementById("uAns").onfocus=clearField;
document.getElementById("check").onclick=checkMix;
document.getElementById("symb").onclick=displayOperator;
document.body.onload=disableMyStats;