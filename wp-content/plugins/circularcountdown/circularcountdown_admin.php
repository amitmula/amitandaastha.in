<?php
	$task = isset($_REQUEST["task"]) ? $_REQUEST["task"] : null;
	switch (strtolower($task)) {
		case "update":
			CircularCountdownGlobals::updateOptions();
			break;
	}
	
	$circularcountdown_options = CircularCountdownGlobals::getOptions();
?>

<div id="circularcountdown_general">
    <h2><i class="icon-cog"></i> <?php _e("Circular Countdown",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></h2>
    
	<form id="circularcountdown_form" action="?page=<?php echo $plugin_page; ?>" method="post">
		<input type="hidden" name="task" value="update" />
	
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("General",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>						
			
			<div class="block first">
				<div class="field">	
					<label for="startDate"><?php _e("Start Date",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="startDate" name="startDate" class="regular-text date" type="text" value="<?php echo $circularcountdown_options["startdate"]; ?>" />	
				</div>
				
				<div class="field">
					<label for="endDate"><?php _e("End Date",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="endDate" name="endDate" class="regular-text date" type="text" value="<?php echo $circularcountdown_options["enddate"]; ?>" />
				</div>
				
				<div class="field">
					<label for="timeZone"><?php _e("Time Zone",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="timeZone" name="timeZone" class="small-text" type="text" value="<?php echo $circularcountdown_options["timezone"]; ?>" />
				</div>
				
				<div class="field clearfix">
					<label for="past"><?php _e("Count Up (Past)",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input type="checkbox" id="past" name="past" value="<?php echo $circularcountdown_options["past"]; ?>" class="iphone_checkboxes"
					<?php if ($circularcountdown_options["past"]=="true") {echo 'checked="checked"';} ?> />
				</div>
				
				<div class="field">
					<label for="margin"><?php _e("Margin Between Circles",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="margin" name="margin" class="small-text" type="text" value="<?php echo $circularcountdown_options["margin"]; ?>" />
					<span class="unit">px</span>
				</div>
				
				<div class="field">
					<label for="onFinish"><?php _e("Callback Function",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<textarea id="onFinish" name="onFinish" class="regular-text"><?php echo $circularcountdown_options["onfinish"]; ?></textarea>
				</div>
			</div>			
			
		</div>
		
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("Show/Hide Timers",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>			
			
			<div class="block">
				<div class="field clearfix">
					<label for="showDay"><?php _e("Show Days",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input type="checkbox" id="showDay" name="showDay" value="<?php echo $circularcountdown_options["showday"]; ?>" class="iphone_checkboxes"
					<?php if ($circularcountdown_options["showday"]=="true") {echo 'checked="checked"';} ?> />
				</div>
				
				<div class="field clearfix">
					<label for="showHour"><?php _e("Show Hours",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input type="checkbox" id="showHour" name="showHour" value="<?php echo $circularcountdown_options["showhour"]; ?>" class="iphone_checkboxes"
					<?php if ($circularcountdown_options["showhour"]=="true") {echo 'checked="checked"';} ?> />
				</div>
				
				<div class="field clearfix">
					<label for="showMinute"><?php _e("Show Minutes",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input type="checkbox" id="showMinute" name="showMinute" value="<?php echo $circularcountdown_options["showminute"]; ?>" class="iphone_checkboxes"
					<?php if ($circularcountdown_options["showminute"]=="true") {echo 'checked="checked"';} ?> />
				</div>
				
				<div class="field clearfix">
					<label for="showSecond"><?php _e("Show Seconds",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input type="checkbox" id="showSecond" name="showSecond" value="<?php echo $circularcountdown_options["showsecond"]; ?>" class="iphone_checkboxes"
					<?php if ($circularcountdown_options["showsecond"]=="true") {echo 'checked="checked"';} ?> />
				</div>
				
				<div class="separator"></div>   
				
				<div class="field">
					<label for="dayDiameter"><?php _e("Days Diameter",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="dayDiameter" name="dayDiameter" class="small-text" type="text" value="<?php echo $circularcountdown_options["daydiameter"]; ?>" />
					<span class="unit">px</span>
				</div>
				
				<div class="field">
					<label for="hourDiameter"><?php _e("Hours Diameter",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="hourDiameter" name="hourDiameter" class="small-text" type="text" value="<?php echo $circularcountdown_options["hourdiameter"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="minuteDiameter"><?php _e("Minutes Diameter",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="minuteDiameter" name="minuteDiameter" class="small-text" type="text" value="<?php echo $circularcountdown_options["minutediameter"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="secondDiameter"><?php _e("Seconds Diameter",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="secondDiameter" name="secondDiameter" class="small-text" type="text" value="<?php echo $circularcountdown_options["seconddiameter"]; ?>" />
					<span class="unit">px</span>
				</div>		
			</div>
			
		</div>
		
		<div class="clear"></div>   
		
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("Background Width",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>						
			
			<div class="block">
				<div class="field">
					<label for="dayBgWidth"><?php _e("Days Background Width",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="dayBgWidth" name="dayBgWidth" class="small-text" type="text" value="<?php echo $circularcountdown_options["daybgwidth"]; ?>" />
					<span class="unit">px</span>
				</div>
				
				<div class="field">
					<label for="hourBgWidth"><?php _e("Hours Background Width",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="hourBgWidth" name="hourBgWidth" class="small-text" type="text" value="<?php echo $circularcountdown_options["hourbgwidth"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="minuteBgWidth"><?php _e("Minutes Background Width",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="minuteBgWidth" name="minuteBgWidth" class="small-text" type="text" value="<?php echo $circularcountdown_options["minutebgwidth"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="secondBgWidth"><?php _e("Seconds Background Width",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="secondBgWidth" name="secondBgWidth" class="small-text" type="text" value="<?php echo $circularcountdown_options["secondbgwidth"]; ?>" />
					<span class="unit">px</span>
				</div>		
			</div>			
			
		</div>
		
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("Circles Width",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>						
			
			<div class="block">
				<div class="field">
					<label for="dayCircleWidth"><?php _e("Days Circle Width",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="dayCircleWidth" name="dayCircleWidth" class="small-text" type="text" value="<?php echo $circularcountdown_options["daycirclewidth"]; ?>" />
					<span class="unit">px</span>
				</div>
				
				<div class="field">
					<label for="hourCircleWidth"><?php _e("Hours Circle Width",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="hourCircleWidth" name="hourCircleWidth" class="small-text" type="text" value="<?php echo $circularcountdown_options["hourcirclewidth"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="minuteCircleWidth"><?php _e("Minutes Circle Width",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="minuteCircleWidth" name="minuteCircleWidth" class="small-text" type="text" value="<?php echo $circularcountdown_options["minutecirclewidth"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="secondCircleWidth"><?php _e("Seconds Circle Width",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="secondCircleWidth" name="secondCircleWidth" class="small-text" type="text" value="<?php echo $circularcountdown_options["secondcirclewidth"]; ?>" />
					<span class="unit">px</span>
				</div>		
			</div>			
			
		</div>
		
		<div class="clear"></div> 
		
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("Background Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>						
			
			<div class="block">
				<div class="field">
					<label for="dayBgColor"><?php _e("Days Background Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="dayBgColor" name="dayBgColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["daybgcolor"]; ?>" />
					<div id="dayBgColor_bg" class="colorpicker_bg"
						onclick="jQuery('#dayBgColor').click()"
						<?php if ($circularcountdown_options["daybgcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["daybgcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="hourBgColor"><?php _e("Hours Background Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="hourBgColor" name="hourBgColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["hourbgcolor"]; ?>" />
					<div id="hourBgColor_bg" class="colorpicker_bg"
						onclick="jQuery('#hourBgColor').click()"
						<?php if ($circularcountdown_options["hourbgcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["hourbgcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="minuteBgColor"><?php _e("Minutes Background Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="minuteBgColor" name="minuteBgColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["minutebgcolor"]; ?>" />
					<div id="minuteBgColor_bg" class="colorpicker_bg"
						onclick="jQuery('#minuteBgColor').click()"
						<?php if ($circularcountdown_options["minutebgcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["minutebgcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="secondBgColor"><?php _e("Seconds Background Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="secondBgColor" name="secondBgColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["secondbgcolor"]; ?>" />
					<div id="secondBgColor_bg" class="colorpicker_bg"
						onclick="jQuery('#secondBgColor').click()"
						<?php if ($circularcountdown_options["secondbgcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["secondbgcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
			</div>			
			
		</div>
		
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("Circles Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>						
			
			<div class="block">
				<div class="field">
					<label for="dayCircleColor"><?php _e("Days Circle Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="dayCircleColor" name="dayCircleColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["daycirclecolor"]; ?>" />
					<div id="dayCircleColor_bg" class="colorpicker_bg"
						onclick="jQuery('#dayCircleColor').click()"
						<?php if ($circularcountdown_options["daycirclecolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["daycirclecolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="hourCircleColor"><?php _e("Hours Circle Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="hourCircleColor" name="hourCircleColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["hourcirclecolor"]; ?>" />
					<div id="hourCircleColor_bg" class="colorpicker_bg"
						onclick="jQuery('#hourCircleColor').click()"
						<?php if ($circularcountdown_options["hourcirclecolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["hourcirclecolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="minuteCircleColor"><?php _e("Minutes Circle Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="minuteCircleColor" name="minuteCircleColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["minutecirclecolor"]; ?>" />
					<div id="minuteCircleColor_bg" class="colorpicker_bg"
						onclick="jQuery('#minuteCircleColor').click()"
						<?php if ($circularcountdown_options["minutecirclecolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["minutecirclecolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="secondCircleColor"><?php _e("Seconds Circle Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="secondCircleColor" name="secondCircleColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["secondcirclecolor"]; ?>" />
					<div id="secondCircleColor_bg" class="colorpicker_bg"
						onclick="jQuery('#secondCircleColor').click()"
						<?php if ($circularcountdown_options["secondcirclecolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["secondcirclecolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
			</div>			
			
		</div>
		
		<div class="clear"></div>
		
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("Counter Text Size",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>			
			
			<div class="block">
				<div class="field">
					<label for="dayCounterFontSize"><?php _e("Days Counter Font Size",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="dayCounterFontSize" name="dayCounterFontSize" class="small-text" type="text" value="<?php echo $circularcountdown_options["daycounterfontsize"]; ?>" />
					<span class="unit">px</span>
				</div>
				
				<div class="field">
					<label for="hourCounterFontSize"><?php _e("Hours Counter Font Size",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="hourCounterFontSize" name="hourCounterFontSize" class="small-text" type="text" value="<?php echo $circularcountdown_options["hourcounterfontsize"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="minuteCounterFontSize"><?php _e("Minutes Counter Font Size",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="minuteCounterFontSize" name="minuteCounterFontSize" class="small-text" type="text" value="<?php echo $circularcountdown_options["minutecounterfontsize"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="secondCounterFontSize"><?php _e("Seconds Counter Font Size",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="secondCounterFontSize" name="secondCounterFontSize" class="small-text" type="text" value="<?php echo $circularcountdown_options["secondcounterfontsize"]; ?>" />
					<span class="unit">px</span>
				</div>		
			</div>
			
		</div>
		
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("Text Size",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>			
			
			<div class="block">
				<div class="field">
					<label for="dayTextFontSize"><?php _e("Days Font Size",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="dayTextFontSize" name="dayTextFontSize" class="small-text" type="text" value="<?php echo $circularcountdown_options["daytextfontsize"]; ?>" />
					<span class="unit">px</span>
				</div>
				
				<div class="field">
					<label for="hourTextFontSize"><?php _e("Hours Font Size",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="hourTextFontSize" name="hourTextFontSize" class="small-text" type="text" value="<?php echo $circularcountdown_options["hourtextfontsize"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="minuteTextFontSize"><?php _e("Minutes Font Size",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="minuteTextFontSize" name="minuteTextFontSize" class="small-text" type="text" value="<?php echo $circularcountdown_options["minutetextfontsize"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="secondTextFontSize"><?php _e("Seconds Font Size",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="secondTextFontSize" name="secondTextFontSize" class="small-text" type="text" value="<?php echo $circularcountdown_options["secondtextfontsize"]; ?>" />
					<span class="unit">px</span>
				</div>		
			</div>
			
		</div>
		
		<div class="clear"></div>
		
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("Counter Text Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>						
			
			<div class="block">
				<div class="field">
					<label for="dayCounterFontColor"><?php _e("Days Counter Font Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="dayCounterFontColor" name="dayCounterFontColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["daycounterfontcolor"]; ?>" />
					<div id="dayCounterFontColor_bg" class="colorpicker_bg"
						onclick="jQuery('#dayCounterFontColor').click()"
						<?php if ($circularcountdown_options["daycounterfontcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["daycounterfontcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="hourCounterFontColor"><?php _e("Hours Counter Font Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="hourCounterFontColor" name="hourCounterFontColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["hourcounterfontcolor"]; ?>" />
					<div id="hourCounterFontColor_bg" class="colorpicker_bg"
						onclick="jQuery('#hourCounterFontColor').click()"
						<?php if ($circularcountdown_options["hourcounterfontcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["hourcounterfontcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="minuteCounterFontColor"><?php _e("Minutes Counter Font Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="minuteCounterFontColor" name="minuteCounterFontColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["minutecounterfontcolor"]; ?>" />
					<div id="minuteCounterFontColor_bg" class="colorpicker_bg"
						onclick="jQuery('#minuteCounterFontColor').click()"
						<?php if ($circularcountdown_options["minutecounterfontcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["minutecounterfontcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="secondCounterFontColor"><?php _e("Seconds Counter Font Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="secondCounterFontColor" name="secondCounterFontColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["secondcounterfontcolor"]; ?>" />
					<div id="secondCounterFontColor_bg" class="colorpicker_bg"
						onclick="jQuery('#secondCounterFontColor').click()"
						<?php if ($circularcountdown_options["secondcounterfontcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["secondcounterfontcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
			</div>			
			
		</div>
		
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("Text Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>						
			
			<div class="block">
				<div class="field">
					<label for="dayTextFontColor"><?php _e("Days Text Font Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="dayTextFontColor" name="dayTextFontColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["daytextfontcolor"]; ?>" />
					<div id="dayTextFontColor_bg" class="colorpicker_bg"
						onclick="jQuery('#dayTextFontColor').click()"
						<?php if ($circularcountdown_options["daytextfontcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["daytextfontcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="hourTextFontColor"><?php _e("Hours Text Font Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="hourTextFontColor" name="hourTextFontColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["hourtextfontcolor"]; ?>" />
					<div id="hourTextFontColor_bg" class="colorpicker_bg"
						onclick="jQuery('#hourTextFontColor').click()"
						<?php if ($circularcountdown_options["hourtextfontcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["hourtextfontcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="minuteTextFontColor"><?php _e("Minutes Text Font Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="minuteTextFontColor" name="minuteTextFontColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["minutetextfontcolor"]; ?>" />
					<div id="minuteTextFontColor_bg" class="colorpicker_bg"
						onclick="jQuery('#minuteTextFontColor').click()"
						<?php if ($circularcountdown_options["minutetextfontcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["minutetextfontcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
				
				<div class="field">
					<label for="secondTextFontColor"><?php _e("Seconds Text Font Color",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="secondTextFontColor" name="secondTextFontColor" class="medium-text color_picker" type="text" value="<?php echo $circularcountdown_options["secondtextfontcolor"]; ?>" />
					<div id="secondTextFontColor_bg" class="colorpicker_bg"
						onclick="jQuery('#secondTextFontColor').click()"
						<?php if ($circularcountdown_options["secondtextfontcolor"]!="") {?>
							style="background-color:<?php echo $circularcountdown_options["secondtextfontcolor"]; ?>"
						<?php }?>
					>&nbsp;</div>
				</div>
			</div>			
			
		</div>
		
		<div class="clear"></div>   
		
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("Texts",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>						
			
			<div class="block">
				<div class="field">
					<label for="dayText"><?php _e("Days Text",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="dayText" name="dayText" class="regular-text" type="text" value="<?php echo $circularcountdown_options["daytext"]; ?>" />
				</div>
				
				<div class="field">
					<label for="hourText"><?php _e("Hours Text",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="hourText" name="hourText" class="regular-text" type="text" value="<?php echo $circularcountdown_options["hourtext"]; ?>" />
				</div>	
				
				<div class="field">
					<label for="minuteText"><?php _e("Minutes Text",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="minuteText" name="minuteText" class="regular-text" type="text" value="<?php echo $circularcountdown_options["minutetext"]; ?>" />
				</div>	
				
				<div class="field">
					<label for="secondText"><?php _e("Seconds Text",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="secondText" name="secondText" class="regular-text" type="text" value="<?php echo $circularcountdown_options["secondtext"]; ?>" />
				</div>		
			</div>			
			
		</div>
		
		<div class="postbox unite-postbox">
			<h3 class="box-closed">
				<span><?php _e("Texts Top Margin",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></span>
			</h3>			
			
			<div class="block">
				<div class="field">
					<label for="dayTextMarginTop"><?php _e("Days Text Top Margin",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="dayTextMarginTop" name="dayTextMarginTop" class="small-text" type="text" value="<?php echo $circularcountdown_options["daytextmargintop"]; ?>" />
					<span class="unit">px</span>
				</div>
				
				<div class="field">
					<label for="hourTextMarginTop"><?php _e("Hours Text Top Margin",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="hourTextMarginTop" name="hourTextMarginTop" class="small-text" type="text" value="<?php echo $circularcountdown_options["hourtextmargintop"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="minuteTextMarginTop"><?php _e("Minutes Text Top Margin",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="minuteTextMarginTop" name="minuteTextMarginTop" class="small-text" type="text" value="<?php echo $circularcountdown_options["minutetextmargintop"]; ?>" />
					<span class="unit">px</span>
				</div>	
				
				<div class="field">
					<label for="secondTextMarginTop"><?php _e("Seconds Text Top Margin",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></label>
					<input id="secondTextMarginTop" name="secondTextMarginTop" class="small-text" type="text" value="<?php echo $circularcountdown_options["secondtextmargintop"]; ?>" />
					<span class="unit">px</span>
				</div>		
			</div>
			
		</div>
		
		<div id="theshortcode">
			<p><strong><?php _e("Generated Shortcode",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></strong></p>
			<textarea class="regular-text"></textarea>
			<div class="clear"></div>
		</div>
		
		<div class="buttons">
			<a class="button-primary btn-green circularcountdown_save"><i class="icon-cog"></i> <?php _e("Save Changes",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></a>			
			<a class="button-primary btn-blue circularcountdown_generate"><i class="icon-pencil"></i> <?php _e("Generate Shortcode",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></a>			
			<a class="button-primary btn-yellow circularcountdown_cancel" href="?page=<?php echo $plugin_page; ?>"><i class="icon-cancel"></i> <?php _e("Cancel",CIRCULARCOUNTDOWN_TEXTDOMAIN)?></a>
		</div>
	
	</form>
    
</div>