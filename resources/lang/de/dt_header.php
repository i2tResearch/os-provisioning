<?php

return [
    // Index DataTable Header
    'active' => 'Aktiv',
    'amount' => 'Betrag',
    'buttons' => [
        'clearFilter' => 'Suchfilter leeren',
    ],
    'city' => 'Stadt',
    'connected' => 'Angeschlossen',
    'connection_type' => 'Anschlusstyp',
    'deprecated' => 'Veraltet',
    'district' => 'Ortsteil',
    'email' => 'Email',
    'expansion_degree' => 'Ausbaugrad',
    'floor' => 'Etage',
    'group_contract' => 'Gruppen-vertrag',
    'house_nr' => 'Hausnr',
    'iban' => 'IBAN',
    'id'            => 'ID',
    'name' => 'Name',
    'number' => 'Nummer',
    'occupied' => 'Bewohnt',
    'prio'          => 'Priorität',
    'street' => 'Straße',
    'sum' => 'Summe',
    'type' => 'Typ',
    'zip' => 'PLZ',
    'version' => 'Version',
    'apartment' => [
        'number' => 'Nummer',
        'connected' => 'Angeschlossen',
        'occupied' => 'Bewohnt',
    ],
    'contact' => [
        'administration' => 'Hausverwaltung',
    ],
    'contact_id' => 'Gruppenvertrag',
    'contract' => [
        'additional' => 'Zusatz',
        'apartment_nr' => 'Wohnungsnr',
        'city' => 'Stadt',
        'company' => 'Firma',
        'contact' => 'Ansprechpartner',
        'contract_end' => 'Vertrags- Ende',
        'contract_start' => 'Vertrags- Beginn',
        'district' => 'Bezirk',
        'firstname' => 'Vorname',
        'house_number' => 'Hausnr',
        'id' => 'Vertrag',
        'lastname' => 'Nachname',
        'number' => 'Vertrags- Nummer',
        'street' => 'Straße',
        'zip' => 'PLZ',
        'ground_for_dismissal' => 'Kündigungsgrund',
    ],
    // Auth
    'users' => [
        'login_name' => 'Loginname',
        'first_name' => 'Vorname',
        'last_name' => 'Nachname',
        'geopos_updated_at' => 'Letztes Geopos-Update',
    ],
    'roles.title' => 'Name',
    'roles.rank' => 'Rang',
    'roles.description' => 'Beschreibung',
    // GuiLog
    'guilog' => [
        'created_at' => 'Zeitpunkt',
        'username' => 'Nutzer',
        'method' => 'Aktion',
        'model' => 'Tabelle',
        'model_id' => 'ID',
        'text' => 'Änderungen',
    ],
    // Company
    'company.name' => 'Unternehmen',
    'company.city' => 'Stadt',
    'company.phone' => 'Telefonnummer',
    'company.mail' => 'E-Mail',
    // Costcenter
    'costcenter' => [
        'name' => 'Kostenstelle',
        'number' => 'Nummer',
        'billing_month' => 'Abrechnungsmonat',
    ],
    'debt' => [
        'bank_fee' => 'Bankgebühr',
        'extra_fee' => 'Zusatzgebühr',
        'date' => 'Belegdatum',
        'due_date' => 'Fälligkeitsdatum',
        'indicator' => 'Mahnkennzeichen',
        'missing_amount' => 'Ausstand',
        'number' => 'OP-Nummer',
        'voucher_nr' => 'Belegnr',
    ],
    //Invoices
    'invoice.type' => 'Typ',
    'invoice.year' => 'Jahr',
    'invoice.month' => 'Monat',
    //Item
    'item.valid_from' => 'Posten Gültig ab',
    'item.valid_from_fixed' => 'Ab Startdatum aktiv',
    'item.valid_to' => 'Posten Gültig bis',
    'item.valid_to_fixed' => 'Festes Enddatum',
    'fee' => 'Gebühr',
    'product' => [
        'proportional' => 'Anteilig',
        'type' => 'Typ',
        'name' => 'Produkt',
        'price' => 'Preis',
    ],
    // Salesman
    'salesman.id' => 'ID',
    'salesman_id' 		=> 'Verkäufer-ID',
    'salesman_firstname' => 'Vorname',
    'salesman_lastname' => 'Nachname',
    'commission in %' 	=> 'Provision in %',
    'contract_nr' 		=> 'Kundennr',
    'contract_name' 	=> 'Kunde',
    'contract_start' 	=> 'Vertragsbeginn',
    'contract_end' 		=> 'Vertragsende',
    'product_name' 		=> 'Produkt',
    'product_type' 		=> 'Produkttyp',
    'product_count' 	=> 'Anzahl',
    'charge' 			=> 'Gebühr',
    'salesman.lastname' => 'Nachname',
    'salesman.firstname' => 'Vorname',
    'salesman_commission' => 'Provision',
    'sepaaccount_id' 	=> 'SEPA-Konto',
    'sepaaccount' => [
        'iban' => 'IBAN',
        'institute' => 'Bank',
        'name' => 'Kontoname',
        'template_invoice' => 'Rechnungsvorlage',
    ],
    // SepaMandate
    'sepamandate.holder' => 'Kontoinhaber',
    'sepamandate.valid_from' => 'Gültig ab',
    'sepamandate.valid_to' => 'Gültig bis',
    'sepamandate.reference' => 'Mandatsreferenz',
    'sepamandate.disable' => 'Deaktiviert',
    // SettlementRun
    'settlementrun.year' => 'Jahr',
    'settlementrun.month' => 'Monat',
    'settlementrun.created_at' => 'Erstellt am',
    'settlementrun.executed_at' => 'Durchgeführt am',
    'verified' => 'Überprüft?',
    // MPR
    'mpr.name' => 'Name',
    'mpr.id'    => 'ID',
    // NetElement
    'netelement' => [
        'id' => 'ID',
        'name' => 'Netzelement',
        'ip' => 'IP Adresse',
        'state' => 'Status',
        'lat' => 'Breitengrad',
        'lng' => 'Längengrad',
        'options' => 'Optionen',
        'kml_file' => 'KML Datei',
    ],
    // NetElementType
    'netelementtype.name' => 'Netzelementtyp',
    //HfcSnmp
    'parameter.oid.name' => 'OID Bezeichnung',
    //Mibfile
    'mibfile.id' => 'ID',
    'mibfile.name' => 'Mibfilename',
    'mibfile.version' => 'Version',
    // OID
    'oid.name_gui' => 'GUI Beschriftung',
    'oid.name' => 'OID Bezeichnung',
    'oid.oid' => 'OID',
    'oid.access' => 'Schreibschutz',
    //SnmpValue
    'snmpvalue.oid_index' => 'OID Index',
    'snmpvalue.value' => 'OID Wert',
    // MAIL
    'email.localpart' => 'Lokalteil',
    'email.index' => 'Primäre E-Mail Adresse',
    'email.greylisting' => 'Greylisting Aktiv?',
    'email.blacklisting' => 'E-Mail auf Blacklist?',
    'email.forwardto' => 'Weiterleiten an:',
    'contact.firstname1' => 'Vorname 1',
    'lastname1' => 'Nachname 1',
    'firstname2' => 'Vorname 2',
    'lastname2' => 'Nachname 2',
    'tel' => 'Telefonnummer',
    'tel_private' => 'Telefonnummer privat',
    'email1' => 'E-Mail 1',
    'email2' => 'E-Mail 2',
    // NetGw
    'netgw.id' => 'ID',
    'netgw.hostname' => 'Name',
    'netgw.ip' => 'IP',
    'netgw.company' => 'Hersteller',
    'netgw.series' => 'Serie',
    'netgw.formatted_support_state' => 'Unterstützungszustand',
    'netgw.support_state' => 'Unterstützungszustand',
    // Contract
    'company' => 'Firma',
    // Domain
    'domain.name' => 'Domäne',
    'domain.type' => 'Typ',
    'domain.alias' => 'Alias',
    // Endpoint
    'endpoint.ip' => 'IP',
    'endpoint.hostname' => 'Server-Name',
    'endpoint.mac' => 'MAC',
    'endpoint.description' => 'Beschreibung',
    // IpPool
    'ippool.id' => 'ID',
    'ippool.type' => 'Typ',
    'ippool.net' => 'Netz',
    'ippool.netmask' => 'Netzmaske',
    'ippool.router_ip' => 'Router IP',
    'ippool.description' => 'Beschreibung',
    'link' => [
        'fromNetelement' => [
            'name' => 'Von',
            'id' => 'Von Netzelement ID',
        ],
        'if1' => 'Von Interface',
        'if2' => 'Zu Interface',
        'toNetelement' => [
            'name' => 'Zu',
            'id' => 'Zu Netzelement ID',
        ],
    ],
    // Modem
    'modem.city' => 'Stadt',
    'modem.district' => 'Bezirk',
    'modem.firstname' => 'Vorname',
    'modem.geocode_source' => 'Geocode-Quelle',
    'modem.house_number' => 'Hausnr',
    'modem.apartment_nr' => 'Wohnungsnr',
    'modem.id' => 'Modem',
    'modem.inventar_num' => 'Inventar-Nr',
    'modem.lastname' => 'Nachname',
    'modem.mac' => 'MAC Adresse',
    'modem.serial_num' => 'Seriennummer / CWMP-ID',
    'modem.model' => 'Modell',
    'modem.name' => 'Modemname',
    'modem.street' => 'Straße',
    'modem.sw_rev' => 'Firmware-Version',
    'modem.ppp_username' => 'PPP Nutzername',
    'modem.us_pwr' => 'US Pegel / dBmV',
    'modem.us_snr' => 'US SNR / dB',
    'modem.ds_pwr' => 'DS Pegel / dBmV',
    'modem.ds_snr' => 'DS SNR / dB',
    'modem.phy_updated_at' => 'PHY aktualisiert am',
    'modem.support_state' => 'Unterstützungszustand',
    'modem.formatted_support_state' => 'Unterstützungszustand',
    'modem.last_inform' => 'Letzter Inform',
    'contract_valid' => 'Vertrag gültig?',
    // Modem option
    'modem_option' => [
        'key' => 'Option',
        'value' => 'Wert',
    ],
    // Node
    'node' => [
        'name' => 'Name',
        'headend' => 'Kopfstelle',
        'type' => 'Signalart',
    ],
    // QoS
    'qos.name' => 'QoS Name',
    'qos.ds_rate_max' => 'Maximale DS Geschwindigkeit',
    'qos.us_rate_max' => 'Maximale US Geschwindigkeit',
    // Mta
    'mta.hostname' => 'Hostname',
    'mta.mac' => 'MAC-Adresse',
    'mta.type' => 'Provisionierungstyp',
    // Configfile
    'configfile.name' => 'Konfigurationsdatei',
    // PhonebookEntry
    'phonebookentry.id' => 'ID',
    // Phonenumber
    'phonenumber.prefix_number' => 'Vorwahl',
    'phonenr_act' => 'Aktivierungsdatum',
    'phonenr_deact' => 'Deaktivierungsdatum',
    'phonenr_state' => 'Status',
    'modem_city' => 'Modem-Ort',
    'sipdomain' => 'Registrar',
    // Phonenumbermanagement
    'phonenumbermanagement.id' => 'ID',
    'phonenumbermanagement.activation_date' => 'Aktivierungsdatum',
    'phonenumbermanagement.deactivation_date' => 'Deaktivierungsdatum',
    'phonetariff' => [
        'name' => 'Telefontarif',
        'type' => 'Typ',
        'description' => 'Beschreibung',
        'external_identifier' => 'Externe ID',
        'voip_protocol' => 'VOIP Protokoll',
        'usable' => 'Verfügbar',
    ],
    // ENVIA enviaorder
    'enviaorder.ordertype'  => 'Bestelltyp',
    'enviaorder.orderstatus'  => 'Bestellstatus',
    'escalation_level' => 'Statuslevel',
    'enviaorder.created_at'  => 'Erstellt am',
    'enviaorder.updated_at'  => 'Bearbeitet am',
    'enviaorder.orderdate'  => 'Bestelldatum',
    'enviaorder_current'  => 'Bearbeitung notwendig?',
    'enviaorder.contract.number' => 'Vertrag',
    'enviaorder.modem.id' => 'Modem',
    'phonenumber.number' => 'Rufnummer',
    //ENVIA Contract
    'enviacontract.contract.number' => 'Vertrag',
    'enviacontract.end_date' => 'Enddatum',
    'enviacontract.envia_contract_reference' => 'envia-TEL-Vertragsreferenz',
    'enviacontract.modem.id' => 'Modem',
    'enviacontract.start_date' => 'Anfangsdatum',
    'enviacontract.state' => 'Status',
    // CDR
    'cdr.calldate' => 'Anrufzeitpunkt',
    'cdr.caller' => 'Anrufer',
    'cdr.called' => 'Angerufener',
    'cdr.mos_min_mult10' => 'minimaler MOS',
    // Numberrange
    'numberrange.id' => 'ID',
    'numberrange.name' => 'Name',
    'numberrange.start' => 'Start',
    'numberrange.end' => 'Ende',
    'numberrange.prefix' => 'Präfix',
    'numberrange.suffix' => 'Suffix',
    'numberrange.type' => 'Typ',
    'numberrange.costcenter.name' => 'Kostenstelle',
    'realty' => [
        'administration' => 'Hausverwaltung',
        'agreement_from' => 'Gültig von',
        'agreement_to' => 'Gültig bis',
        'apartmentCount' => 'Wohnungen gesamt',
        'apartmentCountConnected' => 'Wohnungen angeschlossen',
        'city' => 'Stadt',
        'concession_agreement' => 'Gestattungs-vertrag',
        'contact_id' => 'Hausverwaltung',
        'contact_local_id' => 'Lokaler Kontakt',
        'district' => 'Ortsteil',
        'house_nr' => 'Hausnr',
        'last_restoration_on' => 'Letzte Restaurierung / Sanierung',
        'name' => 'Name',
        'street' => 'Straße',
        'zip' => 'PLZ',
    ],
    'alarm' => [
        'action' => 'Aktion',
        'agent_host' => 'Agent Host',
        'alertname' => 'Name',
        'fw' => 'Firmware',
        'host' => 'Host',
        'instance' => 'Instanz',
        'job' => 'Job',
        'severity' => 'Priorität',
        'startsAt' => 'Von',
        'endsAt' => 'Bis',
        'generatorURL' => 'URL',
    ],
    'arp' => [
        'interface' => 'Interface',
        'ip' => 'IP',
        'name' => 'Name',
        'mac' => 'MAC',
        'type' => 'Typ',
    ],
    'cpe' => [
        'cable_if' => 'Kabel Interface',
        'ccap_core' => 'CCAP Core',
        'core_ipv6' => 'Core IPv6',
        'device_class' => 'Geräte Klasse',
        'ds_data_service_grp' => 'DS Data Service Gruppe',
        'fiber_node_sys_id' => 'Fiber Node System ID',
        'fiber_node_sys_name' => 'Fiber Node System Name',
        'last_mac_state' => 'Mac Status',
        'last_reg_time' => 'Last Reg Time',
        'mac' => 'Mac',
        'manufacturer_name' => 'Hersteller',
        'ip' => 'IPv4 Adresse',
        'prim_sid' => 'Primäre SID',
        'reg_priv' => 'Registrierungsprivileg',
        'reg_ver' => 'Registrierungsversion',
        'status' => 'Status',
        'us_data_service_grp' => 'US Data Service Gruppe',
    ],
    'dpic' => [
        'name' => 'Name',
        'admin_status' => 'Admin Status',
        'operational_status' => 'Betriebszustand',
        'in_bitrate' => 'In Bitrate',
        'out_bitrate' => 'Out Bitrate',
    ],
    'inventory' => [
        'name' => 'Name',
        'pid' => 'PID',
        'manufacturer' => 'Hersteller',
        'serial_nr' => 'Seriennummer',
        'part_nr' => 'Teilenummer',
        'ports' => 'Ports',
        'status' => 'Status',
        'inserted' => 'Eingesetzt In',
        'description' => 'Beschreibung',
    ],
    'l2tp' => [
        'tunnel_id' => 'Tunnel ID',
        'remote_tunnel_id' => 'Remote Tunnel ID',
        'ip_version' => 'IP Version',
        'ip' => 'IP',
        'remote_ip' => 'Remote IP',
        'error_code' => 'Fehlercode',
    ],
    'rpd' => [
        'additional_cores' => 'Zusätzliche Cores',
        'aux_status' => 'Aux Status',
        'bc_vid_cont_profile' => 'BC Video Controller Profile',
        'bc_vid_cont' => 'BC Video Controller',
        'bc_vid_depi' => 'BC Video DEPI',
        'bc_vid_if' => 'BC Video Interface',
        'bc_vid_oob_if' => 'BC Video OOB Interface',
        'bc_vid_service_grp' => 'BC Video Service Gruppe',
        'cable_if' => 'Kabel Interface',
        'ccap_if' => 'CCAP Core Interface',
        'ccap_name' => 'CCAP Core Name',
        'cin_rpa' => 'CIN Aggregator RPA',
        'cin_dpa' => 'CIN Aggregator DPA',
        'cm_no' => 'Anzahl Kabelmodems',
        'cm_no_service_group' => 'Anzahl Pro Service Group',
        'cm_off_no' => 'Anzahl Offline Kabelmodems',
        'dpa' => 'DPA',
        'ds_data_cont_profile' => 'DS Daten Controller Profile',
        'ds_data_cont' => 'DS Daten Controller',
        'ds_data_depi' => 'DS Daten DEPI',
        'ds_data_service_grp' => 'DS Daten Service Gruppe',
        'fiber_node_name' => 'Fiber Node Name',
        'hubsite_name' => 'Hub Name',
        'mac' => 'RPD System Mac',
        'name' => 'RPD System Name',
        'nc_vid_cont_profile' => 'NC Video Controller Profile',
        'nc_vid_cont' => 'NC Video Controller',
        'nc_vid_depi' => 'NC Video DEPI',
        'nc_vid_if' => 'NC Video Interface',
        'nc_vid_oob_if' => 'NC Video OOB Interface',
        'nc_vid_service_grp' => 'NC Video Service Gruppe',
        'rpa1' => 'RPA1',
        'rpa2' => 'RPA2',
        'status' => 'Status',
        'service_template' => 'Service Template',
        'us_data_cont_profile' => 'US Daten Controller Profile',
        'us_data_cont' => 'US Daten Controller',
        'us_data_depi' => 'US Daten DEPI',
        'us_data_service_grp' => 'US Daten Service Gruppe',
        'util_ds_ofdm' => 'DOCSIS DS OFDM',
        'util_ds_qam' => 'DOCSIS DS QAM',
        'util_us_ofdm' => 'DOCSIS US OFDM',
        'util_us_qam' => 'DOCSIS US QAM',
    ],
    'utilization' => [
        'ccap_name' => 'CCAP Core Name',
        'fn_name' => 'FN Name',
        'hub_name' => 'HUB Name',
        'lable_if' => 'Lable Interface',
        'market_name' => 'Market Name',
        'name_idx' => 'Name IDX',
        'rpd_no' => 'Anzahl RPD',
    ],
    // NAS
    'nas' => [
        'nasname' => 'Name',
    ],
    'state' => 'Status',
    'ticket' => [
        'id' => 'ID',
        'name' => 'Titel',
        'type' => 'Typ',
        'priority' => 'Priorität',
        'state' => 'Status',
        'user_id' => 'Erstellt von',
        'created_at' => 'Erstellt am',
        'assigned_users' => 'Bearbeiter',
        'ticketable_id' => 'id',
        'ticketable_type' => 'Typ',
    ],
    'assigned_users' => 'Bearbeiter',
    'tickettypes.name' => 'Typ',
    'total_fee' => 'Gebühren',
];
