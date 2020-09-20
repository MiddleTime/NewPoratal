<?php
ob_start();
?>
<h1>TOP 3 NEWS </h1>
<br>
<?php
ViewNews::NewsByCategory($arr);
//	foreach($arr as $value){
//		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $value['picture'] ).'" width=150 /><br>';
//		echo "<h2 >".$value['title']."<h2>";
//		//Controller::CommentsCount($value['id']);
//		echo "<a href='news?id=".$value['id']."'>Edasi</a><br>";
//	}
	
$content = ob_get_clean();

include_once 'view/layout.php';

?>