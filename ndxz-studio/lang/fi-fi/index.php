<?php if (!defined('SITE')) exit('No direct script access allowed');

/**
* Translation
*
* Suomi
* 
* @version 0.8
* @author Pasi
*/

// FI-FI

$words = array 
(
	// BASIC INTERFACE PARTS
	'indexhibit' => 'Indexhibit',
	'preferences' => 'Asetukset',
	'help' => 'Ohjeet',
	'logout' => 'Kirjaudu ulos',
	
	// BASIC MAIN NAV PARTS
	'content' => 'Sis&auml;lt&ouml;',
	'admin' => 'Admin',
	'pages' => 'Sivut',
	'settings' => 'Asetukset',
	'section' => 'Kategoria',
	'exhibits' => 'Exhibits',
	'stats' => 'Statistiikka',
	'settings' => 'Asetukset',
	'system' => 'J&auml;rjestelm&auml;',
	'user' => 'User',
	
	// error messages
	'login err' => 'K&auml;ytt&auml;j&auml;tunnus tai salasana on virheellinen. Yrit&auml; uudelleen',
	'router err 1' => 'T&auml;t&auml; modulia tai sivua ei ole.',
	'class not found' => 'Tiedostoa ei l&ouml;ydy',
	'database is unavailable' => 'Tietokanta ei ole k&auml;yt&ouml;ss&ouml;.',
	'error finding settings' => 'Asetusteidostoa ei l&ouml;ydy.',
	'no menu created' => 'Menua ei voitu luoda.',
	'no results' => 'Virhe. Ei tuloksia.',
		
	// Location descriptors
	'main' => 'P&auml;&auml;sivu',
	'edit' => 'Editoi',
	'preview' => 'Esikatselu',
	'search' => 'Haku',
	'new' => 'Luo uusi',
	
	// some tabs
	'text' => 'Teksti',
	'images' => 'Kuvat',
	
	// meed tp tranlsate the default sections
	'project' => 'projekti',
	'on-going' => 'k&auml;ynniss&auml;',
	
	// generic forms parts & labels
	'page title' => 'Sivun nimi',
	'add page' => 'Lis&auml;&auml; sivu',
	'submit' => 'Hyv&auml;ksy',
	'update' => 'P&auml;ivit&auml;',
	'required' => 'Pakollinen',
	'optional' => 'Optio',
	'hidden' => 'Piilotettu',
	'delete' => 'Poista',
	'publish' => 'Julkaise',
	'unpublish' => 'Poista n&auml;kyvist&auml;',
	'choose file' => 'Valitse tiedosto',
	
	'exhibition name' => 'Gallerian nimi',
	'advanced mode' => 'Laajennetut asetukset',
	'theme' => 'Teema',
	'api key' => 'API Key',
	'image max' => 'Kuvan maksimi koko',
	'thumb max' => 'Thumbnailin maksimi koko',
	'image quality' => 'Kuvan laatu',
	'freelancer' => 'Freelance',
	'pre nav text' => 'Pre-Nav Text',
	'post nav text' => 'Post-Nav Text',
	'html allowed' => '(HTML sallittu)',
	'update order' => 'P&auml;ivitysj&auml;rjestys',
	'view' => 'N&auml;yt&auml;',
	'no images' => 'Ei kuvia',
	'add images' => 'Lis&auml;&auml; kuvia',
	'image title' => 'Kuvan otsikko',
	'image caption' => 'Kuvan teksti',
	'attach more files' => 'Lis&auml;&auml; tiedosto',
	'page process' => 'Prosessoi sivua',
	'page hide' => 'Piilota sisvu',
	'background image' => 'Taustakuva',
	'background color' => 'Taustav&auml;ri',
	'edit color' => 'Klikkaa v&auml;ri&auml; ja valitse.',
	'uploaded' => 'Ladattu',
	'updated' => 'P&auml;ivitetty',
	'width' => 'Leveys',
	'height' => 'Korkeus',
	'kb' => 'KB',
	'saving' => 'Tallentaa...',
	
	// editor buttons & such
	'bold' => 'Bold',
	'italic' => 'Italic',
	'underline' => 'Underline',
	'links manager' => 'Linkkien hallinta',
	'files manager' => 'Tiedostojen hallinta',
	'save preview' => 'Tallenna/Esikatsele',
	'upload' => 'Lataa',
	'make selection' => 'Tee valinta',
	'on' => 'On',
	'off' => 'Off',
	
	// popup editor parts
	"create link" => "Luo linkki",
	"hyperlink" => "Hyperlinkki",
	"urlemail" => "URL / Email",
	"none found" => "Ei l&ouml;ydy",
	"allowed filetypes" => "Sallitut tiedostot",
	"upload files" => "Ladatut tiedostot",
	"attach more" => "Liit&auml; lis&auml;&auml; tiedostoja",
	"title" => "Otsikko",
	"edit file info" => "Editoi tietoja",
	"description" => "Kuvaus-tiedot",
	"if applicable" => "(jos sovellettavissa)",
	
	// statistics related things
	'referrers' => 'Viittaukset',
	'page visits' => 'Vierailut sivulla',
	
	'total' => 'Yhteens&auml;',
	'unique' => 'Yksitt&auml;isi&auml;',
	'refers' => 'Viittaukset',
	
	'since' => 'L&auml;htien',
	'ip' => 'IP',
	'country' => 'Maa',
	'date' => 'P&auml;iv&auml;',
	'keyword' => 'Asiasana',
	'total pages' => 'sivuja yhteens&auml;',
	'next' => 'Seuraava',
	'previous' => 'Edellinen',
	'visits' => 'K&auml;vij&auml;t',
	'page' => 'Sivu',
	
	'this week' => 'T&auml;ll&auml; viikolla',
	'today' => 'T&auml;n&auml;&auml;n',
	'yesterday' => 'Eilen',
	'this month' => 'T&auml;ss&auml; kuussa',
	'last week' => 'Viime viikolla',
	'year' => 'Vuosi',
	'last month' => 'Viime kuussa',
	'top 10 referrers' => 'Top 10 viittaukset',
	'top 10 keywords' => 'Top 10 asiasanat',
	'top 10 countries' => 'Top 10 maat',
	'past 30' => 'past 30 days',
	
	'2 weeks ago' => '2 viikkoa sitten',
	'3 weeks ago' => '3 viikkoa sitten',
	'4 weeks ago' => '4 viikkoa sitten',
	'2 days ago' => '2 p&auml;iv&auml;&auml; sitten',
	'3 days ago' => '3 p&auml;iv&auml;&auml; sitten',
	'4 days ago' => '4 p&auml;iv&auml;&auml; sitten',
	'5 days ago' => '5 p&auml;iv&auml;&auml; sitten',
	'6 days ago' => '6 p&auml;iv&auml;&auml; sitten',
	'2 months ago' => '2 kuukautta sitten',
	'3 months ago' => '3 kuukautta sitten',
	'4 months ago' => '4 kuukautta sitten',
	'5 months ago' => '5 kuukautta sitten',
	'6 months ago' => '6 kuukautta sitten',
	'7 months ago' => '7 kuukautta sitten',
	'8 months ago' => '8 kuukautta sitten',
	'9 months ago' => '9 kuukautta sitten',
	'10 months ago' => '10 kuukautta sitten',
	'11 months ago' => '11 kuukautta sitten',
	
	// system strings
	'name' => 'Nimi',
	'last name' => 'Sukunimi',
	'email' => 'Email',
	'login' => 'K&auml;ytt&auml;j&auml;tunnus',
	'password' => 'Salasana',
	'confirm password' => 'Vahvista salasana',
	'number chars' => '6-12 kirjainta',
	'if change' => 'Jos muutat',
	'time now' => 'Aika nyt?',
	'time format' => 'Ajan esitysformaatti',
	'your language' => 'Kieli',
	
	// installation
	'htaccess ok' => '.htaccess tiedosto on valmis...',
	'htaccess not ok' => "Aseta 'MODREWRITE' arvoksi 'false' tiedostossa config.php...",
	'files ok' => "/tiedosto kansioon voi kirjoittaa...",
	'files not ok' => "/tiedosto kansioon EI voi kirjoittaa...",
	'filesgimgs ok' => "/files/gimgs kansioon voi kirjoittaa...",
	'filesgimgs not ok' => "/files/gimgs kansioon EI voi kirjoittaa...",
	'try db setup now' => "Tietokannan asetuksia kokeillaan.",
	'continue' => "Jatka",
	'please correct errors' => "Korjaa virheet.",
	'refresh page' => "P&auml;ivit&auml; sivu.",
	'goto forum' => "Mene <a href='http://www.indexhibit.org/forum/'>Indexhibit foorumille</a> saadaksesi apua.",
	'edit config' => "Editoi config.php tiedostoa oikeilla tietokannan asetuksilla.",
	'refresh this page' => "P&auml;ivit&auml; sivu kun olet tehnyt t&auml;m&auml;n.",
	'contact webhost' => "Jos et tied&auml; kuin t&auml;m&auml; tehd&auml;&auml;n kysy apua palveluntarjoajaltasi",
	'database is ready' => "Tietokanta n'ytt&auml;isi olevan kunnossa.",
	'tried installing' => "Taulukoita yritet&auml;&auml;n muodostaa.",
	'cannot install' => "Tietokantaa ei voi asentaa/muokata",
	'check config' => "Tarkista asetuksesi uudelleen.",
	'default login' => "Valmiit asetukset k&auml;ytt&auml;j&auml;tunnukseksi / salasanaksi ovat index1 / exhibit.",
	'change settings' => "Muuta asetukset.",
	'lets login' => "Kirjaudu sis&auml;&auml;n!",
	'freak out' => "Au. Jotain j&auml;tkytt&auml;vi&auml; ongelmia. Voit karjua!",
	
	// javascript confirm pops
	'are you sure' => 'Oletko varma?',
	
	
	// additions 17.03.2007
	'change password' => 'Muuta salasana',
	'project year' => 'Projektin vuosi',
	'report' => 'Rapotti',
	'email address' => 'S&auml;hk&ouml;postiosoite',
	'below required' => 'Allaoleva vaaditaan Indexhibit raportointiin',
	'from registration' => 'Indexhibit rekister&ouml;inti',
	'register at' => 'Rekister&ouml;idy',
	'background tiling' => 'Koko taustan kattaminen',
	'page process' => 'Prosessoi HTML',
	'hide page' => 'Piilota sivu indeksist&auml;',
	'allowed formats' => 'vain jpg, png ja gif tiedostoja.',
	'filetypes' => 'Tiedostotyypit',
	'updating' => 'P&auml;ivitt&auml;&auml;...',
	
	// additions 18.03.2007
	'max file size' => 'Max tiedostokoko',
	'exhibition format' => 'Gallerian Formaatti',
	'view full size' => 'N&auml;yt&auml; t&auml;ydess&auml; koossa',
	'cancel' => 'Peruuta',
	'view site' => 'N&auml;yt&auml; oma sivu',
	'store' => 'Varastoi',
	
	// additions 19.03.2007
	'config ok' => "/ndxz-studio/config kansioon voi kirjoittaa...",
	'config not ok' => "/ndxz-studio/config kansioon EI voi kirjoittaa...",
	'database server' => "Tietokantapalvelin",
	'database username' => "Tietokannan k&auml;ytt&auml;j&auml;tunnus",
	'database name' => "Tietokannan nimi",
	'database password' => "Tietokannan salasana",
	
	// additions 10.04.2007
	'create new section' => "Luo uusi alue",
	'section name' => "Alueen nimi",
	'folder name' => "Kansion nimi",
	'chronological' => "Kronologinen",
	'sectional' => "Aluekohtainen",
	'use editor' => "WYSIWYG Editor",
	'organize' => "Organisoi",
	'sections' => "Alueet",
	'path' => "Polku",
	'section order' => "Alueiden j&auml;rjestys",
	'reporting' => "Raportoi",
	'sure delete section' => "oletko varma? T&auml;m&auml; h&auml;vitt&auml;&auml; kaikki aluee sivut.",
	'projects section' => "Projektialueet",
	'about this site' => "T&auml;st&auml; sivustosta",
	'additional options' => "Lis&auml;asetukset",
	'add section' => "Lis&auml;&auml; alue",
	
	// additions 21.04.2007
	'section display' => "N&auml;yt&auml; alueen otsikko",
	
	// additions - no date yet
	'invalid input' => "H&auml;iri&ouml; tiedon sy&ouml;t&ouml;ss&auml;",
	
	'the_end' => 'the end - loppu'
	//'' => '',
);


?>