<?php
// Edit upload location here
$destination_path = base64_decode($_POST['path_2_upload']);
$link_2_upload = base64_decode($_POST['link_2_upload']);
$max_upload_size = explode('x', $_POST['max_upload_size']);

$markedImage = '';

$fileName = basename( $_FILES['myfile']['name']);
 
@mkdir($destination_path, 0777, true);

$result = 0;
 
$target_path = $destination_path . $fileName;
$markedImageName = time() . '-' . $fileName;

$extensions = array('.png', '.gif', '.jpg', '.jpeg', '.bmp','.PNG', '.GIF', '.JPG', '.JPEG', '.BMP');
$extension = strrchr($_FILES['myfile']['name'], '.');

if (in_array($extension, $extensions))
{
	if(move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path))
	{
		include_once('../resize.class.php');
		
		try 
		{
			$obj = new Resize($target_path);
			$obj->setNewImage($destination_path . $markedImageName);
//			$obj->setWaterMarkImage($path_2_watermark);
//			$obj->setWaterMarkOpacity(100);
//			$obj->setWaterMarkPosition('bottomLeft');
			$obj->setProportionalFlag('V');
			$obj->setProportional(1);
// 			$obj->setDegrees(90);
			$obj->setNewSize($max_upload_size[1], $max_upload_size[0]);
			$obj->make();
		}
		catch (Exception $e) 
		{
			die($e);
		}
		
		$result = 1;
	}
}
 
sleep(1);

?>

<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>, '', '<?php echo $link_2_upload . $markedImageName; ?>');</script>   
