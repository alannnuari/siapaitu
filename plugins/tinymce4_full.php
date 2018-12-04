
<!-- javascripts ------------------------------>
<script src="/kitsbs/kitsbs-content/plugins/tinymce/tinymce.min.js"></script>

<!-- main ------------------------------>
<script>
<?php 	
$thisserverpath = substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 0); 
$_SESSION['thisserverpath']=$thisserverpath;
?>

//var thisserverpath = "<?php echo $thisserverpath."/plugins/filemanager/"; ?>"; // exchange variable between php and javascript
//var thisserverpathplugin = "<?php echo $thisserverpath."/plugins/filemanager/plugin.min.js"; ?>"; // exchange variable between php and javascript
var thisserverpath = "<?php echo "/kitsbs/kitsbs-content/plugins/filemanager/"; ?>"; // exchange variable between php and javascript
var thisserverpathplugin = "<?php echo "/kitsbs/kitsbs-content/plugins/filemanager/plugin.min.js"; ?>"; // exchange variable between php and javascript

        tinymce.init({
			
			   selector:"textarea",
			   relative_urls: false,
    		   remove_script_host: false,
			   theme: "modern",width: '100%',height: '350',
				plugins: [
					    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
						"searchreplace wordcount visualblocks visualchars code fullscreen",
						"insertdatetime nonbreaking save table contextmenu directionality",
						"emoticons template paste textcolor"
			   ],
			  toolbar1: "insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | styleselect | bullist numlist outdent indent",
			  toolbar2: "link unlink image | forecolor backcolor |  print emoticons preview  code",		
			     
			  toolbar_items_size: 'small',
			  image_advtab: true ,
			  
			  
			  //external_filemanager_path:"/belitongdream/bd-admin/plugins/filemanager/",
			  //filemanager_title:"Filemanager",
			  //external_plugins: { "filemanager" : "/belitongdream/bd-admin/plugins/filemanager/plugin.min.js"}
			  
			  external_filemanager_path:thisserverpath,
			  filemanager_title:"Responsive Filemanager",
	       	  external_plugins: { "filemanager":thisserverpathplugin}
			

		});
</script>

