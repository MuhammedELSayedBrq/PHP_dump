<html>
	<body>
		<form method="post" action="process.php">
			<label for="name">Username</label>
			<input type="text" name="name" id="name"/> <br/>
			<label for="email">Email Address</label>
			<input type="email" name="email" id="email"/><br/>
			<label for="Password">Password</label>
			<input type="password" name="password" id="password"/><br/>
			<label for="gender">Gender</label><br/>
			<input type="radio" name="gender" value="male"/>Male
			<input type="radio" name="gender" value="female"/>Female
			<input type="submit" name="submit" value="Register"/><br/>
		</form>
	<!--install apache2,php on linux or windows-->
		<?php
			
		    echo "Hello Pro!";
		    echo "<h1>HTML Heading parse</h1>";
		    /* multi
		    line comment in php
		    */
		    echo date('H:i, jS F Y');
		    echo "<br/>";
		    $var=5;
		    /* get var type */
		    
		    $st=gettype($var);
		    var_dump($st);
		    echo"<br/>";
		    /* change var type 
		    bool settype($var, string type); */
		    
		    /* is_array(); is_bool(); is_float(); is_int(); is_object(); is_null(); is_string(); is_numeric(); 
		    check if var is defined and has value */
		    $a=isset($var);
		    var_dump($a);
		    echo "<br/>";
		    /* wipe variable */
		   // $b=unset($var);
		    /* empty value */
		    $c=empty($var);
		    var_dump($c);
			
		    if ($var == 5){
		    	echo "<br/><br/>If Condition is true<br/><br/><br/>";
		    }
		    elseif($var ==4){
		    	echo "If Condtion is false<br/><br/><br/>";
		    }
		    $ar=[1,2];
		    echo gettype($ar);
		    echo "<br/>";
		    print_r($ar[1]);
		    echo "<br/>";
		    var_dump($ar[0]); //this var_dump prints type and value in form of int(value)
		    $x=1;
		    switch ($x){
		    	case 1:
		    		echo "<br/><br/>X equal 1<br/><br/>";
		    		break;
		    
		    } 
		    for ($i=0;$i<count($ar);$i++){
		    	echo "<br/>".$i;   //print string with vars.
		    	if ($i==5){continue;}
		    }
		    while($i<20){
		    	$i++;
		    }
		    $indArr=array('a7a'=>1 , 'a7ten'=>2);	//Assoicative array must be defined 'array' 
		    $indArr['3a7at']=3;
		    foreach($indArr as $a7a=>$num){
		    	echo $a7a.$num."<br/>";
		    }
	
		?>
	</body>
</html>
