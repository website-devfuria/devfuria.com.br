CREATE TABLE wp_commentmeta (
  meta_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  comment_id BIGINT(20) UNSIGNED NOT NULL,
  meta_key VARCHAR(255) NULL,
  meta_value LONGTEXT NULL,
  PRIMARY KEY(meta_id)
);

CREATE TABLE wp_comments (
  comment_ID BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  comment_post_ID BIGINT(20) UNSIGNED NOT NULL,
  comment_author TINYTEXT NOT NULL,
  comment_author_email VARCHAR(100) NOT NULL,
  comment_author_url VARCHAR(200) NOT NULL,
  comment_author_IP VARCHAR(100) NOT NULL,
  comment_date DATETIME NOT NULL,
  comment_date_gmt DATETIME NOT NULL,
  comment_content TEXT NOT NULL,
  comment_karma INT(11) NOT NULL,
  comment_approved VARCHAR(20) NOT NULL,
  comment_agent VARCHAR(255) NOT NULL,
  comment_type VARCHAR(20) NOT NULL,
  comment_parent BIGINT(20) UNSIGNED NOT NULL,
  user_id BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY(comment_ID)
);

CREATE TABLE wp_links (
  link_id BIGINT(20) UNSIGNED NOT NULL,
  link_url VARCHAR(255) NOT NULL,
  link_name VARCHAR(255) NOT NULL,
  link_image VARCHAR(255) NOT NULL,
  link_target VARCHAR(25) NOT NULL,
  link_description VARCHAR(255) NOT NULL,
  link_visible VARCHAR(20) NOT NULL,
  link_owner BIGINT(20) UNSIGNED NOT NULL,
  link_rating INT(11) NOT NULL,
  link_updated DATETIME NOT NULL,
  link_rel VARCHAR(255) NOT NULL,
  link_notes MEDIUMTEXT NOT NULL,
  link_rss VARCHAR(255) NOT NULL,
  PRIMARY KEY(link_id)
);

CREATE TABLE wp_options (
  option_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  blog_id INT(11) NOT NULL,
  option_name VARCHAR(64) NOT NULL,
  option_value LONGTEXT NOT NULL,
  autoload VARCHAR(20) NOT NULL,
  PRIMARY KEY(option_id)
);

CREATE TABLE wp_postmeta (
  meta_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  post_id BIGINT(20) UNSIGNED NOT NULL,
  meta_key VARCHAR(255) NULL,
  meta_value LONGTEXT NULL,
  PRIMARY KEY(meta_id)
);

CREATE TABLE wp_posts (
  ID BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  post_author BIGINT(20) UNSIGNED NOT NULL,
  post_date DATETIME NOT NULL,
  post_date_gmt DATETIME NOT NULL,
  post_content LONGTEXT NOT NULL,
  post_title TEXT NOT NULL,
  post_excerpt TEXT NOT NULL,
  post_status VARCHAR(20) NOT NULL,
  comment_status VARCHAR(20) NOT NULL,
  ping_status VARCHAR(20) NOT NULL,
  post_password VARCHAR(20) NOT NULL,
  post_name VARCHAR(200) NOT NULL,
  to_ping TEXT NOT NULL,
  pinged TEXT NOT NULL,
  post_modified DATETIME NOT NULL,
  post_modified_gmt DATETIME NOT NULL,
  post_content_filtered TEXT NOT NULL,
  post_parent BIGINT(20) UNSIGNED NOT NULL,
  guid VARCHAR(255) NOT NULL,
  menu_order INT(11) NOT NULL,
  post_type VARCHAR(20) NOT NULL,
  post_mine_type VARCHAR(200) NOT NULL,
  comment_count BIGINT(20) NOT NULL,
  PRIMARY KEY(ID)
);

CREATE TABLE wp_terms (
  term_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(200) NOT NULL,
  slug VARCHAR(200) NOT NULL,
  term_group BIGINT(10) NOT NULL,
  PRIMARY KEY(term_id)
);

CREATE TABLE wp_term_relationships (
  object_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  term_taxonomy_id BIGINT(20) UNSIGNED NOT NULL,
  term_order INT(11) NOT NULL,
  PRIMARY KEY(object_id, term_taxonomy_id)
);

CREATE TABLE wp_term_taxonomy (
  term_taxonomy_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  term_id BIGINT(20) UNSIGNED NOT NULL,
  taxonomy VARCHAR(32) NOT NULL,
  description LONGTEXT NOT NULL,
  parent BIGINT(20) UNSIGNED NOT NULL,
  count BIGINT(20) NOT NULL,
  PRIMARY KEY(term_taxonomy_id)
);

CREATE TABLE wp_usermeta (
  umeta_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  user_id BIGINT(20) UNSIGNED NOT NULL,
  meta_key VARCHAR(255) NULL,
  meta_value LONGTEXT NULL,
  PRIMARY KEY(umeta_id)
);

CREATE TABLE wp_users (
  ID BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  user_login VARCHAR(60) NOT NULL,
  user_pass VARCHAR(64)) NOT NULL,
  user_nicename VARCHAR(50) NOT NULL,
  user_email VARCHAR(100) NOT NULL,
  user_url VARCHAR(100) NOT NULL,
  user_registered DATETIME NOT NULL,
  user_activation_key VARCHAR(60) NOT NULL,
  user_status INT(11) NOT NULL,
  display_name VARCHAR(250) NOT NULL,
  PRIMARY KEY(ID)
);


