<?php
 
for($i=11; $i<=36; $i++)
{
    $tab[$i]=chr(54+$i);
}

 echo"____Lecture avec for_____\n";
for($i=11;$i<=36; $i++)
{

    echo "indice " . $i." : ". $tab[$i] ."\n ";
}

echo"____Lecture avec foreach_____\n";
foreach($tab as $cle=>$valeur)
{

    echo "indice $cle : $valeur \n";

}
?>