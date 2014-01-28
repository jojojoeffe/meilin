<div class="content">
		<div class="container">
			<div class="border">
			<div class="isi">
			<div class="row">
<!--				<div class="span6">
					<div id="map"></div>
				
				</div>	-->
				<div class="span4 offset1">
                                    
					 <?php foreach ($contacts as $contact): ?>
					<address>
					  <p style="font-size:25px;">Meilin Consulting Group</p><br>
                                          <?php echo $contact->region ?><br>
					  <?php echo $contact->province ?><br>
					  <?php echo $contact->country ?><br>
					 
					</address>
					 
					<address>
					  <?php echo $contact->email ?><br>
					  <abbr title="Phone"> <?php echo $contact->tel_local ?><br>
                                          <abbr title="Phone"> <?php echo $contact->tel_inter ?> <br>
					  <abbr title="Fax"> <?php echo $contact->fax ?> <br> 
                                          <abbr title="Fax"> <?php echo $contact->whatsap_line ?> <br>
					</address>

					<div class="location">
					<h4> <?php echo $contact->title ?><span class="dot">.</span></h4>
                                        
                                        <?php endforeach; ?> 
					</div>
				</div>				
			</div>	
			
			</div>
			</div>
		</div>
	</div>
