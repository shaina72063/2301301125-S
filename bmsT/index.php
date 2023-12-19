<pre>
<?php
    
   /* echo 'hello!';
    echo"<br>";
    $thisIsMyArray=array(
        0=>'geeta';
        1=>'shaina';,
    );//single dimensional
    print_r($thisIsMyArray);

    echo$thisIsMyArray; //only string or numeric value ko show krta h
    echo'<br>';

    print_r($thisIsMyArray{1});'' // sabhi ko show krta h*/


    //datatype
    //airthmatic operator
    //assignment operator
    //loop
    //condition


/*datatype
    integer = only single value
    float = only single value
    string =''only single value
    boolean = true or false = only single value
    array
    NULL

    */

//array(2,3,6,8,9);//single//no index//0=>2,1=>3
   /* $thisIsMyArray = array(
        0=>'geeta',
        1=>'shaina',
    );*/


    //multiple dimensional


    $thisIsMyArray = 
    array(
        0  => array(
        0 =>1001,
        1 =>'CR',
        2 => 'Btech',
        3 =>'harsh'
        ),

        1 =>array(
        0 =>1002,
        1 =>'CR-2', 
        2 => 'Btech',
        3 =>'nitin'
        )
    );
     
   /* print_r( $thisIsMyArray);
   echo $thisIsMyArray[0][1];
   $thisIsMyArray='fghfhngf';
   echo $thisIsMyArray;*/


    //Loop  forech, for , while , do while


        $count =0;
/*
 echo 'shaina'.'btech'.'persuing'.'2023';
 echo'<br>';
 $name = 'shaina';
 $year = '2023';
 echo $final = $name .' '. $year;
*/
       //if
       //else if
       //else  

    $htmlTable='<table border="1" class="table" style="width:100%">';

    foreach($thisIsMyArray as $shaina){
      $htmlTable.='<tr>';

    foreach($shaina as $row){
       /* if($row=='1001'){
            $row = 2001;
        }
       else  if($row=='1002'){
            $row = 1001;
        }else{
            $row = 0000;
        }*/

        //continue // break
        if($row=='1001'){
        continue;
        }


        $htmlTable.='<td>'.$row.'</td>';
    }
    
      
    
      $htmlTable.='</tr>';
        
        
    }

    $htmlTable.='</table>';

  echo $htmlTable;





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo 'yellow'?>;
        }
        </style>
</head>
<body>
    
</body>
</html>

