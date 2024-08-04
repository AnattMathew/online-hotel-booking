<?php
class db
{
	public function getcon()
	{
		$con=mysqli_connect("localhost","root","","resort");
		return $con;
	}
	public function exe($sql)
	{
		$res=mysqli_query($this->getcon(),$sql);
		return $res;
	}
}
?>