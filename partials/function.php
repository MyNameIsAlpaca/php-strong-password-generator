<?php 

function randomPassword($lengthPass) {

  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~!@#$%^&*(){}[],./?';

  return substr(str_shuffle($permitted_chars), 0, $lengthPass);

};