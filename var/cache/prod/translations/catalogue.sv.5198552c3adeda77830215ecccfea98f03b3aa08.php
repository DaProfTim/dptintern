<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sv', array (
  'validators' => 
  array (
    'This value should be false.' => 'Värdet ska vara falskt.',
    'This value should be true.' => 'Värdet ska vara sant.',
    'This value should be of type {{ type }}.' => 'Värdet ska vara av typen {{ type }}.',
    'This value should be blank.' => 'Värdet ska vara tomt.',
    'The value you selected is not a valid choice.' => 'Värdet ska vara ett av de givna valen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du måste välja minst {{ limit }} val.|Du måste välja minst {{ limit }} val.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan som mest välja {{ limit }} val.|Du kan som mest välja {{ limit }} val.',
    'One or more of the given values is invalid.' => 'Ett eller fler av de angivna värdena är ogiltigt.',
    'This field was not expected.' => 'Det här fältet förväntades inte.',
    'This field is missing.' => 'Det här fältet saknas.',
    'This value is not a valid date.' => 'Värdet är inte ett giltigt datum.',
    'This value is not a valid datetime.' => 'Värdet är inte ett giltigt datum med tid.',
    'This value is not a valid email address.' => 'Värdet är inte en giltig epost-adress.',
    'The file could not be found.' => 'Filen kunde inte hittas.',
    'The file is not readable.' => 'Filen är inte läsbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen är för stor ({{ size }} {{ suffix }}). Största tillåtna storlek är {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Filens MIME-typ ({{ type }}) är ogiltig. De tillåtna typerna är {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Värdet ska vara {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Värdet är för långt. Det ska ha {{ limit }} tecken eller färre.|Värdet är för långt. Det ska ha {{ limit }} tecken eller färre.',
    'This value should be {{ limit }} or more.' => 'Värdet ska vara {{ limit }} eller mer.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Värdet är för kort. Det ska ha {{ limit }} tecken eller mer.|Värdet är för kort. Det ska ha {{ limit }} tecken eller mer.',
    'This value should not be blank.' => 'Värdet kan inte vara tomt.',
    'This value should not be null.' => 'Värdet kan inte vara null.',
    'This value should be null.' => 'Värdet ska vara null.',
    'This value is not valid.' => 'Värdet är inte giltigt.',
    'This value is not a valid time.' => 'Värdet är inte en giltig tid.',
    'This value is not a valid URL.' => 'Värdet är inte en giltig URL.',
    'The two values should be equal.' => 'De två värdena måste vara lika.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen är för stor. Tillåten maximal storlek är {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen är för stor.',
    'The file could not be uploaded.' => 'Filen kunde inte laddas upp.',
    'This value should be a valid number.' => 'Värdet ska vara ett giltigt nummer.',
    'This file is not a valid image.' => 'Filen är ingen giltig bild.',
    'This is not a valid IP address.' => 'Det här är inte en giltig IP-adress.',
    'This value is not a valid language.' => 'Värdet är inte ett giltigt språk.',
    'This value is not a valid locale.' => 'Värdet är inte en giltig plats.',
    'This value is not a valid country.' => 'Värdet är inte ett giltigt land.',
    'This value is already used.' => 'Värdet används redan.',
    'The size of the image could not be detected.' => 'Det gick inte att fastställa storleken på bilden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Bildens bredd är för stor ({{ width }}px). Tillåten maximal bredd är {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Bildens bredd är för liten ({{ width }}px). Minsta förväntade bredd är {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bildens höjd är för stor ({{ height }}px). Tillåten maximal bredd är {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Bildens höjd är för liten ({{ height }}px). Minsta förväntade höjd är {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Värdet ska vara användarens nuvarande lösenord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Värdet ska ha exakt {{ limit }} tecken.|Värdet ska ha exakt {{ limit }} tecken.',
    'The file was only partially uploaded.' => 'Filen laddades bara upp delvis.',
    'No file was uploaded.' => 'Ingen fil laddades upp.',
    'No temporary folder was configured in php.ini.' => 'Det finns ingen temporär mapp konfigurerad i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan inte skriva temporär fil till disken.',
    'A PHP extension caused the upload to fail.' => 'En PHP extension gjorde att uppladdningen misslyckades.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Den här samlingen ska innehålla {{ limit }} element eller mer.|Den här samlingen ska innehålla {{ limit }} element eller mer.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Den här samlingen ska innehålla {{ limit }} element eller mindre.|Den här samlingen ska innehålla {{ limit }} element eller mindre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Den här samlingen ska innehålla exakt {{ limit }} element.|Den här samlingen ska innehålla exakt {{ limit }} element.',
    'Invalid card number.' => 'Ogiltigt kortnummer.',
    'Unsupported card type or invalid card number.' => 'Okänd korttyp eller ogiltigt kortnummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Det här är inte en giltig International Bank Account Number (IBANK).',
    'This value is not a valid ISBN-10.' => 'Värdet är inte en giltig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Värdet är inte en giltig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Värdet är varken en giltig ISBN-10 eller en giltig ISBN-13.',
    'This value is not a valid ISSN.' => 'Värdet är inte en giltig ISSN.',
    'This value is not a valid currency.' => 'Värdet är inte en giltig valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Värdet ska vara detsamma som {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Värdet ska vara större än {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Värdet ska bara större än eller detsamma som {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Värdet ska vara identiskt till {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Värdet ska vara mindre än {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Värdet ska vara mindre än eller detsamma som {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Värdet ska inte vara detsamma som {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Värdet ska inte vara identiskt med {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Förhållandet mellan bildens bredd och höjd är för stort ({{ ratio }}). Högsta tillåtna förhållande är {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Förhållandet mellan bildens bredd och höjd är för litet ({{ ratio }}). Minsta tillåtna förhållande är {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Bilden är kvadratisk ({{ width }}x{{ height }}px). Kvadratiska bilder tillåts inte.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Bilden är landskapsorienterad ({{ width }}x{{ height }}px). Landskapsorienterade bilder tillåts inte.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Bilden är porträttsorienterad ({{ width }}x{{ height }}px). Porträttsorienterade bilder tillåts inte.',
    'An empty file is not allowed.' => 'En tom fil är inte tillåten.',
    'The host could not be resolved.' => 'Värddatorn kunde inte hittas.',
    'This value does not match the expected {{ charset }} charset.' => 'Detta värde har inte den förväntade teckenkodningen {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Detta är inte en giltig BIC-kod.',
    'This form should not contain extra fields.' => 'Formuläret kan inte innehålla extra fält.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den uppladdade filen var för stor. Försök ladda upp en mindre fil.',
    'The CSRF token is invalid.' => 'CSRF-symbolen är inte giltig.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ett autentiseringsfel har inträffat.',
    'Authentication credentials could not be found.' => 'Uppgifterna för autentisering kunde inte hittas.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiseringen kunde inte genomföras på grund av systemfel.',
    'Invalid credentials.' => 'Felaktiga uppgifter.',
    'Cookie has already been used by someone else.' => 'Cookien har redan använts av någon annan.',
    'Not privileged to request the resource.' => 'Saknar rättigheter för resursen.',
    'Invalid CSRF token.' => 'Ogiltig CSRF-token.',
    'Digest nonce has expired.' => 'Förfallen digest nonce.',
    'No authentication provider found to support the authentication token.' => 'Ingen leverantör för autentisering hittades för angiven autentiseringstoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session finns tillgänglig, antingen har den förfallit eller är cookies inte aktiverat.',
    'No token could be found.' => 'Ingen token kunde hittas.',
    'Username could not be found.' => 'Användarnamnet kunde inte hittas.',
    'Account has expired.' => 'Kontot har förfallit.',
    'Credentials have expired.' => 'Uppgifterna har förfallit.',
    'Account is disabled.' => 'Kontot är inaktiverat.',
    'Account is locked.' => 'Kontot är låst.',
  ),
));

$catalogueDe = new MessageCatalogue('de', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dieser Wert sollte false sein.',
    'This value should be true.' => 'Dieser Wert sollte true sein.',
    'This value should be of type {{ type }}.' => 'Dieser Wert sollte vom Typ {{ type }} sein.',
    'This value should be blank.' => 'Dieser Wert sollte leer sein.',
    'The value you selected is not a valid choice.' => 'Sie haben einen ungültigen Wert ausgewählt.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sie müssen mindestens {{ limit }} Möglichkeit wählen.|Sie müssen mindestens {{ limit }} Möglichkeiten wählen.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sie dürfen höchstens {{ limit }} Möglichkeit wählen.|Sie dürfen höchstens {{ limit }} Möglichkeiten wählen.',
    'One or more of the given values is invalid.' => 'Einer oder mehrere der angegebenen Werte sind ungültig.',
    'This field was not expected.' => 'Dieses Feld wurde nicht erwartet.',
    'This field is missing.' => 'Dieses Feld fehlt.',
    'This value is not a valid date.' => 'Dieser Wert entspricht keiner gültigen Datumsangabe.',
    'This value is not a valid datetime.' => 'Dieser Wert entspricht keiner gültigen Datums- und Zeitangabe.',
    'This value is not a valid email address.' => 'Dieser Wert ist keine gültige E-Mail-Adresse.',
    'The file could not be found.' => 'Die Datei wurde nicht gefunden.',
    'The file is not readable.' => 'Die Datei ist nicht lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß ({{ size }} {{ suffix }}). Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Der Dateityp ist ungültig ({{ type }}). Erlaubte Dateitypen sind {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dieser Wert sollte kleiner oder gleich {{ limit }} sein.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.',
    'This value should be {{ limit }} or more.' => 'Dieser Wert sollte größer oder gleich {{ limit }} sein.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.',
    'This value should not be blank.' => 'Dieser Wert sollte nicht leer sein.',
    'This value should not be null.' => 'Dieser Wert sollte nicht null sein.',
    'This value should be null.' => 'Dieser Wert sollte null sein.',
    'This value is not valid.' => 'Dieser Wert ist nicht gültig.',
    'This value is not a valid time.' => 'Dieser Wert entspricht keiner gültigen Zeitangabe.',
    'This value is not a valid URL.' => 'Dieser Wert ist keine gültige URL.',
    'The two values should be equal.' => 'Die beiden Werte sollten identisch sein.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß. Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die Datei ist zu groß.',
    'The file could not be uploaded.' => 'Die Datei konnte nicht hochgeladen werden.',
    'This value should be a valid number.' => 'Dieser Wert sollte eine gültige Zahl sein.',
    'This file is not a valid image.' => 'Diese Datei ist kein gültiges Bild.',
    'This is not a valid IP address.' => 'Dies ist keine gültige IP-Adresse.',
    'This value is not a valid language.' => 'Dieser Wert entspricht keiner gültigen Sprache.',
    'This value is not a valid locale.' => 'Dieser Wert entspricht keinem gültigen Gebietsschema.',
    'This value is not a valid country.' => 'Dieser Wert entspricht keinem gültigen Land.',
    'This value is already used.' => 'Dieser Wert wird bereits verwendet.',
    'The size of the image could not be detected.' => 'Die Größe des Bildes konnte nicht ermittelt werden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die Bildbreite ist zu groß ({{ width }}px). Die maximal zulässige Breite beträgt {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die Bildbreite ist zu gering ({{ width }}px). Die erwartete Mindestbreite beträgt {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die Bildhöhe ist zu groß ({{ height }}px). Die maximal zulässige Höhe beträgt {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die Bildhöhe ist zu gering ({{ height }}px). Die erwartete Mindesthöhe beträgt {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dieser Wert sollte dem aktuellen Benutzerpasswort entsprechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dieser Wert sollte genau {{ limit }} Zeichen lang sein.|Dieser Wert sollte genau {{ limit }} Zeichen lang sein.',
    'The file was only partially uploaded.' => 'Die Datei wurde nur teilweise hochgeladen.',
    'No file was uploaded.' => 'Es wurde keine Datei hochgeladen.',
    'No temporary folder was configured in php.ini.' => 'Es wurde kein temporärer Ordner in der php.ini konfiguriert oder der temporäre Ordner existiert nicht.',
    'Cannot write temporary file to disk.' => 'Kann die temporäre Datei nicht speichern.',
    'A PHP extension caused the upload to fail.' => 'Eine PHP-Erweiterung verhinderte den Upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Diese Sammlung sollte genau {{ limit }} Element beinhalten.|Diese Sammlung sollte genau {{ limit }} Elemente beinhalten.',
    'Invalid card number.' => 'Ungültige Kartennummer.',
    'Unsupported card type or invalid card number.' => 'Nicht unterstützer Kartentyp oder ungültige Kartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dieser Wert ist keine gültige internationale Bankkontonummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Dieser Wert entspricht keiner gültigen ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dieser Wert entspricht keiner gültigen ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dieser Wert ist weder eine gültige ISBN-10 noch eine gültige ISBN-13.',
    'This value is not a valid ISSN.' => 'Dieser Wert ist keine gültige ISSN.',
    'This value is not a valid currency.' => 'Dieser Wert ist keine gültige Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dieser Wert sollte gleich {{ compared_value }} sein.',
    'This value should be greater than {{ compared_value }}.' => 'Dieser Wert sollte größer als {{ compared_value }} sein.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dieser Wert sollte größer oder gleich {{ compared_value }} sein.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dieser Wert sollte kleiner als {{ compared_value }} sein.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dieser Wert sollte kleiner oder gleich {{ compared_value }} sein.',
    'This value should not be equal to {{ compared_value }}.' => 'Dieser Wert sollte nicht {{ compared_value }} sein.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte nicht identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu groß ({{ ratio }}). Der erlaubte Maximalwert ist {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu klein ({{ ratio }}). Der erwartete Minimalwert ist {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Das Bild ist quadratisch ({{ width }}x{{ height }}px). Quadratische Bilder sind nicht erlaubt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Das Bild ist im Querformat ({{ width }}x{{ height }}px). Bilder im Querformat sind nicht erlaubt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Das Bild ist im Hochformat ({{ width }}x{{ height }}px). Bilder im Hochformat sind nicht erlaubt.',
    'An empty file is not allowed.' => 'Eine leere Datei ist nicht erlaubt.',
    'The host could not be resolved.' => 'Der Hostname konnte nicht aufgelöst werden.',
    'This value does not match the expected {{ charset }} charset.' => 'Dieser Wert entspricht nicht dem erwarteten Zeichensatz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dieser Wert ist kein gültiger BIC.',
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte das Formular erneut zu senden.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Es ist ein Fehler bei der Authentifikation aufgetreten.',
    'Authentication credentials could not be found.' => 'Es konnten keine Zugangsdaten gefunden werden.',
    'Authentication request could not be processed due to a system problem.' => 'Die Authentifikation konnte wegen eines Systemproblems nicht bearbeitet werden.',
    'Invalid credentials.' => 'Fehlerhafte Zugangsdaten.',
    'Cookie has already been used by someone else.' => 'Cookie wurde bereits von jemand anderem verwendet.',
    'Not privileged to request the resource.' => 'Keine Rechte, um die Ressource anzufragen.',
    'Invalid CSRF token.' => 'Ungültiges CSRF-Token.',
    'Digest nonce has expired.' => 'Digest nonce ist abgelaufen.',
    'No authentication provider found to support the authentication token.' => 'Es wurde kein Authentifizierungs-Provider gefunden, der das Authentifizierungs-Token unterstützt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keine Session verfügbar, entweder ist diese abgelaufen oder Cookies sind nicht aktiviert.',
    'No token could be found.' => 'Es wurde kein Token gefunden.',
    'Username could not be found.' => 'Der Benutzername wurde nicht gefunden.',
    'Account has expired.' => 'Der Account ist abgelaufen.',
    'Credentials have expired.' => 'Die Zugangsdaten sind abgelaufen.',
    'Account is disabled.' => 'Der Account ist deaktiviert.',
    'Account is locked.' => 'Der Account ist gesperrt.',
  ),
  'messages' => 
  array (
    'index.title' => 'Monitoring',
    'index.text' => 'Bitte geben Sie Ihre Zugangsdaten in das folgende Formular ein.',
    'menu.login' => 'Login',
    'menu.reset_pw' => 'Passwort zurücksetzen',
    'global.app_update_title' => 'Anwendungsupdate',
    'global.app_update' => 'Die Anwendung wurde aktualisiert und wird nun neu geladen.',
    'global.please_wait' => 'Die Daten werden geladen, einen Moment bitte...',
    'global.loading' => 'Wird geladen, bitte warten',
    'global.error' => 'Fehler',
    'global.info' => 'Info',
    'global.save' => 'Speichern',
    'global.action_edit' => 'Bearbeiten',
    'global.options' => 'Optionen',
    'global.continue' => 'Fortfahren',
    'global.cancel' => 'Abbrechen',
    'global.entity_not_found' => 'Das Objekt wurde nicht gefunden.',
    'global.csrf_token_invalid' => 'Das CSRF Token ist ungültig.',
    'global.invalid_form' => 'Bitte korrigieren Sie alle rot markierten Felder.',
    'global.empty_fields_error' => 'Bitte füllen Sie alle Felder aus.',
    'global.unmatched_route_title' => 'Ungültige Adresse',
    'global.unmatched_route_info' => 'Die aufgerufene Adresse konnte nicht gefunden werden.',
    'global.xhr_access_denied_title' => 'Zugriff verweigert',
    'global.xhr_access_denied_info' => 'Sie haben für diesen Vorgang keine ausreichende Berechtigung.',
    'global.xhr_exception_title' => 'Serverfehler',
    'global.xhr_exception_info' => 'Bei der Anfrage ist ein Serverfehler aufgetreten. <br>Bitte laden Sie die Seite neu oder versuchen Sie es später erneut.',
    'global.xhr_authentication_invalid_title' => 'Sitzung ungültig',
    'global.xhr_authentication_invalid_info' => 'Ihre Sitzung ist abgelaufen oder ungültig. <br> Mit Klick auf "OK" werden Sie auf die Login-Seite weitergeleitet.',
    'global.copyright' => 'Copyright 2017 <a href="http://www.npo-applications.de">NPO Applications GmbH</a> und <a href="http://www.bms-consulting.de">BMS Consulting GmbH</a>',
    'form.details_missing' => 'Bitte korrigieren Sie alle rot markierten Felder.',
    'form.error_title' => 'Vorgang fehlgeschlagen',
    'form.error' => 'Fehler beim Speichern der Daten.',
    'form.success_title' => 'Speichern erfolgreich',
    'form.success' => 'Die Änderungen wurden gespeichert.',
    'form.unsaved_data_title' => 'Ungespeicherte Änderungen',
    'form.unsaved_data' => 'Sie haben Änderungen vorgenommen, die noch nicht gespeichert wurden. Beim Verlassen der Seite gehen diese Änderungen verloren.
Möchten Sie die Seite trotzdem verlassen?
',
    'form.save' => 'Speichern',
    'form.cancel' => 'Abbrechen',
    'form.delete' => 'Löschen',
    'form.remove' => 'Entfernen',
    'form.edit' => 'Bearbeiten',
    'form.browse' => 'Durchsuchen...',
    'login.title' => 'Login',
    'login.button_login' => 'Anmelden',
    'login.forgot_pw' => 'Passwort vergessen?',
    'login.reset_pw' => 'Passwort zurücksetzen',
    'login.back_to_login' => 'Zurück zum Login',
    'login.login_success' => 'Anmeldung erfolgreich',
    'login.logout' => 'Abmelden',
    'login.logout_success' => 'Sie wurden erfolgreich abgemeldet',
    'login.logout_wait' => 'Sie werden abgemeldet, bitte warten...',
    'login.logged_out' => 'Sie wurden ausgeloggt.',
    'login.success' => 'Login erfolgreich. Sie werden nun in den internen Bereich weitergeleitet.',
    'login.error.token_expired_title' => 'Gültigkeitszeitraum abgelaufen',
    'login.error.token_expired_info' => 'Der aufgerufene Link ist nicht länger gültig, bitte fordern Sie einen neuen an.',
    'login.error.token_invalid_title' => 'Ungültiger Link',
    'login.error.token_invalid_info' => 'Der aufgerufene Link ist nicht gültig, bitte fordern Sie einen neuen an.',
    'login.error.title' => 'Fehler bei der Anmeldung',
    'login.error.bad_credentials' => 'Die eingegebenen Logindaten sind ungültig.',
    'login.error.email_empty' => 'Bitte geben Sie Ihre E-Mail Adresse ein.',
    'login.error.email_invalid' => 'Die eingegebene E-Mail-Adresse ist nicht registriert.',
    'login.password_reset_info' => 'Bitte geben Sie Ihre E-Mail Adresse, mit der Sie im System registriert sind, in das folgende Formular ein.
Sie erhalten dann eine E-Mail mit einem Link zum Zurücksetzen des Passworts.
',
    'login.password_reset_mail_sent_title' => 'Passwort zurücksetzen',
    'login.password_reset_mail_sent' => 'Ein Link zum Zurücksetzen Ihres Passwortes wurde an Ihre E-Mail Adresse geschickt. Bitte kontrollieren Sie Ihr Postfach.',
    'login.password_reset_mail.subject' => 'Zurücksetzen Ihres Monitoring Passworts',
    'login.password_reset_mail.greeting' => 'Sehr geehrte Damen und Herren',
    'login.password_reset_mail.intro' => 'Sie haben das Zurücksetzen Ihres Monitoring Passwort angefordert. Bitte folgen Sie dem unten aufgeführten Link, um Ihr Passwort für den geschützten Login-Bereich zurückzusetzen.
',
    'login.password_reset_mail.info' => 'Die E-Mail wurde noch nicht gelesen und der Gültigkeitszeitraum ist schon abgelaufen?
Nach Ablauf der Gültigkeit können Sie eine neue E-Mail über die Passwort-vergessen-Funktion auf der Anmeldeseite Ihres persönlichen Zugangs anfordern. Klicken Sie bitte dazu auf den nachfolgenden Link:
',
    'user.attrs.email' => 'E-Mail',
    'user.attrs.password' => 'Passwort',
    'user.password_policy' => 'Das Passwort muss eine Mindestlänge von 8 Zeichen haben und mindestens 3 der folgenden Zeichenarten enthalten:
Großbuchstaben, Kleinbuchstaben, Zahlen, Sonderzeichen (!§$()=?*+-_.,;:)
',
    'user.reset_token.expired' => 'Der aufgerufene Link ist nicht länger gültig, bitte fordern Sie einen neuen an.',
    'user.reset_token.invalid' => 'Der aufgerufene Link ist nicht gültig, bitte fordern Sie einen neuen an.',
    'user.email_change.button_change' => 'E-Mail ändern',
    'user.email_change.button_cancel' => 'Ändern abbrechen',
    'user.email_change.button_save' => 'Änderungen speichern',
    'user.email_change.error_empty' => 'Bitte füllen Sie beide E-Mail Felder aus.',
    'user.email_change.error_not_equal' => 'Die Eingaben für die Felder "E-Mail-Adresse" und "E-Mail-Adresse wiederholen" sind nicht identisch',
    'user.email_change.error_not_modified' => 'Sie haben die gleiche E-Mail Adresse eingegeben, die aktuell im System für Sie registriert ist.',
    'user.email_change.error_exists' => 'Diese E-Mail Adresse ist bereits im System für einen anderen Benutzer hinterlegt.',
    'user.email_change.mail_sent' => 'Ein Link zum Bestätigen Ihrer E-Mail Änderungs-Anforderung wurde an Ihre neue E-Mail Adresse geschickt. Bitte kontrollieren Sie Ihr Postfach.',
    'user.email_change.success_title' => 'Änderung erfolgreich',
    'user.email_change.success' => 'Ihre E-Mail Adresse wurde erfolgreich geändert.',
    'user.email_change_mail.subject' => 'Änderung Ihrer Monitoring E-Mail Adresse',
    'user.email_change_mail.intro' => 'Sie haben das Ändern Ihrer Monitoring E-Mail Adresse angefordert. Bitte folgen Sie dem unten aufgeführten Link, um die Änderung zu bestätigen.
',
    'user.email_change_mail.info' => 'Die E-Mail wurde noch nicht gelesen und der Gültigkeitszeitraum ist schon abgelaufen?
Nach Ablauf der Gültigkeit müssen die Änderung In Ihrem persönlichen Bereich erneut anfordern.
',
    'user.password_change' => 'Passwort ändern',
    'user.password_new' => 'Neues Passwort',
    'user.password_repeat' => 'Neues Passwort wiederholen',
    'user.password_current' => 'Aktuelles Passwort',
    'user.password_saved_title' => 'Passwort gespeichert',
    'user.password_saved' => 'Das Passwort wurde erfolgreich gespeichert.',
    'user.password_error' => 'Beim Speichern des Passworts ist ein Fehler aufgetreten.',
    'user.password_invalid' => 'Ihr aktuelles Passwort ist nicht korrekt.',
    'user.password_unequal' => 'Passwort und Passwort-Wiederholung stimmen nicht überein.',
    'user.self_remove_error' => 'Sie können Ihr eigenes Benutzerkonto nicht löschen.',
    'user.error' => 'Fehler',
    'user.personal_data' => 'Persönliche Daten',
    'user.email_form_title' => 'E-Mail-Adresse',
    'user.email_field' => 'E-Mail-Adresse',
    'user.email_field_repeat' => 'E-Mail-Adresse wiederholen',
    'mails.default_greeting' => 'Sehr geehrte Dame oder Herr',
    'mails.from' => 'monitoring@npo-applications.de',
    'mails.signature' => 'Mit freundlichen Grüßen

Ihr Team des Monitoring

(Diese E-Mail wurde automatisch generiert. Bitte antworten Sie nicht auf diese E-Mail Adresse.)
',
  ),
));
$catalogue->addFallbackCatalogue($catalogueDe);

return $catalogue;
