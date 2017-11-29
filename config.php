<?php
//Please enter the corresponding info to customize your template.
$config = '
	"title":"<--YOUR RSPS NAME -->",
	"description":"<--YOUR SITE DESCRIPTION-->",
	"favicon":"<--YOUR FAVICON URL-->"
	"bannergraphic":"<-- URL TO YOUR BANNER -->",
	"client":"<-- URL TO CLIENT DOWNLOAD -->",

	"paypal":"<--YOUR PAYPAL EMAIL -->",
	"contact":"<--YOUR SITE CONTACT EMAIL -->",

	"mysqlhost":"<--YOUR MYSQL SERVER HOST -->",
	"mysqlport":"<--YOUR MYSQL SERVER PORT -->",
	"db":"<--YOUR MYSQL DATABASE NAME -->",
	"mysqluser":"<--YOUR MYSQL USER -->",
	"mysqlpass":"<--YOUR MYSQL PASSWORD -->"
';


$GLOBALS['config'] = json_decode($config,TRUE); ?>