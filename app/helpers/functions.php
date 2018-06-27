<?php

function get_formatted_date($date)
{
  return date('M j,  Y', strtotime($date));
}
