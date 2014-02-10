<?php
/*
    userframe - enduser framework
    Copyright (C) 2014 undido

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

$config = array();
$config['db'] = array();

 //debug mode shows information which helps determine development problems easily. Not for production websites.
$config['debug'] = true;

$config['db']['user'] = "root"; //database username
$config['db']['pass'] = ""; //database password
$config['db']['dbhost'] = "localhost"; //host of database server



$config['db']['dbtype'] = "mysql"; //type of database
$config['db']['dbname'] = "users"; //database name
$config['db']['charset'] = "utf8";//type of charset we will use













?>