<?php
error_reporting(0);
/* bigtoken bot regis by @RiyanCoday  */
/* v1 buruk bet dah codingan sampah ini */
function create($e){
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://mg.cloudsites.xyz/api/create-recover-email');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$a = ['hidebusiness.xyz', 'theroyalweb.club', 'mygeoweb.info','hideweb.xyz','mailbox87.de','mailbox92.biz','mailbox52.ga'];

    $b = $a[mt_rand(0, count($a) - 1)];
curl_setopt($ch, CURLOPT_POSTFIELDS, 'ne_ne='.$e.'&ne_dominio='.$b.'&_token=&AppVersion=2.0.0');
curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Referer: https://tempmail.ninja/';
$headers[] = 'Origin: https://tempmail.ninja';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

return curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
}
function cek_em($em,$email_id){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://mg.cloudsites.xyz/api/get-email-data');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email_id='.$email_id.'&email_address='.$em.'&AppVersion=2.0.0');
curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Referer: https://tempmail.ninja/';
$headers[] = 'Origin: https://tempmail.ninja';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

return curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
}

function getem($x,$m){

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://mg.cloudsites.xyz/api/get-message-content');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'message_url='.$x.'&email_address='.$m.'&AppVersion=2.0.0');
curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Referer: https://tempmail.ninja/';
$headers[] = 'Origin: https://tempmail.ninja';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

return curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
}
function xxx(){
$s = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890"), -13);
return $s;
}
function reg($e,$r){
$ch = curl_init();
$data = '{"password":"AsuuuuKon59$","monetize":true,"email":"'.$e.'","referral_id":"'.$r.'"}';
curl_setopt($ch, CURLOPT_URL, 'https://api.bigtoken.com/signup');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Referer: https://my.bigtoken.com/signup';
$headers[] = 'Origin: https://my.bigtoken.com';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'X-Srax-Big-Api-Version: 2';
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

return curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
}
function get($link){
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headers = array();
$headers[] = 'Authority: bigtoken.page.link';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

return curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
}
function ver($data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.bigtoken.com/signup/email-verification');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Origin: https://my.bigtoken.com';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'X-Srax-Big-Api-Version: 2';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36';
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

return curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
}
function getStr($content,$start,$end){
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}
echo 'Kode Referral ? : '; 
$r = trim(fgets(STDIN)); 
echo 'Mau Berapa ? : '; 
$jumlah = trim(fgets(STDIN)); 
$i=1;
while($i <= $jumlah){
		echo "========";echo "\r\n";
	echo ''.$i.' / '.$jumlah;
	echo "\r\n";
$e = xxx();
$cr = create($e);
$email_id = getStr($cr,'"email_id":',',"messages"');
$e = getStr($cr,'"email_address":"','","email_id":');
if(!($e)){
	echo 'Gagal Buat Email';
			    echo "\r\n"; continue;
}else{
			echo 'Sukses Buat Email';
		    echo "\r\n";
$result = reg($e,$r);	
if (stripos($result, 'Too Many Attempts.')) {
			echo 'Daftar Ulang. [Too Many Attempts.]';
		    echo "\r\n";
			$ss = getStr($result,'Retry-After: ','
X-RateLimit-Reset:');
$shn = $ss+1;
					sleep($shn);
$result = reg($e,$r);	
if (stripos($result, 'The email has already been taken.')) {
		echo 'Email Sudah Terdaftar';
		    echo "\r\n";
 continue;	} else	if (stripos($result, '204 No Content')) {
		echo "Sukses Daftar Ulang";
		    echo "\r\n";
		sleep(10);
	}else{
		echo "Gagal Daftar Ulang"; 		    echo "\r\n";
		    echo "\r\n";	 continue;
	}
}elseif (stripos($result, 'The email has already been taken.')) {
		echo 'Email Sudah Terdaftar';
		    echo "\r\n";
	} else	if (stripos($result, '204 No Content')) {
		echo "Sukses Daftar";
		    echo "\r\n";
		sleep(10);
	}else{
			echo "Gagal Daftar";
    continue;	}
		$res = cek_em($e,$email_id);
                $res= str_replace('\/','/', $res);

$x = getStr($res,'message_url=\"','\" cla');		if(!$x){
			echo 'Cek Ulang Email [1]';
    echo "\r\n";
					sleep(10);
					$res = cek_em($e,$email_id);
                $res= str_replace('\/','/', $res);

$x = getStr($res,'message_url=\"','\" cla');									if(!$x){
													echo 'Cek Ulang Email [2]';
    echo "\r\n";
					sleep(10);
							$res = cek_em($e,$email_id);
                $res= str_replace('\/','/', $res);

$x = getStr($res,'message_url=\"','\" cla');									}
										echo "Tidak Ada Email Masuk";
		    echo "\r\n";	
		}else{
		$bos = getem($x,$e);
		$code = getStr($bos,'https:\/\/bigtoken.page.link\/','\">Co');
		echo 'Kode BigToken https://bigtoken.page.link/'.$code; 		    echo "\r\n";
		if(isset($code)){
			$getver = get('https://bigtoken.page.link/'.$code.'');
$em = getStr($getver,'email=','
Content-Secur');
$cod = getStr($getver,'https://my.bigtoken.com/verify?code=','&type');
$d = '{"email":"'.$em.'","verification_code":"'.$cod.'"}';
$ver = ver("$d");
	if (stripos($ver, 'Reward successfully made')) {
		echo 'Sukses Verif';
		    echo "\r\n";

	}elseif (stripos($ver, 'disable MSIE')) {
		echo 'Akurasa Sukses Verif [1] ';
		    echo "\r\n";
	} else	if (stripos($ver, 'Too Many Attempts.')) {
			$ss = getStr($ver,'Retry-After: ','
X-RateLimit-Reset:');
$shn = $ss+1;		echo 'Verif Ulang';
		    echo "\r\n";
					sleep($shn);
		$ver3 = ver($d);
		if (stripos($ver3, 'Reward successfully made')) {
		echo 'Sukses Verif ';
		    echo "\r\n";
		}elseif (stripos($ver3, 'disable MSIE')) {
		echo 'Akurasa Sukses Verif [2] ';
		    echo "\r\n";
	}else{
					echo '['.$shn.']Gagal Verif Buka Link Manual Saja https://bigtoken.page.link/'.$code.'';
		    echo "\r\n";
				$data =  "https://bigtoken.page.link/".$code." \r\n";
		$fh = fopen("bt.txt", "a");
		fwrite($fh, $data);
		fclose($fh);
		}
		}else{
		$ver2 = ver("$d");
	if (stripos($ver2, 'Reward successfully made')) {
		echo 'Sukses Verif [3]';
		    echo "\r\n";
	}elseif (stripos($ver2, 'disable MSIE')) {
		echo 'Akurasa Sukses Verif [3] ';
		    echo "\r\n";
	}else{
		echo 'Gagal Verif Buka Link Manual Saja https://bigtoken.page.link/'.$code.'';
		    echo "\r\n";
				$data =  "https://bigtoken.page.link/".$code." \r\n";
		$fh = fopen("bt.txt", "a");
		fwrite($fh, $data);
		fclose($fh);
	}
	}
		}
	}
	
	echo '@RiyanCoday - 2k19';		    echo "\r\n"; echo "========";echo "\r\n";

}
$i++;
}






