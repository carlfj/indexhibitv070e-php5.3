<?php if (!defined('SITE')) exit('No direct script access allowed');

/**
* Translation
*
* Català
* 
* @version 1.0
* @author Alt&meier
*/

// CA-ES

$words = array 
(
	// BASIC INTERFACE PARTS
	'indexhibit' => 'Indexhibit',
	'preferences' => 'Preferències',
	'help' => 'Ajuda',
	'logout' => 'Sortir',
	
	// BASIC MAIN NAV PARTS
	'content' => 'Contingut',
	'admin' => 'Admin',
	'pages' => 'Pàgina',
	'settings' => 'Configuració',
	'section' => 'Secció',
	'exhibits' => 'Exposicions',
	'stats' => 'Estadístiques',
	'settings' => 'Configuració',
	'system' => 'Sistema',
	'user' => 'Usuari',
	
	// error messages
	'login err' => 'La teva contrasenya o nom d\'usuari són incorrectes. Intenta-ho una altra vegada.',
	'router err 1' => 'Aquest mòdul/pàgina no existeix.',
	'class not found' => 'Fitxer no trobat',
	'database is unavailable' => 'La base de dades no està disponible',
	'error finding settings' => 'Error al buscar la configuració.',
	'no menu created' => 'El menú no ha estat creat.',
	'no results' => 'Cap resultat, s\'ha produït un error.',
		
	// Location descriptors
	'main' => 'Principal',
	'edit' => 'Editar',
	'preview' => 'Previsualitzar',
	'search' => 'Buscar',
	'new' => 'Nou',
	
	// some tabs
	'text' => 'Text',
	'images' => 'Imatges',
	
	// meed tp tranlsate the default sections
	'project' => 'Projecte',
	'on-going' => 'En procés',
	
	// generic forms parts & labels
	'page title' => 'Nom de l\'exposició',
	'add page' => 'Afegir exposició',
	'submit' => 'Sometre',
	'update' => 'Actualització',
	'required' => 'Obligatori',
	'optional' => 'Opcional',
	'hidden' => 'Amagat',
	'delete' => 'Esborrar',
	'publish' => 'Publicar',
	'unpublish' => 'Despublicar',
	'choose file' => 'Escull fitxer',
	
	'exhibition name' => 'Nom de l\'exposició',
	'advanced mode' => 'Mode avançat',
	'theme' => 'Tema',
	'api key' => 'API Key',
	'image max' => 'Mida màx. d\'imatge',
	'thumb max' => 'Mida màx.de thumbnail',
	'image quality' => 'Qualitat d\'imatge',
	'freelancer' => 'Disponibilitat Freelance',
	'pre nav text' => 'Text Pre-Nav',
	'post nav text' => 'Text Post-Nav',
	'html allowed' => '(HTML Permès)',
	'update order' => 'Actualitzar l\'ordre',
	'view' => 'Veure',
	'no images' => 'Cap imatge',
	'add images' => 'Afegir imatges',
	'image title' => 'Títol de l\'imatge',
	'image caption' => 'Llegenda de l\'imatge',
	'attach more files' => 'Adjuntar més fitxers',
	'page process' => 'Processar la pàgina',
	'page hide' => 'Amagar la pàgina',
	'background image' => 'Imatge de fons',
	'background color' => 'Color  de fons',
	'edit color' => 'Clicka en el color per a canviar la selecció.',
	'uploaded' => 'Pujat',
	'updated' => 'Actualitzat',
	'width' => 'Ample',
	'height' => 'Alt',
	'kb' => 'KB',
	'saving' => 'Guardant...',
	
	// editor buttons & such
	'bold' => 'Negreta',
	'italic' => 'Cursiva',
	'underline' => 'Subratllar',
	'links manager' => 'Gestió d\'enllaços',
	'files manager' => 'Gestió de fitxers',
	'save preview' => 'Guardar/Previsualitzar',
	'upload' => 'Pujar',
	'make selection' => 'Seleccionar',
	'on' => 'On',
	'off' => 'Off',
	
	// popup editor parts
	"create link" => "Crear un enllaç",
	"hyperlink" => "Enllaç",
	"urlemail" => "URL / Email",
	"none found" => "Cap trobat",
	"allowed filetypes" => "Fitxers permesos",
	"upload files" => "Pujar fitxers",
	"attach more" => "Adjuntar més fitxers",
	"title" => "Títol",
	"edit file info" => "Editar la informació del fitxer",
	"description" => "Descripció",
	"if applicable" => "(Si és aplicable)",
	
	// statistics related things
	'referrers' => 'Referències',
	'page visits' => 'Pàgines visitades',
	
	'total' => 'Total',
	'unique' => 'Únic',
	'refers' => 'Referències',
	
	'since' => 'Des de',
	'ip' => 'IP',
	'country' => 'País',
	'date' => 'Data',
	'keyword' => 'Paraula clau',
	'total pages' => 'Total pàgines',
	'next' => 'Següent',
	'previous' => 'Anterior',
	'visits' => 'Visites',
	'page' => 'Pàgina',
	
	'this week' => 'Aquesta setmana',
	'today' => 'Avui',
	'yesterday' => 'Ahir',
	'this month' => 'Aquest mes',
	'last week' => 'Setmana passada',
	'year' => 'Any',
	'last month' => 'Mes passat',
	'top 10 referrers' => 'Top 10 referències',
	'top 10 keywords' => 'Top 10 paraules clau',
	'top 10 countries' => 'Top 10 països',
	'past 30' => 'Últims 30 dies',
	
	'2 weeks ago' => 'Fa 2 setmanes',
	'3 weeks ago' => 'Fa 3 setmanes',
	'4 weeks ago' => 'Fa 4 setmaness',
	'2 days ago' => 'Fa 2 dies',
	'3 days ago' => 'Fa 3 dies',
	'4 days ago' => 'Fa 4 dies',
	'5 days ago' => 'Fa 5 dies',
	'6 days ago' => 'Fa 6 dies',
	'2 months ago' => 'Fa 2 mesos',
	'3 months ago' => 'Fa 3 mesos',
	'4 months ago' => 'Fa 4 mesos',
	'5 months ago' => 'Fa 5 mesos',
	'6 months ago' => 'Fa 6 mesos',
	'7 months ago' => 'Fa 7 mesos',
	'8 months ago' => 'Fa 8 mesos',
	'9 months ago' => 'Fa 9 mesos',
	'10 months ago' => 'Fa 10 mesos',
	'11 months ago' => 'Fa 11 mesos',
	
	// system strings
	'name' => 'Nom',
	'last name' => 'Cognoms',
	'email' => 'Email',
	'login' => 'Nom d\'usuari',
	'password' => 'Contrasenya',
	'confirm password' => 'Confirmar contrasenya',
	'number chars' => '6-12 caràcters',
	'if change' => 'Si canvia',
	'time now' => 'Quina hora és ara?',
	'time format' => 'Format de l\'hora',
	'your language' => 'Idioma',
	
	// installation
	'htaccess ok' => 'El fitxer .htaccess està llest...',
	'htaccess not ok' => "Configura 'MODREWRITE' en 'false' a config.php...",
	'files ok' => "La carpeta /files s\'ha instal·lat correctament...",
	'files not ok' => "Els permisos de la carpeta /files són incorrectes...",
	'filesgimgs ok' => "La carpeta /files/gimgs  s\'ha instal·lat correctament...",
	'filesgimgs not ok' => "Els permisos de la carpeta /files/gimgs són incorrectes...",
	'try db setup now' => "Ara anem a configurar la base de dades.",
	'continue' => "Continua",
	'please correct errors' => "Corregeix els errors aquí adalt, si us plau.",
	'refresh page' => "Després, actualitza aquesta pàgina.",
	'goto forum' => "Ves al <a href='http://www.indexhibit.org/forum/'>forum d\'ajuda</a> si tens preguntes.",
	'edit config' => "Tens que editar el teu fitxer config.php file amb la configuració adequada de la base de dades.",
	'refresh this page' => "Actualitza aquesta pàgina després d\'haber fet aquest últim pas.",
	'contact webhost' => "Si no saps això contacta amb el teu hosting.",
	'database is ready' => "Sembla que la base de dades està llesta.",
	'tried installing' => "Hem intentat instal·lar els taulers.",
	'cannot install' => "No podem conectar / instal·lar la base de dades.",
	'check config' => "Comproba la configuració de config de nou, si us plau.",
	'default login' => "El nom d\'usuari / contrasenya per defecte  són index1 / exhibit.",
	'change settings' => "Canvia'ls, així com la configuració de la teva pàgina, un cop conectat.",
	'lets login' => "Entrem!",
	'freak out' => "Hi ha un error espantós, surt pitant!",
	
	// javascript confirm pops
	'are you sure' => 'Estas segur?',
	
	// additions 17.03.2007
	'change password' => 'Canviar la contrasenya',
	'project year' => 'Any del projecte',
	'report' => 'Difondre',
	'email address' => 'Correu electrònic',
	'below required' => 'Camp necessari per a difusió a indexihibit',
	'from registration' => 'Del registre Indexhibit',
	'register at' => 'Registrar-se a',
	'background tiling' => 'Mosaic de fons',
	'page process' => 'Processar el text',
	'hide page' => 'Amagar pàgina',
	'allowed formats' => 'Només jpg, png i gif.',
	'filetypes' => 'Tipus de fitxers',
	'updating' => 'Posant al dia...',

	// additions 18.03.2007
	'max file size' => 'Pes máx. de fitxer',
	'exhibition format' => 'Format d\'exposició',
	'view full size' => 'Mida real',
	'cancel' => 'Cancel·lar',
	'view site' => 'Veure la teva pàgina',
	'store' => 'Botiga',
	
	// additions 19.03.2007
	'config ok' => "La carpeta /ndxz-studio/config es pot modificar...",
	'config not ok' => "La carpeta /ndxz-studio/config no es pot modificar...",
	'database server' => "Servidor de la base de dades",
	'database username' => "Nom d\'usuari de la base de dades",
	'database name' => "Nom de la base de dades",
	'database password' => "Contrasenya de la base de dades",

	// additions 10.04.2007
	'create new section' => "Crear una secció nova",
	'section name' => "Nom de la secció", 
	'folder name' => "Nom de la carpeta", 
	'chronological' => "Cronològic", 
	'sectional' => "Per secció",
	'use editor' => "Editor WYSIWYG",
	'organize' => "Organitzar", 
	'sections' => "Seccions", 
	'path' => "Camí",
	'section order' => "Ordre de les seccions", 
	'reporting' => "Transmissió ", 
	'sure delete section' => "Segur? Aquesta acció esborrarà totes les pàgines de la secció",
	'projects section' => "Secció de projectes", 
	'about this site' => "Sobre aquesta pàgina",
	'additional options' => "Paràmetres adicionals", 
	'add section' => "Afegir secció",
	
	// additions 21.04.2007
	'section display' => "Títol de la Secció de l\'exposició",
	
	'the_end' => 'A reveure!'
	//'' => '',
);


?>