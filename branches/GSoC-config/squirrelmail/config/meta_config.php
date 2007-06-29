; This is the meta configuration file of SquirrelMail. <?php die(); ?>
; (contains the type and description of configuration variables)
; This file is only included when needed, i.e when editing the configuration

[types]

org_name = SM_CONF_STRING",0"
org_logo = SM_CONF_STRING",0"
org_logo_width = SM_CONF_INTEGER",4"
org_logo_height = SM_CONF_INTEGER",4"
org_title = SM_CONF_STRING",0"
signout_page = SM_CONF_STRING",0"
frame_top = SM_CONF_STRING",0"
provider_name = SM_CONF_STRING",0"
provider_uri = SM_CONF_STRING",0"
domain = SM_CONF_STRING",0"
invert_time = SM_CONF_BOOL","
useSendmail = SM_CONF_BOOL","
smtpServerAddress = SM_CONF_STRING",0"
smtpPort = SM_CONF_INTEGER",6"
encode_header_key = SM_CONF_STRING",0"
sendmail_path = SM_CONF_STRING",0"
sendmail_args = SM_CONF_STRING",0"
imapServerAddress = SM_CONF_STRING",0"
imapPort = SM_CONF_INTEGER",6"
imap_server_type = SM_CONF_ENUM",other,bincimap,courier,cyrus,dovecot,exchange,hmailserver,macosx,mercury32,uw"
use_imap_tls = SM_CONF_BOOL","
use_smtp_tls = SM_CONF_BOOL","
smtp_auth_mech = SM_CONF_ENUM",none,login,plain,cram-md5,digest-md5"
smtp_sitewide_user = SM_CONF_STRING",0"
smtp_sitewide_pass = SM_CONF_STRING",0"
imap_auth_mech = SM_CONF_ENUM",login,plain,cram-md5,digest-md5"
optional_delimiter = SM_CONF_STRING",0"
pop_before_smtp = SM_CONF_BOOL","
default_folder_prefix = SM_CONF_STRING",0"
show_prefix_option = SM_CONF_BOOL","
default_move_to_trash = SM_CONF_BOOL","
default_move_to_sent  = SM_CONF_BOOL","
default_save_as_draft = SM_CONF_BOOL","
trash_folder = SM_CONF_STRING",0"
sent_folder  = SM_CONF_STRING",0"
draft_folder = SM_CONF_STRING",0"
auto_expunge = SM_CONF_BOOL","
delete_folder = SM_CONF_BOOL","
use_special_folder_color = SM_CONF_BOOL","
auto_create_special = SM_CONF_BOOL","
list_special_folders_first = SM_CONF_BOOL","
default_sub_of_inbox = SM_CONF_BOOL","
show_contain_subfolders_option = SM_CONF_BOOL","
default_unseen_notify = SM_CONF_ENUM",1,2,3"
default_unseen_type   = SM_CONF_ENUM",1,2"
noselect_fix_enable = SM_CONF_BOOL","
data_dir = SM_CONF_STRING",40"
attachment_dir = SM_CONF_STRING",40"
dir_hash_level = SM_CONF_BOOL","
default_left_size = SM_CONF_INTEGER",4"
force_username_lowercase = SM_CONF_BOOL","
default_use_priority = SM_CONF_BOOL","
hide_sm_attributions = SM_CONF_BOOL","
default_use_mdn = SM_CONF_BOOL","
edit_identity = SM_CONF_BOOL","
edit_name = SM_CONF_BOOL","
hide_auth_header = SM_CONF_BOOL","
disable_thread_sort = SM_CONF_BOOL","
disable_server_sort = SM_CONF_BOOL","
allow_charset_search = SM_CONF_BOOL","
allow_advanced_search = SM_CONF_BOOL","
session_name = SM_CONF_STRING",12"
user_theme_default = SM_CONF_ARRAY_ENUM",user_themes"
use_icons = SM_CONF_BOOL","
icon_theme_def = SM_CONF_ARRAY_ENUM",icon_themes"
icon_theme_fallback = SM_CONF_ARRAY_ENUM",icon_themes"
templateset_default = SM_CONF_ARRAY_ENUM",aTemplateSet"
templateset_fallback = SM_CONF_ARRAY_ENUM",aTemplateSet"
default_fontsize = SM_CONF_STRING",6"
default_fontset = SM_CONF_ARRAY_ENUM",fontsets"
default_use_javascript_addr_book = SM_CONF_BOOL","
abook_global_file = SM_CONF_STRING",40"
abook_global_file_writeable = SM_CONF_BOOL","
abook_global_file_listing = SM_CONF_BOOL","
abook_file_line_length = SM_CONF_INTEGER",6"
motd = SM_CONF_STRING",50"
disable_plugins = SM_CONF_BOOL","
disable_plugins_user = SM_CONF_STRING",25"
addrbook_dsn = SM_CONF_STRING",35"
addrbook_table = SM_CONF_STRING",15"
prefs_dsn = SM_CONF_STRING",35"
prefs_table = SM_CONF_STRING",15"
prefs_key_field = SM_CONF_STRING",15"
prefs_key_size = SM_CONF_INTEGER",5"
prefs_user_field = SM_CONF_STRING",15"
prefs_user_size = SM_CONF_INTEGER",5"
prefs_val_field = SM_CONF_STRING",15"
prefs_val_size = SM_CONF_INTEGER",5"
addrbook_global_dsn = SM_CONF_STRING",35"
addrbook_global_table = SM_CONF_STRING",15"
addrbook_global_writeable = SM_CONF_BOOL","
addrbook_global_listing = SM_CONF_BOOL","
squirrelmail_default_language = SM_CONF_STRING",10"
default_charset = SM_CONF_STRING",15"
show_alternative_names   = SM_CONF_BOOL","
aggressive_decoding = SM_CONF_BOOL","
lossy_encoding = SM_CONF_BOOL","
time_zone_type = SM_CONF_ENUM",0,1,2,3"
config_location_base = SM_CONF_STRING",40"
use_iframe = SM_CONF_BOOL","
use_php_recode = SM_CONF_BOOL","
use_php_iconv = SM_CONF_BOOL","
allow_remote_configtest = SM_CONF_BOOL","
no_list_for_subscribe = SM_CONF_BOOL","
config_use_color = SM_CONF_ENUM",0,1,2,3"
ask_user_info = SM_CONF_BOOL","
