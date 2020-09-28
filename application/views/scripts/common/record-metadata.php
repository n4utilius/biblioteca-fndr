<style>
.winter #content > div, .winter #content #primary > div,
.winter #content #sidebar > div,
.winter #content #advanced-search-form > div,
.winter #content #exhibit-pages {
    border-color:    #228494;
}

table{
	border: #228494;
}


.winter #content, .winter #secondary-nav .current a,
.winter #secondary-nav a.current, .winter .secondary-nav .current a,
.winter .secondary-nav a.current, .winter .exhibit-section-nav .current a {
    background-color:  #fff;
}

nav.top .nav-item:hover {
    border-bottom: 3px solid #228494;
}

.winter nav.top a:link, .winter nav.top a:visited{
    color:  #5a5a5a;
}

.winter nav.top li:hover a{
    color:  #000;
}

.winter nav.top {
    background-color: #fff;
}

</style>

<?php foreach ($elementsForDisplay as $setName => $setElements): ?>
<div class="element-set" style="padding: 25px 0px 0px 25px;">
    <?php if ($showElementSetHeadings): ?>
    <!--h2><?php echo html_escape(__($setName)); ?></h2-->
    <?php endif; ?>
    <table>
    <?php foreach ($setElements as $elementName => $elementInfo): ?>
    	<!-- div id="<?php echo text_to_id(html_escape("$setName $elementName")); ?>" class="element"-->
	<!--h2><?php echo $elementName; ?></h2-->

	<?php
	$no_titles = array("Title", "Type", "Creator");
	//if ( !array_search($elementName, $no_titles || !($elementName <> "Title")) ){  var_dump($elementName);
	if( $elementName != "Title" && $elementName != "Type" && $elementName != "Creator" ){
	?>

	<tr>
		<td width="25%"> <h4><?php echo html_escape(__($elementName)); ?></h4> </td>
		<td> <?php foreach ($elementInfo['texts'] as $text): ?>
        	    <div class="element-text"><?php echo $text; ?></div>
	        <?php endforeach; ?> </td>
	</tr>
	<?php } ?>

	<!--/div--><!-- end element -->
    <?php endforeach; ?>
    </table>

</div><!-- end element-set -->
<?php endforeach;
