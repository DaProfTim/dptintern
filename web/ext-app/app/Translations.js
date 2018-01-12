/**
 * ACHTUNG! Diese Datei nicht manuell bearbeiten, sondern Aenderungen ausschliesslich in der messages.de.yml von Symfony vornehmen!
 * Anschliessend ueber php bin/console npo:extjs:generate-translations diese Datei neu generieren.
 */
Ext.define('NpoaApp.Translations', {
    singleton: true,

    "index": {
        "TITLE": "Monitoring",
        "TEXT": "Bitte geben Sie Ihre Zugangsdaten in das folgende Formular ein."
    },
    "menu": {
        "LOGIN": "Login",
        "RESET_PW": "Passwort zur\u00fccksetzen"
    },
    "global": {
        "APP_UPDATE_TITLE": "Anwendungsupdate",
        "APP_UPDATE": "Die Anwendung wurde aktualisiert und wird nun neu geladen.",
        "PLEASE_WAIT": "Die Daten werden geladen, einen Moment bitte...",
        "LOADING": "Wird geladen, bitte warten",
        "ERROR": "Fehler",
        "INFO": "Info",
        "SAVE": "Speichern",
        "ACTION_EDIT": "Bearbeiten",
        "OPTIONS": "Optionen",
        "CONTINUE": "Fortfahren",
        "CANCEL": "Abbrechen",
        "ENTITY_NOT_FOUND": "Das Objekt wurde nicht gefunden.",
        "CSRF_TOKEN_INVALID": "Das CSRF Token ist ung\u00fcltig.",
        "INVALID_FORM": "Bitte korrigieren Sie alle rot markierten Felder.",
        "EMPTY_FIELDS_ERROR": "Bitte f\u00fcllen Sie alle Felder aus.",
        "UNMATCHED_ROUTE_TITLE": "Ung\u00fcltige Adresse",
        "UNMATCHED_ROUTE_INFO": "Die aufgerufene Adresse konnte nicht gefunden werden.",
        "XHR_ACCESS_DENIED_TITLE": "Zugriff verweigert",
        "XHR_ACCESS_DENIED_INFO": "Sie haben f\u00fcr diesen Vorgang keine ausreichende Berechtigung.",
        "XHR_EXCEPTION_TITLE": "Serverfehler",
        "XHR_EXCEPTION_INFO": "Bei der Anfrage ist ein Serverfehler aufgetreten. <br>Bitte laden Sie die Seite neu oder versuchen Sie es sp\u00e4ter erneut.",
        "XHR_AUTHENTICATION_INVALID_TITLE": "Sitzung ung\u00fcltig",
        "XHR_AUTHENTICATION_INVALID_INFO": "Ihre Sitzung ist abgelaufen oder ung\u00fcltig. <br> Mit Klick auf \"OK\" werden Sie auf die Login-Seite weitergeleitet.",
        "COPYRIGHT": "Copyright 2017 <a href=\"http:\/\/www.npo-applications.de\">NPO Applications GmbH<\/a> und <a href=\"http:\/\/www.bms-consulting.de\">BMS Consulting GmbH<\/a>"
    },
    "form": {
        "DETAILS_MISSING": "Bitte korrigieren Sie alle rot markierten Felder.",
        "ERROR_TITLE": "Vorgang fehlgeschlagen",
        "ERROR": "Fehler beim Speichern der Daten.",
        "SUCCESS_TITLE": "Speichern erfolgreich",
        "SUCCESS": "Die \u00c4nderungen wurden gespeichert.",
        "UNSAVED_DATA_TITLE": "Ungespeicherte \u00c4nderungen",
        "UNSAVED_DATA": "Sie haben \u00c4nderungen vorgenommen, die noch nicht gespeichert wurden. Beim Verlassen der Seite gehen diese \u00c4nderungen verloren.\nM\u00f6chten Sie die Seite trotzdem verlassen?\n",
        "SAVE": "Speichern",
        "CANCEL": "Abbrechen",
        "DELETE": "L\u00f6schen",
        "REMOVE": "Entfernen",
        "EDIT": "Bearbeiten",
        "BROWSE": "Durchsuchen..."
    },
    "login": {
        "error": {
            "TOKEN_EXPIRED_TITLE": "G\u00fcltigkeitszeitraum abgelaufen",
            "TOKEN_EXPIRED_INFO": "Der aufgerufene Link ist nicht l\u00e4nger g\u00fcltig, bitte fordern Sie einen neuen an.",
            "TOKEN_INVALID_TITLE": "Ung\u00fcltiger Link",
            "TOKEN_INVALID_INFO": "Der aufgerufene Link ist nicht g\u00fcltig, bitte fordern Sie einen neuen an.",
            "TITLE": "Fehler bei der Anmeldung",
            "BAD_CREDENTIALS": "Die eingegebenen Logindaten sind ung\u00fcltig.",
            "EMAIL_EMPTY": "Bitte geben Sie Ihre E-Mail Adresse ein.",
            "EMAIL_INVALID": "Die eingegebene E-Mail-Adresse ist nicht registriert."
        },
        "password_reset_mail": {
            "SUBJECT": "Zur\u00fccksetzen Ihres Verpflegungsportal Passworts",
            "GREETING": "Sehr geehrte Damen und Herren",
            "INTRO": "Sie haben das Zur\u00fccksetzen Ihres Verpflegungsportal Passwort angefordert. Bitte folgen Sie dem unten aufgef\u00fchrten Link, um Ihr Passwort f\u00fcr den gesch\u00fctzten Login-Bereich zur\u00fcckzusetzen.\n",
            "INFO": "Die E-Mail wurde noch nicht gelesen und der G\u00fcltigkeitszeitraum ist schon abgelaufen?\nNach Ablauf der G\u00fcltigkeit k\u00f6nnen Sie eine neue E-Mail \u00fcber die Passwort-vergessen-Funktion auf der Anmeldeseite Ihres pers\u00f6nlichen Zugangs anfordern. Klicken Sie bitte dazu auf den nachfolgenden Link:\n"
        },
        "TITLE": "Login",
        "BUTTON_LOGIN": "Anmelden",
        "FORGOT_PW": "Passwort vergessen?",
        "RESET_PW": "Passwort zur\u00fccksetzen",
        "BACK_TO_LOGIN": "Zur\u00fcck zum Login",
        "LOGIN_SUCCESS": "Anmeldung erfolgreich",
        "LOGOUT": "Abmelden",
        "LOGOUT_SUCCESS": "Sie wurden erfolgreich abgemeldet",
        "LOGOUT_WAIT": "Sie werden abgemeldet, bitte warten...",
        "LOGGED_OUT": "Sie wurden ausgeloggt.",
        "SUCCESS": "Login erfolgreich. Sie werden nun in den internen Bereich weitergeleitet.",
        "PASSWORD_RESET_INFO": "Bitte geben Sie Ihre E-Mail Adresse, mit der Sie im System registriert sind, in das folgende Formular ein.\nSie erhalten dann eine E-Mail mit einem Link zum Zur\u00fccksetzen des Passworts.\n",
        "PASSWORD_RESET_MAIL_SENT_TITLE": "Passwort zur\u00fccksetzen",
        "PASSWORD_RESET_MAIL_SENT": "Ein Link zum Zur\u00fccksetzen Ihres Passwortes wurde an Ihre E-Mail Adresse geschickt. Bitte kontrollieren Sie Ihr Postfach."
    },
    "user": {
        "attrs": {
            "EMAIL": "E-Mail",
            "PASSWORD": "Passwort"
        },
        "reset_token": {
            "EXPIRED": "Der aufgerufene Link ist nicht l\u00e4nger g\u00fcltig, bitte fordern Sie einen neuen an.",
            "INVALID": "Der aufgerufene Link ist nicht g\u00fcltig, bitte fordern Sie einen neuen an."
        },
        "email_change": {
            "BUTTON_CHANGE": "E-Mail \u00e4ndern",
            "BUTTON_CANCEL": "\u00c4ndern abbrechen",
            "BUTTON_SAVE": "\u00c4nderungen speichern",
            "ERROR_EMPTY": "Bitte f\u00fcllen Sie beide E-Mail Felder aus.",
            "ERROR_NOT_EQUAL": "Die Eingaben f\u00fcr die Felder \"E-Mail-Adresse\" und \"E-Mail-Adresse wiederholen\" sind nicht identisch",
            "ERROR_NOT_MODIFIED": "Sie haben die gleiche E-Mail Adresse eingegeben, die aktuell im System f\u00fcr Sie registriert ist.",
            "ERROR_EXISTS": "Diese E-Mail Adresse ist bereits im System f\u00fcr einen anderen Benutzer hinterlegt.",
            "MAIL_SENT": "Ein Link zum Best\u00e4tigen Ihrer E-Mail \u00c4nderungs-Anforderung wurde an Ihre neue E-Mail Adresse geschickt. Bitte kontrollieren Sie Ihr Postfach.",
            "SUCCESS_TITLE": "\u00c4nderung erfolgreich",
            "SUCCESS": "Ihre E-Mail Adresse wurde erfolgreich ge\u00e4ndert."
        },
        "email_change_mail": {
            "SUBJECT": "\u00c4nderung Ihrer Verpflegungsportal E-Mail Adresse",
            "INTRO": "Sie haben das \u00c4ndern Ihrer Verpflegungsportal E-Mail Adresse angefordert. Bitte folgen Sie dem unten aufgef\u00fchrten Link, um die \u00c4nderung zu best\u00e4tigen.\n",
            "INFO": "Die E-Mail wurde noch nicht gelesen und der G\u00fcltigkeitszeitraum ist schon abgelaufen?\nNach Ablauf der G\u00fcltigkeit m\u00fcssen die \u00c4nderung In Ihrem pers\u00f6nlichen Bereich erneut anfordern.\n"
        },
        "PASSWORD_POLICY": "Das Passwort muss eine Mindestl\u00e4nge von 8 Zeichen haben und mindestens 3 der folgenden Zeichenarten enthalten:\nGro\u00dfbuchstaben, Kleinbuchstaben, Zahlen, Sonderzeichen (!\u00a7$()=?*+-_.,;:)\n",
        "PASSWORD_CHANGE": "Passwort \u00e4ndern",
        "PASSWORD_NEW": "Neues Passwort",
        "PASSWORD_REPEAT": "Neues Passwort wiederholen",
        "PASSWORD_CURRENT": "Aktuelles Passwort",
        "PASSWORD_SAVED_TITLE": "Passwort gespeichert",
        "PASSWORD_SAVED": "Das Passwort wurde erfolgreich gespeichert.",
        "PASSWORD_ERROR": "Beim Speichern des Passworts ist ein Fehler aufgetreten.",
        "PASSWORD_INVALID": "Ihr aktuelles Passwort ist nicht korrekt.",
        "PASSWORD_UNEQUAL": "Passwort und Passwort-Wiederholung stimmen nicht \u00fcberein.",
        "SELF_REMOVE_ERROR": "Sie k\u00f6nnen Ihr eigenes Benutzerkonto nicht l\u00f6schen.",
        "ERROR": "Fehler",
        "PERSONAL_DATA": "Pers\u00f6nliche Daten",
        "EMAIL_FORM_TITLE": "E-Mail-Adresse",
        "EMAIL_FIELD": "E-Mail-Adresse",
        "EMAIL_FIELD_REPEAT": "E-Mail-Adresse wiederholen"
    },
    "mails": {
        "DEFAULT_GREETING": "Sehr geehrte Dame oder Herr",
        "FROM": "verpflegungsportal@npo-applications.de",
        "SIGNATURE": "Mit freundlichen Gr\u00fc\u00dfen\n\nIhr Team des Verpflegungsportals\n\n(Diese E-Mail wurde automatisch generiert. Bitte antworten Sie nicht auf diese E-Mail Adresse.)\n"
    }
});
