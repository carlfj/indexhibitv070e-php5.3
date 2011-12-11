<?php if (!defined('SITE')) exit('No direct script access allowed');

/**
* Translation
*
* Swedish (Svenska)
* 
* @version 1.0
* @author Vaska
* @Translation marcus @ wrango . com / 2008-03-21 / with assistance from Ralf Wrangö
*/

// SE-SE

$words = array 
(
	// BASIC INTERFACE PARTS
	'indexhibit' => 'Indexhibit',
	'preferences' => 'Preferenser',
	'help' => 'Hjälp',
	'logout' => 'Logga ut',
	
	// BASIC MAIN NAV PARTS
	'content' => 'Innehåll',
	'admin' => 'Administrera',
	'pages' => 'Sidor',
	'settings' => 'Inställningar',
	'section' => 'Sektion',
	'exhibits' => 'Utställningar',
	'stats' => 'Statistik',
	'settings' => 'Inställningar',
	'system' => 'System',
	'user' => 'Användare',
	
	// error messages
	'login err' => 'Felaktigt lösenord eller användarnamn. Försök igen.',
	'router err 1' => 'Denna modul eller sida existerar inte.',
	'class not found' => 'Hittar inte klassen',
	'database is unavailable' => 'Databasen är inte tillgänglig.',
	'error finding settings' => 'Hittar inte inställningar.',
	'no menu created' => 'Ingen meny skapad.',
	'no results' => 'Fel, inga resultat.',
		
	// Location descriptors
	'main' => 'Huvud',
	'edit' => 'Redigera',
	'preview' => 'Förhandsgranska',
	'search' => 'Sök',
	'new' => 'Ny',
	
	// some tabs
	'text' => 'Text',
	'images' => 'Bilder',
	
	// meed tp tranlsate the default sections
	'project' => 'projekt',
	'on-going' => 'pågående',
	
	// generic forms parts & labels
	'page title' => 'Sidans namn',
	'add page' => 'Ny sida',
	'submit' => 'Skicka',
	'update' => 'Uppdatera',
	'required' => 'Obligatorisk',
	'optional' => 'Frivillig',
	'hidden' => 'Dold',
	'delete' => 'Ta bort',
	'publish' => 'Publicera',
	'unpublish' => 'Avpublicera',
	'choose file' => 'Välj fil',
	
	'exhibition name' => 'Utställningens namn',
	'advanced mode' => 'Avancerat läge',
	'theme' => 'Tema',
	'api key' => 'API Key',
	'image max' => 'Bildens maxstorlek',
	'thumb max' => 'Tumnagelns maxstorlek',
	'image quality' => 'Bildkvalité',
	'freelancer' => 'Frilansstatus',
	'pre nav text' => 'Pre-nav text',
	'post nav text' => 'Post-nav text',
	'html allowed' => '(HTML Tillåten)',
	'update order' => 'Uppdateringsordning',
	'view' => 'Visa',
	'no images' => 'Inga bilder',
	'add images' => 'Lägg till bilder',
	'image title' => 'Bildtitel',
	'image caption' => 'Bildtext',
	'attach more files' => 'Lägg till flera bilder',
	'page process' => 'Behandlar sida',
	'page hide' => 'Göm sida',
	'background image' => 'Bakgrundsbild',
	'background color' => 'Bakgrundsfärg',
	'edit color' => 'Klicka i färgboxen för att ändra.',
	'uploaded' => 'Uppladdad',
	'updated' => 'Uppdaterad',
	'width' => 'Bredd',
	'height' => 'Höjd',
	'kb' => 'kB',
	'saving' => 'Sparar...',
	
	// editor buttons & such
	'bold' => 'Fet',
	'italic' => 'Kursiv',
	'underline' => 'Understruken',
	'links manager' => 'Länkhanterare',
	'files manager' => 'Filhanterare',
	'save preview' => 'Spara/Förhandsvisa',
	'upload' => 'Ladda upp',
	'make selection' => 'Välj',
	'on' => 'Tillslagen',
	'off' => 'Frånslagen',
	
	// popup editor parts
	"create link" => "Skapa länk",
	"hyperlink" => "Hyperlänk",
	"urlemail" => "URL / E-post",
	"none found" => "Ingen funnen",
	"allowed filetypes" => "Tillåtna filtyper",
	"upload files" => "Ladda upp filer",
	"attach more" => "Lägg till fler filer",
	"title" => "Titel",
	"edit file info" => "Redigera filinformation",
	"description" => "Beskrivning",
	"if applicable" => "(om möjligt)",
	
	// statistics related things
	'referrers' => 'Refererare',
	'page visits' => 'Besök',
	
	'total' => 'Totalt',
	'unique' => 'Unika',
	'refers' => 'Refereringar',
	
	'since' => 'Sedan',
	'ip' => 'IP',
	'country' => 'Land',
	'date' => 'Datum',
	'keyword' => 'Nyckelord',
	'total pages' => 'totala sidor',
	'next' => 'Nästa',
	'previous' => 'Föregående',
	'visits' => 'Besök',
	'page' => 'Sida',
	
	'this week' => 'Denna vecka',
	'today' => 'Idag',
	'yesterday' => 'Igår',
	'this month' => 'Denna månad',
	'last week' => 'Förra veckan',
	'year' => 'År',
	'last month' => 'Förra månaden',
	'top 10 referrers' => 'Top 10 Refererare',
	'top 10 keywords' => 'Top 10 Nyckelord',
	'top 10 countries' => 'Top 10 Länder',
	'past 30' => 'senaste 30 dagarna',
	
	'2 weeks ago' => '2 veckor sedan',
	'3 weeks ago' => '3 veckor sedan',
	'4 weeks ago' => '4 veckor sedan',
	'2 days ago' => '2 dagar sedan',
	'3 days ago' => '3 dagar sedan',
	'4 days ago' => '4 dagar sedan',
	'5 days ago' => '5 dagar sedan',
	'6 days ago' => '6 dagar sedan',
	'2 months ago' => '2 månader sedan',
	'3 months ago' => '3 månader sedan',
	'4 months ago' => '4 månader sedan',
	'5 months ago' => '5 månader sedan',
	'6 months ago' => '6 månader sedan',
	'7 months ago' => '7 månader sedan',
	'8 months ago' => '8 månader sedan',
	'9 months ago' => '9 månader sedan',
	'10 months ago' => '10 månader sedan',
	'11 months ago' => '11 månader sedan',
	
	// system strings
	'name' => 'Namn',
	'last name' => 'Efternamn',
	'email' => 'E-post',
	'login' => 'Inloggning',
	'password' => 'Lösenord',
	'confirm password' => 'Repetera lösenordet',
	'number chars' => '6-12 tecken',
	'if change' => 'om ändrat',
	'time now' => 'Vad är klockan nu?',
	'time format' => 'Tidsformat',
	'your language' => 'Språk',
	
	// installation
	'htaccess ok' => '.htaccess-filen är klar...',
	'htaccess not ok' => "Sätt 'MODREWRITE' till 'false' i config.php...",
	'files ok' => "mappen /files är skrivbar...",
	'files not ok' => "mappen /files är inte skrivbar...",
	'filesgimgs ok' => "mappen /files/gimgs är skrivbar...",
	'filesgimgs not ok' => "mappen /files/gimgs är inte skrivbar...",
	'try db setup now' => "Låt oss försöka sätta upp databasen nu.",
	'continue' => "Fortsätt",
	'please correct errors' => "Var god åtgärda ovanstående felmeddelanden.",
	'refresh page' => "Ladda sedan om denna sida.",
	'goto forum' => "Gå till <a href='http://www.indexhibit.org/forum/'>hjälpforumet</a> för assistans.",
	'edit config' => "Du måste ändra i filen config.php, så att databasinställningarna blir rätt.",
	'refresh this page' => "Ladda om denna sida efter du gjort detta steg.",
	'contact webhost' => "Ta hjälp av ditt webbhotells personal för att få hjälp med dessa.",
	'database is ready' => "Det verkar som databasen är klar att användas!",
	'tried installing' => "Vi försökte installera tabellerna.",
	'cannot install' => "Vi kan inte koppla upp mot eller installera databasen.",
	'check config' => "Var vänlig undersök inställningarna igen.",
	'default login' => "Förvalt konto / lösenord är index1 / exhibit.",
	'change settings' => "Så fort du loggat in skall du ändra kontonamn och lösenor, under webbplatsens inställningar!",
	'lets login' => "Nu är det dags att logga in!",
	'freak out' => "Det har uppstått ett riktigt läskigt fel - var god bli galen!",
	
	// javascript confirm pops
	'are you sure' => 'Är du säker?',
	
	
	// additions 17.03.2007
	'change password' => 'Ändra lösenord',
	'project year' => 'Projektår',
	'report' => 'Rapporterad',
	'email address' => 'E-postadress',
	'below required' => 'Nedanstådende är obligatorisk för Indexhibits rapportering',
	'from registration' => 'från Indexhibits registrering',
	'register at' => 'Registrera på',
	'background tiling' => 'Bakgrund sida vid sida',
	'page process' => 'Processerar HTML',
	'hide page' => 'Dölj sida från Index',
	'allowed formats' => 'bara jpg, png och gif.',
	'filetypes' => 'Filtyper',
	'updating' => 'Uppdaterar...',
	
	// additions 18.03.2007
	'max file size' => 'Max filstorlek',
	'exhibition format' => 'Utställningsformat',
	'view full size' => 'Visa fullstorlek',
	'cancel' => 'Avbryt',
	'view site' => 'Visa din sida',
	'store' => 'Spara',
	
	// additions 19.03.2007
	'config ok' => "mappen /ndxz-studio/config är skrivbar...",
	'config not ok' => "mappen /ndxz-studio/config är inte skrivbar...",
	'database server' => "Databasens server",
	'database username' => "Databasens inloggninskonto",
	'database name' => "Databasens namn",
	'database password' => "Databaskontots lösenord",
	
	// additions 10.04.2007
	'create new section' => "Skapa ny sektion",
	'section name' => "Sektionsnamn",
	'folder name' => "Mappnamn",
	'chronological' => "Kronologisk",
	'sectional' => "Sektionsvis",
	'use editor' => "WYSIWYG-redigerare",
	'organize' => "Organisera",
	'sections' => "Sektioner",
	'path' => "Sökväg",
	'section order' => "Sektionsordning",
	'reporting' => "Rapportering",
	'sure delete section' => "Är du säker? Detta kommer också att radera alla sidor i denna sektion!",
	'projects section' => "Projektsektion",
	'about this site' => "Om den här webbplatsen",
	'additional options' => "Ytterligare inställningar",
	'add section' => "Lägg till sektion",
	
	// additions 21.04.2007
	'section display' => "Visa sektionstitel",
	
	// additions - no date yet
	'invalid input' => "Ogiltig indata",
	
	'the_end' => 'slut'
	//'' => '',
);


?>