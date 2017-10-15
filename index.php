<?php


$quotes = 
[
		[

		'author'=>'Author number 1',
		'text'=>'Quote of the sayings or writtings of this Author wich is the Author number 1'


		],
		[

		'author'=>'Author number 2',
		'text'=>'Quote of the sayings or writtings of this Author wich is the Author number 2'


		],
		[

		'author'=>'Author number 3',
		'text'=>'Quote of the sayings or writtings of this Author wich is the Author number 3'

		],
		[

		'author'=>'Author number 4',
		'text'=>'Quote of the sayings or writtings of this Author wich is the Author number 4'


		],
		[

		'author'=>'Author number 5',
		'text'=>'Quote of the sayings or writtings of this Author wich is the Author number 5'


		],
		[

		'author'=>'Author number 6',
		'text'=>'Quote of the sayings or writtings of this Author wich is the Author number 6'


		]


];



$quote = rand( 0 , count($quotes) - 1 );

$quoteAuthor = $quotes[$quote]['author'];
$quoteText = $quotes[$quote]['text'];




?>

// simple html
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	 <title> Random Quotes </title>

</head>



<body>




<blockquote >
<h1>&quot;<?php  echo $quoteText;  ?>&quot;</h1>

<strong> -<?php echo $quoteAuthor ; ?> </strong>
</blockquote>

</body>
</html>



