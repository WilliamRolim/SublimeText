function data(){
/*a data está na variavel dt*/
var dt = new Date();
/* Hora atual */
console.log(dt.getHours());

console.log(dt.getMinutes());

console.log(dt.getSeconds());

/*as datas são datadas em millesegundos, quando for manipular datas
tem que fazer qualquer calculo em millesegundos*/

/* 1 de janeiro de 1969 , javascript, php e varias outras linguagens,
trabalha em millesegundos, e eles começam a contar nessa data se colocar 0
como parametro
var dt = new Date(0);*/
var dt = new Date(0);
console.log(dt);

var dt = new Date(Date.parse("May 06, 2018"));

console.log(dt);

/*1525575600000 segundos que se passaram de 1969 até agora*/
console.log(Date.parse("May 06, 2018"));

console.log(dt.getDate()); /* data atual */

console.log(dt.getDay()); /* dia da semana, 0 é domingo, são 7 algoritimos */

console.log(dt.getFullYear());/* ano atual */

/* Nossa descrição de data certinho */
/* getMonth() começa do 0 -> janeiro é 0 */
console.log(dt.getDate + "/" + dt.getMonth()+"/" + dt.getFullYear());

/* Concertando : sobre o comentario acima */
console.log(dt.getDate + "/" + (dt.getMonth() +1 ) +"/" + dt.getFullYear());

console.log(dt.getHours());
console.log(dt.getMinutes());
console.log(dt.getMilliseconds());
console.log(dt.getTime());

/*mostrar o dia da semana de segunda domingo */

var dias = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta","Sábado"];

/*dessa forma tranformo o get day que vai de 0 a 6 usando array com dias da semana
*/
console.log(dias[dt.getDay()]);
/* se quiser fazer a mesma coisa, faço um array com os anos descritos */

var dt = new Date(); /*vai setar a data atual*/

console.log(dt);

var dt = new Date(Data.parse("May 06", 2018));

console.log(dt);

dt.setDate(dt.getDate() + 60);/* mudar os meses e os anos anos automaticamente */)
console.log(dt);

/*Manipulação de horas*/
dt.setHours(dt.getHours() + 25);