<?php
global $base_url;
$institute_id = $node->nid;
$ins_load = node_load($institute_id);
//print_r($ins_load);
?>
<div class="">

<?php
//echo sizeof($ins_load->field_banner['und'];exit;
for($i=0;$i<sizeof($ins_load->field_banner['und']);$i++){ 
	$img_url = $ins_load->field_banner['und'][$i]['uri']; ?>
  	<img class="mySlides" src="<?php print image_style_url("home_page_slider", $img_url); ?>" alt="Institute Banner" height="300px">	
 <?php } ?>
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
<?php if(!empty($ins_load->field_institute_notification)){ ?>
 	<div class="ins-notification">
		<marquee>
			<?php for($i=0;$i<sizeof($ins_load->field_institute_notification['und']);$i++){ 
				print $ins_load->field_institute_notification['und'][$i]['value'];
		 	} ?>

		</marquee>
	</div>
<?php } ?>

	
	
<div class="institute-page">
	<div class="row">
  		<div class="col-sm-2">
  			<div class="ins-page-logo">
  				<div class="ins-page-logo-image">
  					<?php $img_url = $ins_load->field_institute_logo['und'][0]['uri'];
					 ?>
  					<img src="<?php print image_style_url("thumbnail", $img_url); ?>" alt="Institute Logo">
  				</div>
  			</div>
  		</div>
  		<div class="col-sm-8">
  			<h4><?php print $title; ?></h4>
  			<h5><?php print $ins_load->field_institute_address['und'][0]['value']; ?></h5>
  			<h5>
  				<?php if(!empty($ins_load->field_institute_pin_code)){
  					print $ins_load->field_institute_pin_code['und'][0]['value'];	
  				} ?>
  			</h5>
  			<h5>
  				<?php if(!empty($ins_load->field_institute_contact_number)){
  					print $ins_load->field_institute_contact_number['und'][0]['value'];	
  				} ?>
  			</h5>
  			<h5>
  				<?php if(!empty($ins_load->field_institute_website)){
  					print $ins_load->field_institute_website['und'][0]['value'];	
  				} ?>
  			</h5>
  			
		</div>
  		<div class="col-sm-2">
  			<a href="<?php print $base_url ?>/node/<?php print $institute_id?>/edit">Edit</a>
  			<a></a>
  		</div>
	</div>
	

<div class="inst-page-tabs">
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Details</a></li>
  <li><a data-toggle="tab" href="#menu1">Courses</a></li>
  <li><a data-toggle="tab" href="#menu2">Interview Questions</a></li>
  <li><a data-toggle="tab" href="#menu3">Enquiries</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div>
		<h5>
  				<?php if(!empty($ins_load->field_institute_description)){
  					print $ins_load->field_institute_description['und'][0]['value'];	
  				} ?>
  		</h5>
		
	</div>
  </div>
  <div id="menu1" class="tab-pane fade">
     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </div>
  <div id="menu2" class="tab-pane fade">
     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </div>
  <div id="menu3" class="tab-pane fade">
     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </div>
  

  
</div>
</div>
</div>


<div id="map" class="inst-map" style="width:100%;height:300px;background:yellow"></div>

<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEnvep-UiNZsCx3y3pQHAt1Bo2jkI5cNY&callback=myMap"></script>
