<?php
define ( 'MYSQL_HOST',      'localhost' );
define ( 'MYSQL_DATENBANK', 'lindenimmo2');//test_strato
define ( 'MYSQL_BENUTZER',  'michael' );//test_strato
define ( 'MYSQL_KENNWORT',  '2hot4you' );
//sessiontime in sec.
//7200 = 2h
define ( 'TIME_OUT', 7200);
//Ajax
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'); // TRUE bei Ajax Request
//Tabellenfarben
//define ( 'COLOR_TOP',  '#6BA056' );
define ( 'COLOR_TOP',  '#EEFF72' );
//define ( 'COLOR_ONE',  '#9CC642' );
define ( 'COLOR_ONE',  '#E6FF96' );
define ( 'COLOR_TWO',  '#DFF9A8' );
//Sonderzeichen
//define('COPYR',chr(169));
define('BULLET',chr(149));
define('EURO',chr(128));
//Expose Ordner
define('FOLDER','tmp/'); //Temporärer Ordner
define('EXPOSE','expose/'); //Expose Ordner
//mailtext und Parameter
//define ('MAIL_HOST' , 'smtp.strato.de');
define ('MAIL_HOST' , 'localhost');
define ('FROMNAME', 'Linden-Immobilien');
//define ('FROM', 'immo@linden-immobilien.net');
define ('FROM', 'office@computernetzesysteme.de');
//define ('BCC', 'immo@linden-immobilien.net');
define ('BCC', 'office@computernetzesysteme.de');
define ('SUBJECT', 'Ihr Exposé');
define ('MAILTEXT_ONE', '<br><br>Sie hatten sich bei uns bezüglich eines Immobilienangebotes gemeldet.<br> Gern bieten wir Ihnen');
define ('MAILTEXT_TWO', 'Kosten entstehen Ihnen vorab nicht. Die im Exposé ausgewiesene Provision ist von Ihnen erst dann zu zahlen, wenn es durch unsere Tätigkeit zu einem Vertragsabschluss kommt. Für Besichtigung und Rückfragen bezüglich Objekt und Eigentümer stehen wir Ihnen gern zur Verfügung. Sollte Ihnen ein Angebot aus preislichen oder anderen Gründen ungeeignet erscheinen, versäumen Sie bitte nie, ein Gegenangebot abzugeben, damit wir für Sie verhandeln können.<br>Wir verbleiben<br><br> mit freundlichen Grüßen<br>LINDEN Immobilien<br><br> i. A. Anders<br><br> -- LINDEN Immobilien PSF 74 02 22 13092 Berlin T: 030 / 47 48 49 47 /-48 ');
define ('ATTENTION', '<p>Die zu zahlende Maklerprovision beträgt für den Erwerber 7,14 % aus dem erzielten Kaufpreis  jeweils inklusive der gesetzlichen Umsatzsteuer. Sie ist fällig und zahlbar bei Zustandekommen des notariellen Kaufvertrages. Auf Wunsch erhalten Sie von uns weitere Informationen. Eine diskrete Außenbesichtigung ist jederzeit möglich, für eine Besichtigung auf dem Grundstück nehmen Sie bitte Rücksprache mit uns. Die Angebote sind nur für den Empfänger persönlich bestimmt und somit vertraulich zu behandeln. Bei Weitergabe an Dritte, auch an rechtlich oder   wirtschaftlich    verbundene    Personen    oder    Unternehmen    entsteht Haftung für die Provision. Die Angaben in diesem Exposé beruhen im Wesentlichen   auf   Informationen   durch   den   Eigentümer  und   sind   ohne Gewähr. Änderungen bleiben vorbehalten.</p>');
//Firmen- und Persönliche Daten
define ('COMPANY', 'LINDEN Immobilien');
define ('ADRESS', 'Unter den Linden 21');
define ('PLZ', '10117');
define ('CITY', 'Berlin');
define ('PHONE', '030/47484947');
?>
$mail->Port = 587; //Email Port ..465
$mail->SMTPDebug = 2;
$mail->SMTPSecure = 'ssl';