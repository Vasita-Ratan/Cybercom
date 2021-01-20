//Date 8/1/21
										
/*//1)variable naming rules

//script variable define in index file 
console.log(script);

//variables define lower and using underscore
var firstname = 'ratan';
console.log(firstname);


//if define veriables value return on console true/false
var fullage = true;
console.log(fullage);

//without value just defining variable this is call undefined variable

var age;
console.log(log);

//without datatype define value variable

name = 'Vasita Ratan';
console.log(name);

//this type of datatypes breaking rules of javascript notation returning error unexpected this datatype
//remove error use underscore or remove back slash
var _5year = 3;
var forkwork = 'maintain';

//keywords can't use as variable name

var function = 'Ratan';

var delete = 'ratam';

var if = 'ratan';


//2)concetenate two variables

var firstname = 'ratan';
var age = 20;
console.log(firstname + ' ' + age);


//type coercion
var job,ismerried;
job = 'engineer';
ismerried = false;

console.log(firstname + 'is a'+ age + 'older' + job + 'merried or not' + ismerried);


//3)type mutaion

//alert showing the beautiful popup message

alert(firstname + 'is a'+ age + 'older' + job + 'merried or not' + ismerried);

//4)prompting the popup message 

var lastname = prompt(firstname + 'is a'+ lastname);


//5) Javascript basic operators

var years = 2018-10;
console.log(years);
 
//another way to define 

var year = 2020;
var ans  = year - 20;
var ans = year - 9;

console.log(ans);

var ans;
current = 2020;
var ratanage=20;
var meetage=22;

ans = current - 20;

//using arithmetic operator

console.log(current * 2);
console.log(current + 2);
console.log(current - 2);
console.log(current / 10);


//logical operator 
//ans returning in console true/false

var oldage = ratanage < meetage; 
console.log(oldage);

//typeof operator


console.log(typeof ratanage); // returning age in number 

console.log(typeof ismerried); //returing boolean value true/

//undefine function
var none;

console.log(typeof none); 

//operator procedure

var now = 2018;
var yearage = 2000;
var fullage = 20;

var isfullage = now -fullage >= fullage;//true
console.log(isfullage);


//define operator many way

var ageratan = now - yearage;
var agemark = 35;
var agemake = (ageratan + agemark) / 2;
console.log(agemake);


//multiple assignments

var x,y;
x =y = (3 + 5) * (4 - 6)//8 * 4 - 6 //32 - 6//26

console.log(x,y);

  //more operators infix or prefix refering stackoverflow many rules

  x += 2;
  console.log(x);

  x *=20;
  console.log(x);

  x++;

console.log(x);


*/



                                                       //PRACTICE JAVASCRIPT :-1//
/*
//Q.1)create variables:-
	var mass,height;

	mass=markkg = 70;
	hegiht=markmeter = 155;

	mass=johnkg = 68;
	heeight=johnmeter = 152;

	//console.log(markkg,markmeter,johnkg,johnmeter);
	console.log('markkg:-'+ markkg +'mark height in meter'+ markmeter + 'johnkg is:-' + johnkg + 'john hegiht in meter' + johnmeter);


	//Q.2)calculate both Bmi:

	var markBmi = markkg / (markmeter * markmeter)
	console.log('mark BMI is:-' + markBmi); 
	//console.log(markheight*markheight + 'mark height Meter');
	var johnBmi = johnkg / (johnmeter * johnmeter)
	console.log('John BMI is:-' +  johnBmi); 


	//Q.3) comparing both Bmi:

	var comapare = markBmi < johnBmi;

	console.log(comapare);

	//Q.4) prompting the message beautiful message:-

	var com = prompt('markBmi greater then johnBmi' + comapare );
	console.log(com);

	/*-----------------------------------------------------------------------------------------------------------------------------*/


                                                                   /*Date:-11/01/21
                                                                      practice*/

//Boolean logic

/*
var firstname = 'Ratan';
var age = 20;

if(age < 15)
{
	console.log(firstname + ' boy');

}
else if(age >= 15 && age < 20)
{
		console.log(firstname + ' teenager');
}
else if(age >= 20 && age < 21)
{
		console.log(firstname + ' young man');
}
else
{
		console.log(firstname + ' is a man');
} 



//Ternary operator(condition_if_else_statement)

age >= 20 ? console.log(firstname + '  is brave boy') //if statement true this will executed
    : console.log(firstname + ' Ratan is bad boy');//else statement false this will executed


var behave = age < 19 ? 'brave' : 'bad';
console.log(behave);

if(age >=20)
{
	var behave = 'brave';
}
else
{
	var behave = 'bad';
}
*/

//switch statement

/*var job = 'doctor';
switch(job){
		case 'teacher':
		case 'doctor':
			        console.log(firstname + ' is doctor');
			        break;

		case 'driver':
			        console.log(firstname + ' is driver');
			        break;


		case 'software Engineer':
			        console.log(firstname + ' is software Engineer');
			        break;

		default :
		          console.log('invalid');
}

switch(true){

	case(age < 15):
				console.log(firstname + ' boy');
				break;
	case(age >= 15 && age < 20):
				console.log(firstname + ' teenager');
				break;
    case(age >= 20 && age < 21):
				console.log(firstname + ' young man');
				break;
	default:
			console.log(firstname + ' is a man'); 

}

//Truly and falsy values and equality operators

//falsy :- undefined,0,null,'NAN'
//truly :- means value is not falsy.

var height;
height = 100 ; 
/*
if(height=100 || height === 0)
{
	console.log('height define');
}
else
{
	console.log('height undefine');	
}

//Equality operator

if(height === '100')//compare string to use double equal shymbol when compare '==='cant show in console we write in console check condition true or false
{
		console.log('height define');
}
else
{
	console.log('height undefine');	
}

// Function

function calculateage(birthyear)
{
	return 2018 - birthyear;
}

var ratanage = calculateage(1999);
var mananage = calculateage(1943);
var karanage = calculateage(1994);
console.log(ratanage,mananage,karanage);

	

function yearRetirement(year,firstname)
{
	var age = calculateage(year);
	var retirment = 65 - age;

	if(retirment > 0 )
	{
			console.log(firstname +' retirment of :- ' + retirment + ' year');
	}
	else
	{
		console.log(firstname +' already retirmented' );
	}
}
yearRetirement(1999,'ratan');
yearRetirement(1943,'manan');
yearRetirement(1996,'karan');


//Function statement and expression

//functionn declaration

function calc(num1,num2) {
	// body...
}

//function expression

var calc = function(job,firstname)
{
	switch(job){
				case 'teacher':
								return firstname + ' teacher';
				case 'doctor':
								return firstname + ' doctor';
				case 'engineer':
								return firstname + ' engineer';	
				default :
								return firstname + ' invalid';

	}

}
console.log('teacher','manan');
console.log('doctor','karan');
console.log('engineer','ratan');



//Array
//intialize array
var names = ['ratan','manan','karan','engineer'];
var year = new Array(1999,1998,1997);
console.log(names.length);
console.log(names[2]);

//mutate array
names[1] = 'mayank';
names[names.length] = 'vaibhav';
console.log(names);

//Different datatypes

names.push = 'abhishek';//to add new element in array
console.log(names);

names.unshift('mr');//to add something at begining
console.log(names);

//names.pop() //to delete last element in array
//console.log(names);

console.log(names.indexOf('ratan'));//its return with index number and if either reutrn -1 means false

console.log(names.indexOf(23));//if either reutrn -1 means false because this is not in array

var isengineer = names.indexOf('engineer') === -1 ? 'Ratan is not engineer' : 'Ratan is engineer';
console.log(isengineer);//using if_else statement 


*/
		



                                                        //PRACTICE JAVASCRIPT :-2
/*

//Q.1 find the average of two different teams 

var john,mike;
john = 89,120,103;
mike = 116,94,123;

var johnavg = 89 + 120 + 103 / 3;
console.log('john team average score is:-' + johnavg);

var mikeavg = 116 + 94 + 123 / 3;
console.log('mike team average score is:-' + mikeavg);


//Q.2 find the which one team average score is higher score print on console:
if ( johnavg > mikeavg)
{
		console.log('john team score ' + johnavg +  'higher then mike team');

}
else
{
		console.log('mike team score ' +    mikeavg   +  '  higher then john team');


}

//Q.3 just change score and check who is winner

var john,mike;
john = 116,94,123;
mike = 89,120,103;

var johnavg = 116 + 94 + 123 / 3;
console.log('john team average score is:-' + johnavg);

var mikeavg = 89 + 120 + 103 / 3;
console.log('mike team average score is:-' + mikeavg);




//Q.2 find the which one team average score is higher score print on console:
if ( johnavg > mikeavg)
{
		console.log('john team score ' + johnavg +  ' higher then mike team');

}
else
{
		console.log('mike team score ' +    mikeavg   +  '  higher then john team');


}


//Q.4 add one more team name is mary

var mary;
mary = 97,134,105;
var maryavg = 97 + 134 + 105 / 3 ;
console.log('mary average score is:- '  + maryavg);

//comparing with john and mike average score

if(johnavg > mikeavg)
{
	alert('john team score ' + johnavg +  ' higher then mike and mary team');
	console.log('john team average score is:-' + johnavg);

}
else
{
	alert('mike team score ' +    mikeavg   +  '  higher then john and mary team');
	console.log('mike team average score is:-' + mikeavg);
}
if(maryavg > johnavg)
{
	alert('mary team score ' +    maryavg   +  '  higher then john and mike team');
	console.log('mary average score is:- '  + maryavg);
}
else
{
	alert('please try again!!!');
}




//Q.5 changing the score of all teams then check again


var mike,mary,john;
mike = 97,134,105;
mary = 116,94,123;
john = 89,120,103;
avgscore = 260

var mikeavg = 97 + 134 + 105 / 3 ;
console.log('mike average score is:- '  + mikeavg);

var maryavg = 116 + 94 + 123 / 3;
console.log('mary team average score is:-' + maryavg);

var johnavg = 89 + 120 + 103 / 3;
console.log('john team average score is:-' + johnavg);

if(avgscore < maryavg )
{
	alert('mary team score ' +    maryavg   +  '  higher then john and mike team');
	console.log('mary team average score is:-' + maryavg);
	

}
else if(avgscore > johnavg && avgscore < mikeavg)
{
	alert('mike team score ' +    mikeavg   +  '  higher then john and mike team');
	console.log('mike average score is:- '  + mikeavg);
	
}
else
{
	alert('john team score ' + johnavg +  ' higher then mike and mary team');
	console.log('john team average score is:-' + johnavg);
}

*/
/*-----------------------------------------------------------------------------------------------------------------------*/
													//Date:-13/01/21
													   //practice-3


//Ans
/*
var bill1 = 124;
var bill2 = 48;
var bill3 = 268;

function tipcalculate()

	if(retirment > 0 )
	{
			console.log(firstname +' retirment of :- ' + retirment + ' year');
	}
	else
	{
		console.log(firstname +' already retirmented' );
	}

yearRetirement(1999,'ratan');
yearRetirement(1943,'manan');
yearRetirement(1996,'karan');
*/

/*------------------------------------------------------------------------------------------------------------------------------*/
													//Date:-15/01/21
													//Practice


//function constructor:-
/*
var john = {
	name:'john',//define the variable value
	yearofbirth:1999,
	job:'Engineer'
};

var person = function(name,yearofbirth,job)//create function construcor parameters objects
{
	this.name=name;//this operator use to refer the value of this variable
	this.yearofbirth=yearofbirth;
	this.job=job;
}
//create prototype and specify one function for each objects to refer it.
person.prototype.calculateage = function(){

	console.log(2018 - this.yearofbirth);
}

person.prototype.lastname = 'bhatt';//spacify many think with prototype function

var john = new person('john',1999,'Engineer');
var jay = new person('jay',1998,'Designer');
var mayank = new person('mayank',1997,'teacher');

john.calculateage();//call single function for three objects
jay.calculateage();
mayank.calculateage();
console.log(john.lastname);//call prototype function threw value;

//object create benefit is allow beggist complex structure of inheritance

var protofun = {
	calculateage: function(){
		console.log(2019 - this.calculateage);
	}
};

var jay = object.create(protofun);//featch value directly inherite from the class function arguments constructor prototype property
jay.name = 'jay';
jay.yearofbirth = 1999;
jay.job = 'doctor';

var mayank = object.create(protofun,
{
	name = {value : 'mayank'},
	yearofbirth = {value : 1997},
	job = {value : 'teacher'}
});

//primitives VS objects

var a = 25;
var b = a;
 a = 60; // this value can't affect veriable b bcz its not other copy generate same variable consiste first variable value 

console.log(a);
console.log(b);

//objects
var obj1 = {
	name : 'Ratan',
	age: 21
};
var obj2 = obj1;//change value bcz its refer same object value to reflect it.

obj1.age = 21;

console.log(obj1.age);
console.log(obj2.age);

//Function

var age = 21;
var obj = {
	name: 'Ratan',
	city: 'ahmedabad'

};
function change(a,b){
	a = 22;
	b.city = 'jamnagar';//pass the object variable value reflect out side the function 	
} 
change(age,obj);

console.log(a);
console.log(obj.city);

//Passing function as argument

var years = [1995,1996,1997,1998,1999];//create array return result

function arrycalc(arr , fn)//create a call back function
{
     var arrayres = [];//empty array create

     for(var i=0 ; i < arr.length ; i++)//create for loop for fetching array values
     {
     	arrayres.push(fn(arr[i]));
     }
     return arrayres;
}  

function calcarray(el)
{
	return 2016 - el;
}

function isFullage(el)
{
	return el >= 18;
}
function maxHeartage(el){

	if(el >= 18 && el <= 81	)
	{
		return Math.round(206.9 - (0.67 * el));
	}
	else
	{
		return -1;
	}
}

var ages =arrycalc(years,calcarray);
console.log(ages);

var fullage =arrycalc(ages,isFullage);
console.log(fullage);

var rates = arrycalc(ages,maxHeartage);
console.log(ages);
console.log(rates);


														//practice challenge(15-01-21)
//Q.5

const number = parseInt(prompt('Enter the number of terms: '));
let n1 = 0, n2 = 1, nextTerm;

console.log('Fibonacci Series:');

for (let i = 1; i <= number; i++) {
    console.log(n1);
    nextTerm = n1 + n2;
    n1 = n2;
    n2 = nextTerm;
}
*/
/*--------------------------------------------------------------------------------------------------------------------------------*/
														//Date:-16/01/21
														//Practice

/*
//Function returning Function

function interviewQuestion(job){//create one main function call inner functions 
	if(job === 'Engineer')
	{
		return function(name)
		{
			console.log(name + ' please explain what is codding');
		}
	}
	else if(job === 'teacher')
	{
		return function(name)
		{
			console.log(name + ' please explain which subjects you teaching');
		}
	}
	else{
		return function(name)
		{
			console.log(name + ' please explain about sergery');
		}
	}
}
var engineerq = interviewQuestion('Engineer');
var teacherq = interviewQuestion('teacher');


engineerq('meghraj');
teacherq('mayank');

interviewQuestion('teacher')('jay');//this way you have to return function as well execution start left to right


let array = [1,2,3,4,5,6,7,8,9]

console.log('ans is :-' + array.slice(-1));

*/


//immedately invoked function expression

/*function game()
{
	var score = Math.random() * 10 ;
	console.log(score >= 5 );
}
game();

//console.log(score);

(
	function ()
	{
		var score = Math.random() * 10 ;
		console.log(score >= 5 );
 	}
)();

(
	function (game)
	{
		var score = Math.random() * 10 ;
		console.log(score >= 5 - game);
	}
)(5);



//closures

function retirement(retirementage)
{
	var a = 'year left until'
	return function(yearofbirth)
	{
		var age = 2016 - yearofbirth;
		console.log((retirementage - age) + a);//retirmentage parameter use for retirement function
	}
}


var retirementindia = retirement(21);//global execution context
retirementindia(2020);

retirement(23)(1999);//directlly define function argument

var retirementus = retirement(18);//global execution context
retirementus(2005);

var retirementcanda = retirement(28);//global execution context
retirementcanda(1996);


//inner function call outer function to access variables of inner function
//Example:-

function interviewQuestion(job){//create one main function call inner functions 
	if(job === 'Engineer')
	{
		return function(name)
		{
			console.log(name + ' please explain what is codding');
		}
	}
	else if(job === 'teacher')
	{
		return function(name)
		{
			console.log(name + ' please explain which subjects you teaching');
		}
	}
	else{
		return function(name)
		{
			console.log(name + ' please explain about sergery');
		}
	}
}

interviewQuestion('teacher')('meghraj');



//bind call or apply 

var meghraj = {

	name : 'meghraj',
	age : 21,
	job : 'Engineer',
	presentation : function(style,timeofday){
		if(style === 'formal'){
			console.log('good' + timeofday + ' man and woman' + this.name + 'I/m' + this.age + 'I/m' + this.job + 'I/m');
		}
		else if(style === 'friendly'){
			console.log('nice' + timeofday + 'guys'  + this.name + 'I/m' + this.age + 'I/m' + this.job + 'I/m' + timeofday);

		}

	}

};

var man = {

	name : 'jay',
	age : 21,
	job : 'teacher'

};

//meghraj.presentation('formal','goodmorning');

//meghraj.presentation.call(man,'friendly','goodafternoon');//call the value 
//var meghrajmak = meghraj.presentation.bind(meghraj,'friendly','goodafternoon');//bind with another variable

//meghrajmak('goodnight');

var meghrajmak = meghraj.presentation.bind(man,'friendly','goodafternoon');//bind with another variable

meghrajmak('good');

//Example:-

var years = [1995,1996,1997,1998,1999];//create array return result

function arrycalc(arr , fn)//create a call back function
{
     var arrayres = [];//empty array create

     for(var i=0 ; i < arr.length ; i++)//create for loop for fetching array values
     {
     	arrayres.push(fn(arr[i]));
     }
     return arrayres;
}  

function calcarray(el)
{
	return 2016 - el;
}

function isFullage(el,limit)
{
	return el >= limit;
}

var ages = arrycalc(years,calcarray);
var fullin = arrycalc(ages,isFullage.bind(this,20));//bind the function isFullage to call outer function
console.log(ages);
console.log(fullin); 


//let and const:-ES6

//this is ES5 feature

var name1 = 'jay';
name1 = 'meet'
console.log(name1);

//ES6
 const name2 = 'ajay';// value can not be change
let age = 21;//temporarly change value
 console.log(name2); 

 //Example
//ES5
		function drivinglicence(passedTest)
 {
 	if(passedTest){//block means each and every content wrap into the '{}' called block

 		var name = 'meghraj';//let use temp change variable value
 		var yearofbirth = 1998;//const can't change value
 		console.log('name is:- ' + name + ' born in :-' +
 		 yearofbirth);//can not execute bcz execution content only block contnets
 		
 	}
 }
 
 drivinglicence(true);


//ES6
 function drivinglicence1(passedTest)
 {
 	let name = 'meghraj';
 	const yearofbirth = 1998;

 	if(passedTest){//block means each and every content wrap into the '{}' called block

 		// name = 'meghraj';//let use temp change variable value
 		//yearofbirth = 1998;//const can't change value
 		
 	}
 	console.log('name is:- ' + name + ' born in :-' +
 		 yearofbirth);
 }
 drivinglicence1(true);

let i = 23;//temp variable values	


for(let i = 0;i < 5 ; i++)
{
	console.log(i);//iterate value by one fetch the value go until the last element of i
}
console.log(i);//just print the i value


//block and IIFE
//ES6
{
	const a = 3;
	let b = 2;
	var d=4;
	console.log(a + b);
}

console.log(d);

//ES5

(function (){
	var d = 5; 
	console.log(d);
})



// String 
//ES5
let firstname = 'meghraj';
let lastname = 'rajput';
const yearofbirth = 1998;

function calcage(year){

	return 2021 - year;
}
console.log('name is:- ' + firstname + ' lastname is:- ' + lastname + '  yearofbirth is:- ' + yearofbirth +  '  now total age is:- ' + calcage(yearofbirth));


//ES6

console.log(`This is ${firstname} ${lastname}. yearofbirth is ${yearofbirth} . now age is:-  ${calcage(yearofbirth)}`);//better way to define variable in ES6 
const n1 = `${firstname} ${lastname}`;
console.log(n1.startsWith('m'));//this function use to fetch the name start with specified character
console.log(n1.endsWith('t'));//this function use to fetch the name end char specified character
console.log(n1.includes('g'));//this function use to fetch the name include specified character
console.log(firstname,lastname);
*/

/*
A={x:'abc'}

for(x in A){
	console.log(A);
}

getdata(){} A

var obj = {

	getdata : 'my data',B

	function getdata(){
		this.getdata
	}
}*/

/*---------------------------------------------------------------------------------------------------------------------------------------------*/

														//Date:-18/01/21
														//Practice
/*
const years = [1995,1996,1997,1998,1999];//constant year

//ES5
 
 var ages = years.map(function(el){//call back function

 	return 2021 - el;//return age ;
 });
 console.log(ages);

//ES6

const age1 = years.map(el => 2021 - el);//no function keyword use or no return keyword use direct single line argument pass

console.log(age1);


var age2 = years.map((el,index) => `age element is ${index + 1} : ${2021 - el}`);//if pass two argument to use this syntax
console.log(age2);

var age2 = years.map((el,index) => {

	const now = new Date().getFullYear();

	const age = now - el;
			return `Age element is ${index + 1} : ${age}`//more then one line of code for use this code this to work arrow function

});
console.log(age2);




//Arrow function2

//ES5

var box = {

	color : 'green',
	position : 1,
	clickme  : function () { 

			var self = this;
			document.querySelector('.green').addEventListener('clickme',
			function(){
				var  str = 'box val:-' + self.position + ' is it ' + self.color		;
				alert(str);
			});
	}
}

//box.clickme();


//ES6
const box1 = {

	color : 'green',
	position : 1,
	clickme  : () => { //global this keyword use
			document.querySelector('.green').addEventListener('clickme',
			() => {//use arrow function 
				var  str = 'box val:-' + this.position + ' is it ' + this.color		;
				alert(str);
			});
	}
}

box1.clickme();


//ES5
function person(name){
	this.name = name;
}

person.prototype.myfriends5 =
 function(friends){

 	var arr = friends.map(function(el){

 		return this.name + ' name ' + el; 
 	}.bind(this));//bind the new name of the person
 		console.log(arr);
 }

var friends = ['ratan' , 'man' , 'jay'];
new person('manan').myfriends5(friends); //name add in myfriends5 function


//ES6

//EX:-2
person.prototype.myfriends5 =
 function(friends){

 	var arr = friends.map(el => this.name + ' name ' + el.bind(this));//bind the new name of the person
 		console.log(arr);
 }

 person.prototype.myfriends5 =
 function(friends){

 	var arr = friends.map(el => `${this.name} + ' name ' + ${el}`);//bind the new name of the person
 		console.log(arr);
 }

 new person('meghraj').myfriends5(friends);


 

 //Distructuring

//ES5
 var jagdish = ['jagdish',21];
//var name = jagdish[0];
//var age = jagdish[21];

//ES6


const [name,age] = [jagdish,21];  

console.log(name,age);


const detail = {

	firstname : 'meghraj',
	lastname : 'Rajput'
};

const {firstname,lastname} = detail;
console.log(firstname,lastname);

const {firstname:a,lastname:b} = detail;
console.log(firstname,lastname);

function calAgeretirement(year){

	const age = new Date().getFullYear()-year;
	return [age,65-age];
}

const [age2,retirment] = calAgeretirement(2021);
console.log(age2,retirment);


//Es5
const box = 

	document.querySelectorAll('.box');//this not fetch array but return the object of node list


var arra4 = Array.prototype.slice.call(box);
arra4.forEach(function(cut)
{
	cut.style.backgroundcolor = 'green';
});



//Es6
const boxarray6 = Array.from(box);
Array.from(box).forEach(cut => cut.style.backgroundcolor = 'green');

for(var i = 0; i <= arra4.length;i++)
{
	if(arra4[i].className === 'box green')
	{
		continue;
	}
	arra4[i].textConent = 'I is the word'; 
}


for(const cut of boxarray6 )
{
		if(cut.className includes('box green'))
	{
		continue;
	}
	cut.textConent = 'I is the word'; 
}


//ES6 
//EX:-2
var age = [12,13,14,15,23,16,17,18];

var full =age.map(function(cur)
{
	return cur >=18 ;
});

console.log(full);

console.log(full.indexOf(true));//reurn total element of array
console.log(age[full.indexOf(true)]);//highest element of an array

//ES6
console.log(age.findIndex(cut => cut >= 13));//return the index number
console.log(age.find(cut => cut >= 18));//find biggerthen  element in array

*/

/*--------------------------------------------------------------------------------------------------------------------*/

															//Date:-19-01-21
															//practice
/*
//class
//ES5
var person =function(name,yearofbirth,job){//function decleration syn

	this.name = name;
	this.yearofbirth = yearofbirth;
	this.job = job
}
person.prototype.calcage = 
	function()
	{
		var age = new Date().getFullYear - this.yearofbirth;
		console.log(age);
	}

	var megh = new person('megh',1998,'Engineer');
	console.log(megh);
	console.log()

//ES6

class person
{
	constructor(name,yearofbirth,job){//creating constructor

		this.name =name;
		this.yearofbirth = yearofbirth;
		this.job = job

	}
	calcage(){//creating function calculate age
		 	var age = new Date().getFullYear - this.yearofbirth;
		 	console.log(age);
	}
	static gerate(){
		console.log('hello boyz!');
	}
}

const make = new person('megh',1998,'doctor' );//creating instamce of person class
console.log(make);//call it 

person.gerate();//static function call 



//class amd subclasses 


var person =function(name,yearofbirth,job){//function decleration syn

	this.name = name;
	this.yearofbirth = yearofbirth;
	this.job = job
}
person.prototype.calcage = 
	function()
	{
		var age = new Date().getFullYear() - this.yearofbirth;
		console.log(age);
	}

//Athelet is subclass to acess all function and method of parent class
var Athelete = function(name,yearofbirth,job,olympicgame,medals){

	person.call(this,name,yearofbirth,job);//call function is call inner or outer function is same objects
	this.olympicgame = olympicgame;
	this.medals = medals
}

Athelete.prototype = Object.create(person.prototype); //create two function constructor prototypes

Athelete.prototype.wonmedals = 
	function(){

		this.medals++;
		console.log(this.medals);

	}
var mayankAthelete = new Athelete('mayank',1998,'skubadiwing',3,12);
console.log(mayankAthelete);

mayankAthelete.calcage();
mayankAthelete.wonmedals();


//ES6
class person
{
	constructor(name,yearofbirth,job){//creating constructor

		this.name =name;
		this.yearofbirth = yearofbirth;
		this.job = job

	}
	calcage(){//creating function calculate age
		 	var age = new Date().getFullYear() - this.yearofbirth;
		 	console.log(age);
	}
}
class Athelete extends person
{
	constructor(name,yearofbirth,job,olympicgame,medals)
	{
		super(name,yearofbirth,job);
		this.olympicgame = olympicgame;
		this.medals = medals
	}
	wonmedals()
	{
		this.medals++;
		console.log(this.medals);
	}
}

const monish = new Athelete('meet',1999,'swimmer',2,4);

console.log(monish);
monish.calcage();
monish.wonmedals();


*/