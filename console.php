<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <title>CONSOLE</title>
		<style>


html,
body,
.site_font {
  font-family: coda_regular, arial, helvetica, sans-serif;
}

html, body {
  background-color: #0b0c0d;
  color: #fff;
  font-size: 15px;
  margin: 0 auto -100px;
  padding: 0;
}



::-webkit-scrollbar { width: 0 !important }

a:link,
a:visited,
a:active{
 transition:0.5s;
color: #28f428;	
  text-decoration: none;
}

a:hover { color:yellow; }

input[type="text"],
input[type="submit"] {
  font-size: 18px;
}



input[type="text"],
input[type="submit"] {
  border: 1px solid #59fbea;
  font-family: coda_regular, arial, helvetica, sans-serif;
  -webkit-appearance: none;
  -webkit-border-radius: 0;
  height:42px;
 

}

input[type="text"] {
  background-color: rgb(11, 12, 13);
  color: #ddd;

 width:500px;
 padding-left:5px;

}

input[type="submit"] {
  background-color: rgb(0, 79, 74);
  color: #59fbea;
  padding: 5px 22px;
margin-left:3px;
  height:45px;
    
}

div{margin:5px;border:0;padding:0;}

#door {

margin-top:15px;
  
  font-size: 15px;
  

}

#newworld{

margin-top:100px;
  
  font-size: 15px;
  

}





#tech {

  
margin-left: 11px;
padding-left: 2px;
text-align: left;
vertical-align:middle;

  border: 0px solid #59fbea;
  font-family: coda_regular, arial, helvetica, sans-serif;
  -webkit-appearance: none;
  -webkit-border-radius: 0;
  font-size:24px;

width:98%;

 
  
}



.crt::before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: linear-gradient(rgba(18, 16, 16, 0) 80%, rgba(0, 0, 0, 0.25) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06));
  z-index: 2;
  background-size: 100% 2px;
  pointer-events: none;
}
.crt {
  animation: textShadow 0.00s infinite;
}

            #nav
            {
                /*width: 80%;*/
                margin: 0 auto;
				margin-left: 13px;
				padding-left: 3px;
                border: 0px solid #59fbea;
            }
            ul,li 
            {
                margin: 0px;
                padding: 0px;
                list-style: none;
            }
            ul 
            {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;

            }

			div:before {
  content:"";
  position:absolute;
  top:0px;
  bottom:0;
  left:0;
  right:0;
  background:linear-gradient(to bottom,transparent,#000 0px);
  animation:fadeIn 1s forwards
}

@keyframes fadeIn {
  0% {
    top:5%;
  }
  100% {
    top: 100%;
  }
}

            li
            {
                border: 1px solid #59fbea;
				animation: textShadow 1.00s infinite;box-shadow:0px 0px 20px 1px #59fbea,0px 0px 10px 1px #59fbea inset;
                width: 270px;
				height:60px;
				word-break: break-all;
			background-color: rgb(0, 79, 74);
                text-align: center;
                margin-top: 10px;
                margin-bottom: 10px;
				margin-right: 5px;
				margin-left: 5px;
				padding-top:10px;
				padding-left:2px;
				padding-right:2px;
                flex:auto;  
	

            }
#universe {

line-height:26px;
ont-weight:100px;
font-size: 22px;
position: absolute;
  
}

p
{

color:#ccc;
margin-top:2px;

}
</style>
		<body>

		


<?php 
error_reporting(0);

include("rpc.php");



if(isset($_REQUEST["asset"])) 

{
	$ec=$_REQUEST["asset"];	

		echo "<div id=\"door\"  class=\"crt\"><form action=\"\" method=\"post\" ><div id=\"tech\"  class=\"crt\"><ul><li style=\"font-size: 30px;animation: textShadow 1.00s infinite;letter-spacing:4px;width:1%;margin-top:20px;padding-top:5px;height:40px;border: 1px solid #59fbea;background-color:#0b0c0d;\"><a href=index.php><b>GALAXY</b></a></li>";	

		echo "<li  style=\"border:0px;width:50%;text-align:left;background-color:#0b0c0d;animation: textShadow 1.00s infinite;box-shadow:0px 0px 0px 0px #59fbea,0px 0px 0px 0px #59fbea inset;\"><input type=\"text\" name=\"asset\" maxlength=\"46\" value=\"".$ec."\" placeholder=\"support 4 commands\">";

		echo "<input type=\"hidden\" name=\"one\" value=\"rvn\" />";
		echo "<input type=\"submit\" value=\"KAW\"></div></form></div>";
	}

		else {

			
	

		echo "<div id=\"door\"  class=\"crt\"><form action=\"\" method=\"post\" ><div id=\"tech\"  class=\"crt\"><ul><li style=\"font-size: 30px;animation: textShadow 1.00s infinite;letter-spacing:4px;width:1%;margin-top:20px;padding-top:5px;height:40px;border: 1px solid #59fbea;background-color:#0b0c0d;\"><a href=index.php?lang=".$_REQUEST["lang"]."><b>GALAXY</b></a></li>";	

		echo "<li  style=\"border:0px;width:50%;text-align:left;background-color:#0b0c0d;animation: textShadow 1.00s infinite;box-shadow:0px 0px 0px 0px #59fbea,0px 0px 0px 0px #59fbea inset;\"><input type=\"text\" name=\"asset\" maxlength=\"46\" placeholder=\"support 4 commands\">";

		echo "<input type=\"hidden\" name=\"one\" value=\"rvn\" />";
		echo "<input type=\"submit\" value=\"KAW\"></div></form></div>";
	


		}

		echo "<div id=\"nav\"><ul>";
		
		
		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=help ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ HELP ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$console_rvn_help."</p></a></li>";
		
		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=getinfo ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ GET INFO ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$console_rvn_node."</p></a></li>";

		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=getblockchaininfo ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ GET BLOCKINFO ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$console_rvn_blockchain."</p></a></li>";

		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=getblockcount ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ GET BLOCKCOUNT ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$console_rvn_count."</p></a></li>";

		if($webmode==0){
		if(!$_REQUEST["miningr"]){
		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=miningr&miningr=on ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ START MINING ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$console_rvn_mining." </p></a></li>";}else
		{
		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=miningr ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ STOP MINING ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$console_rvn_minging."</p></a></li>";}

		}

		echo "</ul></div>";

		

				echo "<div id=\"nav\"><ul>";
		
		
		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=help&block=keva ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ HELP ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$console_keva_help."</p></a></li>";
		
		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=getinfo&block=keva ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ GET INFO ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$console_keva_node."</p></a></li>";

		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=getblockchaininfo&block=keva ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ GET BLOCKINFO ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$console_keva_blockchain."</p></a></li>";

		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=getblockcount&block=keva ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ GET BLOCKCOUNT ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$console_keva_count."</p></a></li>";

	/* if(!$_REQUEST["miningk"]){
		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=miningk&miningk=on&block=keva ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ START MINING ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>KEVA TESTNET</p></a></li>";}else
		{
		echo"<a href=?lang=".$_REQUEST["lang"]."&asset=miningk&block=keva ><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ STOP MINING ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>KEVA TESTNET</p></a></li>";}

  */

  echo"<li style=\"height:100px;color:#bbb;display:block;\"><h2>[ START MINING ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>KEVA TESTNET</p></li>";


echo "</ul></div>";

if($keva=="on"){

echo "<div id=\"nav\"><ul>";


  //console

if(isset($consolespace))
	
		{

		//lang

	   $check=$kpc->keva_filter($consolespace);


	   foreach($check as $concc){

		if(stristr($concc['key'],"_")==false){

		echo "<a href=keva.php?lang=".$_REQUEST["lang"]."&asset=".$consolespace."&key=".bin2hex($concc['key'])."><li style=\"height:100px;color:#bbb;display:block;\"><h2>[ ".$concc['key']." ]</h2><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$concc['value']."</p></a></li>";
		}
		}
		}

		echo "</ul></div>";

		}

		echo "<div id=\"universe\" class=\"crt\">";

if(isset($_REQUEST["asset"])) {


//check server




$kpc = new Keva();

$kpc->username=$krpcuser;
$kpc->password=$krpcpass;
$kpc->host=$krpchost;
$kpc->port=$krpcport;

$rpc = new Raven();

$rpc->username=$rrpcuser;
$rpc->password=$rrpcpass;
$rpc->host=$rrpchost;
$rpc->port=$rrpcport;

//rpc

$_REQ = array_merge($_GET, $_POST);

$asset=$_REQ["asset"];


echo "<div id=\"nav\">";

if(!$_REQ["block"]){

if($asset=="getinfo"){

$command = $rpc->getinfo();}

elseif($asset=="getblockchaininfo"){

$command = $rpc->getblockchaininfo();}

elseif($asset=="getblockcount"){

$command = $rpc->getblockcount();echo "<pre>";
print_r($command);
echo "</pre>"; exit;}




if($asset=="help"){

$command = $rpc->help();echo "<pre>";
print_r($command);
echo "</pre>"; exit;}




if($asset=="miningr" & isset($_REQUEST["miningr"]) & $webmode==0){

echo "MINING RVN START";

$true="true";
$num=3;

$command = $rpc->setgenerate(true,1);
echo "<pre>";
print_r($command);
echo "</pre>"; exit;}

if($asset=="miningr" & !$_REQUEST["miningr"] & $webmode==0){

echo "MINING RVN STOP";

$command = $rpc->setgenerate(false);
echo "<pre>";
print_r($command);
echo "</pre>"; exit;}





if(isset($command) && $command!=""){

foreach($command as $x=>$x_value)
	
{

if(!is_array($x_value)){
echo $x.": ".$x_value."<br>";}
}

}

}

if($_REQ["block"]=="keva")

	{if($asset=="getinfo"){

$balance = $kpc->getbalance();
$command = $kpc->get_info();

array_push($command,$balance);
}

elseif($asset=="getblockchaininfo"){

$command = $kpc->getblockchaininfo();}

elseif($asset=="getblockcount"){

$command = $kpc->getblockcount();echo "<pre>";
print_r($command);
echo "</pre>"; exit;}




if($asset=="help"){

$command = $kpc->help();echo "<pre>";
print_r($command);
echo "</pre>"; exit;}




if($asset=="miningk" & isset($_REQUEST["miningk"]) & $webmode==0){

echo "MINING KEVACOIN START";

$command = $kpc->setgenerate(true,1);
echo "<pre>";
print_r($command);
echo "</pre>"; exit;}

if($asset=="miningk" & !$_REQUEST["miningk"]){

echo "MINING KEVACOIN STOP";

$command = $kpc->setgenerate(false);
echo "<pre>";
print_r($command);
echo "</pre>"; exit;}



if(isset($command) && $command!=""){

foreach($command as $x=>$x_value)
	
{

if(!is_array($x_value)){
echo $x.": ".$x_value."<br>";}
}

}}

echo "</div>";

}







?>
</div>
</div>
</body>
</html>