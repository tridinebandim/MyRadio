/**
 * The MyURY Standard Form JavaScript Tools
 * This file initialises jQuery validation, autocompletes and other resources
 * needed for a MyURY Form
 */
$(document).ready(function() {
  /**
   * Initialises the Date pickers where necessary
   */
  $('fieldset.myuryfrm input.date').datepicker({dateFormat:"dd/mm/yy"});
  $('fieldset.myuryfrm input.datetime').datetimepicker({dateFormat:"dd/mm/yy"});
});