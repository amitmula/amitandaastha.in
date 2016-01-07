<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#<?php echo $uniqueId?>").circularCountdown({
			startDate:"<?php echo $options["startdate"]; ?>",
			endDate:"<?php echo $options["enddate"]; ?>",
			timeZone:<?php echo $options["timezone"]; ?>,
			past:<?php echo $options["past"]; ?>,
			
			//Show-hide day, hour, minute, second
			showDay:<?php echo $options["showday"]; ?>,
			showHour:<?php echo $options["showhour"]; ?>,
			showMinute:<?php echo $options["showminute"]; ?>,
			showSecond:<?php echo $options["showsecond"]; ?>,
			
			//Margin between circles
			margin:<?php echo $options["margin"]; ?>,
			
			//Diameters
			dayDiameter:<?php echo $options["daydiameter"]; ?>,
			hourDiameter:<?php echo $options["hourdiameter"]; ?>,
			minuteDiameter:<?php echo $options["minutediameter"]; ?>,
			secondDiameter:<?php echo $options["seconddiameter"]; ?>,
			
			//Circle BG width
			dayBgWidth:<?php echo $options["daybgwidth"]; ?>,
			hourBgWidth:<?php echo $options["hourbgwidth"]; ?>,
			minuteBgWidth:<?php echo $options["minutebgwidth"]; ?>,
			secondBgWidth:<?php echo $options["secondbgwidth"]; ?>,
			
			//Circle width
			dayCircleWidth:<?php echo $options["daycirclewidth"]; ?>,
			hourCircleWidth:<?php echo $options["hourcirclewidth"]; ?>,
			minuteCircleWidth:<?php echo $options["minutecirclewidth"]; ?>,
			secondCircleWidth:<?php echo $options["secondcirclewidth"]; ?>,
			
			//Circle BG color
			dayBgColor:"<?php echo $options["daybgcolor"]; ?>",
			hourBgColor:"<?php echo $options["hourbgcolor"]; ?>",
			minuteBgColor:"<?php echo $options["minutebgcolor"]; ?>",
			secondBgColor:"<?php echo $options["secondbgcolor"]; ?>",
			
			//Circle color
			dayCircleColor:"<?php echo $options["daycirclecolor"]; ?>",
			hourCircleColor:"<?php echo $options["hourcirclecolor"]; ?>",
			minuteCircleColor:"<?php echo $options["minutecirclecolor"]; ?>",
			secondCircleColor:"<?php echo $options["secondcirclecolor"]; ?>",
			
			//Counter font size
			dayCounterFontSize:<?php echo $options["daycounterfontsize"]; ?>,
			hourCounterFontSize:<?php echo $options["hourcounterfontsize"]; ?>,
			minuteCounterFontSize:<?php echo $options["minutecounterfontsize"]; ?>,
			secondCounterFontSize:<?php echo $options["secondcounterfontsize"]; ?>,
			
			//Text font size
			dayTextFontSize:<?php echo $options["daytextfontsize"]; ?>,
			hourTextFontSize:<?php echo $options["hourtextfontsize"]; ?>,
			minuteTextFontSize:<?php echo $options["minutetextfontsize"]; ?>,
			secondTextFontSize:<?php echo $options["secondtextfontsize"]; ?>,
			
			//Counter font color
			dayCounterFontColor:"<?php echo $options["daycounterfontcolor"]; ?>",
			hourCounterFontColor:"<?php echo $options["hourcounterfontcolor"]; ?>",
			minuteCounterFontColor:"<?php echo $options["minutecounterfontcolor"]; ?>",
			secondCounterFontColor:"<?php echo $options["secondcounterfontcolor"]; ?>",
			
			//Text font color
			dayTextFontColor:"<?php echo $options["daytextfontcolor"]; ?>",
			hourTextFontColor:"<?php echo $options["hourtextfontcolor"]; ?>",
			minuteTextFontColor:"<?php echo $options["minutetextfontcolor"]; ?>",
			secondTextFontColor:"<?php echo $options["secondtextfontcolor"]; ?>",
			
			//Texts
			dayText:"<?php echo $options["daytext"]; ?>",
			hourText:"<?php echo $options["hourtext"]; ?>",
			minuteText:"<?php echo $options["minutetext"]; ?>",
			secondText:"<?php echo $options["secondtext"]; ?>",
			
			//Texts top margin
			dayTextMarginTop:<?php echo $options["daytextmargintop"]; ?>,
			hourTextMarginTop:<?php echo $options["hourtextmargintop"]; ?>,
			minuteTextMarginTop:<?php echo $options["minutetextmargintop"]; ?>,
			secondTextMarginTop:<?php echo $options["secondtextmargintop"]; ?>,
			
			//Timer on finish function
			onFinish:<?php echo $options["onfinish"]; ?>
		});
	});
</script>

<div id="<?php echo $uniqueId?>"></div>