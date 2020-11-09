<?php if (!defined('FLUX_ROOT')) exit; ?>

<div>
	<div class="bannerT"><a href="<?php echo $this->url('main', 'index') ?>" onfocus="this.blur()"></a></div>
	<div class="kafrashopT">
		<div class="link"><a href="<?php echo $this->url('purchase', 'index') ?>" onfocus="this.blur()"></a></div>
    	<div class="blank"></div>
		<div class="itemscontainer">
            <div id="main2" style="position:relative;width:335px;height:100px;overflow:hidden;">
                <div style="position:absolute;width:335px;height:100px;clip:rect(0 335px 100px 0);left:0px;top:0px">
                <!-- <div id="first2" style="position: absolute; width: 335px; left: 0px; top: -30px; "><div class="itemcontainer"><div class="thumb"><a href="http://www.playragnarok.com/kafrashop/detail.aspx?i=261" onfocus="this.blur()"><img src="<?php echo $this->themePath('img/AdventurePack.jpg')?>" border="0"></a></div><div class="text">Enriched Eluniu...</div></div><div class="itemcontainer"><div class="thumb"><a href="http://www.playragnarok.com/kafrashop/detail.aspx?i=262" onfocus="this.blur()"><img src="<?php echo $this->themePath('img/AdventurePack.jpg')?>" border="0"></a></div><div class="text">Start your Jour...</div></div><div class="itemcontainer"><div class="thumb"><a href="http://www.playragnarok.com/kafrashop/detail.aspx?i=264" onfocus="this.blur()"><img src="<?php echo $this->themePath('img/AdventurePack.jpg')?>" border="0"></a></div><div class="text">Stunning Star E...</div></div></div> -->
                <!-- <div id="second2" style="position: absolute; width: 335px; left: 0px; top: 70px; visibility: visible; "><div class="itemcontainer"><div class="thumb"><a href="http://www.playragnarok.com/kafrashop/detail.aspx?i=195" onfocus="this.blur()"><img src="<?php echo $this->themePath('img/gym_pass.bmp')?>" border="0"></a></div><div class="text">Heavy Lifter Box</div></div><div class="itemcontainer"><div class="thumb"><a href="http://www.playragnarok.com/kafrashop/detail.aspx?i=203" onfocus="this.blur()"><img src="<?php echo $this->themePath('img/AdventurePack.jpg')?>" border="0"></a></div><div class="text">Job Battle Manu...</div></div><div class="itemcontainer"><div class="thumb"><a href="http://www.playragnarok.com/kafrashop/detail.aspx?i=247" onfocus="this.blur()"><img src="<?php echo $this->themePath('img/AdventurePack.jpg')?>" border="0"></a></div><div class="text">Omni Clothing Dye</div></div></div> -->
                </div>
            </div>
				<!--Item Mall Thumbnail -->
		</div>
    </div>
</div>

<div style="display:inline-block;">
	<div class="latestnews">
		<div class="top"></div>
		<div class="middle">
            <table id="ctl00_ContentPlaceHolder1_DataList1" cellspacing="0" border="0" style="border-collapse:collapse;">
	            <tbody>
    			<?php $content = file_get_contents(Flux::config('CMSNewsRSS')); ?>
			    <?php if($content):?>
    				<?php $i = 0; $xml = new SimpleXmlElement($content); ?>
				    <?php if(isset($xml) && isset($xml->channel)):?>
    					<?php foreach($xml->channel->item as $rssItem): ?>
						    <?php $i++; if($i <= 4):?>
								<?php $pubDate = date_create($rssItem->pubDate); ?>
                                <?php switch(rand(1,3)){
                                    case 1: $thumbimage = 'avatarThumb_01.png'; break;
                                    case 2: $thumbimage = 'avatarThumb_02.png'; break;
                                    case 3: $thumbimage = 'avatarThumb_06.png'; break;
                                } ?>
                    <tr>
	                    <td>
		                    <div class="news">
			                    <div class="thumb"><a id="ctl00_ContentPlaceHolder1_DataList1_ctl00_DetailLink2" onfocus="this.blur()" href="<?php echo $rssItem->link ?>"><img id="ctl00_ContentPlaceHolder1_DataList1_ctl00_Image3" src="<?php echo $this->themePath('img/'. $thumbimage)?>" style="border-width:0px;"></a></div>
                    			<div class="header">
    				                <div class="section"><img id="ctl00_ContentPlaceHolder1_DataList1_ctl00_CategoryImage" src="<?php echo $this->themePath('img/icon_events.gif')?>" style="border-width:0px;"></div>
                        			<div class="title"><a id="ctl00_ContentPlaceHolder1_DataList1_ctl00_HyperLink2" onfocus="this.blur()" href="<?php echo $rssItem->link ?>" style="text-decoration:none;"><span id="ctl00_ContentPlaceHolder1_DataList1_ctl00_Label3"><?php echo $rssItem->title ?></span></a></div>
                        			<div class="date"><?php echo date_format($pubDate, 'd/m/y'); ?></div>
		                        </div>
		                        <div class="summary">
			                        <div class="text"><?php echo $rssItem->description ?></div>
				                    <div class="more">
					                    <a id="ctl00_ContentPlaceHolder1_DataList1_ctl00_DetailLink" onfocus="this.blur()" href="<?php echo $rssItem->link ?>"><img id="ctl00_ContentPlaceHolder1_DataList1_ctl00_Image2" src="<?php echo $this->themePath('img/btn_more.png')?>" style="border-width:0px;"></a>
				                    </div>
			                    </div>
		                    </div>                        
	                    </td>
                    </tr>
					    	<?php endif ?>
					    <?php endforeach ?>
				    <?php endif ?>
			    <?php endif ?>
                    <tr>
		                <td> </td>
	                </tr>
                </tbody>
            </table>                        
		</div>
		<div class="bottom"></div>
    </div>
    <div class="display:block;">
    	<div class="facebook">
		    <div class="itemField">
    			<div id="likeboxFrame">
				    <iframe src="https://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FrAthena.org&width=298&connections=6&stream=false&header=false&height=160" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:298px; height:160px;" allowtransparency="true"></iframe>
			    </div>
		    </div>
	    </div>
	    <div class="wallpapers">
    		<a href="<?php echo $this->url('main', 'index') ?>" onfocus="this.blur()"></a>
        </div>
    </div>
</div>
