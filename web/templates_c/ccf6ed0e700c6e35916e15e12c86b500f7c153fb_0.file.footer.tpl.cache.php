<?php
/* Smarty version 3.1.30, created on 2018-03-19 22:21:32
  from "C:\OSPanel\domains\ekzeget.pw\web\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab00dbc88bdc5_88130093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccf6ed0e700c6e35916e15e12c86b500f7c153fb' => 
    array (
      0 => 'C:\\OSPanel\\domains\\ekzeget.pw\\web\\templates\\footer.tpl',
      1 => 1521487284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab00dbc88bdc5_88130093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14542957725ab00dbc889f51_90510084';
?>
<!---------------------------------------------------------------->		
      </div>
	  <!----------------------------------------------------------->
	  <!----------------------------------------------------------->
    </div>
    <!-- Javascripts-->
    <!--script src="js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
-->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/plugins/pace.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/main.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/plugins/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/plugins/select2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/plugins/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      $('#sl').click(function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      $('#demoSelect').select2();
      //==========================USER FUNCTION===========================================
  <?php echo '</script'; ?>
>
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
