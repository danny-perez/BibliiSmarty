<!---------------------------------------------------------------->		
      </div>
	  <!----------------------------------------------------------->
	  <!----------------------------------------------------------->
    </div>
    <!-- Javascripts-->
    <!--script src="js/jquery-2.1.4.min.js"></script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins/pace.min.js"></script>
    <script src="/js/main.js"></script>
	
	<script type="text/javascript" src="/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="/js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="/js/users/functions.js"></script>
    <script type="text/javascript">
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
  </script>
    </script>
  </body>
</html>
