<?php

/* Tablesets aktualisieren */
$addon = rex_addon::get('yrewrite_metainfo');

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_table_api::importTablesets((string) rex_file::get(__DIR__ . '/install/rex_yrewrite_metainfo.tableset.json'));
    rex_yform_manager_table::deleteCache();
}
