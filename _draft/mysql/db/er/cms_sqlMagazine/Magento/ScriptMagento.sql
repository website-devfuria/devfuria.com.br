CREATE TABLE adminnotification_inbox (
  notification_id INTEGER NOT NULL,
  severity INTEGER NULL,
  date_added DATETIME NULL,
  title VARCHAR(255) NULL,
  description TEXT NOT NULL,
  url VARCHAR(255) NULL,
  is_read INTEGER NULL,
  is_remove INTEGER NULL,
  PRIMARY KEY(notification_id),
);

CREATE TABLE admin_assert (
  assert_id INTEGER NOT NULL,
  assert_type VARCHAR(20) NULL,
  assert_data TEXT NOT NULL,
  PRIMARY KEY(assert_id)
);

CREATE TABLE admin_role (
  role_id INTEGER NOT NULL,
  parent_id INTEGER NULL,
  tree_level INTEGER NULL,
  sort_order INTEGER NULL,
  role_type CHAR NULL,
  user_id INTEGER NULL,
  role_name VARCHAR(50) NULL,
  PRIMARY KEY(role_id),
);

CREATE TABLE admin_rule (
  rule_id INTEGER NOT NULL,
  role_id INTEGER NULL,
  resource_id VARCHAR(255) NULL,
  privileges VARCHAR(20) NULL,
  assert_id INTEGER NULL,
  role_type CHAR NOT NULL,
  permission VARCHAR(10) NOT NULL,
  PRIMARY KEY(rule_id),
);

CREATE TABLE admin_user (
  user_id INTEGER NOT NULL,
  firstname VARCHAR(32) NULL,
  lastname VARCHAR(32) NULL,
  email VARCHAR(128) NULL,
  username VARCHAR(40) NULL,
  password VARCHAR(40) NULL,
  created DATETIME NULL,
  modified DATETIME NOT NULL,
  logdate DATETIME NOT NULL,
  lognum INTEGER NULL,
  reload_acl_flag TINYINT NULL,
  is_active TINYINT NULL,
  extra TEXT NOT NULL,
  PRIMARY KEY(user_id)
);

CREATE TABLE api_assert (
  assert_id INTEGER NOT NULL,
  assert_type VARCHAR(20) NULL,
  assert_data TEXT NOT NULL,
  PRIMARY KEY(assert_id)
);

CREATE TABLE api_role (
  role_id INTEGER NOT NULL,
  parent_id INTEGER NULL,
  tree_level INTEGER NULL,
  sort_order INTEGER NULL,
  role_type CHAR NULL,
  user_id INTEGER NULL,
  role_name VARCHAR(50) NULL,
  PRIMARY KEY(role_id),
);

CREATE TABLE api_rule (
  rule_id INTEGER NOT NULL,
  role_id INTEGER NULL,
  resource_id VARCHAR(255) NULL,
  privileges VARCHAR(20) NULL,
  assert_id INTEGER NULL,
  role_type CHAR NOT NULL,
  permission VARCHAR(10) NOT NULL,
  PRIMARY KEY(rule_id),
);

CREATE TABLE api_user (
  user_id INTEGER NOT NULL,
  firstname VARCHAR(32) NULL,
  lastname VARCHAR(32) NULL,
  email VARCHAR(128) NULL,
  username VARCHAR(40) NULL,
  api_key VARCHAR(40) NULL,
  created DATETIME NULL,
  modified DATETIME NOT NULL,
  logdate DATETIME NOT NULL,
  lognum INTEGER NULL,
  reload_acl_flag TINYINT NULL,
  is_active TINYINT NULL,
  PRIMARY KEY(user_id)
);

CREATE TABLE catalogindex_eav (
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  attribute_id INTEGER NULL,
  value INTEGER NULL,
  PRIMARY KEY(store_id, entity_id, attribute_id, value),
);

CREATE TABLE catalogindex_minimal_price (
  index_id INTEGER NOT NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  customer_group_id INTEGER NULL,
  qty DECIMAL NULL,
  value DECIMAL NULL,
  PRIMARY KEY(index_id),
);

CREATE TABLE catalogindex_price (
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  attribute_id INTEGER NULL,
  customer_group_id INTEGER NULL,
  qty DECIMAL NULL,
  value DECIMAL NULL,
);

CREATE TABLE cataloginventory_stock (
  stock_id INTEGER NOT NULL,
  stock_name VARCHAR(255) NULL,
  PRIMARY KEY(stock_id)
);

CREATE TABLE cataloginventory_stock_item (
  item_id INTEGER NOT NULL,
  product_id INTEGER NULL,
  stock_id INTEGER NULL,
  qty DECIMAL NULL,
  min_qty DECIMAL NULL,
  use_config_min_qty INTEGER NULL,
  is_qty_decimal INTEGER NULL,
  backorders INTEGER NULL,
  use_config_backorders INTEGER NULL,
  min_sale_qty DECIMAL NULL,
  use_config_min_sale_qty INTEGER NULL,
  max_sale_qty DECIMAL NULL,
  use_config_max_sale_qty INTEGER NULL,
  is_in_stock INTEGER NULL,
  low_stock_date DATETIME NOT NULL,
  notify_stock_qty DECIMAL NOT NULL,
  use_config_notify_stock_qty INTEGER NULL,
  manage_stock INTEGER NULL,
  use_config_manage_stock INTEGER NULL,
  PRIMARY KEY(item_id),
);

CREATE TABLE catalogrule (
  rule_id INTEGER NOT NULL,
  name VARCHAR(255) NULL,
  description TEXT NULL,
  from_date DATE NOT NULL,
  to_date DATE NOT NULL,
  customer_group_ids VARCHAR(255) NULL,
  is_active TINYINT NULL,
  conditions_serialized TEXT NULL,
  actions_serialized TEXT NULL,
  stop_rules_processing TINYINT NULL,
  sort_order INTEGER NULL,
  simple_action VARCHAR(32) NULL,
  discount_amount DECIMAL NULL,
  website_ids TEXT NOT NULL,
  PRIMARY KEY(rule_id),
);

CREATE TABLE catalogrule_product (
  rule_product_id INTEGER NOT NULL,
  rule_id INTEGER NULL,
  from_time INTEGER NULL,
  to_time INTEGER NULL,
  customer_group_id INTEGER NULL,
  product_id INTEGER NULL,
  action_operator CHAR NULL,
  action_amount DECIMAL NULL,
  action_stop TINYINT NULL,
  sort_order INTEGER NULL,
  website_id INTEGER NULL,
  PRIMARY KEY(rule_product_id),
);

CREATE TABLE catalogrule_product_price (
  rule_product_price_id INTEGER NOT NULL,
  rule_date DATE NULL,
  customer_group_id INTEGER NULL,
  product_id INTEGER NULL,
  rule_price DECIMAL NULL,
  website_id INTEGER NULL,
  latest_start_date DATE NOT NULL,
  earliest_end_date DATE NOT NULL,
  PRIMARY KEY(rule_product_price_id),
);

CREATE TABLE catalogsearch_query (
  query_id INTEGER NOT NULL,
  query_text VARCHAR(255) NULL,
  num_results INTEGER NULL,
  popularity INTEGER NULL,
  redirect VARCHAR(255) NULL,
  synonim_for VARCHAR(255) NULL,
  store_id INTEGER NULL,
  display_in_terms TINYINT NULL,
  updated_at DATETIME NULL,
  PRIMARY KEY(query_id),
);

CREATE TABLE catalog_category_entity (
  entity_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_set_id INTEGER NULL,
  parent_id INTEGER NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  path VARCHAR(255) NULL,
  position INTEGER NULL,
  level INTEGER NULL,
  PRIMARY KEY(entity_id),
);

CREATE TABLE catalog_category_entity_datetime (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DATETIME NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_category_entity_decimal (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DECIMAL NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_category_entity_int (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value INTEGER NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_category_entity_text (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value TEXT NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_category_entity_varchar (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_category_product (
  category_id INTEGER NULL,
  product_id INTEGER NULL,
  position INTEGER NULL,
  PRIMARY KEY(category_id, product_id),
);

CREATE TABLE catalog_category_product_index (
  category_id INTEGER NULL,
  product_id INTEGER NULL,
  position INTEGER NULL,
  is_parent INTEGER NULL,
  PRIMARY KEY(category_id, product_id),
);

CREATE TABLE catalog_compare_item (
  catalog_compare_item_id INTEGER NOT NULL,
  visitor_id INTEGER NULL,
  customer_id INTEGER NOT NULL,
  product_id INTEGER NULL,
  PRIMARY KEY(catalog_compare_item_id),
);

CREATE TABLE catalog_product_bundle_option (
  option_id INTEGER NOT NULL,
  parent_id INTEGER NULL,
  required INTEGER NULL,
  position INTEGER NULL,
  type VARCHAR(255) NULL,
  PRIMARY KEY(option_id),
);

CREATE TABLE catalog_product_bundle_option_value (
  value_id INTEGER NOT NULL,
  option_id INTEGER NULL,
  store_id INTEGER NULL,
  title VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_bundle_selection (
  selection_id INTEGER NOT NULL,
  option_id INTEGER NULL,
  parent_product_id INTEGER NULL,
  product_id INTEGER NULL,
  position INTEGER NULL,
  is_default INTEGER NULL,
  selection_price_type INTEGER NULL,
  selection_price_value DECIMAL NULL,
  selection_qty DECIMAL NULL,
  selection_can_change_qty TINYINT NULL,
  PRIMARY KEY(selection_id),
);

CREATE TABLE catalog_product_enabled_index (
  product_id INTEGER NULL,
  store_id INTEGER NULL,
  visibility INTEGER NULL,
  PRIMARY KEY(product_id, store_id),
);

CREATE TABLE catalog_product_entity (
  entity_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_set_id INTEGER NULL,
  type_id VARCHAR(32) NULL,
  sku VARCHAR(64) NOT NULL,
  category_ids TEXT NOT NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  has_options SMALLINT NULL,
  PRIMARY KEY(entity_id),
);

CREATE TABLE catalog_product_entity_datetime (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DATETIME NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_entity_decimal (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DECIMAL NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_entity_gallery (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  position INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_entity_int (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value INTEGER NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_entity_media_gallery (
  value_id INTEGER NOT NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value VARCHAR(255) NOT NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_entity_media_gallery_value (
  value_id INTEGER NULL,
  store_id INTEGER NULL,
  label VARCHAR(255) NOT NULL,
  position INTEGER NOT NULL,
  disabled INTEGER NULL,
  PRIMARY KEY(value_id, store_id),
);

CREATE TABLE catalog_product_entity_text (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value TEXT NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_entity_tier_price (
  value_id INTEGER NOT NULL,
  entity_id INTEGER NULL,
  all_groups INTEGER NULL,
  customer_group_id INTEGER NULL,
  qty DECIMAL NULL,
  value DECIMAL NULL,
  website_id INTEGER NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_entity_varchar (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_link (
  link_id INTEGER NOT NULL,
  product_id INTEGER NULL,
  linked_product_id INTEGER NULL,
  link_type_id INTEGER NULL,
  PRIMARY KEY(link_id),
);

CREATE TABLE catalog_product_link_attribute (
  product_link_attribute_id INTEGER NOT NULL,
  link_type_id INTEGER NULL,
  product_link_attribute_code VARCHAR(32) NULL,
  data_type VARCHAR(32) NULL,
  PRIMARY KEY(product_link_attribute_id),
);

CREATE TABLE catalog_product_link_attribute_decimal (
  value_id INTEGER NOT NULL,
  product_link_attribute_id INTEGER NOT NULL,
  link_id INTEGER NOT NULL,
  value DECIMAL NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_link_attribute_int (
  value_id INTEGER NOT NULL,
  product_link_attribute_id INTEGER NOT NULL,
  link_id INTEGER NOT NULL,
  value INTEGER NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_link_attribute_varchar (
  value_id INTEGER NOT NULL,
  product_link_attribute_id INTEGER NULL,
  link_id INTEGER NOT NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_link_type (
  link_type_id INTEGER NOT NULL,
  code VARCHAR(32) NULL,
  PRIMARY KEY(link_type_id)
);

CREATE TABLE catalog_product_option (
  option_id INTEGER NOT NULL,
  product_id INTEGER NULL,
  type VARCHAR(50) NULL,
  is_require TINYINT NULL,
  sku VARCHAR(64) NULL,
  max_characters INTEGER NOT NULL,
  file_extension VARCHAR(50) NOT NULL,
  sort_order INTEGER NULL,
  PRIMARY KEY(option_id),
);

CREATE TABLE catalog_product_option_price (
  option_price_id INTEGER NOT NULL,
  option_id INTEGER NULL,
  store_id INTEGER NULL,
  price DECIMAL NULL,
  price_type CHAR NULL,
  PRIMARY KEY(option_price_id),
);

CREATE TABLE catalog_product_option_title (
  option_title_id INTEGER NOT NULL,
  option_id INTEGER NULL,
  store_id INTEGER NULL,
  title VARCHAR(50) NULL,
  PRIMARY KEY(option_title_id),
);

CREATE TABLE catalog_product_option_type_price (
  option_type_price_id INTEGER NOT NULL,
  option_type_id INTEGER NULL,
  store_id INTEGER NULL,
  price DECIMAL NULL,
  price_type CHAR NULL,
  PRIMARY KEY(option_type_price_id),
);

CREATE TABLE catalog_product_option_type_title (
  option_type_title_id INTEGER NOT NULL,
  option_type_id INTEGER NULL,
  store_id INTEGER NULL,
  title VARCHAR(50) NULL,
  PRIMARY KEY(option_type_title_id),
);

CREATE TABLE catalog_product_option_type_value (
  option_type_id INTEGER NOT NULL,
  option_id INTEGER NULL,
  sku VARCHAR(64) NULL,
  sort_order INTEGER NULL,
  PRIMARY KEY(option_type_id),
);

CREATE TABLE catalog_product_super_attribute (
  product_super_attribute_id INTEGER NOT NULL,
  product_id INTEGER NULL,
  attribute_id INTEGER NULL,
  position INTEGER NULL,
  PRIMARY KEY(product_super_attribute_id),
);

CREATE TABLE catalog_product_super_attribute_label (
  value_id INTEGER NOT NULL,
  product_super_attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_super_attribute_pricing (
  value_id INTEGER NOT NULL,
  product_super_attribute_id INTEGER NULL,
  value_index VARCHAR(255) NULL,
  is_percent INTEGER NOT NULL,
  pricing_value DECIMAL NOT NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE catalog_product_super_link (
  link_id INTEGER NOT NULL,
  product_id INTEGER NULL,
  parent_id INTEGER NULL,
  PRIMARY KEY(link_id),
);

CREATE TABLE catalog_product_website (
  product_id INTEGER NOT NULL,
  website_id INTEGER NULL,
  PRIMARY KEY(product_id, website_id),
);

CREATE TABLE checkout_agreement (
  agreement_id INTEGER NOT NULL,
  name VARCHAR(255) NULL,
  content TEXT NULL,
  content_height VARCHAR(25) NOT NULL,
  checkbox_text TEXT NULL,
  is_active TINYINT NULL,
  PRIMARY KEY(agreement_id)
);

CREATE TABLE checkout_agreement_store (
  agreement_id INTEGER NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(agreement_id, store_id),
);

CREATE TABLE cms_block (
  block_id SMALLINT NOT NULL,
  title VARCHAR(255) NULL,
  identifier VARCHAR(255) NULL,
  content TEXT NOT NULL,
  creation_time DATETIME NOT NULL,
  update_time DATETIME NOT NULL,
  is_active TINYINT NULL,
  PRIMARY KEY(block_id)
);

CREATE TABLE cms_block_store (
  block_id SMALLINT NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(block_id, store_id),
);

CREATE TABLE cms_page (
  page_id SMALLINT NOT NULL,
  title VARCHAR(255) NULL,
  root_template VARCHAR(255) NULL,
  meta_keywords TEXT NULL,
  meta_description TEXT NULL,
  identifier VARCHAR(100) NULL,
  content TEXT NOT NULL,
  creation_time DATETIME NOT NULL,
  update_time DATETIME NOT NULL,
  is_active TINYINT NULL,
  sort_order TINYINT NULL,
  layout_update_xml TEXT NOT NULL,
  custom_theme VARCHAR(100) NOT NULL,
  custom_theme_from DATE NOT NULL,
  custom_theme_to DATE NOT NULL,
  PRIMARY KEY(page_id),
);

CREATE TABLE cms_page_store (
  page_id SMALLINT NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(page_id, store_id),
);

CREATE TABLE core_config_data (
  config_id INTEGER NOT NULL,
  scope CHAR NULL,
  scope_id INTEGER NULL,
  path VARCHAR(255) NULL,
  value TEXT NULL,
  PRIMARY KEY(config_id),
);

CREATE TABLE core_email_template (
  template_id INTEGER NOT NULL,
  template_code VARCHAR(150) NOT NULL,
  template_text TEXT NOT NULL,
  template_type INTEGER NOT NULL,
  template_subject VARCHAR(200) NOT NULL,
  template_sender_name VARCHAR(200) NOT NULL,
  template_sender_email VARCHAR(200) NOT NULL,
  added_at DATETIME NOT NULL,
  modified_at DATETIME NOT NULL,
  PRIMARY KEY(template_id),
);

CREATE TABLE core_layout_link (
  layout_link_id INTEGER NOT NULL,
  store_id INTEGER NULL,
  package VARCHAR(64) NULL,
  theme VARCHAR(64) NULL,
  layout_update_id INTEGER NULL,
  PRIMARY KEY(layout_link_id),
);

CREATE TABLE core_layout_update (
  layout_update_id INTEGER NOT NULL,
  handle VARCHAR(255) NOT NULL,
  xml TEXT NOT NULL,
  PRIMARY KEY(layout_update_id),
);

CREATE TABLE core_resource (
  code VARCHAR(50) NULL,
  version VARCHAR(50) NULL,
  PRIMARY KEY(code)
);

CREATE TABLE core_session (
  session_id VARCHAR(255) NULL,
  website_id INTEGER NOT NULL,
  session_expires INTEGER NULL,
  session_data TEXT NULL,
  PRIMARY KEY(session_id),
);

CREATE TABLE core_store (
  store_id INTEGER NOT NULL,
  code VARCHAR(32) NULL,
  website_id INTEGER NOT NULL,
  group_id INTEGER NULL,
  name VARCHAR(32) NULL,
  sort_order INTEGER NULL,
  is_active INTEGER NULL,
  PRIMARY KEY(store_id),
);

CREATE TABLE core_store_group (
  group_id INTEGER NOT NULL,
  website_id INTEGER NULL,
  name VARCHAR(32) NULL,
  root_category_id INTEGER NULL,
  default_store_id INTEGER NULL,
  PRIMARY KEY(group_id),
);

CREATE TABLE core_translate (
  key_id INTEGER NOT NULL,
  string VARCHAR(255) NULL,
  store_id INTEGER NULL,
  translate VARCHAR(255) NULL,
  locale VARCHAR(20) NULL,
  PRIMARY KEY(key_id),
);

CREATE TABLE core_url_rewrite (
  url_rewrite_id INTEGER NOT NULL,
  store_id INTEGER NULL,
  category_id INTEGER NOT NULL,
  product_id INTEGER NOT NULL,
  id_path VARCHAR(255) NULL,
  request_path VARCHAR(255) NULL,
  target_path VARCHAR(255) NULL,
  is_system INTEGER NOT NULL,
  options VARCHAR(255) NULL,
  description VARCHAR(255) NOT NULL,
  PRIMARY KEY(url_rewrite_id),
);

CREATE TABLE core_website (
  website_id INTEGER NOT NULL,
  code VARCHAR(32) NULL,
  name VARCHAR(64) NULL,
  sort_order INTEGER NULL,
  default_group_id INTEGER NULL,
  is_default INTEGER NOT NULL,
  PRIMARY KEY(website_id),
);

CREATE TABLE cron_schedule (
  schedule_id INTEGER NOT NULL,
  job_code VARCHAR(255) NULL,
  status CHAR NULL,
  messages TEXT NOT NULL,
  created_at DATETIME NULL,
  scheduled_at DATETIME NULL,
  executed_at DATETIME NULL,
  finished_at DATETIME NULL,
  PRIMARY KEY(schedule_id),
);

CREATE TABLE customer_address_entity (
  entity_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_set_id INTEGER NULL,
  increment_id VARCHAR(50) NULL,
  parent_id INTEGER NOT NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  is_active INTEGER NULL,
  PRIMARY KEY(entity_id),
);

CREATE TABLE customer_address_entity_datetime (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DATETIME NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE customer_address_entity_decimal (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DECIMAL NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE customer_address_entity_int (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value INTEGER NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE customer_address_entity_text (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value TEXT NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE customer_address_entity_varchar (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE customer_entity (
  entity_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_set_id INTEGER NULL,
  website_id INTEGER NOT NULL,
  email VARCHAR(255) NULL,
  group_id INTEGER NULL,
  increment_id VARCHAR(50) NULL,
  store_id INTEGER NOT NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  is_active INTEGER NULL,
  PRIMARY KEY(entity_id),
);

CREATE TABLE customer_entity_datetime (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DATETIME NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE customer_entity_decimal (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DECIMAL NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE customer_entity_int (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value INTEGER NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE customer_entity_text (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value TEXT NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE customer_entity_varchar (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE customer_group (
  customer_group_id INTEGER NOT NULL,
  customer_group_code VARCHAR(32) NULL,
  tax_class_id INTEGER NULL,
  PRIMARY KEY(customer_group_id)
);

CREATE TABLE dataflow_batch (
  batch_id INTEGER NOT NULL,
  profile_id INTEGER NULL,
  store_id INTEGER NULL,
  adapter VARCHAR(128) NOT NULL,
  params TEXT NOT NULL,
  created_at DATETIME NOT NULL,
  PRIMARY KEY(batch_id),
);

CREATE TABLE dataflow_batch_export (
  batch_export_id INTEGER NOT NULL,
  batch_id INTEGER NULL,
  batch_data TEXT NOT NULL,
  status INTEGER NULL,
  PRIMARY KEY(batch_export_id),
);

CREATE TABLE dataflow_batch_import (
  batch_import_id INTEGER NOT NULL,
  batch_id INTEGER NULL,
  batch_data TEXT NOT NULL,
  status INTEGER NULL,
  PRIMARY KEY(batch_import_id),
);

CREATE TABLE dataflow_import_data (
  import_id INTEGER NOT NULL,
  session_id INTEGER NOT NULL,
  serial_number INTEGER NULL,
  value TEXT NOT NULL,
  status INTEGER NULL,
  PRIMARY KEY(import_id),
);

CREATE TABLE dataflow_profile (
  profile_id INTEGER NOT NULL,
  name VARCHAR(255) NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  actions_xml TEXT NOT NULL,
  gui_data TEXT NOT NULL,
  direction CHAR NOT NULL,
  entity_type VARCHAR(64) NULL,
  store_id INTEGER NULL,
  data_transfer CHAR NOT NULL,
  PRIMARY KEY(profile_id)
);

CREATE TABLE dataflow_profile_history (
  history_id INTEGER NOT NULL,
  profile_id INTEGER NULL,
  action_code VARCHAR(64) NOT NULL,
  user_id INTEGER NULL,
  performed_at DATETIME NOT NULL,
  PRIMARY KEY(history_id),
);

CREATE TABLE dataflow_session (
  session_id INTEGER NOT NULL,
  user_id INTEGER NULL,
  created_date DATETIME NOT NULL,
  file VARCHAR(255) NOT NULL,
  type VARCHAR(32) NOT NULL,
  direction VARCHAR(32) NOT NULL,
  comment VARCHAR(255) NOT NULL,
  PRIMARY KEY(session_id)
);

CREATE TABLE design_change (
  design_change_id INTEGER NOT NULL,
  store_id INTEGER NULL,
  design VARCHAR(255) NULL,
  date_from DATE NOT NULL,
  date_to DATE NOT NULL,
  PRIMARY KEY(design_change_id),
);

CREATE TABLE directory_country (
  country_id VARCHAR(2) NULL,
  iso2_code VARCHAR(2) NULL,
  iso3_code VARCHAR(3) NULL,
  PRIMARY KEY(country_id)
);

CREATE TABLE directory_country_format (
  country_format_id INTEGER NOT NULL,
  country_id CHAR NULL,
  type VARCHAR(30) NULL,
  format TEXT NULL,
  PRIMARY KEY(country_format_id),
);

CREATE TABLE directory_country_region (
  region_id INTEGER NOT NULL,
  country_id VARCHAR(4) NULL,
  code VARCHAR(32) NULL,
  default_name VARCHAR(255) NOT NULL,
  PRIMARY KEY(region_id),
);

CREATE TABLE directory_country_region_name (
  locale VARCHAR(8) NULL,
  region_id INTEGER NULL,
  name VARCHAR(64) NULL,
  PRIMARY KEY(locale, region_id),
);

CREATE TABLE directory_currency_rate (
  currency_from CHAR NULL,
  currency_to CHAR NULL,
  rate DECIMAL NULL,
  PRIMARY KEY(currency_from, currency_to),
);

CREATE TABLE eav_attribute (
  attribute_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_code VARCHAR(255) NULL,
  attribute_model VARCHAR(255) NOT NULL,
  backend_model VARCHAR(255) NOT NULL,
  backend_type CHAR NULL,
  backend_table VARCHAR(255) NOT NULL,
  frontend_model VARCHAR(255) NOT NULL,
  frontend_input VARCHAR(50) NOT NULL,
  frontend_label VARCHAR(255) NOT NULL,
  frontend_class VARCHAR(255) NOT NULL,
  source_model VARCHAR(255) NOT NULL,
  is_global INTEGER NULL,
  is_visible INTEGER NULL,
  is_required INTEGER NULL,
  is_user_defined INTEGER NULL,
  default_value TEXT NOT NULL,
  is_searchable INTEGER NULL,
  is_filterable INTEGER NULL,
  is_comparable INTEGER NULL,
  is_visible_on_front INTEGER NULL,
  is_unique INTEGER NULL,
  is_visible_in_advanced_search INTEGER NULL,
  is_configurable INTEGER NULL,
  apply_to VARCHAR(255) NULL,
  position INTEGER NULL,
  note VARCHAR(255) NULL,
  is_used_for_price_rules INTEGER NULL,
  PRIMARY KEY(attribute_id),
);

CREATE TABLE eav_attribute_group (
  attribute_group_id INTEGER NOT NULL,
  attribute_set_id INTEGER NULL,
  attribute_group_name VARCHAR(255) NULL,
  sort_order SMALLINT NULL,
  default_id INTEGER NOT NULL,
  PRIMARY KEY(attribute_group_id),
);

CREATE TABLE eav_attribute_option (
  option_id INTEGER NOT NULL,
  attribute_id INTEGER NULL,
  sort_order INTEGER NULL,
  PRIMARY KEY(option_id),
);

CREATE TABLE eav_attribute_option_value (
  value_id INTEGER NOT NULL,
  option_id INTEGER NULL,
  store_id INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE eav_attribute_set (
  attribute_set_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_set_name VARCHAR(255) NULL,
  sort_order SMALLINT NULL,
  PRIMARY KEY(attribute_set_id),
);

CREATE TABLE eav_entity (
  entity_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_set_id INTEGER NULL,
  increment_id VARCHAR(50) NULL,
  parent_id INTEGER NULL,
  store_id INTEGER NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  is_active INTEGER NULL,
  PRIMARY KEY(entity_id),
);

CREATE TABLE eav_entity_attribute (
  entity_attribute_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_set_id INTEGER NULL,
  attribute_group_id INTEGER NULL,
  attribute_id INTEGER NULL,
  sort_order SMALLINT NULL,
  PRIMARY KEY(entity_attribute_id),
);

CREATE TABLE eav_entity_datetime (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DATETIME NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE eav_entity_decimal (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DECIMAL NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE eav_entity_int (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value INTEGER NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE eav_entity_store (
  entity_store_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  store_id INTEGER NULL,
  increment_prefix VARCHAR(20) NULL,
  increment_last_id VARCHAR(50) NULL,
  PRIMARY KEY(entity_store_id),
);

CREATE TABLE eav_entity_text (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value TEXT NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE eav_entity_type (
  entity_type_id INTEGER NOT NULL,
  entity_type_code VARCHAR(50) NULL,
  entity_model VARCHAR(255) NULL,
  attribute_model VARCHAR(255) NULL,
  entity_table VARCHAR(255) NULL,
  value_table_prefix VARCHAR(255) NULL,
  entity_id_field VARCHAR(255) NULL,
  is_data_sharing INTEGER NULL,
  data_sharing_key VARCHAR(100) NOT NULL,
  default_attribute_set_id INTEGER NULL,
  increment_model VARCHAR(255) NULL,
  increment_per_store INTEGER NULL,
  increment_pad_length INTEGER NULL,
  increment_pad_char CHAR NULL,
  PRIMARY KEY(entity_type_id),
);

CREATE TABLE eav_entity_varchar (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  store_id INTEGER NULL,
  entity_id INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE gift_message (
  gift_message_id INTEGER NOT NULL,
  customer_id INTEGER NULL,
  sender VARCHAR(255) NULL,
  recipient VARCHAR(255) NULL,
  message TEXT NULL,
  PRIMARY KEY(gift_message_id)
);

CREATE TABLE googlecheckout_api_debug (
  debug_id INTEGER NOT NULL,
  dir CHAR NOT NULL,
  url VARCHAR(255) NOT NULL,
  request_body TEXT NOT NULL,
  response_body TEXT NOT NULL,
  PRIMARY KEY(debug_id)
);

CREATE TABLE log_customer (
  log_id INTEGER NOT NULL,
  visitor_id INTEGER NOT NULL,
  customer_id INTEGER NULL,
  login_at DATETIME NULL,
  logout_at DATETIME NOT NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(log_id)
);

CREATE TABLE log_quote (
  quote_id INTEGER NULL,
  visitor_id INTEGER NOT NULL,
  created_at DATETIME NULL,
  deleted_at DATETIME NOT NULL,
  PRIMARY KEY(quote_id)
);

CREATE TABLE log_summary (
  summary_id INTEGER NOT NULL,
  store_id INTEGER NULL,
  type_id INTEGER NOT NULL,
  visitor_count INTEGER NULL,
  customer_count INTEGER NULL,
  add_date DATETIME NULL,
  PRIMARY KEY(summary_id)
);

CREATE TABLE log_summary_type (
  type_id INTEGER NOT NULL,
  type_code VARCHAR(64) NULL,
  period INTEGER NULL,
  period_type CHAR NULL,
  PRIMARY KEY(type_id)
);

CREATE TABLE log_url (
  url_id INTEGER NULL,
  visitor_id INTEGER NOT NULL,
  visit_time DATETIME NULL
);

CREATE TABLE log_url_info (
  url_id INTEGER NOT NULL,
  url VARCHAR(255) NULL,
  referer VARCHAR(255) NOT NULL,
  PRIMARY KEY(url_id)
);

CREATE TABLE log_visitor (
  visitor_id INTEGER NOT NULL,
  session_id CHAR NULL,
  first_visit_at DATETIME NOT NULL,
  last_visit_at DATETIME NULL,
  last_url_id INTEGER NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(visitor_id)
);

CREATE TABLE log_visitor_info (
  visitor_id INTEGER NULL,
  http_referer VARCHAR(255) NOT NULL,
  http_user_agent VARCHAR(255) NOT NULL,
  http_accept_charset VARCHAR(255) NOT NULL,
  http_accept_language VARCHAR(255) NOT NULL,
  server_addr BIGINT NOT NULL,
  remote_addr BIGINT NOT NULL,
  PRIMARY KEY(visitor_id)
);

CREATE TABLE newsletter_problem (
  problem_id INTEGER NOT NULL,
  subscriber_id INTEGER NOT NULL,
  queue_id INTEGER NULL,
  problem_error_code INTEGER NOT NULL,
  problem_error_text VARCHAR(200) NOT NULL,
  PRIMARY KEY(problem_id),
);

CREATE TABLE newsletter_queue (
  queue_id INTEGER NOT NULL,
  template_id INTEGER NULL,
  queue_status INTEGER NULL,
  queue_start_at DATETIME NOT NULL,
  queue_finish_at DATETIME NOT NULL,
  PRIMARY KEY(queue_id),
);

CREATE TABLE newsletter_queue_link (
  queue_link_id INTEGER NOT NULL,
  queue_id INTEGER NULL,
  subscriber_id INTEGER NULL,
  letter_sent_at DATETIME NOT NULL,
  PRIMARY KEY(queue_link_id),
);

CREATE TABLE newsletter_queue_store_link (
  queue_id INTEGER NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(queue_id, store_id),
);

CREATE TABLE newsletter_subscriber (
  subscriber_id INTEGER NOT NULL,
  store_id INTEGER NOT NULL,
  change_status_at DATETIME NOT NULL,
  customer_id INTEGER NULL,
  subscriber_email VARCHAR(150) NULL,
  subscriber_status INTEGER NULL,
  subscriber_confirm_code VARCHAR(32) NOT NULL,
  PRIMARY KEY(subscriber_id),
);

CREATE TABLE newsletter_template (
  template_id INTEGER NOT NULL,
  template_code VARCHAR(150) NOT NULL,
  template_text TEXT NOT NULL,
  template_text_preprocessed TEXT NOT NULL,
  template_type INTEGER NOT NULL,
  template_subject VARCHAR(200) NOT NULL,
  template_sender_name VARCHAR(200) NOT NULL,
  template_sender_email VARCHAR(200) NOT NULL,
  template_actual INTEGER NOT NULL,
  added_at DATETIME NOT NULL,
  modified_at DATETIME NOT NULL,
  PRIMARY KEY(template_id),
);

CREATE TABLE paygate_authorizenet_debug (
  debug_id INTEGER NOT NULL,
  request_body TEXT NOT NULL,
  response_body TEXT NOT NULL,
  request_serialized TEXT NOT NULL,
  result_serialized TEXT NOT NULL,
  request_dump TEXT NOT NULL,
  result_dump TEXT NOT NULL,
  PRIMARY KEY(debug_id)
);

CREATE TABLE paypaluk_api_debug (
  debug_id INTEGER NOT NULL,
  debug_at TIMESTAMP NOT NULL,
  request_body TEXT NOT NULL,
  response_body TEXT NOT NULL,
  PRIMARY KEY(debug_id),
);

CREATE TABLE paypal_api_debug (
  debug_id INTEGER NOT NULL,
  debug_at TIMESTAMP NOT NULL,
  request_body TEXT NOT NULL,
  response_body TEXT NOT NULL,
  PRIMARY KEY(debug_id),
);

CREATE TABLE poll (
  poll_id INTEGER NOT NULL,
  poll_title VARCHAR(255) NULL,
  votes_count INTEGER NULL,
  store_id INTEGER NOT NULL,
  date_posted DATETIME NULL,
  date_closed DATETIME NOT NULL,
  active SMALLINT NULL,
  closed TINYINT NULL,
  answers_display SMALLINT NOT NULL,
  PRIMARY KEY(poll_id),
);

CREATE TABLE poll_answer (
  answer_id INTEGER NOT NULL,
  poll_id INTEGER NULL,
  answer_title VARCHAR(255) NULL,
  votes_count INTEGER NULL,
  answer_order SMALLINT NULL,
  PRIMARY KEY(answer_id),
);

CREATE TABLE poll_store (
  poll_id INTEGER NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(poll_id, store_id),
);

CREATE TABLE poll_vote (
  vote_id INTEGER NOT NULL,
  poll_id INTEGER NULL,
  poll_answer_id INTEGER NULL,
  ip_address BIGINT NOT NULL,
  customer_id INTEGER NOT NULL,
  vote_time TIMESTAMP NOT NULL,
  PRIMARY KEY(vote_id),
);

CREATE TABLE product_alert_price (
  alert_price_id INTEGER NOT NULL,
  customer_id INTEGER NULL,
  product_id INTEGER NULL,
  price DECIMAL NULL,
  website_id INTEGER NULL,
  add_date DATETIME NULL,
  last_send_date DATETIME NOT NULL,
  send_count INTEGER NULL,
  status INTEGER NULL,
  PRIMARY KEY(alert_price_id),
);

CREATE TABLE product_alert_stock (
  alert_stock_id INTEGER NOT NULL,
  customer_id INTEGER NULL,
  product_id INTEGER NULL,
  website_id INTEGER NULL,
  add_date DATETIME NULL,
  send_date DATETIME NOT NULL,
  send_count INTEGER NULL,
  status INTEGER NULL,
  PRIMARY KEY(alert_stock_id),
);

CREATE TABLE rating (
  rating_id INTEGER NOT NULL,
  entity_id INTEGER NULL,
  rating_code VARCHAR(64) NULL,
  position INTEGER NULL,
  PRIMARY KEY(rating_id),
);

CREATE TABLE rating_entity (
  entity_id INTEGER NOT NULL,
  entity_code VARCHAR(64) NULL,
  PRIMARY KEY(entity_id),
);

CREATE TABLE rating_option (
  option_id INTEGER NOT NULL,
  rating_id INTEGER NULL,
  code VARCHAR(32) NULL,
  value INTEGER NULL,
  position INTEGER NULL,
  PRIMARY KEY(option_id),
);

CREATE TABLE rating_option_vote (
  vote_id INTEGER NOT NULL,
  option_id INTEGER NULL,
  remote_ip VARCHAR(16) NULL,
  remote_ip_long INTEGER NULL,
  customer_id INTEGER NOT NULL,
  entity_pk_value INTEGER NULL,
  rating_id INTEGER NULL,
  review_id INTEGER NOT NULL,
  percent TINYINT NULL,
  value TINYINT NULL,
  PRIMARY KEY(vote_id),
);

CREATE TABLE rating_option_vote_aggregated (
  primary_id INTEGER NOT NULL,
  rating_id INTEGER NULL,
  entity_pk_value INTEGER NULL,
  vote_count INTEGER NULL,
  vote_value_sum INTEGER NULL,
  percent TINYINT NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(primary_id),
);

CREATE TABLE rating_store (
  rating_id INTEGER NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(rating_id, store_id),
);

CREATE TABLE rating_title (
  rating_id INTEGER NULL,
  store_id INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(rating_id, store_id),
);

CREATE TABLE report_event (
  event_id INTEGER NOT NULL,
  logged_at DATETIME NULL,
  event_type_id INTEGER NULL,
  object_id INTEGER NULL,
  subject_id INTEGER NULL,
  subtype INTEGER NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(event_id),
);

CREATE TABLE report_event_types (
  event_type_id INTEGER NOT NULL,
  event_name VARCHAR(64) NULL,
  customer_login INTEGER NULL,
  PRIMARY KEY(event_type_id)
);

CREATE TABLE review (
  review_id INTEGER NOT NULL,
  created_at DATETIME NULL,
  entity_id INTEGER NULL,
  entity_pk_value INTEGER NULL,
  status_id INTEGER NULL,
  PRIMARY KEY(review_id),
);

CREATE TABLE review_detail (
  detail_id INTEGER NOT NULL,
  review_id INTEGER NULL,
  store_id INTEGER NOT NULL,
  title VARCHAR(255) NULL,
  detail TEXT NULL,
  nickname VARCHAR(128) NULL,
  customer_id INTEGER NOT NULL,
  PRIMARY KEY(detail_id),
);

CREATE TABLE review_entity (
  entity_id INTEGER NOT NULL,
  entity_code VARCHAR(32) NULL,
  PRIMARY KEY(entity_id)
);

CREATE TABLE review_entity_summary (
  primary_id BIGINT NOT NULL,
  entity_pk_value BIGINT NULL,
  entity_type TINYINT NULL,
  reviews_count SMALLINT NULL,
  rating_summary TINYINT NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(primary_id),
);

CREATE TABLE review_status (
  status_id INTEGER NOT NULL,
  status_code VARCHAR(32) NULL,
  PRIMARY KEY(status_id)
);

CREATE TABLE review_store (
  review_id INTEGER NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(review_id, store_id),
);

CREATE TABLE salesrule (
  rule_id INTEGER NOT NULL,
  name VARCHAR(255) NULL,
  description TEXT NULL,
  from_date DATE NOT NULL,
  to_date DATE NOT NULL,
  coupon_code VARCHAR(255) NOT NULL,
  uses_per_coupon INTEGER NULL,
  uses_per_customer INTEGER NULL,
  customer_group_ids VARCHAR(255) NULL,
  is_active TINYINT NULL,
  conditions_serialized TEXT NULL,
  actions_serialized TEXT NULL,
  stop_rules_processing TINYINT NULL,
  is_advanced INTEGER NULL,
  product_ids TEXT NOT NULL,
  sort_order INTEGER NULL,
  simple_action VARCHAR(32) NULL,
  discount_amount DECIMAL NULL,
  discount_qty DECIMAL NOT NULL,
  discount_step INTEGER NULL,
  simple_free_shipping INTEGER NULL,
  times_used INTEGER NULL,
  is_rss TINYINT NULL,
  website_ids TEXT NOT NULL,
  PRIMARY KEY(rule_id),
);

CREATE TABLE salesrule_customer (
  rule_customer_id INTEGER NOT NULL,
  rule_id INTEGER NULL,
  customer_id INTEGER NULL,
  times_used INTEGER NULL,
  PRIMARY KEY(rule_customer_id),
);

CREATE TABLE sales_flat_order_item (
  item_id INTEGER NOT NULL,
  order_id INTEGER NULL,
  parent_item_id INTEGER NOT NULL,
  quote_item_id INTEGER NOT NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  product_id INTEGER NOT NULL,
  product_type VARCHAR(255) NOT NULL,
  product_options TEXT NOT NULL,
  weight DECIMAL NOT NULL,
  is_virtual INTEGER NOT NULL,
  sku VARCHAR(255) NULL,
  name VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  applied_rule_ids TEXT NOT NULL,
  additional_data TEXT NOT NULL,
  free_shipping INTEGER NULL,
  is_qty_decimal INTEGER NOT NULL,
  no_discount INTEGER NOT NULL,
  qty_backordered DECIMAL NOT NULL,
  qty_canceled DECIMAL NOT NULL,
  qty_invoiced DECIMAL NOT NULL,
  qty_ordered DECIMAL NOT NULL,
  qty_refunded DECIMAL NOT NULL,
  qty_shipped DECIMAL NOT NULL,
  cost DECIMAL NOT NULL,
  price DECIMAL NULL,
  base_price DECIMAL NULL,
  original_price DECIMAL NOT NULL,
  base_original_price DECIMAL NOT NULL,
  tax_percent DECIMAL NOT NULL,
  tax_amount DECIMAL NOT NULL,
  base_tax_amount DECIMAL NOT NULL,
  tax_invoiced DECIMAL NOT NULL,
  base_tax_invoiced DECIMAL NOT NULL,
  discount_percent DECIMAL NOT NULL,
  discount_amount DECIMAL NOT NULL,
  base_discount_amount DECIMAL NOT NULL,
  discount_invoiced DECIMAL NOT NULL,
  base_discount_invoiced DECIMAL NOT NULL,
  amount_refunded DECIMAL NOT NULL,
  base_amount_refunded DECIMAL NOT NULL,
  row_total DECIMAL NULL,
  base_row_total DECIMAL NULL,
  row_invoiced DECIMAL NULL,
  base_row_invoiced DECIMAL NULL,
  row_weight DECIMAL NOT NULL,
  gift_message_id INTEGER NOT NULL,
  gift_message_available INTEGER NOT NULL,
  base_tax_before_discount VARCHAR(255) NOT NULL,
  tax_before_discount VARCHAR(255) NOT NULL,
  PRIMARY KEY(item_id),
);

CREATE TABLE sales_flat_quote (
  entity_id INTEGER NOT NULL,
  store_id INTEGER NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  converted_at DATETIME NULL,
  is_active INTEGER NOT NULL,
  is_virtual INTEGER NOT NULL,
  is_multi_shipping INTEGER NOT NULL,
  items_count INTEGER NOT NULL,
  items_qty DECIMAL NOT NULL,
  orig_order_id INTEGER NOT NULL,
  store_to_base_rate DECIMAL NOT NULL,
  store_to_quote_rate DECIMAL NOT NULL,
  base_currency_code VARCHAR(255) NOT NULL,
  store_currency_code VARCHAR(255) NOT NULL,
  quote_currency_code VARCHAR(255) NOT NULL,
  grand_total DECIMAL NOT NULL,
  base_grand_total DECIMAL NOT NULL,
  checkout_method VARCHAR(255) NOT NULL,
  customer_id INTEGER NOT NULL,
  customer_tax_class_id INTEGER NOT NULL,
  customer_group_id INTEGER NOT NULL,
  customer_email VARCHAR(255) NOT NULL,
  customer_prefix VARCHAR(40) NOT NULL,
  customer_firstname VARCHAR(255) NOT NULL,
  customer_middlename VARCHAR(40) NOT NULL,
  customer_lastname VARCHAR(255) NOT NULL,
  customer_suffix VARCHAR(40) NOT NULL,
  customer_dob DATETIME NOT NULL,
  customer_note VARCHAR(255) NOT NULL,
  customer_note_notify INTEGER NOT NULL,
  customer_is_guest INTEGER NOT NULL,
  customer_taxvat VARCHAR(255) NOT NULL,
  remote_ip VARCHAR(32) NOT NULL,
  applied_rule_ids VARCHAR(255) NOT NULL,
  reserved_order_id VARCHAR(64) NOT NULL,
  password_hash VARCHAR(255) NOT NULL,
  coupon_code VARCHAR(255) NOT NULL,
  subtotal VARCHAR(255) NOT NULL,
  base_subtotal VARCHAR(255) NOT NULL,
  subtotal_with_discount VARCHAR(255) NOT NULL,
  base_subtotal_with_discount VARCHAR(255) NOT NULL,
  gift_message_id VARCHAR(255) NOT NULL,
  PRIMARY KEY(entity_id),
);

CREATE TABLE sales_flat_quote_address (
  address_id INTEGER NOT NULL,
  quote_id INTEGER NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  customer_id INTEGER NOT NULL,
  save_in_address_book TINYINT NOT NULL,
  customer_address_id INTEGER NOT NULL,
  address_type VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  prefix VARCHAR(40) NOT NULL,
  firstname VARCHAR(255) NOT NULL,
  middlename VARCHAR(40) NOT NULL,
  lastname VARCHAR(255) NOT NULL,
  suffix VARCHAR(40) NOT NULL,
  company VARCHAR(255) NOT NULL,
  street VARCHAR(255) NOT NULL,
  city VARCHAR(255) NOT NULL,
  region VARCHAR(255) NOT NULL,
  region_id INTEGER NOT NULL,
  postcode VARCHAR(255) NOT NULL,
  country_id VARCHAR(255) NOT NULL,
  telephone VARCHAR(255) NOT NULL,
  fax VARCHAR(255) NOT NULL,
  same_as_billing INTEGER NULL,
  free_shipping INTEGER NULL,
  collect_shipping_rates INTEGER NULL,
  shipping_method VARCHAR(255) NULL,
  shipping_description VARCHAR(255) NULL,
  weight DECIMAL NULL,
  subtotal DECIMAL NULL,
  base_subtotal DECIMAL NULL,
  subtotal_with_discount DECIMAL NULL,
  base_subtotal_with_discount DECIMAL NULL,
  tax_amount DECIMAL NULL,
  base_tax_amount DECIMAL NULL,
  shipping_amount DECIMAL NULL,
  base_shipping_amount DECIMAL NULL,
  shipping_tax_amount DECIMAL NOT NULL,
  base_shipping_tax_amount DECIMAL NOT NULL,
  discount_amount DECIMAL NULL,
  base_discount_amount DECIMAL NULL,
  grand_total DECIMAL NULL,
  base_grand_total DECIMAL NULL,
  customer_notes TEXT NOT NULL,
  applied_taxes TEXT NOT NULL,
  gift_message_id VARCHAR(255) NOT NULL,
  PRIMARY KEY(address_id),
);

CREATE TABLE sales_flat_quote_address_item (
  address_item_id INTEGER NOT NULL,
  parent_item_id INTEGER NOT NULL,
  quote_address_id INTEGER NULL,
  quote_item_id INTEGER NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  applied_rule_ids TEXT NOT NULL,
  additional_data TEXT NOT NULL,
  weight DECIMAL NOT NULL,
  qty DECIMAL NULL,
  discount_amount DECIMAL NOT NULL,
  tax_amount DECIMAL NOT NULL,
  row_total DECIMAL NULL,
  base_row_total DECIMAL NULL,
  row_total_with_discount DECIMAL NOT NULL,
  base_discount_amount DECIMAL NOT NULL,
  base_tax_amount DECIMAL NOT NULL,
  row_weight DECIMAL NOT NULL,
  gift_message_id VARCHAR(255) NOT NULL,
  PRIMARY KEY(address_item_id),
);

CREATE TABLE sales_flat_quote_item (
  item_id INTEGER NOT NULL,
  quote_id INTEGER NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  product_id INTEGER NOT NULL,
  parent_item_id INTEGER NOT NULL,
  is_virtual INTEGER NOT NULL,
  sku VARCHAR(255) NULL,
  name VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  applied_rule_ids TEXT NOT NULL,
  additional_data TEXT NOT NULL,
  free_shipping INTEGER NULL,
  is_qty_decimal INTEGER NOT NULL,
  no_discount INTEGER NOT NULL,
  weight DECIMAL NOT NULL,
  qty DECIMAL NULL,
  price DECIMAL NULL,
  base_price DECIMAL NULL,
  custom_price DECIMAL NOT NULL,
  discount_percent DECIMAL NOT NULL,
  discount_amount DECIMAL NOT NULL,
  base_discount_amount DECIMAL NOT NULL,
  tax_percent DECIMAL NOT NULL,
  tax_amount DECIMAL NOT NULL,
  base_tax_amount DECIMAL NOT NULL,
  row_total DECIMAL NULL,
  base_row_total DECIMAL NULL,
  row_total_with_discount DECIMAL NOT NULL,
  row_weight DECIMAL NOT NULL,
  product_type VARCHAR(255) NOT NULL,
  base_tax_before_discount VARCHAR(255) NOT NULL,
  tax_before_discount VARCHAR(255) NOT NULL,
  original_custom_price VARCHAR(255) NOT NULL,
  gift_message_id VARCHAR(255) NOT NULL,
  PRIMARY KEY(item_id),
);

CREATE TABLE sales_flat_quote_item_option (
  option_id INTEGER NOT NULL,
  item_id INTEGER NULL,
  product_id INTEGER NULL,
  code VARCHAR(255) NULL,
  value TEXT NULL,
  PRIMARY KEY(option_id),
);

CREATE TABLE sales_flat_quote_payment (
  payment_id INTEGER NOT NULL,
  quote_id INTEGER NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  method VARCHAR(255) NOT NULL,
  cc_type VARCHAR(255) NOT NULL,
  cc_number_enc VARCHAR(255) NOT NULL,
  cc_last4 VARCHAR(255) NOT NULL,
  cc_cid_enc VARCHAR(255) NOT NULL,
  cc_owner VARCHAR(255) NOT NULL,
  cc_exp_month INTEGER NOT NULL,
  cc_exp_year INTEGER NOT NULL,
  cc_ss_owner VARCHAR(255) NOT NULL,
  cc_ss_start_month INTEGER NOT NULL,
  cc_ss_start_year INTEGER NOT NULL,
  cybersource_token VARCHAR(255) NOT NULL,
  paypal_correlation_id VARCHAR(255) NOT NULL,
  paypal_payer_id VARCHAR(255) NOT NULL,
  paypal_payer_status VARCHAR(255) NOT NULL,
  po_number VARCHAR(255) NOT NULL,
  ideal_issuer_id VARCHAR(255) NOT NULL,
  ideal_issuer_list VARCHAR(255) NOT NULL,
  PRIMARY KEY(payment_id),
);

CREATE TABLE sales_flat_quote_shipping_rate (
  rate_id INTEGER NOT NULL,
  address_id INTEGER NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  carrier VARCHAR(255) NOT NULL,
  carrier_title VARCHAR(255) NOT NULL,
  code VARCHAR(255) NOT NULL,
  method VARCHAR(255) NOT NULL,
  method_description TEXT NOT NULL,
  price DECIMAL NULL,
  PRIMARY KEY(rate_id),
);

CREATE TABLE sales_order (
  entity_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_set_id INTEGER NULL,
  increment_id VARCHAR(50) NULL,
  parent_id INTEGER NULL,
  store_id INTEGER NOT NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  is_active INTEGER NULL,
  customer_id INTEGER NOT NULL,
  tax_amount DECIMAL NULL,
  shipping_amount DECIMAL NULL,
  discount_amount DECIMAL NULL,
  subtotal DECIMAL NULL,
  grand_total DECIMAL NULL,
  total_paid DECIMAL NULL,
  total_refunded DECIMAL NULL,
  total_qty_ordered DECIMAL NULL,
  total_canceled DECIMAL NULL,
  total_invoiced DECIMAL NULL,
  total_online_refunded DECIMAL NULL,
  total_offline_refunded DECIMAL NULL,
  base_tax_amount DECIMAL NULL,
  base_shipping_amount DECIMAL NULL,
  base_discount_amount DECIMAL NULL,
  base_subtotal DECIMAL NULL,
  base_grand_total DECIMAL NULL,
  base_total_paid DECIMAL NULL,
  base_total_refunded DECIMAL NULL,
  base_total_qty_ordered DECIMAL NULL,
  base_total_canceled DECIMAL NULL,
  base_total_invoiced DECIMAL NULL,
  base_total_online_refunded DECIMAL NULL,
  base_total_offline_refunded DECIMAL NULL,
  subtotal_refunded DECIMAL NOT NULL,
  subtotal_canceled DECIMAL NOT NULL,
  tax_refunded DECIMAL NOT NULL,
  tax_canceled DECIMAL NOT NULL,
  shipping_refunded DECIMAL NOT NULL,
  shipping_canceled DECIMAL NOT NULL,
  base_subtotal_refunded DECIMAL NOT NULL,
  base_subtotal_canceled DECIMAL NOT NULL,
  base_tax_refunded DECIMAL NOT NULL,
  base_tax_canceled DECIMAL NOT NULL,
  base_shipping_refunded DECIMAL NOT NULL,
  base_shipping_canceled DECIMAL NOT NULL,
  subtotal_invoiced DECIMAL NOT NULL,
  tax_invoiced DECIMAL NOT NULL,
  shipping_invoiced DECIMAL NOT NULL,
  base_subtotal_invoiced DECIMAL NOT NULL,
  base_tax_invoiced DECIMAL NOT NULL,
  base_shipping_invoiced DECIMAL NOT NULL,
  shipping_tax_amount DECIMAL NOT NULL,
  base_shipping_tax_amount DECIMAL NOT NULL,
  PRIMARY KEY(entity_id),
);

CREATE TABLE sales_order_datetime (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DATETIME NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE sales_order_decimal (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DECIMAL NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE sales_order_entity (
  entity_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_set_id INTEGER NULL,
  increment_id VARCHAR(50) NULL,
  parent_id INTEGER NULL,
  store_id INTEGER NOT NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  is_active INTEGER NULL,
  PRIMARY KEY(entity_id),
);

CREATE TABLE sales_order_entity_datetime (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DATETIME NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE sales_order_entity_decimal (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value DECIMAL NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE sales_order_entity_int (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value INTEGER NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE sales_order_entity_text (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value TEXT NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE sales_order_entity_varchar (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE sales_order_int (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value INTEGER NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE sales_order_tax (
  tax_id INTEGER NOT NULL,
  order_id INTEGER NULL,
  code VARCHAR(255) NULL,
  title VARCHAR(255) NULL,
  percent DECIMAL NULL,
  amount DECIMAL NULL,
  priority INTEGER NULL,
  position INTEGER NULL,
  base_amount DECIMAL NULL,
  process SMALLINT NULL,
  base_real_amount DECIMAL NULL,
  PRIMARY KEY(tax_id),
);

CREATE TABLE sales_order_text (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value TEXT NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE sales_order_varchar (
  value_id INTEGER NOT NULL,
  entity_type_id INTEGER NULL,
  attribute_id INTEGER NULL,
  entity_id INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(value_id),
);

CREATE TABLE sendfriend_log (
  log_id INTEGER NOT NULL,
  ip INTEGER NULL,
  time INTEGER NULL,
  PRIMARY KEY(log_id),
);

CREATE TABLE shipping_tablerate (
  pk INTEGER NOT NULL,
  website_id INTEGER NULL,
  dest_country_id VARCHAR(4) NULL,
  dest_region_id INTEGER NULL,
  dest_zip VARCHAR(10) NULL,
  condition_name VARCHAR(20) NULL,
  condition_value DECIMAL NULL,
  price DECIMAL NULL,
  cost DECIMAL NULL,
  PRIMARY KEY(pk),
);

CREATE TABLE sitemap (
  sitemap_id INTEGER NOT NULL,
  sitemap_type VARCHAR(32) NOT NULL,
  sitemap_filename VARCHAR(32) NOT NULL,
  sitemap_path TEXT NOT NULL,
  sitemap_time TIMESTAMP NOT NULL,
  store_id INTEGER NULL,
  PRIMARY KEY(sitemap_id),
);

CREATE TABLE tag (
  tag_id INTEGER NOT NULL,
  name VARCHAR(255) NULL,
  status SMALLINT NULL,
  PRIMARY KEY(tag_id)
);

CREATE TABLE tag_relation (
  tag_relation_id INTEGER NOT NULL,
  tag_id INTEGER NULL,
  customer_id INTEGER NULL,
  product_id INTEGER NULL,
  store_id INTEGER NULL,
  active INTEGER NULL,
  created_at DATETIME NOT NULL,
  PRIMARY KEY(tag_relation_id),
);

CREATE TABLE tag_summary (
  tag_id INTEGER NULL,
  store_id INTEGER NULL,
  customers INTEGER NULL,
  products INTEGER NULL,
  uses INTEGER NULL,
  historical_uses INTEGER NULL,
  popularity INTEGER NULL,
  PRIMARY KEY(tag_id, store_id),
);

CREATE TABLE tax_calculation (
  tax_calculation_rate_id INTEGER NULL,
  tax_calculation_rule_id INTEGER NULL,
  customer_tax_class_id SMALLINT NULL,
  product_tax_class_id SMALLINT NULL,
);

CREATE TABLE tax_calculation_rate (
  tax_calculation_rate_id INTEGER NOT NULL,
  tax_country_id CHAR NULL,
  tax_region_id MEDIUMINT NULL,
  tax_postcode VARCHAR(12) NULL,
  code VARCHAR(255) NULL,
  rate DECIMAL NULL,
  PRIMARY KEY(tax_calculation_rate_id),
);

CREATE TABLE tax_calculation_rate_title (
  tax_calculation_rate_title_id INTEGER NOT NULL,
  tax_calculation_rate_id INTEGER NULL,
  store_id INTEGER NULL,
  value VARCHAR(255) NULL,
  PRIMARY KEY(tax_calculation_rate_title_id),
);

CREATE TABLE tax_calculation_rule (
  tax_calculation_rule_id INTEGER NOT NULL,
  code VARCHAR(255) NULL,
  priority MEDIUMINT NULL,
  position MEDIUMINT NULL,
  PRIMARY KEY(tax_calculation_rule_id),
);

CREATE TABLE tax_class (
  class_id SMALLINT NOT NULL,
  class_name VARCHAR(255) NULL,
  class_type CHAR NULL,
  PRIMARY KEY(class_id)
);

CREATE TABLE wishlist (
  wishlist_id INTEGER NOT NULL,
  customer_id INTEGER NULL,
  shared INTEGER NOT NULL,
  sharing_code VARCHAR(32) NULL,
  PRIMARY KEY(wishlist_id),
);

CREATE TABLE wishlist_item (
  wishlist_item_id INTEGER NOT NULL,
  wishlist_id INTEGER NULL,
  product_id INTEGER NULL,
  store_id INTEGER NULL,
  added_at DATETIME NOT NULL,
  description TEXT NOT NULL,
  PRIMARY KEY(wishlist_item_id),
);


