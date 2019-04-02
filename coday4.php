<?php
error_reporting(0);
/* bot regis bigtoken v.4 - @riyancoday */
/* Tempmail : 1secmail */
function getem($e,$a){
$ch = curl_init();

	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


curl_setopt($ch, CURLOPT_URL, 'https://www.1secmail.com/mailbox');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=getMessages&login='.$e.'&domain='.$a.'');
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Cookie: PHPSESSID=a1a673365b19250a4615689a9af7c4a3; _pk_ref.13.333e=%5B%22%22%2C%22%22%2C1554157353%2C%22https%3A%2F%2Fwww.google.com%2F%22%5D; _pk_id.13.333e=2866ac77c0edddb2.1554068078.2.1554157353.1554157353.; _pk_ses.13.333e=1';
$headers[] = 'Origin: https://www.1secmail.com';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Accept: */*';
$headers[] = 'Referer: https://www.1secmail.com/';
$headers[] = 'Authority: www.1secmail.com';
$headers[] = 'X-Requested-With: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

return curl_exec($ch);
curl_close ($ch);
}
function check($link){

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authority: www.1secmail.com';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Cookie: PHPSESSID=a1a673365b19250a4615689a9af7c4a3; _pk_ref.13.333e=%5B%22%22%2C%22%22%2C1554157353%2C%22https%3A%2F%2Fwww.google.com%2F%22%5D; _pk_id.13.333e=2866ac77c0edddb2.1554068078.2.1554157353.1554157353.; _pk_ses.13.333e=1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
return curl_exec($ch);

curl_close ($ch);
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
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
return curl_exec($ch);
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
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36';
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
return curl_exec($ch);
curl_close ($ch);
}
function xxx(){
$s = substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), -8);
return $s;
}
function getStr($content,$start,$end){
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}
echo '@RiyanCoday - 2k19 v.4';		    echo "\r\n"; echo "========";echo "\r\n";
echo 'Kode Referral ? : '; 
$ref = trim(fgets(STDIN)); 
echo 'Mau Berapa ? : '; 
$jumlah = trim(fgets(STDIN)); 
$i=1;
while($i <= $jumlah){
			echo "========";echo "\r\n";
$a = ['1secmail.com', '1secmail.org', '1secmail.net'];
    $belakang = $a[mt_rand(0, count($a) - 1)];
	$depan = xxx();
$email = ''.$depan.'@'.$belakang.'';
	echo '['.$i.'/'.$jumlah.'] Email '.$email; 		    echo "\r\n";
$register_bt = reg($email,$ref);
if (stripos($register_bt, 'Too Many Attempts.')) {
	echo '['.$i.'/'.$jumlah.'] Gagal Daftar [Too Many Attempts.]';			    echo "\r\n"; 
	$ss = getStr($register_bt,'Retry-After: ','
X-RateLimit-Reset:');
$shn = $ss+1;
					sleep($shn);
					continue;
}elseif (stripos($register_bt, 'The email has already been taken.')) {
		echo '['.$i.'/'.$jumlah.'] E-Mail Sudah Terdaftar';			    echo "\r\n"; continue;
}elseif (stripos($register_bt, '204 No Content')) {
	echo '['.$i.'/'.$jumlah.'] Sukses Daftar'; 		    echo "\r\n";
	sleep(10);
	$getem = getem($depan,$belakang);
	$link = getStr($getem,'<a href="/mailbox/?action=readMessage&id=','"');
	$link = 'https://www.1secmail.com/mailbox/?action=mailBody&id='.$link;
		$getem = check($link);
			$link = getStr($getem,'ecoration:none;" href="','"');
	if(!$link){
		echo '['.$i.'/'.$jumlah.'] E-Mail Tidak Ada Isi'; echo "\r\n"; continue;
	}else{
			echo '['.$i.'/'.$jumlah.'] '.$link;
		    echo "\r\n";
	$getver = get($link);
$em = getStr($getver,'email=','
Content-Secur');
$cod = getStr($getver,'https://my.bigtoken.com/verify?code=','&type');
$d = '{"email":"'.$em.'","verification_code":"'.$cod.'"}';
$ver = ver("$d");
if (stripos($ver, 'Reward')) {
		echo '['.$i.'/'.$jumlah.'] Sukses Verif '.$em.'';
		    echo "\r\n";
	}elseif (stripos($ver, 'disable MSIE')) {
				echo '['.$i.'/'.$jumlah.'] Aku Yakin Sukses Verif '.$em.'';
		    echo "\r\n";
	}elseif(stripos($ver, 'Too Many Attempts.')) {
					echo '['.$i.'/'.$jumlah.'] Gagal Verif [Too Many Attempts.]';
		    echo "\r\n";
			 $ss = getStr($ver,'Retry-After: ','
X-RateLimit-Reset:');
$shn = $ss+1;
		   	echo '['.$i.'/'.$jumlah.'] Verif Ulang';
					sleep($shn);
		    echo "\r\n";	
			$ver1 = ver("$d");
if (stripos($ver1, 'Reward')) {
			echo '['.$i.'/'.$jumlah.'] Sukses Verif[2] '.$em.'';
		    echo "\r\n";
}elseif (stripos($ver1, 'disable MSIE')) {
				echo '['.$i.'/'.$jumlah.'] Aku Yakin Sukses Verif '.$em.'';
		    echo "\r\n";
	}else{
								echo '['.$i.'/'.$jumlah.'] Gagal Verif Lagi Cek Manual di cdy.txt';		    echo "\r\n";

				$data =  "".$link." \r\n";
		$fh = fopen("cdy.txt", "a");
		fwrite($fh, $data);
		fclose($fh);
	}
	}else{
							echo '['.$i.'/'.$jumlah.'] Gagal Verif Cek Manual di cdy.txt';
		    echo "\r\n";
				$data =  "".$link." \r\n";
		$fh = fopen("cdy.txt", "a");
		fwrite($fh, $data);
		fclose($fh);
	}
	}
	}elseif (stripos($register_bt, 'INVALID_REFERRAL')) {
				echo '['.$i.'/'.$jumlah.'] Kode Referral Salah';			    echo "\r\n"; exit;
	}else{
		echo '['.$i.'/'.$jumlah.'] Gagal Daftar';		    echo "\r\n";continue;
	}
$i++;
}
