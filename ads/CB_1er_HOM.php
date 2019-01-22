<?php

/*-----------------------------------------------------------------------------------*/
/* CB_1er_HOM
/*-----------------------------------------------------------------------------------*/

function CB_1er_HOM_init() { ?>
	<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
		<script>
		var googletag = googletag || {};
		googletag.cmd = googletag.cmd || [];
		</script>

		<script>
		googletag.cmd.push(function() {
			googletag.defineSlot('/21751214561/cbhom3', [300, 100], 'div-gpt-ad-1548191965726-0').addService(googletag.pubads());
			googletag.pubads().enableSingleRequest();
			googletag.pubads().collapseEmptyDivs();
			googletag.enableServices();
		});
		</script>
<?php }


add_action( 'wp_head', 'CB_1er_HOM_init' );


?>

<!-- /21751214561/cbhom3 -->
<div id='div-gpt-ad-1548191965726-0' style='height:100px; width:300px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1548191965726-0'); });
</script>
</div>