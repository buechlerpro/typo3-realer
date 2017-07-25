#
# Table structure for table 'tx_realer_domain_model_property'
#
CREATE TABLE tx_realer_domain_model_property (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,


	title varchar(255) DEFAULT '' NOT NULL,
	agent_reference varchar(255) DEFAULT '' NOT NULL,
	has_priority smallint(5) unsigned DEFAULT '0' NOT NULL,
	sales_state int(11) DEFAULT '0' NOT NULL,
	available_for_sale smallint(5) unsigned DEFAULT '0' NOT NULL,
	available_for_rent smallint(5) unsigned DEFAULT '0' NOT NULL,
	available_for_business_transfer smallint(5) unsigned DEFAULT '0' NOT NULL,
	price_before double(11,2) DEFAULT '0.00' NOT NULL,
	price_after double(11,2) DEFAULT '0.00' NOT NULL,
	insurance_value double(11,2) DEFAULT '0.00' NOT NULL,
	running_cost double(11,2) DEFAULT '0.00' NOT NULL,
	images int(11) unsigned NOT NULL default '0',
	introduction text,
	location_type int(11) DEFAULT '0' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	place varchar(255) DEFAULT '' NOT NULL,
	zone varchar(255) DEFAULT '' NOT NULL,
	region varchar(255) DEFAULT '' NOT NULL,
	country varchar(255) DEFAULT '' NOT NULL,
	latitude varchar(255) DEFAULT '' NOT NULL,
	longitude varchar(255) DEFAULT '' NOT NULL,
	orientation varchar(255) DEFAULT '' NOT NULL,
	object_type int(11) DEFAULT '0' NOT NULL,
	house_type int(11) DEFAULT '0' NOT NULL,
	flat_type int(11) DEFAULT '0' NOT NULL,
	land_type int(11) DEFAULT '0' NOT NULL,
	classification int(11) DEFAULT '0' NOT NULL,
	room_count double(11,2) DEFAULT '0.00' NOT NULL,
	is_new smallint(5) unsigned DEFAULT '0' NOT NULL,
	property_age varchar(255) DEFAULT '' NOT NULL,
	construction_area double(11,2) DEFAULT '0.00' NOT NULL,
	useful_area varchar(255) DEFAULT '' NOT NULL,
	state int(11) DEFAULT '0' NOT NULL,
	description text,


	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
	hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state smallint(6) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,


	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,
	l10n_state text,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);
