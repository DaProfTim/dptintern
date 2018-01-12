# NPOA Monitoring

## Voraussetzungen

- Composer
- PHP7
- Sencha CMD in der neusten Version (ggf. sencha upgrade durchfuehren) (6.2+)
- korrekt hinterlegte Umgebungsvariablen:
    - Benutzervariablen PATH: C:\Users\BENUTZERNAME\AppData\Roaming\Composer\vendor\bin
    - Systemvariablen PATH: C:\Program Files\Git\usr\bin (oder wo auch immer Git installiert ist)
- PSR2-NPOA Standard (siehe unten)

## Installation (lokal)

Nach dem Klonen dieses Repos zuerst mit

```bash
composer install
```

die Abhängigkeiten herunterladen/installieren. Anschließend muss im Ordner /web/ext-app ein Symlink auf das ExtJS-SDK-Verzeichnis
gesetzt werden. Folgenden Befehl im Projekt-Hauptverzeichnis ausführen:
                                               
```bash
mklink /D "web\ext-app\ext" "..\..\vendor\npoa\extjs"
```

Kommandozeile ggf. mit Administratiorrechten ausführen und unter Unix/Linux entsprechend anpassen. Dies ist nur lokal nötig, um im Development Environment die Ext-Dateien dynamisch laden zu können,
da dort keine kompilierte app.js benutzt wird, in der sonst alle nötigen Dateien gepackt sind.
Mit

```bash
sencha app build development
```
	
die Sencha App fürs Entwickeln builden. Ist die Datenbank noch nicht installiert, folgendes ausführen:

```bash
php bin/console doctrine:schema:create
```

Die Fixtures können, wenn die Datenbank noch leer ist/nicht mit vorhandenen Daten aus einem System kopiert wurde, wie folgt importiert werden:

```bash
php bin/console npo:fixtures:load --all
```

Die Security-Config (Controller-Action-Berechtigungen, Entity-Berechtigungen, ...) kann über folgenden Befehl importiert werden:

```bash
php bin/console npo:security:import
```
	
## Allgemeine Hinweise/Besonderheiten/Bekannte Probleme

### Coding Standard
Bei diesem Projekt gilt der PSR2-NPOA Standard. Alle Infos: https://confluence.npo-applications.de/display/NPO/Coding+conventions
 
Der Standard wird bei Commits automatisch geprüft und ggf. wird zur Korrektur aufgefordert.

### Sicherheit
Dieses Projekt benutzt das NPOA Security Bundle. Bitte die entsprechenden Hinweise beachten (siehe vendor/npoa/security-bundle/README.md).

### umask bzw. bin/console
Falls die bin/console durch ein Update o.Ä. überschrieben wird, bitte immer sicherstellen, dass die umask in bin/console am Anfang gesetzt wid,
sonst gibt es Probleme bei den Datei-/Verzeichnisrechten auf den Servern (siehe README-deploy.md).

## Während der Entwicklung

- Bei Änderungen an Routen (um Routen auch in JS bereit zu stellen):
    ```bash
    php bin/console fos:js-routing:dump 
    ```
- Bei Änderungen an Abhängigkeiten (Composer)
    ```bash
    composer install
    ```
- Bei Änderungen an Entities:
	- Doctrine Migration ausführen:
    ```bash
    php bin/console doctrine:migrations:diff
    php bin/console doctrine:migrations:migrate
    ```
	- ExjJS Models aktualisieren:
    ```bash
    php bin/console npo:extjs:generate-models
    ```
- Bei Änderungen an Translations (generiert die Translations-Datei fuer Ext):
    ```bash
    php bin/console npo:extjs:generate-translations
    ```
- Nach Änderungen an Assetic-überwachten Dateien, z.B. CSS (nur außerhalb Ext):
    ```bash
    php bin/console assetic:dump
    ```
- Bei Hinzufügen neuer Controller/Actions und/oder Entities/Felder an das Setzen der Berechtigungen über das Security-Bundle denken!
- Generierung von Ext Fixed Stores:
    ```bash
    php bin/console npo:extjs:generate-stores
    ```
- Generierung von Ext Checkbox-Groups:
    ```bash
    php bin/console npo:extjs:generate-checkboxgroup AppBundle:Entity
    ```
- Generierung von Ext RadioGroups:
    ```bash
    php bin/console npo:extjs:generate-radiogroup AppBundle:Entity
    ```
- Fixtures importieren
    ```bash
    php bin/console npo:fixtures:load AppBundle:Entity
    ```
- Bei sonstigen Problemen hilft Wunder:
	- Cache leeren:
    ```bash
    php bin/console cache:clear --env=dev
    php bin/console cache:clear --env=prod
    ```
   - Sencha App rebuilden:	
    ```bash
    sencha app build development
    sencha app build production
    ```
- Nach Änderungen an Ext (Models, Views, Controller), wenn auch der/die Server aktualisiert werden sollen
    ```bash
    sencha app build production
    ```
		
## Update Dev

Die Dev zeigt auf den "develop"-Branch.

- Pull
- ggf. bei Änderungen an Abhängigkeiten:
    ```bash
    composer install
    ```
- ggf. Doctrine Migration
    ```bash
    php bin/console doctrine:migrations:diff
    php bin/console doctrine:migrations:migrate
    ```
- Cache leeren
    ```bash
    php bin/console cache:clear --env=prod
    ```
- Hinweis: Es muss sichergestellt werden, dass bin/console mit PHP7 auch auf der Konsole ausgeführt wird. Dazu entweder in der Sitzung einmalig
    ```bash
    export PATH=/opt/plesk/php/7.0/bin/:$PATH
    ```
  setzen, oder bei jedem Aufruf statt
    ```bash
    php bin/console
    ```    
    ```bash
    php /opt/plesk/php/7.0/bin/php bin/console
    ```
    aufrufen.
	
## Update Live (derzeit noch nicht vorhanden)

Das Livesystem zeigt auf den "master"-Branch.

Ansonsten gelten die gleichen Angaben wie bei "Update Dev".