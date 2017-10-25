<!DOCTYPE html>
<html>
    <head>
		<title>test 01</title>
	</head>
	<body>
    <?php
    $fName = "adam";
    $sName = "nicholls";
    $fullname = $fName . " " . $sName;
    
    echo $fullname;
    
    if ($fullname == "alex scott") {
        echo "holy crap, thats a great name";
    }
    elseif
        ($fullname == "adam nicholls") {
        echo "thats kinda cool too";
        }
    else
    {
        echo "don't like you're name much mate";
    }    
    
    ?>
    </body>
</html>
