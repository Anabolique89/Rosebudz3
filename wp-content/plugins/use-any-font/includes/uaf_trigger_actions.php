<?php
if (isset($_POST['submit-uaf-font-php'])){	
	$fontUploadResponse = uaf_upload_font_to_server();
    if ($fontUploadResponse['status'] == 'success'){
		$fontUploadResponse = uaf_save_font_files($_POST['font_name'], $fontUploadResponse['body']);	
	}
	$operationStatus			= $fontUploadResponse['status'];
	$operationMsg				= $fontUploadResponse['body'];    
}

if (isset($_POST['submit-uaf-font-js'])){	
	$fontSaveResponse 		= uaf_save_font_files($_POST['font_name'], $_POST['convert_response']);
	$operationStatus		= $fontSaveResponse['status'];
	$operationMsg			= $fontSaveResponse['body'];
}

if (isset($_POST['ucf_api_key_submit'])){
	$activationRetun  		= uaf_key_activate();
	$operationMsg	  		= $activationRetun['body'];
	$operationStatus	  	= $activationRetun['status'];
}

if (isset($_POST['ucf_api_key_remove'])){
	$deactivationRetun  = uaf_key_deactivate();
	$operationMsg	  	= $deactivationRetun['body'];
	$operationStatus  	= $deactivationRetun['status'];	
}

if (isset($_GET['delete_font_key'])):
	$fontDeleteRetun  	= uaf_delete_font();
	$operationMsg	  	= $fontDeleteRetun['body'];
	$operationStatus  	= $fontDeleteRetun['status'];	
endif;

if (isset($_POST['submit-uaf-settings'])){
    uaf_save_settings();
    $operationMsg       = 'Settings Saved';
    $operationStatus    = 'updated';
}

if (isset($_POST['submit-uaf-implement'])){
	$fontAssignReturn  		= uaf_save_font_assign();
	$operationMsg	  		= $fontAssignReturn['body'];
	$operationStatus	  	= $fontAssignReturn['status'];	
}

if (isset($_GET['delete_implement_key'])):
	$fontAssignDeleteReturn  		= uaf_delete_font_assign();
	$operationMsg	  				= $fontAssignDeleteReturn['body'];
	$operationStatus	  			= $fontAssignDeleteReturn['status'];	
endif;