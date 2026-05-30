#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content
(
	tx_parsedownextra_file     varchar(4095) DEFAULT '' NOT NULL,
	tx_parsedownextra_file_uid int(11) DEFAULT '0' NOT NULL,
	tx_parsedownextra_markdown text NOT NULL DEFAULT '',
);
