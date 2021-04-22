<?php

function calculatePercenteage($item)
{
  $percentage = [];
  if (isPresent($item->trackings, 'employ')) {
    array_push($percentage,10);
  }  
  if (isPresent($item->trackings, 'supervisor')) {
    array_push($percentage,10);
   
  } 
  if (isPresent($item->trackings, 'department_head')) {
    array_push($percentage,10);
  } 
  if (isPresent($item->trackings, 'director')) {
    array_push($percentage,20);
    if ($item->scanned_document4 != '') {
      array_push($percentage,10);
    }  
    if ($item->scanned_document5 != '') {
      array_push($percentage,10);

    } 
     if ($item->scanned_document6 != '') {
      array_push($percentage,10);

    }  
    if ($item->scanned_document7 != '') {
      array_push($percentage,20);
    } 
  } 
  return array_sum($percentage);;
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