$input = [99, 21, 36, 5, 22, 1];
$output;
$current = 0;
$counter = 0;
$i=0;

while(sizeOf($input) * sizeOf($input))
{
if($input[$counter] < $input[$counter+1])
{
  $output[$counter] = $input[$i];
  
}else{
   $output[$counter+1]= $intput[$i];
}
$counter = $counter +1;
if($counter == (sizeOf($input) * sizeOf($input)))
{
break;
}