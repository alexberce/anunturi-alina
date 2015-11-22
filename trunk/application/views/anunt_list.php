<div class="background_home">
   <div class="background_opacity"></div>
    <div class="section section_home_margin">
              <div class="container" >
               
               <form action='<?=base_url()?>anunt' method="get">
                <div class="row">
                    <div class="col-md-12">
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control input-lg" placeholder="Search..." name="term" />
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-info btn-lg" _type="button">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
               </form>
                 <div class="col-md-12" style="margin-top:225px">
                  <div class="col-md-3">
                      <div class="type_anunt"><div class="type_button_text">Sell</div></div>
                  </div>
                  <div class="col-md-3"><div class="type_anunt"><div class="type_button_text">Buy</div></div></div>
                  <div class="col-md-3"><div class="type_anunt"><div class="type_button_text">Offer rent</div></div></div>
                  <div class="col-md-3"><div class="type_anunt"><div class="type_button_text">Looking for rent</div></div></div>
                  </div>
                   
               </div>
</div>
  <div class="container" style="margin-top:30px">
   <div class="col-md-12">
     <?php foreach($anunturi as $anunt): ?>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px">
         <div class="border_anunt">
         <div class="image-wrapper">
          <img src="<?=base_url();?>uploads/<?=$anunt->path;?>" width="100%" height="150px">
          <div class="image-title"><?=$anunt->price;?>$</div>
         </div>
          <div class="data_anunt">
              <div>
                  <div class="text_data">Type:</div> 
                  <div class=""><?=$anunt->type;?></div>
              </div>
              <div class="clear"></div>
              <div>
                  <div class="text_data">Adress:</div>
                  <div class=""><?=$anunt->country;?>, <?=$anunt->county;?>, <?=$anunt->city;?></div> 
              </div>
              <div class="clear"></div>
              <div>
                  <div class="text_data">Details:</div> 
                  <div class=""><?=$anunt->details;?></div>
              </div>
              <div class="clear"></div>
              <div >
                  <div class="text_data">Price:</div> 
                  <div class=""><?=$anunt->price;?>$</div>
              </div>
            </div>
          
          <div class="clear"></div>
          
          <div class="buton_view text-center"><a class="text_buton ">View</a></div>
      </div>
       </div>
       <?php endforeach ;?>
   </div>
    <?=$this->pagination->create_links();?>
</div>
</div>
       
       
        
    
  