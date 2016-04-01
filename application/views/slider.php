<style>
	.carousel-inner .item {
		background-position: center top;
		background-repeat: no-repeat;
		/*background-size: contain;*/
		background-color: #fff;
		min-height: 500px;
	}
	/* big device */
	@media (min-width: 800px){
		.carousel-inner .item {
			background-size: cover;
		}
	}
	@media (max-width: 800px){
		.carousel-inner .item {
			background-size: cover;
		}
	}
	.carousel-inner .item .carousel-caption{
		font-size: 40px;
	}
	.carousel-control{
		/*background: url(<?=base_url()?>/assets/img/jssor/a22.png) center center no-repeat;*/
		display: block;
		position: absolute;
		/* size of arrow element */
		width: 40px;
		height: 58px;
		cursor: pointer;	
		background-position: center center ;
		background-repeat: no-repeat;
		overflow: hidden;
	}
	.carousel-control.left{
		background-position: -10px -31px;
		background-image: url(<?=base_url()?>application/assets/img/jssor/a22.png) ;
	}
	.carousel-control.right{
		background-position: -70px -31px;
		background-image: url(<?=base_url()?>application/assets/img/jssor/a22.png) ;
	}
</style>
<? // $slides ?>
<div id="carousel-slide" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
	<? $i=0; ?>
	<? foreach( $slides as $key => $slide) : ?>
		<li data-target="#carousel-slide" data-slide-to="<?=$i?>" class="<?=($i==0)? 'active' : '' ?>"></li>
	<? $i ++ ; ?>
	<? endforeach; ?>
    <!--<li data-target="#carousel-slide" data-slide-to="1"></li>-->
    <!--<li data-target="#carousel-slide" data-slide-to="2"></li>-->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<? $i=0; ?>
	<? foreach( $slides as $key => $slide) : ?>
	
		<div class="item <?=($i==0)? 'active' : '' ?>"  style="background-image: url('<?=base_url()?>application/assets/media/slides/<?=$slide["img"]?>')">
			<div class="carousel-caption" >
			  <?=$slide->caption?>
			</div>
		</div>
	<? $i ++ ; ?>
	<? endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-slide" role="button" data-slide="prev"  style="top: 180px; left: 8px;">
    <!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-slide" role="button" data-slide="next" style="top: 180px; right: 8px;">
    <!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
    <span class="sr-only">Next</span>
  </a>
</div>