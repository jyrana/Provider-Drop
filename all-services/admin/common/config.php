<?php
 
class config
{
	var $crud;

	public function __construct()
	{
		$this->config=mysqli_connect("localhost","root","","service");
	}

	public function insertConact($name,$email,$phone,$subject,$message)
	{
		$statement = mysqli_query($this->config,"INSERT INTO `contacts`(`name`, `email`, `phone`, `subject`, `message`) VALUES ('$name','$email','$phone','$subject','$message')");
	}

	public function insertCategories($name)
	{
		$statement=mysqli_query($this->config,"INSERT INTO `categories` (`name`) VALUES('$name')");
	}
	public function selectCategories()
	{
		$result= mysqli_query($this->config,"SELECT * FROM `categories`");
		return $result;
	}
	public function deleteCategories($id)
	{
	    $deletemenus = mysqli_query($this->config, "DELETE FROM `categories` WHERE id='".$id."'");
	}

	public function insertServices($name,$price,$p_photo,$file_type,$tmp_loc,$cname,$description)
	{
		$statement=mysqli_query($this->config,"INSERT INTO `services`(`name`, `price`, `photo`, `cname`, `description`) VALUES ('$name','$price','$p_photo','$cname','$description')");
	}

	public function selectServices()
	{
		$result= mysqli_query($this->config,"SELECT * FROM `services`");
		return $result;
	}

	public function deleteServices($id)
	{
	    $deletemenus = mysqli_query($this->config, "DELETE FROM `services` WHERE id='".$id."'");
	}

	public function selectServicesById($id)
	{
		$result= mysqli_query($this->config,"SELECT * FROM `services` WHERE id='".$id."'");
		return $result;
	}

	public function selectServicesByName($name)
	{
		$result= mysqli_query($this->config,"SELECT * FROM `services` WHERE cname='".$name."'");
		return $result;
	}

	public function insertServiceOrder($name,$email,$phone,$cname,$message)
	{
		$statement=mysqli_query($this->config,"INSERT INTO `services-order`(`name`, `email`, `phone`, `cname`, `message`) VALUES ('$name','$email','$phone','$cname','$message')");
	}

	public function selectServiceOrder()
	{
		$result= mysqli_query($this->config,"SELECT * FROM `services-order`");
		return $result;
	}

}



