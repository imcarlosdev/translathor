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
		public function translate($es_text, $en_text, $lang_choosed){
	
			//ES (spanish default)
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
>Default language is determined by using $lang_choosed == '' inside the "if" control structure, this means if the var $lang it's not received as parameter in the URL or an Ajax Call, the default language would be in this case "es" (spanish)

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

To translate text it's necessary send all words as parameters to the class in the order specified.

	<?php 
		echo $t->translate('Papa','Potato', $lang);  
	?>

>The code above display Papa in "es" (Spanish), and Potato in "en" (English).

**3.- Translating from database sources (MySQL or another)**

To translate text from a source like a database query you just need send the values like the previous example.

	<?php 
		$q = mysql_query("SELECT * FROM myfarm WHERE id='1'")or die(mysql_error());
		$veggie = mysql_fetch_array($q);

		echo $t->translate($veggie['name_es'], $veggie['name_en'], $lang); 
	?>
>Note the last parameter `$lang` is the language that you want show, this variable is commonly passed through the URL with POST or GET methods. 

**4.- Let's use it**

Once you have all in his place, you can see it in action, try changing the value of the `$lang` var in your URL to see how it works! e.g.
	
	http://localhost/translathor/index.php?lang=en

**That's all.**

<br>
<br>

##Adding support for new languages
If you need add more languages you can edit the class and add a new parameter `$de_text` and a few lines inside the function `translate(...)`, in this example i will add support for a third language *"Deutsch"*, like this:  
	
	<?php
	public function translate($es_text, $en_text, $de_text, $lang_choosed){
		/*
		...All the other previous languages		
		*/

		//DE (deutsch) the fresh new
		if($lang_choosed == 'de'){
			return $de_text;
		}
	}
	?>

>Don't forget declare another var name as parameter for the new language `translate(..., $de_text){}` to use another language

### Displaying the new language
After do previous changes to the class now you can use your new language as always we do.
 
	<?php 
		echo $t->translate('Papa','Potato','Kartoffel', $lang);
	?>
>The code above display Papa in "es" (Spanish), Potato in "en" (English) and Kartoffel in "de" (deutsch).