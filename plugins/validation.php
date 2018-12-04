<!-- css ------------------------------>
<link rel="stylesheet" href="plugins/validation/validation.css">
  
<!-- javascripts ------------------------------>
<script src="plugins/validation/jquery-1.10.2.min.js"></script>
<script src="plugins/validation/jquery.easyui.min.js"></script>

<!-- main ------------------------------>
<script type="text/javascript">
$(function(){
  $('#ff').form({
    //url:'form3_proc.php',
    onSubmit:function(){ /*/return $(this).form('validate');/*/ },
    success:function(data){ /*/$.messager.alert('Info', data, 'info');/*/ }
    //how to use : tag "input" atau tag "textarea" dipasang
    //. class yang harus : class="easyui-validatebox" required="true"
    //. optional : validType="email"
  });
});
</script>