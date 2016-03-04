<div class="background">

<div id="real_estate_wrapper">
    <form id="fileupload" action="<?=base_url();?>anunt/add" method="POST" enctype="multipart/form-data">
        
            <div class="button"  ><div class="button_input" ><input class="hideradio" id='radio_sell' type="radio" name="real_estate_type" value="sell"><label for='radio_sell' class="label1">Sell</label></div></div> 
            <div class="button" ><div class="button_input"><input class="hideradio" id='radio_buy' type="radio" name="real_estate_type" value="buy"><label for='radio_buy' class="label1">Buy</label></div></div> 
            <div class="button" ><div class="button_input"><input class="hideradio" id='radio_offerrent' type="radio" name="real_estate_type" value="offer rent" ><label for='radio_offerrent' class="label1">Offer for rent</label></div></div>
            <div class="button" ><div class="button_input"><input class="hideradio" id='radio_lookrent' type="radio" value="search rent" name="real_estate_type" ><label for='radio_lookrent' class="label1">Looking for rent</label></div></div>
            <div class="clear"></div>
        <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
         <div class="input">
            <label>
            <div class="text">Type: </div>
            <div> 
                <select class="inputs"  name="type" id='type'>
                    <option value='studio'>Studio</option>
                    <option value='apartment'>Apartment</option>
                    <option value='house'>House</option>
                    <option value='villa'>Villa</option>
                    <option value='office'>Office</option>
                    <option value='comercial_space'>Commercial space</option>
                    <option value='industrial_space'>Industrial space</option>
                    <option value='land'>Land</option>
                </select>
            </div>
            </label>
        </div>
            
		<div class="input" id='subdivision1'>
            <label>
            <div class="text">Subdivision: </div>
            <div> 
                <select class="inputs"  name="subdivision" >
                    <option value='no_separate'>No separate rooms</option>
                    <option value='partly_separated'>Partly separated</option>
                    <option value='separate'>Separate rooms</option>
                    <option value='roundly'>Roundly</option>
                    <option value='wagon'>Wagon</option>
                </select>
            </div>
            </label>
        </div>
            
        <div class="input" id='subdivision2'>
            <label>
            <div class="text">Subdivision: </div>
            <div> 
                <select class="inputs"  name="subdivision_land" >
                    <option value='construction_land'>Construction land</option>
                    <option value='agricol_land'>Agricol land</option>
                    <option value='others'>Others</option>
                </select>
            </div>
            </label>
        </div>
            
        <div class="input" id='classification'>
            <label>
            <div class="text">Classification: </div>
            <div> 
                <select class="inputs"  name="classification_land" >
                    <option value='in_town'>In town</option>
                    <option value='outside_town'>Outside town</option>
                </select>
            </div>
            </label>
        </div>
        <div class="input" id='bathrooms'>
            <label>
            <div class="text">Bathrooms: </div>
            <div> <input class="inputs" type="number" name="bathrooms" placeholder="Number of bathrooms" id="bathrooms" min="0" max="10" step="1" value=<?=@$bathrooms ?>></div></label>
        </div>
            
        <div class="input" id='rooms'>
            <label>
            <div class="text">Rooms: </div>
            <div> <input class="inputs" type="number" name="rooms" placeholder="Number of rooms" id="rooms" min="0" max="100" step="1" value=<?=@$rooms ?>></div></label>
        </div>
            
        <div class="input" id='levels'>
            <label>
            <div class="text">Levels: </div>
            <div> <input class="inputs" type="number" name="levels" placeholder="Number of levels" id="levels" min="0" max="100" step="1" value=<?=@$levels ?>></div></label>
        </div>
        <hr>
        
        <div class="input" id='comfort'>
            <label>
            <div class="text">Comfort: </div>
            <div> 
                <select class="inputs"  name="comfort" >
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='lux'>lux</option>
                    <option value='none'>-</option>
                </select>
            </div>
            </label>
        </div>
        
        <div class="input" id='floor'>
            <label>
            <div class="text">Floor: </div>
            <div> 
                <select class="inputs"  name="floor" >
                    <option value='basement'>basement</option>
                    <option value='semi_basement'>semi-basement</option>
                    <option value='ground_floor'>ground floor</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                </select>
            </div>
            </label>
        </div>
        <hr id='1'>
        
        <div class="input">
            <label>
            <div class="text">Surface(mp): </div>
            <div> <input class="inputs" type="text" name="surface" placeholder="Enter the surface" id="surface" value=<?=@$surface ?>></div></label>
        </div>
        
        <div class="input" id='usable_surface'>
            <label>
            <div class="text">Usable surface(mp): </div>
            <div> <input class="inputs" type="text" name="usable_surface" placeholder="Enter usable surface" id="usable_surface" value=<?=@$usable_surface ?>></div></label>
        </div>
        
        <div class="input" id='land_surface'>
            <label>
            <div class="text">Land surface(mp): </div>
            <div> <input class="inputs" type="text" name="land_surface" placeholder="Enter land surface" id="land_surface" value=<?=@$land_surface ?>></div></label>
        </div>
        <hr>
        
        <div id='section5'>
        <div class="input">
            <label><input class="radiobut" type="checkbox" name="extra_floors" value="basement" >basement</label>
            <label><input class="radiobut" type="checkbox" name="extra_floors" value="semi-basement" >semi-basement</label>
            <label><input class="radiobut" type="checkbox" name="extra_floors" value="ground floor">ground floor</label>
            <label><input class="radiobut" type="checkbox" name="extra_floors" value="attic">attic</label>
        </div>
        <hr>
        </div>
        
        <div class="input" id='construction_year'>
            <div class="text">Construction year: </div>
            <div> <input class="inputs" type="text" name="construction_year" placeholder="Enter construction year" id="construction_year" value=<?=@$construction_year ?>></div>
        </div>
        <hr id='2'>
        
        <div class="input">
            <div class="text">Price($): </div>
            <div> <input class="inputs" placeholder="Enter the price" id="price" type="text" name="price"  value=<?=@$price ?>></div>
        </div>
        
        <hr>
        
        <div class="input">
            <div class="text">Country: </div>
            <div> <input class="inputs" type="text" name="country" placeholder="Enter the country" id="country" value=<?=@$country ?>></div>
        </div>
        
        <div class="input">
            <div class="text">County: </div>
            <div> <input class="inputs" placeholder="Enter the county" id="county" type="text" name="county" value=<?=@$county ?>></div>
        </div>
        
        <div class="input ">
            <div class="text">City: </div>
            <div> <input class="inputs" placeholder="Enter the city" id="city" type="text" name="city" value=<?=@$city ?>></div>
        </div>
        <hr>
        
        <div class="clear"></div>
        <div class="textar">
            <div class="text">Details: </div>
            <div> <textarea class="textarea" placeholder="Enter in here some extra details you want about the property..."  name="details" cols="4" value=<?=@$details ?>></textarea></div>
            <div class="clear"></div>
        </div>
        <hr>
        
<!--           FILE UPLOAD -->
        <?php require_once('upload.php'); ?>
<!--           FILE UPLOAD -->
        
        <div class="clear"></div>
       <div class="submit_button"> <input class="submit"  type="submit" name="submit" onClick="chgAction()" value="Submit"></div>

        <div class="clear"></div>
        
    </form>
    <div class="clear"></div>
</div>
    <div class="clear"></div>
</div>
<div class="clear"></div>

