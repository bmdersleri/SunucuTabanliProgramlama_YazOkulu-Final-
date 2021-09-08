<?php 
session_start();
class db{
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "uni";
	private $conn = "";
	
	
	private $result; //recordset
	private $last_query; //last query
	private $error; // error message
	private $magic_quotes_active; //boolean variable
	private $real_escape_string; //boolean variable
	private $errormsg=array(
							'1440'=>'The record is in use somewhere else'
							);
// for database conectivity andselect data call every tyme when class is call 
	function __construct() {
		$this->connect();
		$this->magic_quotes_active=get_magic_quotes_gpc();
		$this->real_escape_string=function_exists("mysql_real_escape_string");
	}
	
	
	//destructor call dissconnect function
	function __destruct()
	{
		$this->disconnect();
	}
	
//funciton to close connection
	public function disconnect()
	{
		if(isset($this->conn) && $this->conn)
		{
			mysql_close($this->conn);
			unset($this->conn);
		}
	}
	
// sever connection function
	function connect() {
		//check if any connection already exists, close that connection
		$this->disconnect();
		$this->conn = @mysql_connect($this->host,$this->user,$this->password);	
		if(!$this->conn)
		{
			die("Database Connection Failed : ".mysql_error());
		}
        else{
			
		 $db_select= mysql_select_db($this->database,$this->conn);
	
	      if(!$db_select) { die("Database Select Failed : ".mysql_error()); }
		}
	}

	

	
	
		//function to set Error Msg
	private function seterror($myerr,$myerrno=0)
	{
		if(isset($this->errormsg[$myerrno])) $myerr=$this->errormsg[$myerrno];
		
		$this->error="Query Exceution Failed :".$myerr;
		$this->error.="<br />Last Query : ".$this->last_query;
	}
	
	//public funtion to send error to user
	public function geterror()
	{
		return $this->error;
	}
	
	public function getlastquery()
	{
		return $this->last_query;
	}
	
	
//method to prepare string for various sql operation
	public function prepdata($sqldata)
	{
		if($this->real_escape_string)
		{
			if($this->magic_quotes_active) { $sqldata=stripslashes($sqldata); }
			$sqldata=mysql_real_escape_string($sqldata,$this->conn);
		}
		else
		{
			if(!$this->magic_quotes_active) { $sqldata=addslashes($sqldata); }
		}
		return $sqldata;
	}
	
	
	//function to execute query
	public function query($sql)
	{
		$this->last_query=$sql;
		$this->result=mysql_query($sql,$this->conn);
		if($this->result)
		{
			return $this->result;
		}
		else
		{
			$this->seterror(mysql_error(),mysql_errno());
			return NULL;
		}
	}
	
	//method to get id of last inserted record
	public function getlastid()
	{
		return mysql_insert_id($this->conn);
	}
   
    //method to get number of affected rows
	public function getaffectedrows()
	{
		return mysql_affected_rows($this->conn);
	}
	
	
    //function to insert records
	public function inserts($sql)
	{
		$rs=$this->query($sql);
		if($rs)
		{
			return $this->getlastid();
		}
		else
		{
			return NULL;			
		}
	}
	
 //for data insertation  
    public function insert($table,$data){

	 if(count($data)>0)
		{
			$strField="";
			$strVal="";
			foreach($data as $field=>$val)
			{
				$strField.="`".$field."`".",";
				if(is_null($val)) { $strVal.='NULL,'; }
				else { $strVal.= "'".$this->prepdata($val)."',"; }
			}
			$strField=rtrim($strField,',');
			$strVal=rtrim($strVal,',');
			
			$sql="insert into `$table` ";
			$sql.="(".$strField.") values ";
			$sql.="(".$strVal.")";
			
			return $this->inserts($sql);
		}
		else
		{
			$this->seterror("No fields present in array");
			return NULL;
		}

    } 
	
//method to update record
	public function updates($sql)
	{
		$rs=$this->query($sql);
		
		
		if($rs)
		{
			return $this->getaffectedrows();
		}
		else
		{
			return NULL;
		}
	}
	
//	for upadate data in data base
	function update($table,$data,$condition=""){
		
		$strUpVal='';
		if(count($data)>0)
		{
			foreach($data as $field=>$val)
			{
				if(is_null($val)) { $strUpVal.="`$field`=NULL,"; }
				else { $strUpVal.="`$field`='".$this->prepdata($val)."',"; }
			}
			$strUpVal=rtrim($strUpVal,',');
			$sql="update `$table` set $strUpVal";
			if(!is_null($condition)) { $sql.=" ".$condition; }
			
			return $this->updates($sql);
			
		}
		else
		{
			$this->seterror("No fields present in array");
			return NULL;
		}
	 
    }
	
// for delete data from database table

	function delete($table,$condition=""){
		
	 	$sql="delete from `$table`";
		if(!is_null($condition)) { $sql.=" ".$condition; }
		$rs=$this->query($sql);
		if($rs)
		{
			return $this->getaffectedrows();
		}
		else
		{
			return NULL;
		}
		
	}
	
	
//select data from databse all row with one array

	function select($table,$condition="",$field="*"){
	  $sql="select $field from $table $condition";
	  
	  
	 $aryResult=array();
		
		$result=$this->query($sql);
		
		if(!is_null($result)) 
		{ 
			while($row=mysql_fetch_array($result)) { $aryResult[]=$row; }
			return $aryResult;
		}
		else
		{
			return NULL;
		}
    }
		
//select data from databse one row	
function selectone($table,$condition="",$fields="*")
{
	
	$sql = "select $fields from $table $condition";
	$result=$this->query($sql);
		
		if(!is_null($result)) 
		{ 
			return $row=mysql_fetch_array($result);
			 
		}
		else
		{
			return NULL;
		}
}	 
	
//count row 
function countdata($table,$condition="",$fields="*")
{
	$sql = "select count( $fields ) from $table $condition ";
	$result=$this->query($sql);
	if(!is_null($result)) 
		{ 
			$count=mysql_fetch_row($result);
			return $count[0]; 
		}
		else
		{
			return NULL;
		}

}

//for password encraption
function password($pass)
{
$var = md5($pass.'a5d785e0cc5d');	
$pass = sha1(md5(str_rot13($var)));
$pass = $var.$pass;
return $pass;	
}

//for encraption decryption
function encrypt_decrypt($key,$val)
{
	
switch($key){
	
case "encrypt":
$return = $this->encode($val);
return $return;
break;

case "decrypt":
$return = $this->decode($val);
return $return;
break;
	}	
	
}

// for mulitilavel encraption
function encode($val)
{
$data = convert_uuencode($val);
$res =strrev($data);	
$encode = $this->rot(base64_encode($res));
return $encode;	
}
	
// for mulitilavel decryption
function decode($val)
{
$data = base64_decode($this->rot($val));
$res = strrev($data);
$decode = convert_uudecode($res);	
return $decode;	
}
	
//for encraption	
function rot($eval)
{	
$rot = str_rot13($eval);
return $rot;	
}


//hear start valadation 
	
	function DateFormat($date,$label)
	{
	//match the format of the date
	if (preg_match ("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/", $date, $parts))
	{
	//check weather the date is valid of not
	if(checkdate($parts[2],$parts[3],$parts[1]))
	return true;
	else
	$this->error[] = "Please Enter Valid Date in $label";
	return false;
	}
	else
	$this->error[] = "Please Enter Valid Date in $label";
	return false;
	}
	
	
	

    function email($email){
     return filter_var($email, FILTER_VALIDATE_EMAIL)? TRUE : FALSE;
    }
    function userid($username){
	  if (preg_match('/^[a-z\d_]{5,20}$/i', $username)) {
		return true;
	  }
	   else {
		return false;
	   }
    }	
 
    function url($url) {
	 if (preg_match(              '/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $url  )){
		 return true;
	   }  
	    else {
		return false;
	    }
    } 


    function genpwd($length = 7){
      $password = "";
      $possible = "0123456789bcdfghjkmnpqrstvwxyz"; //no vowels
      $i = 0; 
    
        while ($i < $length){ 
         $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);    
           if (!strstr($password, $char)){ 
            $password .= $char;
            $i++;
            }
        }
      return $password;

    }
	
	public function img_valid($type)
	{
		$ctype = strtolower($type);
		if($ctype=='image/jpg' || $ctype=='image/png' || $ctype=='image/gif' || $ctype=='image/jpeg' ){
			
			return true;
			
		}
		else{
			
			return false;
		}
		
	}
	
	

 
 
///-------------- pagination start heare 

var $offset =0; 
var $page=0 ;
var $lpp = 0;
var $total_data = 0;
var $cn="";
var $php_self="";
var $lpd = 1;
function pagination($table,$cn="",$dpp=1,$lpp=5)
{
	if(isset($_REQUEST['lpd']))
	{
    $this->lpd = $this->encrypt_decrypt('decrypt',$_REQUEST['lpd']);
	}
	if(isset($_REQUEST['cn']))
	{
    $this->cn = $this->encrypt_decrypt('decrypt',$_REQUEST['cn']);
	}
$this->php_self = htmlspecialchars($_SERVER['PHP_SELF']);
$this->cn = $cn;
$this->lpp = $lpp;
$this->total_data = $this->countdata($table,$cn);
$this->page = ceil($this->total_data / $dpp );
$this->offset = $dpp * ($this->lpd - 1);
if($this->lpp > $this->page )
{
$this->lpp = $this->page;
}
$cn  .=" limit $this->offset,$dpp";

$result = $this->select($table,$cn);

return $result;


}

	function nav(){
	
	$this->lpp;
    $this->total_data;
	$this->cn;
	$links = "";
    $batch = ceil($this->lpd / $this->lpp );
    $end = $batch * $this->lpp;
	if ($end > $this->page) {
			$end = $this->page;
		}
	$start = $end - $this->lpp + 1;

	for($i = $start; $i <= $end; $i ++) {
			if ($i ==  $this->lpd) {
				echo '<div class="pzn1" > <a  class="pzz1" >'. $i . '</a></div>';
			} else {
				echo'<div class="pzn" > <a href='.$this->php_self.'?lpd='.$this->encrypt_decrypt('encrypt',$i).'&cn='.$this->encrypt_decrypt('encrypt',$this->cn).' class="pzz" >'. $i . '</a></div>';
	
			}
		}

	}

  	function nexts($tag = 'next') {
	$next = $this->lpd + 1;
		if ($this->total_data == 0)
			return FALSE;
		
		if ($this->lpd < $this->page) {
			
			return'<div class="pzn" > <a href='.$this->php_self.'?lpd='.$this->encrypt_decrypt('encrypt',$next).'&cn='.$this->encrypt_decrypt('encrypt',$this->cn).' class="pzz" >'. $tag . '</a></div>';
			
			
		} else {
			return '<div class="pzn1" ><a class="pzz1" >' . $tag . '</a></div>';
		}
	}
	
	
	
	  	function priv($tag = 'priv') {
	    $priv = $this->lpd - 1;
		if ($this->total_data == 0)
			return FALSE;
		
		if ($this->lpd >1) {
			
			return'<div class="pzn" > <a href='.$this->php_self.'?lpd='.$this->encrypt_decrypt('encrypt',$priv).'&cn='.$this->encrypt_decrypt('encrypt',$this->cn).' class="pzz" >'. $tag . '</a></div>';
			
				
			
		} else {
			return '<div class="pzn1" ><a class="pzz1" >' . $tag . '</a></div>';
		}
	} 
 
 
 
}
//end class db





?>
