
function reverse_counter() {
	console.log("reached reverse_counter");
	d= new Date();
	jQuery(".preCounterContent").fadeOut(500, function() {
		jQuery(this).empty().html('<em><span>Happily married<br>since</span></em>').fadeIn(500);
	});
	counter = jQuery(".ccContainer > div");	
	jQuery(counter).empty();
	jQuery(counter).circularCountdown({
		startDate: "2016/02/17 20:00:00",
		endDate:"",
		timeZone:+5.5,
		past:true,

		//Show-hide day, hour, minute, second
		showDay:true,
		showHour:true,
		showMinute:true,
		showSecond:true,
		
		//Margin between circles
		margin:10,
		
		//Diameters
		dayDiameter:120,
		hourDiameter:120,
		minuteDiameter:120,
		secondDiameter:120,
		
		//Circle BG width
		dayBgWidth:20,
		hourBgWidth:20,
		minuteBgWidth:20,
		secondBgWidth:20,
		
		//Circle width
		dayCircleWidth:20,
		hourCircleWidth:20,
		minuteCircleWidth:20,
		secondCircleWidth:20,
		
		//Circle BG color
		dayBgColor:"#cccccc",
		hourBgColor:"#cccccc",
		minuteBgColor:"#cccccc",
		secondBgColor:"#cccccc",
		
		//Circle color
		dayCircleColor:"#f05f75",
		hourCircleColor:"#f05f75",
		minuteCircleColor:"#f05f75",
		secondCircleColor:"#f05f75",
		
		//Counter font size
		dayCounterFontSize:20,
		hourCounterFontSize:20,
		minuteCounterFontSize:20,
		secondCounterFontSize:20,
		
		//Text font size
		dayTextFontSize:11,
		hourTextFontSize:11,
		minuteTextFontSize:11,
		secondTextFontSize:11,
		
		//Counter font color
		dayCounterFontColor:"#333333",
		hourCounterFontColor:"#333333",
		minuteCounterFontColor:"#333333",
		secondCounterFontColor:"#333333",
		
		//Text font color
		dayTextFontColor:"#666666",
		hourTextFontColor:"#666666",
		minuteTextFontColor:"#666666",
		secondTextFontColor:"#666666",
		
		//Texts
		dayText:"DAYS",
		hourText:"HOURS",
		minuteText:"MINUTES",
		secondText:"SECONDS",
		
		//Texts top margin
		dayTextMarginTop:0,
		hourTextMarginTop:0,
		minuteTextMarginTop:0,
		secondTextMarginTop:0
	});
}