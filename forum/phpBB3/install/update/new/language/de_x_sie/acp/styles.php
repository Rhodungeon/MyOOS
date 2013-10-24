<?php
/**
*
* acp_styles [Deutsch — Sie]
*
* @package language
* @version $Id: styles.php 617 2013-09-29 10:21:18Z pyramide $
* @copyright (c) 2005 phpBB Group; 2006 phpBB.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/AUTHORS und https://www.phpbb.de/go/ubersetzerteam
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'Grafiksammlungen fassen alle Schaltflächen, Symbole und weitere nicht Style-spezifische Grafiken zusammen, die vom Board verwendet werden. Hier können Sie bestehende Grafiksammlungen ändern, exportieren oder löschen und neue Sammlungen importieren oder aktivieren.',
	'ACP_STYLES_EXPLAIN'	=> 'Hier können Sie die auf Ihrem Board verfügbaren Styles verwalten. Ein Style besteht aus einem Template, einem Theme und einer Grafiksammlung. Sie können bestehende Styles ändern, löschen, deaktivieren, reaktivieren oder neue erstellen oder importieren. Sie können mit der Vorschau-Funktion auch sehen, wie ein Style aussehen wird. Der derzeit aktive Standard-Style ist durch einen Stern (*) gekennzeichnet. Außerdem ist die Zahl der Benutzer angegeben, die ein Style verwenden. Bitte beachten Sie, dass hier nicht berücksichtigt wird, ob der Style überschrieben wird.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Eine Template-Sammlung umfasst all den HTML-Code, der für das Layout des Boards verwendet wird. Sie können bestehende Template-Sammlungen ändern, löschen, exportieren, importieren und eine Vorschau anzeigen. Sie können des Weiteren den Code ändern, der für BBCode verwendet wird.',
	'ACP_THEMES_EXPLAIN'	=> 'Hier können Sie Themes erstellen, installieren, ändern, löschen und exportieren. Ein Theme ist eine Kombination von Farben und Grafiken, die in den Templates verwendet wird, um das grundlegende Aussehen Ihres Boards zu definieren. Die Ihnen zur Verfügung stehenden Optionen hängen von der Serverkonfiguration und der phpBB-Installation ab; in der Bedienungsanleitung finden Sie weitere Informationen dazu. Wenn Sie ein neues Theme erstellen, können Sie optional auf einem bestehenden Theme aufbauen.',
	'ADD_IMAGESET'			=> 'Grafiksammlung erstellen',
	'ADD_IMAGESET_EXPLAIN'	=> 'Hier können Sie eine neue Grafiksammlung erstellen. Abhängig von der Serverkonfiguration und den Dateirechten können Ihnen zusätzliche Funktionen zur Verfügung stehen. Sie können z.&nbsp;B. die Grafiksammlung auf Grundlage einer anderen aufbauen. Sie können eventuell auch ein Grafiksammlungs-Archiv hochladen oder (vom store-Verzeichnis) importieren. Wenn Sie ein Archiv hochladen oder importieren, kann der Name der Grafiksammlung auf Wunsch auch aus dem Archiv übernommen werden (lassen Sie dazu den Namen leer).',
	'ADD_STYLE'				=> 'Style erstellen',
	'ADD_STYLE_EXPLAIN'		=> 'Hier können Sie einen neuen Style erstellen. Abhängig von der Serverkonfiguration und den Dateirechten können Ihnen zusätzliche Funktionen zur Verfügung stehen. Sie können z.&nbsp;B. den Style auf Grundlage eines anderen aufbauen. Sie können eventuell auch ein Style-Archiv hochladen oder (vom store-Verzeichnis) importieren. Wenn Sie ein Archiv hochladen oder importieren, wird der Name des Styles automatisch identifiziert.',
	'ADD_TEMPLATE'			=> 'Template erstellen',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Hier können Sie ein neues Template erstellen. Abhängig von der Serverkonfiguration und den Dateirechten können Ihnen zusätzliche Funktionen zur Verfügung stehen. Sie können z.&nbsp;B. die Template-Sammlung auf Grundlage einer anderen aufbauen. Sie können eventuell auch ein Template-Archiv hochladen oder (vom store-Verzeichnis) importieren. Wenn Sie ein Archiv hochladen oder importieren, kann der Name des Templates auf Wunsch auch aus dem Archiv übernommen werden (lassen Sie dazu den Namen leer).',
	'ADD_THEME'				=> 'Theme erstellen',
	'ADD_THEME_EXPLAIN'		=> 'Hier können Sie ein neues Theme erstellen. Abhängig von der Serverkonfiguration und den Dateirechten können Ihnen zusätzliche Funktionen zur Verfügung stehen. Sie können z.&nbsp;B. das Theme auf Grundlage eines anderen aufbauen. Sie können eventuell auch ein Theme-Archiv hochladen oder (vom store-Verzeichnis) importieren. Wenn Sie ein Archiv hochladen oder importieren, kann der Name des Themes auf Wunsch auch aus dem Archiv übernommen werden (lassen Sie dazu den Namen leer).',
	'ARCHIVE_FORMAT'		=> 'Dateiarchiv-Typ',
	'AUTOMATIC_EXPLAIN'		=> 'Lassen Sie das Feld leer, um eine automatische Erkennung zu versuchen.',

	'BACKGROUND'			=> 'Hintergrund',
	'BACKGROUND_COLOUR'		=> 'Hintergrund-Farbe',
	'BACKGROUND_IMAGE'		=> 'Hintergrund-Grafik',
	'BACKGROUND_REPEAT'		=> 'Wiederholungs-Effekt',
	'BOLD'					=> 'Fett',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'Gecached',
	'CACHE_FILENAME'				=> 'Template-Datei',
	'CACHE_FILESIZE'				=> 'Dateigröße',
	'CACHE_MODIFIED'				=> 'Modifiziert',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Sind Sie sich sicher, dass Sie alle Grafiksammlungs-Daten aktualisieren möchten? Die Einstellungen der Konfigurationsdatei werden alle Änderungen überschreiben, die mit dem Grafiksammlungs-Editor durchgeführt wurden.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Sind Sie sich sicher, dass Sie alle gecachten Versionen Ihrer Template-Sammlung löschen möchten?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Sind Sie sich sicher, dass Sie die Template-Daten in der Datenbank mit den Daten des Templates im Dateisystem überschreiben möchten? Dies wird alle Änderungen überschreiben, die mit dem Template-Editor durchgeführt wurden, während das Template in der Datenbank gespeichert war.',
	'CONFIRM_THEME_REFRESH'			=> 'Sind Sie sich sicher, dass Sie die Themen-Daten in der Datenbank mit den Daten des Themes im Dateisystem aktualisieren möchten? Dies wird alle Änderungen überschreiben, die mit dem Theme-Editor durchgeführt wurden, während das Theme in der Datenbank gespeichert war.',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_IMAGESET'				=> 'Neue Grafiksammlung erstellen',
	'CREATE_STYLE'					=> 'Neuen Style erstellen',
	'CREATE_TEMPLATE'				=> 'Neue Template-Sammlung erstellen',
	'CREATE_THEME'					=> 'Neues Theme erstellen',
	'CURRENT_IMAGE'					=> 'Aktuell verwendete Grafik',

	'DEACTIVATE_DEFAULT'		=> 'Sie können den Standard-Style nicht deaktivieren.',
	'DELETE_FROM_FS'			=> 'Vom Dateisystem löschen',
	'DELETE_IMAGESET'			=> 'Grafiksammlung löschen',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Hier können Sie die ausgewählte Grafiksammlung aus der Datenbank entfernen. Beachten Sie, dass es keine Rückgängig-Funktion gibt. Sie sollten daher vorher die Grafiksammlung für zukünftige Zwecke exportieren.',
	'DELETE_STYLE'				=> 'Style löschen',
	'DELETE_STYLE_EXPLAIN'		=> 'Hier können Sie das ausgewählte Style löschen. Seien Sie vorsichtig beim Löschen von Styles, es gibt keine Rückgängig-Funktion.',
	'DELETE_TEMPLATE'			=> 'Template löschen',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Hier können Sie die ausgewählte Template-Sammlung aus der Datenbank entfernen. Beachten Sie, dass es keine Rückgängig-Funktion gibt. Sie sollten daher vorher die Sammlung für zukünftige Zwecke exportieren.',
	'DELETE_THEME'				=> 'Theme löschen',
	'DELETE_THEME_EXPLAIN'		=> 'Hier können Sie das ausgewählte Theme aus der Datenbank entfernen. Beachten Sie, dass es keine Rückgängig-Funktion gibt. Sie sollten daher vorher die Sammlung für zukünftige Zwecke exportieren.',
	'DETAILS'					=> 'Details',
	'DIMENSIONS_EXPLAIN'		=> 'Wird hier „ja“ ausgewählt, so wird die Höhe und die Breite der Bilder mit abgespeichert.',


	'EDIT_DETAILS_IMAGESET'				=> 'Grafiksammlung-Details ändern',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Hier können Sie bestimmte Grafiksammlung-Details wie z.&nbsp;B. ihren Namen ändern.',
	'EDIT_DETAILS_STYLE'				=> 'Style ändern',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Mit diesem Formular können Sie einen bestehenden Style ändern. Sie können die Kombination von Template, Theme und Grafiksammlung ändern, die den Style definiert. Sie können den Style des Weiteren zum Standard für das Board machen.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Template-Details ändern',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Hier können Sie bestimmte Template-Details wie z.&nbsp;B. seinen Namen ändern. Sie können die Möglichkeit haben, den Ablageort der Template-Dateien vom Dateisystem zur Datenbank oder andersherum zu ändern. Diese Option ist abhängig von der PHP-Konfiguration und davon, ob Ihr Webserver in die Template-Dateien schreiben kann.',
	'EDIT_DETAILS_THEME'				=> 'Theme-Details ändern',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Hier können Sie bestimmte Details eines Themes wie z.&nbsp;B. seinen Namen ändern. Sie haben die Möglichkeit, den Ablageort des Stylesheets vom Dateisystem zur Datenbank oder andersherum zu ändern, sofern PHP-Konfiguration und Webserver es erlauben, in die Stylesheet-Datei zu schreiben.',
	'EDIT_IMAGESET'						=> 'Grafiksammlung ändern',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Hier können Sie die individuellen Elemente einer Grafiksammlung ändern. Sie können auch die Größenangaben der Bilder festlegen. Größenangaben sind optional; wenn sie angegeben sind, kann dies Darstellungsprobleme mit manchen Browsern vermeiden; wenn sie nicht angegeben sind, reduziert sich die Datenbankgröße etwas.',
	'EDIT_TEMPLATE'						=> 'Template ändern',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Hier können Sie Ihre Template-Sammlung direkt ändern. Bitte beachten Sie, dass diese Änderungen dauerhaft sind und nicht rückgängig gemacht werden können, sobald sie abgesandt wurden. Wenn PHP direkt in die Template-Dateien in Ihrem styles-Verzeichnis schreiben kann, werden die Änderungen direkt in diese Dateien geschrieben. Wenn PHP nicht in diese Dateien schreiben kann, werden die Änderungen nur in der Datenbank gespeichert. Bitte seien Sie bei der Änderung der Template-Sammlung vorsichtig. Stellen Sie sicher, dass alle Variablen ({XXXX}) und alle bedingten Anweisungen richtig geschlossen werden.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Die Template-Datei war nicht beschreibbar, so dass die Template-Sammlung mit der geänderten Datei nun in der Datenbank gespeichert ist.',
	'EDIT_THEME'						=> 'Theme ändern',
	'EDIT_THEME_EXPLAIN'				=> 'Hier können Sie das ausgewählte Theme anpassen und Farben, Grafiken usw. ändern.',
	'EDIT_THEME_STORED_DB'				=> 'Die Stylesheet-Datei war nicht beschreibbar, so dass die Stylesheet-Datei mit Ihren Änderungen nun in der Datenbank gespeichert ist.',
	'EDIT_THEME_STORE_PARSED'			=> 'Das Theme erfordert, dass seine Stylesheets auf Platzhalter analysiert werden können. Dies ist nur möglich, wenn es in der Datenbank gespeichert wird.',
	'EDITOR_DISABLED'					=> 'Der Template-Editor ist deaktiviert.',
	'EXPORT'							=> 'Exportieren',

	'FOREGROUND'			=> 'Vordergrund',
	'FONT_COLOUR'			=> 'Schriftfarbe',
	'FONT_FACE'				=> 'Schriftart',
	'FONT_FACE_EXPLAIN'		=> 'Sie können mehrere Schriftarten durch Komma getrennt angeben. Wenn ein Benutzer die erste Schriftart nicht installiert hat, wird die erste der Liste verwendet, die installiert ist.',
	'FONT_SIZE'				=> 'Schriftgröße',

	'GLOBAL_IMAGES'			=> 'Global',

	'HIDE_CSS'				=> 'Verstecke CSS-Quelltext',

	'IMAGE_WIDTH'				=> 'Grafik-Breite',
	'IMAGE_HEIGHT'				=> 'Grafik-Höhe',
	'IMAGE'						=> 'Grafik',
	'IMAGE_NAME'				=> 'Name der Grafik',
	'IMAGE_PARAMETER'			=> 'Parameter',
	'IMAGE_VALUE'				=> 'Wert',
	'IMAGESET_ADDED'			=> 'Neue Grafiksammlung hinzugefügt und im Dateisystem abgelegt.',
	'IMAGESET_ADDED_DB'			=> 'Neue Grafiksammlung hinzugefügt und in der Datenbank abgelegt.',
	'IMAGESET_DELETED'			=> 'Grafiksammlung erfolgreich gelöscht.',
	'IMAGESET_DELETED_FS'		=> 'Die Grafiksammlung wurde erfolgreich gelöscht, aber einige Dateien verbleiben im Dateisystem.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Details der Grafiksammlung erfolgreich aktualisiert.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Bitte wählen Sie einen Typ für das Dateiarchiv aus.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Das Copyright darf nicht länger als 60 Zeichen sein.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Der Name der Grafiksammlung darf nur alphanumerische Zeichen, -, +, _ und Leerzeichen enthalten.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Eine Grafiksammlung mit diesem Namen existiert bereits.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Der Name der Grafiksammlung darf nicht länger als 30 Zeichen sein.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Das angegebene Archiv enthält keine gültige Grafiksammlung.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Sie müssen einen Namen für diese Grafiksammlung angeben.',
	'IMAGESET_EXPORT'			=> 'Grafiksammlung exportieren',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Hier können Sie eine Grafiksammlung in Form eines Archives exportieren. Dieses Archiv wird allen Dateien enthalten, die erforderlich sind, um die Grafiksammlung auf einem anderen Board zu installieren. Sie können auswählen, ob Sie die Datei direkt herunterladen oder im store-Ordner ablegen möchten, damit Sie sie später per FTP herunterladen können.',
	'IMAGESET_EXPORTED'			=> 'Grafiksammlung erfolgreich exportiert und als %s gespeichert.',
	'IMAGESET_NAME'				=> 'Name der Grafiksammlung',
	'IMAGESET_REFRESHED'		=> 'Grafiksammlung erfolgreich aktualisiert.',
	'IMAGESET_UPDATED'			=> 'Grafiksammlung erfolgreich geändert.',
	'ITALIC'					=> 'Kursiv',

	'IMG_CAT_BUTTONS'		=> 'Übersetzte Schaltflächen',
	'IMG_CAT_CUSTOM'		=> 'Benutzerdefinierte Grafiken',
	'IMG_CAT_FOLDERS'		=> 'Themen-Symbole',
	'IMG_CAT_FORUMS'		=> 'Forums-Symbole',
	'IMG_CAT_ICONS'			=> 'Allgemeine Symbole',
	'IMG_CAT_LOGOS'			=> 'Logos',
	'IMG_CAT_POLLS'			=> 'Umfrage-Grafiken',
	'IMG_CAT_UI'			=> 'Allgemeine Elemente der Benutzeroberfläche',
	'IMG_CAT_USER'			=> 'Zusätzliche Grafiken',

	'IMG_SITE_LOGO'			=> 'Zentrales Logo',
	'IMG_UPLOAD_BAR'		=> 'Fortschritt Dateiupload',
	'IMG_POLL_LEFT'			=> 'Umfrage — linkes Ende',
	'IMG_POLL_CENTER'		=> 'Umfrage — Mitte',
	'IMG_POLL_RIGHT'		=> 'Umfrage — rechtes Ende',
	'IMG_ICON_FRIEND'		=> 'Zu Freunden hinzufügen',
	'IMG_ICON_FOE'			=> 'Zu ignorierten Benutzern hinzufügen',

	'IMG_FORUM_LINK'			=> 'Forums-Link',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Gesperrtes Forum',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Unterforum',
	'IMG_FORUM_UNREAD'			=> 'Forum — ungelesene Beiträge',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Gesperrtes Forum — ungelesene Beiträge',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Unterforum — ungelesene Beiträge',
	'IMG_SUBFORUM_READ'			=> 'Unterforum in Legende',
	'IMG_SUBFORUM_UNREAD'		=> 'Unterforum in Legende — ungelesene Beiträge',

	'IMG_TOPIC_MOVED'			=> 'Verschobenes Thema',

	'IMG_TOPIC_READ'				=> 'Thema',
	'IMG_TOPIC_READ_MINE'			=> 'Eigenes Thema',
	'IMG_TOPIC_READ_HOT'			=> 'Beliebtes Thema',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Eigenes beliebtes Thema',
	'IMG_TOPIC_READ_LOCKED'			=> 'Gesperrtes Thema',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Gesperrtes eigenes Thema',

	'IMG_TOPIC_UNREAD'				=> 'Thema — ungelesene Beiträge',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Eigenes Thema — ungelesene Beiträge',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Beliebtes Thema — ungelesene Beiträge',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Eigenes beliebtes Thema — ungelesene Beiträge',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Gesperrtes Thema — ungelesene Beiträge',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Gesperrtes eigenes Thema — ungelesene Beiträge',

	'IMG_STICKY_READ'				=> 'Wichtiges Thema',
	'IMG_STICKY_READ_MINE'			=> 'Eigenes wichtiges Thema',
	'IMG_STICKY_READ_LOCKED'		=> 'Gesperrtes wichtiges Thema',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Gesperrtes eigenes wichtiges Thema',
	'IMG_STICKY_UNREAD'				=> 'Wichtiges Thema — ungelesene Beiträge',
	'IMG_STICKY_UNREAD_MINE'		=> 'Eigenes wichtiges Thema — ungelesene Beiträge',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Gesperrtes wichtiges Thema — ungelesene Beiträge',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Gesperrtes eigenes wichtiges Thema — ungelesene Beiträge',

	'IMG_ANNOUNCE_READ'					=> 'Bekanntmachung',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Eigene Bekanntmachung',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Gesperrte Bekanntmachung',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Gesperrte eigene Bekanntmachung',
	'IMG_ANNOUNCE_UNREAD'				=> 'Bekanntmachung — ungelesene Beiträge',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Eigene Bekanntmachung — ungelesene Beiträge',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Gesperrte Bekanntmachung — ungelesene Beiträge',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Gesperrte eigene Bekanntmachung — ungelesene Beiträge',

	'IMG_GLOBAL_READ'					=> 'Globale Bekanntmachung',
	'IMG_GLOBAL_READ_MINE'				=> 'Eigene globale Bekanntmachung',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Gesperrte globale Bekanntmachung',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Gesperrte eigene globale Bekanntmachung',
	'IMG_GLOBAL_UNREAD'					=> 'Globale Bekanntmachung — ungelesene Beiträge',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Eigene globale Bekanntmachung — ungelesene Beiträge',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Gesperrte globale Bekanntmachung — ungelesene Beiträge',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Gesperrte eigene globale Bekanntmachung — ungelesene Beiträge',

	'IMG_PM_READ'		=> 'Gelesene Private Nachricht',
	'IMG_PM_UNREAD'		=> 'Ungelesene Private Nachricht',

	'IMG_ICON_BACK_TOP'		=> 'Nach oben',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'E-Mail senden',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'WLM',
	'IMG_ICON_CONTACT_PM'		=> 'Nachricht senden',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Website',

	'IMG_ICON_POST_DELETE'			=> 'Beitrag löschen',
	'IMG_ICON_POST_EDIT'			=> 'Beitrag ändern',
	'IMG_ICON_POST_INFO'			=> 'Beitrag-Details anzeigen',
	'IMG_ICON_POST_QUOTE'			=> 'Beitrag zitieren',
	'IMG_ICON_POST_REPORT'			=> 'Beitrag melden',
	'IMG_ICON_POST_TARGET'			=> 'Kleiner Beitrag',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Kleiner neuer Beitrag',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Dateianhang',
	'IMG_ICON_TOPIC_LATEST'			=> 'Letzter Beitrag',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Erster ungelesener Beitrag',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Gemeldeter Beitrag',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Nicht freigegebener Beitrag',

	'IMG_ICON_USER_ONLINE'		=> 'Mitglied online',
	'IMG_ICON_USER_OFFLINE'		=> 'Mitglied offline',
	'IMG_ICON_USER_PROFILE'		=> 'Profil anzeigen',
	'IMG_ICON_USER_SEARCH'		=> 'Beiträge suchen',
	'IMG_ICON_USER_WARN'		=> 'Benutzer verwarnen',

	'IMG_BUTTON_PM_FORWARD'		=> 'Private Nachricht weiterleiten',
	'IMG_BUTTON_PM_NEW'			=> 'Neue Private Nachricht',
	'IMG_BUTTON_PM_REPLY'		=> 'Private Nachricht beantworten',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Gesperrtes Thema',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Neues Thema erstellen',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Auf Thema antworten',

	'IMG_USER_ICON1'		=> 'Benutzerdefinierte Grafik 1',
	'IMG_USER_ICON2'		=> 'Benutzerdefinierte Grafik 2',
	'IMG_USER_ICON3'		=> 'Benutzerdefinierte Grafik 3',
	'IMG_USER_ICON4'		=> 'Benutzerdefinierte Grafik 4',
	'IMG_USER_ICON5'		=> 'Benutzerdefinierte Grafik 5',
	'IMG_USER_ICON6'		=> 'Benutzerdefinierte Grafik 6',
	'IMG_USER_ICON7'		=> 'Benutzerdefinierte Grafik 7',
	'IMG_USER_ICON8'		=> 'Benutzerdefinierte Grafik 8',
	'IMG_USER_ICON9'		=> 'Benutzerdefinierte Grafik 9',
	'IMG_USER_ICON10'		=> 'Benutzerdefinierte Grafik 10',

	'INACTIVE_STYLES'			=> 'Inaktive Styles',
	'INCLUDE_DIMENSIONS'		=> 'Größenangaben speichern',
	'INCLUDE_IMAGESET'			=> 'Grafiksammlung einbeziehen',
	'INCLUDE_TEMPLATE'			=> 'Template einbeziehen',
	'INCLUDE_THEME'				=> 'Theme einbeziehen',
	'INHERITING_FROM'			=> 'Geerbt von',
	'INSTALL_IMAGESET'			=> 'Grafiksammlung installieren',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Hier können Sie die ausgewählte Grafiksammlung installieren. Wenn Sie möchten, können Sie die Einstellungen ändern, oder die Vorgaben verwenden.',
	'INSTALL_STYLE'				=> 'Style installieren',
	'INSTALL_STYLE_EXPLAIN'		=> 'Hier können Sie den ausgewählten Style und die dazugehörigen Komponenten installieren. Wenn Sie die relevanten Komponenten des Styles bereits installiert haben, werden diese nicht überschrieben. Manche Styles benötigen zusätzliche Komponenten, die bereits installiert sein müssen. Wenn Sie einen solchen Style installieren und nicht alle erforderlichen Komponenten haben, werden Sie darüber informiert.',
	'INSTALL_TEMPLATE'			=> 'Template installieren',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Hier können Sie die ausgewählte Template-Sammlung installieren. Abhängig von der Serverkonfiguration können Ihnen verschiedene Optionen zur Verfügung stehen.',
	'INSTALL_THEME'				=> 'Theme installieren',
	'INSTALL_THEME_EXPLAIN'		=> 'Hier können Sie das ausgewählte Theme installieren. Wenn Sie möchten, können Sie die Einstellungen ändern oder die Vorgaben verwenden.',
	'INSTALLED_IMAGESET'		=> 'Installierte Grafiksammlungen',
	'INSTALLED_STYLE'			=> 'Installierte Styles',
	'INSTALLED_TEMPLATE'		=> 'Installierte Templates',
	'INSTALLED_THEME'			=> 'Installierte Themes',

	'KEEP_IMAGESET'				=> 'Grafiksammlung „%s“ erhalten',
	'KEEP_TEMPLATE'				=> 'Template-Sammlung „%s“ erhalten',
	'KEEP_THEME'				=> 'Theme „%s“ erhalten',

	'LINE_SPACING'				=> 'Zeilenabstand',
	'LOCALISED_IMAGES'			=> 'Übersetzt',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Diese Einstellung ist geerbt und kann nicht geändert werden.',

	'NO_CLASS'					=> 'Kann Klasse in Stylesheet nicht finden.',
	'NO_IMAGESET'				=> 'Kann Grafiksammlung nicht im Dateisystem finden.',
	'NO_IMAGE'					=> 'Keine Grafik',
	'NO_IMAGE_ERROR'			=> 'Kann Grafik nicht im Dateisystem finden.',
	'NO_STYLE'					=> 'Kann Style nicht im Dateisystem finden.',
	'NO_TEMPLATE'				=> 'Kann Template nicht im Dateisystem finden.',
	'NO_THEME'					=> 'Kann Theme nicht im Dateisystem finden.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Keine nicht installierten Grafiksammlungen gefunden.',
	'NO_UNINSTALLED_STYLE'		=> 'Keine nicht installierten Styles gefunden.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Keine nicht installierten Templates gefunden.',
	'NO_UNINSTALLED_THEME'		=> 'Keine nicht installierten Themes gefunden.',
	'NO_UNIT'					=> 'Keine',

	'ONLY_IMAGESET'			=> 'Dies ist die einzig verbleibe Grafiksammlung. Sie können sie nicht löschen.',
	'ONLY_STYLE'			=> 'Dies ist der einzig verbleibende Style. Sie können ihn nicht löschen.',
	'ONLY_TEMPLATE'			=> 'Dies ist die einzig verbleibende Template-Sammlung. Sie können sie nicht löschen.',
	'ONLY_THEME'			=> 'Dies ist das einzig verbleibende Theme. Sie können es nicht löschen.',
	'OPTIONAL_BASIS'		=> 'Optionale Grundlage',

	'REFRESH'					=> 'Aktualisieren',
	'REPEAT_NO'					=> 'Keiner',
	'REPEAT_X'					=> 'Nur horizontal',
	'REPEAT_Y'					=> 'Nur vertikal',
	'REPEAT_ALL'				=> 'Beide Richtungen',
	'REPLACE_IMAGESET'			=> 'Grafiksammlung ersetzen durch',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Diese Grafiksammlung ersetzt die gelöschte Grafiksammlung in allen Styles, die sie derzeit verwenden.',
	'REPLACE_STYLE'				=> 'Style ersetzen durch',
	'REPLACE_STYLE_EXPLAIN'		=> 'Dieser Style ersetzt den gelöschten Style für die Benutzer, die ihn derzeit verwenden.',
	'REPLACE_TEMPLATE'			=> 'Template ersetzen durch',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Diese Template-Sammlung ersetzt die gelöschte Sammlung in allen Styles, die sie derzeit verwenden.',
	'REPLACE_THEME'				=> 'Theme ersetzen durch',
	'REPLACE_THEME_EXPLAIN'		=> 'Dieses Theme ersetzt das gelöschte Theme in allen Styles, die es derzeit verwenden.',
	'REPLACE_WITH_OPTION'		=> 'Durch „%s“ ersetzen',
	'REQUIRES_IMAGESET'			=> 'Dieses Style erfordert, dass die Grafiksammlung %s installiert ist.',
	'REQUIRES_TEMPLATE'			=> 'Dieses Style erfordert, dass die Template-Sammlung %s installiert ist.',
	'REQUIRES_THEME'			=> 'Dieses Style erfordert, dass das Theme %s installiert ist.',

	'SELECT_IMAGE'				=> 'Grafik auswählen',
	'SELECT_TEMPLATE'			=> 'Template-Datei auswählen',
	'SELECT_THEME'				=> 'Theme-Datei auswählen',
	'SELECTED_IMAGE'			=> 'Ausgewählte Grafik',
	'SELECTED_IMAGESET'			=> 'Ausgewählte Grafiksammlung',
	'SELECTED_TEMPLATE'			=> 'Ausgewähltes Template',
	'SELECTED_TEMPLATE_FILE'	=> 'Ausgewählte Template-Datei',
	'SELECTED_THEME'			=> 'Ausgewähltes Theme',
	'SELECTED_THEME_FILE'		=> 'Ausgewählte Theme-Datei',
	'STORE_DATABASE'			=> 'Datenbank',
	'STORE_FILESYSTEM'			=> 'Dateisystem',
	'STYLE_ACTIVATE'			=> 'Aktivieren',
	'STYLE_ACTIVE'				=> 'Aktiv',
	'STYLE_ADDED'				=> 'Style erfolgreich hinzugefügt.',
	'STYLE_DEACTIVATE'			=> 'Deaktivieren',
	'STYLE_DEFAULT'				=> 'Als Standard-Style festlegen',
	'STYLE_DELETED'				=> 'Style erfolgreich gelöscht.',
	'STYLE_DETAILS_UPDATED'		=> 'Style erfolgreich geändert.',
	'STYLE_ERR_ARCHIVE'			=> 'Bitte wählen Sie einen Typ für das Dateiarchiv aus.',
	'STYLE_ERR_COPY_LONG'		=> 'Das Copyright darf nicht länger als 60 Zeichen sein.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Sie müssen mindestens ein Style-Element auswählen.',
	'STYLE_ERR_NAME_CHARS'		=> 'Der Name des Styles darf nur alphanumerische Zeichen, -, +, _ und Leerzeichen enthalten.',
	'STYLE_ERR_NAME_EXIST'		=> 'Ein Style mit diesem Namen existiert bereits.',
	'STYLE_ERR_NAME_LONG'		=> 'Der Name des Styles darf nicht länger als 30 Zeichen sein.',
	'STYLE_ERR_NO_IDS'			=> 'Sie müssen ein Template, ein Theme und eine Grafiksammlung für diesen Style auswählen.',
	'STYLE_ERR_NOT_STYLE'		=> 'Das angegebene oder hochgeladene Archiv enthält kein gültiges Style.',
	'STYLE_ERR_STYLE_NAME'		=> 'Sie müssen einen Namen für diesen Style angeben.',
	'STYLE_EXPORT'				=> 'Style exportieren',
	'STYLE_EXPORT_EXPLAIN'		=> 'Hier können Sie ein Style in Form eines Archives exportieren. Ein Style muss nicht alle Elemente beinhalten, aber mindestens eins. Wenn Sie zum Beispiel ein neues Theme und eine neue Grafiksammlung für ein weit verbreitetes Template erstellt haben, sollten Sie nur Theme und Grafiksammlung exportieren und das Template auslassen. Sie können auswählen, ob Sie die Datei direkt herunterladen oder im store-Ordner ablegen möchten, damit Sie sie später per FTP herunterladen können.',
	'STYLE_EXPORTED'			=> 'Style erfolgreich exportiert und als %s gespeichert.',
	'STYLE_IMAGESET'			=> 'Grafiksammlung',
	'STYLE_NAME'				=> 'Name des Styles',
	'STYLE_TEMPLATE'			=> 'Template',
	'STYLE_THEME'				=> 'Theme',
	'STYLE_USED_BY'				=> 'Verwendet von (inklusive Spiders/Robots)',

	'TEMPLATE_ADDED'			=> 'Template-Sammlung hinzugefügt und im Dateisystem abgelegt.',
	'TEMPLATE_ADDED_DB'			=> 'Template-Sammlung hinzugefügt und in der Datenbank abgelegt.',
	'TEMPLATE_CACHE'			=> 'Template-Cache',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Standardmäßig speichert phpBB die kompilierte Version seiner Templates. Dies reduziert jedes Mal die Serverlast, wenn eine Seite angezeigt wird und kann daher die zur Seitenerstellung benötigte Zeit reduzieren. Hier können Sie den Cache-Status jeder Datei sehen und einzelne gecachte Dateien oder den gesamten Cache leeren.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Template-Cache erfolgreich geleert.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Es sind keine gecachten Templates vorhanden.',
	'TEMPLATE_DELETED'			=> 'Template-Sammlung erfolgreich gelöscht.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'Die Template-Sammlung kann nicht gelöscht werden, da andere Template-Sammlungen Daten von ihr erben:',
	'TEMPLATE_DELETED_FS'		=> 'Die Template-Sammlung wurde erfolgreich gelöscht, aber einige Dateien verbleiben im Dateisystem.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Template-Details erfolgreich aktualisiert.',
	'TEMPLATE_EDITOR'			=> 'HTML-Template-Editor',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Höhe des Template-Editors',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Bitte wählen Sie einen Typ für das Dateiarchiv aus.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Das cache-Verzeichnis, das zur Speicherung gecachter Template-Dateien verwendet wird, konnte nicht geöffnet werden.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Das Copyright darf nicht länger als 60 Zeichen sein.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Der Name des Templates darf nur alphanumerische Zeichen, -, +, _ und Leerzeichen enthalten.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Ein Template mit diesem Namen existiert bereits.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Der Name des Templates darf nicht länger als 30 Zeichen sein.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Das angegebene Archiv enthält kein gültiges Template.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Die neue Template-Sammlung erfordert, dass das Template %s installiert ist und keine Daten von anderen Templates erbt.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Sie müssen einen Namen für dieses Template angeben.',
	'TEMPLATE_EXPORT'			=> 'Templates exportieren',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Hier können Sie eine Template-Sammlung in Form eines Archives exportieren. Dieses Archiv wird allen Dateien enthalten, die erforderlich sind, um das Template auf einem anderen Board zu installieren. Sie können auswählen, ob Sie die Datei direkt herunterladen oder im store-Ordner ablegen möchten, damit Sie sie später per FTP herunterladen können.',
	'TEMPLATE_EXPORTED'			=> 'Template erfolgreich exportiert und als %s gespeichert.',
	'TEMPLATE_FILE'				=> 'Template-Datei',
	'TEMPLATE_FILE_UPDATED'		=> 'Template-Datei erfolgreich aktualisiert.',
	'TEMPLATE_INHERITS'			=> 'Diese Template-Sammlung erbt Daten von %s und kann daher keinen vom vererbenden Template abweichenden Speicherort haben.',
	'TEMPLATE_LOCATION'			=> 'Templates ablegen in',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Grafiken werden immer im Dateisystem abgelegt.',
	'TEMPLATE_NAME'				=> 'Name des Templates',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Die Template-Datei %s konnte nicht beschrieben werden. Bitte prüfen Sie die Berechtigungen des Verzeichnisses und der Dateien.',
	'TEMPLATE_REFRESHED'		=> 'Template erfolgreich aktualisiert.',

	'THEME_ADDED'				=> 'Neues Theme zum Dateisystem hinzugefügt.',
	'THEME_ADDED_DB'			=> 'Neues Theme zur Datenbank hinzugefügt.',
	'THEME_CLASS_ADDED'			=> 'Benutzerdefinierte Klasse erfolgreich hinzugefügt.',
	'THEME_DELETED'				=> 'Theme erfolgreich gelöscht.',
	'THEME_DELETED_FS'			=> 'Das Theme wurde erfolgreich gelöscht, aber einige Dateien verbleiben im Dateisystem.',
	'THEME_DETAILS_UPDATED'		=> 'Themen-Details erfolgreich aktualisiert.',
	'THEME_EDITOR'				=> 'Theme-Editor',
	'THEME_EDITOR_HEIGHT'		=> 'Höhe des Theme-Editors',
	'THEME_ERR_ARCHIVE'			=> 'Bitte wählen Sie einen Typ für das Dateiarchiv aus.',
	'THEME_ERR_CLASS_CHARS'		=> 'Nur alphanumerische Zeichen sowie ., :, -, _ und # sind in Klassennamen zulässig.',
	'THEME_ERR_COPY_LONG'		=> 'Das Copyright darf nicht länger als 60 Zeichen sein.',
	'THEME_ERR_NAME_CHARS'		=> 'Der Name des Themes darf nur alphanumerische Zeichen, -, +, _ und Leerzeichen enthalten.',
	'THEME_ERR_NAME_EXIST'		=> 'Ein Theme mit diesem Namen existiert bereits.',
	'THEME_ERR_NAME_LONG'		=> 'Der Name des Themes darf nicht länger als 30 Zeichen sein.',
	'THEME_ERR_NOT_THEME'		=> 'Das angegebene Archiv enthält kein gültiges Theme.',
	'THEME_ERR_REFRESH_FS'		=> 'Dieses Theme ist im Dateisystem gespeichert. Daher gibt es keinen Grund, es zu aktualisieren.',
	'THEME_ERR_STYLE_NAME'		=> 'Sie müssen einen Namen für dieses Theme angeben.',
	'THEME_FILE'				=> 'Theme-Datei',
	'THEME_EXPORT'				=> 'Theme exportieren',
	'THEME_EXPORT_EXPLAIN'		=> 'Hier können Sie ein Theme in Form eines Archives exportieren. Dieses Archiv wird allen Dateien enthalten, die erforderlich sind, um das Theme auf einem anderen Board zu installieren. Sie können auswählen, ob Sie die Datei direkt herunterladen oder im store-Ordner ablegen möchten, damit Sie sie später per FTP herunterladen können.',
	'THEME_EXPORTED'			=> 'Theme erfolgreich exportiert und in %s gespeichert.',
	'THEME_LOCATION'			=> 'Stylesheets ablegen in',
	'THEME_LOCATION_EXPLAIN'	=> 'Grafiken werden immer im Dateisystem abgelegt.',
	'THEME_NAME'				=> 'Name des Themas',
	'THEME_REFRESHED'			=> 'Theme erfolgreich aktualisiert.',
	'THEME_UPDATED'				=> 'Theme erfolgreich geändert.',

	'UNDERLINE'				=> 'Unterstrichen',
	'UNINSTALLED_IMAGESET'	=> 'Nicht installierte Grafiksammlungen',
	'UNINSTALLED_STYLE'		=> 'Nicht installierte Styles',
	'UNINSTALLED_TEMPLATE'	=> 'Nicht installierte Templates',
	'UNINSTALLED_THEME'		=> 'Nicht installierte Themes',
	'UNSET'					=> 'Nicht definiert',

));

?>