# Deploy Anweisungen

## Dev

### Installation

- Repository auschecken
- auf develop-Branch wechseln
- Sicherstellen, dass in bin/console am Anfang nach <?php 
    ```bash
    umask(0002);   
    ```
  eingetragen ist.
- Composer Abhängigkeiten installieren    
    ```bash
    composer install    
    ```
- Datenbank erstellen
    ```bash
    php bin/console doctrine:schema:create
    ```
- Fixtures importieren
    ```bash
    php bin/console npo:fixtures:load --all
    ```
- Es muss sichergestellt werden, dass bin/console mit PHP7 auch auf der Konsole ausgeführt wird. Dazu entweder in der Sitzung einmalig
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


### Konfiguration

#### PHP-Einstellungen

- Version: 7

## Live (derzeit noch nicht vorhanden)

### Installation

Analog zu Dev, aber auf master-Branch bleiben.

### Konfiguration

Analog zu Dev.