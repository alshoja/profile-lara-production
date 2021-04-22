<?php

function calculatePercenteage($item)
{
  $percentage = 0;
  if (isPresent($item->trackings, 'employ')) {
    $percentage = 10;
  } else 
  if (isPresent($item->trackings, 'supervisor')) {
    $percentage = 20;
  } else
  if (isPresent($item->trackings, 'department_head')) {
    $percentage = 30;
  } else
  if (isPresent($item->trackings, 'director')) {
    $percentage = 50;
    // if ($item->scanned_document4 != '') {
    //   $percentage = $percentage + 10;
    // } else if ($item->scanned_document5 != '') {
    //   $percentage = $percentage + 10;
    // } else if ($item->scanned_document6 != '') {
    //   $percentage = $percentage + 10;
    // } else if ($item->scanned_document7 != '') {
    //   $percentage = $percentage + 20;
    // } else {
    // $percentage = 50;
    // }
  } else {
    $percentage = 0;
  }

  return $percentage;
}

function isPresent($trackings, $compare)
{
  foreach ($trackings as $sub_array) {
    if (@$sub_array['from'] === $compare) {
      return true;
    }
  }
  return false;
}