<?php //$this->layout = 'default';?>
<style>
	div#transition-container {
		margin:0;
		padding:0;
		height:762px;
	}
    .background-transition {
        -webkit-transition: all 3s ease-in;
		-moz-transition: all 3s ease-in;
		-ms-transition: all 3s ease-in;
		-o-transition: all 3s ease-in;
		transition: all 3s ease-in;
		background-color:rgba(255,255,255,1);
		-webkit-box-shadow: inset 0px 0px 0px 0px rgba(0, 5, 0, 0.0);
		box-shadow: inset 0px 0px 0px 0px rgba(0, 5, 0, 0.0);
	}
	.background-transition.on{
		background-color:rgba(235,237,230,1);
		-webkit-box-shadow: inset 0px 0px 100px 0px rgba(0, 5, 0, 0.3);
		box-shadow: inset 0px 0px 100px 0px rgba(0, 5, 0, 0.3);
	}
	.outer-center {
		float:right;
		right:50%;
		position:relative;
	}
	.inner-center {
		float:right;
		right:-50%;
		position:relative;
	}
	/* typo*/
	.title {
		font-family: Arial, sans-serif;
		font-weight:900;
	}
	.subtitle {
		font-family: Geneva, sans-serif;
		font-weight:400;
		text-transform:uppercase;
		letter-spacing:2px;
	}
	/* end typo */
	
</style>
<div class="row-fluid">
<div id="centerHolder" class="background-transition">
	<div id="transitionContainer" class="container-fluid">
		<div id="passage" class="container-fluid" style="position:fixed;top:240px;width:100%;z-index:2;">
			<div class="row-fluid">
				<h1 class="title" style="letter-spacing:5px;margin:0;padding:0;height:80px;font-size:80px;line-height:80px;width:100%;text-align:center;color:#222;">AFRI<span style="color:#a34153;">CAN</span></h1>
				<p class="subtitle" style="margin:0 0 20px 0;padding:0;height:22px;font-size:19px;line-height:22px;width:100%;text-align:center;color:#222;">Community Advancement Initiative</p>
			</div><!--.row-fluid-->
			
			<div id="button" class="row-fluid" style="z-index:2;">

						<div class="span4 offset4">
							<div class="row-fluid">
								<div class="span6">
									<a href="#" class="btn btn-danger btn-block"><i class="icon icon-search icon-white"></i>&nbsp;&nbsp;Learn More</a>
								</div><!--.span4-->
								<div class="span6">
									<a href="#" class="btn btn-warning btn-block"><i class="icon icon-search icon-white"></i>&nbsp;&nbsp;Join</a>
								</div><!--.span4-->
							</div><!--.row-fluid-->
						</div><!--.span6-->

			</div><!--.row-fluid-->
		</div><!--.container-fluid-->
		
		<div class="fixed" style="position:fixed;top:70px;width:100%;z-index:1;">
			<div class="outer-center">
				<div class="inner-center">
					
					<img id="africa" style="height:100%;width:auto;" src="/img/africa-white.png" alt="Africa" title="Africa"/>
				</div><!--.inner-center-->
			</div><!--.outer-center-->
		</div><!--.fixed-->
	</div><!--#transitionContainer-->
</div><!--#centerHolder-->
</div><!--.rf-->

<script type="text/javascript">
	$(document).ready(function(){

		var height = $(window).height();
		var imageOffset = (height - 564) / 2;
		var offset = (height - 152) / 2;
		
		$('.fixed').css({'top':imageOffset});
		$('#passage').css({'top':offset});
		$('#transitionContainer').height(height);
		$('#centerHolder').addClass('on');
	});
</script>
