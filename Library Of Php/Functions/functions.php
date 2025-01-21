<?php
// Upload File
function UploadIMG($file)
{
	if (isset($file)) {
	if ($file['error'] == 0) {
		$allowed_Ext = [
			'jpg',
			'png',
			'jpeg'
		];
		$target_Dir = 'uploaded/';
		$target_File = $target_Dir . $file['name'];
		$img_Ext_Info = new SplFileInfo($file['name']);
		$img_Ext = $img_Ext_Info->getExtension();

		if (in_array($img_Ext, $allowed_Ext)) {
			if (move_uploaded_file($file['tmp_name'], $target_File)) {
				echo "Berhasil di upload";
			} else {
				echo "Gagal di upload";
			}
		} else {
			echo "Extension tidak didukung";
		}
	}
}
}
?>