
/* Settings 
------------------------------------------------------------------------*/




/* Functions
------------------------------------------------------------------------*/




/* readyEvent 
------------------------------------------------------------------------*/

$(function () {	
	/* resize & scroll & firstLoad
	------------------------------------------------------------------------*/
	$w.on({
		//scroll	
		'scroll': function () {
		}
	}).superResize({
		//resize
		loadAction: false,
		resizeAfter: function () {
		}
	}).firstLoad({
		//firstLoad
		pc_tab: function () {
		},
		sp: function () {
		}
	});
});

/* LoadEvent 
------------------------------------------------------------------------*/
$w.on({
	'load': function () {
	}
});