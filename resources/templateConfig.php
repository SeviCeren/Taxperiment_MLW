<?php
/**
 * Created by PhpStorm.
 * User: andreas
 * Date: 21.11.19
 * Time: 11:36
 */

$incomeLabel = "income";
$taxLabel = "tax";
$auditLabel = "audit";
$fineLabel = "fine";
$sureGainLabel = "sure gain";
$evRiskyLabel = "EV risky";

/*
 *     let taxRate = "Tax (" +  <?php echo $taxRate*100 ?> + "%): " + <?php echo $mostRecentScore*$taxRate; ?> + " ECU " + "^";
    let auditProbability = <?php echo $auditProbability*100 ?> + "% chance" +  "^";
    let fineRate = "Payback + " +  <?php echo $fineRate ?> + "00%" + "`";
    let income =  <?php echo $mostRecentScore ?> + " ECU" + "`";
    let txt = auditProbability + fineRate + taxRate + income + "c0_inner^" + "c1_inner";
 */

$taxPercentage = doubleval($taxRate) * 100;
$auditPercentage = doubleval($auditProbability) * 100;
$taxDue = intVal($income) * doubleval($taxRate);

$incomeContent = "$income ECU";
$taxContent = "Tax($taxPercentage): $taxDue ECU";
$auditContent = "$auditPercentage% chance";
$fineContent = "Payback + " . $fineRate . "00%";
$evRiskyContent = "ev_risky_content";
$sureGainContent = "sure_gain_content";



$mouselabBoxArray = array(
    1 => array(
        "label" =>"$incomeLabel^$taxLabel`$auditLabel^$fineLabel`$sureGainLabel^$evRiskyLabel",
        "content" => "$incomeContent^$taxContent`$auditContent^$fineContent`$sureGainContent^$evRiskyContent"),
    2 => array(
        "label" =>"$auditLabel^$fineLabel`$incomeLabel^$taxLabel`$sureGainLabel^$evRiskyLabel",
        "content" => "$auditContent^$fineContent`$incomeContent^$taxContent`$sureGainContent^$evRiskyContent"),
    3 => array(
        "label" =>"$taxLabel^$incomeLabel`$fineLabel^$auditLabel`$evRiskyLabel^$sureGainLabel",
        "content" => "$taxContent^$incomeContent`$fineContent^$auditContent`$evRiskyContent^$sureGainContent"),
    4 => array(
        "label" =>"$fineLabel^$auditLabel`$taxLabel^$incomeLabel`$sureGainLabel^$evRiskyLabel",
        "content" => "$fineContent^$auditContent`$taxContent^$incomeContent`$sureGainContent^$evRiskyContent"),
    5 => array(
        "label" =>"$auditLabel^$fineLabel`$incomeLabel^$taxLabel`$sureGainLabel^$evRiskyLabel",
        "content" => "$auditContent^$fineContent`$incomeContent^$taxContent`$sureGainContent^$evRiskyContent"),
    6 => array(
        "label" =>"$incomeLabel^$taxLabel`$auditLabel^$fineLabel`$sureGainLabel^$evRiskyLabel",
        "content" => "$incomeContent^$taxContent`$auditContent^$fineContent`$sureGainContent^$evRiskyContent"),
    7 => array(
        "label" =>"$fineLabel^$auditLabel`$taxLabel^$incomeLabel`$evRiskyLabel^$sureGainLabel",
        "content" => "$fineContent^$auditContent`$taxContent^$incomeContent`$evRiskyContent^$sureGainContent"),
    8 => array(
        "label" =>"$taxLabel^$incomeLabel`$fineLabel^$auditLabel`$sureGainLabel^$evRiskyLabel",
        "content" => "$taxContent^$incomeContent`$fineContent^$auditContent`$sureGainContent^$evRiskyContent"),
);

$currentBox = $mouselabBoxArray[$condition];