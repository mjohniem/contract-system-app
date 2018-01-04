		 <a href="#" onClick="return hs.htmlExpand(this, { headingText: '<?php echo $row['tech_title']; ?>' })"> <em>View Details</em> </a>
         <div  class="highslide-maincontent" >
         <div style=" float:left;"> 
		 <h6 style="text-align: centre; "><?php echo $row['tech_title']; ?></h6>
		 
         <img src="<?php echo $row['tech_logo'];?>" style=" height: 80px;" />
         
         </div>
         <div style="float:right;     ">
		 <p style=" float:left; text-align: centre; text-decoration: bold;"> <?php echo $row['tech_description']; ?> </p>
          </div>
         </div>
		 
		 
		 
		 
		 
		 <script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<!--
	2) Optionally override the settings defined at the top
	of the highslide.js file. The parameter hs.graphicsDir is important!
-->

<script type="text/javascript">
	hs.graphicsDir = 'highslide/graphics/';
	hs.outlineType = 'rounded-white';
	hs.showCredits = false;
	hs.wrapperClassName = 'draggable-header';
</script>