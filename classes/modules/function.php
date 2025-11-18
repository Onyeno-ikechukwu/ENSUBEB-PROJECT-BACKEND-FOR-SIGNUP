<?php

function mediaValidation($img1,  $head, $write){
  if (empty($img1) || empty($head) || empty($write)) {
    return true;
  } else {
    return false;
  }
}