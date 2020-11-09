//======================================================================================
// File Name:		rotatingbanner.js
// File Description:	javascripts for rotating banners
// Last Modified On:	08-30-2010
// Last Modified By:	Haejin Choi
//======================================================================================


//--------------------------------------------------------------------------------------
// Rotating Banner Image File Name (배너 이미지 파일명)
//--------------------------------------------------------------------------------------
var Pix = new Array(2);		// number = total # of rotating banners
//Pix[0] = "120615_RO_PointSale.jpg";
Pix[0] = "052912_GoCash.jpg";
//Pix[1] = "060112_RO_UGC.jpg";
Pix[1] = "120211_WP_getBonus.jpg";
//Pix[3] = "111011_poring.jpg";
//Pix[4] = "080511_RO_Violet.jpg";
//Pix[4] = "071411_FriendsWithBenefit.jpg";
//Pix[3] = "122010_GiftPromo_All.jpg";
//Pix[4] = "ragnarok_kafrashop.jpg";

//--------------------------------------------------------------------------------------
// URL Linked To Rotating Banner Image (배너 이미지에 걸려있는 URL 주소)
//--------------------------------------------------------------------------------------
var Links = new Array(2);	// number = total # of rotating banners
//Links[0] = "http://www.playragnarok.com/news/eventdetail.aspx?id=182";
Links[0] = "http://blog.gravityus.com/?p=2785";
//Links[1] = "http://blog.gravityus.com/?p=2843";
Links[1] = "http://blog.gravityus.com/?p=1662";
//Links[3] = "http://itunes.apple.com/app/angel-poring-gl/id472199393";
//Links[4] = "http://www.playragnarok.com/violet";
//Links[4] = "http://www.warpportal.com/account/friends.aspx";
//Links[3] = "http://forums.warpportal.com/index.php?/topic/22314-send-warpportal-points-to-a-friend/page__pid__264597#entry264597";
//Links[4] = "http://www.playragnarok.com/kafrashop/list.aspx";


//--------------------------------------------------------------------------------------


var timerID = 0;			// default value; please do not change. timer ID.
var slide = 1;				// default value; please do not change. slide ID.
	 	 
	 	 
function startPix() {			// place on <body onload="" />
	slideshow(0);
	timerID = setInterval("slideshow(0)", 3000);	//every 3 seconds
}

function endPix() {			// place on <body onunload="" />
	if (timerID)
		clearInterval(timerID);
}

function slideshow(x) {			// place on onmouseover=""
	//--------------------------------------------------------------
	//clear the banner button (배너 버튼 이미지 - out)
	//--------------------------------------------------------------
	document.getElementById("bc1").src = "http://www.playragnarok.com/images/master/btn_bannerC1_out.png";
	document.getElementById("bc2").src = "http://www.playragnarok.com/images/master/btn_bannerC2_out.png";
	//document.getElementById("bc3").src = "http://www.playragnarok.com/images/master/btn_bannerC3_out.png";
	//document.getElementById("bc4").src = "http://www.playragnarok.com/images/master/btn_bannerC4_out.png";
	//document.getElementById("bc5").src = "http://www.playragnarok.com/images/master/btn_bannerC5_out.png";

	if (x == 0){
		// if random
		//PicCurrentNum = Math.ceil(Math.random() * Pix.length) - 1;

		// if sequential
		PicCurrentNum = slide - 1;   

	} else {
		clearInterval(timerID);
		PicCurrentNum = x - 1;
	}
	
	//--------------------------------------------------------------
	// mark the banner button (배너 버튼 이미지 - over)
	//--------------------------------------------------------------
	imageNum = PicCurrentNum + 1;
	document.getElementById("bc" + imageNum).src = "http://www.playragnarok.com/images/master/btn_bannerC" + imageNum + "_over.png";

      	document.getElementById("ChangingLink").href = Links[PicCurrentNum];
      	document.getElementById("ChangingPix").src = "http://www.playragnarok.com/images/banner/" + Pix[PicCurrentNum];

	//--------------------------------------------------------------
	// in case of a sequential rotation
	//--------------------------------------------------------------
	if (x == 0){		// if the banner button has NOT been touched
		if (slide == Pix.length){
			slide = 1;
		} else {
			slide = slide + 1;
		}
	} else {		// if the banner button has been touched
		if (x == Pix.length){
			slide = 1;
		} else {
			slide = x + 1;
		}
	}
}

function delayPix() {			// place on onmouseout=""
	clearInterval(timerID);
	timerID = setInterval("slideshow(0)", 3000);	//every 3 seconds
}