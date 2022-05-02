<?php

return [
    'plugin' => [
        'name' => 'Vertaal',
        'description' => 'Stelt meerdere talen in voor een website.',
        'tab' => 'Vertalingen',
        'manage_locales' => 'Beheer talen',
        'manage_messages' => 'Beheer vertaalde berichten'
    ],
    'locale_picker' => [
        'component_name' => 'Taalkeuze menu',
        'component_description' => 'Geeft een taal keuzemenu weer om de taal te wijzigen voor de website.',
    ],
    'alternate_hreflang' => [
        'component_name' => 'Alternatieve hrefLang elementen',
        'component_description' => 'Toont hreflang elementen voor de alt. talen'
    ],
    'locale' => [
        'title' => 'Beheer talen',
        'update_title' => 'Wijzig taal',
        'create_title' => 'Taal toevoegen',
        'select_label' => 'Selecteer taal',
        'default_suffix' => 'standaard',
        'unset_default' => '":locale" is de standaard taal en kan niet worden uitgeschakeld',
        'delete_default' => '":locale" is de standaard taal en kan niet worden verwijderd.',
        'disabled_default' => '":locale" is uitgeschakeld en kan niet als standaard taal worden ingesteld.',
        'name' => 'Naam',
        'code' => 'Code',
        'is_default' => 'Standaard',
        'is_default_help' => 'De standaard taal voor de inhoud.',
        'is_enabled' => 'Geactiveerd',
        'is_enabled_help' => 'Uitgeschakelde talen zijn niet beschikbaar op de website.',
        'not_available_help' => 'Er zijn geen andere talen beschikbaar.',
        'hint_locales' => 'Voeg hier nieuwe talen toe voor het vertalen van de website inhoud. De standaard taal geeft de inhoud weer voordat het is vertaald.',
        'reorder_title' => 'Talen rangschikken',
        'sort_order' => 'Volgorde',
    ],
    'messages' => [
        'title' => 'Vertaal berichten',
        'description' => 'Wijzig berichten',
        'clear_cache_link' => 'Leeg cache',
        'clear_cache_loading' => 'Applicatie cache legen...',
        'clear_cache_success' => 'De applicatie cache is succesvol geleegd.',
        'clear_cache_hint' => 'Het kan zijn dat het nodig is om op <strong>cache legen</strong>" te klikken om wijzigingen op de website te zien.',
        'scan_messages_link' => 'Zoek naar nieuwe berichten',
        'scan_messages_begin_scan' => 'Begin scan',
        'scan_messages_loading' => 'Zoeken naar nieuwe berichten...',
        'scan_messages_success' => 'De thema bestanden zijn succesvol gescand!',
        'scan_messages_hint' => 'Klikken op <strong>Zoeken naar nieuwe berichten</strong> controleert de bestanden van het huidige thema op nieuwe berichten om te vertalen.',
        'scan_messages_process' => 'Dit proces zal proberen het huidige thema te scannen voor berichten om te vertalen',
        'scan_messages_process_limitations' => 'Sommige berichten zullen niet worden herkend en zullen pas verschijnen nadat ze voor de eerste keer zijn gebruikt',
        'scan_messages_purge_label' => 'Verwijder eerst alle berichten',
        'scan_messages_purge_help' => 'Als dit is aangevinkt zullen alle berichten worden verwijderd voordat de scan wordt uitgevoerd.',
        'scan_messages_purge_confirm' => 'Weet je zeker dat je alle berichten wilt verwijderen? Dit kan niet ongedaan gemaakt worden',
        'hint_translate' => 'Hier kan je berichten vertalen die worden gebruikt op de website. De velden worden automatisch opgeslagen.',
        'hide_translated' => 'Verberg vertaalde berichten',
    ],
];
