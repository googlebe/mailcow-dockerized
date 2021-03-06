<?php
/*
//
//  Italian language file
//
*/
$lang['footer']['loading'] = "Attendere...";
$lang['header']['restart_sogo'] = 'Riavvia SOGo';
$lang['footer']['restart_sogo'] = 'Riavvia SOGo';
$lang['footer']['restart_now'] = 'Riavvia adesso';
$lang['footer']['restart_sogo_info'] = 'Some tasks, e.g. adding a domain, require you to restart SOGo to catch changes made in the mailcow UI.<br /><br /><b>Important:</b> A graceful restart may take a while to complete, please wait for it to finish.';

$lang['footer']['confirm_delete'] = 'Conferma eliminazione';
$lang['footer']['delete_these_items'] = 'Sicuro di voler eliminare gli oggetti selezionati?';
$lang['footer']['delete_now'] = 'Elimina ora';
$lang['footer']['cancel'] = 'Annulla';

$lang['dkim']['confirm'] = "Sicuro?";
$lang['danger']['dkim_not_found'] = "Chiave DKIM non trovata";
$lang['danger']['dkim_remove_failed'] = "Impossibile rimuovere la chiave DKIM selezionata";
$lang['danger']['dkim_add_failed'] = "Impossibile aggiungere la chiave DKIM selezionata";
$lang['danger']['dkim_domain_or_sel_invalid'] = "DKIM domain or selector invalid";
$lang['danger']['dkim_key_length_invalid'] = "Lunghezza della chiave DKIM non valida";
$lang['success']['dkim_removed'] = "La chiave DKIM è stata rimossa";
$lang['success']['dkim_added'] = "La chiave DKIM è stata salvata";
$lang['danger']['access_denied'] = "Accesso negato o form di login non corretto";
$lang['danger']['whitelist_from_invalid'] = "Elemento Whitelist non valido";
$lang['danger']['domain_invalid'] = "Il nome di dominio non è valido";
$lang['danger']['mailbox_quota_exceeds_domain_quota'] = "La quota massima eccede la quota di dominio";
$lang['danger']['object_is_not_numeric'] = "Il valore %s non è numerico";
$lang['success']['domain_added'] = "Aggiunto dominio %s";
$lang['danger']['alias_empty'] = "L'indirizzo di alias non può restare vuoto";
$lang['danger']['last_key'] = "L'ultima chiave non può essere rimossa";
$lang['danger']['goto_empty'] = "L'indirizzo di destinazione non può restare vuoto";
$lang['danger']['policy_list_from_exists'] = "Un elemento con lo stesso nome è già presente";
$lang['danger']['policy_list_from_invalid'] = "L'elemento ha un formato non valido";
$lang['danger']['whitelist_exists'] = "Un elemento è già presente con lo stesso nome tra i whitelist";
$lang['danger']['whitelist_from_invalid'] = "L'elemento Whitelist ha un formato non valido";
$lang['danger']['alias_invalid'] = "L'indirizzo alias non è valido";
$lang['danger']['goto_invalid'] = "Goto address non è valido";
$lang['danger']['alias_domain_invalid'] = "Alias domain non è valido";
$lang['danger']['target_domain_invalid'] = "Goto domain non è valido";
$lang['danger']['object_exists'] = "Object %s esiste già";
$lang['danger']['domain_exists'] = "Domain %s esiste già";
$lang['danger']['alias_goto_identical'] = "Alias and goto address must not be identical";
$lang['danger']['aliasd_targetd_identical'] = "Alias domain must not be equal to target domain";
$lang['danger']['maxquota_empty'] = 'Max. quota per mailbox must not be 0.';
$lang['success']['alias_added'] = "Alias address/es has/have been added";
$lang['success']['alias_modified'] = 'I cambiamenti all\'alias/es %s è stato salvato';
$lang['success']['aliasd_modified'] = "I cambiamenti all'alias domain è stato salvato";
$lang['success']['mailbox_modified'] = "I cambiamenti alla mailbox %s è stato salvato";
$lang['success']['resource_modified'] = "I cambiamenti alla mailbox %s è stato salvato";
$lang['success']['object_modified'] = "I cambiamenti all'oggetto %s è stato salvato";
$lang['success']['msg_size_saved'] = "Il limite di dimensione messaggio è stato impostato";
$lang['danger']['aliasd_not_found'] = "l'alias del dominio non è stato trovato";
$lang['danger']['targetd_not_found'] = "Il target del dominio non è stato trovato";
$lang['danger']['aliasd_exists'] = "L'Alias di dominio esiste già";
$lang['success']['aliasd_added'] = 'Aggiunto l\'alias per il dominio %s';
$lang['success']['aliasd_modified'] = "I cambiamenti a alias domain %s è stato salvato";
$lang['success']['domain_modified'] = "I cambiamenti a domain %s è stato salvato";
$lang['success']['domain_admin_modified'] = "I cambiamenti a domain administrator %s è stato salvato";
$lang['success']['domain_admin_added'] = "L'amministratore di dominio %s è stato aggiunto";
$lang['success']['changes_general'] = 'I cambiamenti sono stati salvati';
$lang['success']['admin_modified'] = "I cambiamenti a administrator è stato salvato";
$lang['danger']['exit_code_not_null'] = 'Errore: Il codice di uscita è %d';
$lang['danger']['mailbox_not_available'] = "Casella non disponibile";
$lang['danger']['username_invalid'] = "Username non può essere utilizzato";
$lang['danger']['password_mismatch'] = "La password di conferma non corrisponde";
$lang['danger']['password_complexity'] = "La password non soddisfa le regole di sicurezza";
$lang['danger']['password_empty'] = "Il campo password non può essere vuoto";
$lang['danger']['login_failed'] = "Login fallito";
$lang['danger']['mailbox_invalid'] = "Il nome della casella non è valido";
$lang['danger']['description_invalid'] = 'La descrizione della risorsa non è valido';
$lang['danger']['resource_invalid'] = "Il nome della risorsa non è valido";
$lang['danger']['mailbox_invalid_suggest'] = 'Il nome della casella non è valido, avevi in mente "%s"?';
$lang['danger']['is_alias'] = "%s è già presente come alias";
$lang['danger']['is_alias_or_mailbox'] = "%s è già presente come alias o casella";
$lang['danger']['is_spam_alias'] = "%s è già presente come indirizzo spam alias";
$lang['danger']['quota_not_0_not_numeric'] = "La quota deve essere numerica e >= 0";
$lang['danger']['domain_not_found'] = "Dominio non trovato.";
$lang['danger']['max_mailbox_exceeded'] = "Numero massimo di caselle superato (%d of %d)";
$lang['danger']['max_alias_exceeded'] = 'Numero massimo di alias superato';
$lang['danger']['mailbox_quota_exceeded'] = "La quota ha oltrepassato il limite di dominio (max. %d MiB)";
$lang['danger']['mailbox_quota_left_exceeded'] = "Non c'è abbastanza spazio libero (space left: %d MiB)";
$lang['success']['mailbox_added'] = "La casella %s è stata aggiunta";
$lang['success']['resource_added'] = "La risorsa %s è stata aggiunta";
$lang['success']['domain_removed'] = "Il dominio %s è stato aggiunto";
$lang['success']['alias_removed'] = "L'alias %s è stato rimosso";
$lang['success']['alias_domain_removed'] = "L'alias di dominio %s è stato rimosso";
$lang['success']['domain_admin_removed'] = "L'amministratore di dominio %s è stato rimosso";
$lang['success']['mailbox_removed'] = "La casella %s è stata rimossa";
$lang['success']['eas_reset'] = "Dispositivi ActiveSync dell'utente %s resettati";
$lang['success']['resource_removed'] = "La risorsa %s è stata rimossa";
$lang['danger']['max_quota_in_use'] = "La quota della casella deve essere maggiore o uguale a %d MiB";
$lang['danger']['domain_quota_m_in_use'] = "La quota di dominio deve essere maggiore o uguale a %s MiB";
$lang['danger']['mailboxes_in_use'] = "La quota della casella massima deve essere maggiore o uguale a %d";
$lang['danger']['aliases_in_use'] = "Il numero massimo di alias must deve essere maggiore o uguale a %d";
$lang['danger']['sender_acl_invalid'] = "Il valore di Sender ACL non è valido";
$lang['danger']['domain_not_empty'] = "Non posso rimuovere domini in non vuoti";
$lang['warning']['spam_alias_temp_error'] = "Errore temporaneo: Impossibile aggiungere alias di spam, provare più tardi.";
$lang['danger']['spam_alias_max_exceeded'] = "Il numero massimo di indirizzi come spam alias superato";
$lang['danger']['validity_missing'] = 'Assegnare un periodo di validità';
$lang['user']['on'] = "On";
$lang['user']['off'] = "Off";
$lang['user']['messages'] = "messaggi"; // "123 messages"
$lang['user']['in_use'] = "Utilizzati";
$lang['user']['user_change_fn'] = "";
$lang['user']['user_settings'] = 'Impostazioni utente';
$lang['user']['mailbox_settings'] = 'Impostazioni casella';
$lang['user']['mailbox_details'] = 'Dettagli casella';
$lang['user']['change_password'] = 'Cambia password';
$lang['user']['new_password'] = 'Nuova password';
$lang['user']['save_changes'] = 'Salva modifiche';
$lang['user']['password_now'] = 'Password attuale (conferma modifiche)';
$lang['user']['new_password_repeat'] = 'Conferma password (ripeti)';
$lang['user']['new_password_description'] = 'Requisiti: Lunghezza di 6 caratteri, lettere e numeri.';
$lang['user']['did_you_know'] = '<b>Lo sapevi?</b> Puoi usare i tags nell\'indirizzo di posta ("me+<b>privat</b>@example.com") per muovere i messaggi automaticamente nelle cartelle (esempio: "privat").';
$lang['user']['spam_aliases'] = 'Indirizzi mail temporanei';
$lang['user']['alias'] = 'Alias';
$lang['user']['aliases'] = 'Aliases';
$lang['user']['domain_aliases'] = 'Indirizzi alias del dominio';
$lang['user']['is_catch_all'] = 'Catch-all per il dominio/i';
$lang['user']['aliases_also_send_as'] = 'Può inviare come utente';
$lang['user']['aliases_send_as_all'] = 'Do not check sender access for the following domain(s) and its alias domains';
$lang['user']['alias_create_random'] = 'Genera un alias generico';
$lang['user']['alias_extend_all'] = 'Estendi la durata di 1 ora agli alias';
$lang['user']['alias_valid_until'] = 'Valido fino a';
$lang['user']['alias_remove_all'] = 'Rimuovi tutti gli alias';
$lang['user']['alias_time_left'] = 'Tempo rimanente';
$lang['user']['alias_full_date'] = 'd.m.Y, H:i:s T';
$lang['user']['syncjob_full_date'] = 'd.m.Y, H:i:s T';
$lang['user']['alias_select_validity'] = 'Periodo di validità';
$lang['user']['sync_jobs'] = 'Processi di sync';
$lang['user']['hour'] = 'Ora';
$lang['user']['hours'] = 'Ore';
$lang['user']['day'] = 'Giorno';
$lang['user']['week'] = 'Settimana';
$lang['user']['weeks'] = 'Settimane';
$lang['user']['spamfilter'] = 'Filtri spam';
$lang['user']['spamfilter_wl'] = 'Whitelist';
$lang['user']['spamfilter_wl_desc'] = 'Email inserita nella whitelist per <b>non essere mai</b> riconosciuta come spam. Si possono usare le wildcards.';
$lang['user']['spamfilter_bl'] = 'Blacklist';
$lang['user']['spamfilter_bl_desc'] = 'Email inserita nella blacklisted per <b>essere sempre</b> riconosciuta come spam e rifiutata. Si possono usare le wildcards.';
$lang['user']['spamfilter_behavior'] = 'Punteggio';
$lang['user']['spamfilter_table_rule'] = 'Regola';
$lang['user']['spamfilter_table_action'] = 'Azione';
$lang['user']['spamfilter_table_empty'] = 'Nessun dato da mostrare';
$lang['user']['spamfilter_table_remove'] = 'rimuovi';
$lang['user']['spamfilter_table_add'] = 'Aggiungi oggetto';
$lang['user']['spamfilter_default_score'] = 'Punteggio di spam:';
$lang['user']['spamfilter_green'] = 'Verde: Questo messaggio non è spam';
$lang['user']['spamfilter_yellow'] = 'Giallo: Questo messaggio può essere spam, verrà segnalato come spam e spostato nella cartella spazzatura';
$lang['user']['spamfilter_red'] = 'Rosso: uesto messaggio è spam e verrà rifiutato dal server';
$lang['user']['spamfilter_default_score'] = 'Valori di default:';
$lang['user']['spamfilter_hint'] = 'Il primo valore rappresenta un "basso punteggio di spam", il secondo rappresenta un "alto punteggio di spam".';
$lang['user']['spamfilter_table_domain_policy'] = "n/a (policy di dominio)";

$lang['user']['tls_policy_warning'] = '<strong>Attenzione:</strong> If you decide to enforce encrypted mail transfer, you may lose emails.<br />Messages to not satisfy the policy will be bounced with a hard fail by the mail system.<br />This option applies to your primary email address (login name), all addresses derived from alias domains as well as alias addresses <b>with only this single mailbox</b> as target.';
$lang['user']['tls_policy'] = 'Politica di crittografia';
$lang['user']['tls_enforce_in'] = 'Imponi TLS in ingresso';
$lang['user']['tls_enforce_out'] = 'Imponi TLS in uscita';
$lang['user']['no_record'] = 'Nessun elemento';

$lang['user']['misc_settings'] = 'Impostazioni di altri profili';
$lang['user']['misc_delete_profile'] = 'Impostazioni di altri profili';

$lang['user']['tag_handling'] = 'Imposta le gestione della mail evidenziate';
$lang['user']['tag_in_subfolder'] = 'Nella sotto cartella';
$lang['user']['tag_in_subject'] = 'Nell\'oggetto';
$lang['user']['tag_in_none'] = "Fare niente";
$lang['user']['tag_help_explain'] = 'In sotto cartelle: Una nuova cartella dal nome del tag verrà creata sotto INBOX ("INBOX/Facebook").<br />
Nell\'oggetto: Il nome del tag verrà aggiunto all\'inizio dell\'oggetto mail, esempio: "[Facebook] Meine Neuigkeiten".';
$lang['user']['tag_help_example'] = 'Esempio di mail con tag: ich<b>+Facebook</b>@example.org';
$lang['user']['eas_reset'] = 'Ripristina la cache dei dispositivi ActiveSync';
$lang['user']['eas_reset_now'] = 'Ripristina ora';
$lang['user']['eas_reset_help'] = 'In molti casi un ripristino risolve i problemi di sincronizzazione dei dispositivi.<br /><b>Attenzione:</b> Tutti gli elementi verranno scaricati nuovamente!';

$lang['user']['encryption'] = 'Crittografia';
$lang['user']['username'] = 'Nome utente';
$lang['user']['password'] = 'Password';
$lang['user']['last_run'] = 'Ultima esecuzione';
$lang['user']['excludes'] = 'Esclude';
$lang['user']['interval'] = 'Intervallo';
$lang['user']['active'] = 'Attiva';
$lang['user']['action'] = 'Azione';
$lang['user']['edit'] = 'Modifica';
$lang['user']['remove'] = 'Elimina';
$lang['user']['delete_now'] = 'Elimina ora';
$lang['user']['create_syncjob'] = 'Crea un azione di sync';

$lang['start']['dashboard'] = '%s - dashboard';
$lang['start']['start_rc'] = 'Apri Roundcube';
$lang['start']['start_sogo'] = 'Apri SOGo';
$lang['start']['mailcow_apps_detail'] = 'Usa l\'app mailcow per accedere alla posta, calendari, contatti ed altro.';
$lang['start']['mailcow_panel'] = 'Avvia UI mailcow';
$lang['start']['mailcow_panel_description'] = 'L\'UI di mailcow per gli amministratori e gli utenti di caselle.';
$lang['start']['mailcow_panel_detail'] = '<b>Amministratori di dominio</b> crea, modifica o cancella caselle e alias, cambia i domini e informazioni relative ai domini associati.<br />
	<b>Utenti di caselle</b> possono creare degli alias temporanei (spam aliases), cambiare la loro password e le impostazioni relative ai filtri spam.';
$lang['start']['recommended_config'] = 'Configurazioni consigliate (senza ActiveSync)';
$lang['start']['imap_smtp_server'] = 'Dati server IMAP e SMTP';
$lang['start']['imap_smtp_server_description'] = 'Per l\'esperienza migliore utilizzare <a href="%s" target="_blank"><b>Mozilla Thunderbird</b></a>.';
$lang['start']['imap_smtp_server_badge'] = 'Leggi e scrivi le email';
$lang['start']['imap_smtp_server_auth_info'] = 'Please use your full email address and the PLAIN authentication mechanism.<br />
Your login data will be encrypted by the server-side mandatory encryption.';
$lang['start']['managesieve'] = 'ManageSieve';
$lang['start']['managesieve_badge'] = 'Filtri email';
$lang['start']['managesieve_description'] = 'Please use <b>Mozilla Thunderbird</b> with the <a style="text-decoration:none" target="_blank" href="%s"><b>nightly sieve extension</b></a>.<br />Start Thunderbird, open the add-on settings and drop the newly downloaded xpi file into the opened window.<br />The server name is <b>%s</b>, use port <b>4190</b> if you are asked for. The login data match your email login.';
$lang['start']['service'] = 'Servizio';
$lang['start']['encryption'] = 'Metodo di criptazione';
$lang['start']['help'] = 'Mostra/Nascondi pannello di aiuto';
$lang['start']['hostname'] = 'Hostname';
$lang['start']['port'] = 'Porta';
$lang['start']['footer'] = '';
$lang['header']['mailcow_settings'] = 'Configurazione';
$lang['header']['administration'] = 'Amministrazione';
$lang['header']['mailboxes'] = 'Caselle';
$lang['header']['user_settings'] = 'Impostazioni utente';
$lang['header']['login'] = 'Accedi';
$lang['header']['logged_in_as_logout'] = 'Accesso come <b>%s</b> (esci)';
$lang['header']['logged_in_as_logout_dual'] = 'Accesso come <b>%s <span class="text-info">[%s]</span></b>';
$lang['header']['locale'] = 'Lingua';
$lang['mailbox']['domain'] = 'Dominio';
$lang['mailbox']['spam_aliases'] = 'Alias temporanei';
$lang['mailbox']['multiple_bookings'] = 'Multiple bookings';
$lang['mailbox']['kind'] = 'Tipo';
$lang['mailbox']['description'] = 'Descrizione';
$lang['mailbox']['alias'] = 'Alias';
$lang['mailbox']['resource_name'] = 'Nome risorsa';
$lang['mailbox']['aliases'] = 'Aliases';
$lang['mailbox']['domains'] = 'Domini';
$lang['mailbox']['mailboxes'] = 'Caselle';
$lang['mailbox']['resources'] = 'Risorse';
$lang['mailbox']['mailbox_quota'] = 'Massima dimensione della casella';
$lang['mailbox']['domain_quota'] = 'Quota';
$lang['mailbox']['active'] = 'Attiva';
$lang['mailbox']['action'] = 'Azione';
$lang['mailbox']['ratelimit'] = 'limite invio msg/h';
$lang['mailbox']['backup_mx'] = 'Backup MX';
$lang['mailbox']['domain_aliases'] = 'Alias di domini';
$lang['mailbox']['target_domain'] = 'Target domain';
$lang['mailbox']['target_address'] = 'Vai ad indirizzo';
$lang['mailbox']['username'] = 'Nome utente';
$lang['mailbox']['fname'] = 'Nome completo';
$lang['mailbox']['filter_table'] = 'Filra tabella';
$lang['mailbox']['yes'] = '&#10004;';
$lang['mailbox']['no'] = '&#10008;';
$lang['mailbox']['quota'] = 'Quota';
$lang['mailbox']['in_use'] = 'In uso (%)';
$lang['mailbox']['msg_num'] = 'Messaggio #';
$lang['mailbox']['remove'] = 'Rimuovi';
$lang['mailbox']['edit'] = 'Modifica';
$lang['mailbox']['archive'] = 'Archivio';
$lang['mailbox']['no_record'] = 'Nessun record per l\' oggetto %s';
$lang['mailbox']['no_record_single'] = 'Nessun record';
$lang['mailbox']['add_domain'] = 'Aggiungi Dominio';
$lang['mailbox']['add_domain_alias'] = 'Aggiungi alias Dominio';
$lang['mailbox']['add_mailbox'] = 'Aggiungi casella mail';
$lang['mailbox']['add_resource'] = 'Aggiungi risorsa';
$lang['mailbox']['add_alias'] = 'Aggiungi alias';
$lang['mailbox']['add_domain_record_first'] = 'Perfavore aggiungi il dominio prima';
$lang['mailbox']['empty'] = 'Nessun risultato';
$lang['mailbox']['toggle_all'] = 'Inverti tutti';
$lang['mailbox']['quick_actions'] = 'Azione veloce';
$lang['mailbox']['activate'] = 'Attiva';
$lang['mailbox']['deactivate'] = 'Disattiva';

$lang['info']['no_action'] = 'Azione non applicabile';

$lang['delete']['title'] = 'Rimuovi oggetti';
$lang['delete']['remove_domain_warning'] = '<b>Attenzione:</b> Sei sicuro di voler rimuovere il dominio <b>%s</b>!';
$lang['delete']['remove_syncjob_warning'] = '<b>Attenzione:</b> Sei sicuro di voler rimuovere la sincronizzazione per l\'utente <b>%s</b>!';
$lang['delete']['remove_domainalias_warning'] = '<b>Attenzione:</b> Sei sicuro di voler rimuovere l\' alias di dominio <b>%s</b>!';
$lang['delete']['remove_domainadmin_warning'] = '<b>Attenzione:</b> Sei sicuro di voler rimuovere l\' amministratore di dominio <b>%s</b>!';
$lang['delete']['remove_alias_warning'] = '<b>Attenzione:</b> Sei sicuro di voler rimuovere l\' alias <b>%s</b>!';
$lang['delete']['remove_mailbox_warning'] = '<b>Attenzione:</b> Sei sicuro di voler rimuovere la casella di posta <b>%s</b>!';
$lang['delete']['remove_mailbox_details'] = 'La casella di posta sarà <b>eliminata definitivamente</b>!';
$lang['delete']['remove_resource_warning'] = '<b>Attenzione:</b> Stai per rimuovere la risorsa <b>%s</b>!';
$lang['delete']['remove_resource_details'] = 'La risorsa sarà <b>eliminata definitivamente</b>!';
$lang['delete']['remove_domain_details'] = 'Questo rimuoverà anche gli alias di dominio.<br /><br /><b>Un dominio deve essere vuoto per essere rinmosso.</b>';
$lang['delete']['remove_syncjob_details'] = 'Gli oggetti provenienti da questa sincronizzazione non verranno più estratti dal server remoto.';
$lang['delete']['remove_alias_details'] = 'Gli utenti non potranno più ricevere posta per o inviare posta da questo indirizzo.</b>';
$lang['delete']['remove_button'] = 'Rimuovi';
$lang['delete']['previous'] = 'Pagina precedente';

$lang['edit']['syncjob'] = 'Modifica sincronizzazione';
$lang['edit']['save'] = 'Salva modifiche';
$lang['edit']['username'] = 'Username';
$lang['edit']['hostname'] = 'Hostname';
$lang['edit']['encryption'] = 'Criptazione';
$lang['edit']['maxage'] = 'Massima età dei messaggi che verranno scaricati dal server remoto<br /><small>(0 = ignorà età)</small>';
$lang['edit']['subfolder2'] = 'Sincronizza in una sottocartella<br /><small>(vuoto = non sincronizzare in sottocartella)</small>';
$lang['edit']['mins_interval'] = 'Intervallo (min)';
$lang['edit']['exclude'] = 'Escludi oggetti (regex)';
$lang['edit']['save'] = 'Salva modifiche';
$lang['edit']['archive'] = 'Archivia accesso';
$lang['edit']['max_mailboxes'] = 'Caselle di posta massime';
$lang['edit']['title'] = 'Modifica oggetto';
$lang['edit']['target_address'] = 'Vai all\'indirizzo/es <small>(comma-separated)</small>';
$lang['edit']['active'] = 'Attivo';
$lang['edit']['target_domain'] = 'Target dominio';
$lang['edit']['password'] = 'Password';
$lang['edit']['ratelimit'] = 'Traffico uscita limite/ora';
$lang['danger']['ratelimt_less_one'] = 'Traffico uscita limite/ora non deve essere inferiore a 1';
$lang['edit']['password_repeat'] = 'Conferma password (riscrivila)';
$lang['edit']['domain_admin'] = 'Modifica amministratore dominio';
$lang['edit']['domain'] = 'Modifica dominio';
$lang['edit']['alias_domain'] = 'Alias dominio';
$lang['edit']['edit_alias_domain'] = 'Modifica Alias dominio';
$lang['edit']['domains'] = 'Dominio';
$lang['edit']['destroy'] = 'inserimento manuale dati';
$lang['edit']['alias'] = 'Modifica alias';
$lang['edit']['mailbox'] = 'Modifica casella di posta';
$lang['edit']['description'] = 'Descrizione';
$lang['edit']['max_aliases'] = 'Numero massimo alias';
$lang['edit']['max_quota'] = 'Massimo spazio per casella (MiB)';
$lang['edit']['domain_quota'] = 'Spazio Dominio';
$lang['edit']['backup_mx_options'] = 'Backup MX options';
$lang['edit']['relay_domain'] = 'Relay dominio';
$lang['edit']['relay_all'] = 'Relay tutti i destinatari';
$lang['edit']['dkim_signature'] = 'Firma ARC + DKIM';
$lang['edit']['dkim_record_info'] = '<small>Aggiungere un record TXT con il valore specificato nell\' pannello DNS.</small>';
$lang['edit']['relay_all_info'] = '<small>Se si sceglie di <b>non</b> inviare tutti i destinatari, è necessario aggiungere una cassetta postale ("blind") per ogni singolo destinatario a cui deve essere inoltrato.</small>';
$lang['edit']['full_name'] = 'Nome completo';
$lang['edit']['quota_mb'] = 'Spazio (MiB)';
$lang['edit']['sender_acl'] = 'Consenti di inviare come';
$lang['edit']['sender_acl_info'] = 'Gli alias non possono essere deselezionati';
$lang['edit']['dkim_txt_name'] = 'TXT record name:';
$lang['edit']['dkim_txt_value'] = 'TXT record value:';
$lang['edit']['previous'] = 'Pagina precedente';
$lang['edit']['unchanged_if_empty'] = 'Se immutato lasciare vuoto';
$lang['edit']['dont_check_sender_acl'] = "Disattiva il controllo del mittente per il dominio %s + alias domains";
$lang['edit']['multiple_bookings'] = 'Prenotazioni multiple';
$lang['edit']['kind'] = 'Genere';
$lang['edit']['resource'] = 'Risorsa';

$lang['add']['syncjob'] = 'Aggiungi sincronizzazione';
$lang['add']['syncjob_hint'] = 'Ricordati che le password vanno salvate in testo semplice!';
$lang['add']['hostname'] = 'Hostname';
$lang['add']['port'] = 'Porta';
$lang['add']['username'] = 'Username';
$lang['add']['enc_method'] = 'Metodo di criptazione';
$lang['add']['mins_interval'] = 'intervallo di Pooling (minuti)';
$lang['add']['maxage'] = 'Età massima dei messaggi che verranno interrogati dal server remoto (0 = ignora l\'età)';
$lang['add']['subfolder2'] = 'Sincronizza in una sottocartella nella destinazione';
$lang['add']['exclude'] = 'Escludi oggetti (regex)';
$lang['add']['delete2duplicates'] = 'Elimina duplicati nella destinazione';
$lang['add']['delete1'] = 'Elimina dalla sorgente al termine';
$lang['edit']['delete2duplicates'] = 'Elimina duplicati nella destinazione';
$lang['edit']['delete1'] = 'Elimina dalla sorgente al termine';

$lang['add']['title'] = 'Aggiungi oggetti';
$lang['add']['domain'] = 'Dominio';
$lang['add']['active'] = 'Attiva';
$lang['add']['multiple_bookings'] = 'Prenotazioni multiple';
$lang['add']['save'] = 'Salva modifiche';
$lang['add']['description'] = 'Descrizione:';
$lang['add']['max_aliases'] = 'Numero massimo alias:';
$lang['add']['resource_name'] = 'Nome della risorsa';
$lang['add']['max_mailboxes'] = 'Numero massimo caselle di posta:';
$lang['add']['mailbox_quota_m'] = 'Spazio massimo per casella di posta (MiB):';
$lang['add']['domain_quota_m'] = 'Spazio totale dominio (MiB):';
$lang['add']['backup_mx_options'] = 'Backup MX options:';
$lang['add']['relay_all'] = 'Trasmettere a tutti i destinatari';
$lang['add']['relay_domain'] = 'Trasmetti questo dominio';
$lang['add']['relay_all_info'] = '<small>Se si sceglie di <b>non</b> inviare tutti i destinatari, è necessario aggiungere una cassetta postale ("blind") per ogni singolo destinatario a cui deve essere inoltrato.</small>';
$lang['add']['alias'] = 'Alias(es)';
$lang['add']['alias_spf_fail'] = '<b>Nota:</b> Se l\'indirizzo di destinazione scelto è una casella mail esterna, il <b>server mail ricevente</b> potrebbe rifiutare il messaggio a causa dell\' SPF.</a>';
$lang['add']['alias_address'] = 'Indirizzo alias/es:';
$lang['add']['alias_address_info'] = '<small>Indirizzo e-mail completo/es @example.com, per catturare tutti i messaggi di un dominio (separati da virgola). <b>solo domini mailcow</b>.</small>';
$lang['add']['alias_domain_info'] = '<small>Solo nomi di dominio validi (cseparati da virgola).</small>';
$lang['add']['target_address'] = 'Inoltra all\'indirizzo:';
$lang['add']['target_address_info'] = '<small>Indirizzo e-mail completo/es (separati da virgole).</small>';
$lang['add']['alias_domain'] = 'Dominio alias';
$lang['add']['select'] = 'Perfavore seleziona...';
$lang['add']['target_domain'] = 'Target dominio:';
$lang['add']['mailbox'] = 'Casella di posta';
$lang['add']['resource'] = 'Risorsa';
$lang['add']['kind'] = 'Genere';
$lang['add']['mailbox_username'] = 'Username (parte a sinistra della @):';
$lang['add']['full_name'] = 'Nome completo:';
$lang['add']['quota_mb'] = 'Spazio (MiB):';
$lang['add']['select_domain'] = 'Perfavore seleziona il dominio prima';
$lang['add']['password'] = 'Password:';
$lang['add']['password_repeat'] = 'Conferma password (riscrivi):';
$lang['add']['previous'] = 'Pagina precedente';
$lang['add']['restart_sogo_hint'] = 'Dovrai riavviare il servizio SOGo dopo aver aggiunto un nuovo dominio!';

$lang['login']['title'] = 'Accedi';
$lang['login']['administration'] = 'Amministrazione';
$lang['login']['administration_details'] = 'Utilizza il login di amministratore per eseguire attività amministrative.';
$lang['login']['user_settings'] = 'Settaggi utente';
$lang['login']['user_settings_details'] = 'Gli utenti delle caselle mail possono utilizzare l\'interfaccia utente di mailcow per modificare le password, creare alias temporanei e regolare il comportamento del filtro anti-spam o importare messaggi da un server IMAP remoto.';
$lang['login']['username'] = 'Username';
$lang['login']['password'] = 'Password';
$lang['login']['reset_password'] = 'Reset password';
$lang['login']['login'] = 'Login';
$lang['login']['previous'] = "Pagina precendente";
$lang['login']['delayed'] = 'L\'accesso è stato ritardato di %s secondi.';
$lang['tfa']['tfa'] = "Autenticazione a due fattori";
$lang['tfa']['set_tfa'] = "Imposta il metodo di autenticazione a due fattori";
$lang['tfa']['yubi_otp'] = "Autenticazione Yubico OTP";
$lang['tfa']['key_id'] = "Identificatore per il tuo YubiKey";
$lang['tfa']['key_id_totp'] = "Identificatore per la tua chiave";
$lang['tfa']['api_register'] = 'mailcow usa le Api Yubico Cloud. Richiedi una Chiave API <a href="https://upgrade.yubico.com/getapikey/" target="_blank">qui</a>';
$lang['tfa']['u2f'] = "Autenticazione U2F";
$lang['tfa']['hotp'] = "Autenticazione HOTP";
$lang['tfa']['totp'] = "Autenticazione TOTP";
$lang['tfa']['none'] = "Disattiva";
$lang['tfa']['delete_tfa'] = "Disabilita TFA";
$lang['tfa']['disable_tfa'] = "Disabilita TFA fino al prossimo accesso";
$lang['tfa']['confirm_tfa'] = "Conferma la password nel capo sottostante";
$lang['tfa']['confirm'] = "Conferma";
$lang['tfa']['otp'] = "Password provvisoria";
$lang['tfa']['totp'] = "Time-based OTP (Google Authenticator etc.)";
$lang['tfa']['trash_login'] = "Trash login";
$lang['tfa']['select'] = "Seleziona";
$lang['tfa']['waiting_usb_auth'] = "<i>Attendo il device USB...</i><br /><br />Tocca ora il pulsante sul dispositivo U2F USB.";
$lang['tfa']['waiting_usb_register'] = "<i>Attendo il device USB...</i><br /><br />Inserisci la tua password sopra e conferma la tua registrazione U2F toccando il pulsante del dispositivo U2F USB.";
$lang['tfa']['scan_qr_code'] = "Esegui la scansione del seguente codice con l'applicazione di autenticazione o inserisci manualmente il codice.";
$lang['tfa']['enter_qr_code'] = "Il codice TOTP se il tuo dispositivo non è in grado di acquisire i codici QR";
$lang['tfa']['confirm_totp_token'] = "Conferma le modifiche inserendo il token generato";

$lang['admin']['search_domain_da'] = 'Ricerca domini';
$lang['admin']['restrictions'] = 'Restrizioni Postfix';
$lang['admin']['rr'] = 'Restrizioni del destinatario di Postfix';
$lang['admin']['sr'] = 'Restrizioni del mittente di Postfix';
$lang['admin']['reset_defaults'] = 'Ripristina i valori di default';
$lang['admin']['sr'] = 'Restrizioni del mittente di Postfix';
$lang['admin']['r_inactive'] = 'Restrizioni inattive';
$lang['admin']['r_active'] = 'Restrizioni attive';
$lang['admin']['r_info'] = 'Gli elementi disabilitati nell\'elenco delle restrizioni attive non sono conosciute come restrizioni valide per la posta e non possono essere spostate. Le restrizioni sconosciute verranno comunque impostate in ordine di aspetto. <br />Puoi aggiungere nuovi elementi in <code>inc/vars.local.inc.php</code> per poterli attivare.';
$lang['admin']['public_folders'] = 'Cartelle pubbliche';
$lang['admin']['public_folders_text'] = 'Verrà creato uno spazio "Public". Di seguito il nome della cartella pubblica indica il nome della prima casella di posta automaticamente creata all\'interno di questo spazio.';
$lang['admin']['public_folder_name'] = 'Nome cartella <small>(alfanumerico)</small>';
$lang['admin']['public_folder_enable'] = 'Abilita cartella public';
$lang['admin']['public_folder_enable_text'] = 'Procedere con questa operazione, non eliminerà nessuna cartella pubblica.';
$lang['admin']['public_folder_pusf'] = 'Abilita flag per utente';
$lang['admin']['public_folder_pusf_text'] = 'Quando è abilitato il flag per utente, un messaggio non verrà contrassegnato come letto per l\'utente B, quando l\'utente A lo ha visto, ma l\'utente B non lo ha fatto.';
$lang['admin']['privacy'] = 'Privacy';
$lang['admin']['privacy_text'] = 'Questa opzione abilita una tabella per rimuovere "User-Agent", "X-Enigmail", "X-Mailer", "X-Originating-IP" e sostituisce "Ricevuta: da" con intestazione localhost/127.0.0.1.';
$lang['admin']['privacy_anon_mail'] = 'Rende anonima la posta in uscita';
$lang['admin']['dkim_txt_name'] = 'Nome TXT record:';
$lang['admin']['dkim_txt_value'] = 'Valore TXT record:';
$lang['admin']['dkim_key_length'] = 'DKIM key length (bits)';
$lang['admin']['dkim_key_valid'] = 'Key valida';
$lang['admin']['dkim_key_unused'] = 'Key non usata';
$lang['admin']['dkim_key_missing'] = 'Key mancante';
$lang['admin']['dkim_key_hint'] = 'Il selettore per chiave DKIM è sempre <code>dkim</code>.';
$lang['admin']['previous'] = 'Pagina precedente';
$lang['admin']['quota_mb'] = 'Spazio (MiB):';
$lang['admin']['sender_acl'] = 'Consenti di inviare come:';
$lang['admin']['msg_size'] = 'Dimensione del messaggio';
$lang['admin']['msg_size_limit'] = 'Limita la dimensione del messaggio';
$lang['admin']['msg_size_limit_details'] = 'Applicare un nuovo limite richiede il riavvio di Postfix e del webserver.';
$lang['admin']['save'] = 'Salva modifiche';
$lang['admin']['maintenance'] = 'Manutenzione e informazione';
$lang['admin']['sys_info'] = 'Informazioni di sistema';
$lang['admin']['dkim_add_key'] = 'Aggiungi chiave ARC/DKIM';
$lang['admin']['dkim_keys'] = 'chiave ARC/DKIM';
$lang['admin']['add'] = 'Aggiungi';
$lang['admin']['configuration'] = 'Configurazione';
$lang['admin']['password'] = 'Password';
$lang['admin']['password_repeat'] = 'Conferma password(ripeti)';
$lang['admin']['active'] = 'Attiva';
$lang['admin']['action'] = 'Azione';
$lang['admin']['add_domain_admin'] = 'Aggiungi amministratore di dominio';
$lang['admin']['admin_domains'] = 'Assengazioni di dominio';
$lang['admin']['domain_admins'] = 'Amministratori di dominio';
$lang['admin']['username'] = 'Username';
$lang['admin']['edit'] = 'Modifica';
$lang['admin']['remove'] = 'Rimuovi';
$lang['admin']['save'] = 'Salva modifiche';
$lang['admin']['admin'] = 'Amministratore';
$lang['admin']['admin_details'] = 'Modifica impostazioni amministratore';
$lang['admin']['unchanged_if_empty'] = 'Se immutato lasciare vuoto';
$lang['admin']['yes'] = '&#10004;';
$lang['admin']['no'] = '&#10008;';
$lang['admin']['access'] = 'Accedi';
$lang['admin']['invalid_max_msg_size'] = 'Valore non valido della massima dimensione del messaggio';
$lang['admin']['site_not_found'] = 'Impossibile torvare la configurazione di mailcow';
$lang['admin']['public_folder_empty'] = 'Il nome della cartella pubblica non può essere vuoto';
$lang['admin']['set_rr_failed'] = 'Impossibile impostare restrizioni Postfix';
$lang['admin']['no_record'] = 'Nessun risultato';
$lang['admin']['filter_table'] = 'Tabella filtro';
$lang['admin']['empty'] = 'Nessun risultato';
$lang['admin']['forwarding_hosts'] = 'Inoltro degli host';
$lang['admin']['forwarding_hosts_hint'] = 'I messaggi in entrata sono accettati in maniera incondizionata da tutti gli host elencati qui. Questi host sono quindi non controllati contro DNSBL o sottoposti a greylisting. Spam ricevuti da loro non viene mai rifiutata e sempre archiviata nella cartella Junk. L\'utilizzo più comune per questo è quello di specificare i server di posta elettronica su cui è stata impostata una regola che inoltra le email in arrivo al server mailcow.';
$lang['admin']['forwarding_hosts_add_hint'] = 'È possibile specificare indirizzi IPv4 / IPv6, reti nella notazione CIDR, nomi host (che verranno risolti in indirizzi IP) o nomi di dominio (che verranno risolti agli indirizzi IP richiamando i record SPF o, in assenza, i record MX) .';
$lang['edit']['host'] = 'Host';
$lang['edit']['source'] = 'Sorgente';
$lang['admin']['add_forwarding_host'] = 'Aggiungi host inoltro';
$lang['delete']['remove_forwardinghost_warning'] = '<b>Attenzione:</b> Stai per rimuovere l\'host di inoltro <b>%s</b>!';
$lang['success']['forwarding_host_removed'] = "Inoltro dell' host %s è stato rimosso";
$lang['success']['forwarding_host_added'] = "Inoltro dell' host %s è stato aggiunto";
?>
