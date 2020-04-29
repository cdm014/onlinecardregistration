<?php
// THE FOLLOWING ARE REQUIRED
// ---------------------------------------------------------------------------------------------------------------------
// Name of your Library
define('institutionName', 'Name of your Library');

// URL of your App Server
define('appServer', 'url.of.your.app.server'); // example app.mpl.on.ca

// API Version you are on
define('apiVer', '5');

// API Key
define('apiKey', 'Your Sierra API Key');

// API Secret
define('apiSecret', 'Your Sierra API Secret');

// Password to access the stats page.
define('patronStatsSecret', 'SecretPasswordForStatsPage'); // Secret password to access statistics page.

// Since we are creating an eCard and you have not actually seen this persons ID you're going to want to restrict the materials that this patron can borrow
// Setup a new patron type in Sierra and configure it so that this person cannot check out or place holds on any physical materials.  Whatever number gets assigned
// to this new patron type enter it in below where the 7 is.
define('patronTypeNumber' , '7');

// Starting Barcode - This is the range where you want to start your barcodes.  At my system we chose a number that is VERY far away from our existing physical cards but still within
// the range of cards our vendors expect to see. What you do is entirely up to you.  The barcodes will be generated with a 3 of 9 barcode.  This means the last digit of the barcode is a
// check digit.  The 'barcodes.txt' file will be incremented every time someone applies for a library card.  Our system uses 14 digit barcodes.  
// Only enter in 13 digits here as the last number is a check digit.
define('startingBarcodeNumber', ''); // example 2138700900000

// Either CA or US (for now).  Used to change labels / form fields from Canadian or American
define('localization', 'CA');

// Short code for your state or province - used to default select the drop down in the application form.
define('yourprovince', 'MB');

// Sierra PIN length requirements
// currently the code generates a 5 digit random number PIN.  The pin is created such that it won't trigger Sierra's non-trivial pin check
// For instance it won't ever generate a PIN of 11111.  This is bad coding on their part because it reduces the number of pins an attacker needs to try
// but i'm not iii so there's that!
define('minimumPinLength', '6');

// END OF REQUIRED SETTINGS
// ---------------------------------------------------------------------------------------------------------------------


// use Google Recaptcha to verify the person is not a bot.  You need to sign up for a Google recaptcha account.
// set to 1 to use recaptcha, set to 0 to disable recaptcha.  If this is enabled and you don't have a recaptcha account you wont be able to get past the index page.
define ('useRecaptcha', '1');

// The recaptcha key from your recaptcha admin panel.
define ('recaptchaSiteKey', 'yourrecaptchakey');

// set to 1 to use google analytics.  You need to enter in your GA property ID below.
define ('useGoogleAnalytics', '1');

//Google analytics property ID.
define ('googleAnalyticsID', 'YourGAPropertyID');

// to do address verification you need to be able to take the address provided by the patron and parse it to make sure it's correct and get more details
// this code uses BING Maps to accomplish this.  Bing maps doesn't have a stellar interface for maps but their API is robust enough to accomplish what we need
// furthermore its FREE!  You need to sign up for an API key with them and then go through the steps to say that you're a non-profit / public library.  They will
// then provide the service for free.  Enter the key in below.
define ("bingMapsKey", "BINGMAPSAPIKEY");

//if you care about address verification set this to 1.  It does a rudamentary check to ensure that the postal code matches the address entered.
define ('verifyAddress', '1');

//if you want to ensure that patrons are within your boudaries set this to 1.  You must also provide lat/long for the boundaries below in the catchment area
define ('verifyCatchment', '1');

// If the patron is not within your catchment area and the catchment flag above is set to 1 they will be redirected to this page
// This page should explain who can get a card for your library.
define ('catchmentFailedRedirectPage', 'https://www.google.ca');

// String showed to patrons when they are allowed to renew
define("permitRenew", "You can use this form to update your library card's expiration date if you're within three weeks of expiration.  Please take a moment to verify your address below.");

// String showed to patrons who just updated their card today
define("renewedToday", "Thank-you for updating your card with MPL.");

// String showed to patrons who try to renew too soon
define("tooSoonToRenew", "You are able to renew your card when it's within three weeks of your expiration date.  Please check back then.");

// String showed to patrons who are blocked
define("denyRenew", "You've indicated that you've moved outside of Milton. You will need to come to one of our locations to show proof of address.");

// salts used for email verification crypto
define("salt1", "AAg7J3rLK707fSZJQSiCed236ff");
define("salt2", "C0tswYUv2w2a1EOsKfZhVvs32fs");

// who to send email as
define("mailFrom", "notices@mpl.on.ca");

// set to 1 if you want copies of the emails send to patrons also send to you.  Set to 0 if you dont.
define("sendCCEmail", "0");

define("addressStillCorrect", "Is your address still correct?");

define("didYouKnowEmailNotification", "Did you know that we send out a notificaton three weeks in advance of your renewal date via email?
<br><br> Your account currently doesn't have an email address attached to it.  We only will use your email address to contact you
about Library programs and services and will never share it with any third parties.  If you would like to receive emails from
Milton Public Library please enter your email address below.");

// text emailed to patron showed before confirmation link
define("emailStart", "You've indicated that you would like to receive email from Milton Public Library,\r\nPlease click on the following URL to verify your email address: ");

// text email to patron showed after confirmation link
define("emailFooter", "If you have questions, please contact staff at: circulation@mpl.on.ca\r\n");

// text showed to patron after submitting their email that tells them to go click on the link.
define ("pleaseClickVerify", "Please check your email for a verification link to click");

define("emailRequest", "<p>It appears as though your account currently does not have an email address associated with it.<p>
Please share your email below to receive renewal reminder notices and to learn more about Milton Public Library’s exciting new programs, services and resources.<p>
*You may opt out at any time. MPL will not share your email with any third parties.");

define("thankYouUpdate", "<h3>Thank you for taking the time to update your current information.</h3>");

define('dbport', '1032');
define('dbname', 'iii');
define('dbhost', '192.168.176.17');
define('dbuser', 'dbaccessuser');
define('dbpassword', 'MPL@dm1n');
define('dbsslmode', 'require');
define('dbtimeout', '5');

// this is the array that defines the area that you allow ecards to be registered from.  The pairs are Lat/Long coordinates separated by a space in quotes.  Each pair is
// separated by a comma because this ends up being a large array that describes a polygon.  The last pair in the array needs to be the same as the first pair so the polygone
// ends up being a closed shape.  A lot of cities / municipalities provide this shape data for free to download.  I ended up getting a KML file and massaging the data using notepad / excel
// until I parsed the data I needed out.

// this defines WARD2 of milton.

define("catchment", array("43.5424940064 -79.8618693653","43.5425188373 -79.8618295893","43.5429036074 -79.8612065249","43.5433567039 -79.8604900558","43.543744752 -79.859956984","43.5441677864 -79.8594118786","43.5448059971 -79.8586626402","43.5458752926 -79.8574743549","43.5470468613 -79.8561740073","43.5480511201 -79.8550517446","43.5489203571 -79.8540833563","43.5495514457 -79.8533804162","43.5500988872 -79.8527659638","43.550864683 -79.8519064056","43.5514258377 -79.851276524","43.551654398 -79.8510199671","43.5521860694 -79.8504202968","43.5532162235 -79.8492859948","43.5535959323 -79.8488563949","43.5542162039 -79.8481759743","43.5546960052 -79.8476316577","43.5555791005 -79.8466593643","43.5558748281 -79.8463223243","43.5565151388 -79.8456177027","43.5569439333 -79.8451267302","43.5577380209 -79.8442344821","43.558558848 -79.8433203311","43.559156309 -79.8426471806","43.5596328461 -79.8421161649","43.5597896864 -79.8419444699","43.5602773497 -79.8414105677","43.5608569592 -79.840771495","43.5613580307 -79.8402139308","43.5644729599 -79.836738497","43.566466056 -79.8345087609","43.5676542856 -79.8331899308","43.5684716676 -79.832265284","43.5695534372 -79.8310656831","43.5698641151 -79.8307085702","43.5709009854 -79.8295693875","43.5772590632 -79.8224512138","43.5783302506 -79.8212696897","43.5792435327 -79.8202410064","43.5801254068 -79.8192636189","43.5810699864 -79.8182126052","43.5815136535 -79.8177256222","43.5825465111 -79.8165710456","43.5830486706 -79.8160216603","43.5840476313 -79.8148939492","43.5846778621 -79.8141876362","43.5858835603 -79.8128400364","43.587131002 -79.811457526","43.5878738894 -79.810634165","43.5881654729 -79.8103144059","43.5865453509 -79.8097476769","43.5858993706 -79.8093319095","43.5852537211 -79.8088023596","43.584627976 -79.8081303708","43.5838724124 -79.8071358808","43.5825612566 -79.8053377256","43.5810237723 -79.8032854065","43.5793200066 -79.8009616147","43.5777239364 -79.798791641","43.5763035271 -79.7968601984","43.5751654901 -79.7952785967","43.5741376439 -79.7937362729","43.5734710998 -79.792720033","43.5726308303 -79.7914259779","43.5718064407 -79.7901878912","43.5716136067 -79.7899264899","43.5684354162 -79.7935357519","43.5648781104 -79.7974019504","43.5603699328 -79.8023461116","43.5578669182 -79.8052118567","43.5552459988 -79.8080920907","43.552188962 -79.8114747786","43.5512671402 -79.8125138796","43.5486514168 -79.8155385527","43.5462193229 -79.8182379096","43.5447504426 -79.819862179","43.5433519608 -79.8213914899","43.5415981836 -79.8233029938","43.5398833398 -79.824989922","43.5375949192 -79.8274395429","43.5356633607 -79.8295384331","43.5307476762 -79.8350448883","43.5281108237 -79.837998141","43.5259855587 -79.840337436","43.5242972064 -79.8422078428","43.5210505923 -79.8456833183","43.5197211881 -79.8471735872","43.5163010412 -79.8509551815","43.5163008034 -79.8509554446","43.5162975628 -79.8509590261","43.5162326183 -79.8509892055","43.5114402443 -79.8560374535","43.5111521566 -79.8563559933","43.5107424256 -79.8568090286","43.5101666348 -79.8574456613","43.5100203447 -79.8576074057","43.5099505589 -79.8576845646","43.5096580648 -79.8580102654","43.5095693571 -79.858109044","43.509494268 -79.8581890531","43.5089167458 -79.8588275637","43.5085329823 -79.8592518454","43.5082900429 -79.8595204309","43.5073831539 -79.8605230309","43.506692499 -79.861294184","43.5064878319 -79.8615128022","43.5078707941 -79.8633708184","43.5106615494 -79.8671957583","43.5117696328 -79.8686898012","43.5126966586 -79.8699029006","43.5131100612 -79.8704438925","43.5139915758 -79.8716307574","43.5146685968 -79.8725423276","43.5155527042 -79.8737355743","43.5160983796 -79.8744720781","43.5164092469 -79.8748865386","43.5165361978 -79.8750471219","43.5171553014 -79.8758602223","43.5177586077 -79.8766613225","43.5183297644 -79.877516068","43.5206113663 -79.8805546937","43.5212678687 -79.8814706609","43.5219520274 -79.8823395734","43.5225308441 -79.8831164107","43.5243381399 -79.8856041744","43.5248535057 -79.8862845606","43.5264942766 -79.8884746352","43.5264955875 -79.8884763857","43.5264964042 -79.888477409","43.525960406 -79.8890876207","43.5261069282 -79.8891730601","43.5263497688 -79.8893121625","43.5269673661 -79.8897397351","43.5277448129 -79.890458519","43.5282306907 -79.8910385599","43.5291392614 -79.8922361648","43.5348204751 -79.8996364089","43.5463215221 -79.914806155","43.5465235899 -79.914822129","43.5642681947 -79.8951104766","43.5443391564 -79.8685332468","43.5442667318 -79.8683425004","43.543833748 -79.8671359346","43.5420539653 -79.8627221228","43.5424940064 -79.8618693653","43.5424940064 -79.8618693653"));

?>
