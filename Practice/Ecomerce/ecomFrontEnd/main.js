<script type="text/javascript">
		function manage_cart(pid,type){
			if(type=='update'){
			var qty=$('#'+pid+'qty').val();

			}else{
				var qty=$('#qty').val();
			}

			$.ajax({
				url:'manage_cart.php',
				type:'POST',
				data: 'pid='+pid+'&qty='+qty+'&type='+type,

				success:function(data){
					if(type=='update' || type=='remove'){
						window.location.href=window.location.href;
					}
					$('.htc__qua').html(data);
				}
			});
		}


		function wishlist_manage(pid,type){
			$.ajax({
				url:'wishlist_manage.php',
				type:'POST',
				data: 'pid='+pid+'&type='+type,

				success:function(result){
					if(result =='not_login'){
						window.location.href='login.php';
					}else{
						$(".htc__whistlist").html(result);
					}
					
				}
			});

		}

</script>