<div class="background_home">
   <div class="background_opacity"></div>
    <div class="section section_home_margin">
              <div class="container" >
               
               <form action='<?=base_url()?>anunt' method="get">
                <div class="row">
                    <div class="col-md-12" style="margin-top:100px">
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
                 <div class="col-md-12" style="margin-top:125px">
                  <div class="col-md-3" style="padding:0;margin:0">
                      <div class="type_anunt">
                          <div class="type_button_text">
                              <input class="hideradio" id='radio_sell' type="radio" name="type" value="sell">Sell
                          </div>                      
                      </div>
                  </div>
                  <div class="col-md-3" style="padding:0;margin:0">
                      <div class="type_anunt">
                        <div class="type_button_text">
                            <input class="hideradio" id='radio_buy' type="radio" name="type" value="buy">Buy
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3" style="padding:0;margin:0">
                      <div class="type_anunt">
                          <div class="type_button_text">
                              <input class="hideradio" id='radio_offer_rent' type="radio" name="type" value="offer_rent">Offer rent
                          </div>
                      </div>
                     </div>
                  <div class="col-md-3" style="padding:0;margin:0">
                      <div class="type_anunt">
                          <div class="type_button_text">
                              <input class="hideradio" id='radio_look_rent' type="radio" name="type" value="look_rent">Looking for rent
                          </div>
                      </div>
                     </div>
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
       
       
        
    
  