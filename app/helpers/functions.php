<?php

function get_formatted_date($date)
{
  return date('l jS \of F Y', strtotime($date));
}
