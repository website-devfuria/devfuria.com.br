CREATE TABLE actions (
  aid VARCHAR(255) NULL,
  type VARCHAR(32) NULL,
  callback VARCHAR(255) NULL,
  parameters BLOB NULL,
  label VARCHAR(255) NULL,
  PRIMARY KEY(aid)
);

CREATE TABLE authmap (
  aid INTEGER NOT NULL,
  uid INTEGER NULL,
  authname VARCHAR(128) NULL,
  module VARCHAR(128) NULL,
  PRIMARY KEY(aid),
);

CREATE TABLE batch (
  bid INTEGER NULL,
  token VARCHAR(64) NULL,
  timestamp INTEGER NULL,
  batch BLOB NOT NULL,
  PRIMARY KEY(bid),
);

CREATE TABLE block (
  bid INTEGER NOT NULL,
  module VARCHAR(64) NULL,
  delta VARCHAR(32) NULL,
  theme VARCHAR(64) NULL,
  status TINYINT NULL,
  weight INTEGER NULL,
  region VARCHAR(64) NULL,
  custom TINYINT NULL,
  visibility TINYINT NULL,
  pages TEXT NULL,
  title VARCHAR(64) NULL,
  cache TINYINT NULL,
  PRIMARY KEY(bid),
);

CREATE TABLE blocked_ips (
  iid INTEGER NOT NULL,
  ip VARCHAR(40) NULL,
  PRIMARY KEY(iid),
);

CREATE TABLE block_custom (
  bid INTEGER NOT NULL,
  body TEXT NOT NULL,
  info VARCHAR(128) NULL,
  format VARCHAR(255) NOT NULL,
  PRIMARY KEY(bid),
);

CREATE TABLE block_node_type (
  module VARCHAR(64) NULL,
  delta VARCHAR(32) NULL,
  type VARCHAR(32) NULL,
  PRIMARY KEY(module, delta, type),
);

CREATE TABLE block_role (
  module VARCHAR(64) NULL,
  delta VARCHAR(32) NULL,
  rid INTEGER NULL,
  PRIMARY KEY(module, delta, rid),
);

CREATE TABLE cache (
  cid VARCHAR(255) NULL,
  data BLOB NOT NULL,
  expire INTEGER NULL,
  created INTEGER NULL,
  serialized SMALLINT NULL,
  PRIMARY KEY(cid),
);

CREATE TABLE cache_block (
  cid VARCHAR(255) NULL,
  data BLOB NOT NULL,
  expire INTEGER NULL,
  created INTEGER NULL,
  serialized SMALLINT NULL,
  PRIMARY KEY(cid),
);

CREATE TABLE cache_bootstrap (
  cid VARCHAR(255) NULL,
  data BLOB NOT NULL,
  expire INTEGER NULL,
  created INTEGER NULL,
  serialized SMALLINT NULL,
  PRIMARY KEY(cid),
);

CREATE TABLE cache_field (
  cid VARCHAR(255) NULL,
  data BLOB NOT NULL,
  expire INTEGER NULL,
  created INTEGER NULL,
  serialized SMALLINT NULL,
  PRIMARY KEY(cid),
);

CREATE TABLE cache_filter (
  cid VARCHAR(255) NULL,
  data BLOB NOT NULL,
  expire INTEGER NULL,
  created INTEGER NULL,
  serialized SMALLINT NULL,
  PRIMARY KEY(cid),
);

CREATE TABLE cache_form (
  cid VARCHAR(255) NULL,
  data BLOB NOT NULL,
  expire INTEGER NULL,
  created INTEGER NULL,
  serialized SMALLINT NULL,
  PRIMARY KEY(cid),
);

CREATE TABLE cache_image (
  cid VARCHAR(255) NULL,
  data BLOB NOT NULL,
  expire INTEGER NULL,
  created INTEGER NULL,
  serialized SMALLINT NULL,
  PRIMARY KEY(cid),
);

CREATE TABLE cache_menu (
  cid VARCHAR(255) NULL,
  data BLOB NOT NULL,
  expire INTEGER NULL,
  created INTEGER NULL,
  serialized SMALLINT NULL,
  PRIMARY KEY(cid),
);

CREATE TABLE cache_page (
  cid VARCHAR(255) NULL,
  data BLOB NOT NULL,
  expire INTEGER NULL,
  created INTEGER NULL,
  serialized SMALLINT NULL,
  PRIMARY KEY(cid),
);

CREATE TABLE cache_path (
  cid VARCHAR(255) NULL,
  data BLOB NOT NULL,
  expire INTEGER NULL,
  created INTEGER NULL,
  serialized SMALLINT NULL,
  PRIMARY KEY(cid),
);

CREATE TABLE comment (
  cid INTEGER NOT NULL,
  pid INTEGER NULL,
  nid INTEGER NULL,
  uid INTEGER NULL,
  subject VARCHAR(64) NULL,
  hostname VARCHAR(128) NULL,
  created INTEGER NULL,
  changed INTEGER NULL,
  status INTEGER NULL,
  thread VARCHAR(255) NULL,
  name VARCHAR(60) NOT NULL,
  mail VARCHAR(64) NOT NULL,
  homepage VARCHAR(255) NOT NULL,
  language VARCHAR(12) NULL,
  PRIMARY KEY(cid),
);

CREATE TABLE date_formats (
  dfid INTEGER NOT NULL,
  format VARCHAR(100) NULL,
  type VARCHAR(64) NULL,
  locked TINYINT NULL,
  PRIMARY KEY(dfid),
);

CREATE TABLE date_format_locale (
  format VARCHAR(100) NULL,
  type VARCHAR(64) NULL,
  language VARCHAR(12) NULL,
  PRIMARY KEY(type, language)
);

CREATE TABLE date_format_type (
  type VARCHAR(64) NULL,
  title VARCHAR(255) NULL,
  locked TINYINT NULL,
  PRIMARY KEY(type),
);

CREATE TABLE field_config (
  id INTEGER NOT NULL,
  field_name VARCHAR(32) NULL,
  type VARCHAR(128) NULL,
  module VARCHAR(128) NULL,
  active TINYINT NULL,
  storage_type VARCHAR(128) NULL,
  storage_module VARCHAR(128) NULL,
  storage_active TINYINT NULL,
  locked TINYINT NULL,
  data BLOB NULL,
  cardinality TINYINT NULL,
  translatable TINYINT NULL,
  deleted TINYINT NULL,
  PRIMARY KEY(id),
);

CREATE TABLE field_config_instance (
  id INTEGER NOT NULL,
  field_id INTEGER NULL,
  field_name VARCHAR(32) NULL,
  entity_type VARCHAR(32) NULL,
  bundle VARCHAR(128) NULL,
  data BLOB NULL,
  deleted TINYINT NULL,
  PRIMARY KEY(id),
);

CREATE TABLE field_data_body (
  entity_type VARCHAR(128) NULL,
  bundle VARCHAR(128) NULL,
  deleted TINYINT NULL,
  entity_id INTEGER NULL,
  revision_id INTEGER NOT NULL,
  language VARCHAR(32) NULL,
  delta INTEGER NULL,
  body_value TEXT NOT NULL,
  body_summary TEXT NOT NULL,
  body_format VARCHAR(255) NOT NULL,
  PRIMARY KEY(entity_type, entity_id, deleted, delta, language),
);

CREATE TABLE field_data_comment_body (
  entity_type VARCHAR(128) NULL,
  bundle VARCHAR(128) NULL,
  deleted TINYINT NULL,
  entity_id INTEGER NULL,
  revision_id INTEGER NOT NULL,
  language VARCHAR(32) NULL,
  delta INTEGER NULL,
  comment_body_value TEXT NOT NULL,
  comment_body_format VARCHAR(255) NOT NULL,
  PRIMARY KEY(entity_type, entity_id, deleted, delta, language),
);

CREATE TABLE field_data_field_image (
  entity_type VARCHAR(128) NULL,
  bundle VARCHAR(128) NULL,
  deleted TINYINT NULL,
  entity_id INTEGER NULL,
  revision_id INTEGER NOT NULL,
  language VARCHAR(32) NULL,
  delta INTEGER NULL,
  field_image_fid INTEGER NOT NULL,
  field_image_alt VARCHAR(128) NOT NULL,
  field_image_title VARCHAR(128) NOT NULL,
  PRIMARY KEY(entity_type, entity_id, deleted, delta, language),
);

CREATE TABLE field_data_field_tags (
  entity_type VARCHAR(128) NULL,
  bundle VARCHAR(128) NULL,
  deleted TINYINT NULL,
  entity_id INTEGER NULL,
  revision_id INTEGER NOT NULL,
  language VARCHAR(32) NULL,
  delta INTEGER NULL,
  field_tags_tid INTEGER NOT NULL,
  PRIMARY KEY(entity_type, entity_id, deleted, delta, language),
);

CREATE TABLE field_revision_body (
  entity_type VARCHAR(128) NULL,
  bundle VARCHAR(128) NULL,
  deleted TINYINT NULL,
  entity_id INTEGER NULL,
  revision_id INTEGER NULL,
  language VARCHAR(32) NULL,
  delta INTEGER NULL,
  body_value TEXT NOT NULL,
  body_summary TEXT NOT NULL,
  body_format VARCHAR(255) NOT NULL,
  PRIMARY KEY(entity_type, entity_id, revision_id, deleted, delta, language),
);

CREATE TABLE field_revision_comment_body (
  entity_type VARCHAR(128) NULL,
  bundle VARCHAR(128) NULL,
  deleted TINYINT NULL,
  entity_id INTEGER NULL,
  revision_id INTEGER NULL,
  language VARCHAR(32) NULL,
  delta INTEGER NULL,
  comment_body_value TEXT NOT NULL,
  comment_body_format VARCHAR(255) NOT NULL,
  PRIMARY KEY(entity_type, entity_id, revision_id, deleted, delta, language),
);

CREATE TABLE field_revision_field_image (
  entity_type VARCHAR(128) NULL,
  bundle VARCHAR(128) NULL,
  deleted TINYINT NULL,
  entity_id INTEGER NULL,
  revision_id INTEGER NULL,
  language VARCHAR(32) NULL,
  delta INTEGER NULL,
  field_image_fid INTEGER NOT NULL,
  field_image_alt VARCHAR(128) NOT NULL,
  field_image_title VARCHAR(128) NOT NULL,
  PRIMARY KEY(entity_type, entity_id, revision_id, deleted, delta, language),
);

CREATE TABLE field_revision_field_tags (
  entity_type VARCHAR(128) NULL,
  bundle VARCHAR(128) NULL,
  deleted TINYINT NULL,
  entity_id INTEGER NULL,
  revision_id INTEGER NULL,
  language VARCHAR(32) NULL,
  delta INTEGER NULL,
  field_tags_tid INTEGER NOT NULL,
  PRIMARY KEY(entity_type, entity_id, revision_id, deleted, delta, language),
);

CREATE TABLE file_managed (
  fid INTEGER NOT NULL,
  uid INTEGER NULL,
  filename VARCHAR(255) NULL,
  uri VARCHAR(255) NULL,
  filemime VARCHAR(255) NULL,
  filesize INTEGER NULL,
  status TINYINT NULL,
  timestamp INTEGER NULL,
  PRIMARY KEY(fid),
);

CREATE TABLE file_usage (
  fid INTEGER NULL,
  module VARCHAR(255) NULL,
  type VARCHAR(64) NULL,
  id INTEGER NULL,
  count INTEGER NULL,
  PRIMARY KEY(fid, type, id, module),
);

CREATE TABLE filter (
  format VARCHAR(255) NULL,
  module VARCHAR(64) NULL,
  name VARCHAR(32) NULL,
  weight INTEGER NULL,
  status INTEGER NULL,
  settings BLOB NOT NULL,
  PRIMARY KEY(format, name),
);

CREATE TABLE filter_format (
  format VARCHAR(255) NULL,
  name VARCHAR(255) NULL,
  cache TINYINT NULL,
  status INTEGER NULL,
  weight INTEGER NULL,
  PRIMARY KEY(format),
);

CREATE TABLE flood (
  fid INTEGER NOT NULL,
  event VARCHAR(64) NULL,
  identifier VARCHAR(128) NULL,
  timestamp INTEGER NULL,
  expiration INTEGER NULL,
  PRIMARY KEY(fid),
);

CREATE TABLE history (
  uid INTEGER NULL,
  nid INTEGER NULL,
  timestamp INTEGER NULL,
  PRIMARY KEY(uid, nid),
);

CREATE TABLE image_effects (
  ieid INTEGER NOT NULL,
  isid INTEGER NULL,
  weight INTEGER NULL,
  name VARCHAR(255) NULL,
  data BLOB NULL,
  PRIMARY KEY(ieid),
);

CREATE TABLE image_styles (
  isid INTEGER NOT NULL,
  name VARCHAR(255) NULL,
  PRIMARY KEY(isid),
);

CREATE TABLE menu_custom (
  menu_name VARCHAR(32) NULL,
  title VARCHAR(255) NULL,
  description TEXT NOT NULL,
  PRIMARY KEY(menu_name)
);

CREATE TABLE menu_links (
  menu_name VARCHAR(32) NULL,
  mlid INTEGER NOT NULL,
  plid INTEGER NULL,
  link_path VARCHAR(255) NULL,
  router_path VARCHAR(255) NULL,
  link_title VARCHAR(255) NULL,
  options BLOB NOT NULL,
  module VARCHAR(255) NULL,
  hidden SMALLINT NULL,
  external SMALLINT NULL,
  has_children SMALLINT NULL,
  expanded SMALLINT NULL,
  weight INTEGER NULL,
  depth SMALLINT NULL,
  customized SMALLINT NULL,
  p1 INTEGER NULL,
  p2 INTEGER NULL,
  p3 INTEGER NULL,
  p4 INTEGER NULL,
  p5 INTEGER NULL,
  p6 INTEGER NULL,
  p7 INTEGER NULL,
  p8 INTEGER NULL,
  p9 INTEGER NULL,
  updated SMALLINT NULL,
  PRIMARY KEY(mlid),
);

CREATE TABLE menu_router (
  path VARCHAR(255) NULL,
  load_functions BLOB NULL,
  to_arg_functions BLOB NULL,
  access_callback VARCHAR(255) NULL,
  access_arguments BLOB NOT NULL,
  page_callback VARCHAR(255) NULL,
  page_arguments BLOB NOT NULL,
  delivery_callback VARCHAR(255) NULL,
  fit INTEGER NULL,
  number_parts SMALLINT NULL,
  context INTEGER NULL,
  tab_parent VARCHAR(255) NULL,
  tab_root VARCHAR(255) NULL,
  title VARCHAR(255) NULL,
  title_callback VARCHAR(255) NULL,
  title_arguments VARCHAR(255) NULL,
  theme_callback VARCHAR(255) NULL,
  theme_arguments VARCHAR(255) NULL,
  type INTEGER NULL,
  description TEXT NULL,
  position VARCHAR(255) NULL,
  weight INTEGER NULL,
  include_file TEXT NOT NULL,
  PRIMARY KEY(path),
);

CREATE TABLE node (
  nid INTEGER NOT NULL,
  vid INTEGER NULL,
  type VARCHAR(32) NULL,
  language VARCHAR(12) NULL,
  title VARCHAR(255) NULL,
  uid INTEGER NULL,
  status INTEGER NULL,
  created INTEGER NULL,
  changed INTEGER NULL,
  comment INTEGER NULL,
  promote INTEGER NULL,
  sticky INTEGER NULL,
  tnid INTEGER NULL,
  translate INTEGER NULL,
  PRIMARY KEY(nid),
);

CREATE TABLE node_access (
  nid INTEGER NULL,
  gid INTEGER NULL,
  realm VARCHAR(255) NULL,
  grant_view INTEGER NULL,
  grant_update INTEGER NULL,
  grant_delete INTEGER NULL,
  PRIMARY KEY(nid, gid, realm)
);

CREATE TABLE node_comment_statistics (
  nid INTEGER NULL,
  cid INTEGER NULL,
  last_comment_timestamp INTEGER NULL,
  last_comment_name VARCHAR(60) NOT NULL,
  last_comment_uid INTEGER NULL,
  comment_count INTEGER NULL,
  PRIMARY KEY(nid),
);

CREATE TABLE node_revision (
  nid INTEGER NULL,
  vid INTEGER NOT NULL,
  uid INTEGER NULL,
  title VARCHAR(255) NULL,
  log TEXT NULL,
  timestamp INTEGER NULL,
  status INTEGER NULL,
  comment INTEGER NULL,
  promote INTEGER NULL,
  sticky INTEGER NULL,
  PRIMARY KEY(vid),
);

CREATE TABLE node_type (
  type VARCHAR(32) NULL,
  name VARCHAR(255) NULL,
  base VARCHAR(255) NULL,
  module VARCHAR(255) NULL,
  description TEXT NULL,
  help TEXT NULL,
  has_title INTEGER NULL,
  title_label VARCHAR(255) NULL,
  custom TINYINT NULL,
  modified TINYINT NULL,
  locked TINYINT NULL,
  disabled TINYINT NULL,
  orig_type VARCHAR(255) NULL,
  PRIMARY KEY(type)
);

CREATE TABLE queue (
  item_id INTEGER NOT NULL,
  name VARCHAR(255) NULL,
  data BLOB NOT NULL,
  expire INTEGER NULL,
  created INTEGER NULL,
  PRIMARY KEY(item_id),
);

CREATE TABLE rdf_mapping (
  type VARCHAR(128) NULL,
  bundle VARCHAR(128) NULL,
  mapping BLOB NOT NULL,
  PRIMARY KEY(type, bundle)
);

CREATE TABLE registry (
  name VARCHAR(255) NULL,
  type VARCHAR(9) NULL,
  filename VARCHAR(255) NULL,
  module VARCHAR(255) NULL,
  weight INTEGER NULL,
  PRIMARY KEY(name, type),
);

CREATE TABLE registry_file (
  filename VARCHAR(255) NULL,
  hash VARCHAR(64) NULL,
  PRIMARY KEY(filename)
);

CREATE TABLE role (
  rid INTEGER NOT NULL,
  name VARCHAR(64) NULL,
  weight INTEGER NULL,
  PRIMARY KEY(rid),
);

CREATE TABLE role_permission (
  rid INTEGER NULL,
  permission VARCHAR(128) NULL,
  module VARCHAR(255) NULL,
  PRIMARY KEY(rid, permission),
);

CREATE TABLE search_dataset (
  sid INTEGER NULL,
  type VARCHAR(16) NULL,
  data TEXT NULL,
  reindex INTEGER NULL,
  PRIMARY KEY(sid, type)
);

CREATE TABLE search_index (
  word VARCHAR(50) NULL,
  sid INTEGER NULL,
  type VARCHAR(16) NULL,
  score FLOAT NOT NULL,
  PRIMARY KEY(word, sid, type),
);

CREATE TABLE search_node_links (
  sid INTEGER NULL,
  type VARCHAR(16) NULL,
  nid INTEGER NULL,
  caption TEXT NOT NULL,
  PRIMARY KEY(sid, type, nid),
);

CREATE TABLE search_total (
  word VARCHAR(50) NULL,
  count FLOAT NOT NULL,
  PRIMARY KEY(word)
);

CREATE TABLE semaphore (
  name VARCHAR(255) NULL,
  value VARCHAR(255) NULL,
  expire DOUBLE NULL,
  PRIMARY KEY(name),
);

CREATE TABLE sequences (
  value INTEGER NOT NULL,
  PRIMARY KEY(value)
);

CREATE TABLE sessions (
  uid INTEGER NULL,
  sid VARCHAR(128) NULL,
  ssid VARCHAR(128) NULL,
  hostname VARCHAR(128) NULL,
  timestamp INTEGER NULL,
  cache INTEGER NULL,
  session BLOB NOT NULL,
  PRIMARY KEY(sid, ssid),
);

CREATE TABLE shortcut_set (
  set_name VARCHAR(32) NULL,
  title VARCHAR(255) NULL,
  PRIMARY KEY(set_name)
);

CREATE TABLE shortcut_set_users (
  uid INTEGER NULL,
  set_name VARCHAR(32) NULL,
  PRIMARY KEY(uid),
);

CREATE TABLE system (
  filename VARCHAR(255) NULL,
  name VARCHAR(255) NULL,
  type VARCHAR(12) NULL,
  owner VARCHAR(255) NULL,
  status INTEGER NULL,
  bootstrap INTEGER NULL,
  schema_version SMALLINT NULL,
  weight INTEGER NULL,
  info BLOB NOT NULL,
  PRIMARY KEY(filename),
);

CREATE TABLE taxonomy_index (
  nid INTEGER NULL,
  tid INTEGER NULL,
  sticky TINYINT NOT NULL,
  created INTEGER NULL,
);

CREATE TABLE taxonomy_term_data (
  tid INTEGER NOT NULL,
  vid INTEGER NULL,
  name VARCHAR(255) NULL,
  description TEXT NOT NULL,
  format VARCHAR(255) NOT NULL,
  weight INTEGER NULL,
  PRIMARY KEY(tid),
);

CREATE TABLE taxonomy_term_hierarchy (
  tid INTEGER NULL,
  parent INTEGER NULL,
  PRIMARY KEY(tid, parent),
);

CREATE TABLE taxonomy_vocabulary (
  vid INTEGER NOT NULL,
  name VARCHAR(255) NULL,
  machine_name VARCHAR(255) NULL,
  description TEXT NOT NULL,
  hierarchy INTEGER NULL,
  module VARCHAR(255) NULL,
  weight INTEGER NULL,
  PRIMARY KEY(vid),
);

CREATE TABLE url_alias (
  pid INTEGER NOT NULL,
  source VARCHAR(255) NULL,
  alias VARCHAR(255) NULL,
  language VARCHAR(12) NULL,
  PRIMARY KEY(pid),
);

CREATE TABLE users (
  uid INTEGER NULL,
  name VARCHAR(60) NULL,
  pass VARCHAR(128) NULL,
  mail VARCHAR(254) NOT NULL,
  theme VARCHAR(255) NULL,
  signature VARCHAR(255) NULL,
  signature_format VARCHAR(255) NOT NULL,
  created INTEGER NULL,
  access INTEGER NULL,
  login INTEGER NULL,
  status TINYINT NULL,
  timezone VARCHAR(32) NOT NULL,
  language VARCHAR(12) NULL,
  picture INTEGER NULL,
  init VARCHAR(254) NOT NULL,
  data BLOB NOT NULL,
  PRIMARY KEY(uid),
);

CREATE TABLE users_roles (
  uid INTEGER NULL,
  rid INTEGER NULL,
  PRIMARY KEY(uid, rid),
);

CREATE TABLE variable (
  name VARCHAR(128) NULL,
  value BLOB NULL,
  PRIMARY KEY(name)
);

CREATE TABLE watchdog (
  wid INTEGER NOT NULL,
  uid INTEGER NULL,
  type VARCHAR(64) NULL,
  message TEXT NULL,
  variables BLOB NULL,
  severity INTEGER NULL,
  link VARCHAR(255) NOT NULL,
  location TEXT NULL,
  referer TEXT NOT NULL,
  hostname VARCHAR(128) NULL,
  timestamp INTEGER NULL,
  PRIMARY KEY(wid),
);


