
<?php
header('Content-Type: text/html; charset=utf-8');
$handle=fopen("db", "a");
fwrite($handle,"\r\n");
foreach($_POST as $variable=>$value)
{
$body = nl2br($body); 
fwrite($handle,"\t\t\t");
fwrite($handle, $variable);
fwrite($handle, ":");
fwrite($handle, $value);
fwrite($handle,"<br>\n");
}
$body = nl2br($body); 
fclose($handle);
echo "서버로 데이터";
echo "이동중....";
header("Refresh:0;url=index.html");
?>