<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (!$is_admin) { // 관리자가 아닌 상태는 적용기간에 해당되는 데이터만 출력.
    $wz_sql_search .= " and ('". G5_TIME_YMD ."' between wr_1 and wr_2) ";
}