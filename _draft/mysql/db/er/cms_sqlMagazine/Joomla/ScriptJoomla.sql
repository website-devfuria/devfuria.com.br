CREATE TABLE jos_assets (
  id INTEGER NOT NULL,
  parent_id INTEGER NULL,
  lft INTEGER NULL,
  rgt INTEGER NULL,
  level INTEGER NULL,
  name VARCHAR(50) NULL,
  title VARCHAR(100) NULL,
  rules VARCHAR(5120) NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_banner (
  bid INTEGER NOT NULL,
  cid INTEGER NULL,
  type VARCHAR(30) NULL,
  name VARCHAR(255) NULL,
  alias VARCHAR(255) NULL,
  imptotal INTEGER NULL,
  impmade INTEGER NULL,
  clicks INTEGER NULL,
  imageurl VARCHAR(100) NULL,
  clickurl VARCHAR(200) NULL,
  date DATETIME NOT NULL,
  showBanner TINYINT NULL,
  checked_out TINYINT NULL,
  checked_out_time DATETIME NULL,
  editor VARCHAR(50) NOT NULL,
  custombannercode TEXT NOT NULL,
  catid INTEGER NULL,
  description TEXT NULL,
  sticky INTEGER NULL,
  ordering INTEGER NULL,
  publish_up DATETIME NULL,
  publish_down DATETIME NULL,
  tags TEXT NULL,
  params TEXT NULL,
  PRIMARY KEY(bid),
);

CREATE TABLE jos_bannerclient (
  cid INTEGER NOT NULL,
  name VARCHAR(255) NULL,
  contact VARCHAR(255) NULL,
  email VARCHAR(255) NULL,
  extrainfo TEXT NULL,
  checked_out TINYINT NULL,
  checked_out_time TIME NOT NULL,
  editor VARCHAR(50) NOT NULL,
  PRIMARY KEY(cid)
);

CREATE TABLE jos_bannertrack (
  track_date DATE NULL,
  track_type INTEGER NULL,
  banner_id INTEGER NULL
);

CREATE TABLE jos_categories (
  id INTEGER NOT NULL,
  asset_id INTEGER NULL,
  parent_id INTEGER NULL,
  lft INTEGER NULL,
  rgt INTEGER NULL,
  level INTEGER NULL,
  path VARCHAR(255) NULL,
  extension VARCHAR(50) NULL,
  title VARCHAR(255) NULL,
  alias VARCHAR(255) NULL,
  description VARCHAR(5120) NULL,
  published TINYINT NULL,
  checked_out INTEGER NULL,
  checked_out_time DATETIME NULL,
  access INTEGER NULL,
  params VARCHAR(2048) NULL,
  metadesc VARCHAR(1024) NULL,
  metakey VARCHAR(1024) NULL,
  metadata VARCHAR(2048) NULL,
  created_user_id INTEGER NULL,
  created_time TIMESTAMP NOT NULL,
  modified_user_id INTEGER NULL,
  modified_time TIMESTAMP NULL,
  hits INTEGER NULL,
  language VARCHAR(7) NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_components (
  id INTEGER NOT NULL,
  name VARCHAR(50) NULL,
  link VARCHAR(255) NULL,
  menuid INTEGER NULL,
  parent INTEGER NULL,
  admin_menu_link VARCHAR(255) NULL,
  admin_menu_alt VARCHAR(255) NULL,
  option VARCHAR(50) NULL,
  ordering INTEGER NULL,
  admin_menu_img VARCHAR(255) NULL,
  iscore TINYINT NULL,
  params TEXT NULL,
  enabled INTEGER NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_contact_details (
  id INTEGER NOT NULL,
  name VARCHAR(255) NULL,
  alias VARCHAR(255) NULL,
  con_position VARCHAR(255) NOT NULL,
  address TEXT NOT NULL,
  suburb VARCHAR(100) NOT NULL,
  state VARCHAR(100) NOT NULL,
  country VARCHAR(100) NOT NULL,
  postcode VARCHAR(100) NOT NULL,
  telephone VARCHAR(255) NOT NULL,
  fax VARCHAR(255) NOT NULL,
  misc TEXT NOT NULL,
  image VARCHAR(255) NOT NULL,
  imagepos VARCHAR(20) NOT NULL,
  email_to VARCHAR(255) NOT NULL,
  default_con INTEGER NULL,
  published INTEGER NULL,
  checked_out INTEGER NULL,
  checked_out_time DATETIME NULL,
  ordering INTEGER NULL,
  params TEXT NULL,
  user_id INTEGER NULL,
  catid INTEGER NULL,
  access INTEGER NULL,
  mobile VARCHAR(255) NULL,
  webpage VARCHAR(255) NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_content (
  id INTEGER NOT NULL,
  asset_id INTEGER NULL,
  title VARCHAR(255) NULL,
  alias VARCHAR(255) NULL,
  title_alias VARCHAR(255) NULL,
  introtext TEXT NULL,
  fulltext TEXT NULL,
  state TINYINT NULL,
  sectionid INTEGER NULL,
  mask INTEGER NULL,
  catid INTEGER NULL,
  created DATETIME NULL,
  created_by INTEGER NULL,
  created_by_alias VARCHAR(255) NULL,
  modified DATETIME NULL,
  modified_by INTEGER NULL,
  checked_out INTEGER NULL,
  checked_out_time DATETIME NULL,
  publish_up DATETIME NULL,
  publish_down DATETIME NULL,
  images TEXT NULL,
  urls TEXT NULL,
  attribs TEXT NULL,
  version INTEGER NULL,
  parentid INTEGER NULL,
  ordering INTEGER NULL,
  metakey TEXT NULL,
  metadesc TEXT NULL,
  access INTEGER NULL,
  hits INTEGER NULL,
  metadata TEXT NULL,
  featured INTEGER NULL,
  language VARCHAR(10) NULL,
  xreference VARCHAR(50) NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_content_frontpage (
  content_id INTEGER NULL,
  ordering INTEGER NULL,
  PRIMARY KEY(content_id)
);

CREATE TABLE jos_content_rating (
  content_id INTEGER NULL,
  rating_sum INTEGER NULL,
  rating_count INTEGER NULL,
  lastip VARCHAR(50) NULL,
  PRIMARY KEY(content_id)
);

CREATE TABLE jos_core_log_items (
  time_stamp DATE NULL,
  item_table VARCHAR(50) NULL,
  item_id INTEGER NULL,
  hits INTEGER NULL
);

CREATE TABLE jos_core_log_searches (
  search_term VARCHAR(128) NULL,
  hits INTEGER NULL
);

CREATE TABLE jos_languages (
  lang_id INTEGER NOT NULL,
  lang_code CHAR NULL,
  title VARCHAR(50) NULL,
  title_native VARCHAR(50) NULL,
  description VARCHAR(512) NULL,
  published INTEGER NULL,
  PRIMARY KEY(lang_id)
);

CREATE TABLE jos_menu (
  id INTEGER NOT NULL,
  menutype VARCHAR(24) NULL,
  title VARCHAR(255) NULL,
  alias VARCHAR(255) NULL,
  path VARCHAR(1024) NULL,
  link VARCHAR(1024) NULL,
  type VARCHAR(16) NULL,
  published TINYINT NULL,
  parent_id INTEGER NULL,
  level INTEGER NULL,
  component_id INTEGER NULL,
  ordering INTEGER NULL,
  checked_out INTEGER NULL,
  checked_out_time TIMESTAMP NULL,
  browserNav TINYINT NULL,
  access INTEGER NULL,
  template_id INTEGER NOT NULL,
  params VARCHAR(10240) NULL,
  lft INTEGER NULL,
  rgt INTEGER NULL,
  home INTEGER NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_menu_template (
  id INTEGER NOT NULL,
  template VARCHAR(255) NULL,
  client_id INTEGER NULL,
  home TINYINT NULL,
  description VARCHAR(255) NULL,
  params TEXT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE jos_menu_types (
  id INTEGER NOT NULL,
  menutype VARCHAR(24) NULL,
  title VARCHAR(48) NULL,
  description VARCHAR(255) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE jos_messages (
  message_id INTEGER NOT NULL,
  user_id_from INTEGER NULL,
  user_id_to INTEGER NULL,
  folder_id INTEGER NULL,
  date_time DATETIME NULL,
  state INTEGER NULL,
  priority INTEGER NULL,
  subject TEXT NULL,
  message TEXT NULL,
  PRIMARY KEY(message_id),
);

CREATE TABLE jos_messages_cfg (
  user_id INTEGER NULL,
  cfg_name VARCHAR(100) NULL,
  cfg_value VARCHAR(255) NULL,
  PRIMARY KEY(user_id, cfg_name),
);

CREATE TABLE jos_modules (
  id INTEGER NOT NULL,
  title TEXT NULL,
  content TEXT NULL,
  ordering INTEGER NULL,
  position VARCHAR(50) NOT NULL,
  checked_out INTEGER NULL,
  checked_out_time DATETIME NULL,
  published TINYINT NULL,
  module VARCHAR(50) NOT NULL,
  numnews INTEGER NULL,
  access INTEGER NULL,
  showtitle INTEGER NULL,
  params TEXT NULL,
  iscore TINYINT NULL,
  client_id TINYINT NULL,
  control TEXT NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_modules_menu (
  moduleid INTEGER NULL,
  menuid INTEGER NULL,
  PRIMARY KEY(moduleid, menuid)
);

CREATE TABLE jos_newsfeeds (
  catid INTEGER NULL,
  id INTEGER NOT NULL,
  name VARCHAR(100) NULL,
  alias VARCHAR(100) NULL,
  link VARCHAR(200) NULL,
  filename VARCHAR(200) NOT NULL,
  published TINYINT NULL,
  numarticles INTEGER NULL,
  cache_time INTEGER NULL,
  checked_out INTEGER NULL,
  checked_out_time DATETIME NULL,
  ordering INTEGER NULL,
  rtl TINYINT NULL,
  access INTEGER NULL,
  language CHAR NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_redirect_links (
  id INTEGER NOT NULL,
  old_url VARCHAR(150) NULL,
  new_url VARCHAR(150) NULL,
  referer VARCHAR(150) NULL,
  comment VARCHAR(255) NULL,
  published TINYINT NULL,
  created_date INTEGER NULL,
  updated_date TIMESTAMP NOT NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_schemas (
  extensionid INTEGER NULL,
  versionid VARCHAR(20) NULL,
  PRIMARY KEY(extensionid, versionid)
);

CREATE TABLE jos_session (
  session_id VARCHAR(32) NULL,
  client_id INTEGER NULL,
  guest INTEGER NOT NULL,
  time VARCHAR(14) NOT NULL,
  data VARCHAR(20480) NOT NULL,
  userid INTEGER NOT NULL,
  username VARCHAR(150) NOT NULL,
  usertype VARCHAR(50) NOT NULL,
  PRIMARY KEY(session_id),
);

CREATE TABLE jos_stats_agents (
  agent VARCHAR(255) NULL,
  type INTEGER NULL,
  hits INTEGER NULL
);

CREATE TABLE jos_updates (
  update_id INTEGER NOT NULL,
  update_site_id INTEGER NOT NULL,
  extension_id INTEGER NOT NULL,
  categoryid INTEGER NOT NULL,
  name VARCHAR(100) NOT NULL,
  description TEXT NULL,
  element VARCHAR(100) NOT NULL,
  type VARCHAR(20) NOT NULL,
  folder VARCHAR(20) NOT NULL,
  client_id TINYINT NOT NULL,
  version VARCHAR(10) NOT NULL,
  data TEXT NULL,
  detailsurl TEXT NULL,
  PRIMARY KEY(update_id)
);

CREATE TABLE jos_update_categories (
  categoryid INTEGER NOT NULL,
  name VARCHAR(20) NOT NULL,
  description TEXT NULL,
  parent INTEGER NOT NULL,
  updatesite INTEGER NOT NULL,
  PRIMARY KEY(categoryid)
);

CREATE TABLE jos_update_sites (
  update_site_id INTEGER NOT NULL,
  name VARCHAR(100) NOT NULL,
  type VARCHAR(20) NOT NULL,
  location TEXT NULL,
  enabled INTEGER NOT NULL,
  PRIMARY KEY(update_site_id)
);

CREATE TABLE jos_update_sites_extensions (
  update_site_id INTEGER NOT NULL,
  extension_id INTEGER NOT NULL,
);

CREATE TABLE jos_usergroups (
  id INTEGER NOT NULL,
  parent_id INTEGER NULL,
  lft INTEGER NULL,
  rgt INTEGER NULL,
  title VARCHAR(100) NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_users (
  id INTEGER NOT NULL,
  name VARCHAR(255) NULL,
  username VARCHAR(150) NULL,
  email VARCHAR(100) NULL,
  password VARCHAR(100) NULL,
  usertype VARCHAR(25) NULL,
  block TINYINT NULL,
  sendEmail TINYINT NOT NULL,
  registerDate DATETIME NULL,
  lastvisitDate DATETIME NULL,
  activation VARCHAR(100) NULL,
  params TEXT NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_user_profiles (
  user_id INTEGER NULL,
  profile_key VARCHAR(100) NULL,
  profile_value VARCHAR(255) NULL,
  ordering INTEGER NULL,
  PRIMARY KEY(user_id, profile_key),
);

CREATE TABLE jos_user_usergroup_map (
  user_id INTEGER NULL,
  group_id INTEGER NULL,
  PRIMARY KEY(user_id, group_id)
);

CREATE TABLE jos_viewlevels (
  id INTEGER NOT NULL,
  title VARCHAR(100) NULL,
  ordering INTEGER NULL,
  rules VARCHAR(5120) NULL,
  PRIMARY KEY(id),
);

CREATE TABLE jos_weblinks (
  id INTEGER NOT NULL,
  catid INTEGER NULL,
  sid INTEGER NULL,
  title VARCHAR(250) NULL,
  alias VARCHAR(255) NULL,
  url VARCHAR(250) NULL,
  description TEXT NULL,
  date DATETIME NULL,
  hits INTEGER NULL,
  state TINYINT NULL,
  checked_out INTEGER NULL,
  checked_out_time DATETIME NULL,
  ordering INTEGER NULL,
  archived TINYINT NULL,
  approved TINYINT NULL,
  access INTEGER NULL,
  params TEXT NULL,
  language CHAR NULL,
  PRIMARY KEY(id),
);


