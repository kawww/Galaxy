<?php

error_reporting(0);

$turn=9;

include("rpc.php");

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

$_REQ = array_merge($_GET, $_POST);

if($_REQ["mode"]==1){



$iotasset=strtoupper(trim($_REQ["asset"]));


$blocknum=$rpc->getblockcount();
$blocknum=$blocknum-200;
$blockhash=$rpc->getblockhash($blocknum);

$agex= $rpc->listsinceblock($blockhash);


$arrx=array();
$totalassx=array();




		foreach($agex['asset_transactions'] as $g_value=>$g)

	{

		extract($g);

	

		if($category=="receive" & $message<>""){

			$txx= $rpc->getrawtransaction($txid);
			$raw= $rpc->decoderawtransaction($txx);


			$arrx["block"]=$confirmations;
			$arrx["time"]=$time;
			$arrx["name"]=$asset_name;
			$arrx["ipfs"]=$message;
			$arrx["to"]=$destination;

			if(($raw['vout'][2]['scriptPubKey']['type'])=="transfer_asset")
				{
					$arrx["from"]=$raw['vout'][2]['scriptPubKey']['addresses'][0];
				}

			
			
			
			array_push($totalassx,$arrx);


		}


	}

asort($totalassx);

foreach($totalassx as $xx_value=>$xx)

			{

				extract($xx);

				$x_value=$name;


				if($iotasset==$x_value) {
		

				$transaction= $kpc->getrawtransaction($ipfs,1);

			$blockhash=$kpc->getblock($transaction["blockhash"]);

			foreach($transaction['vout'] as $vout)
	   
				  {

					$op_return = $vout["scriptPubKey"]["asm"]; 

				
					$arr = explode(' ', $op_return); 

					if($arr[0] == 'OP_KEVA_PUT') 
						{

					 $cons=$arr[2];
					 $conk=$arr[3];
					
					$iotst=strip_tags(hex2bin($conk));
					if(trim($iotst)=="on"){echo "on";}
	
					else
				{header("HTTP/1.0 900 off");echo $iotst;}
					
				
						} 

				 }



				
				exit;
			
							}

			
			}				exit;

}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <title>MESSAGE</title>
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
zoom:1.15;	
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
  height:36px;
 
		}

input[type="text"] {
  background-color: rgb(11, 12, 13);
  color: #ddd;

 width:360px;
 padding-left:5px;

}

input[type="submit"] {
  background-color: rgb(0, 79, 74);
  color: #59fbea;
  padding: 5px 22px;
  margin-left:3px;
  height:45px;
    
}

div{margin:0px;border:0;padding:0;}

	#door {

	margin-top:10px;
  
	font-size: 15px;
  

	}

#newworld

	{

	margin-top:60px;
  
	font-size: 15px;
 
	}





#tech {

  
	margin-left: 0px;
	padding-left: 2px;
	text-align: left;
	vertical-align:middle;
	border: 0px solid #59fbea;
	font-family: coda_regular, arial, helvetica, sans-serif;
	-webkit-appearance: none;
	-webkit-border-radius: 0;
	font-size:24px;

	width:94%;

 
  
}

@keyframes textShadow {
  0% {
    text-shadow: 0.4389924193300864px 0 1px rgba(0,30,255,0.5), -0.4389924193300864px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }

  100% {
    text-shadow: 2.6208764473832513px 0 1px rgba(0,30,255,0.5), -2.6208764473832513px 0 1px rgba(255,0,80,0.3), 0 0 3px;
  }
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
                
                margin: 0 auto;
			
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
                width: 430px;
				height:100px;
				word-break: break-all;
			background-color: rgb(0, 79, 74);
                text-align: center;
                margin-top: 10px;
                margin-bottom: 7px;
				margin-right: 5px;
				margin-left: 5px;
				padding-top:10px;
				padding-left:2px;
				padding-right:2px;
                flex:auto;  
				

            }
#universe {

line-height:20px;
ont-weight:60px;
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




$ux=9;

$unicode=" ";
$unioff=" ";
$sort=9;
$sortnum=9;

if(isset($_REQ["signok"])){

$signa=hex2bin($_REQ["asset"]);

$signd=trim($_REQ["cadd"]);

$signcheck=$rpc->checkaddresstag($signd,$signa);

if($signcheck==1){
	
$unsignasset=$rpc->removetagfromaddress($signa,$signd,"",$_REQ["txid"]);

}else

	{


$signasset=$rpc->addtagtoaddress($signa,$signd,"",$_REQ["txid"]);}

if(isset($_REQ["oldtxid"]) & strlen($_REQ["oldtxid"])>10){

			
		$url = "subscription.php?lang=".$_REQUEST["lang"]."&txid=".$_REQ["oldtxid"]."&name=".$_REQUEST["name"]; 


		}

else

	{

$url = "keva.php?lang=".$_REQUEST["lang"]."&asset=".$_REQ["spid"]."&key=".$_REQ["spti"]; }
					
echo "<script>window.location.href=decodeURIComponent('".$url."')</script>";

			exit;


	}


if(isset($_REQ["unicode"])){ $turn=$_REQ["unicode"];}

if(isset($_REQ["u"])){$ux=$_REQ["u"];}


echo "<div id=\"door\"  class=\"crt\"><form action=\"\" method=\"post\" ><div id=\"tech\"  class=\"crt\"><ul><li style=\"font-size: 30px;animation: textShadow 1.00s infinite;letter-spacing:4px;width:1%;margin-top:20px;padding-top:5px;height:40px;border: 1px solid #59fbea;background-color:#0b0c0d;\"><a href=index.php?lang=".$_REQUEST["lang"]."><b>GALAXY</b></a></li>";	

		echo "<li  style=\"border:0px;width:50%;text-align:left;background-color:#0b0c0d;\"><input type=\"text\" name=\"asset\" maxlength=\"34\" placeholder=\"ASSET\">";

		echo "<input type=\"hidden\" name=\"one\" value=\"rvn\" />";
		echo "<input type=\"submit\" value=\"KAW\"></div></form></div>";
	


//broadcast

if(isset($_REQ["txid"]) or isset($_REQ["ipfs"]))
	
	{ 

$assetlist=$rpc->listmyassets();

if(isset($_REQ["ipfs"])){$messc=$_REQ["ipfs"];}

if(isset($_REQ["txid"])){$messc=$_REQ["txid"];}

if($_REQUEST["lang"]=="en" or !$_REQUEST["lang"]){

if($turn==1){$unicode="&nbsp;&nbsp;<font color=green>UNICODE</font>&nbsp; <a href=message.php?lang=".$_REQUEST["lang"]."&txid=".$_REQ["txid"]."&cadd=".$_REQ["cadd"]."&spid=".$_REQ["spid"]."&spti=".$_REQ["spti"]."&sign=".$_REQ["sign"]."&ipfs=".$_REQ["ipfs"].">[ TURN-OFF ]</a><br>";}else{$unicode="&nbsp;&nbsp;<font color=red>UNICODE</font>&nbsp; <a href=message.php?lang=".$_REQUEST["lang"]."&txid=".$_REQ["txid"]."&cadd=".$_REQ["cadd"]."&spid=".$_REQ["spid"]."&spti=".$_REQ["spti"]."&sign=".$_REQ["sign"]."&ipfs=".$_REQ["ipfs"]."&unicode=1>[ TURN-ON ]</a><br>";}}

echo "<div id=\"universe\" class=\"crt\"><div style=\"text-align:left;margin-top:0px;height:40px;\">".$unicode."</div><div id=\"nav\"><ul>";

echo "<a href=message.php><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;padding-top:0px;\"><h4>".$message_title."</h4></a></li>";




foreach($assetlist as $asset=>$num)

		{

if(stristr($asset,"!")==false)
	
				{
						
						$assetx=$asset;

						$x_value=$assetx;

						$assetlink=$x_value;
						$assettwo=$x_value;

		if($turn==1)

		{
		$x_value=uniworld($x_value,$assetlink,$assettwo);
		}
	$s_value=uniworld($x_value,$assetlink,$assettwo);
	$s_value=str_replace("U+","",$s_value);
	
	$x_value=str_replace("U+","",$x_value);

	if($_REQ["sign"]==1){

		if(stristr(substr($asset,0,3),"#")==true){
		
		echo "<a href=message.php?lang=".$_REQUEST["lang"]."&signok=1&asset=".bin2hex($assetx)."&txid=".$_REQ["txid"]."&ipfs=".$_REQ["ipfs"]."&message=1&left=".$num."&cadd=".$_REQ["cadd"]."&oldtxid=".$_REQ["oldtxid"]."&spid=".$_REQUEST["spid"]."&spti=".$_REQUEST["spti"]."&name=".$_REQUEST["name"]."><li style=\"height:120px;color:#bbb;display:block;\"><h5>".$x_value."</h5><br><font size=2 color=grey>".$s_value."</font></a></li>";
		
				}
	
	
	
				}

	else

					{

						if(stristr(substr($asset,0,3),"#")==false){

echo "<a href=subscription.php?lang=".$_REQUEST["lang"]."&asset=".$assetx."&uname=".$x_value."&txid=".$_REQ["txid"]."&ipfs=".$_REQ["ipfs"]."&message=1&left=".$num."&cadd=".$_REQ["cadd"]."&oldtxid=".$_REQ["oldtxid"]."&spid=".$_REQUEST["spid"]."&spti=".$_REQUEST["spti"]."&name=".$_REQUEST["name"]."><li style=\"height:120px;color:#bbb;display:block;line-height:6px;\"><h5>".$x_value."</h5><br><font size=2 color=grey>".$s_value."</font><hr style=\"background-color:#59fbea;height:1px;border:none;\"><p>".$num."</p></a></li>";}
					}
								

						}

		}

		exit;
	}



//message account


$messageacc="message";

	$listaccount = $rpc->listaccounts();
				
				

				if(in_array($messageacc,$listaccount))
			
					{
						$accaddress=$rpc->getaddressesbyaccount($messageacc);
					
						$shopaddress=$accaddress[0];
						$errorshop = $rpc->error;
		
						if($errorshop != "") 
			
						{
							echo "<p>&nbsp;&nbsp;error,message address</p>";
							exit;
						}
					}
			
				

			if(!$shopaddress)
			{

	$shopaddress = $rpc->getnewaddress($messageacc);

	$errorshop = $rpc->error;

	if($errorshop != "") 
		
				{
		echo "<p>&nbsp;&nbsp;Error,create new messages</p>";
		exit;
				}
			}
	
		




//begin check block	


$blocknum=$rpc->getblockcount();
$blocknum=$blocknum-$message_num;
$blockhash=$rpc->getblockhash($blocknum);

$agex= $rpc->listsinceblock($blockhash);


			$error = $rpc->error;

			if($error != "") 
		
				{
	
					echo "<p>&nbsp;&nbsp;Error ADDRESS</p>";
					exit;
				}


$arrx=array();
$totalassx=array();


		foreach($agex['asset_transactions'] as $g_value=>$g)

	{

		extract($g);

	

		if($category=="receive" & $message<>""){

			$txx= $rpc->getrawtransaction($txid);
			$raw= $rpc->decoderawtransaction($txx);


			$arrx["block"]=$confirmations;
			$arrx["time"]=$time;
			$arrx["name"]=$asset_name;
			$arrx["ipfs"]=$message;
			$arrx["to"]=$destination;

			if(($raw['vout'][2]['scriptPubKey']['type'])=="transfer_asset")
				{
					$arrx["from"]=$raw['vout'][2]['scriptPubKey']['addresses'][0];
				}

			
			
			
			array_push($totalassx,$arrx);






		}


	}

asort($totalassx);

$age=$totalassx;

if($_REQUEST["lang"]=="en" or !$_REQUEST["lang"]){
if($turn==1){$unicode="&nbsp;&nbsp;<font color=green>UNICODE</font>&nbsp; <a href=?lang=".$_REQUEST["lang"]."& >[ TURN-OFF ]</a><br>";}else{$unicode="&nbsp;&nbsp;<font color=red>UNICODE</font>&nbsp; <a href=?lang=".$_REQUEST["lang"]."&unicode=1 >[ TURN-ON ]</a><br>";}}

echo "<div id=\"universe\" class=\"crt\"><div style=\"text-align:left;margin-top:0px;height:40px;\">".$unicode."</div><div id=\"nav\"><ul>";

echo "<a href=index.php?lang=".$_REQUEST["lang"]."&&asset=".$shopaddress."&mode=2><li style=\"background-color: rgb(0, 79, 74);height:130px;display:block;\"><h4>".$message_address."</h4><hr style=\"background-color:#59fbea;height:1px;border:none;\"><font size=3>".$shopaddress."</font></a></li></ul><ul>";

		foreach($age as $xx_value=>$xx)

			{

				extract($xx);

				$x_value=$name;

				$assetlink=$x_value;
				$assettwo=$x_value;


		if($turn==1)

			{
			$x_value=uniworld($x_value,$assetlink,$assettwo);
			}


			$x_value=str_replace("U+","",$x_value);




			if(strlen($ipfs)=="46")

			{

				$messone="<a href=\"".$ipfscon."".$ipfs."\">IPFS</a>";
			}
			if(strlen($ipfs)=="64")
			{
			$messone="<a href=subscription.php?lang=".$_REQUEST["lang"]."&txid=".$ipfs."&name=".$x_value.">TXID</a>";
			}

		if(isset($_REQ["asset"]) & trim($_REQ["asset"])==$x_value) {
		

		echo "<li style=\"background-color: rgb(0, 79, 74);display:block;height:60px;width:800px;font-size:70%\"><table ><tr><td width=\"150px\"  align=right>".date('Y-m-d H:i', $time)." </td><td align=left><a href=message.php?lang=".$_REQUEST["lang"]."&&unicode=".$turn."&asset=".$name."> <b><font size=4>".$x_value."</font><b> </a> [ <a href=index.php?lang=".$_REQUEST["lang"]."&&unicode=".$turn."&asset=".$from."> <font size=3>".$message_send."</font> </a> ]  [ <a href=index.php?lang=".$_REQUEST["lang"]."&&unicode=".$turn."&asset=".$to."><font size=3>".$message_my."</font></a> ]  [ <a href=message.php?lang=".$_REQUEST["lang"]."&mode=1&unicode=".$turn."&asset=".$name." target=_blank><font size=3>IOT</font></a> ]</td></tr><tr><td width=\"150px\" align=right>".$messone."</td><td  align=left>".$ipfs."</td></tr></table></li>";
			
				}

		if(!isset($_REQ["asset"])) {
					echo "<li style=\"background-color: rgb(0, 79, 74);display:block;height:60px;width:800px;font-size:70%\"><table ><tr><td width=\"150px\"  align=right>".date('Y-m-d H:i', $time)." </td><td align=left><a href=message.php?lang=".$_REQUEST["lang"]."&&unicode=".$turn."&asset=".$name."> <b><font size=4>".$x_value."</font><b> </a> [ <a href=index.php?lang=".$_REQUEST["lang"]."&&unicode=".$turn."&asset=".$from."> <font size=3>".$message_send."</font> </a> ]  [ <a href=index.php?lang=".$_REQUEST["lang"]."&&unicode=".$turn."&asset=".$to."><font size=3>".$message_my."</font></a> ]   [ <a href=message.php?lang=".$_REQUEST["lang"]."&mode=1&unicode=".$turn."&asset=".$name." target=_blank><font size=3>IOT</font></a> ]</td></tr><tr><td width=\"150px\" align=right>".$messone."</td><td  align=left>".$ipfs."</td></tr></table></li>";
			}

			}

			echo "</ul></div></div>";

		

	

		




?>


</div>
</body>
</html>