<?php if (!defined('SITE')) exit('No direct script access allowed');

/**
* Translation
*
* Czech
* 
* @version 1.0
* @author jirkap
*/

// CS

$words = array 
(
	// BASIC INTERFACE PARTS
	'indexhibit' => 'Indexhibit',
	'preferences' => 'Nastavení',
	'help' => 'Nápověda',
	'logout' => 'Odhlásit',
	
	// BASIC MAIN NAV PARTS
	'content' => 'Obsah',
	'admin' => 'Admin',
	'pages' => 'Stránky',
	'settings' => 'Volby',
	'section' => 'Sekce',
	'exhibits' => 'Exhibice',
	'stats' => 'Statistiky',
	'settings' => 'Volby',
	'system' => 'Systém',
	'user' => 'Uživatel',
	
	// error messages
	'login err' => 'Heslo nebo uživatelské jméno nesouhlasí. Zkuste to znovu.',
	'router err 1' => 'Tento modul/stránka neexistuje.',
	'class not found' => 'Třída nebyla nalezena',
	'database is unavailable' => 'Databáze je nepřístupná.',
	'error finding settings' => 'Při hledání nastavení došlo k chybě.',
	'no menu created' => 'Nebylo vytvořeno žádné menu.',
	'no results' => 'Žádný výsledek, došlo k chybě.',
		
	// Location descriptors
	'main' => 'Administrace',
	'edit' => 'Upravit',
	'preview' => 'Náhled',
	'search' => 'Hledat',
	'new' => 'Nový',
	
	// some tabs
	'text' => 'Text',
	'images' => 'Obrázky',
	
	// meed tp tranlsate the default sections
	'project' => 'projekt', 
	'on-going' => 'probíhající', 
	
	// generic forms parts & labels
	'page title' => 'Název stránky',
	'add page' => 'Přidat stránku',
	'submit' => 'Odeslat',
	'update' => 'Aktualizovat',
	'required' => 'Povinné',
	'optional' => 'Volitelné',
	'hidden' => 'Skrytý',
	'delete' => 'Smazat',
	'publish' => 'Publikovat',
	'unpublish' => 'Nepublikovat',
	'choose file' => 'Vyber soubor',
	
	'exhibition name' => 'Název exhibice',
	'advanced mode' => 'Pokročilý mód',
	'theme' => 'Téma',
	'api key' => 'API Key',
	'image max' => 'Max velikost obrázku',
	'thumb max' => 'Max velikost náhledu',
	'image quality' => 'Kvalita obrázku',
	'freelancer' => 'Freelance status',
	'pre nav text' => 'Text na počátku Indexu',
	'post nav text' => 'Text na konci Indexu', 
	'html allowed' => '(HTML povoleno)',
	'update order' => 'Aktualizovat pozadí',
	'view' => 'Zobrazit',
	'no images' => 'Žádné obrázky',
	'add images' => 'Přidat obrázky',
	'image title' => 'Popisek obrázku',
	'image caption' => 'Nadpis obrázku',
	'attach more files' => 'Připojit další soubory',
	'page process' => 'Zpracovat stránku',
	'page hide' => 'Skrýt stránku',
	'background image' => 'Obrázek pozadí',
	'background color' => 'Barva pozadí',
	'edit color' => 'Kliknutím na políčko upravíte barvu.',
	'uploaded' => 'Nahráno',
	'updated' => 'Aktualizováno',
	'width' => 'Šířka',
	'height' => 'Výška',
	'kb' => 'KB',
	'saving' => 'Ukládám...',
	
	// editor buttons & such
	'bold' => 'Tučně',
	'italic' => 'Kurzíva',
	'underline' => 'Podtržené',
	'links manager' => 'Manažer odkazù',
	'files manager' => 'Manažer souborù',
	'save preview' => 'Uložit/Náhled',
	'upload' => 'Nahrát na server',
	'make selection' => 'Vytvořit výběr',
	'on' => 'Ano', 
	'off' => 'Ne', 
	
	// popup editor parts
	"create link" => "Vytvořit odkaz",
	"hyperlink" => "Hyperlink",
	"urlemail" => "URL / Email",
	"none found" => "Nic nenalezeno",
	"allowed filetypes" => "Povolené typy souborů",
	"upload files" => "Nahrát soubory na server",
	"attach more" => "Připojit více souborů",
	"title" => "Název",
	"edit file info" => "Upravit informace o souboru",
	"description" => "Popis",
	"if applicable" => "(pokud je platný)", 
	
	// statistics related things
	'referrers' => 'Odkazující',
	'page visits' => 'Počet návštěv',
	
	'total' => 'Celkem',
	'unique' => 'Unikátních',
	'refers' => 'Odkazuje',
	
	'since' => 'Od',
	'ip' => 'IP',
	'country' => 'Země',
	'date' => 'Datum',
	'keyword' => 'Klíčové slovo',
	'total pages' => 'Celkem stránek',
	'next' => 'Další',
	'previous' => 'Předchozí',
	'visits' => 'Návštěv',
	'page' => 'Stránka',
	
	'this week' => 'Tento týden',
	'today' => 'Dnes',
	'yesterday' => 'Včera',
	'this month' => 'Tento měsíc',
	'last week' => 'Minulý týden',
	'year' => 'Rok',
	'last month' => 'Minulý měsíc',
	'top 10 referrers' => 'Top 10 odkazujících',
	'top 10 keywords' => 'Top 10 klíčových slov',
	'top 10 countries' => 'Top 10 zemí',
	'past 30' => 'minulých 30 dnù',
	
	'2 weeks ago' => 'Před 2 týdny',
	'3 weeks ago' => 'Před 3 týdny',
	'4 weeks ago' => 'Před 4 týdny',
	'2 days ago' => 'Před 2 dny',
	'3 days ago' => 'Před 3 dny',
	'4 days ago' => 'Před 4 dny',
	'5 days ago' => 'Před 5 dny',
	'6 days ago' => 'Před 6 dny',
	'2 months ago' => 'Před 2 měsíci',
	'3 months ago' => 'Před 3 měsíci',
	'4 months ago' => 'Před 4 měsíci',
	'5 months ago' => 'Před 5 měsíci',
	'6 months ago' => 'Před 6 měsíci',
	'7 months ago' => 'Před 7 měsíci',
	'8 months ago' => 'Před 8 měsíci',
	'9 months ago' => 'Před 9 měsíci',
	'10 months ago' => 'Před 10 měsíci',
	'11 months ago' => 'Před 11 měsíci',
	// done
	// system strings
	'name' => 'Jméno',
	'last name' => 'Příjmení',
	'email' => 'Email',
	'login' => 'Uživatelské jméno',
	'password' => 'Heslo',
	'confirm password' => 'Potvrdit heslo',
	'number chars' => '6-12 znaků',
	'if change' => 'při změně',
	'time now' => 'Časové pásmo',
	'time format' => 'Formát času a data',
	'your language' => 'Jazyk',
	
	// installation
	'htaccess ok' => 'Soubor .htaccess je připraven...',
	'htaccess not ok' => "Nastavte 'MODREWRITE' na 'false' v config.php...",
	'files ok' => "Do adresáře /files lze zapisovat...",
	'files not ok' => "Do adresáře /files nelze zapisovat...",
	'filesgimgs ok' => "Do adresáře /files/gimgs lze zapisovat...",
	'filesgimgs not ok' => "Do adresáře /files/gimgs nelze zapisovat...",
	'try db setup now' => "Nyní zkusme nastavit databázi.",
	'continue' => "Pokračovat",
	'please correct errors' => "Prosím opravte chyby.",
	'refresh page' => "Poté aktualizujte tuto stránku.",
	'goto forum' => "Na adrese: <a href='http://www.indexhibit.org/forum/'>help forum</a> je možné získat pomoc.",
	'edit config' => "Je nutné upravit soubor config.php a doplnit správné nastavení databáze.",
	'refresh this page' => "Aktualizujte tuto stránku pokud jste hotovi s tímto krokem.",
	'contact webhost' => "Pokud neznáte tyto informace, kontaktujte vašeho poskytovatele webhostingových služeb.",
	'database is ready' => "Zdá se, že databáze je připravena.",
	'tried installing' => "Došlo k pokusu o instalaci tabulek.",
	'cannot install' => "Nelze se připojit nebo instalovat databázi.",
	'check config' => "Znovu prosím zkontrolujte nastavení konfigurace.",
	'default login' => "Přednastavené uživatelské jméno / heslo je index1 / exhibit.",
	'change settings' => "Změňte tyto údaje a nastavení vaší stránky uvnitř administrátorského rozhraní.",
	'lets login' => "Přihlásit!",
	'freak out' => "Někde je nějaká hrozivá chyba - pryč s ní!",
	
	// javascript confirm pops
	'are you sure' => 'Určitě?',
	
	
	// additions 17.03.2007
	'change password' => 'Změnit heslo',
	'project year' => 'Rok projektu', 
	'report' => 'Hlášení odesláno', 
	'email address' => 'Emailová adresa',
	'below required' => 'Údaje níže jsou požadované pro Indexhibit reporting', 
	'from registration' => 'z registace Indexhibitu',
	'register at' => 'Registrovat v', 
	'background tiling' => 'Dlaždice pozadí',
	'page process' => 'Pouze čisté HTML',
	'hide page' => 'Skrýt stránku z Indexu',
	'allowed formats' => 'pouze jpg, png a gif.',
	'filetypes' => 'Typy souborů',
	'updating' => 'Aktualizuji...',
	
	// additions 18.03.2007
	'max file size' => 'Max velikost souboru',
	'exhibition format' => 'Formát Exhibice',
	'view full size' => 'Ukázat plnout velikost',
	'cancel' => 'Zrušit',
	'view site' => 'Ukázat stránku',
	'store' => 'Uskladnit',
	
	// additions 19.03.2007
	'config ok' => "Do adresáře /ndxz-studio/config lze zapisovat...",
	'config not ok' => "Do adresáře /ndxz-studio/config nelze zapisovat...",
	'database server' => "Server databáze",
	'database username' => "Uživatelské jméno databáze",
	'database name' => "Jméno databáze",
	'database password' => "Heslo databáze",
	
	// additions 10.04.2007
	'create new section' => "Vytvořit novou sekci",
	'section name' => "Jméno sekce",
	'folder name' => "Název adresáře",
	'chronological' => "Chronologicky",
	'sectional' => "Podle sekcí",
	'use editor' => "WYSIWYG editor",
	'organize' => "Organizovat",
	'sections' => "Sekce",
	'path' => "Cesta",
	'section order' => "Pořadí sekcí",
	'reporting' => "Posílání zpráv",
	'sure delete section' => "Určitě? Toto vymaže také všechny ostatní stránky v této sekci.",
	'projects section' => "Sekce projektù",
	'about this site' => "O této stránce",
	'additional options' => "Další nastavení",
	'add section' => "Přidat sekci",
	
	// additions 21.04.2007
	'section display' => "Display Section Title",
	
	'the_end' => 'Konec' 
	//'' => '',
);


?>