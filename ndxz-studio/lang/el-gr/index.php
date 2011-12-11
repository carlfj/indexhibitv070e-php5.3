<?php if (!defined('SITE')) exit('No direct script access allowed');

/**
* Translation
*
* Greek (Hellenic) 
* 
* @version 1.0
* @author Pindaros Charissiadis with the valuable help of Thodoris Kominis
*/

// EL-GR 

$words = array 
(
// BASIC INTERFACE PARTS
'indexhibit' => 'Indexhibit',
'preferences' => 'Προτιμήσεις',
'help' => 'Βοήθεια',
'logout' => 'Αποσύνδεση',

// BASIC MAIN NAV PARTS
'content' => 'Περιεχόμενο',
'admin' => 'Διαχείριση',
'pages' => 'Σελίδες',
'settings' => 'Ρυθμίσεις', 
'section' => 'Ενότητα',
'exhibits' => 'Εκθέματα',
'stats' => 'Στατιστικές',
'settings' => 'Ρυθμίσεις',	
'system' => 'Σύστημα',
'user' => 'Χρήστης',

// error messages
'login err' => 'Ο κωδικός πρόσβασης ή το όνομα χρήστη είναι λάθος. Ξαναδοκιμάστε.',
'router err 1' => 'Αυτό το module/σελίδα δεν υπάρχει.',
'class not found' => 'Δεν βρέθηκε τάξη (class)',
'database is unavailable' => 'Η βάση δεδομένων δεν είναι διαθέσιμη.',
'error finding settings' => 'Σφάλμα - δεν βρέθηκαν ρυθμίσεις βάσης δεδομένων.',
'no menu created' => 'Δεν έχει δημιουργηθεί μενού.',
'no results' => 'Δεν υπάρχουν αποτελέσματα. Υπήρξε κάποιο σφάλμα.',

// Location descriptors
'main' => 'Αρχική σελίδα',
'edit' => 'Επεξεργασία', 
'preview' => 'Προεπισκόπιση',
'search' => 'Αναζήτηση',
'new' => 'Νέο',

// some tabs
'text' => 'Κείμενο',
'images' => 'Εικόνες',

// meed tp tranlsate the default sections
'project' => 'Εργασία',
'on-going' => 'Υπό εξέλιξη',

// generic forms parts & labels
'page title' => 'Όνομα Έκθεσης',
'add page' => 'Προσθήκη Εκθέματος',
'submit' => 'Υποβολή',
'update' => 'Ενημέρωση',
'required' => 'Απαραίτητο',
'optional' => 'Προαιρετικό',	
'hidden' => 'Κρυφό',
'delete' => 'Διαγραφή',	
'publish' => 'Δημοσίευση',
'unpublish' => 'Μη Δημοσίευση',
'choose file' => 'Επιλογή αρχείου',

'exhibition name' => 'Όνομα Έκθεσης',
'advanced mode' => 'Προηγμένες Επιλογές',
'theme' => 'Θέμα',	
'api key' => 'API Κλειδί',
'image max' => 'Μέγ. Μέγεθος Εικόνας',	
'thumb max' => 'Μέγ. Μέγεθος Μικρογραφίας',
'image quality' => 'Ποιότητα Εικόνας',
'freelancer' => 'Κατάσταση Freelance',
'pre nav text' => 'Κείμενο Pre-Nav',
'post nav text' => 'Κείμενο Post-Nav',
'html allowed' => '(Επιτρέπεται η HTML)',
'update order' => 'Ενημέρωση Ταξινόμησης',
'view' => 'Προβολή',
'no images' => 'Δεν υπάρχουν εικόνες',
'add images' => 'Προσθήκη Εικόνων',
'image title' => 'Τίτλος Εικόνας',
'image caption' => 'Λεζάντα Εικόνας',
'attach more files' => 'Προσθήκη Περισσότερων Αρχείων',
'page process' => 'Επεξεργασία Σελίδας',
'page hide' => 'Απόκρυψη Σελίδας',
'background image' => 'Εικόνα στο Φόντο',
'background color' => 'Χρώμα στο Φόντο',
'edit color' => 'Κάντε κλικ στο πλαίσιο για να επιλέξετε χρώμα.',
'uploaded' => 'Ανέβηκε',
'updated' => 'Ενημερώθηκε',
'width' => 'Πλάτος',
'height' => 'Ύψος',
'kb' => 'KB',
'saving' => 'Αποθήκευση...',

// editor buttons & such
'bold' => 'Έντονα',
'italic' => 'Πλάγια',
'underline' => 'Υπογράμμιση',
'links manager' => 'Διαχείριση Συνδέσμων',
'files manager' => 'Διαχείριση Αρχείων',
'save preview' => 'Αποθήκευση/Προεπισκόπιση',
'upload' => 'Αποστολή',
'make selection' => 'Επιλέξτε',
'on' => 'Ενεργό',
'off' => 'Ανενεργό',

// popup editor parts
"create link" => "Δημιουργία Συνδέσμου",
"hyperlink" => "Hyperlink",
"urlemail" => "URL / Email",
"none found" => "Δεν βρέθηκε τίποτα",
"allowed filetypes" => "Επιτρεπόμενοι Τύποι Αρχείων",
"upload files" => "Αποστολή Αρχείων",
"attach more" => "Επισύναψη περισσότερων αρχείων",
"title" => "Τίτλος",
"edit file info" => "Επεξεργασία Πληροφοριών Αρχείου",
"description" => "Περιγραφή",
"if applicable" => "(αν ισχύει)",

// statistics related things
'referrers' => 'Referrers',
'page visits' => 'Επισκέψεις Σελίδας',

'total' => 'Σύνολο',
'unique' => 'Μοναδικοί',
'refers' => 'Αναφορές',

'since' => 'Από',
'ip' => 'IP',
'country' => 'Χώρα',
'date' => 'Ημερομηνία',
'keyword' => 'Λέξη Κλειδί',
'total pages' => 'Σύνολο Σελίδων',
'next' => 'Επόμενο',
'previous' => 'Προηγούμενο',
'visits' => 'Επισκέψεις',
'page' => 'Σελίδα',

'this week' => 'Αυτή την Εβδομάδα',
'today' => 'Σήμερα',
'yesterday' => 'Χτες',
'this month' => 'Αυτό το Μήνα',
'last week' => 'Προηγούμενη Εβδομάδα',
'year' => 'Έτος',
'last month' => 'Προηγούμενος Μήνας',
'top 10 referrers' => 'Οι 10 Δημοφιλέστεροι Referrers',
'top 10 keywords' => 'Οι 10 Δημοφιλέστερες Λέξεις Κλειδιά',
'top 10 countries' => 'Οι 10 Δημοφιλέστερες Χώρες',
'past 30' => 'τελευταίες 30 ημέρες',

'2 weeks ago' => 'πριν 2 εβδομάδες',
'3 weeks ago' => 'πριν 3 εβδομάδες',
'4 weeks ago' => 'πριν 4 εβδομάδες',
'2 days ago' => 'πριν 2 ημέρες',
'3 days ago' => 'πριν 3 ημέρες',
'4 days ago' => 'πριν 4 ημέρες',
'5 days ago' => 'πριν 5 ημέρες',
'6 days ago' => 'πριν 2 ημέρες',
'2 months ago' => 'πριν 2 μήνες',
'3 months ago' => 'πριν 3 μήνες',
'4 months ago' => 'πριν 4 μήνες',
'5 months ago' => 'πριν 5 μήνες',
'6 months ago' => 'πριν 6 μήνες',
'7 months ago' => 'πριν 7 μήνες',
'8 months ago' => 'πριν 8 μήνες',
'9 months ago' => 'πριν 9 μήνες',
'10 months ago' => 'πριν 10 μήνες',
'11 months ago' => 'πριν 11 μήνες',

// system strings
'name' => 'Όνομα',
'last name' => 'Επώνυμο',
'email' => 'Email',
'login' => 'Σύνδεση Χρήστη', 
'password' => 'Κωδικός',
'confirm password' => 'Επιβεβαίωση Κωδικού',
'number chars' => '6-12 χαρακτ.',
'if change' => 'αν τον αλλάξετε',
'time now' => 'Τι ώρα είναι τώρα;',
'time format' => 'Μορφή Ώρας',
'your language' => 'Γλώσσα',

// installation
'htaccess ok' => 'το αρχείο .htaccess file είναι έτοιμο...',
'htaccess not ok' => "Ορίστε το 'MODREWRITE' σε 'false' στο config.php...",
'files ok' => "ο φάκελος /files είναι εγγράψιμος...",
'files not ok' => "ο φάκελος /files δεν είναι εγγράψιμος...",
'filesgimgs ok' => "ο φάκελος /files/gimgs είναι εγγράψιμος...",
'filesgimgs not ok' =>"ο φάκελος /files/gimgs δεν είναι εγγράψιμος...",
'try db setup now' => "Ας προσπαθήσουμε τώρα να εγκαταστήσουμε την βάση δεδομένων.",
'continue' => "Συνέχεια",
'please correct errors' => "Παρακαλώ διορθώστε τα παραπάνω σφάλματα.",
'refresh page' => "Μετά ανανεώστε την σελίδα.",
'goto forum' => "Μεταβείτε στο <a href='http://www.indexhibit.org/forum/'>help forum</a> για βοήθεια.",
'edit config' => "Απαιτείται επεξεργασία του αρχείου config.php με τις κατάλληλες ρυθμίσεις της βάσης δεδομένων.",
'refresh this page' => "Ανανεώστε την σελίδα αφού ολοκληρώσετε αυτό το βήμα.",
'contact webhost' => "Αν δεν τα γνωρίζετε επικοινωνήστε με τον webhost σας για βοήθεια.",
'database is ready' => "H βάση δεδομένων είναι έτοιμη.",
'tried installing' => "Προσπαθήσαμε να εγκαταστήσουμε τους πίνακες (tables) της βάσης δεδομένων.",
'cannot install' => "Η σύνδεση ή η εγκατάσταση της βάση δεδομένων δεν είναι εφικτή.",
'check config' => "Παρακαλώ ελέγξτε τις ρυθμίσεις (config settings) ξανά.",
'default login' => "Η προεπιλεγμένη ταυτότητα χρήστη/κωδικός είναι index1 / exhibit.",
'change settings' => "Αλλάξτε τα και τις ρυθμίσεις με το που συνδεθείτε για πρώτη φορά.",
'lets login' => "Ας συνδεθούμε!",
'freak out' => "Έχει γίνει κάποιο φρικιαστικό σφάλμα - πανικοβληθείτε!",

// javascript confirm pops
'are you sure' => 'Είστε σίγουρος?',


// additions 17.03.2007
'change password' => 'Αλλαγή κωδικού',
'project year' => 'Έτος Εργασίας', 
'report' => 'Έγινε αναφορά',
'email address' => 'Διεύθυνση email',
'below required' => 'Below required for Indexhibit reporting',
'from registration' => 'from Indexhibit registration',
'register at' => 'Register at',
'background tiling' => 'Επανάληψη Εικόνας Φόντου',
'page process' => 'Επεξεργασία HTML',
'hide page' => 'Απόκρυψη Σελίδας',
'allowed formats' => 'μόνο jpg, png και gif.',
'filetypes' => 'Τύποι αρχείων',
'updating' => 'Ενημέρωση...',

// additions 18.03.2007
'max file size' => 'Μέγιστο Μέγεθος Αρχείου',
'exhibition format' => 'Μορφή Έκθεσης',
'view full size' => 'Πλήρες μέγεθος',
'cancel' => 'Άκυρο',
'view site' => 'Προβολή Ιστότοπου',
'store' => 'Store',

// additions 19.03.2007
'config ok' => "ο φάκελος /ndxz-studio/config είναι εγγράψιμος...",
'config not ok' => "ο φάκελος /ndxz-studio/config δεν είναι εγγράψιμος...",
'database server' => "Database Server",
'database username' => "Database Username",
'database name' => "Database Name",
'database password' => "Database Password",

// additions 10.04.2007
'create new section' => "Δημιουργία Νέας Ενότητας",
'section name' => "Όνομα Ενότητας",
'folder name' => "Όνομα Φακέλου",
'chronological' => "Χρονολογικά",
'sectional' => "Ανά Ενότητες",
'use editor' => "WYSIWYG Επεξεργασία",
'organize' => "Οργάνωση",
'sections' => "Ενότητες",
'path' => "Διαδρομή",
'section order' => "Ταξινόμηση Ενοτήτων",
'reporting' => "Αναφορά",
'sure delete section' => "Είστε σίγουρος; Θα διαγραφούν και όλες οι σελίδες μέσα στην ενότητα!",
'projects section' => "Χρονολογική Οργάνωση Ενότητας",
'about this site' => "Σχετικά με αυτό τον Ιστότοπο...",
'additional options' => "Επιπρόσθετες Ρυθμίσεις",
'add section' => "Προσθήκη Ενότητας",

// additions 21.04.2007
'section display' => "Προβολή Ονόματος Ενότητας",

// additions - no date yet
'invalid input' => "Λάθος Καταχώρηση",

'the_end' => 'τέλος'
//'' => '',
);


?>