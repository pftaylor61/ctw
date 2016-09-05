<style type="text/css">
    #wpbs_slider{
        -webkit-border-top-right-radius: 6px;
        -webkit-border-bottom-right-radius: 6px;
        -moz-border-radius-topright: 6px;
        -moz-border-radius-bottomright: 6px;
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px;
        position: <?php if($sticky=="yes")echo "fixed";else echo "absolute";?>;
        top:<?php echo ($spos);?>px;
        left:-<?php echo $width;?>px;
        width:<?php echo ($width+$icon_box_width);?>px;
        height:<?php echo ($icon_box_height);?>px;       
        background: <?php echo $bg;?> url('<?php echo $icon_url;?>') center no-repeat;
        background-size: <?php echo ($icon_box_height-10);?>px <?php echo ($icon_box_height-10);?>px;
        background-position: <?php echo ($width+$icon_box_width-$icon_box_height+5);?>px 5px;
        cursor: pointer;
        z-index:999999;                                                       
    }
     
    .icon_label{                
       color: <?php echo $label_color;?>;
       float: right;
       position:relative;
       font-size: 12pt; 
       font-weight: bold;
       width: <?php echo $icon_box_width;?>px;       
       height: <?php echo $icon_box_height;?>px;       
    }
    .wpbs_handle{
       padding: 5px;
       line-height: <?php echo $icon_box_height-10;?>px;
       color: <?php echo $text_color;?>;
    }
    
    #wpbs__cont .widgettitle{
        font-size: 1.4rem;
        line-height: 1.2857;
        margin-bottom: 0.375rem;
    }
    #wpbs__cont{
        color:<?php echo $text_color;?>;
    }
    .widgetcont{
        padding: 10px;
        font-size:0.9rem;
    }
</style>