<?php $no_fluid_layout = false; ?>
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
		-webkit-box-shadow: inset 0px 0px 0px 0px rgba(67, 64, 97, 0.0);
		box-shadow: inset 0px 0px 0px 0px rgba(67, 64, 97, 0.0);
	}
	.background-transition.on{
		background-color:rgba(227,242,247,1);
		-webkit-box-shadow: inset 0px 0px 100px 0px rgba(67, 64, 97, 0.7);
		box-shadow: inset 0px 0px 100px 0px rgba(67, 64, 97, 0.7);
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
					<h1 class="title" style="font-family:'Lato';letter-spacing:5px;margin:0;padding:0;height:80px;font-size:80px;line-height:80px;width:100%;text-align:center;color:#434061;">AFRICAN</span></h1>
					<p class="subtitle" style="font-family:'Lato';margin:0 0 10px 0;padding:0;height:22px;font-size:19px;line-height:22px;width:100%;text-align:center;color:#2E6DBC;letter-spacing:1px;">Community&nbsp;<span style="color:#4EBEE6;">Advancement&nbsp;</span><span style="color:#49D168;">Initiative</span></p>
				</div><!--.row-fluid-->
				
				<div id="button" class="row-fluid" style="z-index:2;">
					
							<div class="span4 offset4">
								<div class="outer-center">
									<div class="inner-center">
										<div class="btn-group">
												<a href="/acai/" class="btn btn-info"><i class="icon icon-question-sign icon-white"></i>&nbsp;&nbsp;Learn More</a>
												<a href="/acai/fundraising/" class="btn btn-success"><i class="icon icon-ok icon-white"></i>&nbsp;&nbsp;Support Africa</a>
											
										</div><!--.btn-group-->
									</div><!--.inner-center-->
								</div><!--.outer-center-->
							</div><!--.span4-->
	
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
