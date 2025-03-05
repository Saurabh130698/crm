<?php
/* Smarty version 4.5.3, created on 2025-03-02 05:50:39
  from 'C:\xampp\htdocs\crm\include\utils\recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67c3e39f846d05_16430773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49de358fb150ef0138a44f4c70ad4f3150ac0ef3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\include\\utils\\recaptcha_disabled.tpl',
      1 => 1740889923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c3e39f846d05_16430773 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
