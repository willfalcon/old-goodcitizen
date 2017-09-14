<?php

$rowNum = get_row_index();
$rowMargins = get_sub_field( 'row_margins' );


if ($rowMargins['row_mt']) {
  echo '
  margin-top: ' . $rowMargins['row_mt'] . ';';
} elseif ($rowMargins['row_my']) {
  echo '
  margin-top: ' . $rowMargins['row_my'] . ';';
} else {
  echo '
  margin-top: 5%;';
}

if ($rowMargins['row_mb']) {
  echo '
  margin-bottom: ' . $rowMargins['row_mb'] . ';';
} elseif ($rowMargins['row_my']) {
  echo '
  margin-bottom: ' . $rowMargins['row_my'] . ';';
} else {
  echo '
  margin-bottom: 5%;';
}

if ($rowMargins['row_mr']) {
  echo '
  margin-right: ' . $rowMargins['row_mr'] . ';';
} elseif ($rowMargins['row_mx']) {
  echo '
  margin-right: ' . $rowMargins['row_mx'] . ';';
} else {
  echo '
  margin-right: 5%;';
}

if ($rowMargins['row_ml']) {
  echo '
  margin-left: ' . $rowMargins['row_ml'] . ';';
} elseif ($rowMargins['row_mx']) {
  echo '
  margin-left: ' . $rowMargins['row_mx'] . ';';
} else {
  echo '
  margin-left: 5%;';
}

echo '
}';

// Set up Desktop-size row settings.
echo '@media (min-width: 768px) {
.gc-row-' . $rowNum . ' {';

if ( get_sub_field( 'row_height_md' ) ) {
  echo '
  height: ' . $rowHeight . ';';
}

$mdRowMargins = get_sub_field( 'row_margins_md' );

if ($mdRowMargins['row_mt']) {
  echo '
  margin-top: ' . $mdRowMargins['row_mt'] . ';';
} elseif ($mdRowMargins['row_my']) {
  echo '
  margin-top: ' . $mdRowMargins['row_my'] . ';';
}

if ($mdRowMargins['row_mb']) {
  echo '
  margin-bottom: ' . $mdRowMargins['row_mb'] . ';';
} elseif ($mdRowMargins['row_my']) {
  echo '
  margin-bottom: ' . $mdRowMargins['row_my'] . ';';
}

if ($mdRowMargins['row_mr']) {
  echo '
  margin-right: ' . $mdRowMargins['row_mr'] . ';';
} elseif ($mdRowMargins['row_mx']) {
  echo '
  margin-right: ' . $mdRowMargins['row_mx'] . ';';
}

if ($mdRowMargins['row_ml']) {
  echo '
  margin-left: ' . $mdRowMargins['row_ml'] . ';';
} elseif ($mdRowMargins['row_mx']) {
  echo '
  margin-left: ' . $mdRowMargins['row_mx'] . ';';
}

  echo '
  }
}';

?>
