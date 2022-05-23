<?php 


/**
 * Create validation 
 */
function validate($msg, $type = 'danger'){
    return "<p class=\"alert alert-{$type} d-flex justify-content-between\"> {$msg} <button
    data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
}


/**
 * GPA cal
 */

function gpa($marks) {
    $gpa = null;

    if($marks >= 0 && $marks < 33) {
        $gpa = 0;
    }
    if($marks >= 33 && $marks < 40) {
        $gpa = 1;
    }
    if($marks >= 40 && $marks < 50) {
        $gpa = 2;
    }
    if($marks >= 50 && $marks < 60) {
        $gpa = 3;
    }
    if($marks >= 60 && $marks < 70) {
        $gpa = 4;
    }
    if($marks >= 70 && $marks < 80) {
        $gpa = 4.50;
    }
    if($marks >= 80 && $marks < 100) {
        $gpa = 5;
    }

    return $gpa;
}
/**
 *  Grade cal
 */
function grade($marks) {
    $grade = null;

    if($marks >= 0 && $marks < 33) {
        $grade = 'f';
    }
    if($marks >= 33 && $marks < 40) {
        $grade = 'd';
    }
    if($marks >= 40 && $marks < 50) {
        $grade = 'c';
    }
    if($marks >= 50 && $marks < 60) {
        $grade = 'b';
    }
    if($marks >= 60 && $marks < 70) {
        $grade = 'a';
    }
    if($marks >= 70 && $marks < 80) {
        $grade = 'a-';
    }
    if($marks >= 80 && $marks < 100) {
        $grade = 'a+';
    }

    return $grade;
}
/**
 * cgpa
 */
function cgpa($bn, $eng, $math, $sci, $ssci, $rel) {
    $tolal_gpa = gpa($bn) + gpa($eng) + gpa($math) + gpa($sci) + gpa($ssci) +gpa($rel);

    if($bn < 33 || $eng < 33 || $math < 33 || $sci < 33 || $ssci < 33 || $rel <33) {
        return "";
    } else{
        return $tolal_gpa / 6;
    }
}
/**
 * Result 
 */

function result($bn, $eng, $math, $sci, $ssci, $rel) {

    if($bn < 33 || $eng < 33 || $math < 33 || $sci < 33 || $ssci < 33 || $rel < 33) {
        return '<span style="color:red; font-weight:bold;">failed</span>';
    } else {
        return '<span style="color:green; font-weight:bold;">passed</span>';
    }
}







?>