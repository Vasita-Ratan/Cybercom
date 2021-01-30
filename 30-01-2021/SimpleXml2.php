<?php

$xml = simplexml_load_file('simple.xml');//this function load the xml file 

//echo $xml->produser[1]->name. ' is age is:- ' .$xml->produser[1]->age;//then return xml file tahg by reutrn using index

foreach ($xml->produser as $produser) {//this loop can return all xml file contents 
		echo $produser->name. ' is age is:-  ('.$produser->age.') <br>';

		//echo $produser->show->showname.'<br>'.$produser->show->showdate.'<br>';

		//both way can you return the inner tag value
		foreach ($produser->show as $show) {
			echo $show->showname.'<br>'.$show->showdate;
		}
}
?>