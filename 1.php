<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>

<form method = "GET" >
 <input  value="" name="text" placeholder="enter id">
 <input type="submit" value="ok" name="ok"/>

</form>


<?php

Class item
{
	
	private $id, $name, $status, $changed;
	
	public function __construct( $id) {
	$this->id=$id;
	$this->name=$name;
	$this->status=$status;
	$this->changed=$changed;
			self::init($id);
	}
	
	
	
	private static function init($id){
	global $name, $status;
	$con = new mysqli("localhost", "root", '', "bd_name");
                        $sort = "SELECT `name`, `status` FROM `objects` WHERE id='".$id."'";
                        $res = $con->query($sort);
						 while( $row = $res->fetch_assoc() ){
						$name=$row['name'];
						$status=$row['status'];	
						 }
		
		
		}
	
	public function save($id){
	
			$con1 = new mysqli("localhost", "root", '', "bd_name");
			$name = $_POST['name1'];
            $status = $_POST['status1'];
			if(!empty($name) &&  !empty($status)  ){
	    $pull = "UPDATE `objects` SET `name`='".$name."',`status`='".$status."' WHERE `id`='".$id."' ";
    $res1 = $con1->query($pull);
	}}
		
	
}
if(isset($_GET['ok'])){
            $id = $_GET['text'];
$a= new item($id);}
if(isset($_POST['save'])){
$a->save($id);
}
?>
<form method = "POST">
<input  value="<?php echo $id ?>" name="id1">
<input  value="<?php echo $name ?>" name="name1" >
<input  value="<?php echo $status ?>" name="status1" >
 <input type="submit" value="save" name="save"/>
</form>

</html>
