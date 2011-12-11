<?php if (!defined('SITE')) exit('No direct script access allowed');

/**
* Translation
*
* German
* 
* @version 1.0
* @author Jan Hoffman
*/

// DE-DE

$words = array 
(
	// BASIC INTERFACE PARTS
	'indexhibit' => 'Indexhibit',
	'preferences' => 'Voreinstellungen',
	'help' => 'Hilfe',
	'logout' => 'Ausloggen',
	
	// BASIC MAIN NAV PARTS
	'content' => 'Inhalt',
	'admin' => 'Administrator',
	'pages' => 'Seiten',
	'settings' => 'Einstellungen',
	'section' => 'Abschnitt',
	'exhibits' => 'Ausstellungen',
	'stats' => 'Statistiken',
	'settings' => 'Einstellungen',
	'system' => 'System',
	'user' => 'Benutzer',
	
	// error messages
	'login err' => 'Ihr Passwort oder Benutzername ist nicht korrekt. Bitte versuchen Sie es erneut.',
	'router err 1' => 'Diese Seite exsistiert nicht.',
	'class not found' => 'Gruppe nicht gefunden',
	'database is unavailable' => 'Datenbank ist nicht verfuegbar.',
	'error finding settings' => 'Fehler: Kann die Einstellungen nicht finden.',
	'no menu created' => 'Es wurde kein Menue erstellt.',
	'no results' => 'Kein Erbgebnis.',
		
	// Location descriptors
	'main' => 'Hauptmenue',
	'edit' => 'Bearbeiten',
	'preview' => 'Vorschau',
	'search' => 'Suche',
	'new' => 'Neu',
	
	// some tabs
	'text' => 'Text',
	'images' => 'Bilder',
	
	// meed tp tranlsate the default sections
	'project' => 'Projekt',
	'on-going' => 'Aktuell',
	
	// generic forms parts & labels
	'page title' => 'Ausstellung Name',
	'add page' => 'Neu Ausstellung',
	'submit' => 'Senden',
	'update' => 'Aktualisieren',
	'required' => 'Benoetigt',
	'optional' => 'Optional',
	'hidden' => 'Versteckt',
	'delete' => 'Loeschen',
	'publish' => 'Publish',
	'unpublish' => 'Unpublish',
	'choose file' => 'Datei waehlen',
	
	'exhibition name' => 'Ausstellung Name',
	'advanced mode' => 'Erweiterter Modus',
	'theme' => 'Thema',
	'api key' => 'API Schluessel',
	'image max' => 'Maximale Bildgroesse',
	'thumb max' => 'Maximale Thumbnail Groesse',
	'image quality' => 'Bildqualitaet',
	'freelancer' => 'Freelance Status',
	'pre nav text' => 'Pre-Nav Text',
	'post nav text' => 'Post-Nav Text', 
	'html allowed' => '(HTML erlaubt)',
	'update order' => 'Aktuallisierungsanforderung',
	'view' => 'Zeigen',
	'no images' => 'Keine Bilder',
	'add images' => 'Bilder hinzufuegen',
	'image title' => 'Bildtitel',
	'image caption' => 'Bildbeschriftung ',
	'attach more files' => 'Mehr Dateien anfuegen',
	'page process' => 'Prozess Seite',
	'page hide' => 'Seite Verstecken',
	'background image' => 'Hintergrundbild',
	'background color' => 'Hintergrundfarbe',
	'edit color' => 'Um die Auswahl zu bearbeiten klicken Sie die Farbbox.',
	'uploaded' => 'Hochgeladen',
	'updated' => 'Aktualisiert',
	'width' => 'Breite',
	'height' => 'Hoehe',
	'kb' => 'KB',
	'saving' => 'es wird gespeichert...',
	
	// editor buttons & such
	'bold' => 'Bold',
	'italic' => 'Italic',
	'underline' => 'Unterstrichen',
	'links manager' => 'Link Manager',
	'files manager' => 'Datei Manager',
	'save preview' => 'Speichern/Vorschau',
	'upload' => 'Hochladen',
	'make selection' => 'Auswaehlen',
	'on' => 'An',
	'off' => 'Aus',
	
	// popup editor parts
	"create link" => "Link erstellen",
	"hyperlink" => "Hyperlink",
	"urlemail" => "URL / Email",
	"none found" => "Nicht gefunden",
	"allowed filetypes" => "Erlaubte Dateitypen",
	"upload files" => "Dateien hochladen",
	"attach more" => "Mehr Dateien anhaengen",
	"title" => "Titel",
	"edit file info" => "Dateinformation bearbeiten",
	"description" => "Beschreibung",
	"if applicable" => "(wenn anwendbar)",
	
	// statistics related things
	'referrers' => 'Verweise',
	'page visits' => 'Seitenbesuche',
	
	'total' => 'Total',
	'unique' => 'eindeutig',
	'refers' => 'Verweis',
	
	'since' => 'seit',
	'ip' => 'IP',
	'country' => 'Land',
	'date' => 'Datum',
	'keyword' => 'Schluesselwort',
	'total pages' => 'Seiten gesamt',
	'next' => 'naechste',
	'previous' => 'vorherige',
	'visits' => 'Besuche',
	'page' => 'Seite',
	
	'this week' => 'Diese Woche',
	'today' => 'Heute',
	'yesterday' => 'Gestern',
	'this month' => 'Diesen Monat',
	'last week' => 'Vergangene Woche',
	'year' => 'Jahr',
	'last month' => 'Vergangener Monat',
	'top 10 referrers' => 'Top 10 Verweise',
	'top 10 keywords' => 'Top 10 Schlueselwoerter',
	'top 10 countries' => 'Top 10 Laender',
	'past 30' => 'vergangene 30 Tage',
	
	'2 weeks ago' => 'vor 2 Wochen',
	'3 weeks ago' => 'vor 3 Wochen',
	'4 weeks ago' => 'vor 4 Wochen',
	'2 days ago' => 'vor 2 Tagen',
	'3 days ago' => 'vor 3 Tagen',
	'4 days ago' => 'vor 4 Tagen',
	'5 days ago' => 'vor 5 Tagen',
	'6 days ago' => 'vor 6 Tagen',
	'2 months ago' => 'vor 2 Monaten',
	'3 months ago' => 'vor 3 Monaten',
	'4 months ago' => 'vor 4 Monaten',
	'5 months ago' => 'vor 5 Monaten',
	'6 months ago' => 'vor 6 Monaten',
	'7 months ago' => 'vor 7 Monaten',
	'8 months ago' => 'vor 8 Monaten',
	'9 months ago' => 'vor 9 Monaten',
	'10 months ago' => 'vor 10 Monaten',
	'11 months ago' => 'vor 11 Monaten',
	
	// system strings
	'name' => 'Name',
	'last name' => 'Nachname',
	'email' => 'Email',
	'login' => 'Benutzername',
	'password' => 'Passwort',
	'confirm password' => 'Passwort bestaetigen',
	'number chars' => '6-12 buchstabe',
	'if change' => 'wenn Aenderung',
	'time now' => 'Zeit jetzt?',
	'time format' => 'Zeitformat',
	'your language' => 'Sprache',
	
	// installation
	'htaccess ok' => '.htaccess Zugangsdatei ist bereit...',
	'htaccess not ok' => "'MODREWRITE' in config.php auf 'falsch' setzen...",
	'files ok' => "/files Ordner sind beschreibbar...",
	'files not ok' => "/files Ordner sind nicht beschreibbar...",
	'filesgimgs ok' => "/files/gimgs Ordner sind beschreibbar...",
	'filesgimgs not ok' => "/files/gimgs Ordner sind nicht beschreibbar...",
	'try db setup now' => "Datenbank jetzt einrichten.",
	'continue' => "Weiter",
	'please correct errors' => "Bitte die oben erwaehnten Fehler korrigieren.",
	'refresh page' => "Dann die Seite Aktualisieren.",
	'goto forum' => "Hilfe finden Sie unter: <a href='http://www.indexhibit.org/forum/'>help forum</a>.",
	'edit config' => "Sie muessen die config.php Datei mit den neuen Daten aus der Datenbank 				  auffrischen.",
	'refresh this page' => "Aktualisieren Sie die Seite nach diesem Schritt.",
	'contact webhost' => "Wenn Sie nicht wissen wie, kontaktieren sie Ihren Webhost.",
	'database is ready' => "Die Datenbank ist bereit.",
	'tried installing' => "Wir haben versucht das Verzeichnis zu installieren.",
	'cannot install' => "Wir koennen die Datenbank nicht installieren.",
	'check config' => "Bitte ueberpruefen Sie die Einstellungen der Datei config.php.",
	'default login' => "Der vorgegebene Benutzername / Passwort ist index1 / exhibit.",
	'change settings' => "Aendern Sie einmal das und die Seiteneinstellungen.",
	'lets login' => "Einloggen!",
	'freak out' => "Ein entsetzlicher Fehler ist aufgetreten - drehen Sie durch!",
	
	// javascript confirm pops
	'are you sure' => 'Sind Sie sicher?',
	
	// additions 17.03.2007
	'change password' => 'Passwort aendern',
	'project year' => 'Projekt Jahr',
	'report' => 'Bericht',
	'email address' => 'Email Adresse',
	'below required' => 'Below required for Indexhibit reporting',
	'from registration' => 'from Indexhibit registration',
	'register at' => 'Registrieren in',
	'background tiling' => 'deckender Hintergrund',
	'page process' => 'Seitenprozess',
	'hide page' => 'Seite verstecken',
	'allowed formats' => 'nur jpg, png und gif.',
	'filetypes' => 'Dateiarten:',
	'updating' => 'Aktuallisierung...',

	 // additions 18.03.2007
    'max file size' => 'Maximale Dateigroesse',
	'exhibition format' => 'Austellungsformat',
	'view full size' => 'Zeige volle Groesse',
	'cancel' => 'Abbrechen',
	'view site' => 'Seite anzeigen',
	'store' => 'Geschäft',
	
	// additions 19.03.2007
	'config ok' => "/ndxz-studio/config Ordner sind beschreibbar...",
	'config not ok' => "/ndxz-studio/config Ordner sind nicht beschreibbar...",
	'database server' => "Datenbank Server",
	'database username' => "Datenbank Username",
	'database name' => "Datenbank Name",
	'database password' => "Datenbank Passwort",
	
	// additions 10.04.2007
	'create new section' => "Create New Section",
	'section name' => "Section Name",
	'folder name' => "Folder Name",
	'chronological' => "Chronological",
	'sectional' => "Sectional",
	'use editor' => "WYSIWYG Editor",
	'organize' => "Organize",
	'sections' => "Sections",
	'path' => "Path",
	'section order' => "Section Order",
	'reporting' => "Reporting",
	'sure delete section' => "Are you sure? This will delete all pages in this section too.",
	'projects section' => "Projects Section",
	'about this site' => "About This Site",
	'additional options' => "Additional Settings",
	'add section' => "Add Section",
	
	// additions 10.04.2007
	'create new section' => "Neuen Bereich erstellen",
	'section name' => "Bereichsname",
	'folder name' => "Ordnername",
	'chronological' => "chronoligisch",
	'sectional' => "nach Bereich",
	'use editor' => "WYSIWYG Editor",
	'organize' => "ordnen",
	'sections' => "Bereiche",
	'path' => "Pfad",
	'section order' => "Bereichsfolge",
	'reporting' => "Anmeldung",
	'sure delete section' => "Sind Sie sicher? Es werden alle Seiten in dieser Sektion geloescht!.",
	'projects section' => "Bereich Projekte",
	'about this site' => "Ueber diese Seite",
	'additional options' => "Ergaenzende Einstellungen",
	'add section' => "Bereich hinzufuegen",
	
	// additions 21.04.2007
	'section display' => "Display Section Title",

	'the_end' => 'Ende'
	//'' => '',
);


?>