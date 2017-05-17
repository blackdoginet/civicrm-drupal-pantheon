<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Batch/Batch.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:f1b35f9cc4e12f1d4c2b026aacca7e50)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Batch_DAO_Batch constructor.
 */
class CRM_Batch_DAO_Batch extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_batch';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = false;
  /**
   * Unique Address ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Variable name/programmatic handle for this batch.
   *
   * @var string
   */
  public $name;
  /**
   * Friendly Name.
   *
   * @var string
   */
  public $title;
  /**
   * Description of this batch set.
   *
   * @var text
   */
  public $description;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * When was this item created
   *
   * @var datetime
   */
  public $created_date;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $modified_id;
  /**
   * When was this item created
   *
   * @var datetime
   */
  public $modified_date;
  /**
   * FK to Saved Search ID
   *
   * @var int unsigned
   */
  public $saved_search_id;
  /**
   * fk to Batch Status options in civicrm_option_values
   *
   * @var int unsigned
   */
  public $status_id;
  /**
   * fk to Batch Type options in civicrm_option_values
   *
   * @var int unsigned
   */
  public $type_id;
  /**
   * fk to Batch mode options in civicrm_option_values
   *
   * @var int unsigned
   */
  public $mode_id;
  /**
   * Total amount for this batch.
   *
   * @var float
   */
  public $total;
  /**
   * Number of items in a batch.
   *
   * @var int unsigned
   */
  public $item_count;
  /**
   * fk to Payment Instrument options in civicrm_option_values
   *
   * @var int unsigned
   */
  public $payment_instrument_id;
  /**
   *
   * @var datetime
   */
  public $exported_date;
  /**
   * cache entered data
   *
   * @var longtext
   */
  public $data;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_batch';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'modified_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'saved_search_id', 'civicrm_saved_search', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch ID') ,
          'description' => 'Unique Address ID',
          'required' => true,
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Batch Name') ,
          'description' => 'Variable name/programmatic handle for this batch.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Batch Title') ,
          'description' => 'Friendly Name.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 1,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Batch Description') ,
          'description' => 'Description of this batch set.',
          'rows' => 4,
          'cols' => 80,
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 1,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Created By') ,
          'description' => 'FK to Contact ID',
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Batch Created Date') ,
          'description' => 'When was this item created',
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'modified_id' => array(
          'name' => 'modified_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Modified By') ,
          'description' => 'FK to Contact ID',
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'modified_date' => array(
          'name' => 'modified_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Batch Modified Date') ,
          'description' => 'When was this item created',
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
        ) ,
        'saved_search_id' => array(
          'name' => 'saved_search_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Smart Group') ,
          'description' => 'FK to Saved Search ID',
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_SavedSearch',
          'html' => array(
            'type' => 'EntityRef',
          ) ,
        ) ,
        'status_id' => array(
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Status') ,
          'description' => 'fk to Batch Status options in civicrm_option_values',
          'required' => true,
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'batch_status',
            'optionEditPath' => 'civicrm/admin/options/batch_status',
          )
        ) ,
        'type_id' => array(
          'name' => 'type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Type') ,
          'description' => 'fk to Batch Type options in civicrm_option_values',
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'batch_type',
            'optionEditPath' => 'civicrm/admin/options/batch_type',
          )
        ) ,
        'mode_id' => array(
          'name' => 'mode_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Mode') ,
          'description' => 'fk to Batch mode options in civicrm_option_values',
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'batch_mode',
            'optionEditPath' => 'civicrm/admin/options/batch_mode',
          )
        ) ,
        'total' => array(
          'name' => 'total',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Batch Total') ,
          'description' => 'Total amount for this batch.',
          'precision' => array(
            20,
            2
          ) ,
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'item_count' => array(
          'name' => 'item_count',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Number of Items') ,
          'description' => 'Number of items in a batch.',
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'payment_instrument_id' => array(
          'name' => 'payment_instrument_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Payment Method') ,
          'description' => 'fk to Payment Instrument options in civicrm_option_values',
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'payment_instrument',
            'optionEditPath' => 'civicrm/admin/options/payment_instrument',
          )
        ) ,
        'exported_date' => array(
          'name' => 'exported_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Batch Exported Date') ,
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
        ) ,
        'data' => array(
          'name' => 'data',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Batch Data') ,
          'description' => 'cache entered data',
          'table_name' => 'civicrm_batch',
          'entity' => 'Batch',
          'bao' => 'CRM_Batch_BAO_Batch',
          'localizable' => 0,
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'batch', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'batch', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array(
      'UI_name' => array(
        'name' => 'UI_name',
        'field' => array(
          0 => 'name',
        ) ,
        'localizable' => false,
        'unique' => true,
        'sig' => 'civicrm_batch::1::name',
      ) ,
    );
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}
