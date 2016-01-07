<?php
	class CircularCountdownGlobals {
	
		//Enqueues front-end javascripts
		public static function enqueueScripts() {			
			//Load CSS
			wp_enqueue_style('circularcountdown', plugins_url('css/circular-countdown.css', CIRCULARCOUNTDOWN_FILE));
			
			//Load JS
			wp_enqueue_script('circularcountdown', plugins_url('js/jquery.circular-countdown.js', CIRCULARCOUNTDOWN_FILE), array("jquery"));
		}
	
		//Get options
		public static function getOptions() {
			$options = array();
			
			$options["startdate"] = get_option("circularcountdown-startDate");
			$options["enddate"] = get_option("circularcountdown-endDate");
			$options["timezone"] = get_option("circularcountdown-timeZone");
			$options["past"] = get_option("circularcountdown-past");
			
			//Show-hide day, hour, minute, second
			$options["showday"] = get_option("circularcountdown-showDay");
			$options["showhour"] = get_option("circularcountdown-showHour");
			$options["showminute"] = get_option("circularcountdown-showMinute");
			$options["showsecond"] = get_option("circularcountdown-showSecond");
			
			//Margin between circles
			$options["margin"] = get_option("circularcountdown-margin");
			
			//Diameters
			$options["daydiameter"] = get_option("circularcountdown-dayDiameter");
			$options["hourdiameter"] = get_option("circularcountdown-hourDiameter");
			$options["minutediameter"] = get_option("circularcountdown-minuteDiameter");
			$options["seconddiameter"] = get_option("circularcountdown-secondDiameter");
			
			//Circle BG width
			$options["daybgwidth"] = get_option("circularcountdown-dayBgWidth");
			$options["hourbgwidth"] = get_option("circularcountdown-hourBgWidth");
			$options["minutebgwidth"] = get_option("circularcountdown-minuteBgWidth");
			$options["secondbgwidth"] = get_option("circularcountdown-secondBgWidth");
			
			//Circle width
			$options["daycirclewidth"] = get_option("circularcountdown-dayCircleWidth");
			$options["hourcirclewidth"] = get_option("circularcountdown-hourCircleWidth");
			$options["minutecirclewidth"] = get_option("circularcountdown-minuteCircleWidth");
			$options["secondcirclewidth"] = get_option("circularcountdown-secondCircleWidth");
			
			//Circle BG color
			$options["daybgcolor"] = get_option("circularcountdown-dayBgColor");
			$options["hourbgcolor"] = get_option("circularcountdown-hourBgColor");
			$options["minutebgcolor"] = get_option("circularcountdown-minuteBgColor");
			$options["secondbgcolor"] = get_option("circularcountdown-secondBgColor");
			
			//Circle color
			$options["daycirclecolor"] = get_option("circularcountdown-dayCircleColor");
			$options["hourcirclecolor"] = get_option("circularcountdown-hourCircleColor");
			$options["minutecirclecolor"] = get_option("circularcountdown-minuteCircleColor");
			$options["secondcirclecolor"] = get_option("circularcountdown-secondCircleColor");
			
			//Counter font size
			$options["daycounterfontsize"] = get_option("circularcountdown-dayCounterFontSize");
			$options["hourcounterfontsize"] = get_option("circularcountdown-hourCounterFontSize");
			$options["minutecounterfontsize"] = get_option("circularcountdown-minuteCounterFontSize");
			$options["secondcounterfontsize"] = get_option("circularcountdown-secondCounterFontSize");
			
			//Text font size
			$options["daytextfontsize"] = get_option("circularcountdown-dayTextFontSize");
			$options["hourtextfontsize"] = get_option("circularcountdown-hourTextFontSize");
			$options["minutetextfontsize"] = get_option("circularcountdown-minuteTextFontSize");
			$options["secondtextfontsize"] = get_option("circularcountdown-secondTextFontSize");
			
			//Counter font color
			$options["daycounterfontcolor"] = get_option("circularcountdown-dayCounterFontColor");
			$options["hourcounterfontcolor"] = get_option("circularcountdown-hourCounterFontColor");
			$options["minutecounterfontcolor"] = get_option("circularcountdown-minuteCounterFontColor");
			$options["secondcounterfontcolor"] = get_option("circularcountdown-secondCounterFontColor");
			
			//Text font color
			$options["daytextfontcolor"] = get_option("circularcountdown-dayTextFontColor");
			$options["hourtextfontcolor"] = get_option("circularcountdown-hourTextFontColor");
			$options["minutetextfontcolor"] = get_option("circularcountdown-minuteTextFontColor");
			$options["secondtextfontcolor"] = get_option("circularcountdown-secondTextFontColor");
			
			//Texts
			$options["daytext"] = get_option("circularcountdown-dayText");
			$options["hourtext"] = get_option("circularcountdown-hourText");
			$options["minutetext"] = get_option("circularcountdown-minuteText");
			$options["secondtext"] = get_option("circularcountdown-secondText");
			
			//Texts top margin
			$options["daytextmargintop"] = get_option("circularcountdown-dayTextMarginTop");
			$options["hourtextmargintop"] = get_option("circularcountdown-hourTextMarginTop");
			$options["minutetextmargintop"] = get_option("circularcountdown-minuteTextMarginTop");
			$options["secondtextmargintop"] = get_option("circularcountdown-secondTextMarginTop");
			
			//Timer on finish function
			$options["onfinish"] = get_option("circularcountdown-onFinish");
			
			return $options;
		}
	
		//Update options
		public static function updateOptions() {
			update_option("circularcountdown-startDate", $_POST["startDate"]);
			update_option("circularcountdown-endDate", $_POST["endDate"]);
			update_option("circularcountdown-timeZone", $_POST["timeZone"]);		
			update_option("circularcountdown-past", isset($_POST["past"]) ? "true" : "false");
			
			//Show-hide day, hour, minute, second
			update_option("circularcountdown-showDay", isset($_POST["showDay"]) ? "true" : "false");
			update_option("circularcountdown-showHour", isset($_POST["showHour"]) ? "true" : "false");
			update_option("circularcountdown-showMinute", isset($_POST["showMinute"]) ? "true" : "false");
			update_option("circularcountdown-showSecond", isset($_POST["showSecond"]) ? "true" : "false");
			
			//Margin between circles
			update_option("circularcountdown-margin", $_POST["margin"]);
			
			//Diameters
			update_option("circularcountdown-dayDiameter", $_POST["dayDiameter"]);
			update_option("circularcountdown-hourDiameter", $_POST["hourDiameter"]);
			update_option("circularcountdown-minuteDiameter", $_POST["minuteDiameter"]);
			update_option("circularcountdown-secondDiameter", $_POST["secondDiameter"]);
			
			//Circle BG width
			update_option("circularcountdown-dayBgWidth", $_POST["dayBgWidth"]);
			update_option("circularcountdown-hourBgWidth", $_POST["hourBgWidth"]);
			update_option("circularcountdown-minuteBgWidth", $_POST["minuteBgWidth"]);
			update_option("circularcountdown-secondBgWidth", $_POST["secondBgWidth"]);
			
			//Circle width
			update_option("circularcountdown-dayCircleWidth", $_POST["dayCircleWidth"]);
			update_option("circularcountdown-hourCircleWidth", $_POST["hourCircleWidth"]);
			update_option("circularcountdown-minuteCircleWidth", $_POST["minuteCircleWidth"]);
			update_option("circularcountdown-secondCircleWidth", $_POST["secondCircleWidth"]);
			
			//Circle BG color
			update_option("circularcountdown-dayBgColor", $_POST["dayBgColor"]);
			update_option("circularcountdown-hourBgColor", $_POST["hourBgColor"]);
			update_option("circularcountdown-minuteBgColor", $_POST["minuteBgColor"]);
			update_option("circularcountdown-secondBgColor", $_POST["secondBgColor"]);
			
			//Circle color
			update_option("circularcountdown-dayCircleColor", $_POST["dayCircleColor"]);
			update_option("circularcountdown-hourCircleColor", $_POST["hourCircleColor"]);
			update_option("circularcountdown-minuteCircleColor", $_POST["minuteCircleColor"]);
			update_option("circularcountdown-secondCircleColor", $_POST["secondCircleColor"]);
			
			//Counter font size
			update_option("circularcountdown-dayCounterFontSize", $_POST["dayCounterFontSize"]);
			update_option("circularcountdown-hourCounterFontSize", $_POST["hourCounterFontSize"]);
			update_option("circularcountdown-minuteCounterFontSize", $_POST["minuteCounterFontSize"]);
			update_option("circularcountdown-secondCounterFontSize", $_POST["secondCounterFontSize"]);
			
			//Text font size
			update_option("circularcountdown-dayTextFontSize", $_POST["dayTextFontSize"]);
			update_option("circularcountdown-hourTextFontSize", $_POST["hourTextFontSize"]);
			update_option("circularcountdown-minuteTextFontSize", $_POST["minuteTextFontSize"]);
			update_option("circularcountdown-secondTextFontSize", $_POST["secondTextFontSize"]);
			
			//Counter font color
			update_option("circularcountdown-dayCounterFontColor", $_POST["dayCounterFontColor"]);
			update_option("circularcountdown-hourCounterFontColor", $_POST["hourCounterFontColor"]);
			update_option("circularcountdown-minuteCounterFontColor", $_POST["minuteCounterFontColor"]);
			update_option("circularcountdown-secondCounterFontColor", $_POST["secondCounterFontColor"]);
			
			//Text font color
			update_option("circularcountdown-dayTextFontColor", $_POST["dayTextFontColor"]);
			update_option("circularcountdown-hourTextFontColor", $_POST["hourTextFontColor"]);
			update_option("circularcountdown-minuteTextFontColor", $_POST["minuteTextFontColor"]);
			update_option("circularcountdown-secondTextFontColor", $_POST["secondTextFontColor"]);
			
			//Texts
			update_option("circularcountdown-dayText", $_POST["dayText"]);
			update_option("circularcountdown-hourText", $_POST["hourText"]);
			update_option("circularcountdown-minuteText", $_POST["minuteText"]);
			update_option("circularcountdown-secondText", $_POST["secondText"]);
			
			//Texts top margin
			update_option("circularcountdown-dayTextMarginTop", $_POST["dayTextMarginTop"]);
			update_option("circularcountdown-hourTextMarginTop", $_POST["hourTextMarginTop"]);
			update_option("circularcountdown-minuteTextMarginTop", $_POST["minuteTextMarginTop"]);
			update_option("circularcountdown-secondTextMarginTop", $_POST["secondTextMarginTop"]);
			
			//Timer on finish function
			update_option("circularcountdown-onFinish", $_POST["onFinish"]);
		}
	
		//Create unique id
		public static function uniqueId() {
			$chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			$chars_length = strlen($chars);
			$i = 0;    
			$str = "";
			
			srand((double)microtime()*1000000);	
			
			while ($i<8) {
				$num = rand() % $chars_length;
				$tmp = substr($chars, $num, 1);
				$str .= $tmp;
				$i++;
			}
			  
			return "circularcountdown_".$str;
		}
	
	}
?>