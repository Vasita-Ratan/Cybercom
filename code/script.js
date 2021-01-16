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
													   //practice


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

*/

														//practice challenge(15-01-21)
//Q.4
/*
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
let array = [1,2,3,4,5,6,7,8,9]

console.log('ans is :-' + array.slice(-1));

*/