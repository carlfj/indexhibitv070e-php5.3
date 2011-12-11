<?php if (!defined('SITE')) exit('Er is geen directe toegang tot de scripts toegestaan!');

/**
* Translation
*
* Dutch/Flemish
* 
* @version 1.0
* @author Sven Claessens
*/

// NL

$words = array 
(
	// BASIC INTERFACE PARTS
	'indexhibit' => 'Indexhibit',
	'preferences' => 'Voorkeuren',
	'help' => 'Help',
	'logout' => 'Uitloggen',

	// BASIC MAIN NAV PARTS
	'content' => 'Inhoud',
	'admin' => 'Administratie',
	'pages' => 'Pagina\'s',
	'settings' => 'Instellingen',
	'section' => 'Sectie',
	'exhibits' => 'Tentoonstellingen',
	'stats' => 'Statistieken',
	'settings' => 'Instellingen',
	'system' => 'Systeem',
	'user' => 'Gebruiker',

	// error messages
	'login err' => 'Je gebruikersnaam of wachtwoord zijn fout. Probeer opnieuw.',
	'router err 1' => 'Die module/pagina bestaat niet.',
	'class not found' => 'Klasse niet gevonden.',
	'database is unavailable' => 'Databank niet beschikbaar.',
	'error finding settings' => 'Instellingen kunnen niet gevonden worden.',
	'no menu created' => 'Er is geen menu gemaakt.',
	'no results' => 'Geen resultaten, er is een fout opgetreden.',

	// Location descriptors
	'main' => 'Algemeen',
	'edit' => 'Bewerk',
	'preview' => 'Voorbeeld',
	'search' => 'Zoeken',
	'new' => 'Nieuw',

	// some tabs
	'text' => 'Tekst',
	'images' => 'Figuren',

	// meed tp tranlsate the default sections
	'project' => 'Projekten',
	'on-going' => 'Nog lopend',

	// generic forms parts & labels
	'page title' => 'Naam tentoonstelling',
	'add page' => 'Voeg tentoonstelling toe',
	'submit' => 'Verstuur',
	'update' => 'Aanpassen',
	'required' => 'Verplicht',
	'optional' => 'Optioneel',
	'hidden' => 'Verborgen',
	'delete' => 'Verwijderen',
	'publish' => 'Publiceer',
	'unpublish' => 'De-publiceer',
	'choose file' => 'Kies Bestand',
	
	'exhibition name' => 'Naam tentoonstelling',
	'advanced mode' => 'Geavanceerde modus',
	'theme' => 'Thema',
	'api key' => 'API sleutel',
	'image max' => 'Max grootte figuur',
	'thumb max' => 'Max grootte duimnagel',
	'image quality' => 'Kwaliteit van de figuur',
	'freelancer' => 'Freelance Status',
	'pre nav text' => 'Pre-Nav Tekst',
	'post nav text' => 'Post-Nav Tekst',
	'html allowed' => '(HTML toegestaan)',
	'update order' => 'Rangschikking aanpassen',
	'view' => 'Bekijk',
	'no images' => 'Geen figuren',
	'add images' => 'Voeg figuren toe',
	'image title' => 'Figuur titel',
	'image caption' => 'Figuur ondertitel',
	'attach more files' => 'Voeg meer bestanden toe',
	'page process' => 'Verwerk pagina',
	'page hide' => 'Verbeg pagina',
	'background image' => 'Achtergrondfiguur',
	'background color' => 'Achtergrondkleur',
	'edit color' => 'Klik op de kleurkiezer om de selectie aan te passen.',
	'uploaded' => 'Opgeladen',
	'updated' => 'Aangepast',
	'width' => 'Breedte',
	'height' => 'Hoogte',
	'kb' => 'KB',
	'saving' => 'Aan het opslaan...',

	// editor buttons & such
	'bold' => 'Vet',
	'italic' => 'Cursief',
	'underline' => 'Onderlijnd',
	'links manager' => 'Beheerder voor links',
	'files manager' => 'Beheerder voor bestanden',
	'save preview' => 'Opslaan/Voorbeeld',
	'upload' => 'Opladen',
	'make selection' => 'Selecteer',
	'on' => 'Aan',
	'off' => 'Uit',
	
	// popup editor parts
	"create link" => "Maak link",
	"hyperlink" => "Hyperlink",
	"urlemail" => "URL / E-mail",
	"none found" => "Geen gevonden",
	"allowed filetypes" => "Toegelaten bestanden",
	"upload files" => "Laad bestanden op",
	"attach more" => "Voeg meer bestanden toe",
	"title" => "Titel",
	"edit file info" => "Bewerk bestandsinformatie",
	"description" => "Omschrijving",
	"if applicable" => "(indien van toepassing)",
	
	// statistics related things
	'referrers' => 'Verwizjers',
	'page visits' => 'bezochte pagina\'s',
	
	'total' => 'Totaal',
	'unique' => 'Uniek',
	'refers' => 'Verwijzingen',
	
	'since' => 'Sinds',
	'ip' => 'IP',
	'country' => 'Land',
	'date' => 'Datum',
	'keyword' => 'Sleutelwoord',
	'total pages' => 'paginatotaal',
	'next' => 'Volgende',
	'previous' => 'Vorige',
	'visits' => 'Bezoeken',
	'page' => 'Pagina',
	
	'this week' => 'Deze week',
	'today' => 'Vandaag',
	'yesterday' => 'Gisteren',
	'this month' => 'Deze maand',
	'last week' => 'Vorige week',
	'year' => 'Jaar',
	'last month' => 'Vorige maand',
	'top 10 referrers' => 'Top 10 verwijzers',
	'top 10 keywords' => 'Top 10 sleutelwoorden',
	'top 10 countries' => 'Top 10 landen',
	'past 30' => 'voorbije 30 dagen',
	
	'2 weeks ago' => '2 weken geleden',
	'3 weeks ago' => '3 weken geleden',
	'4 weeks ago' => '4 weken geleden',
	'2 days ago' => '2 dagen geleden',
	'3 days ago' => '3 dagen geleden',
	'4 days ago' => '4 dagen geleden',
	'5 days ago' => '5 dagen geleden',
	'6 days ago' => '6 dagen geleden',
	'2 months ago' => '2 maanden geleden',
	'3 months ago' => '3 maanden geleden',
	'4 months ago' => '4 maanden geleden',
	'5 months ago' => '5 maanden geleden',
	'6 months ago' => '6 maanden geleden',
	'7 months ago' => '7 maanden geleden',
	'8 months ago' => '8 maanden geleden',
	'9 months ago' => '9 maanden geleden',
	'10 months ago' => '10 maanden geleden',
	'11 months ago' => '11 maanden geleden',
	
	// system strings
	'name' => 'Voornaam',
	'last name' => 'Familienaam',
	'email' => 'E-mail',
	'login' => 'Inloggen',
	'password' => 'Wachtwoord',
	'confirm password' => 'Bevestig wachtwoord',
	'number chars' => '6-12 karakters',
	'if change' => 'if changing',
	'time now' => 'Hoe laat is het nu?',
	'time format' => 'Tijdsaanduiding',
	'your language' => 'Taal',

	// installation
	'htaccess ok' => '.htaccess bestand is klaar...',
	'htaccess not ok' => "Zet 'MODREWRITE' op 'false' in config.php...",
	'files ok' => "/files folder is beschrijfbaar...",
	'files not ok' => "/files folder is niet beschrijfbaar...",
	'filesgimgs ok' => "/files/gimgs folder is beschrijfbaar...",
	'filesgimgs not ok' => "/files/gimgs folder is niet beschrijfbaar...",
	'try db setup now' => "Laten we nu proberen de databank in te stellen.",
	'continue' => "Ga verder",
	'please correct errors' => "Pas a.u.b. de bovenstaande fouten aan.",
	'refresh page' => "Ververs dan deze pagina.",
	'goto forum' => "Ga naar het <a href='http://www.indexhibit.org/forum/'>help forum</a> voor ondersteuning.",
	'edit config' => "Je moet het config.php bestand aanpassen met de correcte databank instellingen.",
	'refresh this page' => "Nadat je deze stap gedaan hebt, ververs deze pagina.",
	'contact webhost' => "Indien je deze gegevens niet kent, vraag je hoster voor ondersteuning.",
	'database is ready' => "Het ziet er naar uit dat de databank klaar is.",
	'tried installing' => "We hebben geprobeerd om de tabellen in te stellen.",
	'cannot install' => "We kunnen niet verbinden naar de databank of ze niet instellen.",
	'check config' => "Controleer de configuratie-instellingen nogmaals a.u.b..",
	'default login' => "De standaard gebruikersnaam / wachtwoord zijn index1 / exhibit.",
	'change settings' => "Pas deze instellingen aan van zodra je bent ingelogd.",
	'lets login' => "Laten we inloggen!",
	'freak out' => "Er heeft zich een verschrikkelijke fout voorgedaan - freak out!",

	// javascript confirm pops
	'are you sure' => 'Ben je zeker?',


	// additions 17.03.2007
	'change password' => 'Wijzig wachtwoord',
	'project year' => 'Jaar van het project',
	'report' => 'Gerapporteerd',
	'email address' => 'E-mail adres',
	'below required' => 'Onderstaande is verplicht voor Indexhibit reportering',
	'from registration' => 'van Indexhibit registratie',
	'register at' => 'Registreer bij',
	'background tiling' => 'Achtergond tegelen',
	'page process' => 'Verwerk pagina',
	'hide page' => 'Verberg pagina',
	'allowed formats' => 'jpg, png en gif alleen.',
	'filetypes' => 'Bestandstypes',
	'updating' => 'Aan het aanpassen...',
	
	// additions 18.03.2007
	'max file size' => 'Max bestandsgrootte',
	'exhibition format' => 'Tentoonstellings formaat',
	'view full size' => 'Bekijk volledig formaat',
	'cancel' => 'Annuleer',
	'view site' => 'Bekijk', // still need this one
	'store' => 'Winkel',

	// additions 19.03.2007
	'config ok' => "/ndxz-studio/config folder is beschrijfbaar...",
	'config not ok' => "/ndxz-studio/config folder is niet beschrijfbaar...",
	'database server' => "Databankserver",
	'database username' => "Gebruikersnaam voor de databank",
	'database name' => "Naam van de databank",
	'database password' => "Wachtwoord voor databank",
	
	// additions 10.04.2007
	'create new section' => "Maak nieuwe sectie",
	'section name' => "sectienaam",
	'folder name' => "Naam van de directory",
	'chronological' => "Chronologisch",
	'sectional' => "Per sectie",
	'use editor' => "Bewerk met WYSIWYG",
	'organize' => "Rangschik",
	'sections' => "Secties",
	'path' => "Pad",
	'section order' => "Section Order",
	'reporting' => "Rapportering",
	'sure delete section' => "Ben je zeker? Hiermee verwijder je ook alle pagina's uit deze sectie.",
	'projects section' => "Projectensectie",
	'about this site' => "Over deze site",
	'additional options' => "Bijkomende instellingen",
	'add section' => "Voeg sectie toe",
	
	// additions 21.04.2007
	'section display' => "Display Section Title",
	
	'the_end' => 'het einde'
	//'' => '',
);


?>