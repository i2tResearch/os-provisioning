<?php

return [
    // Index DataTable Header
    'active' => 'Active',
    'amount' => 'Amount',
    'buttons' => [
        'clearFilter' => 'Clear Search Filter',
    ],
    'ccap' => 'CCAP',
    'city' => 'City',
    'lastUpdatedAt' => 'Last change',
    'connected' => 'Connected',
    'connection_type' => 'Connection type',
    'deprecated' => 'Deprecated',
    'description' => 'Description',
    'district' => 'District',
    'docsisVer' => 'DOCSIS version',
    'download' => 'Download',
    'dpa' => 'DPA',
    'email' => 'Email',
    'expansion_degree' => 'Expansion degree',
    'fiber_node' => 'Fiber node',
    'floor' => 'Floor',
    'group_contract' => 'Group contract',
    'house_nr' => 'Housenr',
    'iban' => 'IBAN',
    'id'            => 'ID',
    'mac' => 'MAC',
    'name' => 'Name',
    'number' => 'Number',
    'occupied' => 'Occupied',
    'prio'          => 'Priority',
    'street' => 'Street',
    'sum' => 'Sum',
    'type' => 'Type',
    'zip' => 'ZIP',
    'version' => 'Version',
    'to_disconnect' => 'To disconnect',
    'apartment' => [
        'number' => 'Number',
        'connected' => 'Connected',
        'occupied' => 'Occupied',
        'code' => 'Code',
    ],
    'contact' => [
        'administration' => 'Administration',
    ],
    'contact_id' => 'Group contract',
    'contract' => [
        'additional' => 'Additional info',
        'apartment_nr' => 'Apartmentnr',
        'city' => 'City',
        'company' => 'Company',
        'contact' => 'Contact',
        'contract_end' => 'Contract End',
        'contract_start' => 'Contract Start',
        'district' => 'District',
        'firstname' => 'Firstname',
        'house_number' => 'Housenr',
        'id' => 'Contract',
        'lastname' => 'Surname',
        'number' => 'Contract Number',
        'street' => 'Street',
        'zip' => 'ZIP',
        'ground_for_dismissal' => 'Ground for dismissal',
    ],
    'contract_id' => 'Contract',
    // Auth
    'users' => [
        'login_name' => 'Login Name',
        'first_name' => 'Given Name',
        'last_name' => 'Family Name',
        'geopos_updated_at' => 'Last geopos update',
    ],
    'roles.title' => 'Name',
    'roles.rank' => 'Rank',
    'roles.description' => 'Description',
    // GuiLog
    'guilog' => [
        'created_at' => 'Time',
        'username' => 'User',
        'method' => 'Action',
        'model' => 'Model',
        'model_id' => 'Model ID',
        'text' => 'Changes',
    ],
    // Company
    'company.name' => 'Company Name',
    'company.city' => 'City',
    'company.phone' => 'Mobile Number',
    'company.mail' => 'E-Mail',
    // Costcenter
    'costcenter' => [
        'name' => 'CostCenter',
        'number' => 'Number',
        'billing_month' => 'Billing month',
    ],
    'debt' => [
        'bank_fee' => 'Bank fee',
        'date' => 'Date',
        'due_date' => 'Due date',
        'extra_fee' => 'Extra fee',
        'indicator' => 'Dunning indicator',
        'missing_amount' => 'Missing amount',
        'number' => 'debt number',
        'voucher_nr' => 'Voucher nr',
    ],
    'debts' => 'Debts',
    //Invoices
    'invoice.type' => 'Type',
    'invoice.year' => 'Year',
    'invoice.month' => 'Month',
    //Item
    'item.valid_from' => 'Item Valid from',
    'item.valid_from_fixed' => 'Item Valid from fixed',
    'item.valid_to' => 'Item Valid to',
    'item.valid_to_fixed' => 'Item Valid to fixed',
    'fee' => 'Fee',
    'product' => [
        'proportional' => 'Proportionate',
        'type' => 'Type',
        'name' => 'Product Name',
        'price' => 'Price',
    ],
    // Salesman
    'salesman.id' => 'ID',
    'salesman_id' 		=> 'Salesman-ID',
    'salesman_firstname' => 'Firstname',
    'salesman_lastname' => 'Lastname',
    'commission in %' 	=> 'Commission in %',
    'contract_nr' 		=> 'Contractnr',
    'contract_name' 	=> 'Customer',
    'contract_start' 	=> 'Contract start',
    'contract_end' 		=> 'Contract end',
    'product_name' 		=> 'Product',
    'product_type' 		=> 'Product type',
    'product_count' 	=> 'Count',
    'charge' 			=> 'Charge',
    'salesman.lastname' => 'Lastname',
    'salesman.firstname' => 'Firstname',
    'salesman_commission' => 'Commission',
    'sepaaccount_id' 	=> 'SEPA-account',
    'sepaaccount' => [
        'iban' => 'IBAN',
        'institute' => 'Institute',
        'name' => 'Account Name',
        'template_invoice' => 'Invoice template',
    ],
    // SepaMandate
    'sepamandate.holder' => 'Account Holder',
    'sepamandate.valid_from' => 'Valid from',
    'sepamandate.valid_to' => 'Valid to',
    'sepamandate.reference' => 'Account reference',
    'sepamandate.disable' => 'Disabled',
    // SettlementRun
    'settlementrun.year' => 'Year',
    'settlementrun.month' => 'Month',
    'settlementrun.created_at' => 'Created at',
    'settlementrun.executed_at' => 'Executed at',
    'verified' => 'Verified?',
    // MPR
    'mpr.name' => 'Name',
    'mpr.id'    => 'ID',
    // NetElement
    'netelement' => [
        'id' => 'ID',
        'name' => 'Netelement',
        'ip' => 'IP Adress',
        'state' => 'State',
        'lat' => 'Latitude',
        'lng' => 'Longitude',
        'options' => 'Options',
        'kml_file' => 'KML File',
    ],
    'netelement_interface' => [
        'if_index' => 'Index',
        'admin_status' => 'Admin Status',
        'operational_status' => 'Operational Status',
        'total_bw' => 'Total Bandwidth /s',
        'inbound_rate' => 'Inbound Rate /s',
        'outbound_rate' => 'Outbound Rate /s',
        'inbound_util' => 'Inbound Utilization %',
        'outbound_util' => 'Outbound Utilization %',
        'total_util' => 'Total Util %',
        'inbound_error_ratio' => 'Inbound Error Ratio %',
        'outbound_error_ratio' => 'Outbound Error Ratio %',
        'total_error_ratio' => 'Total Error Ratio %',
        'inbound_frame_rate' => 'Inbound Frame Rate',
        'outbound_frame_rate' => 'Outbound Frame Rate',
        'inbound_unicast_rate' => 'Inbound Unicast Rate',
        'outbound_unicast_rate' => 'Outbound Unicast Rate',
        'inbound_unicast_frame_rate' => 'Inbound Unicast Frame Rate',
        'outbound_unicast_frame_rate' => 'Outbound Unicast Frame Rate',
        'inbound_multicast_rate' => 'Inbound Multicast Rate',
        'outbound_multicast_rate' => 'Outbound Multicast Rate',
        'inbound_multicast_frame_rate' => 'Inbound Multicast Frame Rate',
        'outbound_multicast_frame_rate' => 'Outbound Multicast Frame Rate',
        'inbound_broadcast_rate' => 'Inbound Broadcast Rate',
        'outbound_broadcast_rate' => 'Outbound Broadcast Rate',
        'inbound_broadcast_frame_rate' => 'Inbound Broadcast Frame Rate',
        'outbound_broadcast_frame_rate' => 'Outbound Broadcast Frame Rate',
        'inbound_discard_rate' => 'Inbound Discard Rate',
        'outbound_discard_rate' => 'Outbound Discard Rate',
        'name' => 'Local Interface Description',
        'prev_inbound_counter' => 'Inbound Octets',
        'prev_outbound_counter' => 'Outbound Octets',
        'prev_inbound_frame_counter' => 'Inbound Frames',
        'prev_outbound_frame_counter' => 'Outbound Frames',
        'prev_inbound_unicast_counter' => 'Inbound Unicast Octets',
        'prev_outbound_unicast_counter' => 'Outbound Unicast Octets',
        'prev_inbound_unicast_frame_counter' => 'Inbound Unicast Frames',
        'prev_outbound_unicast_frame_counter' => 'Outbound Unicast Frames',
        'prev_inbound_multicast_counter' => 'Inbound Multicast Octets',
        'prev_outbound_multicast_counter' => 'Outbound Multicast Octets',
        'prev_inbound_multicast_frame_counter' => 'Inbound Multicast Frames',
        'prev_outbound_multicast_frame_counter' => 'Outbound Multicast Frames',
        'prev_inbound_broadcast_counter' => 'Inbound Broadcast Octets',
        'prev_outbound_broadcast_counter' => 'Outbound Broadcast Octets',
        'prev_inbound_broadcast_frame_counter' => 'Inbound Broadcast Frames',
        'prev_outbound_broadcast_frame_counter' => 'Outbound Broadcast Frames',
        'prev_inbound_discard_counter' => 'Inbound Discards',
        'prev_outbound_discard_counter' => 'Outbound Discards',
    ],
    // NetElementType
    'netelementtype.name' => 'Netelementtype',
    //HfcSnmp
    'parameter.oid.name' => 'OID Name',
    //Mibfile
    'mibfile.id' => 'ID',
    'mibfile.name' => 'Mibfile',
    'mibfile.version' => 'Version',
    // OID
    'oid.name_gui' => 'GUI Label',
    'oid.name' => 'OID Name',
    'oid.oid' => 'OID',
    'oid.access' => 'Access Type',
    //SnmpValue
    'snmpvalue.oid_index' => 'OID Index',
    'snmpvalue.value' => 'OID Value',
    // MAIL
    'email.localpart' => 'Local Part',
    'email.index' => 'Primary E-Mail?',
    'email.greylisting' => 'Greylisting active?',
    'email.blacklisting' => 'On Blacklist?',
    'email.forwardto' => 'Forward to:',
    'contact.firstname1' => 'Firstname 1',
    'lastname1' => 'Lastname 1',
    'firstname2' => 'Firstname 2',
    'lastname2' => 'Lastname 2',
    'tel' => 'Phonenumber',
    'tel_private' => 'Phonenumber private',
    'email1' => 'E-Mail 1',
    'email2' => 'E-Mail 2',
    // NetGw
    'netgw.id' => 'ID',
    'netgw.hostname' => 'Hostname',
    'netgw.ip' => 'IP',
    'netgw.company' => 'Manufacturer',
    'netgw.series' => 'Series',
    'netgw.formatted_support_state' => 'Support State',
    'netgw.support_state' => 'Support State',
    // Contract
    'company' => 'Company',
    // Domain
    'domain.name' => 'Domain',
    'domain.type' => 'Type',
    'domain.alias' => 'Alias',
    // Endpoint
    'endpoint' => [
        'ip' => 'IP',
        'hostname' => 'Hostname',
        'mac' => 'MAC',
        'prefix' => 'Prefix',
    ],
    // IpPool
    'ippool.id' => 'ID',
    'ippool.type' => 'Type',
    'ippool.net' => 'Net',
    'ippool.netmask' => 'Netmask',
    'ippool.router_ip' => 'Router IP',
    'ippool.description' => 'Description',
    'link' => [
        'fromNetelement' => [
            'name' => 'From',
            'id' => 'From netelement ID',
        ],
        'if1' => 'From Interface',
        'if2' => 'To Interface',
        'toNetelement' => [
            'name' => 'To',
            'id' => 'To netelement ID',
        ],
    ],
    // Modem
    'modem.city' => 'City',
    'modem.district' => 'District',
    'modem.firstname' => 'First name',
    'modem.geocode_source' => 'Geocode origin',
    'modem.house_number' => 'Housenr',
    'modem.apartment_nr' => 'Apartmentnr',
    'modem.id' => 'Modem',
    'modem.inventar_num' => 'Serial Nr',
    'modem.lastname' => 'Surname',
    'modem.mac' => 'MAC Address',
    'modem.serial_num' => 'Serial Number / CWMP-ID',
    'modem.model' => 'Model',
    'modem.name' => 'Modem Name',
    'modem.street' => 'Street',
    'modem.sw_rev' => 'Firmware Version',
    'modem.ppp_username' => 'PPP Username',
    'modem.us_pwr' => 'US level / dBmV',
    'modem.us_snr' => 'US SNR / dB',
    'modem.ds_pwr' => 'DS level / dBmV',
    'modem.ds_snr' => 'DS SNR / dB',
    'modem.phy_updated_at' => 'PHY updated at',
    'modem.support_state' => 'Suport State',
    'modem.formatted_support_state' => 'Support State',
    'modem.last_inform' => 'Last Inform',
    'contract_valid' => 'Contract valid?',
    // Modem option
    'modem_option' => [
        'key' => 'Option',
        'value' => 'Value',
    ],
    'ncs' => 'NCS',
    // Node
    'node' => [
        'name' => 'Name',
        'headend' => 'Headend',
        'type' => 'Type of signal',
    ],
    // QoS
    'qos.name' => 'QoS Name',
    'qos.ds_rate_max' => 'Maximum DS Speed',
    'qos.us_rate_max' => 'Maximum US Speed',
    // Mta
    'mta.hostname' => 'Hostname',
    'mta.mac' => 'MAC-Adress',
    'mta.type' => 'VOIP Protocol',
    // Configfile
    'configfile.name' => 'Configfile',
    // PhonebookEntry
    'phonebookentry.id' => 'ID',
    // Phonenumber
    'phonenumber.prefix_number' => 'Prefix',
    'phonenr_act' => 'Activation date',
    'phonenr_deact' => 'Deactivation date',
    'phonenr_state' => 'Status',
    'modem_city' => 'Modem city',
    'sipdomain' => 'Registrar',
    // Phonenumbermanagement
    'phonenumbermanagement.id' => 'ID',
    'phonenumbermanagement.activation_date' => 'Activation date',
    'phonenumbermanagement.deactivation_date' => 'Deactivation date',
    'phonetariff' => [
        'name' => 'Phone Tariff',
        'type' => 'Type',
        'description' => 'Description',
        'external_identifier' => 'External Identifier',
        'voip_protocol' => 'VOIP Protocol',
        'usable' => 'Usable',
    ],
    // ENVIA enviaorder
    'enviaorder.ordertype'  => 'Order Type',
    'enviaorder.orderstatus'  => 'Order Status',
    'escalation_level' => 'Escalation Level',
    'enviaorder.created_at'  => 'Created at',
    'enviaorder.updated_at'  => 'Updated at',
    'enviaorder.orderdate'  => 'Order date',
    'enviaorder_current'  => 'Action needed?',
    'enviaorder.contract.number' => 'Contract',
    'enviaorder.modem.id' => 'Modem',
    'phonenumber.number' => 'Phonenumber',
    //ENVIA Contract
    'enviacontract.contract.number' => 'Contract',
    'enviacontract.end_date' => 'End Date',
    'enviacontract.envia_contract_reference' => 'envia TEL contract reference',
    'enviacontract.modem.id' => 'Modem',
    'enviacontract.start_date' => 'Start Date',
    'enviacontract.state' => 'Status',
    // CDR
    'cdr.calldate' => 'Call Date',
    'cdr.caller' => 'Caller',
    'cdr.called' => 'Called',
    'cdr.mos_min_mult10' => 'Minimum MOS',
    // Numberrange
    'numberrange.id' => 'ID',
    'numberrange.name' => 'Name',
    'numberrange.start' => 'Start',
    'numberrange.end' => 'End',
    'numberrange.prefix' => 'Prefix',
    'numberrange.suffix' => 'Suffix',
    'numberrange.type' => 'Type',
    'numberrange.costcenter.name' => 'Cost center',
    'realty' => [
        'administration' => 'Administration',
        'agreement_from' => 'Valid from',
        'agreement_to' => 'Valid to',
        'apartmentCount' => 'Total apartments',
        'apartmentCountConnected' => 'Connected apartments',
        'city' => 'City',
        'concession_agreement' => 'Concession agreement',
        'contact_id' => 'Administration',
        'contact_local_id' => 'Local contact',
        'district' => 'District',
        'house_nr' => 'House nr',
        'last_restoration_on' => 'Last restoration',
        'name' => 'Name',
        'street' => 'Street',
        'zip' => 'ZIP',
        'link' => 'Realty',
    ],
    'alarm' => [
        'action' => 'Action',
        'agent_host' => 'Agent Host',
        'alertname' => 'Name',
        'fw' => 'Firmware',
        'host' => 'Host',
        'instance' => 'Instance',
        'job' => 'Job',
        'severity' => 'Severity',
        'startsAt' => 'Starts At',
        'endsAt' => 'Ends At',
        'generatorURL' => 'Generator URL',
    ],
    'arp' => [
        'interface' => 'Interface',
        'ip' => 'IP',
        'mac' => 'MAC',
        'name' => 'Name',
        'type' => 'Type',
    ],
    'cpe' => [
        'cable_if' => 'Cable Interface',
        'ccap_core' => 'CCAP Core Name',
        'core_ipv6' => "CM Core's Core IPv6",
        'device_class' => 'Device Class',
        'ds_data_service_grp' => 'DS Data Service Group',
        'fiber_node_sys_id' => 'Fiber Node System ID',
        'fiber_node_sys_name' => 'Fiber Node System Name',
        'last_mac_state' => 'Mac State',
        'last_reg_time' => 'Last Reg Time',
        'manufacturer_name' => 'Manufacturer Name',
        'prim_sid' => 'Primary SID',
        'reg_priv' => 'Registration Privilege type',
        'reg_ver' => 'Registration Ver',
        'us_data_service_grp' => 'US Data Service Group',
        'vendor' => [
            'cpes' => '# CPEs',
            'cpesOnline' => '# CPEs online',
            'cpesOffline' => '# CPEs offline',
            'cpesOfflinePct' => '% CPE offline',
            'mtas' => '# MTAs online',
            'mtasOfflinePct' => '% MTAs offline',
            'stbs' => '# STBs online',
            'stbsOfflinePct' => '% STBs offline',
        ],
    ],
    'interface' => [
        'name' => 'Name',
        'admin_status' => 'Admin Status',
        'operational_status' => 'Operational Status',
        'in_bitrate' => 'In Bitrate',
        'out_bitrate' => 'Out Bitrate',
    ],
    'dpicCard' => [
        'sys_name' => 'System Name',
        'description' => 'Description',
        'uptime' => 'Uptime',
        'bandwidth' => 'Bandwidth',
        'utilization' => 'Utilization',
        'laststatechange' => 'Status Last Change',
    ],
    'netElementInterface' => [
        'name' => 'Interface Name',
        'ip' => 'IP Address',
        'admin_status' => 'Admin Status',
        'operational_status' => 'Operational Status',
    ],
    'lldp' => [
        'local_interface_description' => 'Local Interface Description',
        'remote_interface_description' => 'Remote Interface Description',
        'remote_system_name' => 'Remote System Name',
        'remote_system_description' => 'Remote System Description',
    ],
    'fiberNode' => [
        'cable_interface' => 'Cable Interface',
        'cpes' => '# CPEs',
        'cpesOffline' => '% CPEs offline',
        'id' => 'Fiber Node ID',
        'mdd_status' => 'MDD Status',
        'name' => 'FN Name',
        'rpds' => '# RPDs',
    ],
    'inventory' => [
        'name' => 'Name',
        'pid' => 'PID',
        'manufacturer' => 'Manufacturer',
        'serial_nr' => 'Serial Number',
        'part_nr' => 'Part Number',
        'ports' => 'Ports',
        'status' => 'Status',
        'inserted' => 'Inserted',
        'description' => 'Description',
    ],
    'ip' => 'IP',
    'ip_address' => 'IP Address',
    'l2tp' => [
        'tunnel_id' => 'Tunnel ID',
        'remote_tunnel_id' => 'Remote Tunnel ID',
        'ip_version' => 'IP Version',
        'ip' => 'IP',
        'remote_ip' => 'Remote IP',
        'error_code' => 'Error Code',
    ],
    'market' => 'Market',
    'hubsite' => 'HubSite',
    'online' => 'Online',
    'rpa' => 'RPA',
    'rpd' => [
        'additional_cores' => 'Additional Associated Cores',
        'aux' => 'Aux',
        'bc_vid_cont_profile' => 'BC Video Controller Profile',
        'bc_vid_cont' => 'BC Video Controller',
        'bc_vid_depi' => 'BC Video DEPI',
        'bc_vid_if' => 'BC Video Interface',
        'bc_vid_oob_if' => 'BC Video OOB Interface',
        'bc_vid_service_grp' => 'BC Video Service Group',
        'cable_if' => 'Cable IF',
        'ccap_if' => 'CCAP Core IF',
        'cin_rpa' => 'Associated CIN Aggregator RPA',
        'cin_dpa' => 'Associated CIN Aggregator DPA',
        'cm_no' => 'CPE Count Per RPD',
        'cm_no_service_group' => 'CPE Count Per Service Group',
        'cm_off_no' => 'Number CPE Offline',
        'ds_data_cont_profile' => 'DS Data Controller Profile',
        'ds_data_cont' => 'DS Data Controller',
        'ds_data_depi' => 'DS Data DEPI',
        'ds_data_service_grp' => 'DS Data Service Group Information',
        'fiber_node' => 'Fiber Node Name',
        'mac' => 'RPD Mac',
        'name' => 'RPD System Name',
        'nc_vid_cont_profile' => 'NC Video Controller Profile',
        'nc_vid_cont' => 'NC Video Controller',
        'nc_vid_depi' => 'NC Video DEPI',
        'nc_vid_if' => 'NC Video Interface',
        'nc_vid_oob_if' => 'NC Video OOB Interface',
        'nc_vid_service_grp' => 'NC Video Service Group',
        'rpa1' => 'RPA1',
        'rpa2' => 'RPA2',
        'status' => 'Status',
        'service_template' => 'Service Template',
        'us_data_cont_profile' => 'US Data Controller Profile',
        'us_data_cont' => 'US Data Controller',
        'us_data_depi' => 'US data DEPI',
        'us_data_service_grp' => 'US Data Service Group Information',
        'util_ds_ofdm' => 'DOCSIS DS OFDM',
        'util_ds_qam' => 'DOCSIS DS QAM',
        'util_us_ofdm' => 'DOCSIS US OFDM',
        'util_us_qam' => 'DOCSIS US QAM',
        'ccap_core_name' => 'CCAP Core',
        'session_id' => 'Session ID',
        'address_type' => 'Address Type',
        'local_id' => 'Local ID',
        'ip' => 'IP',
    ],
    'serial_letters' => [
        'name' => 'Name',
        'file' => 'File',
    ],
    'stateChangedAt' => 'Last state change',
    'updatedAt' => 'Updated at',
    'utilization' => [
        'ccap_name' => 'CCAP Core Name',
        'fn_name' => 'FN Name',
        'hub_name' => 'HUB Name',
        'lable_if' => 'Lable Interface',
        'market_name' => 'Market Name',
        'name_idx' => 'Name IDX',
        'rpd_no' => 'Number RPD',
    ],
    // NAS
    'nas' => [
        'nasname' => 'Name',
    ],
    'state' => 'Status',
    'status' => 'Status',
    'ticket' => [
        'id' => 'ID',
        'name' => 'Title',
        'type' => 'Type',
        'priority' => 'Priority',
        'state' => 'State',
        'user_id' => 'Created by',
        'created_at' => 'Created at',
        'assigned_users' => 'Assigned Users',
        'ticketable_id' => 'Id',
        'ticketable_type' => 'Type',
    ],
    'assigned_users' => 'Assigned Users',
    'tickettypes.name' => 'Type',
    'total_fee' => 'Fee',
    'vendor' => 'Vendor',
    'internalId' => 'Internal Reference',
    'dunning' => [
        'created_at' => 'Time',
        'contract_id' => 'Contract ID',
    ],
];
