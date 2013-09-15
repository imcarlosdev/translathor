##Translathor
Simply PHP Class for easy translate your projects between two or more languages.

### How the class looks inside
	
	<?php 
	/*
	===================================================================
	Set the default language using $lang_choosed=='' inside the if control,
	in this case i used "es" as default 
	===================================================================
	*/

	class Translathor {
		public function translate($es_text, $en_text, $de_text, $lang_choosed){

			//ES (spanish) default language
			if($lang_choosed == 'es' or $lang_choosed == ''){
				return $es_text;
			}
			
			//EN (english)
			if($lang_choosed == 'en'){
				return $en_text;
			}
		}
	}
	?>

### How to use

**1.- Include Translathor.php**

Just include the `translathor.php` Class at the **beginning of the page** that you need translate, create a new instance of the Class and be sure to set the default language if the var `$lang` it's not declared yet.

	<?php 
	include('translathor.php');
	$t = new Translathor;
	
	//Set the default language if $lang is not declared
	if($lang==''){ $lang = 'es'; } 
	?>
**2.- Translating text**

To translate text you need pass all words to the Class in the order of the class require like this.

	<?php 
	echo $t->translate('Papa','Potatoe', $lang);  
	?>

>The code above display Papa in "es" (Spanish), and Potato in "en" (English).

**3.- Translating from database sources (MySQL)**

To translate text from a source like a database query you just need to pass the values like the previous example.

	<?php 
		$q = mysql_query("SELECT * FROM myfarm WHERE id='1'")or die(mysql_error());
		$veggie = mysql_fetch_array($q);

		echo $t->translate($veggie['name_es'], $veggie['name_en'], $veggie['name_de'],  $lang); 
	?>
>The last parameter `$lang` is the language you want to display this var is commonly passed through the URL by the POST or GET methods. 

##Adding support for a new language
If you need add more languages you can edit the Class and add a few lines at the end of the `Translathor.php` file inside the function `translate()`, in this example i will add support for a third language *"Deutsch"* like this:  

	//DE (deutsch)
	if($lang_choosed == 'de'){
		return $de_text;
	}

And now you can use a third language
	
	<?php 
		echo $t->translate('Papa','Potato','Kartoffel', $lang);
	?>
>The code above display Papa in "es" (Spanish), Potato in "en" (English) and Kartoffel in "de" (deutsch).