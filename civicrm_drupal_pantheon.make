; This make file is based on civicrm_starterkit but can be used for
; CiviCRM in sites/all/modules
; drush make --no-core civicrm_drupal_pantheon.make

api = 2
core = 7.34

; ====== CIVICRM RELATED =========

libraries[civicrm][download][type] = get
libraries[civicrm][download][url] = "https://download.civicrm.org/civicrm-4.4.12-drupal.tar.gz"
libraries[civicrm][destination] = modules
libraries[civicrm][directory_name] = civicrm

;PANTHEON RELATED PATCHES
; Add default Pantheon environment settings (d.o/node/2082713 originally)
; Move civicrm files to sites/default/files/private/civicrm
; https://civicrm.org/advisory/civi-sa-2014-001-risk-information-disclosure
; http://forum.civicrm.org/index.php?topic=31570.0
libraries[civicrm][patch][2195947] = https://www.drupal.org/files/issues/2195947-pantheon-settings-4-4-files-security-2.patch

; Required for install
libraries[civicrm][patch][1978796] = http://drupal.org/files/1978796-session.save-as_file.patch
; Populate with Pantheon environment settings on install
libraries[civicrm][patch][1978838] = http://drupal.org/files/issues/1978838-pre-populate-db-settings-2.patch
; provide modulepath to populate settings
libraries[civicrm][patch][2063371] = http://drupal.org/files/2063371-add-modulePath-var-4-4.patch
; Required for extern urls to work (e.g. ipn.php, soap.php)
libraries[civicrm][patch][2177647] = https://drupal.org/files/issues/2177647-sessions-fix.patch
; May be necessary where extension, etc paths are cached but Pantheon changes binding
libraries[civicrm][patch][2347897] = https://drupal.org/files/issues/2347897-binding-fix-for-extensions.patch
; Related to https://issues.civicrm.org/jira/browse/CRM-9683
libraries[civicrm][patch][2130213] = http://drupal.org/files/issues/2130213-ignore-timezone-on-install-2.patch

; Necessary if in profiles/*/modules/civicrm
libraries[civicrm][patch][1844558] = https://drupal.org/files/issues/1844558-run-civicrm-from-profile-dir-config-3.patch
libraries[civicrm][patch][1967972] = http://drupal.org/files/1967972-bootsrap-fixes.patch

; == Not including these for now because might not be necessary ==
; Not necessary? OpenFlashChart is working
;libraries[civicrm][patch][1940074] = http://drupal.org/files/1940074-openFlashChart_tpl_javascript-4.patch

; Related to https://issues.civicrm.org/jira/browse/CRM-13737 -- reverts that change
; I don't know if it's necessary but needs to be tested by installing on Pantheon
;libraries[civicrm][patch][2153441] = https://drupal.org/files/issues/2153441_formatresourceurl-4.patch
;libraries[civicrm][patch][] = https://drupal.org/files/issues/2153441_formatresourceurl-5.patch