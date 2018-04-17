# ADAuth
This is a simple PHP script to bind and authenticate AD/LDAP users based on Groups.


This use only four files to authenticate on AD

# index.php
This is a initial land page
On this page, user put on our credentials on a form and this call the authenticate.php to bind users on AD

# authenticate.php
This is where the magic occours
The land page send a variable user and password by POST, authenticate do a bind on AD, based on simple configurations

$ldap_host = ""; //fqdn ou ip
$ldap_dn = ""; //dn of users, like OU=Usuarios,DC=domain,DC=local;
$ldap_user_group = " "; //domain group that have authorization to access the application protected, like: "APP_AUTH"
$ldap_manager_group = ""; //domain group that have authorization to access with privileged grants to the application protected, like: "APP_AUTH_MANAGERS"
$ldap_usr_dom = "@domain.local";


# logout.php
This is to distruct session

# verificaSessao.php
You need to call this on all pages, they verify that session is correct and user are logged on, to prevent bad calls to the application
