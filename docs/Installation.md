# Dokumentation PHP-Monitor

## 1. Vor dem Start
Vor dem Beginn der Entwicklung für dieses Projekt sollte der Entwickler vertraut im Umgang mit folgenden Frameworks sein.

- Symfony (http://symfony.com/doc/current/index.html)
  - Getting started
  - Guides
  - Sind einige wichtige Kapitel, aber im Prinzip ist hier grundsätzlich alles irgendwie wichtig.
  - Außerdem sollten die "Best Practices" nicht außer Acht gelassen werden (http://symfony.com/doc/current/best_practices/index.html)
- Doctrine (http://docs.doctrine-project.org/en/latest/)
  - Neben dem eigenen Kapitel in der Symfony Dokumentation macht es auch Sinn sich aus der Doctrine Dokumentation Wissen anzueignen.
  - Getting started
  - Advanced
    - Best Practices
    - Architecture
  - Reference Guide
    - Kapitel 1-8
    - Kapitel 11
    - Kapitel 14
    - Kapitel 15
    - Kapitel 21
    - Kapitel 30
  - Dies sind zwar die wichtigsten Kapitel, was allerdings nicht heißt, dass andere Kapitel unwichtig sind.
- ExtJS (https://docs.sencha.com/extjs/6.2.0/index.html)
  - Core Concepts
  - UI Components
  - alle anderen Application Architecture Themen
  - Sencha CMD Introduction
  - Allgemeine Einführung in ExtJS's MVVM Architektur (https://docs.sencha.com/extjs/6.2.0/guides/application_architecture/application_architecture.html)
  - Hier noch mal ein Link mit 10 Tipps, die man besser vermeiden sollte und wie man dies besser machen kann. (https://www.sencha.com/blog/top-10-ext-js-development-practices-to-avoid-2)
  
## 2. Aufsetzen der Entwicklungswerkzeuge (virt. Maschine/vagrant)
Um Kompatibilitätsproblemen im Live-Betrieb aus dem Weg gehen zu können sollte eine möglichst dem Live-System ähnliche Laufzeitumgebung erstellt werden. Hierfür bietet sich die Möglichkeit eine virtuelle Maschine in vagrant zu erstellen und diese so nah wie möglich an die Konfiguration des Systems, auf dem die Anwendung letztendlich laufen wird, anzupassen.

- Voraussetzungen:
  - vagrant
  - virtualbox
  - Shell/Terminal Erfahrung

Nach dem dieses Git-Repository ausgecheckt wurde kann Vagrant als Entwicklungsumgebung verwendet werden. Folgende Schritte müssen hierfür durchgeführt werden.

```bash
git clone ssh://git@bitbucket.npo-applications.de:7999/mon/symext.git ~/PhpStormProjects/monitoring.npoa.de
```

Danach wird die vorgefertigte Box für Ubuntu 16.04 LTS beötigt. Dieser kann einfach mit folgendem Befehl hinzugefügt werden:

```bash
vagrant box add ubuntu/xenial64
```

Um den Überblick für dieses Projekt nicht zu velieren und alle vagrant-relevanten Dateien im selben Verzeichnis zu haben, wird ein Ordner im Benutzerverzeichnis erstellt.

```bash
mkdir ~/php-monitor
cd ~/php-monitor
```

Danach muss die Vanrant-Instanz initiiert werden, dies geschieht mit folgendem Befehl:

```bash
vagrant init ubuntu/xenial64
```

Nach der Initiierung muss die Standard-Konfiguration an unsere Bedürfnisse angepasst werden. Hierzu reicht es mit einem beliebigen Text-Editor die Datei mit dem Namen 'Vagrantfile' zu bearbeiten.

```bash
nano ~/php-monitor/Vagrantfile
```

Folgende Parameter müssen angepasst werden:

```nano
# Create a private network, which allows host-only access to the machine
# using a specific IP.
config.vm.network "private_network", ip: "192.168.20.10"

...

# Share an additional folder to the guest VM. The first argument is
# the path on the host to the actual folder. The second argument is
# the path on the guest to mount the folder. And the optional third
# argument is a set of non-required options.
# config.vm.synced_folder "../data", "/vagrant_data"
config.vm.synced_folder "~/PhpstormProjects/monitoring.npoa.de", "/var/www/vhosts/monitoring.npoa.de/httpdocs/", create: true, nfs: true
```

Das Git-Repository muss für diese Konfiguration im Ordner `~/PhpstormProjects/monitoring.npoa.de` ausgecheckt werden. Dies kann sowohl mit einem grafischen Tool oder aber auch über die Kommandozeile mit `git clone %LINK%` erledigt werden. Das grafische Tool `SourceTree` [[Link]](https://www.sourcetreeapp.com/) kann hierfür auch eingesetzt werden.

**! Achtung diese Konfiguration gilt nur für UNIX-Nutzer !**

Damit nicht bei jedem Starten der virt. Maschine das Passwort für das Einbinden des Arbeitsverzeichnisses abgefragt werden soll muss die sudoers Konfiguration des Betriebssystems angepasst werden. Hierzu kann `sudo visudo` ausgeführt werden oder die Datei `/etc/sudoers` mit einem beliebigen Editor als root-Nutzer geöffnet werden. Schließlich müssen folgende Zeilen an das Ende der Datei angehängt werden:

```
Cmnd_Alias VAGRANT_EXPORTS_ADD = /usr/bin/tee -a /etc/exports
Cmnd_Alias VAGRANT_NFSD = /sbin/nfsd restart
Cmnd_Alias VAGRANT_EXPORTS_REMOVE = /usr/bin/sed -E -e /*/ d -ibak /etc/exports
%admin ALL=(root) NOPASSWD: VAGRANT_EXPORTS_ADD, VAGRANT_NFSD, VAGRANT_EXPORTS_REMOVE
```

Nun kann die virt. Maschine mit folgendem Befehl in dem Ordner, wo sich die Datei `Vagrantfile` befindet, gestartet werden. Der Parameter `--provider virtualbox` ist nur beim ersten Start notwendig, danach reicht nur `vagrant up`.

```bash
vagrant up --provider virtualbox
```

Einige initiale Installation werden nun auf dem Gast-System automatisch durchgeführt, welche die reibungslose Zusammenarbeit mit dem Host-System erleichtert. Wenn dieser Prozess durchgelaufen ist, ist das Login auf dem Gast-System mit folgendem Befehl möglich:

```bash
vagrant ssh
```

**! Beachten für die Live Version !**

Der Administrator empfiehlt folgende Verzeichnisstruktur unter dem Standard WebRoot (`/var/www/` bei Ubuntu 16.04 + Apache2).

`vhosts / %URL% / httpdocs`
_%URL%_ => für die virt. Maschine: php-monitor.npoa.de | für die Live-Version: monitoring.npoa.de 

Unter `httpdocs` wird das Git-Repository per HTTPS und mit dem Benutzer deploy (Password steht unter LastPass > Sichere Notizen > Shared Developers > git deploy) ausgecheckt werden. Nach dem Auschecken des Git-Repository's müssen folgende Änderungen an den Zugriffsberechtigungen im Wurzelverzeichnis vorgenommen werden.

```bash
sudo chown -R ubuntu:www-data .
sudo chmod g+w -R .
```

Die Einrichtung und Konfiguration des Servers für die Live-Version sieht genauso aus wie bei der virt. Maschine. Damit die Anwendung über eine Domain erreicht werden kann muss ein Administrator diese freischalten. Die Logfiles werden per RSYNC vom Server `devel.vm.npoa.de` (Pfad: `/srv/www/vhosts/devel.vm.npoa.de/kitaplus.de/subdomains/iban/httpdocs/var/logs/`, Ordner `errors`, `stats`, `kibiz` und `results`, sowie folgende Datei: `/srv/www/vhosts/system/svn.kitaplus.de/logs/access_ssl_log.processed` ) an den `monitoring` Server (Pfad für die Ordner: `/var/www/vhosts/monitoring.npoa.de/httpdocs/var/logs/monitoring/`, der Proxy-Log kommt in den übergeordneten Ordner) gesendet.

## 3. Einrichtung der virtuellen Maschine
Da es sich bei dieser virtuellen Maschine um eine reine Ubuntu-Installation handelt müssen noch diverse Dienste/Anwendungen installiert werden.

_**Hinweis:** Grundsätzlich gilt vor der Installation von Paketen aus den Paketquellen müssen die Paketquellen aktualisiert werden. Dies geht mit folgendem Befehl:_ 

```bash
sudo apt-get update
```

_**Tipp:** Wenn man nicht vor jedem Befehl der Root-Berechtigung (Administrator in UNIX) benötigt sudo schreiben möchte kann man eine Shell-Sitzung als root starten. Dies geht mit folgendem Befehl:_

```bash
sudo bash
```

oder

```bash
sudo -i
```

beides ist gleichgültig und ermöglichen dass Ausführen von Befehlen ohne `sudo`, wenn `sudo` davor steht, wenn kein `sudo` vor dem Befehl steht, wird es empfohlen diese als normaler Benutzer auszuführen.

Das Hinzufügen eines Swap-Speichers zur Auslagerung von unnötigen Daten aus dem Arbeitsspeicher wird die Arbeit mit der virt. Maschine komfortabler machen. Zudem wird eine Fehlermeldung ausgegeben wenn versucht wird die sencha app auf production zu builden. Ein Swap-Speicher von 1GB wird wie folgt eingerichtet:

```bash
sudo fallocate -l 1G /swapfile
sudo chmod 600 /swapfile
sudo mkswap /swapfile
sudo swapon /swapfile
sudo sysctl vm.swappiness=10
sudo sysctl vm.vfs_cache_pressure=50
```

Damite diese Einstellungen auch nach einem Neustart übernommen werden müssen diese Konfigurationen vorgenommen werden.

```bash
sudo cp /etc/fstab /etc/fstab.bak
sudo cp /etc/sysctl.conf /etc/sysctl.conf.bak
echo '/swapfile none swap sw 0 0' | sudo tee -a /etc/fstab
echo 'vm.swappiness=10' | sudo tee -a /etc/sysctl.conf
echo 'vm.vfs_cache_pressure=50' | sudo tee -a /etc/sysctl.conf
```

Um die richtige Zeitzone für die virt. Maschine einzustellen kann folgender Befehl verwendet werden und `Europe` danach `Berlin` ausgewählt werden. Nach einem Neustart wird auch diese Konfiguration Systemweit übernommen.

```bash
sudo dpkg-reconfigure tzdata
```

Damit die Tastatureingaben richtig vom Betriebssystem entgegengenommen werden können müssen die locales konfiguriert werden. Hierzu muss der nachfolgende Befehl ausgeführt werden und dort `de_DE.UTF-8` ausgewählt werden.

```bash
sudo dpkg-reconfigure locales
```

#### 3.1. Installation & Konfiguration der Dienste/Anwendungen
Es ist wichtig die Installation der nächsten Dienste/Anwendungen genau in der hier beschriebenen Reihenfolge vorzunehmen.

##### 3.1.1. Installation des Webservers
Wahlweise können NGINX oder aber auch Apache2 als Webserver eingesetzt werden. Im folgenden werden die Installationen von beiden Webservern näher erläutert

##### 3.1.1.1. NGINX
Falls als Webserver NGINX verwendet werden soll, kann dieser mit folgendem Befehl installiert wird.

```bash
sudo apt-get install nginx
```

##### 3.1.1.2. Apache2
Falls als Webserver NGINX verwendet werden soll, kann dieser mit folgendem Befehl installiert wird.

```bash
sudo apt-get install apache2
```

##### 3.1.2. Installation der Datenbank
Wahlweise können MariaDB oder aber auch Oracle MySQL als Datenbank eingesetzt werden. Im folgenden werden die Installationen von beiden Datenbanken näher erläutert

##### 3.1.2.1 MariaDB
Falls als Datenbank MariaDB verwendet werden soll, kann dieser mit folgendem Befehl installiert werden.

```bash
sudo apt-get install mariadb-server mariadb-client
```

Für die Grund-Konfiguration der Datenbank ist ein von den Entwicklern erzeugtes Skript auszuführen, welches das Setzen eines Passwortes für den Datenbank-Benutzer ermöglicht. Einfach den Anweisungen folgen und das Passwort kryptisch gestalten (Merken/Notieren/Zwischenspeichern, da dieser später benötigt wird).

```bash
sudo mysql_secure_installation
```

Nachdem dieser Installations-Assisstent durchgelaufen wurde müssen einige Änderungen an der Datenbank vorgenomen werden, da die Datenbank sonst das Login mit Passwort nicht akzeptiert hierfür wird mysql gestartet und nachfolgende MySQL Queries ausgeführt:

```bash
sudo mysql -u root mysql
```

```mysql
UPDATE user SET plugin='' WHERE user='root';
FLUSH PRIVILEGES;
```

##### 3.1.2.2 Oracle MySQL
Falls als Datenbank Oracle MySQL verwendet werden soll, kann dieser mit folgendem Befehl installiert werden.

```bash
sudo apt-get install mysql-server mysql-client
```

Nach der Installation wird ein Assistent gestartet, welcher die Grundkonfiguration vornehmen lässt. Hier muss nur ein root-Passwort festgelegt werden, welcher für das weitere Vorgehen benötigt wird. Deshalb macht es Sinn dieses Passwort irgendwo sicher abzuspeichern (LastPass??).

##### 3.1.3.  Installation von PHP
Wurde NGINX als Webserver installiert fehlen generell alle PHP-Interpreter. Mit Apache2 werden standardmäßig die aktuelle stable Version von PHP installiert. Da in diesem Projekt jedoch PHP 7.1 verwendet wurde muss ein Upgrade auf PHP 7.1 durchgeführt werden.

##### 3.1.3.1. PHP-FPM (aktuellste stable Version) für NGINX
Bei NGINX muss der FPM (FastCGI Process Manager) nachträglich installiert werden. Folgender Befehl kann für die Installation verwendet werden.

```bash
sudo apt-get install php-fpm
```

Für die Installation von PHP 7.1 wird die ein aktuellerer PHP-FPM und eine Anpassung in der NGINX-Konfiguration für die konfigurierten Seiten benötigt. Um den PHP-FPM für PHP 7.1 zu installieren muss der Paketmanager um eine weitere Quelle ergänzt werden, da die Pakete im Standard-Repository nicht hinterlegt sind. Die kann mit folgendem Befehl durchgeführt werden. Nach dem Hinzufügen der neuen Quelle ist es immer sinnvoll die Quellen des Paketmanagers zu aktualisieren:

```bash
sudo add-apt-repository ppa:ondrej/php
[Enter] <-- Bestätigen dass das Repository aufgenommen werden soll

sudo apt-get update
```

Danach kann der PHP-FPM für PHP 7.1 mit folgendem Befehl installiert werden 

```bash
sudo systemctl restart php7.1-fpm
```

Die Konfiguration und Aktivierung von PHP auf dem NGINX Webserver wird im weiteren Verlauf (3.1.8.1.) beschrieben.

##### 3.1.3.2. PHP für Apache2
Für die Installation von PHP auf einem Apache Webserver reicht es PHP und das zugehörige Apache Modul zu installieren.

```bash
sudo apt-get install php7.0 libapache2-mod-php7.0
```

Für PHP 7.1 muss dem Paketmanager des Betriebssystems ein Repository hinzufügt werden und die Quellen aktualisiert werden:

```bash
sudo add-apt-repository ppa:ondrej/php
[Enter] <-- Bestätigen dass das Repository aufgenommen werden soll

sudo apt-get update
```

Die eigentliche Installattion ähnelt dem vorigen Schritt und sieht wie folgt aus:

```bash
sudo apt-get install php7.1 libapache2-mod-php7.1
```

##### 3.1.4. Installation weiterer PHP-Module
Da die Anwendung einige zusätzliche PHP-Module benötig müssen diese mit folgenden Befehlen nachträglich installiert werden:

```bash
sudo apt-get install php7.1-mysql php7.1-curl php7.1-gd php7.1-intl php-imagick php7.1-imap php7.1-mcrypt php-memcache php7.1-pspell php7.1-recode php7.1-sqlite3 php7.1-tidy php7.1-xmlrpc php7.1-xsl php7.1-mbstring php-gettext php7.1-bcmath php7.1-zip php7.1-opcache php-apcu phpunit php-codecoverage
```

##### 3.1.5. Installation vom Paketverwalter (Composer)
Composer ist ein anwendungsorientierter Paketmanager für die Programmiersprache PHP. Composer wird über die Kommandozeile ausgeführt und installiert Abhängigkeiten (zum Beispiel: Bibliotheken) eines PHP-Programmes. Verfügbare PHP-Anwendungen können über die Plattform Packagist gesucht werden. Hauptanforderung an das Zielsystem ist PHP in der Version 5.3.2 und höher. [Quelle](https://de.wikipedia.org/wiki/Composer_(Paketverwaltung))

```bash
sudo apt-get install composer
```

##### 3.1.6. Sencha CMD (V. 6.2.1.29)

Da das Sencha CMD diverse weitere Pakete für die Installation benötigt müssen diese ebenfalls vor der eigentlichen Sencha CMD Installation installiert werden. 

```bash
sudo apt-get install openjdk-8-jre-headless ruby zip
```

Um die ExtJS-Anwendung erstellen zu können wird das Sencha CMD (Kommandozeilentool) benötigt. Dieser ist nicht in den Paketquellen vorhanden und kann folgendermaßen installiert werden. Da das Sencha CMD als `.zip`-Archiv von der Hersteller-Homepage heruntergeladen werden muss und Ubuntu keine `.zip`-Archive von Haus aus entpacken kann muss das ebenfalls nachträglich installiert werden. An dieser Stelle wird empfohlen eine root-Shel zu starten. Die nachfolgenden Befehle können in einem beliebigen Ordner durchgeführt werde, jedoch um die virt. Maschine nicht mit unnötigen Dateien zuzumüllen ist es sinnvoll es im standardmäßig synchronisierten Ordner `/vagrant/` durchzuführen.

```bash
cd /vagrant/

wget http://cdn.sencha.com/cmd/6.2.1/no-jre/SenchaCmd-6.2.1-linux-amd64.sh.zip

unzip SenchaCmd-6.2.1-linux-amd64.sh.zip

sudo chmod +x SenchaCmd-6.2.1.29-linux-amd64.sh

./SenchaCmd-6.2.1.29-linux-amd64.sh -q
```

Nach der Installation muss die aktuelle Shell beendet und eine neue Sitzung gestartet werden, damit der Befehl `sencha` verwendet werden kann. Hierzu kann die aktuelle SSH Verbindung getrennt und wieder neu aufgebaut werden oder mit `bash` eine neue Terminal-Sitzung gestartet werden.

Wenn Sencha CMD erfolgreich installiert wurde, kann die aktuelle Version mit dem Befehl `sencha` ausgegeben werden.

##### 3.1.7. Reibungslose Aktivierung der Dienste
Nachdem alle Dienste installiert wurden, müssen diese neu gestartet werden. Hierfür kann die komplette virtuelle Maschine neu gestartet werden (bevorzugt, da hier deutlich wird, ob diese auch nach dem Neustart der virt. Maschine wieder gestartet werden.) Dafür ist es als erstes notwendig die aktuelle Sitzung zu schließen, was mit folgendem Befehl passiert:

```bash
exit
```

_Wenn man als root eingeloggt war muss man evtl. ein weiteres Mal `exit` verwenden._

Wenn man wieder auf dem Termin/Shell des Host-Systems ist wird folgender Befehl eingegeben um die virt. Maschine neu zu starten.

```bash
vagrant reload
```

Nach erfolgreichem Neustart der virt. Maschine kann man sich wieder auf die virt. Maschine mit `vagrant ssh` einloggen.

Wenn man nicht die komplette virt. Maschine neu starten möchte können die einzelnen Dienste von neu starten. Dies ist nur von dem Terminal/Shell des Gast-Systems möglich hierfür müssen folgende Befehle ausgeführt werden:

```bash
sudo systemctl restart php7.0-fpm
sudo systemctl restart mysql
sudo systemctl restart nginx / sudo systemctl restart apache2
```

Erst, wenn diese Dienste ohne Fehler starten und auf der virt. Maschine laufen können die nächsten Schritte durchgeführt werden.

##### 3.1.8. Konfiguration des Webservers
Als nächstes muss der Webserver konfiguriert werden.

##### 3.1.8.1.1. NGINX Standardkonfiguration
Damit NGINX PHP richtig interpretieren kann muss dies diesem Webserver beigebracht werden, wie dieser `.php`-Dateien behandeln soll. Hierfür muss die globale Konfigurationsdatei des Webserver bearbeitet werden. Zur Sicherheit wird eine Kopie der originalen Datei erstellt. Dies geschieht mit folgendem Befehl:

```bash
sudo cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default.orig
```

_**Hinweis:** Als Text-Editor wird hier `nano` bevorzugt. Eine Suche nach Schlüsselwörtern in der Datei kann mit dem Tastenkürzel [STRG]+[W] gestartet werden. Falls ein Parameter bereits mit einem `;` oder `#` auskommentiert ist kann dieser entfernt werden um diesen (Konfigurations-) Parameter wieder zu aktivieren. Der Editor wird mit [STRG]+[X] verlassen, die darauffolgende Frage durch die Eingabe von Y/J (Yes/Ja) oder N (No/Nein) beantworten und die Datei speichern._

```bash
sudo nano /etc/nginx/sites-available/default
```

```nano
...

    # Add index.php to the list if you are using PHP
    index index.php index.html index.htm index.nginx-debian.html;

...

    # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;

        # With php7.0-cgi alone:
    #   fastcgi_pass 127.0.0.1:9000;
        # With php7.0-fpm:
        fastcgi_pass unix:/run/php/php7.0-fpm.sock;
    }

    # deny access to .htaccess files, if Apache's document root
    # concurs with nginx's one
    location ~ /\.ht {
        deny all;
    }
```

_**Hinweis:** Wird eine andere PHP-Version verwendet müssen die Zeilen mit php7.0 angepasst werden._

Diese Konfigurationsdatei bietet nun die Basis für jede PHP-Anwendung die auf dieser virt. Maschine laufen soll und in `/var/www/html/` liegt.

##### 3.1.8.1.2. NGINX Konfiguration für Symfony
Folgende Konfiguration muss mindestens für den Webserver (NGINX) vorgenommen werden, damit Symfony funktioniert. Diese Konfiguration wird in der vorhin erstellten Konfigurationsdatei vorgenommen (`/etc/nginx/sites-available/php-monitor.npoa.de`). Unter folgendem [Link](https://symfony.com/doc/current/setup/web_server_configuration.html#web-server-nginx) sind weitere Erläuterungen zur Konfiguration und für die Konfiguration von Apache wiederzufinden.

Für das Symfony Projekt wird eine Kopie der zuvor bearbeiteten Standard-Konifurationsdatei erstellt und diverse weitere Konfigurationen für Kompatibilität mit Symfony-Projekten vorgenommen.

```bash
sudo cp /etc/nginx/sites-available/default /etc/nginx/sites-available/projektname
```

_Statt `projektname` den eigentlichen Projektnamen eingeben. (hier wurde als projektname `php-monitor.npoa.de` verwendet)_

```bash
sudo nano /etc/nginx/sites-available/php-monitor.npoa.de
```

```nano
##
# You should look at the following URL's in order to grasp a solid understanding
# of Nginx configuration files in order to fully unleash the power of Nginx.
# http://wiki.nginx.org/Pitfalls
# http://wiki.nginx.org/QuickStart
# http://wiki.nginx.org/Configuration
#
# Generally, you will want to move this file somewhere, and start with a clean
# file but keep this around for reference. Or just disable in sites-enabled.
#
# Please see /usr/share/doc/nginx-doc/examples/ for more detailed examples.
##

# Default server configuration
#
server {
    listen 80;
    listen [::]:80;

    # SSL configuration
    #
    # listen 443 ssl default_server;
    # listen [::]:443 ssl default_server;
    #
    # Note: You should disable gzip for SSL traffic.
    # See: https://bugs.debian.org/773332
    #
    # Read up on ssl_ciphers to ensure a secure configuration.
    # See: https://bugs.debian.org/765782
    #
    # Self signed certs generated by the ssl-cert package
    # Don't use them in a production server!
    #
    # include snippets/snakeoil.conf;

    root /var/www/vhosts/php-monitor.npoa.de/httpdocs/web/;

    # Add index.php to the list if you are using PHP
    index app.php app_dev.php config.php index.php index.html index.htm index.nginx-debian.html;

    server_name php-monitor.npoa.de;


    location / {
        # try to serve file directly, fallback to app.php
        try_files $uri /app.php$is_args$args;
    }
    # DEV
    # This rule should only be placed on your development environment
    # In production, don't include this and don't deploy app_dev.php or config.php
    location ~ ^/(app_dev|config)\.php(/|$) {
        fastcgi_pass unix:/run/php/php7.0-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        # When you are using symlinks to link the document root to the
        # current version of your application, you should pass the real
        # application path instead of the path to the symlink to PHP
        # FPM.
        # Otherwise, PHP's OPcache may not properly detect changes to
        # your PHP files (see https://github.com/zendtech/ZendOptimizerPlus/issues/126
        # for more information).
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
    }
    # PROD
    location ~ ^/app\.php(/|$) {
        fastcgi_pass unix:/run/php/php7.0-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        # When you are using symlinks to link the document root to the
        # current version of your application, you should pass the real
        # application path instead of the path to the symlink to PHP
        # FPM.
        # Otherwise, PHP's OPcache may not properly detect changes to
        # your PHP files (see https://github.com/zendtech/ZendOptimizerPlus/issues/126
        # for more information).
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
        # Prevents URIs that include the front controller. This will 404:
        # http://domain.tld/app.php/some-path
        # Remove the internal directive to allow URIs like this
        internal;
    }

    # return 404 for all other php files not matching the front controller
    # this prevents access to other php files you don't want to be accessible.
    location ~ \.php$ {
      return 404;
    }

    error_log /var/log/nginx/php-monitor.npoa.de_error.log;
    access_log /var/log/nginx/php-monitor.npoa.de_access.log;
}
```

Zur Deaktivierung der Standard-Seite muss der symbolische Link im Ordner `/etc/nginx/sites-enabled/defaul` entfernt werden.

```bash
sudo rm /etc/nginx/sites-enabled/default
```

Wenn die Konfiguration fertiggestellt wurde, muss der Webserver für die Aktivierung der Konfiguration neu gestartet werden.

```bash
sudo systemctl restart nginx
```

##### 3.1.8.2.1. Apache2 Standardkonfiguration
Die Konfiguration von Apache liegt in dem Verzeichnis `/etc/apache2/` und ist ähnlich aufgebaut, wie die von NGINX. Jedoch unterscheidet sich die Syntax deutlich. Als Basis für die Konfiguration der eigenen Seite wird Standard-Konfigurationsdatei `000-default.conf` kopiert. Als Dateinamen sollte der Name der Adresse gefolgt von `.conf` genommen werden.

```bash
sudo cp /etc/apach2/sites-available/000-default.conf /etc/apache2/sites-available/php-monitor.npoa.de.conf
```

Um die neu konfigurierte Seite zu aktivieren reicht das Ausführen des folgenden Befehls gefolgt von einem Neustart des Webservers. Die Standardseite sollte ebenfalls deaktiviert werden.

```bash
sudo a2dissite 000-default
sudo a2ensite php-monitor.npoa.de
sudo systemctl restart apache2
```

##### 3.1.8.2.1. Apache2 Konfiguration für Symfony
Folgende Konfiguration muss mindestens für den Webserver (Apache2) vorgenommen werden, damit Symfony funktioniert. Diese Konfiguration wird in der vorhin erstellten Konfigurationsdatei vorgenommen (`/etc/apache2/sites-available/php-monitor.npoa.de`).

```bash
<VirtualHost _default_:80>
    # The ServerName directive sets the request scheme, hostname and port that
    # the server uses to identify itself. This is used when creating
    # redirection URLs. In the context of virtual hosts, the ServerName
    # specifies what hostname must appear in the request's Host: header to
    # match this virtual host. For the default virtual host (this file) this
    # value is not decisive as it is used as a last resort host regardless.
    # However, you must set it for any further virtual host explicitly.
    ServerName php-monitor.npoa.de
    ServerAlias php-monitor.npoa.de

    ServerAdmin root@localhost
    DocumentRoot /var/www/vhosts/php-monitor.npoa.de/httpdocs/web

    <Directory /var/www/vhosts/php-monitor.npoa.de/httpdocs/web>
            AllowOverride None
            Order Allow,Deny
            Allow from All

            <IfModule mod_rewrite.c>
                    Options -MultiViews
                    RewriteEngine On
                    RewriteCond %{REQUEST_FILENAME} !-f
                    RewriteRule ^(.*)$ app.php [QSA,L]
            </IfModule>
    </Directory>

    # uncomment the following lines if you install assets as symlinks
    # or run into problems when compiling LESS/Sass/CoffeeScript assets
    # <Directory /var/www/vhosts/php-monitor.npoa.de/httpdocs/web>
    #     Options FollowSymlinks
    # </Directory>

    # optionally disable the RewriteEngine for the asset directories
    # which will allow apache to simply reply with a 404 when files are
    # not found instead of passing the request into the full symfony stack
    <Directory /var/www/vhosts/php-monitor.npoa.de/httpdocs/web/bundles>
            <IfModule mod_rewrite.c>
                    RewriteEngine Off
            </IfModule>
    </Directory>
    
    # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
    # error, crit, alert, emerg.
    # It is also possible to configure the loglevel for particular
    # modules, e.g.
    #LogLevel info ssl:warn

    ErrorLog ${APACHE_LOG_DIR}/php-monitor.npoa.de_error.log
    CustomLog ${APACHE_LOG_DIR}/php-monitor.npoa.de_access.log combined

    # For most configuration files from conf-available/, which are
    # enabled or disabled at a global level, it is possible to
    # include a line for only one particular virtual host. For example the
    # following line enables the CGI configuration for this host only
    # after it has been globally disabled with "a2disconf".
    #Include conf-available/serve-cgi-bin.conf

</VirtualHost>
```

Ein zusätzliches Apache-Modul muss aktiviert werden, damit die Symfony-Routen richtig funktionieren und das Security-Bundle erreichbar ist.

```bash
sudo a2enmod rewrite
```

Nach der Konfiguration des Webserver muss dieser neugestartet werden (`sudo systemctl restart nginx` o. `sudo systemctl restart apache2`), damit die richtige Konfiguration geladen wird.

An dieser Stelle ist die Einrichtung der Dienste und Anwendungen auf der virt. Maschine abgeschlossen und die vagrant Maschine kann für die Entwicklung verwendet werden.

## 4. Konfiguration am Host-System
Damit die Anwendung über eine URL aufrufbar wird ist es hilfreich die `hosts`-Datei auf dem Host-System, sowie auf der virt. Maschine anzupassen.

  - Pfad bei Unix: `/etc/hosts` 
  - Pfad bei Windows: `C:\Windows\System32\drivers\etc\hosts` 
    
    (Editor muss als Administrator/root gestartet und AntiVirus-Software muss evtl. deaktiviert werden um Änderungen an der Datei speichern zu können)
    
Folgender Eintrag muss in der `hosts`-Datei auf dem Host-System ergänzt werden. Kann einfach ganz unten angehängt werden.

```nano
192.168.20.10 php-monitor.npoa.de
```

Folgende Konfiguration sollte auf der virt. Maschine vorgenommen werden.

```nano
127.0.0.1 localhost php-monitor.npoa.de #<<-- muss identisch mit server_name von der Webserver-Konfiguration sein
...
127.0.1.1 ... ... php-monitor.npoa.de #<<-- muss identisch mit server_name von der Webserver-Konfiguration sein
```

## 5. Installation der Symfony-Anwendung
### 5.1. NPOA Monitoring

##### 5.1.1. Voraussetzungen
Die Installation der Voraussetzungen werden in den vorigen Abschnitte erläutert.

- Composer
- PHP7
- Sencha CMD in der neusten Version (ggf. sencha upgrade durchfuehren) (6.2+)
- korrekt hinterlegte Umgebungsvariablen:
    - Benutzervariablen PATH: C:\Users\BENUTZERNAME\AppData\Roaming\Composer\vendor\bin
    - Systemvariablen PATH: C:\Program Files\Git\usr\bin (oder wo auch immer Git installiert ist)
- PSR2-NPOA Standard (siehe unten)

##### 5.1.2. Installation (lokal)

Nach dem Klonen des Repository's zuerst in das Anwendungsverzeich wechseln (hier: `cd /usr/share/symext`) und mit

```bash
php bin/console doctrine:database:create
```

eine Datenbank für die Anwendung erstellen und mit

```bash
php bin/console doctrine:schema:create
```

das Datenbank-Schema übertragen. Danach mit

```bash
composer install
```

die Abhängigkeiten herunterladen/installieren. Anschließend muss im Ordner /web/ext-app ein Symlink auf das ExtJS-SDK-Verzeichnis
gesetzt werden. Folgenden Befehl im Projekt-Hauptverzeichnis ausführen:

Windows:                                     

```bash
mklink /D "web\ext-app\ext" "..\..\vendor\npoa\extjs"
```

Linux: 

```bash
cd web/ext-app/
ln -s ../../vendor/npoa/extjs ext
```

Kommandozeile ggf. mit Administratiorrechten ausführen. Dies ist nur lokal (auf der virt. Maschine) nötig, um im Development Environment die Ext-Dateien dynamisch laden zu können, da dort keine kompilierte app.js benutzt wird, in der sonst alle nötigen Dateien gepackt sind.

Mit folgendem Befehl

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
	
### 5.2. Allgemeine Hinweise/Besonderheiten/Bekannte Probleme

Sollte PHP Storm als IDE verwendet werden müssen diverse Ordner aus dem Index des Projektes rausgenommen werden, damit es während der Entwicklung nicht zu Laggs von PHP Storm kommt.

Hierfür klick man auf den zu exkludierenden Ordner mit der rechten Maustaste und klickt auf `'Mark directory as'  > 'Exluded'`. Folgende Ordner sollten für dieses Projekt exkludiert werden.

```
var
vendor/npoa/extjs
web/ext-app/build
web/ext-app/ext
web/js
```

Eine Modifizierung der Java VM Konfiguration von PhpStorm macht eine ernorme Leistungssteigerung der Entwicklungsumgebung (IDE) spürbar. Dies kann mit einem Klick auf `Help > Edit Custom VM Options...` in der oberen Toolbar und durch Einfügen der nachfolgenden Zeilen in die sich öffnende Datei `phpstorm.vmoptions`. _Falls eine Fenster erscheint mit der Meldung, dass die Datei nicht existiert sollte dies mit 'Yes' bestätigt werden. Die Konfiguration wird erst nach einem Neustart der IDE übernommen._ 
 
 ```
 # custom PhpStorm VM options
 
 -server
 -Xms2g
 -Xmx2g
 -XX:NewRatio=3
 -Xss16m
 -XX:+UseConcMarkSweepGC
 -XX:+CMSParallelRemarkEnabled
 -XX:ConcGCThreads=4
 -XX:ReservedCodeCacheSize=240m
 -XX:+AlwaysPreTouch
 -XX:+TieredCompilation
 -XX:+UseCompressedOops
 -XX:SoftRefLRUPolicyMSPerMB=50
 -Dsun.io.useCanonCaches=false
 -Djava.net.preferIPv4Stack=true
 -Djsse.enableSNIExtension=false
 -Dawt.useSystemAAFontSettings=lcd
 -Dawt.java2d.opengl=true
 -ea
 ```
 
 Auf die selbe Art können weitere benutzerdefinierte Konfigurationen in PhpStorm vorgenommen werden. Hier wurde folgende Zeile in die sich öffnende Datei `idea.properties` nach einem Klick auf `Help > Edit Custom Properties...` in der oberen Toolbar. _Falls eine Fenster erscheint mit der Meldung, dass die Datei nicht existiert sollte dies mit 'Yes' bestätigt werden. Die Konfiguration wird erst nach einem Neustart der IDE übernommen._
 
 ```
 # custom PhpStorm properties
 
 editor.zero.latency.typing=true
 ```

##### 5.2.1. Coding Standard
Bei diesem Projekt gilt der PSR2-NPOA Standard. Alle Infos: https://confluence.npo-applications.de/display/NPO/Coding+conventions
 
Der Standard wird bei Commits automatisch geprüft und ggf. wird zur Korrektur aufgefordert.

##### 5.2.2. Sicherheit

###### Standard-Logins:

| User             | Passwort |
|------------------|----------|
| admin@npoa.de    | dudh1234 |
| benutzer@npoa.de | dudh1234 | 

Dieses Projekt benutzt das NPOA Security Bundle. Bitte die entsprechenden Hinweise beachten (siehe vendor/npoa/security-bundle/README.md).

Da die Konfiguration für das NPOA Security Bundle nach erfolgreicher Installation schon vorliegt muss nur noch der Benutzer angelegt werden. Dies wird in der Datenbank vorgenommen. Als erstes muss ein gehashtes Passwort erzeugt werden:

```bash
php bin/console security:encode-password %TOTAL_SICHERES_NICHT_STANDARDPASSWORT% 
```

Passwort merken und aus der Ausgabe die Zeichenkette hinter `Encoded Password` zwischenspeichern. Danach auf die Datenbank wechseln. Entweder über eine grafische Anwendung oder direkt über die Kommandozeile mit `sudo mysql -u root -p` und dem Passwort für den root-Nutzer der Datenbank.

```mysql
INSERT INTO `npo_monitoring`.`npoa_sec_users` (`id`, `username`) VALUES ('1', 'admin', '%ENCODED_PASSWORD%');
quit
```

Um Zugriff auf die Anwendung für das Host-System zu gewähren ist nötig die `app_dev.php` zu bearbeiten

```bash
sudo nano /usr/share/web/app_dev.php
```

```php
<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

// If you don't want to setup permissions the proper way, just uncomment the following PHP line
// read http://symfony.com/doc/current/book/installation.html#checking-symfony-application-configuration-and-setup
// for more information
//umask(0000);

// This check prevents access to debug front controllers that are deployed by accident to production servers.
// Feel free to remove this, extend it, or make something more sophisticated.
if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !(in_array(@$_SERVER['REMOTE_ADDR'], [ '192.168.20.1', '127.0.0.1', '::1']) || php_sapi_name() === 'cli-server')
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

/**
 * @var Composer\Autoload\ClassLoader $loader
 */
$loader = require __DIR__.'/../app/autoload.php';
Debug::enable();

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
```
_Die IP-Addresse des Host-System über die eine Kommunikation zum Gast-System möglich ist muss eingetragen werden._ 

##### 5.2.3. umask bzw. bin/console
Falls die bin/console durch ein Update o.Ä. überschrieben wird, bitte immer sicherstellen, dass die umask in bin/console am Anfang gesetzt wid,
sonst gibt es Probleme bei den Datei-/Verzeichnisrechten auf den Servern (siehe README-deploy.md).

### 5.3.1. Während der Entwicklung

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
    - Um die Getter Setter Methoden für eine Entity zu erzeugen:
    ```bash
    php bin/console doctrine:generate:entities AppBundle/Entity/-EntityName-
    ```
- Falls benutzerdefinierte CSS-Klassen benötigt werden müssen diese in der folgenden Datei deklariert werden.
    ```bash
    web/ext-app/packages/local/npoa-monitoring/sass/etc/all.scss
    ```
    danach muss die Sencha Applikation neu gebuildet werden.
    ```bash
    sencha app build development
    ```
    oder
    ```bash
    sencha app build production
    ```
- Bei Änderungen an Translations (generiert die Translations-Datei für Ext):
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
## 5.3.2. Hinweise

- Falls das Security-Bundle aus unerklärlichen Gründen nicht mehr aufrufbar sein sollte, ist es sinnvoll den Prod-Cache mit `php bin/console cache:clear --env=prod` zu leeren, da das Security-Bundle in jedem Falle als Production Applikation läuft. Die Production Anwendung mit `sencha app build production` (nicht vergessen in das Ext-Verzeichnis zu wechseln `cd web/ext-app`) neu zu builden macht in diesem Falle ebenfalls Sinn.

- Für den Zugriff auf Daten aus dem Modell ist es notwendig den prefix der beim Generieren der Entities für Ext erstellt wird anzuhängen.

- ! Die Elternbeitragsverwaltung für die Nutzungsstatistiken ist nur bei KiTaPLUS RLP/HE/SL Hosts vorhanden!

## 5.4. Update Dev

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
	
## 5.6. Update Live (derzeit noch nicht vorhanden)

Das Livesystem zeigt auf den "master"-Branch.

Ansonsten gelten die gleichen Angaben wie bei "Update Dev".
