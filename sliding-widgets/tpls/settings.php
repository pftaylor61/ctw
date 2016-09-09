<?php
    $wssopt = get_option('wpbs_opt',array());
    extract($wssopt);
    
?>
   
<div class="wrap">
    <h2>Sliding Widgets</h2> 
     
    <br>
    <div style="clear: both;"></div>
    <div style="float: left;">
    <form action="" method="post" id="wptb">
        <input type="hidden" name="action" value="wpsw_save_settings">
        <div class="inside">
        <div class="boxdiv">

        <script type="text/javascript">
             jQuery(document).ready(function(){ 
                jQuery('#bg_colorbox').miniColors({
                            change: function(hex, rgb) {
                                jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                            }
                }); 

                jQuery('#label_colorbox').miniColors({
                            change: function(hex, rgb) {
                                jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                            }
                });

                jQuery('#text_colorbox').miniColors({
                            change: function(hex, rgb) {
                                jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                            }
                });
             }); 
        </script>
        <div class="sbox" id="box1">

        <div class="sbcont" id="sbcont-box1" >
        <table cellpadding="5" cellspacing="0" border="0" class="box_tbl">
        <tr>
            <td colspan="2">
            <label>Icon URL</label><br>
            <input type="text" name="wpbs__opt[icon_url]" value="<?php echo !empty($icon_url) ? $icon_url : ''; ?>" size="62" />
            <div><img src="<?php echo OCWSCTW_IU_DEFAULT; ?>" title="<?php echo OCWSCTW_IU; ?>" width="50" height="50" style="float: left;padding-right: 1.2rem;" /><p> (Default image: <?php echo OCWSCTW_IU; ?></p></div>
            </td>
        </tr>
        
        
        <tr>
            <td colspan="2">
            <label>Icon Label (You can keep it empty if you want)</label><br>
            <input type="text" name="wpbs__opt[icon_label]" value="<?php echo !empty($icon_label) ? $icon_label : ''; ?>" size="62" />
            </td>
        </tr>
        
        <tr>
            <td>
            <label>Control Box Width</label><br>
            <input type="text" name="wpbs__opt[icon_box_width]" value="<?php echo !empty($icon_box_width) ? $icon_box_width : OCWSCTW_IBWD; ?>" size="10" /> PX
            </td>
            <td>
            <label>Control Box Height</label><br>
            <input type="text" name="wpbs__opt[icon_box_height]" value="<?php echo !empty($icon_box_height) ? $icon_box_height : OCWSCTW_IBHT; ?>" size="10" /> PX
            </td>
        </tr>
        <tr>
            <td>
            <label>Position</label><br>
            <select class="ps" rel="box1" name="wpbs__opt[position]">
            <option value="left" <?php if(!empty($position) && $position == "left") echo 'selected="selected"';?>>Left</option>
            <option value="right" <?php if(!empty($position) && $position == "right") echo 'selected="selected"';?>>Right</option>
            <option value="top" <?php if(!empty($position) && $position == "top") echo 'selected="selected"';?>>Top</option>
            <option value="bottom" <?php if(!empty($position) && $position == "bottom") echo 'selected="selected"';?>>Bottom</option>
            </select>
            </td>
            <td>
            <label id="spos_box1"><?php if(!empty($position) && ($position=="left" || position=="right")) echo "Distance from Top";else echo "Distance from Left";?></label><br>
            <input type="text" name="wpbs__opt[spos]" value="<?php if(!empty($spos))echo $spos;else echo "50"; ?>" size="10" /> PX
            </td>
        </tr>
        <tr>
            <td>
            <label>Sticky</label><br>
            <select name="wpbs__opt[sticky]" style="width: 70px;">
                <option value="yes" <?php if(!empty($sticky) && $sticky == "yes") echo 'selected="selected"';?>>Yes</option>
            <option value="no" <?php if(!empty($sticky) && $sticky == "no") echo 'selected="selected"';?>>No</option>
            </select>
            </td>
            <td>
            <label>Background Color</label><br>
            <input type="text" id="bg_colorbox" name="wpbs__opt[bg]" value="<?php echo !empty($bg) ? $bg : ''; ?>" size="10" /><br />
            <p>(Default background color <span style="background-color:<?php echo OCWSCTW_BGCOL; ?>; border:black solid;"><?php echo OCWSCTW_BGCOL; ?></span>)</p>
            <label>Text Color</label><br>
            <input type="text" id="text_colorbox" name="wpbs__opt[text_color]" value="<?php echo !empty($text_color) ? $text_color : ''; ?>" size="10" />
            <p>(Default text color <span style="color:<?php echo OCWSCTW_TXTCOL; ?>; border:black solid;"><?php echo OCWSCTW_TXTCOL; ?></span>)</p>
            </td>
        </tr>
        <tr>
            <td>
            <label>Box Width</label><br>
            <input type="text" name="wpbs__opt[width]" value="<?php echo !empty($width) ? $width : ''; ?>" size="10" /> PX
            </td>
            <td>
            <label>Box Height</label><br>
            <input type="text" name="wpbs__opt[height]" value="<?php echo !empty($height) ? $height : ''; ?>" size="10" /> PX
            </td>
        </tr>
        
        <tr>
            <td colspan="2">
                <input type="checkbox" name="wpbs__opt[disable]" value="1" <?php if(!empty($disable) && $disable == 1)echo 'checked="checked"'; else echo '';?>> Disable/Hide
            </td>
        </tr>
        </table>

        <div style="clear: both;">&nbsp;</div>
        </div>     
        </div>
        </div>
        <br>

        <input type="submit" id="btn" class="button-primary" value="Save Settings"> 
        <span id="loading" style="display: none;"><img src="images/loading.gif" alt=""> Saving...</span><br /><br />
        </div>  
        
        <br clear="all" />
        <br clear="all" />
    
    </form>  
    </div>
    
    <div  style="float: left;width: 350px;margin-left: 30px;">
        <div id="ocws_wpsw_credit" class="ocws_wpsw_credit_style">
            <img src="<?php echo OCWSCTW_SCRSM; ?>" style="margin-right:auto; margin-left:auto; width:300px;" />
            <h2>Sliding Widget Instructions</h2>
            <p>This panel has been created, to give some specific instructions regarding Sliding Widgets. The options featured to the left of this panel must be set separately from the main theme options.</p>
            <p>Some boxes have default values labeled, which will be used, if the box is left empty.</p>
            <h2>Sliding Widget Credit</h2>
            <p>The code for the sliding widget sections has been recycled from the Sliding Widget plugin, available from <a href="http://www.wpeden.com" target="_blank">WPEden</a></p>
        </div><!-- end /ocws_wpsw_credit -->
        
        
        <div style="clear: both;"></div>
    </div>
    <br>
    <br>
</div>
    
<br clear="all" />
<br clear="all" />
    
<script>

    window.onload=changeps;
    function changeps(){
        if(jQuery('.ps').val()=="left"||jQuery('.ps').val()=="right"){
            jQuery('#spos').text("Top");
        }else{
            jQuery('#spos').text("Left");
        }
    }
    jQuery('.ps').live("change",function(){        
        if(jQuery(this).val()=="left"||jQuery(this).val()=="right"){
            jQuery('#spos_'+jQuery(this).attr("rel")).text("Distance from Top");
        }else{
            jQuery('#spos_'+jQuery(this).attr("rel")).text("Distance from Left");
        }        
    });

    jQuery('#wptb').submit(function(){
           jQuery(this).ajaxSubmit({
               'url': ajaxurl,
               'beforeSubmit':function(){
                   jQuery('#loading').fadeIn();
               },
               'success':function(res){
                   jQuery('#loading').fadeOut();
               }
           });
      return false;
      });

</script>